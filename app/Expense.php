<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    protected $fillable = [
        'paid_at',
        'description',
        'amount',
        'user_id'
    ];

    /** Definisce la relazione tra la tabella Expense e User del DB */
    public function user() {
        return $this->belongsTo('App\User');
    }
}
