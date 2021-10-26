<?php

namespace App\Models\Wipsys;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \DateTimeInterface;

class Procedure extends Model
{
    use HasFactory;

    public $table = 'sft_procedures';

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    protected $fillable = [
        'code',
        'description',
        'document',
        'minimum_price',
        'each_price',
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
