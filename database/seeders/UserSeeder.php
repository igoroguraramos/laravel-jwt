<?php
 
namespace Database\Seeders;
 
use App\Models\User;
use Illuminate\Database\Seeder;
 
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Igor Ogura Ramos',
            'email' => 'igor@minassolucoes.com.br',
            'password' => bcrypt('12345678'),
        ]);
    }
}