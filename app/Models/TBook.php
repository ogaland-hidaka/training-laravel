<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\TRental;
use App\Models\TReview;

/** level04 Step01 START */
class TBook extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table = 't_books';
    protected $fillable = [
        'id',
        'title',
        'author',
        'purchase_date',
        'person_id',
        'estimated_reading_time',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
    protected $connection = 'mysql';

    public function rentals()
    {
        return $this->hasMany(TRental::class, 'book_id');
    }

    public function reviews()
    {
        return $this->hasMany(TReview::class, 'book_id');
    }
}
/** level04 Step01 END */
