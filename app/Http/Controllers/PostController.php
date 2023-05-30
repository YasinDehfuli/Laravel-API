<?php

namespace App\Http\Controllers;

use App\Models\Post;
use http\Env\Response;
use Illuminate\Http\Request;

class PostController extends ApiController
{
    //
    public function index()
    {
//        return [
//            'name' => 'yasindehfuli.ir',
//        ];
//       return response()->json([
//           'status'=>'error',
//           'message'=>'Error!404',
//           'data'=>Post::all(),
//       ] ,404);

        return $this->successResponse(Post::all(), 200);

//        return $this->successResponse(Post::all(),'SuccessJob!',200);
    }

    public function store(Request $request)
    {
//        dd($request->all());

        $post = Post::create([
            'title' => $request->title,
            'body' => $request->body,
            'image' => $request->image,
            'user_id' => $request->user_id,
        ]);

        return \response()->json([
            'data' => $post
        ]);

    }

}
