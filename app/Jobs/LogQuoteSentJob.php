<?php

namespace App\Jobs;

use App\Models\Quote;
use App\Models\QuoteLog;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class LogQuoteSentJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public Quote $quote;
    public $total;
    /**
     * Create a new job instance.
     */
    public function __construct(Quote $quote, $total)
    {
        $this->quote = $quote;
        $this->total = $total;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        QuoteLog::create([
            'quote_id' => $this->quote->id,
            'total_sent' => $this->total,
            'sent_at' => now()
        ]);
    }
}
