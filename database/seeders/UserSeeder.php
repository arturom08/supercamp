<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{   
    private $users = [
        [
            'nombre' => 'arturo',
            'apellido' => 'medina',
            'email' => 'arturom7k@gmail.com',
            'telefono' => '04241421797',
            'dni' => '18511205',
            'password' => 'arturo1234',
        ],
        [
            'nombre' => 'amilcar',
            'apellido' => 'medina',
            'email' => 'amillk@gmail.com',
            'password' => 'amilkar1234',
        ],
    ];
    /**
     * Run the database seeds.
     */
    public function run()
    {
        foreach ($this->users as $user) {
            $user['password'] = bcrypt($user['password']);
            $user = User::create($user);
        }
    }
}
