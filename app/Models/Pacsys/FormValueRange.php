<?php

namespace App\Models\Pacsys;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \DateTimeInterface;

class FormValueRange extends Model
{
    use HasFactory;

    public $table = 'FormValueRange';

    protected $connection ='pacsys';

    protected $primaryKey = 'ID';

    public $timestamps = false;

    protected $dates = [
        'TimeStamp',
    ];

    protected $fillable = [
        'Name',
        'FormName',
        'Min1',
        'Max1',
        'Min2',
        'Max2',
        'Min3',
        'Max3',
        'Min4',
        'Max4',
        'Min5',
        'Max5',
        'Min6',
        'Max6',
        'Min7',
        'Max7',
        'Min8',
        'Max8',
        'Min9',
        'Max9',
        'Min10',
        'Max10',
        'Min11',
        'Max11',
        'Min12',
        'Max12',
        'Min13',
        'Max13',
        'Min14',
        'Max14',
        'Min15',
        'Max15',
        'Min16',
        'Max16',
        'Min17',
        'Max17',
        'Min18',
        'Max18',
        'Min19',
        'Max19',
        'Min20',
        'Max20',
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
