<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \DateTimeInterface;

class FormValueRange extends Model
{
    use HasFactory;

    public $table = 'form_value_ranges';

    protected $dates = [
        'time_stamp',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'form_name',
        'min_1',
        'max_1',
        'min_2',
        'max_2',
        'min_3',
        'max_3',
        'min_4',
        'max_4',
        'min_5',
        'max_5',
        'min_6',
        'max_6',
        'min_7',
        'max_7',
        'min_8',
        'max_8',
        'min_9',
        'max_9',
        'min_10',
        'max_10',
        'min_11',
        'max_11',
        'min_12',
        'max_12',
        'min_13',
        'max_13',
        'min_14',
        'max_14',
        'min_15',
        'max_15',
        'min_16',
        'max_16',
        'min_17',
        'max_17',
        'min_18',
        'max_18',
        'min_19',
        'max_19',
        'min_20',
        'max_20',
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
