<?php

namespace App\Actions;
use App\Models\Article;

class PatchArticleAction
{
    public function execute(int $id, array $fields): Article 
    {
        $article = Article::findOrFail($id);
        $article->update($fields);
        return $article;
    }
}
