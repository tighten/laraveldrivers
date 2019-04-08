<?php

use App\Driver;
use App\Type;
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
        factory(Type::class, 10)->create()->each(function ($type) {
            factory(Driver::class, 5)->create([
                'type_id' => $type->id,
            ]);
        });
    }
}
