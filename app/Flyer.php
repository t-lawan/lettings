<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Photo;
use App\Message;
use App\User;

class Flyer extends Model
{
    //
    protected $fillable = [
      'user_id','street','city','state','post_code','country','price','description'
    ];

    public static function locatedAt($post_code,$street)
    {

      $street = str_replace('-', ' ', $street);

      return static::where(compact('post_code','street'))->first();
    }

    public function addPhoto(Photo $photo)
    {
      return $this->photos()->save($photo);
    }

    public function photos()
    {
      return $this->hasMany(Photo::class);
    }

    public function messages()
    {
      return $this->hasMany(Message::class);
    }

    public function user()
    {
      return $this->belongsTo(User::class);
    }
}
