<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use willvincent\Rateable\Rateable;

class Vendor extends Model
{
    use Rateable;
    protected $table = 'vendors';
    protected $guarded = [];
}
