<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Schedules extends Model
{
    public $table = "schedules";
    
    use SoftDeletes;
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    protected $dates = ['deleted_at'];

    public  $fillable = ['user_id','origin','date_in','letter_number','activity_start','activity_end','activity',
							'place','disposisi','description','file'];

	public $rules = ['user_id' => 'required',
					'origin' => 'required',
					'date_in' => 'required|date',
					'letter_number' => 'required',
					'activity_start' => 'required',
					'activity_end' => 'required',
					'activity' => 'required'						
					];
}
