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

    /*
    public function testSlugHasSpacesReplacedByUnderscores()
    {
        $this->article->title = "An example article";
        $this->assertEquals($this->article->getSlug(), "An_example_article");

    }

    public function testSlugHasWhitespaceReplacedBySingleUnderscore()
    {
        $this->article->title = "An   example \n   article";
        $this->assertEquals($this->article->getSlug(), "An_example_article");

    }

    public function testSlugDoesNotStartOrEndWithAnUnderscore()
    {
        $this->article->title = " An example article ";
        $this-assertEquals($this->article->getSlug(), "An_example_article");
    
    }

    public function testSlugDoesNotHaveAnyNonWordsCharacters()
    {
        $this->article->title = "Read! This! Now!";
        $this-assertEquals($this->article->getSlug(), "Read_This_Now");

    }
    */

    /**
     * Use Data Providers method
     */

    public function titleProvider ()
    {
        return [
            ["An example article", "An_example_article"],
            ["An    example    \n    article", "An_example_article"],
            [" An example article ", "An_example_article"],
            ["Read! This! Now!", "Read_This_Now"]
        ];
    }

    /**
     * @dataProvider titleProvider
     *
     * @param [type] $title
     * @param [type] $slug
     * @return void
     */
     public function testSlug($title, $slug)
     {
        $this->article->title = $title;
        $this-assertEquals($this->article->getSlug(), $slug);

     }

}