<?php

namespace App\Models\Pacsys;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \DateTimeInterface;

class Month extends Model
{
    use HasFactory;

    public $table = 'Months';

    protected $connection ='pacsys';

    public $timestamps = false;

    protected $dates = [

    ];
    protected $fillable = [
        'MonthNumber',
        'MonthName',

    ];


}
