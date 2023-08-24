<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Skema;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $skema = [
            ['name' => 'Skema 1', 'start_date' => '2023-08-25', 'end_date' => '2023-08-26'],
            ['name' => 'Skema 2', 'start_date' => '2023-08-23', 'end_date' => '2023-08-24'],
            ['name' => 'Skema 3', 'start_date' => '2023-08-23', 'end_date' => '2023-08-25'],
            ['name' => 'Skema 4', 'start_date' => '2023-08-24', 'end_date' => '2023-08-27'],
            ['name' => 'Skema 5', 'start_date' => '2023-08-23', 'end_date' => '2023-08-29'],
        ];
        DB::table('skemas')->insert($skema);
    }
}
