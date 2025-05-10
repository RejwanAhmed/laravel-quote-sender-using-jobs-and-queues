<?php

namespace App\Http\Controllers;


use Inertia\Inertia;
use App\Models\Quote;
use App\Services\QuoteService;

class QuoteController extends Controller
{
    protected QuoteService $quoteService;

    public function __construct(QuoteService $quoteService) 
    {
        $this->quoteService = $quoteService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $quotes = Quote::all();
        $responseData = [
            'quotes' => $quotes
        ];

        return Inertia::render('Quote/Index', $responseData);
    }

    public function sendQuote(Quote $quote)
    {
        $this->quoteService->sendEmailToSubscribers($quote);
        return response()->json(['message' => 'Quote is being sent!']);
    }
}
