<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use App\Interfaces\DataInterface;

class PostsController extends Controller
{
    /**
     * @param DataInterface $data
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index(DataInterface $data)
    {
        return PostResource::collection($data->getPostHandler()->getAllPosts());
    }

    /**
     * @param DataInterface $data
     * @param $id
     * @return PostResource
     */
    public function show(DataInterface $data, $id):PostResource
    {
        return new PostResource($data->getPostHandler()->getPost(intval($id)));
    }
}
