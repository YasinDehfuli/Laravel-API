<?php

namespace App\Traits;

trait ApiResponser
{
    public function successResponse($data,$code){
        return response()->json(
            [
                'status'=>'succsess',
                'message'=> 'Done!',
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
