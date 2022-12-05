<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Monitor extends Model
{

    static $rules = [
		'name' => 'required',
    ];

    protected $fillable = ['name'];

    public function activities()
    {
        return $this->hasMany('App\Models\Activity', 'monitor_id', 'id');
    }

}
