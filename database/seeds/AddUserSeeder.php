<?php

use Illuminate\Database\Seeder;

class AddUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user1 = new \App\User;
        $user1->username = "budi";
        $user1->name = "Budi Santoso";
        $user1->email = "budi@mail.com";
        $user1->password = \Hash::make("budi");
        $user1->level ="staff";
        $user1->save();

        $user2 = new \App\User;
        $user2->username = "dita";
        $user2->name = "Dita Susanti";
        $user2->email = "dita@mail.com";
        $user2->password = \Hash::make("dita");
        $user2->level ="staff";
        $user2->save();

        $user3 = new \App\User;
        $user3->username = "dika";
        $user3->name = "Dika Cahyani";
        $user3->email = "dika@mail.com";
        $user3->password = \Hash::make("dika");
        $user3->level = "staff";
        $user3->save();
        $this->command->info("User dibuat");
    }
}
