<?php

use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertEquals;

class ArticleTest extends TestCase
{
    public function testTitleIsEmptyByDefault()
    {
        $article = new App\Article;
        $this->assertEmpty($article->title);
    }

    public function testSlugIsEmptyWithNoTitle()
    {
        $article = new App\Article;
        
        //assertEquals just does a boolean comparsion, so null and an empty string are equal
        // $this-assertEquals($article->getSlug(), "");

        //assertSame asserts the values are actually identicle
        $this->assertSame($article->getSlug(), "");
    }
}