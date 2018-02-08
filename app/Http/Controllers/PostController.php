<?php

namespace App\Http\Controllers;
use App\Post;
use App\Zan;
class PostController extends Controller
{
    public function index()
    {

        $posts=Post::orderBy('created_at','desc')->paginate(5);
        return view("post/index",compact('posts')/*['posts'=>$posts]*/);
    }
    public function show(Post $post)
    {
        return view("post/show",compact('post')/*['title'=>'this is title','*//*isShow'=>true]*/);
    }
    public function create()
    {
        return view("post/cra");
    }
    public function store()
    {
        /*$post =new Post();
        $post->title=request('title');
        $post->content=request('content');
        $post->save();

        $params =['title'=>request('title'),'content'=>request('content')];*/

      /*  $params = request(['title','content']);
        Post::create($params);*/
        $user_id= \Auth::id();
        $params = array_merge(request(['title','content']),compact('user_id'));

        $post =Post::create($params);

        /*dd($post);*/
                   return redirect("/posts");
        //dump and die 打印数据不执行操作
        //dd(\Request::all());

       /* dd(request()->all());*/
    }
    public function edit(Post $post)
    {
        return view("post/edit",compact('post'));
    }
    public function update(Post $post)
    {

        //验证
        //你写文章你才能编辑
        $this->authorize('update','post');
        //逻辑
        $post->title=request('title');
        $post->content=request('content');
        $post->save();

        //渲染
        return redirect("/posts/{$post->id}");

    }
    public function delete(Post $post)
    {
        $this->authorize('delete','post');
      $post->delete();

      //用户权限验证
      return redirect("/posts");
    }

    public function zan(Post $post)
    {
         //
    }

    public function unzan(Post $post)
    {
         //
    }
}

