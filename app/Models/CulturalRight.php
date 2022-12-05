<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CulturalRight extends Model
{

    static $rules = [
		'name' => 'required',
    ];

    protected $fillable = ['name'];

    public function activities()
    {
        return $this->hasMany('App\Models\Activity', 'cultural_right_id', 'id');
    }

}
