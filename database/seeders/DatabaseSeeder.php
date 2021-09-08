<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    
    public function run()
    {

     $user = User::factory()->create([
        'name' => 'John Doe'
      ]);
      
Post::factory(5)->create([
  'user_id' => $user->id
]);

     
    }
}
