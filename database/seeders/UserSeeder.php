<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // ORM Eloquent
        $user = new User();
        $user->document   = 75000001;
        $user->fullname   = 'Alberto Carlos Huevos';
        $user->gender     = 'Male';
        $user->birthdate  = '2005-03-09';
        $user->phone      = '3023799314';
        $user->email      = 'alberthuevos@gmail.com';
        $user->password   = bcrypt('admin');
        $user->role       = 'Administrator';
        $user->save();

        // insert -> Array
        DB::table('users')->insert([
            'document'   => 75000002,
            'fullname'   => 'Ana Maria Lopez',
            'gender'     => 'Female',
            'birthdate'  => '2008-07-15',
            'phone'      => '3015551234',
            'email'      => 'maria@gmail.com',
            'password'   => Hash::make('maria'),
            'created_at' => now()
        ]);

        $user = new User();
        $user->document   = 75000006;
        $user->fullname   = 'David Contreras';
        $user->gender     = 'Male';
        $user->birthdate  = '2005-03-06';
        $user->phone      = '3023712312';
        $user->email      = 'david@gmail.com';
        $user->password   = bcrypt('david');
        $user->save();
    }
}
