<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{

    public $timestamps = false;

    static $rules = [
		'monitor_id' => 'required',
		'cultural_right_id' => 'required',
		'nac_id' => 'required',
		'activity_date' => 'required',
		'start_time' => 'required',
		'final_hour' => 'required',
		'expertise_id' => 'required',
    ];

    protected $fillable = ['consecutive','monitor_id','cultural_right_id','nac_id','activity_date','start_time','final_hour','expertise_id','fecha_db'];

    public function culturalRight()
    {
        return $this->hasOne('App\Models\CulturalRight', 'id', 'cultural_right_id');
    }

    public function expertise()
    {
        return $this->hasOne('App\Models\Expertise', 'id', 'expertise_id');
    }

    public function monitor()
    {
        return $this->hasOne('App\Models\Monitor', 'id', 'monitor_id');
    }

    public function nac()
    {
        return $this->hasOne('App\Models\Nac', 'id', 'nac_id');
    }


}
