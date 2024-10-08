<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Like extends Model
{
    use HasFactory;

    public $timestamps = false;

    //like belongs to user
    public function user(){
        return $this->belongsTo(User::class)->withTrashed();
    }
}