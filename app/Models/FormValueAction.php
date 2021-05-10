<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \DateTimeInterface;

class FormValueAction extends Model
{
    use HasFactory;

    public $table = 'form_value_actions';

    protected $dates = [
        'time_stamp',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'form_name',
        'action_1',
        'action_2',
        'action_3',
        'action_4',
        'action_5',
        'action_6',
        'action_7',
        'action_8',
        'action_9',
        'action_10',
        'action_11',
        'action_12',
        'action_13',
        'action_14',
        'action_15',
        'action_16',
        'action_17',
        'action_18',
        'action_19',
        'action_20',
        'tank',
        'time_stamp',
        'created_at',
        'updated_at',
        'deleted_at',
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
        $this->attributes['time_stamp'] = $value ? Carbon::createFromFormat(config('panel.date_format') . ' ' . config('panel.time_format'), $value)->format('Y-m-d H:i:s') : null;
    }
}
