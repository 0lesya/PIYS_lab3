<?php

namespace App\Actions;
use App\Models\Article;

class ArticlesQuery
{
    public function findOrFail(int $id) {
            return Article::findOrFail($id);
    }
}
