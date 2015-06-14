<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Input;
use Validator;
use Illuminate\Http\Request;
use Response;
use App\Media;
use Illuminate\Support\Str;


class UploadController extends Controller {

    public function index() {
        return view('Admin/Photos/uploads');
    }

    public function uploadFiles( Request $request ) {

        // GET ALL THE INPUT DATA , $_GET,$_POST,$_FILES.
        $input = Input::all();

        // VALIDATION RULES
        $rules = array(
            'file' => 'image|max:3000',
        );

        // PASS THE INPUT AND RULES INTO THE VALIDATOR
        $validation = Validator::make($input, $rules);

        // CHECK GIVEN DATA IS VALID OR NOT
        if ($validation->fails()) {
            return Redirect()->to('/')->with('message', $validation->errors->first());
        }
        
        $file = array_get($input,'file');
        // SET UPLOAD PATH
        $destinationPath = 'uploads';
        // GET THE FILE EXTENSION
        $extension = $file->getClientOriginalExtension();
        // RENAME THE UPLOAD WITH RANDOM NUMBER
        $fileName = rand(11111, 99999) . '.' . $extension;
        // MOVE THE UPLOADED FILES TO THE DESTINATION DIRECTORY
        $upload_success = $file->move($destinationPath, $fileName);


        $parameters =$request->except('_token');
        //Methode fénéant ;)
        // Article::create($parameters);

        //Méthode à la Mano ...
        $date= new \DateTime(null);
        $media = new Media();
        $media->titre=$parameters['titre'];
        $media->slug= Str::slug($fileName. $date->format('dmYhis'));
        $media->photo= $fileName;
        $media->save();

        // IF UPLOAD IS SUCCESSFUL SEND SUCCESS MESSAGE OTHERWISE SEND ERROR MESSAGE
        if ($upload_success) {
            return Redirect()->to('/admin/upload/liste')->with('message', 'Image uploaded successfully');
        }
    }

    public function listePhoto(){

        $photos= Media::all();


        return view('Admin/Photos/liste')->with('photos',$photos);

    }

}
