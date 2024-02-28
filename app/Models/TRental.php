<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\TPerson;

class TRental extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table = 't_rentals';
    protected $fillable = [
        'id',
        'person_id',
        'book_id',
        'start_date',
        'end_date',
        'status',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
    protected $connection = 'mysql';

    public function person()
    {
        return $this->belongsTo(TPerson::class);
    }
}
