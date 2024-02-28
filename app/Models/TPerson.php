<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TPerson extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table = 't_persons';
    protected $fillable = [
        'id',
        'name',
        'affiliation',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
    protected $connection = 'mysql';

}
