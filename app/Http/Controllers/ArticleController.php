<?php

namespace App\Http\Controllers;
use App\Actions\PatchArticleAction;
use App\Actions\DeleteAtricleAction;
use App\Actions\CreateArticleAction;
use App\Actions\ArticlesQuery;
use App\Requests\PatchArticleRequest;
use App\Requests\CreateArticleRequest;
use App\Resources\ArticleResource;
use App\Resources\EmptyResource;
use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function create(CreateArticleRequest $request, CreateArticleAction $action){
        return new ArticleResource($action->execute($request->validated()));
    }

    public function patch(int $id, PatchArticleRequest $request, PatchArticleAction $action){
        return new ArticleResource(
            $action->execute($id, $request->validated())
        );
    }

    public function delete(int $id, DeleteAtricleAction $action){
        $action->execute($id);
        return new EmptyResource();
    }

    public function get(int $id, ArticlesQuery $query){
        return new ArticleResource($query->findOrFail($id));
    }
}
