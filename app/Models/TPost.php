<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\TComment; // level03 Step01

// Modelクラスを作成するのがStep03の課題
class TPost extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    /** level01 Step04 START */
    protected $table = 't_posts';
    protected $fillable = [
        'id',
        'post_user_id',
        'title',
        'body',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
    protected $connection = 'mysql';
    /** level01 Step04 END */

    /** level03 Step01 START */
    public function comments()
    {
        return $this->hasMany(TComment::class, 'post_id');
    }
    /** level03 Step01 END */
}
