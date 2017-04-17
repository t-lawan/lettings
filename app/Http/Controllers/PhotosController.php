<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PhotoRequest;
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

        return redirect('/');
      }

      $photo = $this->makePhoto($request->file('photo'));

      Flyer::locatedAt($post_code,$street)->addPhoto($photo);

    }
}
