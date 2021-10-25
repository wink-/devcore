<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \DateTimeInterface;

class FormValueVisible extends Model
{
    use HasFactory;

    public $table = 'form_value_visibles';

    protected $dates = [
        'timestamp',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'form_name',
        'visible_1',
        'visible_2',
        'visible_3',
        'visible_4',
        'visible_5',
        'visible_6',
        'visible_7',
        'visible_8',
        'visible_9',
        'visible_10',
        'visible_11',
        'visible_12',
        'visible_13',
        'visible_14',
        'visible_15',
        'visible_16',
        'visible_17',
        'visible_18',
        'visible_19',
        'visible_20',
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
