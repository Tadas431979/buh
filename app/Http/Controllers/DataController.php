<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use App\Models\BillNumber;
use App\Models\Data;
use App\Http\Requests\StoreDataRequest;
use App\Http\Requests\UpdateDataRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bills['bills'] = Bill::all();
        //dd($bills);

        return view('data.full',$bills);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDataRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDataRequest $request)
    {
        $this->middleware('auth');

        $bill=new Data();

        $bill->user_id= Auth::id();
        $bill->date_value=$request->post('date_value');
        $bill->type=$request->post('type');
        $billTypeId = $request->post('type');
        $billType = Bill::find($billTypeId);
        if($billType->bill_type == 'out'){
            $bill->value=$request->post('value') * -1;
        }else{
            $bill->value=$request->post('value');
        }
        $bill->comment=$request->post('comment');
        $bill->save();

        return redirect()->route('full')->with('success','Sąskaita išsaugota sėkmingai');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function show(Data $data)
    {

        $data['data']=Data::all();
        //dd($data);
        return view('data.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function edit(Data $id)
    {
        $this->middleware('auth');
         $id->id;
        $updBill= Data::find($id->id);
        return view('data.edit', ['updBill'=>$updBill]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDataRequest  $request
     * @param  \App\Models\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDataRequest $request, $updBill)
    {
        //dd($updBill);
        $data=Data::find($updBill);
        $this->middleware('auth');
        $data->user_id= Auth::id();
        $data->date_value=$request->post('date_value');
        $data->type=$request->post('type');
        $billTypeId = $request->post('type');
        $billType =Bill::find($billTypeId);     //$id->relation->bill_type;
        if($billType->bill_type == 'out'){

            $data->value=$request->post('value') * -1;
        }else{
            $data->value=$request->post('value');
        }
        $data->comment=$request->post('comment');
        $data->update();
        //dd($data);
        return redirect()->route('show')->with('success','Sąskaita išsaugota sėkmingai');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function destroy(Data $data)
    {
        //
    }
}
