<?php

namespace Database\Seeders;

use App\Models\UserJwt;
use Illuminate\Database\Seeder;

class UserJwtSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserJwt::create([
            'name' => 'Igor Ogura Ramos',
            'email' => 'igor@minassolucoes.com.br',
            'password' => bcrypt('12345678'),
        ]);
    }
}
