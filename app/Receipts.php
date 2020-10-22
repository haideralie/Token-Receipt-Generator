<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Receipts extends Model
{
    protected $fillable = [
        'receipt_title', 'customername', 'customerfathername','customeraddress','customercontact','plot_size',
        'plot_totalprice','plot_tokenprice','block_location','plot_description','image',
    ];
}
