<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->hasOne(User::class, 'id','user_id');
    }
    public function relation()
    {
        return $this->hasOne(Bill::class, 'id','type');

    }

    public function returnValue()
    {
        return $this->hasOne(Bill::class,'id','value');
    }


}
