<?php

namespace App\Http\Controllers;

use App\Option;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class SettingsController extends Controller
{
    public function GeneralSettings(){
        $user = Auth::user();
        return view('admin.general_settings', compact('user'));
    }

    public function PaymentSettings(){
        $user = Auth::user();
        return view('admin.payment_settings', compact('user'));
    }
    public function AdSettings(){
        $title = trans('app.ad_settings_and_pricing');
        return view('admin.ad_settings', compact('title'));
    }

    public function StorageSettings(){
        $title = trans('app.file_storage_settings');
        return view('admin.storage_settings', compact('title'));
    }

    public function reCaptchaSettings(){
        $user = Auth::user();
        return view('admin.re_captcha_settings', compact('user'));
    }
    public function BlogSettings(){
        $title = trans('app.blog_settings');
        return view('admin.blog_settings', compact('title'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function update(Request $request) {
        $inputs = array_except($request->input(), ['_token']);

        foreach($inputs as $key => $value) {
            $option = Option::firstOrCreate(['option_key' => $key]);
            $option -> option_value = $value;
            $option->save();
        }
        //check is request comes via ajax?
        if ($request->ajax()){
            return ['success'=>1, 'msg'=>trans('app.settings_saved_msg')];
        }
        return redirect()->back()->with('success', trans('app.settings_saved_msg'));
    }


    public function monetization(){
        $title = trans('app.website_monetization');
        return view('admin.website_monetization', compact('title'));
    }

}
