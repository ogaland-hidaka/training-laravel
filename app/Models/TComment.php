<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\TPost; // level03 Step03

// Modelクラスを作成するのがStep03の課題
class TComment extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    /** level01 Step04 START */
    protected $table = 't_comments';
    protected $fillable = [
        'id',
        'post_id',
        'comment_user_id',
        'comment',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
    protected $connection = 'mysql';
    /** level01 Step04 END */

    public function post()
    {
        return $this->belongsTo(TPost::class);
    }
}
