<?php

namespace App\Models\Wipsys;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \DateTimeInterface;

class PackingList extends Model
{
    use HasFactory;

    public $table = 'sft_packing_lists';

    protected $dates = [
        'date',
        'date_received',
        'created_at',
        'updated_at',
    ];

    protected $fillable = [
        'number',
        'date',
        'employee_code',
        'user_code',
        'customer_code',
        'destination_code',
        'carrier_code',
        'freight_code',
        'customer_purchase_order',
        'cod',
        'date_received',
        'printed',
        'session',
        'archive',
        'revision',
        'created_at',
        'updated_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function getDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setDateAttribute($value)
    {
        $this->attributes['date'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getDateReceivedAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setDateReceivedAttribute($value)
    {
        $this->attributes['date_received'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }
}
