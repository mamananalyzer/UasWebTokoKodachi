<?php

namespace App\Http\Controllers;
use Mail;
use App\Cart;
use Illuminate\Http\Request;

class SendMailController extends Controller
{
    public function index(){
        return view('contact');
    }
    public function send(Request $request){
        $formInput=$request->except('picture');

        // dd($request->all());
        $this->validate($request,[
            'email' => 'required',
            'name' => 'required',
            'company' => 'required',
            'phone' => 'required',
            'product' => 'required',
            'description' => 'required',
            'quantity' => 'required',
        ]);

        Cart::create($formInput);

        try{
            Mail::send('isiemail',
            array(
                'name' => $request->name,
                'name2' => $request->name2,
                'email' => $request->email,
                'company' => $request->company,
                'phone' => $request->phone,
                'Address1' => $request->Address1,
                'city' => $request->city,
                'postcode' => $request->postcode,
                'product' => $request->product,
                'description' => $request->description,
                'quantity' => $request->quantity,
                'pesan' => $request->pesan
            ) ,
            function($pesan) use($request){
                // $pesan->to('amptron@cbn.net.id')->subject('Request a Quote');
                $pesan->to('dbasedown211@gmail.com')->subject('Request a Quote');
                $pesan->cc('dbasedown@gmail.com', 'Maman@amptron.my.id');
                $pesan->cc('baseanalyzer@amptron.my.id', 'Maman@amptron.my.id');
                // $pesan->from(env('MAIL_USERNAME','baseanalyzer@amptron.my.id'),'Inquiry');
                $pesan->from(env('MAIL_USERNAME', 'baseanalyzer210@gmail.com'),'Amptron.my.id');
                $name = $request->input('name');
                $name2 = $request->input('name2');
                $email = $request->input('email');
                $company = $request->input('company');
                $phone = $request->input('phone');
                $Address1 = $request->input('Address1');
                $city = $request->input('city');
                $postcode = $request->input('postcode');
                $product = $request->input('product');
                $description = $request->input('description');
                $quantity = $request->input('quantity');
                $pesan = $request->input('pesan');
            });
            // dd($request->all());
        }catch (Exception $e){
            return response (['status' => false,'errors' => $e->getMessage()]);
        }




        return view('/receipt2', ['receipt' => $request])->with('terkirim',
        'Thank you for contacting us, your message has been sent.
                 Please wait for our admin to contact you.');
        // return redirect('/')->with('terkirim',
        // 'Thank you for contacting us, your message has been sent.
        //          Please wait for our admin to contact you.');
    }
}
