<?php

namespace App\Http\Controllers;

use App\investmentmodel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InvestmentmodelController extends Controller
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
        $investmentmodel=investmentmodel::join('users','users.id','=','investmentmodels.user_id')
            ->where('investmentmodels.user_id','=',Auth::user()->id)
            ->select('investmentmodels.*')
            ->first();
        if(is_null($investmentmodel) )
        {
            return view('acckt_sarmayeh.pages.panel.investmentmodel_insert');
        }
        else
        {
            return view('acckt_sarmayeh.pages.panel.investmentmodel_edit')
                ->with('investmentModel',$investmentmodel);
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

        $this->validate($request,
        [
            'investmentmodel_id'    =>'required|numeric',
        ]);

        $status=investmentmodel::create($request->all()+[
            'user_id'   =>Auth::user()->id,
            ]);
        if($status)
        {
            alert()->success('اطلاعات مدل ها با موفقیت ثبت شد')->persistent('بستن');
        }
        else
        {
            alert()->error('خطا در ثبت مدل')->persistent('بستن');
        }

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\investmentmodel  $investmentmodel
     * @return \Illuminate\Http\Response
     */
    public function show(investmentmodel $investmentmodel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\investmentmodel  $investmentmodel
     * @return \Illuminate\Http\Response
     */
    public function edit(investmentmodel $investmentmodel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\investmentmodel  $investmentmodel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, investmentmodel $investmentmodel)
    {
        $this->validate($request,
            [
                'investmentmodel_id'    =>'required|numeric',
            ]);

        $status=$investmentmodel->update($request->all());
        if($status)
        {
            alert()->success('اطلاعات مدل ها با موفقیت بروزرسانی شد')->persistent('بستن');
        }
        else
        {
            alert()->error('خطا در بروزسانی ')->persistent('بستن');
        }

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\investmentmodel  $investmentmodel
     * @return \Illuminate\Http\Response
     */
    public function destroy(investmentmodel $investmentmodel)
    {
        //
    }
}
