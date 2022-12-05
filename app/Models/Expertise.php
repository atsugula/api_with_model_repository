<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Expertise extends Model
{

    static $rules = [
		'name' => 'required',
    ];

    protected $fillable = ['name'];

    public function activities()
    {
        return $this->hasMany('App\Models\Activity', 'expertise_id', 'id');
    }

}
