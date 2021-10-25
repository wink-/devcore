<?php

namespace App\Models\Pacsys;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \DateTimeInterface;

class FormValuePeriod extends Model
{
    use HasFactory;

    public $table = 'FormValuePeriod';

    protected $connection ='pacsys';

    protected $primaryKey = 'ID';

    public $timestamps = false;

    protected $dates = [
        'TimeStamp',
    ];

    protected $fillable = [
        'Name',
        'FormName',
        'Period1',
        'Period2',
        'Period3',
        'Period4',
        'Period5',
        'Period6',
        'Period7',
        'Period8',
        'Period9',
        'Period10',
        'Period11',
        'Period12',
        'Period13',
        'Period14',
        'Period15',
        'Period16',
        'Period17',
        'Period18',
        'Period19',
        'Period20',
        'Tank',
        'TimeStamp',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function getTimeStampAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('panel.date_format') . ' ' . config('panel.time_format')) : null;
    }

    public function setTimeStampAttribute($value)
    {
        $this->attributes['TimeStamp'] = $value ? Carbon::createFromFormat(config('panel.date_format') . ' ' . config('panel.time_format'), $value)->format('Y-m-d H:i:s') : null;
    }
}
