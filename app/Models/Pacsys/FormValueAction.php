<?php

namespace App\Models\Pacsys;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \DateTimeInterface;

class FormValueAction extends Model
{
    use HasFactory;

    public $table = 'FormValueAction';

    protected $connection ='pacsys';

    protected $primaryKey = 'ID';

    public $timestamps = false;

    protected $dates = [
        'TimeStamp',
    ];

    protected $fillable = [
        'Name',
        'FormName',
        'Action1',
        'Action2',
        'Action3',
        'Action4',
        'Action5',
        'Action6',
        'Action7',
        'Action8',
        'Action9',
        'Action10',
        'Action11',
        'Action12',
        'Action13',
        'Action14',
        'Action15',
        'Action16',
        'Action17',
        'Action18',
        'Action19',
        'Action20',
        'Tank',
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
