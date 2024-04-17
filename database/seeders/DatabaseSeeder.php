<?php

namespace Database\Seeders;

use App\Models\Inventory;
use App\Models\Employee;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        Inventory::factory()->create([
            'inventoryName' => 'milk',
            'inventoryID' => 'Dairy001'
        ]);
        Inventory::factory()->create([
            'inventoryName' => 'cheese',
            'inventoryID' => 'Dairy002'
        ]);
        Inventory::factory()->create([
            'inventoryName' => 'yogurt',
            'inventoryID' => 'Dairy003'
        ]);


        Employee::factory(20)->create();
    }
}
