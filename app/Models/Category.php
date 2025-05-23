<?php

namespace App\Models;

use App\Models\User;
use App\Models\Transaction;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded =[];

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function transactions(){
        return $this->hasMany(Transaction::class);
    }
}
