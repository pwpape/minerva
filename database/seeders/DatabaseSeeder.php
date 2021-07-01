<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Budget;
use App\Models\Ledger;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        Category::truncate();
        Budget::truncate();

        $user = User::factory(10)->create();

        Category::create([
            'name' => 'Mortgage/Rent',
            'type' => 'Housing'
        ]);

        Category::create([
            'name' => 'Life Insurance',
            'type' => 'Insurance'
        ]);

        Category::create([
            'name' => 'Disability Insurance',
            'type' => 'Insurance'
        ]);

        Category::create([
            'name' => 'LTC Insurance',
            'type' => 'Insurance'
        ]);

        Category::create([
            'name' => 'Health Insurance',
            'type' => 'Insurance'
        ]);

        Category::create([
            'name' => 'Home & Auto Insurance',
            'type' => 'Insurance'
        ]);

        Category::create([
            'name' => 'Electricity',
            'type' => 'Utility'
        ]);

        Category::create([
            'name' => 'Gas',
            'type' => 'Utility'
        ]);

        Category::create([
            'name' => 'Water',
            'type' => 'Utility'
        ]);

        Category::create([
            'name' => 'Streaming',
            'type' => 'Entertainment'
        ]);

        Category::create([
            'name' => 'Sports',
            'type' => 'Entertainment'
        ]);

    }
}
