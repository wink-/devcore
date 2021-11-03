<?php

namespace App\Models\Wipsys;

use App\Traits\Auditable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \DateTimeInterface;

class Customer extends Model
{
    use Auditable, HasFactory;

    public $table = 'sft_customers';

    protected $connection ='wipsys';

    public static $searchable = [
        'code',
        'name',
    ];

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
        'destination_code',
        'packing_list_copies',
        'CONTACT1',
        'company_phone',
        'EXTENSION1',
        'CONTACT2',
        'PHONE2',
        'EXTENSION2',
        'fax',
        'email',
        'invoice_emails',
        'cod',
        'tax_id',
        'note',
        'billing_address',
        'billing_city',
        'billing_state',
        'billing_zip',
        'billing_phone',
        'billing_fax',
        'billing_email',
        'ship_to_addressid',
        'ship_to_address_code',
        'ship_to_address',
        'ship_to_city',
        'ship_to_state',
        'ship_to_zip',
        'ship_to_phone',
        'ship_to_fax',
        'ship_to_email',
        'archive',
        'revision',
        'carrier_id',
        'carrier_code',
        'created_at',
        'updated_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function customerCodeDestinations()
    {
        return $this->hasMany(Destination::class, 'customer_code_id', 'id');
    }

    public function customerContacts()
    {
        return $this->hasMany(Contact::class, 'customer_id', 'id');
    }

    public function customerQuotes()
    {
        return $this->hasMany(Quote::class, 'customer_id', 'id');
    }

    public function carrier()
    {
        return $this->belongsTo(Carrier::class, 'carrier_id');
    }
}
