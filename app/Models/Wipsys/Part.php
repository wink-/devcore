<?php

namespace App\Models\Wipsys;

use \DateTimeInterface;
use App\Traits\Auditable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Part extends Model
{
    use Auditable;
    use HasFactory;

    public $table = 'parts';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'number',
        'revision_code',
        'description',
        'customer_code',
        'customer_name',
        'process_code',
        'method_code',
        'price',
        'price_code',
        'price_break',
        'quantity_price_break',
        'unit_code',
        'minimum_lot_charge',
        'minimum_line_charge',
        'quote',
        'certify',
        'specification',
        'bake',
        'baking_time_pre',
        'baking_temp_pre',
        'baking_time_post',
        'baking_temp_post',
        'procedure_code',
        'material',
        'material_name',
        'material_condition',
        'thickness_minimum',
        'thickness_maximum',
        'thickness_unit_code',
        'surface_area',
        'surface_area_unit_code',
        'weight',
        'weight_unit_code',
        'length',
        'width',
        'height',
        'dimension_unit_code',
        'material_thickness',
        'material_thickness_unit_code',
        'note',
        'special_requirement',
        'operator_note',
        'quality_check_1',
        'quality_check_2',
        'quality_check_3',
        'quality_check_4',
        'quality_check_5',
        'quality_check_6',
        'image_count',
        'session',
        'archive',
        'revision',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function partWorkorders()
    {
        return $this->hasMany(Workorder::class, 'part_id', 'id');
    }

    public function partWorkorderhistories()
    {
        return $this->hasMany(Workorderhistory::class, 'part_id', 'id');
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}