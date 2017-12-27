<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Schedules;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $schedule;

    public function __construct(Schedules $schedule)
    {
        $this->schedule = $schedule;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
    
        if($request->has('date_start') && $request->has('date_end')) {
            $date_start = $request->date_start;
            $date_end = $request->date_end;
        } else {
            $date_start = date('Y-m-d')." 00:00:00";
            $date_end = date('Y-m-d')." 23:59:59";
        }
        
        $list = $this->schedule->where('activity_start', ">=",$date_start)->where('activity_start',"<=",$date_end)->get();
        $view = ['list'=> $list,'date_start'=>$date_start,'date_end'=>$date_end];
        return view('front.list',$view);
    }
}
