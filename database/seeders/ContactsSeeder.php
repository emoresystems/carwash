<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insert some dummy contacts
        DB::table('contacts')->insert([
            [
                'name' => 'John Doe',
                'email' => 'john@example.com',
                'phone' => '123456789',
                'subject' => 'Inquiry',
                'message' => 'This is an inquiry message.',
                'subscribe' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'jane@example.com',
                'phone' => '987654321',
                'subject' => 'Feedback',
                'message' => 'This is a feedback message.',
                'subscribe' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more contacts as needed
        ]);
    }
}
