<?php

namespace App\Http\Controllers;

use App\Category;
use App\Campaign;
use App\Country;
use App\Gutschein;
use App\Mail\YourReminder2;
use App\Payment;
use App\Reward;
use App\User;
use Carbon\Carbon;
use PDF;
use Dompdf\Dompdf;
use Illuminate\Support\Facades\Mail;
use DateTime;
use App\Mail\YourReminder;
use App\Mail\OurReminder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class CampaignsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $user = Auth::user();
        $countries = Country::all();

        return view('admin.start_campaign', compact('user', 'categories', 'countries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'title' => 'required',
            'category' => 'required',
        ];

        $this->validate($request, $rules);

        $user_id = Auth::user()->id;

        $slug = unique_slug($request->title);

        //feature image has been moved to update
        $data = [
            'user_id' => $user_id,
            'title' => $request->title,
            'category_id' => $request->category,
            'slug' => $slug,
            'min_amount' => $request->min_amount,
            'max_amount' => $request->max_amount,
            'recommended_amount' => $request->recommended_amount,
            'amount_prefilled' => $request->amount_prefilled,
            'status' => 0,
            'is_funded' => 0,

            'amount_sparplan' => $request->amount_sparplan,
            'class' => $request->class,
            'laufzeit_sparplan' => $request->laufzeit_sparplan,
            'zielsumme_sparplan' => $request->zielsumme_sparplan,
            'auszahlungssumme_sparplan' => $request->auszahlungssumme_sparplan,
            'zinsen_amount_sparplan' => $request->zinsen_amount_sparplan,
            'zinssatz_sparplan' => $request->zinssatz_sparplan,

            'ccv' => $request->ccv,
            'dhl' => $request->dhl,
            'paket' => $request->paket,
            'nachname' => $request->nachname,
            'adresse' => $request->adresse,
            'postleitzahl' => $request->postleitzahl,
            'stadt' => $request->stadt,
            'land' => $request->land,


        ];

        $create = Campaign::create($data);

        if ($create) {
            return redirect(route('edit_campaign', $create->id))->with('success', trans('app.campaign_created'));
        }
        return back()->with('error', trans('app.something_went_wrong'))->withInput($request->input());
    }


    public function myCampaigns()
    {
        $user = request()->user();
        //$my_campaigns = $user->my_campaigns;
        $my_campaigns = Campaign::whereUserId($user->id)->orderBy('id', 'desc')->get();

        return view('admin.my_campaigns', compact('user', 'my_campaigns'));
    }

    public function myPendingCampaigns()
    {
        $user = request()->user();
        $my_campaigns = Campaign::pending()->whereUserId($user->id)->orderBy('id', 'desc')->get();

        return view('admin.my_campaigns', compact('user', 'my_campaigns'));
    }


    public function allCampaigns()
    {
        $user = Auth::user();
        $user->is_admin();
        $title = trans('app.all_campaigns');
        $campaigns = Campaign::active()->orderBy('id', 'desc')->paginate(20);
        return view('admin.all_campaigns', compact('title', 'user', 'campaigns'));
    }

    public function staffPicksCampaigns()
    {
        $user = Auth::user();
        $title = trans('app.staff_picks');
        $campaigns = Campaign::staff_picks()->orderBy('id', 'desc')->paginate(20);
        return view('admin.all_campaigns', compact('title', 'user', 'campaigns'));
    }

    public function fundedCampaigns()
    {
        $user = Auth::user();
        $title = trans('app.funded');
        $campaigns = Campaign::funded()->orderBy('id', 'desc')->paginate(20);
        return view('admin.all_campaigns', compact('title', 'user', 'campaigns'));
    }


    public function blockedCampaigns()
    {
        $user = Auth::user();
        $title = trans('app.blocked_campaigns');
        $campaigns = Campaign::blocked()->orderBy('id', 'desc')->paginate(20);
        return view('admin.all_campaigns', compact('title', 'user', 'campaigns'));
    }

    public function pendingCampaigns()
    {
        $user = Auth::user();
        $title = trans('app.pending_campaigns');
        $campaigns = Campaign::pending()->orderBy('id', 'desc')->paginate(20);
        return view('admin.all_campaigns', compact('title', 'user', 'campaigns'));
    }

    public function expiredCampaigns()
    {
        $user = Auth::user();
        $title = trans('app.expired_campaigns');
        $campaigns = Campaign::active()->expired()->orderBy('id', 'desc')->paginate(20);
        return view('admin.all_campaigns', compact('title', 'user', 'campaigns'));
    }


    public function searchAdminCampaigns(Request $request)
    {
        $user = Auth::user();
        $title = trans('app.campaigns_search_results');
        $campaigns = Campaign::where('title', 'like', "%{$request->q}%")->orderBy('id', 'desc')->paginate(20);
        return view('admin.all_campaigns', compact('title', 'user', 'campaigns'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id, $slug = null)
    {
        $campaign = Campaign::find($id);
        $title = $campaign->title;
        $user = Auth::user();

        return view('admin.campaign_single', compact('campaign', 'title', 'user'));
    }

    public function showCam($id)
    {
        $campaign = Campaign::find($id);
        $user = Auth::user();
        $title = $campaign->title;

        return view('home', compact('campaign', 'user', 'title'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Auth::user();

        $user_id = request()->user()->id;
        $campaign = Campaign::find($id);

        if ($campaign->user_id != $user_id) {
            exit('Unauthorized access');
        }
        $categories = Category::all();


        return view('admin.edit_campaign', compact('user', 'categories', 'campaign'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $rules = [
            'title' => 'required',
            'category' => 'required',

        ];

        $this->validate($request, $rules);

        $campaign = Campaign::find($id);

        $image_name = $campaign->feature_image;
        if ($request->hasFile('feature_image')) {
            $upload_dir = public_path('uploads/images/');
            if (!file_exists($upload_dir)) {
                mkdir($upload_dir, 0777, true);
            }
            $thumb_dir = public_path('uploads/images/thumb/');
            if (!file_exists($thumb_dir)) {
                mkdir($thumb_dir, 0777, true);
            }

            //Delete old image
            if ($image_name) {
                if (file_exists($upload_dir . $image_name)) {
                    unlink($upload_dir . $image_name);
                }
                if (file_exists($thumb_dir . $image_name)) {
                    unlink($thumb_dir . $image_name);
                }
            }

            $image = $request->file('feature_image');
            $file_base_name = str_replace('.' . $image->getClientOriginalExtension(), '', $image->getClientOriginalName());
            $full_image = Image::make($image)->resize(1500, null, function ($constraint) {
                $constraint->aspectRatio();
            });

            $resized = Image::make($image)->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            });

            $image_name = strtolower(time() . str_random(5) . '-' . str_slug($file_base_name)) . '.' . $image->getClientOriginalExtension();

            $thumbFileName = $thumb_dir . $image_name;
            $imageFileName = $upload_dir . $image_name;

            try {
                //Uploading original image
                $full_image->save($imageFileName);
                //Uploading thumb
                $resized->save($thumbFileName);
            } catch (\Exception $e) {
                return $e->getMessage();
            }
        }

        $data = [
            'category_id' => $request->category,
            'title' => $request->title,
            'min_amount' => $request->min_amount,
            'max_amount' => $request->max_amount,
            'recommended_amount' => $request->recommended_amount,
            'amount_prefilled' => $request->amount_prefilled,

            'amount_sparplan' => $request->amount_sparplan,
            'class' => $request->class,
            'laufzeit_sparplan' => $request->laufzeit_sparplan,
            'zielsumme_sparplan' => $request->zielsumme_sparplan,
            'auszahlungssumme_sparplan' => $request->auszahlungssumme_sparplan,
            'zinsen_amount_sparplan' => $request->zinsen_amount_sparplan,
            'zinssatz_sparplan' => $request->zinssatz_sparplan,

            'ccv' => $request->ccv,
            'dhl' => $request->dhl,
            'paket' => $request->paket,
            'nachname' => $request->nachname,
            'adresse' => $request->adresse,
            'postleitzahl' => $request->postleitzahl,
            'stadt' => $request->stadt,
            'land' => $request->land,
        ];

        $update = Campaign::whereId($id)->update($data);

        if ($update) {
            return redirect(route('edit_campaign', $id))->with('success', trans('app.campaign_created'));
        }
        return back()->with('error', trans('app.something_went_wrong'))->withInput($request->input());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function showBackers($id)
    {
        $campaign = Campaign::find($id);
        $title = trans('app.backers') . ' | ' . $campaign->title;
        return view('admin.campaign_backers', compact('campaign', 'title'));

    }

    public function showUpdates($id)
    {
        $campaign = Campaign::find($id);
        $title = $campaign->title;
        return view('admin.campaign_update', compact('campaign', 'title'));
    }

    public function showFaqs($id)
    {
        $campaign = Campaign::find($id);
        $title = $campaign->title;
        return view('admin.campaign_faqs', compact('campaign', 'title'));
    }

    /**
     * @param $id
     * @return mixed
     *
     * todo: need to be moved it to reward controller
     */
    public function rewardsInCampaignEdit($id)
    {
        $title = trans('app.campaign_rewards');
        $campaign = Campaign::find($id);
        $rewards = Reward::whereCampaignId($campaign->id)->get();
        return view('admin.campaign_rewards', compact('title', 'campaign', 'rewards'));
    }

    /**
     * @param Request $request
     * @param int $reward_id
     * @return mixed
     */
    public function addToCart(Request $request, $reward_id = 0)
    {

        if ($reward_id) {
            //If checkout request come from reward
            session(['cart' => ['cart_type' => 'reward', 'reward_id' => $reward_id]]);

            $reward = Reward::find($reward_id);
            if ($reward->campaign->is_ended()) {
                $request->session()->forget('cart');
                return redirect()->back()->with('error', trans('app.invalid_request'));
            }
        } else {
            $gutschein_id = 'gutschein_' . time() . str_random(6);
            // get unique recharge transaction id
            while ((Gutschein::whereGutscheinId($gutschein_id)->count()) > 0) {
                $gutschein_id = 'reid' . time() . str_random(5);
            }
            $gutschein_id = strtoupper($gutschein_id);
            //Or if comes from donate button
            session(['cart' => [
                'cart_type' => 'donation',
                'campaign_id' => $request->campaign_id,
                'amount' => $request->amount,]]);

            $payments_data = [
                'ccv' => $request->ccv,
                'gutschein_id' => $gutschein_id,
                'versandart' => $request->versandart,
                'amount' => $request->amount,
                'nachname' => $request->nachname,
                'adresse' => $request->adresse,
                'postleitzahl' => $request->postleitzahl,
                'stadt' => $request->stadt,
                'land' => $request->land,
                'email' => $request->email,
            ];
            //Create payment and clear it from session
            Gutschein::create($payments_data);
        }
        return redirect(route('checkout'));
    }


    public function statusChange($id, $status = null)
    {

        $campaign = Campaign::find($id);
        if ($campaign && $status) {

            if ($status == 'approve') {
                $campaign->status = 1;
                $campaign->save();

            } elseif ($status == 'block') {
                $campaign->status = 2;
                $campaign->save();
            } elseif ($status == 'funded') {
                $campaign->is_funded = 1;
                $campaign->save();
            } elseif ($status == 'add_staff_picks') {
                $campaign->is_staff_picks = 1;
                $campaign->save();

            } elseif ($status == 'remove_staff_picks') {
                $campaign->is_staff_picks = 0;
                $campaign->save();
            }

        }
        return back()->with('success', trans('app.status_updated'));
    }

    /**
     * @return mixed
     *
     * Checkout page
     */
    public function checkout(Request $request)
    {
        $title = trans('app.checkout');

        if (!session('cart')) {
            return view('admin.checkout_empty', compact('title', 'user'));
        }

        $reward = null;
        if (session('cart.cart_type') == 'reward') {
            $reward = Reward::find(session('cart.reward_id'));
            $campaign = Campaign::find($reward->campaign_id);

        } elseif (session('cart.cart_type') == 'donation') {
            $campaign = Campaign::find(session('cart.campaign_id'));
        }

        if (session('cart')) {
            $domenic2 = Gutschein::orderBy('created_at', 'desc')->first(['versandart']);
            $domenic3 = Gutschein::orderBy('created_at', 'desc')->first(['amount']);
            $domenic4 = Gutschein::orderBy('created_at', 'desc')->first(['nachname']);
            $domenic5 = Gutschein::orderBy('created_at', 'desc')->first(['ccv']);
            $domenic6 = Gutschein::orderBy('created_at', 'desc')->first(['email']);
            $domenic7 = Gutschein::orderBy('created_at', 'desc')->first(['gutschein_id']);
            $domenic8= Gutschein::orderBy('created_at', 'desc')->first(['adresse']);
            $domenic9 = Gutschein::orderBy('created_at', 'desc')->first(['postleitzahl']);
            $domenic10 = Gutschein::orderBy('created_at', 'desc')->first(['stadt']);
            $domenic11 = Gutschein::orderBy('created_at', 'desc')->first(['land']);
            $domenic12 = Gutschein::orderBy('created_at', 'desc')->first(['created_at']);


            $total = number_format(($domenic2->versandart)+($domenic3->amount), 2);

            session(['cart' => [
                'cart_type' => 'donation',
                'campaign_id' => '1',

                'amount' => number_format($total, 2)]]);

            return view('admin.checkout', compact('title', 'campaign', 'reward', 'user',
                'domenic2', $domenic2, $domenic3, 'domenic3', $request, 'request', $total, 'total',
                'domenic4', $domenic4, 'domenic5', $domenic5, 'domenic6', $domenic6, $domenic7, 'domenic7',$domenic8, 'domenic8',$domenic9, 'domenic9',$domenic10, 'domenic10',$domenic11, 'domenic11',$domenic12, 'domenic12'));
        }


        return view('admin.checkout_empty', compact('title', 'user'));
    }

    public function checkoutPost(Request $request)
    {
        $title = trans('app.checkout');

        if (!session('cart')) {
            return view('admin.checkout_empty', compact('title', 'user'));
        }

        $cart = session('cart');
        $input = array_except($request->input(), '_token');
        session(['cart' => array_merge($cart, $input)]);

        if (session('cart.cart_type') == 'reward') {
            $reward = Reward::find(session('cart.reward_id'));
            $campaign = Campaign::find($reward->campaign_id);
        } elseif (session('cart.cart_type') == 'donation') {
            $campaign = Campaign::find(session('cart.campaign_id'));
        }
        $domenic2 = Gutschein::orderBy('created_at', 'desc')->first(['versandart']);
        $domenic3 = Gutschein::orderBy('created_at', 'desc')->first(['amount']);
        $domenic4 = Gutschein::orderBy('created_at', 'desc')->first(['nachname']);
        $domenic5 = Gutschein::orderBy('created_at', 'desc')->first(['ccv']);
        $domenic6 = Gutschein::orderBy('created_at', 'desc')->first(['email']);
        $domenic7 = Gutschein::orderBy('created_at', 'desc')->first(['gutschein_id']);
        $domenic8= Gutschein::orderBy('created_at', 'desc')->first(['adresse']);
        $domenic9 = Gutschein::orderBy('created_at', 'desc')->first(['postleitzahl']);
        $domenic10 = Gutschein::orderBy('created_at', 'desc')->first(['stadt']);
        $domenic11 = Gutschein::orderBy('created_at', 'desc')->first(['land']);
        $domenic12 = Gutschein::orderBy('created_at', 'desc')->first(['created_at']);

        //dd(session('cart'));
        return view('admin.payment', compact('title', 'user', 'campaign',
            'domenic2', $domenic2, $domenic3, 'domenic3',
            'domenic4', $domenic4, 'domenic5', $domenic5, 'domenic6', $domenic6, $domenic7,
            'domenic7',$domenic8, 'domenic8',$domenic9, 'domenic9',$domenic10, 'domenic10',$domenic11, 'domenic11',$domenic12, 'domenic12'));
    }

    /**
     * @param Request $request
     * @return mixed
     *
     * Payment gateway PayPal
     */
    public function paypalRedirect(Request $request)
    {
        $domenic2 = Gutschein::orderBy('created_at', 'desc')->first(['versandart']);
        $domenic3 = Gutschein::orderBy('created_at', 'desc')->first(['amount']);
        $domenic4 = Gutschein::orderBy('created_at', 'desc')->first(['nachname']);
        $domenic5 = Gutschein::orderBy('created_at', 'desc')->first(['ccv']);
        $domenic6 = Gutschein::orderBy('created_at', 'desc')->first(['email']);
        $domenic7 = Gutschein::orderBy('created_at', 'desc')->first(['gutschein_id']);
        $domenic8= Gutschein::orderBy('created_at', 'desc')->first(['adresse']);
        $domenic9 = Gutschein::orderBy('created_at', 'desc')->first(['postleitzahl']);
        $domenic10 = Gutschein::orderBy('created_at', 'desc')->first(['stadt']);
        $domenic11 = Gutschein::orderBy('created_at', 'desc')->first(['land']);
        $domenic12 = Gutschein::orderBy('created_at', 'desc')->first(['created_at']);


        if (!session('cart')) {
            return view('admin.checkout_empty', compact('title', 'user',
                'domenic2', $domenic2, $domenic3, 'domenic3',
                'domenic4', $domenic4, 'domenic5', $domenic5, 'domenic6', $domenic6, $domenic7, 'domenic7',$domenic8, 'domenic8',$domenic9,
                'domenic9',$domenic10, 'domenic10',$domenic11, 'domenic11',$domenic12, 'domenic12'));
        }
        //Find the campaign
        $cart = session('cart');

        $amount = 0;
        if (session('cart.cart_type') == 'reward') {
            $reward = Reward::find(session('cart.reward_id'));
            $amount = amount;
            $campaign = Campaign::find($reward->campaign_id);
        } elseif (session('cart.cart_type') == 'donation') {
            $campaign = Campaign::find(session('cart.campaign_id'));
            $amount = $cart['amount'];
        }
        $currency = get_option('currency_sign');
        //Create payment in database


        $transaction_id = 'tran_' . time() . str_random(6);
        // get unique recharge transaction id
        while ((Payment::whereLocalTransactionId($transaction_id)->count()) > 0) {
            $transaction_id = 'reid' . time() . str_random(5);
        }
        $transaction_id = strtoupper($transaction_id);
        $rechnungsnummer = 'RE_' . str_random(5);
        $payments_data = [
            'campaign_id' => $campaign->id,
            'reward_id' => session('cart.reward_id'),

            'versandart' => $request->versandart,
            'gutschein' => $request->gutschein,
            'name' => $request->name,
            'email' => $request->email,
            'adresse' => $request->adresse,
            'postleitzahl' => $request->postleitzahl,
            'stadt' => $request->stadt,
            'rechnungsnummer' => $rechnungsnummer,
            'land' => $request->land,
            'created_at_two' => $request->created_at_two,
            'widmung' => $request->widmung,
            'gutschein_id' => $request->gutschein_id,
            'amount' => $amount,
            'payment_method' => 'paypal',
            'status' => 'success',
            'currency' => $currency,
            'local_transaction_id' => $transaction_id,

            'contributor_name_display' => session('cart.contributor_name_display'),
        ];
        //Create payment and clear it from session
        $created_payment = Payment::create($payments_data);
        //Create PDF And send it
        $pdf2 = PDF::loadView('pdf.rechnung_paypal', $payments_data);
        $pdf = PDF::loadView('pdf.pdf_zahlungsdetails', $payments_data);
        Mail::send('emails.orders.shipped', $payments_data, function($message) use($pdf, $request)
        {
            $message->from('sunshinewellness@web.de', 'Sunshine Wellness');
            $message->to($request->email)->subject('Gutschein als PDF im Anhang');
            $message->bcc('sunshinewellness@web.de');
            $message->attachData($pdf->output(), "gutschein.pdf");
        });
        Mail::send('emails.orders.shipped_rechnung', $payments_data, function ($message) use ($pdf2, $request, $campaign) {
            $message->from('sunshinewellness@web.de', 'Sunshine Wellness');
            $message->to($request->email)->subject('Rechnung als PDF im Anhang');
            $message->bcc('sunshinewellness@web.de');
            $message->attachData($pdf2->output(), "rechnung.pdf");
        });

        $request->session()->forget('cart');


        // PayPal settings
        $paypal_action_url = "https://www.paypal.com/cgi-bin/webscr";
        if (get_option('enable_paypal_sandbox') == 1)
            $paypal_action_url = "https://www.sandbox.paypal.com/cgi-bin/webscr";

        $paypal_email = get_option('paypal_receiver_email');
        $return_url = route('payment_success', $transaction_id);
        $cancel_url = route('checkout');
        $notify_url = route('paypal_notify', $transaction_id);

        $item_name = $campaign->title . " [Contributing]";

        // Check if paypal request or response
        $querystring = '';

        // Firstly Append paypal account to querystring
        $querystring .= "?business=" . urlencode($paypal_email) . "&";

        // Append amount& currency (£) to quersytring so it cannot be edited in html
        //The item name and amount can be brought in dynamically by querying the $_POST['item_number'] variable.
        $querystring .= "item_name=" . urlencode($item_name) . "&";
        $querystring .= "amount=" . urlencode($amount) . "&";
        $querystring .= "currency_code=" . urlencode($currency) . "&";

        $querystring .= "first_name=" . urlencode(session('cart.full_name')) . "&";
        //$querystring .= "last_name=".urlencode($ad->user->last_name)."&";
        $querystring .= "payer_email=" . urlencode(session('cart.email')) . "&";
        $querystring .= "item_number=" . urlencode($created_payment->local_transaction_id) . "&";

        //loop for posted values and append to querystring
        foreach (array_except($request->input(), '_token') as $key => $value) {
            $value = urlencode(stripslashes($value));
            $querystring .= "$key=$value&";
        }

        // Append paypal return addresses
        $querystring .= "return=" . urlencode(stripslashes($return_url)) . "&";
        $querystring .= "cancel_return=" . urlencode(stripslashes($cancel_url)) . "&";
        $querystring .= "notify_url=" . urlencode($notify_url);

        // Append querystring with custom field
        //$querystring .= "&custom=".USERID;

        // Redirect to paypal IPN
        header('location:' . $paypal_action_url . $querystring);
        exit();
    }

    /**
     * @param Request $request
     * @param $transaction_id
     *
     * Check paypal notify
     */
    public function paypalNotify(Request $request, $transaction_id)
    {
        //todo: need to  be check
        $payment = Payment::whereLocalTransactionId($transaction_id)->where('status', '!=', 'success')->first();

        $verified = paypal_ipn_verify();
        if ($verified) {
            //Payment success, we are ready approve your payment
            $payment->status = 'success';
            $payment->charge_id_or_token = $request->txn_id;
            $payment->description = $request->item_name;
            $payment->payer_email = $request->payer_email;
            $payment->payment_created = strtotime($request->payment_date);
            $payment->save();
        } else {
            $payment->status = 'declined';
            $payment->description = trans('app.payment_declined_msg');
            $payment->save();
        }
        // Reply with an empty 200 response to indicate to paypal the IPN was received correctly
        header("HTTP/1.1 200 OK");
    }


    /**
     * @return array
     *
     * receive card payment from stripe
     */
    public function paymentStripeReceive(Request $request)
    {

        $user_id = null;
        if (Auth::check()) {
            $user_id = Auth::user()->id;
        }

        $stripeToken = $request->stripeToken;
        \Stripe\Stripe::setApiKey(get_stripe_key('secret'));
        // Create the charge on Stripe's servers - this will charge the user's card
        try {
            $cart = session('cart');

            //Find the campaign
            $amount = 0;
            if (session('cart.cart_type') == 'reward') {
                $reward = Reward::find(session('cart.reward_id'));
                $amount = $reward->amount;
                $campaign = Campaign::find($reward->campaign_id);
            } elseif (session('cart.cart_type') == 'donation') {
                $campaign = Campaign::find(session('cart.campaign_id'));
                $amount = $cart['amount'];
            }
            $currency = get_option('currency_sign');

            //Charge from card
            $charge = \Stripe\Charge::create(array(
                "amount" => ($amount * 100), // amount in cents, again
                "currency" => $currency,
                "source" => $stripeToken,
                "description" => $campaign->title . " [Contributing]"
            ));

            if ($charge->status == 'succeeded') {
                //Save payment into database
                $data = [
                    'amount' => ($charge->amount / 100),

                    'user_id' => $user_id,
                    'campaign_id' => $campaign->id,
                    'reward_id' => session('cart.reward_id'),
                    'payment_method' => 'stripe',
                    'currency' => $currency,
                    'charge_id_or_token' => $charge->id,
                    'description' => $charge->description,
                    'payment_created' => $charge->created,

                    //Card Info
                    'card_last4' => $charge->source->last4,
                    'card_id' => $charge->source->id,
                    'card_brand' => $charge->source->brand,
                    'card_country' => $charge->source->US,
                    'card_exp_month' => $charge->source->exp_month,
                    'card_exp_year' => $charge->source->exp_year,

                    'contributor_name_display' => session('cart.contributor_name_display'),
                    'status' => 'success',
                ];

                Payment::create($data);

                $request->session()->forget('cart');
                return ['success' => 1, 'msg' => trans('app.payment_received_msg'), 'response' => $this->payment_success_html()];
            }
        } catch (\Stripe\Error\Card $e) {
            // The card has been declined
            return ['success' => 0, 'msg' => trans('app.payment_declined_msg'), 'response' => $e];
        }
    }

    public function payment_success_html()
    {
        $user = Auth::user();
        $title = trans('app.payment_success');

        return view('admin.checkout_empty', compact('title', 'user'));
    }

    public function paymentSuccess(Request $request, $transaction_id = null)
    {

        $user = Auth::user();
        if ($transaction_id) {
            $payment = Payment::whereLocalTransactionId($transaction_id)->whereStatus('initial')->first();
            if ($payment) {
                $payment->status = 'pending';
                $payment->save();
            }
        }

        $title = trans('app.payment_success');
        return view('admin.payment_success', compact('title', 'user'));
    }

    public function downloadPDF()
    {
        $user = Auth::user();
        $pdf = PDF::loadView('pdf.pdf_kontodetails', compact('user'));
        return $pdf->download('immofound.pdf');
    }


    /**
     * @date April 29, 2017
     * @since v.1.1
     */
    public function paymentBankTransferReceive(Request $request)
    {
        $domenic2 = Gutschein::orderBy('created_at', 'desc')->first(['versandart']);
        $domenic3 = Gutschein::orderBy('created_at', 'desc')->first(['amount']);
        $domenic4 = Gutschein::orderBy('created_at', 'desc')->first(['nachname']);
        $domenic5 = Gutschein::orderBy('created_at', 'desc')->first(['ccv']);
        $domenic6 = Gutschein::orderBy('created_at', 'desc')->first(['email']);
        $domenic7 = Gutschein::orderBy('created_at', 'desc')->first(['gutschein_id']);
        $domenic8= Gutschein::orderBy('created_at', 'desc')->first(['adresse']);
        $domenic9 = Gutschein::orderBy('created_at', 'desc')->first(['postleitzahl']);
        $domenic10 = Gutschein::orderBy('created_at', 'desc')->first(['stadt']);
        $domenic11 = Gutschein::orderBy('created_at', 'desc')->first(['land']);
        $domenic12 = Gutschein::orderBy('created_at', 'desc')->first(['created_at']);



        $rules = [
            'bank_swift_code' => 'required',
            'branch_name' => 'required',
            'branch_address' => 'required',
            'account_name' => 'required',
            'versandart' => 'required',
            'gutschein' => 'required',
            'gutschein_id' => 'required',
            'adresse' => 'required',
            'postleitzahl' => 'required',
            'stadt' => 'required',
            'land' => 'required',
            'name' => 'required',
            'widmung' => 'required',
            'email' => 'required',
            'created_at' => 'created_at',
        ];
        $this->validate($request, $rules);

        //get Cart Item
        if (!session('cart')) {
            return view('admin.checkout_empty', compact('title'));
        }
        //Find the campaign
        $cart = session('cart');

        $amount = 0;
        if (session('cart.cart_type') == 'reward') {
            $reward = Reward::find(session('cart.reward_id'));
            $amount = $reward->amount;
            $campaign = Campaign::find($reward->campaign_id);
        } elseif (session('cart.cart_type') == 'donation') {
            $campaign = Campaign::find(session('cart.campaign_id'));
            $amount = $cart['amount'];
        }
        $currency = get_option('currency_sign');
        //Create payment in database


        $transaction_id = 'tran_' . time() . str_random(6);
        // get unique recharge transaction id
        while ((Payment::whereLocalTransactionId($transaction_id)->count()) > 0) {
            $transaction_id = 'reid' . time() . str_random(5);
        }
        $transaction_id = strtoupper($transaction_id);
        $rechnungsnummer = 'RE_' . str_random(5);

        $payments_data = [
            'campaign_id' => $campaign->id,
            'reward_id' => session('cart.reward_id'),

            'amount' => $amount,
            'payment_method' => 'bank_transfer',
            'status' => 'success',
            'currency' => $currency,
            'local_transaction_id' => $transaction_id,
            'email' => $request->email,
            'created_at_two' => $request->created_at_two,


            'versandart' => $request->versandart,
            'gutschein' => $request->gutschein,
            'gutschein_id' => $request->gutschein_id,
            'widmung' => $request->widmung,
            'adresse' => $request->adresse,
            'postleitzahl' => $request->postleitzahl,
            'name' => $request->name,
            'stadt' => $request->stadt,
            'land' => $request->land,
            'rechnungsnummer' => $rechnungsnummer,


            'contributor_name_display' => session('cart.contributor_name_display'),

            'bank_swift_code' => $request->bank_swift_code,
            'account_number' => $request->account_number,
            'branch_name' => $request->branch_name,
            'branch_address' => $request->branch_address,
            'account_name' => $request->account_name,
            'iban' => $request->iban,
        ];
        //Create payment and clear it from session
        $created_payment = Payment::create($payments_data);

        $pdf = PDF::loadView('pdf.pdf_zahlungsdetails', $payments_data);
        $pdf2 = PDF::loadView('pdf.pdf_rechnung', $payments_data);
        Mail::send('emails.orders.shipped', $payments_data, function($message) use($pdf, $request)
        {
            $message->from('sunshinewellness@web.de', 'Sunshine Wellness');
            $message->to($request->email)->subject('Gutschein als PDF im Anhang');
            $message->bcc('sunshinewellness@web.de');
            $message->attachData($pdf->output(), "gutschein.pdf");
        });
        Mail::send('emails.orders.shipped_rechnung', $payments_data, function ($message) use ($pdf2, $request) {
            $message->from('sunshinewellness@web.de', 'Sunshine Wellness');
            $message->to($request->email)->subject('Rechnung als PDF im Anhang');
            $message->bcc('sunshinewellness@web.de');
            $message->attachData($pdf2->output(), "rechnung.pdf");
        });
        $request->session()->forget('cart');
        return view('admin.checkout_empty', compact('title', 'user',
            'domenic2', $domenic2, $domenic3, 'domenic3',
            'domenic4', $domenic4, 'domenic5', $domenic5, 'domenic6', $domenic6, $domenic7, 'domenic7',
            $domenic8, 'domenic8',$domenic9, 'domenic9',$domenic10, 'domenic10',$domenic11, 'domenic11',$domenic12, 'domenic12'));
    }
}
