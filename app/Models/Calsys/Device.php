<?php

namespace App\Models\Calsys;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \DateTimeInterface;

class Device extends Model
{
    use HasFactory;

    public $table = 'device';

    protected $connection = 'calsys';

    protected $primaryKey = 'ID';

    public $timestamps = false;

    protected $dates = [
        'initDate',
        'timeStamp',
    ];

    protected $fillable = [
        'name',
        'description',
        'serialNumber',
        'sourceID',
        'typeID',
        'period',
        'location',
        'initDate',
        'timeStamp',
        'ownerID',
        
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function source()
    {
        return $this->belongsTo(CalSource::class, 'source_id');
    }

    public function type()
    {
        return $this->belongsTo(CalType::class, 'type_id');
    }

    public function period()
    {
        return $this->belongsTo(CalPeriod::class, 'period_id');
    }

    public function location()
    {
        return $this->belongsTo(CalLocation::class, 'location_id');
    }

    public function getInitDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setInitDateAttribute($value)
    {
        $this->attributes['init_date'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getTimeStampAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('panel.date_format') . ' ' . config('panel.time_format')) : null;
    }

    public function setTimeStampAttribute($value)
    {
        $this->attributes['time_stamp'] = $value ? Carbon::createFromFormat(config('panel.date_format') . ' ' . config('panel.time_format'), $value)->format('Y-m-d H:i:s') : null;
    }

    public function owner()
    {
        return $this->belongsTo(CalOwner::class, 'owner_id');
    }
}
