<?php

namespace App\Models\Wipsys;

use \DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Process extends Model
{
    use SoftDeletes;
    use HasFactory;

    public $table = 'sft_processes';

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    protected $fillable = [
        'code',
        'name',
        'minimum_lot_charge',
        'compliant_rohs',
        'compliant_reach',
        'archive',
        'revision',
        'created_at',
        'updated_at',
    ];

    public function processQuotes()
    {
        return $this->hasMany(Quote::class, 'process_id', 'id');
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
