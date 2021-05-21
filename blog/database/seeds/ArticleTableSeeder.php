<?php

use Illuminate\Database\Seeder;
use App\Articles;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       	for ($i=0; $i < 10 ; $i++) { 
       		Articles::create([
       			"title"=> Str::random(10).$i,
       			"content"=> $i . Str::random(10)
       		]);
       	}
    }
}
