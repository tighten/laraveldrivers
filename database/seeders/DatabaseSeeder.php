<?php

namespace Database\Seeders;

use App\Models\Driver;
use App\Models\Type;
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
        Type::factory()->count(10)->create()->each(function ($type) {
            Driver::factory()->count(5)->create([
                'type_id' => $type->id,
            ]);
        });
    }
}
