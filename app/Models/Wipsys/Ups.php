<?php

namespace App\Models\Wipsys;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \DateTimeInterface;

class Ups extends Model
{
    use HasFactory;

    public $table = 'ups';

    protected $connection ='wipsys';

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    protected $fillable = [
        'tracking_number',
        'receiver_name',
        'shipment_process_timestamp',
        'service_type',
        'weight',
        'ref_1',
        'ref_2',
        'ref_3',
        'ref_4',
        'ref_5',
        'archive',
        'revision',
        'created_at',
        'updated_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
