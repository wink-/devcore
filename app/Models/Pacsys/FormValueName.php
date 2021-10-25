<?php

namespace App\Models\Pacsys;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \DateTimeInterface;

class FormValueName extends Model
{
    use HasFactory;

    public $table = 'form_value_names';

    protected $dates = [
        'time_stamp',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'form_name',
        'name_1',
        'name_2',
        'name_3',
        'name_4',
        'name_5',
        'name_6',
        'name_7',
        'name_8',
        'name_9',
        'name_10',
        'name_11',
        'name_12',
        'name_13',
        'name_14',
        'name_15',
        'name_16',
        'name_17',
        'name_18',
        'name_19',
        'name_20',
        'tank',
        'time_stamp',
        'blank',
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
