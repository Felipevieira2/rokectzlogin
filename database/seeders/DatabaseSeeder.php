<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use DateTime;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        // \App\Models\User::factory(10)->create();
        \DB::table('users')->insert([
            'name'       => 'Felipe Vieira',
            'email'       => 'felipe.vieira@test.com.br',
            'password'    => \Hash::make('1234'),
            'email_verified_at'  =>  new \DateTime()

        ]);
    }
}
