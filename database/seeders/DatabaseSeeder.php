<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Query;
use App\Models\Vote;
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
        \App\Models\User::factory(10)->create();
        \App\Models\Link::factory(10)->create();
        Query::factory(10)->create(['link_id' => random_int(1, 10)]);
        Vote::factory(10)->create([
            'link_id' => 1,
            'vote' => 1
        ]);
        Comment::factory(5)->create();
    }
}
