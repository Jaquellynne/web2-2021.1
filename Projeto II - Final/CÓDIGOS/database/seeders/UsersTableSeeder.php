<?php
namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin Admin',
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'),
            'nivelAcesso' => 1,
            'endereco' => 'Rua da Palha',
            'cpf' => '876.765.234-89',
            'telefone' => '(77) 3678-8922',
            'dataNascimento' => '2003-01-12',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
