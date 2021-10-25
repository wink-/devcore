<?php

namespace App\Models\Pacsys;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \DateTimeInterface;

class Unit extends Model
{
    use HasFactory;

    public $table = 'Unit';

    protected $connection ='pacsys';

    protected $primaryKey = 'ID';

    public $timestamps = false;


    protected $dates = [

    ];

    protected $fillable = [
        'Unit',
        'Description',
    ];


    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
