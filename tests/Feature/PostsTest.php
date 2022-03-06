<?php

namespace Tests\Feature;
use Tests\TestCase;

class PostsTest extends TestCase
{
    /**
     *
     * @return void
     */
    public function testAllPostRoute():void
    {
        $response = $this->get('/posts');
        $response->assertStatus(200);
        $content = json_decode($response->getContent());
        $this->assertIsArray($content);
        $this->assertEquals(1, $content[0]->id);
        $this->assertEquals(100, $content[99]->id);
    }
    /**
     *
     * @return void
     */
    public function testPostRoutePass():void
    {
        $response = $this->get('/posts/1');
        $response->assertStatus(200);
        $content = json_decode($response->getContent());
        $this->assertEquals(1, $content->userId);
        $this->assertEquals(1, $content->id);
    }
    /**
     *
     * @return void
     */
    public function testPostRouteFail():void
    {
        $response = $this->get('/posts/101');
        $response->assertStatus(404);
    }
}
