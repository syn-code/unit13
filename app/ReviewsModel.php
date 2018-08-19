<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReviewsModel extends Model
{
    //
    public $table = 'reviews';
    protected $fillable = ['fullname', 'email', 'message', 'rating'];
}
