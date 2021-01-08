<?php

use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertEquals;

class ArticleTest extends TestCase
{
    protected $article;

    public function setUp():void
    {
        $this->article = new App\Article;
    }

    public function testTitleIsEmptyByDefault()
    {
        $this->assertEmpty($this->article->title);
    }

    public function testSlugIsEmptyWithNoTitle()
    {
        
        //assertEquals just does a boolean comparsion, so null and an empty string are equal
        // $this-assertEquals($article->getSlug(), "");

        //assertSame asserts the values are actually identicle
        $this->assertSame($this->article->getSlug(), "");
    }


}