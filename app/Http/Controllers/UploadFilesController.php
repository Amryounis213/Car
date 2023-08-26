<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\ContactUs;
use App\Models\EpisodeAudio;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadFilesController extends Controller
{
    public function upload(Request $request)
    {
        if ($request->hasFile('images')) {
            $folder = uniqid('car_', true);
            foreach($request->images as $key => $image)
            {
                $sound_path = $request->file('images')[$key]->store('uploads/images/' . $folder , 'public');
                Image::create([
                    'image' => $sound_path,
                    'folder' => $folder ,
                ]);
    
            }
           
            return $folder;
        }
    }

    public function revert1()
    {
         $folder = request()->getContent();
         return Storage::disk('public')->deleteDirectory('uploads/audio/' . $folder);
        //  Storage::deleteDirectory('uploads/audio/'. $folder);
    }

    public function store(Request $request)
    {
        // return $request->all();
        $request->validate([
            'email'=>'required|email',
            'name'=>'required',
            'subject'=>'required',
        ] , [
            'email.required'=> __('dashboard.email_required'),
            'email.email'=> __('dashboard.email_email'),
            'name.required'=> __('dashboard.username_required'),
            'subject.required'=> __('dashboard.subject_required'),
        ]);



        $contact = ContactUs::create($request->all());
        return response()->json([
            'status' => true,
            'message' => __('dashboard.contactSuccess'),
            'contact' => $contact
        ], 200);
    }
    
}
