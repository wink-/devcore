<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \DateTimeInterface;

class FormValueUnit extends Model
{
    use HasFactory;

    public $table = 'form_value_units';

    protected $dates = [
        'timestamp',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'form_name',
        'unit_1',
        'unit_2',
        'unit_3',
        'unit_4',
        'unit_5',
        'unit_6',
        'unit_7',
        'unit_8',
        'unit_9',
        'unit_10',
        'unit_11',
        'unit_12',
        'unit_13',
        'unit_14',
        'unit_15',
        'unit_16',
        'unit_17',
        'unit_18',
        'unit_19',
        'unit_20',
        'tank',
        'timestamp',
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
