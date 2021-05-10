<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \DateTimeInterface;

class ActionsTemp extends Model
{
    use HasFactory;

    public $table = 'actions_temps';

    protected $dates = [
        'rec_date',
        'act_date',
        'time_stamp',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'i_dx',
        'record_name',
        'form_name',
        'value_name',
        'value',
        'rec_date',
        'act_date',
        'complete',
        'rec_emp_code',
        'unit',
        'act_value',
        'scope_name',
        'comment',
        'tank',
        'time_stamp',
        'emp_name',
        'i_dy',
        'value_num',
        'created_at',
        'updated_at',
        'deleted_at',
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
        $this->attributes['rec_date'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getActDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setActDateAttribute($value)
    {
        $this->attributes['act_date'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getTimeStampAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('panel.date_format') . ' ' . config('panel.time_format')) : null;
    }

    public function setTimeStampAttribute($value)
    {
        $this->attributes['time_stamp'] = $value ? Carbon::createFromFormat(config('panel.date_format') . ' ' . config('panel.time_format'), $value)->format('Y-m-d H:i:s') : null;
    }
}
