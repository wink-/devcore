<?php

namespace App\Models\Pacsys;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \DateTimeInterface;

class FormType extends Model
{
    use HasFactory;

    public $table = 'FormType';

    protected $connection ='pacsys';

    protected $primaryKey = 'ID';

    public $timestamps = false;

    protected $dates = [
        'TimeStamp',
    ];

    protected $fillable = [
        'FormType',
        'Description',
        'TimeStamp',
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
        $this->attributes['TimeStamp'] = $value ? Carbon::createFromFormat(config('panel.date_format') . ' ' . config('panel.time_format'), $value)->format('Y-m-d H:i:s') : null;
    }
}
