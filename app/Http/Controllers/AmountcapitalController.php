<?php

namespace App\Http\Controllers;

use App\amountcapital;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AmountcapitalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $amountcapital=amountcapital::join('users','users.id','=','amountcapitals.user_id')
            ->where('amountcapitals.user_id','=',Auth::user()->id)
            ->select('amountcapitals.*')
            ->first();
        if(is_null($amountcapital) )
        {
            return view('acckt_sarmayeh.pages.panel.amountCapital_insert');
        }
        else
        {
            return view('acckt_sarmayeh.pages.panel.amountCapital_edit')
                ->with('amountcapital',$amountcapital);
        }
        //return view('panelUser.amountCapital_insert');
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
            'amountcapitals_id'    =>'required|string|max:250'
        ]);

        $status=amountcapital::create($request->all()+
            [
                'user_id'   =>Auth::user()->id
            ]
        );
        if($status)
        {
            alert()->success('اطلاعات میزان سرمایه با موفقیت بارگذاری شد')->persistent('بستن');
        }
        else
        {
            alert()->error('خطا در ثبت اطلاعات میزان سرمایه')->persistent('بستن');
        }

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\amountcapital  $amountcapital
     * @return \Illuminate\Http\Response
     */
    public function show(amountcapital $amountcapital)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\amountcapital  $amountcapital
     * @return \Illuminate\Http\Response
     */
    public function edit(amountcapital $amountcapital)
    {
        dd($amountcapital);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\amountcapital  $amountcapital
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, amountcapital $amountcapital)
    {
        $this->validate($request,[
            'amountcapitals_id'    =>'required|string|max:250'
        ]);

        $status=$amountcapital->update($request->all());
        if($status)
        {
            alert()->success('اطلاعات با موفقیت بروزرسانی شد')->persistent('بستن');
        }
        else
        {
            alert()->error('خطا در بروزرسانی')->persistent('بستن');
        }

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\amountcapital  $amountcapital
     * @return \Illuminate\Http\Response
     */
    public function destroy(amountcapital $amountcapital)
    {
        //
    }
}
