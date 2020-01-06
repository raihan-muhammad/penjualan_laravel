<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pegawai;
use Validator;
use Illuminate\Support\Arr;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $pegawai = Pegawai::paginate(5);
        $filterkey = $request->get('keyword');
        if($filterkey){
            $pegawai = Pegawai::where('nama_pegawai', 'LIKE', "%$filterkey%")->paginate(5);
        }
        return view('pegawai.index', compact('pegawai'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pegawai.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $validator = Validator::make($data, [
            'username' => 'required|max:100|unique:pegawai',
            'password' => 'required|min:6|max:50|',
            'nama_pegawai' => 'required|max: 255',
            'alamat' => 'required|max:255'
        ]);

        if($validator->fails()){
            return redirect()->route('pegawai.create')->withErrors($validator)->withInput();
        }

        $data['password'] = password_hash($request->input('password'), PASSWORD_DEFAULT);

        Pegawai::create($data);
        return redirect()->route('pegawai.index')->with('status', 'Pegawai berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pegawai = Pegawai::findOrFail($id);
        return view('pegawai.edit', compact('pegawai'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pegawai = Pegawai::findOrFail($id);
        $data = $request->all();

        $validator = Validator::make($data, [
            'password' => 'sometimes|nullable|min:6|max:50',
            'nama_pegawai' => 'required|max: 255',
            'alamat' => 'required|max:255'
        ]);

        if($validator->fails()){
            return redirect()->route('pegawai.edit', [$id])->withErrors($validator);
        }

        if($request->input('password')){
            $data['password'] = password_hash($request->input('password'), PASSWORD_DEFAULT);
        } else {
            $data = Arr::except($data, ['password']);
        }

        $pegawai->update($data);
        return redirect()->route('pegawai.index')->with('status', 'Pegawai berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
