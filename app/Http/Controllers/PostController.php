<?php

namespace App\Http\Controllers;

use App\Models\Post;
use http\Env\Response;
use Illuminate\Http\Request;

class PostController extends ApiController
{
    //
    public function index(){
//        return [
//            'name' => 'yasindehfuli.ir',
//        ];
//       return response()->json([
//           'status'=>'error',
//           'message'=>'Error!404',
//           'data'=>Post::all(),
//       ] ,404);

        return $this->errorResponse('Error Found!',404);
//        return $this->successResponse(Post::all(),'SuccessJob!',200);


    }



}
