<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Jobs\EmailJob;
use Inertia\Inertia;

class ControllerMain extends Controller
{
    public function chat() 
    {
        return view('chat');
    }

    public function emails()
    {
        return view('emails');
    }

    public function emailsQueue(Request $request)
    {
        EmailJob::dispatch($request['emails'] ?? [])->onQueue('emails');

        return response()->json('success', 200);
    }

    public function react()
    {
        return Inertia::render('home', ['message' => 'Hello from Laravel!']);
    }
}
