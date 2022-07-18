<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use App\Models\Plan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Data;
class BalanceController extends Controller
{
    public function create()
    {
        $users['users']=DB::table('data')
            ->join('bills','bills.id','data.type')
            ->join('users','users.id','data.user_id')
            //->join('plans','plans.bill_id','bill_numbers.id')
            //->select('bill_numbers.name','data.value','data.type','bill_numbers.bill_type')
            ->get();
        $data['data']=Plan::all();

        //dd($users);

        return view('balance.balance',$users)->with($data);
    }
    public function createAll(Request $require)
    {
        $this->middleware('auth');
        $date1=$require->post('date1');
        $date2=$require->post('date2');
        $data['data']=Data::all()
        ->sortBy('date_value')
        ->where('date_value',$date1<'date_value',$date2);
        //dd($data);
        return $data;
    }
}
