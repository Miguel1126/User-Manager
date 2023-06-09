<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use Mail;
use App\Mail\DemoMail;
  
class MailController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        $mailData = [
            'title' => 'Mail',
            'body' => 'This is for testing email using smtp.'
        ];
         
        Mail::to('miguelardon401@gmail.com')->send(new DemoMail($mailData));
           
        // dd("Email is sent successfully.");
        return redirect()->route('home');
    }
}