<?php
namespace App\Services;
use App\Interfaces\DataInterface;
use App\Interfaces\HandlerInterface;
use App\Models\Post;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;

class HandlerService implements HandlerInterface
{
    const URL_SUFFIX = '/posts';

    /**
     * @param int $postId
     * @return Post
     */
    public function getPost(int $postId): Post
    {
        $response = $this->getData('/'.$postId);
        $postData = $response->json();
        return $this->newPostFromData($postData);
    }

    /**
     * @return array|Post[]
     */
    public function getAllPosts(): array
    {
        $response = $this->getData();

        $posts =[];
        foreach ($response->json() as $postData){
            $posts[] = $this->newPostFromData($postData);
        }
        return $posts;
    }

    /**
     * @param string $parameter
     * @return Response
     */
    private function getData(string $parameter = ''): Response
    {
        $response = Http::get(env('API_URL').self::URL_SUFFIX.$parameter);
        if(!$response->ok()){
            abort('404');
        }
        return $response;
    }

    /**
     * @param array $postData
     * @return Post
     */
    private function newPostFromData(array $postData):Post
    {
        try{
            return new Post($postData['userId'],
                $postData['id'],
                $postData['title'],
                $postData['body']);
        }catch (\Exception $e){
            abort(400, 'Incorrect data from api');
        }
    }
}
