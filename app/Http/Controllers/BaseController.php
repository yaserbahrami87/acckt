<?php

namespace App\Http\Controllers;
use App\verify;
use Illuminate\Http\Request;
use Kavenegar;

class BaseController extends Controller
{
    public function __construct()
    {
        $dateNow = verta();
        $this->dateNow = $dateNow->format('Y/m/d');
        $this->timeNow = $dateNow->format('H:i:s');
    }

    public function sendSMS($msg,$tel)
    {

        try {
            $sender = "10008888088080";
            $message = $msg;
            $receptor = array($tel);
            $result = Kavenegar::Send($sender, $tel, $message);

            if ($result) {
                foreach ($result as $r) {
                    $messageid = $r->messageid;
                    $message = $r->message;
                    $status = $r->status;
                    $statustext = $r->statustext;
                    $sender = $r->sender;
                    $receptor = $r->receptor;
                    $date = $r->date;
                    $cost = $r->cost;
                }
                $msg=[];
                return $msg;
            }

        } catch (\Kavenegar\Exceptions\ApiException $e) {
            // در صورتی که خروجی وب سرویس 200 نباشد این خطا رخ می دهد
            $msg=[];
            $msg['msg'] = $e->errorMessage();
            $msg['status']=false;
            return $msg;

        } catch (\Kavenegar\Exceptions\HttpException $e) {
            // در زمانی که مشکلی در برقرای ارتباط با وب سرویس وجود داشته باشد این خطا رخ می دهد
            $msg=[];
            $msg['msg'] = $e->errorMessage();
            $msg['status'] =false;
            return $msg;
        }
    }

    public function verify($id=NULL,$tel=NULL,$code=NULL,$verify=NULL,$paginate='first',$type=NULL,$date_fa=NULL,$time_fa=NULL)
    {
        return verify::when($id,function($query) use ($id)
        {
            return $query->where('id','=',$id);
        })
            ->when($tel,function($query) use ($tel)
            {
                return $query->where('tel','=',$tel);
            })
            ->when($code,function($query) use($code)
            {
                return $query->where('code','=',$code);
            })
            ->when($verify,function($query) use($verify)
            {
                return $query->where('verify','=',$verify);
            })
            ->when($type,function($query) use($type)
            {
                return $query->where('type','=',$type);
            })
            ->when($date_fa,function($query) use($date_fa)
            {
                return $query->where('date_fa','=',$date_fa);
            })
            ->when($time_fa,function($query) use($time_fa)
            {
                return $query->where('time_fa','=',$time_fa);
            })
            ->when($paginate=='get',function($query)
            {
                return $query->get();
            })
            ->when($paginate=='paginate',function($query)
            {
                return $query->paginate($this->get_paginate());
            })
            ->when($paginate=='first',function($query)
            {
                return $query->first();
            });
    }

    public function get_paginate()
    {
        $count=30;
        return $count;
    }
}
