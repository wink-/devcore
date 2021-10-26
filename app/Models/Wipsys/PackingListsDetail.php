<?php

namespace App\Models\Wipsys;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \DateTimeInterface;

class PackingListsDetail extends Model
{
    use HasFactory;

    public $table = 'sft_packing_lists_detail';

    protected $dates = [
        'packing_list_date',
        'date_received',
        'created_at',
        'updated_at',
    ];

    protected $fillable = [
        'packing_list_number',
        'tag_number',
        'work_order_number',
        'part',
        'part_number',
        'customer_code',
        'destination_code',
        'process_code',
        'method_code',
        'customer_packing_list',
        'customer_purchase_order',
        'certification_number',
        'certify',
        'tag_quantity',
        'tag_quantity_shipped',
        'quantity',
        'shipped_amount',
        'packing_list_date',
        'date_received',
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

    public function getPackingListDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setPackingListDateAttribute($value)
    {
        $this->attributes['packing_list_date'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
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
