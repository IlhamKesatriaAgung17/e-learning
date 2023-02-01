<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'Admin001',
            'email'=>'admin001@gmail.com',
            'role'=>1,
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('admin001'),
            'avatar' => 'Admin.png',
            'created_at' => Carbon::now(),
        ]);

        DB::table('users')->insert([
            'name'=>'Dosen001',
            'email'=>'dosen001@gmail.com',
            'role'=>3,
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('dosen001'),
            'avatar' => 'Admin.png',
            'created_at' => Carbon::now(),
        ]);

        DB::table('users')->insert([
            'name'=>'Ilham Kesatria AGung',
            'email'=>'ilhamagung010@gmail.com',
            'role'=>2,
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('ilham123'),
            'avatar' => 'Admin.png',
            'created_at' => Carbon::now(),
        ]);
    }
}
