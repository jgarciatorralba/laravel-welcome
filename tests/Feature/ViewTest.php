<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Http\Controllers\ArticlesController;

class ViewTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testPagesControllerMethodProjectReturnsCorrespondingView()
    {
        $response = $this->get('/project');
        $response->assertViewIs('pages.project');
    }

    public function testArticlesControllerMethodIndexPassesDataToView()
    {
        $response = $this->get('/articles');
        $response->assertViewHas('articles');
    }
}
