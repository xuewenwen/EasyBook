<?php

namespace App;

use App\Model;
//表=>Posts
class Post extends Model
{
      public  function  user()

      {

         /* return $this->belongsTo('App\User','user_id',id);*/
          return $this->belongsTo('App\User');
      }
}
