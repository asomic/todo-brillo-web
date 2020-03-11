<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use Redirect;
use Session;
use App\Http\Requests\ContactRequest;
use Validator;

class MailController extends Controller
{
    public function sendmail(Request $request)
    {
        // "name" => "asda"
        // "mail" => "dasd@dsa"
        // "company" => "sdasd"
//         // "address" => "asda"
// dd($request->input());

      Mail::to("trindamorales@gmail.com")->send(new ContactMail($request->input()));


      if (Mail::failures()) {

      return response('fallo',500);
      }
      else {

        return response('logro',200);
      }


    }

}
