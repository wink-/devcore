<?php

namespace App\Models\Pacsys;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \DateTimeInterface;

class FormValueVisible extends Model
{
    use HasFactory;

    public $table = 'FormValueVisible';

    protected $connection ='pacsys';

    protected $primaryKey = 'ID';

    public $timestamps = false;

    protected $dates = [
        'TimeStamp',
    ];

    protected $fillable = [
        'Name',
        'FormName',
        'Visible1',
        'Visible2',
        'Visible3',
        'Visible4',
        'Visible5',
        'Visible6',
        'Visible7',
        'Visible8',
        'Visible9',
        'Visible10',
        'Visible11',
        'Visible12',
        'Visible13',
        'Visible14',
        'Visible15',
        'Visible16',
        'Visible17',
        'Visible18',
        'Visible19',
        'Visible20',
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
