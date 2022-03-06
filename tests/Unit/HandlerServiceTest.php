<?php

namespace Tests\Unit;

use App\Models\Post;
use App\Services\HandlerService;
use Tests\TestCase;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
class HandlerServiceTest extends TestCase
{
    protected HandlerService $handlerService;

    /**
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $this->handlerService = new HandlerService();

    }


    /**
     * @return void
     */
    public function testGetAllPost():void
    {
        $expectedPostsArray = $this->handlerService->getAllPosts();
        $this->assertIsArray($expectedPostsArray);
        $this->assertCount(100, $expectedPostsArray);
        $this->assertContainsOnlyInstancesOf(Post::class, $expectedPostsArray);
    }

    /**
     * @return void
     */
    public function testGetPostPass():void
    {
        $expectedPost = $this->handlerService->getPost(1);
        $this->assertInstanceOf(Post::class, $expectedPost);
        $this->assertEquals(1, $expectedPost->getId());
    }

    /**
     * @return void
     */
    public function testGetPostFail():void
    {
        $this->expectException(NotFoundHttpException::class);
        $this->handlerService->getPost(101);

    }
}
