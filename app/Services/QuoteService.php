<?php 
namespace App\Services;

use Carbon\Carbon;
use App\Models\Quote;
use App\Models\Subscriber;
use App\Jobs\LogQuoteSentJob;
use App\Jobs\SendQuoteEmailJob;

class QuoteService
{
    public function sendEmailToSubscribers(Quote $quote): void
    {
        $subscribers = Subscriber::all();
        $delayInSeconds = 0;

        foreach ($subscribers as $subscriber) {
            SendQuoteEmailJob::dispatch($subscriber, $quote)
                ->onQueue('emails')
                ->delay(Carbon::now()->addSeconds($delayInSeconds));

            $delayInSeconds += 2;
        }

        LogQuoteSentJob::dispatch($quote, $subscribers->count())
            ->onQueue('logs');
    }
}