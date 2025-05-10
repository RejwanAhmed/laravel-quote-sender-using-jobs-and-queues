<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuoteLog extends Model
{
    protected $fillable = [
        'quote_id',
        'total_sent',
        'sent_at',
    ];

    public function quote()
    {
        return $this->belongsTo(Quote::class);
    }
}
