<?php

namespace App\Http\Controllers;

use App\demand;
use App\idea;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DemandController extends BaseController
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
        //
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
            'idea_id'           =>'required|numeric',
            'proposed_price'    =>'required|numeric',
            'description'       =>'nullable|string',
        ]);

        $status=demand::create($request->all()+
        [
            'user_id'   =>Auth::user()->id,
            'date_fa'   =>$this->dateNow,
            'time_fa'   =>$this->timeNow,
        ]);
        if($status)
        {
            alert()->success('درخواست شما برای ایده مورد نظر ارسال شد')->persistent('بستن');
        }
        else
        {
            alert()->error('خطا در ارسال درخواست')->persistent('بستن');
        }

        return redirect('/portal/idea');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\demand  $demand
     * @return \Illuminate\Http\Response
     */
    public function show(demand $demand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\demand  $demand
     * @return \Illuminate\Http\Response
     */
    public function edit(demand $demand)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\demand  $demand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, demand $demand)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\demand  $demand
     * @return \Illuminate\Http\Response
     */
    public function destroy(demand $demand)
    {
        //
    }

    public function my()
    {

        $demand=Auth::user()->demands;
//            demand::join('ideas','demands.idea_id','=','ideas.id')
//                    ->where('demands.user_id','=',Auth::user()->id)
//                    ->select('ideas.*')
//                    ->paginate(30);
        foreach ($demand as $item)
        {
            switch($item->idea->amountcapitals_id)
            {
                case 1:$item->idea->amountcapitals='کمتر از یک میلیارد تومان';
                    break;
                case 2:$item->idea->amountcapitals='بین یک تا دو میلیارد تومان';
                    break;
                case 3:$item->idea->amountcapitals='بیش از دو میلیارد تومان';
                    break;
            }

            $item->demand=$this->get_demand(NULL,NULL,$item->id,NULL,1,NULL,'get')->count();
            $item->demandUser=$this->get_demand(NULL,Auth::user()->id,$item->id,NULL,1,NULL,'first')->count();

        }

        return view('acckt_sarmayeh.pages.panel.idea_list')
                        ->with('idea',$demand);
    }


}
