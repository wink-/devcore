<?php

namespace App\Models\Wipsys;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \DateTimeInterface;

class Tag extends Model
{
    use HasFactory;

    public $table = 'sft_tags';

    protected $connection ='wipsys';

    protected $dates = [
        'date_received',
        'created_at',
        'updated_at',
    ];

    protected $fillable = [
        'number',
        'work_order_number',
        'quantity',
        'quantity_shipped',
        'shipped',
        'date_received',
        'note',
        'ordinal',
        'container',
        'printed',
        'sessionid',
        'archive',
        'revision',
        'created_at',
        'updated_at',

    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
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
