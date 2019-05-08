<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lowongan extends Model
{
    protected $fillable = ['nama_lowongan', 'skill', 'job_desc', 'status'];
    //
}
