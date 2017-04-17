<?php

namespace App\Http\Controllers;

use App\Flyer;
use App\Photo;
use Illuminate\Http\Request;
use App\Http\Requests\FlyerRequest;
use Symfony\Component\HttpFoundation\File\UploadedFile;


class FlyersController extends Controller
{

    public function __construct()
    {
      $this->middleware('auth' ,['except' =>  ['show']]);

      parent::__construct();
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //
        $flyers = Flyer::all();
        return view('flyers.index', compact('flyers'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        flash()->info('Create a listing', 'Please enter your details in the form to create the listing');

        return view('flyers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FlyerRequest $request)
    {
        //
        $flyer = new Flyer($request->all());
        auth()->user()->make($flyer);

        flash()->success('Success', 'Your flyer has been created');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($post_code,$street)
    {

        $flyer = Flyer::locatedAt($post_code,$street);
        return view('flyers.show', compact('flyer'));
    }

    public function addPhoto($post_code,$street,Request $request)
    {

      $this->validate($request,[
        'photo' => 'required|mimes:jpg,jpeg,png,bmp'
      ]);

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

    public function makePhoto(UploadedFile $file)
    {
          return Photo::named($file->getClientOriginalName())->move($file);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
