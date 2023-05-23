<?php

namespace App\Traits;

trait ApiResponser
{
    public function successResponse($data,$message,$code){
        return response()->json(
            [
                'status'=>'succsess',
                'message'=> $message,
                'data'=> $data,
            ] , $code);
    }
    public function errorResponse($message,$code){
        return response()->json(
            [
                'status'=>'Error',
                'message'=> $message,
                'data'=>'',
            ] , $code);
    }
}

?>
