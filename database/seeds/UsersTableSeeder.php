<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {     
           DB::table('users')->insert([
            'name' => 'a',
            'email' => 'a@a.a',
            'password' => crypt('aaaaaaaa'),
            ]);
            DB::table('users')->insert([
                'name' => 'b',
                'email' => 'b@b.b',
                'password' => crypt('bbbbbbbb'),
                ]);
            
        factory(App\User::class, 10)->create();

    }
}
