<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\ourproducts;
use Session;
use Cart;
use Stripe\Stripe;
use Stripe\Customer;
use Stripe\Charge;
use App\checkout;
use App\order;
use App\usersignup;
use App\Mail\sendMailable;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
class maincontroller extends Controller
{
    //

    private $SMS_SENDER = "Davincy";
    private $RESPONSE_TYPE = 'json';
    private $SMS_USERNAME = 'hademylola@gmail.com';
    private $SMS_PASSWORD = 'Ademilola2@';


    public function admin(){
        return view('admin');
    }
    public function uploadproduct(Request $request){
        $member = new ourproducts();
        
        //$extension = $request->all();
        if($request->hasFile('file')){
           
            $destinationPath = 'ourproducts';
            $extension = $request->file('file')->getClientOriginalExtension();
            $tempName = $request->file("file")->getClientOriginalName();
            //$fileName = uniqid("MW") . '.' . $extension; // renameing image
            $request->file('file')->move($destinationPath, $tempName);
            $imagepath = $destinationPath.'/'.$tempName;
            $path=$imagepath;
           //
            $member->productname = $request->get('productname');
            $member->productprice = $request->get('productprice');
            $member->categories = $request->get('category');
            $member->created_at = $request->get('created');
            $member->productimage = $path; 
            $member->stock = $request->stock;
            $member->save();
           
            $response="Saved";

        }
        
        //$file = $request->get('image');
        
        //$productname = $request->get('productname');
        //$productprice = $request->get('productprice');
        //$category = $request->get('category');
        //$file = $request->get('image');
        
        
        //$dir = 'uploads/';
        //$filename = uniqid() . '_' . time() . '.' . $extension;
        //$request->file('file')->move($dir, $filename);
     return response($response);   
    }

    public function viewproducts(){
        $member = new ourproducts();

        $all = $member::all();

        return view('viewproducts')->with('all',$all);


    }
    public function index(){
        //Mail::send('hademylola@gmail.com', 'Testing', 'Salute');
        
        $member = new ourproducts();
            $sum = 0;
        $all = $member::all();
        $cartItem = Cart::content();
        $count = $cartItem->count();
        foreach($cartItem as $r){
            $sum += $r->qty;
        }
        $counter = $sum;
        return view('index')->with('all',$all)->with('cartItem',$cartItem)->with('count',$count)->with('counter',$counter);
    }
    public function viewselected(Request $request){
        $member = new ourproducts();
        $id = $request->id;
        $result = $member::where('id','=',$id)->get();
        if($result){
            Session::put('fetch',$result);
            $response ='Saved'
        }
        else{
            $response = "Unsaved";
        }
        
        return response($response);


    }
    public function viewselect(){
        return view('viewselected');
    }
    public function viewcart(){
      //  $cart = Session::get('cart');
        $cartItem = Cart::content();
       
        $sum = 0;
        foreach($cartItem as $cart){
            $subtotal = ($cart->price) * ($cart->qty);
            $sum+=$subtotal;
        }
        return view('viewcart')->with('cartItem',$cartItem)->with('total',$sum);
    }

    public function savecart(Request $r){
        $subtotal = $r->subtotal;
        $quantity = $r->quantity;
        $price = $r->price;
        $id = $r->id;
        $productname = $r->productname;
        //$selected = [$subtotal,$quantity,$price,$id,$productimage];
        $member = new ourproducts();

        $check= $member->where('productname','=',$r->productname)->first();
        if($check->stock > $quantity){
            Cart::add($id,$productname,$quantity,$price);
            $response="Completed";
        }
        else{
            $response = "We Only Have " . $check->stock.' of this Item left';
        }


        
        //$cart = Session::push('cart',array($selected));
        //$count = count(Session::get('cart'));
        //Session::put('cartitem',$count);

        return response($response);


    }

    public function deleteItem(Request $r){
        $rowId = $r->id;
        Cart::remove($rowId);
        return response('Item has been Removed');
    }

    public function updateQty(Request $r){
        $rowId = $r->id;
        Cart::update($rowId, ['qty' => $r->qty]);
        return response('Updated'); 
    }
    public function checkout(Request $r){
        $cartItem = Cart::content();
        $count = $cartItem->count();
        $sum=0;
        foreach($cartItem as $r){
            $sum += $r->qty;
        }
        $counter = $sum;
        return view('checkout')->with('counter',$counter);
    }
    public function paymentSuccess($id){
        return view('paymentSuccess')->with('id',$id);
    }
    public function paymentFailed($errormessage){
        return view('paymentFailed')->with('errormessage',$errormessage);
    }
    public function payment($blogaddress){
        $cartItem = Cart::content();
        
        $sum = 0;
        foreach($cartItem as $cart){
            $subtotal = ($cart->price) * ($cart->qty);
            $sum += $subtotal;
        }
        return view('payment')->with('identifier',$blogaddress)->with('newTotal',$sum);
    }
    public function charge(Request $request,$identifer){
        $member = new checkout();
        $order = new order();
        
        $cartItem = Cart::content();
        $sum = 0;
        foreach($cartItem as $cart){
            $subtotal = ($cart->price) * ($cart->qty);
            $sum+=$subtotal;
        }
        //dd($request->all());
        try {
            Stripe::setApiKey(env('STRIPE_SECRET_KEY'));
        
            $customer = Customer::create(array(
                'email' => $request->stripeEmail,
                'source' => $request->stripeToken
            ));
        
            $charge = Charge::create(array(
                'customer' => $customer->id,
                'amount' => $sum * 100,
                'currency' => 'ngn'
            ));
        
        //dd($customer);
        try{
            $fetch = $member::where('tracker','=',$identifer)->first();
            Mail::send('email',['paymentId'=> $charge->id,'amount'=>$sum],function($message) use($customer){
              $message->to($customer->email,'Our Valuable Customer')->subject('PAYMENT CONFIRMATION FROM BCCOUTURE');
              });

        }
        catch(Exception $ex){
            dd(ex);
        }
        
        
        $update = $member::find($fetch->id);
        
        //$member->status= $r->status;
        if($update){
            $update->paymentid = $charge->id;
            $update->paymentstatus = "paid";
            $cartSelected= [];
        $cartItem = Cart::content();
        foreach($cartItem as $item){
            $rows =[];
            $rows['productname'] = $item->name;
            $rows['price'] = $item->price;
            $rows['quantity'] = $item->qty;
            $rows['requester'] = $identifer;
            $rows['subtotal'] = $item->price * $item->quantity;
            $rows['created_at'] = date("Y-m-d").' '.date('h:i:sa');
            $rows['updated_at'] = date("Y-m-d").' '.date('h:i:sa');
            $cartSelected[] = $rows;
        }
        $order = order::insert($cartSelected);
        $fetched = $member::where('tracker','=',$identifer)->first();
        $email = $fetched->emailaddress;
           
        
                $update->save();
            Cart::destroy();
            return redirect()->route('success',['id' => $charge->id]);
        }
       


            
        } catch (Exception $ex) {
            $fetch = $member::where('tracker','=',$identifer)->first();
            $delete = $member::find($fetch->id);
            $delete->delete();
            return redirect()->route('failed',['errormessage' => $ex->getMessage()]);
           
        }
    }

    public function saveCheckout(Request $r){
        $member = new checkout();
        $order = new order();
        $member1 = new usersignup();

        $checkemail = $member1->where('emailaddress','=',$r->email)->first();
        if($checkemail === null){
            $member->addressline = $r->address;
        $member->emailaddress = $r->email;
        $member->city = $r->city;
        $member->state = $r->state;
        $member->phonenumber = $r->phonenumber;
        $member->country = $r->country;
        $member->zip = $r->zipcode;
        $member->paymentstatus = $r->paymentstatus;
        $member->tracker = $r->tracker;
        $member->approved= 'pending';
        $member->save();
        $response = $r->tracker;
        }
        else{
            $response = "EmailAddress Already In Use.";
        }
        
        
        return response($response);
    }

    public function login(){
        return view('login');
    }
    public function checklogin(Request $request){
        $member = new usersignup();
        $matchThese = ['email' => $request->email, 'password' => $request->password];
       //$check = $member::where($matchThese)->first();
       //if( $check === null){
        //   $result = "failed";
     //  }
        $parameters = ["emailaddress"=>$request->username,"password"=>$request->password];
        $fetch = $member::where($parameters)->first();
        if($fetch=== null){
            return response('Invalid Username/Password');

        }
        else{
         return response('loggedIn');  
        }
    }
    public function register(){
        return view('register');
    }   
    public function registerUser(Request $request){
        $member = new usersignup();
        $parameters =["emailaddress"=>$request->emailaddress];
        $fetch = $member::where($parameters)->first();
        if($fetch=== null){
            $member->emailaddress = $request->emailaddress;
            $member->lastname = $request->lastname;
            $member->firstname = $request->firstname;
            $member->sex = $request->sex;
            $member->phonenumber = $request->phonenumber;
            $member->password= $request->password;
            $member->save();
            return response('User profile sucessfully created');
        }
        else{
            return response('EmailAddress has already been used.');
        }
    }
    public function profile($userid){
        $member = new usersignup();
        $pending = new checkout();
        $newparameters= ["emailaddress"=>$userid,"approved"=>'pending'];
        $getpending = $pending::where($newparameters)->get();
        $parameters =["emailaddress"=>$userid];
        $fetch= $member::where($parameters)->first();
        if($fetch=== null){

        }
        else{
            return view('profile')->with('userid',$userid)->with('pendingRequest',$getpending);
        }
        
    }
    public function approve(){
        $member = new checkout();
        $fetch = $member::where('approved','=','pending')->get();
        return view('approvepage')->with('allpendingapprovals',$fetch);
    }

    public function updateapprove(Request $r){
        $member = new checkout();
        $fetch = $member::where('tracker','=',$r->trackerid)->first();
        $update = $member::find($fetch->id);
        if($update){
            $update->approved = "Approved";
            $update->deliverydate = $r->deliverydate;
            $update->save();
           
            return response('Update Successful');
        }
        else{
            return response('Update Failed');
        }
    }
    public function approvedrequest($uniqueid){

        $member = new usersignup();
        $pending = new checkout();
        $newparameters= ["emailaddress"=>$uniqueid,"approved"=>'Approved'];
        $getpending = $pending::where($newparameters)->get();
        $parameters =["emailaddress"=>$uniqueid];
        $fetch= $member::where($parameters)->first();
        if($fetch=== null){

        }
        else{
            return view('profileapproved')->with('approvedRequest',$getpending)->with('userid',$uniqueid);
        }

    }
    public function sendmail(){
    Mail::send('email',['paymentId'=> '$customer->id','amount'=>'$sum'],function($message){
              $message->to('hademylola@gmail.com','Our Valuable Customer')->subject('PAYMENT CONFIRMATION FROM BCCOUTURE');
              });
   
    }



public function getUserNumber(Request $request)
    {
        $phone_number = $request->phonenumber;

        $message = "DaVincy da Stardorm";

        //$this->initiateSmsActivation($phone_number, $message);
  $this->initiateSmsGuzzle($phone_number, $message);

        return  response ('Message has been sent successfully');
    }

    public function initiateSmsActivation($phone_number, $message){
        $isError = 0;
        $errorMessage = true;

        //Preparing post parameters
        $postData = array(
            'username' => $this->SMS_USERNAME,
            'password' => $this->SMS_PASSWORD,
            'message' => $message,
            'sender' => $this->SMS_SENDER,
            'mobiles' => $phone_number,
            'response' => $this->RESPONSE_TYPE
        );

        $url = "http://portal.bulksmsnigeria.net/api/";

        $ch = curl_init();
        curl_setopt_array($ch, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => $postData
        ));

        //Ignore SSL certificate verification
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

        //get response
        $output = curl_exec($ch);

        //Print error if any
        if (curl_errno($ch)) {
            $isError = true;
            $errorMessage = curl_error($ch);
        }
        curl_close($ch);

        if($isError){
            return array('error' => 1 , 'message' => $errorMessage);
        }else{
            return array('error' => 0 );
        }
    }

    public function initiateSmsGuzzle($phone_number, $message)
    {
        $client = new Client();

        $response = $client->post('http://portal.bulksmsnigeria.net/api/?', [
            'verify'    =>  false,
            'form_params' => [
                'username' => $this->SMS_USERNAME,
                'password' => $this->SMS_PASSWORD,
                'message' => $message,
                'sender' => $this->SMS_SENDER,
                'mobiles' => $phone_number,
            ],
        ]);

        $response = json_decode($response->getBody(), true);
    }


public function smscenter(){
    return view('sendSms');
}

}


