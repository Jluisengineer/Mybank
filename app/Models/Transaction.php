<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    
    // Realtionship: accounts table
    public function customer(){
        $this->belongsTo(Account::class);
    }

    // select an account's customer


}
