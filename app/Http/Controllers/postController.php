<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class postController extends Controller
{
 public function index()
{
    $allposts= [
                  ['id'=>1 ,'title'=>'php','posted_by'=>'mohamed','created_at'=>'2023-8-20 07:00:00'],
                  ['id'=>2 ,'title'=>'css','posted_by'=>'ahmed','created_at'=>'2023-8-20 07:50:30'],
                  ['id'=>3 ,'title'=>'java','posted_by'=>'sara','created_at'=>'2023-8-20 03:30:18'],
                  ['id'=>4 ,'title'=>'mysql','posted_by'=>'ebrahiem','created_at'=>'2023-8-20 22:08:50'],
               ];   
               
    return view('posts.index',['posts' =>$allposts]);
}
public function show($postId)
{
    $singlePost=['id'=>1 ,
    'title'=>'php',
    'posted_by'=>'mohamed',
    'created_at'=>'2023-8-20 07:00:00',
    'description'=>'this is description'
 ];
    return view('posts.show', ['post' => $singlePost]);
}
public function create()
{
    return view('posts.create');
}

public function store()
{
 $data = request()->all();
 return $data ;
 


 return to_route('posts.index') ;
 
 
 
 
}

public function edit()
{
    return view('posts.edit');
}

public function delete()
{
    return view('posts.delete');
}

public function update()
{

 return to_route('posts.show',1) ;
 $data = request()->all();    
return $data ;
  
}
public function destroy()
{
    return to_route('posts.index');
}

}