<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = collect();

        while ($tags->count() < 10) {
            $tag = Tag::firstOrCreate([
                'name' => fake()->word(),
            ]);

            if (! $tags->contains('id', $tag->id)) {
                $tags->push($tag);
            }
        }

        $posts = Post::all();
        foreach($posts as $post) {
            $randTags = $tags->random(rand(0,5));
            $post->tags()->syncWithoutDetaching(collect($randTags)->pluck('id'));
        }
    }
}
