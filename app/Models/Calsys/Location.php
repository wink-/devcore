<?php

namespace App\Models\Calsys;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \DateTimeInterface;

class CalLocation extends Model
{
    use HasFactory;

    public $table = 'location';

    protected $connection = 'calsys';

    protected $primaryKey = 'ID';

    public $timestamps = false;    

    protected $dates = [

    ];

    protected $fillable = [
        'ID',
        'name',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
