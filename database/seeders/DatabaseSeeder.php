<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AdminSeeder::class);
        // \App\Models\User::factory(10)->create();
        // User::create([
        //     'name'=>'Ilham Kesatria Agung',
        //     'email'=>'ilhamkesatriaagung@gmail.com',
        //     'password'=>Hash::make('admin123'),
        //     'role'=>'Admin',
        //     'id_user' => 'NULL'
        // ]);
    }
}
