<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\SendQuestion;
use Mail;
     
class QuestionsController extends Controller
{	

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    // Question form page
    public function index(Request $request)
    {
    	return view('question.index');	
    }

    // send question mail
    public function sendquestion(SendQuestion $request)
    {
        Mail::send('email-templates.sendquestion', 
            ['details' => $request->all()], 
            function($message) use($request) {
            $message->to($request->input('email'))
                ->subject('Question at Coding test');
        });
        return redirect()
                ->back()
                ->with('success', 'Thanks for contact us!');
    }


}