<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Subscriber;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subscribers = Subscriber::all();
        $responseData = [
            'subscribers' => $subscribers
        ];

        return Inertia::render('Subscriber/Index', $responseData);
    }
}
