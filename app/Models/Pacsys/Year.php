<?php

namespace App\Models\Pacsys;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \DateTimeInterface;

class Year extends Model
{
    use HasFactory;

    public $table = 'Years';

    protected $connection ='pacsys';

    protected $primaryKey = 'Year';

    public $timestamps = false;


    protected $dates = [
    ];

    protected $fillable = [
        'Year',
    ];


}
