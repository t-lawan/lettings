<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Flyer;

class Message extends Model
{
    //
    protected $fillable = [
      'body','name','email'
    ];

    public function flyer()
    {
      return $this->belongsTo(Flyer::class);
    }
}
