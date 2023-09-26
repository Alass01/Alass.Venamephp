<?php

namespace App\Http\Controllers\Api;
use  App\Http\Requests\CreatePostRequest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Posts;
use Exception;

class PostController extends Controller
{
   public function index(){

    return 'liste des article';


   }

   public function store(CreatePostRequest $request){

   try {

    $post = new Posts();

    $post->titre =$request-> titre;
    $post->description =$request->description;
    $post->prix =$request ->prix;

    $post -> save();

    return response()->json([
        'status'=> 200,
        'status_message'=>'Post ajouter avec success',
        'data'=>$post

    ]);


   } catch (Exception $e) {
    return response()->json($e);
   }

   }

   public function update(){
    
   }
}
