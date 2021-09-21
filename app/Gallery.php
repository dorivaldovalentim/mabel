<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table = 'galleries';

    protected $fillable = [
        'portifolio_id', 'path'
    ];

    public function portifolio()
    {
        return $this->belongsTo(Portifolio::class);
    }

}
