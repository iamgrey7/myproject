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

        // artikel 2
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

        // artikel 3
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

        // artikel 4
        $article4 = new Article; 
        $article4->title = "PHP Advanced"; 
        $article4->author = "Van de Gray"; 
        $article4->content = 
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
        $article4->save(); 

        // artikel 5
        $article5 = new Article; 
        $article5->title = "AngularJS Tutorial"; 
        $article5->author = "Van de Gray"; 
        $article5->content = 
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
        $article5->save(); 

        // artikel 6
        $article6 = new Article; 
        $article6->title = "Tailwind CSS"; 
        $article6->author = "Van de Gray"; 
        $article6->content = 
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
        $article6->save(); 

        // artikel 7
        $article7 = new Article; 
        $article7->title = "Android Programming"; 
        $article7->author = "Van de Gray"; 
        $article7->content = 
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
        $article7->save(); 

        // artikel 8
        $article8 = new Article; 
        $article8->title = "Laravel Documentation"; 
        $article8->author = "Van de Gray"; 
        $article8->content = 
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
        $article8->save(); 

        // artikel 9
        $article9 = new Article; 
        $article9->title = "VueJS Tutorial"; 
        $article9->author = "Van de Gray"; 
        $article9->content = 
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
        $article9->save(); 

        // artikel 3
        $article10 = new Article; 
        $article10->title = "jQuery Intro"; 
        $article10->author = "Van de Gray"; 
        $article10->content = 
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
        $article10->save(); 


    }
}
