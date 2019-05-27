<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        App\User::create([
            'id' => '1',
            'name' => 'Taro',
            'email' => 'taro@example.com',
            'email_verified_at' =>now(),
            'password' => bcrypt('YOUR-PASSWORD'),
            'remember_token' =>'aaa',
            'created_at' =>now(),
            'updated_at' =>now()
        ]);
    }
}
/*
$table->bigIncrements('id');
$table->string('name');
$table->string('email')->unique();
$table->timestamp('email_verified_at')->nullable();
$table->string('password');
$table->rememberToken();
$table->timestamps();
*/
