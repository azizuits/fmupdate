<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    //use HasFactory;
	protected $table = 'medicines';
	public $timestamps = false;
}
