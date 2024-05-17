<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();
        // foreach($users as $user){
        //     Post::factory(100)->create(['user_id' => $user_id]);
        // }
        $posts = Post::factory(1000)->make();
        foreach($posts as $post){
            $post->user_id = User::inRandomOrder()->first()->id;
            $post->save();
        }

    }
}
