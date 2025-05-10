<?php

namespace App\Jobs;

use App\Models\Quote;
use App\Mail\QuoteMail;
use App\Models\Subscriber;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;


class SendQuoteEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public Subscriber $subscriber;
    public Quote $quote;
    /**
     * Create a new job instance.
     */
    public function __construct(Subscriber $subscriber, Quote $quote)
    {
        $this->subscriber = $subscriber;
        $this->quote = $quote;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Mail::to($this->subscriber->email)->send(new QuoteMail($this->quote));
    }
}
