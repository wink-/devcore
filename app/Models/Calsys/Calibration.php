<?php

namespace App\Models\Calsys;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \DateTimeInterface;

class Calibration extends Model
{
    use HasFactory;

    public $table = 'calibration';
    
    protected $connection = 'calsys';

    protected $primaryKey = 'ID';

    public $timestamps = false;
    
    protected $dates = [
    	'timeStamp',
    	'calDate',
    	'calDue',
    ];

    protected $fillable = [
        'deviceID',
        'calibratedByID',
        'employeeID',
        'calDate',
        'calDue',
        'status',
        'record',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}