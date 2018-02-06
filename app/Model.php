<?php

namespace App;

use Illuminate\Database\Eloquent\Model as BaseModel;
//表=>Posts
class Model extends BaseModel
{
    protected $guarded=[];//不可以注入的字段  不指定随意
  /*  protected $fillable =['title','content'];*///指定字段
}
