<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function showArticle($nummer){
//        return 'TEST ARTIKEL' . $nummer;
        return view('artikel', [
            'article_id' => $nummer]);
    }
}
