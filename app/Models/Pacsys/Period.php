<?php

namespace App\Models\Pacsys;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \DateTimeInterface;

class Period extends Model
{
    use HasFactory;

    public $table = 'Period';

    protected $connection ='pacsys';

    protected $primaryKey = 'ID';

    public $timestamps = false;


    protected $dates = [
        'TimeStamp',
    ];

    protected $fillable = [
        'Period',
        'Description',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
