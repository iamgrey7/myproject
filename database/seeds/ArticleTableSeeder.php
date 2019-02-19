<?php

use Illuminate\Database\Seeder;
use\App\Article;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // artikel 1
        $article1 = new Article; 
        $article1->title = "PHP For Beginner"; 
        $article1->author = "Ujang Suryana"; 
        $article1->content = 
        "Lorem Ipsum is simply dummy text of the printing and typesetting 
        industry. Lorem Ipsum has been the industry's standard dummy 
        text ever since the 1500s, when an unknown printer took a 
        galley of type and scrambled it to make a type specimen book. 
        It has survived not only five centuries, but also the leap into 
        electronic typesetting, remaining essentially unchanged. 
        It was popularised in the 1960s with the release of Letraset 
        sheets containing Lorem Ipsum passages, and more recently with 
        desktop publishing software like Aldus PageMaker including versions 
        of Lorem Ipsum."; 
        $article1->save(); 

        // artikel 1
        $article2 = new Article; 
        $article2->title = "Laravel Tips and Tricks"; 
        $article2->author = "Dr. Hank Pym"; 
        $article2->content = 
        "Lorem Ipsum is simply dummy text of the printing and typesetting 
        industry. Lorem Ipsum has been the industry's standard dummy 
        text ever since the 1500s, when an unknown printer took a 
        galley of type and scrambled it to make a type specimen book. 
        It has survived not only five centuries, but also the leap into 
        electronic typesetting, remaining essentially unchanged. 
        It was popularised in the 1960s with the release of Letraset 
        sheets containing Lorem Ipsum passages, and more recently with 
        desktop publishing software like Aldus PageMaker including versions 
        of Lorem Ipsum."; 
        $article2->save(); 

        // artikel 1
        $article3 = new Article; 
        $article3->title = "Bootstrap Cheatseets"; 
        $article3->author = "Van de Gray"; 
        $article3->content = 
        "Lorem Ipsum is simply dummy text of the printing and typesetting 
        industry. Lorem Ipsum has been the industry's standard dummy 
        text ever since the 1500s, when an unknown printer took a 
        galley of type and scrambled it to make a type specimen book. 
        It has survived not only five centuries, but also the leap into 
        electronic typesetting, remaining essentially unchanged. 
        It was popularised in the 1960s with the release of Letraset 
        sheets containing Lorem Ipsum passages, and more recently with 
        desktop publishing software like Aldus PageMaker including versions 
        of Lorem Ipsum."; 
        $article3->save(); 

    }
}
