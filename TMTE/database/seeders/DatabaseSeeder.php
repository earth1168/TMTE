<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'firstName' => 'media',
                'lastName' => 'admin',
                'email' => 'media@mail.com',
                'country' => 'UK',
                'password' => Hash::make('admin'),
                'role' => 'mediaAdmin'
            ],
            [
                'firstName' => 'service',
                'lastName' => 'admin',
                'email' => 'service@mail.com',
                'country' => 'UK',
                'password' => Hash::make('admin'),
                'role' => 'serviceAdmin'
            ]
        ]);

        DB::table('packages')->insert([
            [
                'packageName' => 'Mobile',
                'resolution' => 'SD',
                'price' => 99.00
            ],
            [
                'packageName' => 'Basic',
                'resolution' => 'SD',
                'price' => 279.00
            ],
            [
                'packageName' => 'Standard',
                'resolution' => 'HD',
                'price' => 349.00
            ],
            [
                'packageName' => 'Premium',
                'resolution' => 'Ultra HD',
                'price' => 419.00
            ]
        ]);
    }
}
