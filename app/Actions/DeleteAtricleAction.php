<?php

namespace App\Actions;
use App\Models\Article;


class DeleteAtricleAction
{
    public function execute(int $id, array $fields): Article 
    {
        $article = Article::findOrFail($id);
        if ($article) {
            $article->delete();
          }
    }
}

