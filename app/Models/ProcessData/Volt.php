<?php

namespace App\Models\ProcessData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProcessData\Record;
use \DateTimeInterface;

class Volt extends Model
{
    use HasFactory;
    protected $connection = 'process_data';
    public $table = 'volt';

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    protected $fillable = [
        'record_id',
        'volt',
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
