<?php

namespace App\Models\Pacsys;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \DateTimeInterface;

class Analysis extends Model
{
    use HasFactory;

    public $table = 'Analysis';

    protected $connection ='pacsys';

    protected $primaryKey = 'ID';

    public $timestamps = false;

    protected $dates = [
        'Date',
        'TimeStamp',
    ];

    protected $fillable = [
        'RecordName',
        'FormName',
        'Date',
        'Value1',
        'Value2',
        'Value3',
        'Value4',
        'Value5',
        'Value6',
        'Value7',
        'Value8',
        'Value9',
        'Value10',
        'Value11',
        'Value12',
        'Value13',
        'Value14',
        'Value15',
        'Value16',
        'Value17',
        'Value18',
        'Value19',
        'Value20',
        'Tank',
        'EmpCode',
        'TimeStamp',
        'DeleteVisible',
        'IDy',
        'ActValue1',
        'ActValue2',
        'ActValue3',
        'ActValue4',
        'ActValue5',
        'ActValue6',
        'ActValue7',
        'ActValue8',
        'ActValue9',
        'ActValue10',
        'ActValue11',
        'ActValue12',
        'ActValue13',
        'ActValue14',
        'ActValue15',
        'ActValue16',
        'ActValue17',
        'ActValue18',
        'ActValue19',
        'ActValue20',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function getDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setDateAttribute($value)
    {
        $this->attributes['date'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getTimeStampAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setTimeStampAttribute($value)
    {
        $this->attributes['time_stamp'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }
}
