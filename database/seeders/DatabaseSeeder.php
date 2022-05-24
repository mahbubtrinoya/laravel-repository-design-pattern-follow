<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use PhpParser\Node\Expr\Cast\Int_;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        DB::table('contact_list')->insert([
            'firstname' => Str::random(7),
            'lastname' => Str::random(5),
            'number' => Str::random(11),
            'email' => Str::random(11).'@gmail.com',

        ]);

    }
}
