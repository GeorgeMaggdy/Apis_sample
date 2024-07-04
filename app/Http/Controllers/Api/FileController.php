<?php

namespace App\Http\Controllers\Api;

use App\Models\post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use Illuminate\Support\Facades\Validator;

class FileController extends Controller
{
    use ApiResponseTrait;
    public function index()
    {

        $posts = PostResource::collection(post::all());


        return $this->apiResponse($posts, 'We are done', 200);
    }


    public function show($id)
    {

        //The way we use the ApiResource ,, we write inside the brackets the code we want to retrieve the info with.
        $post = post::find($id);


        if ($post) {

            return $this->apiResponse(new PostResource($post), 'We are done', 200);
        }


        return $this->apiResponse(null, 'This post is unavailabe', 401);

    }

    public function store(REQUEST $request)
    {

        $validator = Validator::make($request->all(), [
            'title' => 'required|unique:posts|max:255',
            'posted_by' => 'required',
        ]);

        if ($validator->fails()) {

            return $this->apiResponse(null, $validator->errors(), 400);

        }


        $post = post::create($request->all());

        if ($post) {

            return $this->apiResponse(new PostResource($post), 'the post inserted successfully!', 201);
        }
        return $this->apiResponse(null, 'the post is not saved', 400);
    }


    public function update(Request $request, $id)
    {



        $validator = Validator::make($request->all(), [
            'title' => 'required|unique:posts|max:255',
            'posted_by' => 'required',
        ]);

        if ($validator->fails()) {

            return $this->apiResponse(null, $validator->errors(), 400);

        }

        $posts = post::find($id);
        if (!$posts) {

            return $this->apiResponse(null, 'the post is not updated!', 400);
        } 
        $posts->update([

            'title' => $request->title,
            'posted_by' => $request->posted_by
        ]);
      
        return $this->apiResponse(new PostResource($posts), 'the post upated successfully!', 201);

    }
} 
