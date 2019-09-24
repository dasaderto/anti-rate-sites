<?php

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
        factory(App\User::class, 50)->create();
        factory(\App\Models\Site::class, 50)->create();
        factory(\App\Models\Post::class, 50)->create();
        factory(\App\Models\ExpertRate::class, 50)->create();
        factory(\App\Models\ExpertComment::class, 50)->create();
        factory(\App\Models\Comment::class, 50)->create();
        factory(\App\Models\SiteComment::class, 50)->create();

        $this->call(RBACSeeder::class);
    }
}
