<?php

namespace App\Models\Pacsys;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \DateTimeInterface;

class Analysi extends Model
{
    use HasFactory;

    public $table = 'analysis';

    protected $dates = [
        'date',
        'time_stamp',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'record_name',
        'form_name',
        'date',
        'value_1',
        'value_2',
        'value_3',
        'value_4',
        'value_5',
        'value_6',
        'value_7',
        'value_8',
        'value_9',
        'value_10',
        'value_11',
        'value_12',
        'value_13',
        'value_14',
        'value_15',
        'value_16',
        'value_17',
        'value_18',
        'value_19',
        'value_20',
        'tank',
        'emp_code',
        'time_stamp',
        'delete_visible',
        'i_dy',
        'act_value_1',
        'act_value_2',
        'act_value_3',
        'act_value_4',
        'act_value_5',
        'act_value_6',
        'act_value_7',
        'act_value_8',
        'act_value_9',
        'act_value_10',
        'act_value_11',
        'act_value_12',
        'act_value_13',
        'act_value_14',
        'act_value_15',
        'act_value_16',
        'act_value_17',
        'act_value_18',
        'act_value_19',
        'act_value_20',
        'created_at',
        'updated_at',
        'deleted_at',
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
