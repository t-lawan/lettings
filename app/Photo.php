<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Flyer;
use Image;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class Photo extends Model
{
    //
    protected $table = 'flyer_photos';

    protected $fillable = ['name','path','thumbnail_path'];

    protected $baseDir = 'images/photos';

    public function flyer()
    {
      return $this->belongsTo(Flyer::class);
    }

    public static function named($name)
    {
      $photo = new static;

      return $photo->saveAs($name);


    }

    public function saveAs($name)
    {
      // i.e. timestamp - name
      $this->name = sprintf("%s-%s", time(), $name);
      // i.e. flyers/photos/{{photo_name}}
      $this->path = sprintf("%s/%s", $this->baseDir, $this->name);
      // i.e. photos/tn{{photo_name}}
      $this->thumbnail_path = sprintf("%s/tn-%s",$this->baseDir, $this->name);

      return $this;

    }
    public function makeThumbnail()
    {
        Image::make($this->path)->fit(200)->save($this->thumbnail_path);
    }

    public function move(UploadedFile $file)
    {
      $file->move($this->baseDir, $this->name);

      $this->makeThumbnail();

      return $this;
    }


}
