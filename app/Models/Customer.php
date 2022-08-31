<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = 'customers';
    protected $fillable = ['id','Name','Surname','Age','Address','Email','Phone'];

    // --- Defining a relationship one to many with accounts table
    public function account(){
        return $this->hasMany(Account::class);
    }


}
