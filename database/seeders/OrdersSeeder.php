<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insert some dummy orders
        DB::table('orders')->insert([
            [
                'name' => 'John Doe',
                'email' => 'john@example.com',
                'phone' => '123456789',
                'service' => 'Web Design',
                'budget' => '$1000 - $2000',
                'message' => 'This is a web design order.',
                'done' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'jane@example.com',
                'phone' => '987654321',
                'service' => 'Mobile App Development',
                'budget' => '$2000 - $3000',
                'message' => 'This is a mobile app development order.',
                'done' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more orders as needed
        ]);
    }
}
