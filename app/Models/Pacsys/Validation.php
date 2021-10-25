<?php

namespace App\Models\Pacsys;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \DateTimeInterface;

class Validation extends Model
{
    use HasFactory;

    public $table = 'Validation';

    protected $connection ='pacsys';

    protected $primaryKey = 'ID';

    public $timestamps = false;


    protected $dates = [
    ];

    protected $fillable = [
        'ValidationText',
    ];

}
