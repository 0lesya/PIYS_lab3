<?php

namespace App\Actions;
use App\Models\Article;

class CreateArticleAction
{
    public function execute(array $fields): Article 
    {
        $article->create($fields);
        return $article;
    }
}


