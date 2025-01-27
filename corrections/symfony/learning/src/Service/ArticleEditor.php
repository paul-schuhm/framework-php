<?php

namespace App\Service;

use App\Model\Article;


class ArticleEditor{

    public function createArticle(string $title): Article{
        return new Article($title);
    }
}