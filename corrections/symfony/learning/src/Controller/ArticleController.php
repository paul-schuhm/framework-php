<?php

namespace App\Controller;

use App\Service\ArticleEditor;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Attribute\MapQueryParameter;
use Symfony\Component\Routing\Attribute\Route;

final class ArticleController extends AbstractController
{
    ///articles?title=un titre
    #[Route('/articles', name: 'articles')]
    public function index(#[MapQueryParameter()] string $title, ArticleEditor $editor): Response
    {
        $article = $editor->createArticle($title);
        return new Response($article->toHTML());
    }
}
