<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    protected $fillable = [
        'quote'
    ];

    public function logs()
    {
        return $this->hasMany(QuoteLog::class);
    }
}
