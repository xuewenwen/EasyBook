<?php

namespace App\Http\Controllers;

use function foo\func;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {

        $posts=[
            ['title'=>"this is title1",

            ],
            ['title'=>"this is title2",

            ],

            ['title'=>"this is title3",

            ]

        ];
        return view("post/index",compact('posts')/*['posts'=>$posts]*/);
    }
    public function show()
    {
        return view("post/show",['title'=>'this is title','isShow'=>true]);
    }
    public function create()
    {
        return view("post/cra");
    }
    public function store()
    {
        return view("post/store");
    }
    public function edit()
    {
        return view("post/edit");
    }
    public function update()
    {
        return view("post/update");
    }
    public function delete()
    {
        return view("post/delete");
    }
}

