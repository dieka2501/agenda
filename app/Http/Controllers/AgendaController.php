<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Schedules;
use Validator;
use Auth;

class AgendaController extends Controller
{
	protected $schedule;
    
    public function __construct(Schedules $schedule)
    {
    	$this->schedule = $schedule;
    }

    public function index()
    {
    	$getList = $this->schedule->paginate(10);
    	$view = ['list'=>$getList];
    	// dd($getList);
    	return view('agenda.list',$view);
    }

    public function add()
    {
    	return view('agenda.add');
    }

    public function store(Request $request)
    {
    	$userId = Auth::id();
  		// dd($request->hasFile('photo'));
    	if($request->hasFile('photo')) {
    		$file = $request->file('photo');
    		$path = $request->photo->store('files');
    		// dd($path);
    		$request->request->add(['file'=>$path]);
    	}

    	$request->request->add(['user_id'=>$userId]);
    	// dd($request->all());
    	$validator = Validator::make($request->all(),$this->schedule->rules);
    	
    	if($validator->fails()) {
    	
    		return redirect(route('add.agenda'))->withErrors($validator->errors())->withInput();
    	}

    	$this->schedule->fill($request->all());
    	$save = $this->schedule->save();

    	if($save) {
    		return redirect(route('view.agenda'));
    	}

    	return redirect(route('add.agenda'))->withInput();
    }

    public function download(Request $request)
    {
    	$pathFile = $request->file;
    	return response()->download(storage_path('app/'.$pathFile));
    }
}
