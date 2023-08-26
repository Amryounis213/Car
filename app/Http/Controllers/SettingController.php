<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\WebsiteSetting;
use Illuminate\Http\Request;

class SettingController extends Controller
{


    //Show Setting Page
    public function index()
    {
        $website = WebsiteSetting::first();
        if(!$website)
            $website = new WebsiteSetting();
        return view('admin.websitesetting.edit', compact('website'));
    }

    public function EditWebsiteData(Request $request)
    {
        $data = $request->validate([
            'facebook' => 'nullable|string',
            'twitter' => 'nullable|string',
            'instagram' => 'nullable|string',
            'youtube' => 'nullable|string',
            'linkedin' => 'nullable|string',
            'github' => 'nullable|string',
            'telegram' => 'nullable|string',
            'whatsapp' => 'nullable|string',
            'phone' => 'nullable|string',
            'tel' => 'nullable|string',
            'email' => 'nullable|string',
            'location' => 'nullable|string',
            'logo' => 'nullable|image',
            'title' => 'nullable|string',
            'desc' => 'nullable|string',
            'key_words' => 'nullable|string',
            'website_name' => 'nullable|string',
            'website_desc' => 'nullable|string',
        ]);
        $data = $request->all();
        $website = WebsiteSetting::first();
        if($website)
            $website->update($data);
        else
            WebsiteSetting::create($data);
        
        
        return redirect()->back()->with('success', 'تم تعديل البيانات بنجاح');

    }



}
