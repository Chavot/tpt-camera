<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ProductSeeder::class);

        \App\Models\User::factory(20)->create();
        \App\Models\User::factory()->create([
          'name' => 'Christian',
          'email' => 'chidiechere@cock.li',
        ]);


    }
}
