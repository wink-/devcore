<?php

namespace App\Models\Wipsys;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \DateTimeInterface;

class Destination extends Model
{
    use HasFactory;

    public $table = 'sft_destinations';

    protected $connection ='wipsys';

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    protected $fillable = [
        'code',
        'name',
        'physical_address',
        'address_extension',
        'city',
        'state',
        'zip',
        'customer_code_id',
        'CONTACT1',
        'company_phone',
        'phone_1',
        'EXTENSION1',
        'CONTACT2',
        'PHONE2',
        'EXTENSION2',
        'fax',
        'email',
        'note',
        'archive',
        'revision',
        'created_at',
        'updated_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function customer_code()
    {
        return $this->belongsTo(Customer::class, 'customer_code_id');
    }
}
