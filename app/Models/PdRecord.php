<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \DateTimeInterface;

class PdRecord extends Model
{
    use HasFactory;

    public $table = 'pd_records';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'active',
        'name',
        'logger_id',
        'record_type_id',
        'command',
        'multiplier',
        'description',
        'unit_id',
        'graph_y_lower',
        'graph_y_upper',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function logger()
    {
        return $this->belongsTo(Logger::class, 'logger_id');
    }

    public function record_type()
    {
        return $this->belongsTo(RecordType::class, 'record_type_id');
    }

    public function unit()
    {
        return $this->belongsTo(PdUnit::class, 'unit_id');
    }
}
