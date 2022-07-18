<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;
    public function Plan()
    {
        return $this->hasOne(Bill:: class, "id",'bill_id');
    }
}
