<?php

namespace App\Models\Wipsys;

use \DateTimeInterface;
use App\Traits\Auditable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    use Auditable;
    use HasFactory;

    public $table = 'quotes';

    public static $searchable = [
        'part_number',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'customer_id',
        'customer_code',
        'customer_name',
        'contact_id',
        'partid',
        'part_number',
        'revision_code',
        'customer_rfq',
        'part_description',
        'specification',
        'material',
        'process_id',
        'method_code',
        'method',
        'quantity_minimum',
        'quantity_maximum',
        'price',
        'units',
        'minimum_lot_charge',
        'quantity_price_break',
        'price_break',
        'weight',
        'surface_area',
        'thickness_minimum',
        'thickness_maximum',
        'notes',
        'comments',
        'baking',
        'baking_time_pre',
        'baking_temp_pre',
        'baking_time_post',
        'baking_temp_post',
        'bake_notes',
        'blasting',
        'blast_notes',
        'masking',
        'mask_notes',
        'testing',
        'test_notes',
        'user_id',
        'value_min',
        'value_max',
        'archive',
        'revision',
        'session',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }

    public function contact()
    {
        return $this->belongsTo(Contact::class, 'contact_id');
    }

    public function process()
    {
        return $this->belongsTo(Process::class, 'process_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
