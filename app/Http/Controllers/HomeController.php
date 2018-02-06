<?php

namespace App\Http\Controllers;

use App\Campaign;
use App\Category;
use App\Mail\ContactUs;
use App\Mail\ContactUsSendToSender;
use App\Mail\ContactUsPartner;
use App\Mail\ContactUsSendToPartner;
use App\Mail\Empfehlung;
use App\Payment;
use Illuminate\Support\Facades\Auth;
use App\User;
use App;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $title = trans('Herzlich Willkommen!');

        return view('home', compact('title'));
    }

    /**
     * @return mixed
     */
    public function newCampaignsAjax(){
        $new_campaigns = Campaign::whereStatus(1)->orderBy('id', 'desc')->paginate(20);
        $new_campaigns->withPath('ajax/new-campaigns');

        if ($new_campaigns->count()){
            return view('new_campaigns_ajax', compact('new_campaigns'));
        }
        return ['success' => false];
    }

    public function contactUs(){
        $title = trans('app.contact_us');
        return view('contact_us', compact('title'));
    }

    public function contactUsPost(Request $request){
        $rules = [
            'name'  => 'required',
            'email'  => 'required|email',
            'subject'  => 'required',
        ];
        if (get_option('enable_recaptcha_contact_form') == 1){
            $rules['g-recaptcha-response'] = 'required';
        }
        $this->validate($request, $rules);

        if (get_option('enable_recaptcha_contact_form') == 1) {
            $secret = get_option('recaptcha_secret_key');
            $gRecaptchaResponse = $request->input('g-recaptcha-response');
            $remoteIp = $request->ip();

            $recaptcha = new \ReCaptcha\ReCaptcha($secret);
            $resp = $recaptcha->verify($gRecaptchaResponse, $remoteIp);
            if (!$resp->isSuccess()) {
                return redirect()->back()->with('error', 'reCAPTCHA is not verified');
            }
        }

        try{
            Mail::send(new ContactUs($request));
            Mail::send(new ContactUsSendToSender($request));
        }catch (\Exception $exception){
            return redirect()->back()->with('error', '<h4>'.trans('app.smtp_error_message').'</h4>'. $exception->getMessage());
        }

        return redirect()->back()->with('success', trans('app.message_has_been_sent'));
    }

    public function contactUsPostGift(Request $request){
        $rules = [
            'name'  => 'required',
            'email'  => 'required|email',
            'empfehlungsname'  => 'required',
            'empfehlungsadresse'  => 'required',
            'gutschein'  => 'required',
        ];

        $this->validate($request, $rules);

        try{
            Mail::send(new ContactUs($request));
            Mail::send(new ContactUsSendToSender($request));
        }catch (\Exception $exception){
            return redirect()->back()->with('error', '<h4>'.trans('app.smtp_error_message').'</h4>'. $exception->getMessage());
        }
        return redirect()->back()->with('success', trans('app.message_has_been_sent'));


    }

    public function contactUsPostPartner(Request $request){
        $rules = [
            'name'  => 'required',
            'email'  => 'required|email',
            'telefonnummer'  => 'required',
            'unternehmen'  => 'required',
            'anfrage'  => 'required',
        ];

        $this->validate($request, $rules);

        try{
            Mail::send(new ContactUsPartner($request));
            Mail::send(new ContactUsSendToPartner($request));
        }catch (\Exception $exception){
            return redirect()->back()->with('error', '<h4>'.trans('app.smtp_error_message').'</h4>'. $exception->getMessage());
        }
        return redirect()->back()->with('success', trans('app.message_has_been_sent'));


    }
    
}
