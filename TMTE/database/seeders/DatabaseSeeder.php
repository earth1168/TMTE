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
            ],
            [
                'firstName' => 'user',
                'lastName' => '01',
                'email' => 'user@mail.com',
                'country' => 'UK',
                'password' => Hash::make('1111'),
                'role' => 'user'
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

        DB::table('profiles') -> insert(
            [
                'userID' => 3,
                'profileName' => 'me',
                'playNext' => 1,
                'playTrailer' => 1,
                'kidUser' => 0,
                'language' => 'Thai'
            ]
        );
        DB::table('notifications') -> insert([
            [
                'adminid' => 1,
                'firstname' => 'thiji',
                'lastname' => 'za',
                'role' => 'mediaAdmin',
                'description' => 'หนังดี'
            ]
        );
        $qnoti = DB::table('notifications') -> first();
        $qprofile = DB::table('profiles') -> first();

        DB::table('notificationlogs') -> insert(
            [
                'profileID' => $qprofile -> id,
                'NotiID' => $qnoti -> id
            ]
        );

        
    }
}
