<?php

namespace App\Model;

readonly class Article
{
    public function __construct(
        public string $title
    ) {}

    public function toHTML(): string
    {
        return "<h1>{$this->title}</h1><p>Hello</p>";
    }
}
