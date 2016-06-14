<?php

use Illuminate\Database\Seeder;
// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;
use App\Post;
use App\Comment;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

        $this->call(PostsTableSeeder::class);
        $this->call(CommentsTableSeeder::class);
    }
}

class PostsTableSeeder extends Seeder
{
    public function run()
    {
        TestDummy::times(50)->create('App\Post');
    }
}

class CommentsTableSeeder extends Seeder
{
    public function run()
    {
        TestDummy::times(20)->create('App\Comment');
    }
}

