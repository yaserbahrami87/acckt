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
        $idea=idea::orderby('id','desc')->paginate(30);
        foreach ($idea as $item)
        {
            switch($item->amountcapitals_id)
            {
                case 1:$item->amountcapitals='کمتر از یک میلیارد تومان';
                        break;
                case 2:$item->amountcapitals='بین یک تا دو میلیارد تومان';
                    break;
                case 3:$item->amountcapitals='بیش از دو میلیارد تومان';
                    break;
            }

            $item->demand=$this->get_demand(NULL,NULL,$item->id,NULL,1,NULL,'get')->count();
            $item->demandUser=$this->get_demand(NULL,Auth::user()->id,$item->id,NULL,1,NULL,'first')->count();
        }


        if(Auth::user()->type==1)
        {
            return view('acckt_sarmayeh.pages.panel.idea_list')
                ->with('idea', $idea);
        }
        elseif(Auth::user()->type==2)
        {
            return view('acckt_master.pages.panel.idea_list')
                ->with('idea', $idea);
        }

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
            'avatar'                    =>'required|mimes:jpeg,jpg,bmp,gif,png|max:600',
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

        if($request->has('avatar')&&$request->file('avatar')->isValid())
        {
            $file=$request->file('avatar');
            $personal_image="idea-".$status->id.".".$request->file('avatar')->extension();
            $path=public_path('/images/idea/');
            $files=$request->file('avatar')->move($path, $personal_image);
            $request->personal_image=$personal_image;
            $status->avatar=$personal_image;
            $status->save();
        }

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
        $idea['full_name']=explode(',',$idea->full_name) ;
        $idea['birth_date']=explode(',',$idea->birth_date) ;
        $idea['mobile']=explode(',',$idea->mobile) ;
        $idea['email']=explode(',',$idea->email) ;
        $idea['degree_and_field_of_study']=explode(',',$idea->degree_and_field_of_study) ;
        $idea['specialty']=explode(',',$idea->specialty) ;
        if(Auth::user()->type==1)
        {
            return view('acckt_sarmayeh.pages.panel.idea_show')
                        ->with('idea',$idea);
        }
        elseif(Auth::user()->type==2)
        {
            return view('acckt_master.pages.panel.idea_show')
                ->with('idea',$idea);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\idea  $idea
     * @return \Illuminate\Http\Response
     */
    public function edit(idea $idea)
    {
        $idea['full_name']=explode(',',$idea->full_name) ;
        $idea['birth_date']=explode(',',$idea->birth_date) ;
        $idea['mobile']=explode(',',$idea->mobile) ;
        $idea['email']=explode(',',$idea->email) ;
        $idea['degree_and_field_of_study']=explode(',',$idea->degree_and_field_of_study) ;
        $idea['specialty']=explode(',',$idea->specialty) ;
        return view('acckt_master.pages.panel.idea_edit')
                    ->with('idea',$idea);

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

        $status=$idea->update($request->all());
        if($status)
        {
            alert()->success('ایده بروزرسانی شد')->persistent('بستن');
        }
        else
        {
            alert()->error('خطا در بروزرسانی شد')->persistent('بستن');
        }

        return back();
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

    public function myIdea(Request $request)
    {
        $ideas=idea::join('users','ideas.user_id','=','users.id')
            ->where('user_id','=',Auth::user()->id)
            ->when($request->q, function($query)use($request)
            {
               return $query->where('group_name','like',"%$request->q%");
            })
            ->select('ideas.*')
            ->get();

        foreach($ideas as $item)
        {
            $item->demandUser=$this->get_demand(NULL,NULL,$item->id,NULL,1,NULL,'get')->count();
        }
        return view('acckt_master.pages.panel.idea_list')
                    ->with('ideas',$ideas);
    }

    public function create_demand(idea $idea)
    {
        if($idea->status==1)
        {
            return view('acckt_sarmayeh.pages.panel.idea_demand_create')
                        ->with('idea',$idea);
        }
        else
        {
            alert()->error('امکان ارسال درخواست برای این ایده امکانپذیر نمی باشد')->persistent('بستن');
        }

    }

    public function showdemand(idea $idea)
    {
        if($idea->user_id==Auth::user()->id)
        {
            $ideas=idea::join('demands','ideas.id','=','demands.idea_id')
                    ->join('users','users.id','=','demands.user_id')
                    ->where('ideas.id','=',$idea->id)
                    ->select('demands.*','users.fname','users.lname')
                    ->get();
            return view('acckt_master.pages.panel.listDemand_Idea')
                        ->with('demands',$ideas);
        }
        else
        {
            alert()->error('شما دسترسی به این ایده ندارید')->persistent('بستن');
            return back();
        }

    }
}
