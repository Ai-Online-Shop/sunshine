<?php

namespace App\Http\Controllers;

use App\Campaign;
use App\Payment;
use App\User;
use App\Client;
use PDF;
use App\Mail\YourReminder2;
use App\Mail\OurReminder2;
use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{

    public function index(Request $request){
        $user = Auth::user();

        if ($user->is_admin()){
            if ($request->q){
                $payments = Payment::success()->where('email', 'like', "%{$request->q}%")->orderBy('id', 'desc')->paginate(20);
            }else{
                $payments = Payment::success()->orderBy('id', 'desc')->paginate(20);
            }
        }else{
            $campaign_ids = $user->my_campaigns()->pluck('id')->toArray();
            if ($request->q){
                $payments = Payment::success()->whereIn('campaign_id', $campaign_ids)->where('email', 'like', "%{$request->q}%")->orderBy('id', 'desc')->paginate(20);
            }else{
                $payments = Payment::success()->whereIn('campaign_id', $campaign_ids)->orderBy('id', 'desc')->paginate(20);
            }
        }

        $payment_created = Payment::success()->count();
        $pending_created = Payment::pending()->count();
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


        return view('admin.payments', compact('user', 'payments', 'pending_created', 'payment_created', 'payment_amount','pending_payment_amount', 'pending_campaigns', 'last_payments'))->with('menu', 'payments');
    }

    public function view($id){

        $user = Auth::user();
        $payment = Payment::find($id);

        return view('admin.payment_view', compact('user', 'payment'));
    }

    public function downloadPDF(){
        $pdf = PDF::loadView('pdf.pdf_zahlungsdetails', compact('payment'));
        return $pdf->download('immofound.pdf');
    }



    public function withdraw(){
        $user = Auth::user();
        $campaigns = $user->my_campaigns;

        return view('admin.withdraw', compact('user', 'campaigns'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     *
     * @date April 29, 2017
     * @since v.1.1
     */

    public function paymentsPending(Request $request){
        $user = Auth::user();

        if ($user->is_admin()){
            if ($request->q){
                $payments = Payment::pending()->where('email', 'like', "%{$request->q}%")->orderBy('id', 'desc')->paginate(20);
            }else{
                $payments = Payment::pending()->orderBy('id', 'desc')->paginate(20);
            }
        }else{
            $campaign_ids = $user->my_campaigns()->pluck('id')->toArray();
            if ($request->q){
                $payments = Payment::pending()->whereIn('campaign_id', $campaign_ids)->where('email', 'like', "%{$request->q}%")->orderBy('id', 'desc')->paginate(20);
            }else{
                $payments = Payment::pending()->whereIn('campaign_id', $campaign_ids)->orderBy('id', 'desc')->paginate(20);
            }
        }

        $payment_created = Payment::success()->count();
        $payment_amount = Payment::success()->sum('amount');
        $pending_created = Payment::pending()->count();
        $pending_payment_amount = Payment::pending()->sum('amount');

        if ($user->is_admin()){
            $pending_campaigns = Campaign::pending()->orderBy('id', 'desc')->take(10)->get();
            $last_payments = Payment::success()->orderBy('id', 'desc')->take(10)->get();

        }else{
            $campaign_ids = $user->my_campaigns()->pluck('id')->toArray();
            $pending_campaigns = Campaign::pending()->whereUserId($user->id)->orderBy('id', 'desc')->take(10)->get();

            $last_payments = Payment::success()->whereIn('campaign_id', $campaign_ids)->orderBy('id', 'desc')->take(10)->get();

        }
        return view('admin.payments', compact('user', 'payments', 'pending_created', 'payment_created', 'payment_amount','pending_payment_amount', 'pending_campaigns', 'last_payments'));
    }

    public function markSuccess($id, $status){
        $payment = Payment::find($id);
        $payment->status = $status;
        $payment->save();
        Mail::to($payment->email)->queue(new YourReminder2);
        Mail::to('amikahaag@gmail.com')->queue(new OurReminder2);
        Mail::to('info@immofound.de')->queue(new OurReminder2);
        return back()->with('success', trans('app.payment_status_changed'));

    }

    public function markSuccess2($id, $gutscheinstatus){
        $payment = Payment::find($id);
        $payment->gutscheinstatus = $gutscheinstatus;
        $payment->save();
        return back()->with('success', trans('app.payment_status_changed'));

    }


}
