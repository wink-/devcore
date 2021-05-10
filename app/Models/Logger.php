<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \DateTimeInterface;

class Logger extends Model
{
    use HasFactory;

    public $table = 'loggers';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'active',
        'name',
        'description',
        'logger_type_id',
        'ip_address',
        'port',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function logger_type()
    {
        return $this->belongsTo(LoggerType::class, 'logger_type_id');
    }
}
