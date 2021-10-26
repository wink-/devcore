<?php

namespace App\Models\ProcessData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \DateTimeInterface;

class Temperature extends Model
{
    use HasFactory;
    protected $connection = 'process_data';
    public $table = 'temperatures';

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    protected $fillable = [
        'record_id',
        'temperature',
        'created_at',
        'updated_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function record()
    {
        return $this->belongsTo(Record::class, 'record_id');
    }
}
