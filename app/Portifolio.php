<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portifolio extends Model
{
    protected $table = 'portifolios';

    public function galleries()
    {
        return $this->hasMany(Gallery::class);
    }
}

