<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \DateTimeInterface;

class LaborCard extends Model
{
    use HasFactory;

    public $table = 'labor_cards';

    protected $dates = [
        'job_date',
        'time_of_day',
        'time_finished',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'work_order_number',
        'employee_code',
        'step_code',
        'job_date',
        'time_of_day',
        'actual_hours',
        'man_hours',
        'actual_pieces',
        'equipment_code',
        'equipment_quantity',
        'loads',
        'cycle_time',
        'time_finished',
        'session',
        'archive',
        'revision',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function getJobDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setJobDateAttribute($value)
    {
        $this->attributes['job_date'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getTimeOfDayAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('panel.date_format') . ' ' . config('panel.time_format')) : null;
    }

    public function setTimeOfDayAttribute($value)
    {
        $this->attributes['time_of_day'] = $value ? Carbon::createFromFormat(config('panel.date_format') . ' ' . config('panel.time_format'), $value)->format('Y-m-d H:i:s') : null;
    }

    public function getTimeFinishedAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('panel.date_format') . ' ' . config('panel.time_format')) : null;
    }

    public function setTimeFinishedAttribute($value)
    {
        $this->attributes['time_finished'] = $value ? Carbon::createFromFormat(config('panel.date_format') . ' ' . config('panel.time_format'), $value)->format('Y-m-d H:i:s') : null;
    }
}
