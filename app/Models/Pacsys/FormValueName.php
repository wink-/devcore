<?php

namespace App\Models\Pacsys;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \DateTimeInterface;

class FormValueName extends Model
{
    use HasFactory;

    public $table = 'FormValueName';

    protected $connection ='pacsys';

    protected $primaryKey = 'ID';

    public $timestamps = false;

    protected $dates = [
        'TimeStamp',
    ];

    protected $fillable = [
        'Name',
        'FormName',
        'Name1',
        'Name2',
        'Name3',
        'Name4',
        'Name5',
        'Name6',
        'Name7',
        'Name8',
        'Name9',
        'Name10',
        'Name11',
        'Name12',
        'Name13',
        'Name14',
        'Name15',
        'Name16',
        'Name17',
        'Name18',
        'Name19',
        'Name20',
        'Tank',
        'TimeStamp',
        'Blank',
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
