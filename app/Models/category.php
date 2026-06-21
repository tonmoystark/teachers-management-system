<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    //
    public function product()
    {
        $this->hasMany(product::class);
    }
}
