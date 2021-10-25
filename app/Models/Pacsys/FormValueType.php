<?php

namespace App\Models\Pacsys;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \DateTimeInterface;

class FormValueType extends Model
{
    use HasFactory;

    public $table = 'form_value_types';

    protected $dates = [
        'timestamp',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'form_name',
        'type_1',
        'type_2',
        'type_3',
        'type_4',
        'type_5',
        'type_6',
        'type_7',
        'type_8',
        'type_9',
        'type_10',
        'type_11',
        'type_12',
        'type_13',
        'type_14',
        'type_15',
        'type_16',
        'type_17',
        'type_18',
        'type_19',
        'type_20',
        'tank',
        'timestamp',
        'false',
        'true',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function getTimestampAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('panel.date_format') . ' ' . config('panel.time_format')) : null;
    }

    public function setTimestampAttribute($value)
    {
        $this->attributes['timestamp'] = $value ? Carbon::createFromFormat(config('panel.date_format') . ' ' . config('panel.time_format'), $value)->format('Y-m-d H:i:s') : null;
    }
}
