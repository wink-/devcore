<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \DateTimeInterface;

class Action extends Model
{
    use HasFactory;

    public $table = 'Actions';

    protected $connection ='pacsys';

    protected $primaryKey = 'ID';

    public $timestamps = false;

    protected $dates = [
        'RecDate',
        'ActDate',
        'TimeStamp',
        // 'created_at',
        // 'updated_at',
    ];

    protected $fillable = [
        'IDx',
        'RecordName',
        'FormName',
        'ValueName',
        'Value',
        'RecDate',
        'ActDate',
        'Complete',
        'RecEmpCode',
        'Unit',
        'ActValue',
        'ScopeName',
        'Comment',
        'Tank',
        'TimeStamp',
        'EmpName',
        'IDy',
        'ValueNum',

    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function getRecDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setRecDateAttribute($value)
    {
        $this->attributes['RecDate'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getActDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setActDateAttribute($value)
    {
        $this->attributes['ActDate'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getTimeStampAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('panel.date_format') . ' ' . config('panel.time_format')) : null;
    }

    public function setTimeStampAttribute($value)
    {
        $this->attributes['TimeStamp'] = $value ? Carbon::createFromFormat(config('panel.date_format') . ' ' . config('panel.time_format'), $value)->format('Y-m-d H:i:s') : null;
    }

    public function getIdAttribute($value)
    {
        return $this->attributes['ID'];
    }
}
