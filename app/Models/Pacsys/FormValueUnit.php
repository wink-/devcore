<?php

namespace App\Models\Pacsys;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \DateTimeInterface;

class FormValueUnit extends Model
{
    use HasFactory;

    public $table = 'FormValueUnit';

    protected $connection ='pacsys';

    protected $primaryKey = 'ID';

    public $timestamps = false;

    protected $dates = [
        'TimeStamp',
    ];

    protected $fillable = [
        'Name',
        'FormName',
        'Unit1',
        'Unit2',
        'Unit3',
        'Unit4',
        'Unit5',
        'Unit6',
        'Unit7',
        'Unit8',
        'Unit9',
        'Unit10',
        'Unit11',
        'Unit12',
        'Unit13',
        'Unit14',
        'Unit15',
        'Unit16',
        'Unit17',
        'Unit18',
        'Unit19',
        'Unit20',
        'Tank',
        'TimeStamp',
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
        $this->attributes['TimeStamp'] = $value ? Carbon::createFromFormat(config('panel.date_format') . ' ' . config('panel.time_format'), $value)->format('Y-m-d H:i:s') : null;
    }
}
