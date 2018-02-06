<?php

namespace App\Http\Controllers;

use App\Campaign;
use App\Payment;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard(){
        $title = trans('app.dashboard');
        return view('admin.login', compact('title'));
    }

    public function verwaltung(){

        $user = Auth::user();

        $title = trans('app.dashboard');
        $user_count = User::all()->count();
        $pending_campaign_count = Campaign::pending()->count();
        $blocked_campaign_count = Campaign::blocked()->count();
        $active_campaign_count = Campaign::active()->count();

        $payment_created = Payment::success()->count();
        $payment_amount = Payment::success()->sum('amount');

        $pending_payment_amount = Payment::pending()->sum('amount');

        if ($user->is_admin()){
            $pending_campaigns = Campaign::pending()->orderBy('id', 'desc')->take(10)->get();

            $last_payments = Payment::success()->orderBy('id', 'desc')->take(10)->get();

            $payment_amount_ini = ((int)0 + (int)Payment::success()->sum('amount'));
            $payment_amount_10000 = ((int)10000 - (int)Payment::success()->sum('amount'));
            $pending_payment_amount_number = ((int)0 + (int)Payment::pending()->sum('amount'));
            $last_payments_calc = ($payment_amount*(pow(1.034,5)));
            $last_payments_calc = (number_format($last_payments_calc, 2, '.', ''));



        }else{
            $campaign_ids = $user->my_campaigns()->pluck('id')->toArray();
            $pending_campaigns = Campaign::pending()->whereUserId($user->id)->orderBy('id', 'desc')->take(10)->get();
            $payment_amount_id = Payment::success()->whereUserId($user->id)->sum('amount');

            $payment_amount_ini = ((int)0 + (int)Payment::success()->whereUserId($user->id)->sum('amount'));
            $payment_amount_10000 = ((int)10000 - (int)Payment::success()->whereUserId($user->id)->sum('amount'));
            $pending_payment_amount_number = ((int)0 + (int)Payment::pending()->whereUserId($user->id)->sum('amount'));

            $last_payments_calc = ($payment_amount_id*(pow(1.034,5)));
            $last_payments_calc = (number_format($last_payments_calc, 2, '.', ''));

            $last_payments = Payment::success()->whereUserId($user->id)->orderBy('id', 'desc')->take(10)->get();

        }

        return view('admin.verwaltung', compact('title','user', 'user_count', 'active_campaign_count', 'pending_campaign_count',
            'blocked_campaign_count', 'payment_created', 'payment_amount','pending_payment_amount', 'pending_campaigns',
            'last_payments', 'payment_amount_10000', 'payment_amount_ini','pending_payment_amount_number', 'last_payments_calc',
            'payment_amount_id'));
    }

    public function getDownload()
    {
        //PDF file is stored under project/public/download/info.pdf
        $file= public_path(). "/assets/PDF/Anlagebedingung_ImmoFound.pdf";

        $headers = [
            'Content-Type' => 'application/pdf',
        ];

        return response()->download($file, 'Anlagebedingung_Immofound.pdf', $headers);
    }

    public function getDownload2()
    {
        //PDF file is stored under project/public/download/info.pdf
        $file= public_path(). "/assets/PDF/Vermoegensanlageinfo_ImmoFound.pdf";

        $headers = [
            'Content-Type' => 'application/pdf',
        ];

        return response()->download($file, 'Vermoegensanlageinfo_ImmoFound.pdf', $headers);
    }

    public function getDownload3()
    {
        //PDF file is stored under project/public/download/info.pdf
        $file= public_path(). "/assets/PDF/preise.pdf";

        $headers = [
            'Content-Type' => 'application/pdf',
        ];

        return response()->download($file, 'preise.pdf', $headers);
    }
    public function getDownload4()
    {
        //PDF file is stored under project/public/download/info.pdf
        $file= public_path(). "/assets/PDF/angebote.pdf";

        $headers = [
            'Content-Type' => 'application/pdf',
        ];

        return response()->download($file, 'angebote.pdf', $headers);
    }

    public function support(){

        $user = Auth::user();

        $title = trans('app.dashboard');
        $user_count = User::all()->count();
        $pending_campaign_count = Campaign::pending()->count();
        $blocked_campaign_count = Campaign::blocked()->count();
        $active_campaign_count = Campaign::active()->count();

        $payment_created = Payment::success()->count();
        $payment_amount = Payment::success()->sum('amount');

        $pending_payment_amount = Payment::pending()->sum('amount');

        if ($user->is_admin()){
            $pending_campaigns = Campaign::pending()->orderBy('id', 'desc')->take(10)->get();
            $last_payments = Payment::success()->orderBy('id', 'desc')->take(10)->get();

        }else{
            $campaign_ids = $user->my_campaigns()->pluck('id')->toArray();
            $pending_campaigns = Campaign::pending()->whereUserId($user->id)->orderBy('id', 'desc')->take(10)->get();

            $last_payments = Payment::success()->whereIn('campaign_id', $campaign_ids)->orderBy('id', 'desc')->take(10)->get();

        }


        return view('admin.support', compact('title','user', 'user_count', 'active_campaign_count', 'pending_campaign_count', 'blocked_campaign_count', 'payment_created', 'payment_amount','pending_payment_amount', 'pending_campaigns', 'last_payments'));
    }


    public function verify2()
    {
        $title = trans('Herzlich Willkommen!');
        $user = Auth::user();

        return view('auth.verify', compact('title', 'user'));

    }

    public function verified()
    {
        $title = trans('Herzlich Willkommen!');
        $user = Auth::user();

        return view('auth.verified', compact('title', 'user'));

    }

}
