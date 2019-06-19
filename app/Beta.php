<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beta extends Model
{
    protected $table = 'beta';
    protected $guarded = ['id'];

    function hargaIdr()
    {
        return "Rp" . number_format($this->harga,2,',','.');
    }

}
