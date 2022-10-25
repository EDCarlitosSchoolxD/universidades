<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Career;
use App\Models\Municipality;
use App\Models\State;
use App\Models\University;
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
        // \App\Models\User::factory(10)->create();
            State::factory(2)->create();
            Municipality::factory(30)->create();
            University::factory(100)->create();
            Career::factory(1000);
            \App\Models\User::factory()->create([
                'name' => 'EDCarlitosxD',
                'email' => 'juanuchdzib@gmail.com',
            ]);
    }
}
