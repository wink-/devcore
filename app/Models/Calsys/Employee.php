<?php

namespace App\Models\Calsys;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \DateTimeInterface;

class Calemployee extends Model
{
    use HasFactory;

    public $table = 'employee';

    protected $connection ='calsys';

    protected $privateKey = 'ID';

    
    public $timestamps = false;

    protected $dates = [

    ];

    protected $fillable = [
        'ID',
        'userInit',
        'name',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
