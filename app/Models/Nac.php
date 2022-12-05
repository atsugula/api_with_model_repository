<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nac extends Model
{

    static $rules = [
		'name' => 'required',
    ];

    protected $fillable = ['name'];

    public function activities()
    {
        return $this->hasMany('App\Models\Activity', 'nac_id', 'id');
    }

}
