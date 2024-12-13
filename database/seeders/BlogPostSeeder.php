<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blog_posts')->insert([
            [
                'title' => 'Sample Title 1',
                'date' => '2024-03-19',
                'author' => 'John Doe',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eget neque a arcu sollicitudin varius ac id mauris. Cras id tellus sit amet mauris pharetra consequat. Integer in elit non ligula congue vehicula at ac libero.',
                'imageurl' => 'sample-image1.jpg',
                'authorimageurl' => 'author1.jpg',
                'status' => 'published',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Sample Title 2',
                'date' => '2024-03-20',
                'author' => 'Jane Smith',
                'content' => 'Sed sit amet purus quis nulla convallis vestibulum. Nam malesuada, velit vel gravida tristique, eros purus congue lorem, vitae consequat magna erat ut arcu. Sed malesuada purus ac ex pharetra, et malesuada ligula tristique.',
                'imageurl' => 'sample-image2.jpg',
                'authorimageurl' => 'author2.jpg',
                'status' => 'draft',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more data as needed
        ]);
    }
}
