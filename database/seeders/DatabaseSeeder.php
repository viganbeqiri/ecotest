<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Client;
use App\Models\Opportunity;
use App\Models\User;
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
//        $user = User::factory()->create([
//            'name' => 'John Doe'
//        ]);
//
//        Opportunity::factory()->create([
//            'user_id' => $user->id
//        ]);

        User::factory()->count(10)->create();
        Opportunity::factory()->count(10)->create();
        Client::factory()->count(10)->create();


    }
}
