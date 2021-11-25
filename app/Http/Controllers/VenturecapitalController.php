<?php

namespace App\Http\Controllers;

use App\venturecapital;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VenturecapitalController extends Controller
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
        $venturecapital=venturecapital::join('users','users.id','=','venturecapitals.user_id')
            ->where('venturecapitals.user_id','=',Auth::user()->id)
            ->select('venturecapitals.*')
            ->first();
        if(is_null($venturecapital) )
        {
            return view('acckt_sarmayeh.pages.panel.venturecapital_insert');
        }
        else
        {
            return view('acckt_sarmayeh.pages.panel.venturecapital_edit')
                        ->with('venturecapital',$venturecapital);
        }




    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'venturecapital_id'    =>'required|numeric'
        ]);

        $venturecapital=venturecapital::create($request->all()+
            [
                'user_id'   =>Auth::user()->id
            ]
        );

        if($venturecapital)
        {
            alert()->success('تعیین درصد خطرپذیری با موفقیت ثبت شد')->persistent('بستن');
        }
        else
        {
            alert()->error('خطا در ثبت')->persistent('بستن');
        }

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\venturecapital  $venturecapital
     * @return \Illuminate\Http\Response
     */
    public function show(venturecapital $venturecapital)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\venturecapital  $venturecapital
     * @return \Illuminate\Http\Response
     */
    public function edit(venturecapital $venturecapital)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\venturecapital  $venturecapital
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, venturecapital $venturecapital)
    {
        $this->validate($request,[
            'venturecapital_id'    =>'required|numeric'
        ]);
        $status=$venturecapital->update($request->all());
        if($status)
        {
            alert()->success('اطلاعات سرمایه گذاری خطرپذیر با موفقیت بارگذاری شد')->persistent('بستن');
        }
        else
        {
            alert()->error('خطا در ثبت اطلاعات سرمایه گذاری خطرپذیر')->persistent('بستن');
        }
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\venturecapital  $venturecapital
     * @return \Illuminate\Http\Response
     */
    public function destroy(venturecapital $venturecapital)
    {
        //
    }
}
