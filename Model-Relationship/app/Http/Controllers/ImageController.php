<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ImageUpload;

class ImageController extends Controller
{
    public function home()
    {
        return view('image.home');
    }
    public function create()
    {
        return view('image.create');
    }

    public function store()
    {
        // $data = $req->validate([
        //     'name' => 'required|min:5',
        //     'email' => 'required|email',
        //     'dob' => 'required',
            
        // ]);


        $object = ImageUpload::create($this->validateRequest());
        $this->storeImage($object);

        return redirect('show');
    }

    public function show()
    {
        $objects = ImageUpload::all();
        return view('image.show',compact('objects'));
    }

    private function validateRequest()
    {

        return tap(request()->validate([

            'name' => 'required|min:5',
            'email' => 'required|email',
            'dob' => 'required',

        ]), function() {

            if(request()->hasFile('image')) {
                request()->validate([
                    'image' => 'file|image|max:5000'
                ]);
            }
            else {
                redirect('show')->with("msg","you didn't upload profile image,it would be look better if you do that");
            }
        });
    
    }

    private function storeImage($object)
    {
        if(request()->has('image')) {
            $object->update([
                'image' => request()->image->store('uploads','public'),
            ]);
        }
    }
}
