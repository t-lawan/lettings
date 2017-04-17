<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PhotoRequest;
use App\Flyer;
use App\Photo;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class PhotosController extends Controller
{
    //
    public function store($post_code,$street,PhotoRequest $request)
    {

      $flyer = Flyer::locatedAt($post_code, $street);

      if($flyer->user_id !== \Auth::id()) {
        if($request->ajax())
        {
          return response(['No way, Jose'], 403);
        }
        flash()->success('Access Denied', 'This is not your photo');

        return redirect()->back();
      }

      $photo = $this->makePhoto($request->file('photo'));

      Flyer::locatedAt($post_code,$street)->addPhoto($photo);

    }

    public function makePhoto(UploadedFile $file)
    {
          return Photo::named($file->getClientOriginalName())->move($file);
    }
}
