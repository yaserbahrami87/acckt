<?php

namespace App\Http\Controllers;

use App\idea;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IdeaController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $idea=idea::orderby('id','desc')->get();
        return view('acckt_sarmayeh.pages.panel.idea_list')
                        ->with('idea',$idea);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('acckt_master.pages.panel.new_idea');
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
            'group'                     =>'required|numeric',
            'category'                  =>'required|numeric',
            'status'                    =>'required|numeric',
            'group_name'                =>'required|string',
            'full_name'                 =>'required|array',
            'birth_date'                =>'required|array',
            'email'                     =>'required|array',
            'degree_and_field_of_study' =>'required|array',
            'specialty'                 =>'required|array',
            'title'                     =>'required|string',
            'description'               =>'required|string',
            'similar_idea'              =>'required|string',
            'level'                     =>'required|numeric',
            'idea_property'             =>'required|string',
            'amountcapitals_id'         =>'required|numeric',
            'your_request'              =>'nullable|string',
        ]);

        $request['full_name']=implode(',',$request->full_name);
        $request['birth_date']=implode(',',$request->birth_date);
        $request['email']=implode(',',$request->email);
        $request['degree_and_field_of_study']=implode(',',$request->degree_and_field_of_study);
        $request['specialty']=implode(',',$request->specialty);
        $request['mobile']=implode(',',$request->mobile);

        $status=idea::create($request->all()+
        [
            'user_id'   =>Auth::user()->id,
            'date_fa'   =>$this->dateNow,
            'time_fa'   =>$this->timeNow,
        ]);

        if($status)
        {
            alert()->success('ایده با موفقیت ثبت شد')->persistent('بستن');
        }
        else
        {
            alert()->error('خطا در ثبت ایده')->persistent('بستن');
        }
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\idea  $idea
     * @return \Illuminate\Http\Response
     */
    public function show(idea $idea)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\idea  $idea
     * @return \Illuminate\Http\Response
     */
    public function edit(idea $idea)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\idea  $idea
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, idea $idea)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\idea  $idea
     * @return \Illuminate\Http\Response
     */
    public function destroy(idea $idea)
    {
        //
    }
}
