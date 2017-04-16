<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Photo;
use App\User;

class Flyer extends Model
{
    //
    protected $fillable = [
      'street','city','state','post_code','country','price','description'
    ];

    public static function locatedAt($post_code,$street)
    {
      $post_code = str_replace(' ', '', $post_code);
      $street = str_replace('-', ' ', $street);

      return static::where(compact('zip','street'))->first();
    }

    public function addPhoto(Photo $photo)
    {
      return $this->photos()->save($photo);
    }

    public function photos()
    {
      return $this->hasMany(Photo::class);
    }

    public function user()
    {
      return $this->belongsTo(User::class);
    }
}
