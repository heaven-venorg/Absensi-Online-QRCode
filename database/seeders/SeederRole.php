<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class SeederRole extends Seeder
{
    public function run()
    {
        echo "Menjalankan Seeder Role\n";
        Role::create(
            [
                'role' => 'admin',
            ],
        );

        Role::create([
            'role' => 'user'
        ]);

        echo "Menjalankan Seeder Role Berhasil";
    }
}