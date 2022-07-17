<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;

    public function bills()
    {
        return $this->hasMany(Data::class,'type','id');
    }
    public function plan()
    {
        return $this->hasMany(Plan::class, 'bill_id', 'id');
    }
    public function value()
    {
        return $this->hasMany(Data::class, 'value', 'id');
    }
}
