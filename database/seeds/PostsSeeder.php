<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str; //per far funzionare la funzione che genera lo slug
use App\Post; //includo il model

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0 ; $i < 10 ; $i++){
          $newPost = new Post(); //creo una nuova istanza di Post

          $newPost->title = "post numero " . ($i + 1);
          $newPost->slug = Str::slug($newPost->title ,'-');
          $newPost->content = 'Lorem ipsum dolor sit amet consectetur adipisicing 
                              elit. Eveniet, consequatur commodi? 
                              Ullam maiores, vitae illo non nobis veniam labore? Quos.';
          $newPost->save();
        }

    }
}
