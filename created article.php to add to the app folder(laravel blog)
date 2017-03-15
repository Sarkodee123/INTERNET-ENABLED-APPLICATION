<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //setting mass assignment
    protected $fillable=[
        'title','description','body'
    ];

    //creating relationships

    //$article->user()
    public function User(){
        return $this->belongsTo(User::class);
//        return $this->belongsTo('\App\User','id','user_id');
    }
}
