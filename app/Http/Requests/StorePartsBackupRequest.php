<?php

namespace App\Http\Requests;

use App\Models\PartsBackup;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StorePartsBackupRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('parts_backup_create');
    }

    public function rules()
    {
        return [
            'number'                       => [
                'string',
                'nullable',
            ],
            'description'                  => [
                'string',
                'nullable',
            ],
            'customer_code'                => [
                'string',
                'nullable',
            ],
            'customer_name'                => [
                'string',
                'nullable',
            ],
            'process_code'                 => [
                'string',
                'nullable',
            ],
            'method_code'                  => [
                'string',
                'nullable',
            ],
            'price_code'                   => [
                'string',
                'nullable',
            ],
            'quantity_price_break'         => [
                'string',
                'nullable',
            ],
            'unit_code'                    => [
                'string',
                'nullable',
            ],
            'quote'                        => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'specification'                => [
                'string',
                'nullable',
            ],
            'baking_time_pre'              => [
                'string',
                'nullable',
            ],
            'baking_temp_pre'              => [
                'string',
                'nullable',
            ],
            'baking_time_post'             => [
                'string',
                'nullable',
            ],
            'baking_temp_post'             => [
                'string',
                'nullable',
            ],
            'procedure_code'               => [
                'string',
                'nullable',
            ],
            'material'                     => [
                'string',
                'nullable',
            ],
            'material_name'                => [
                'string',
                'nullable',
            ],
            'material_condition'           => [
                'string',
                'nullable',
            ],
            'thickness_minimum'            => [
                'numeric',
            ],
            'thickness_maximum'            => [
                'numeric',
            ],
            'thickness_unit_code'          => [
                'string',
                'nullable',
            ],
            'surface_area'                 => [
                'numeric',
            ],
            'surface_area_unit_code'       => [
                'string',
                'nullable',
            ],
            'weight'                       => [
                'numeric',
            ],
            'weight_unit_code'             => [
                'string',
                'nullable',
            ],
            'length'                       => [
                'numeric',
            ],
            'width'                        => [
                'numeric',
            ],
            'height'                       => [
                'numeric',
            ],
            'dimension_unit_code'          => [
                'string',
                'nullable',
            ],
            'material_thickness'           => [
                'numeric',
            ],
            'material_thickness_unit_code' => [
                'string',
                'nullable',
            ],
            'quality_check_1'              => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'quality_check_2'              => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'quality_check_3'              => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'quality_check_4'              => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'quality_check_5'              => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'quality_check_6'              => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'image_count'                  => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'session'                      => [
                'string',
                'nullable',
            ],
            'revision'                     => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'number'                       => [
                'string',
                'nullable',
            ],
            'description'                  => [
                'string',
                'nullable',
            ],
            'customer_code'                => [
                'string',
                'nullable',
            ],
            'customer_name'                => [
                'string',
                'nullable',
            ],
            'process_code'                 => [
                'string',
                'nullable',
            ],
            'method_code'                  => [
                'string',
                'nullable',
            ],
            'price_code'                   => [
                'string',
                'nullable',
            ],
            'quantity_price_break'         => [
                'string',
                'nullable',
            ],
            'unit_code'                    => [
                'string',
                'nullable',
            ],
            'quote'                        => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'specification'                => [
                'string',
                'nullable',
            ],
            'baking_time_pre'              => [
                'string',
                'nullable',
            ],
            'baking_temp_pre'              => [
                'string',
                'nullable',
            ],
            'baking_time_post'             => [
                'string',
                'nullable',
            ],
            'baking_temp_post'             => [
                'string',
                'nullable',
            ],
            'procedure_code'               => [
                'string',
                'nullable',
            ],
            'material'                     => [
                'string',
                'nullable',
            ],
            'material_name'                => [
                'string',
                'nullable',
            ],
            'material_condition'           => [
                'string',
                'nullable',
            ],
            'thickness_minimum'            => [
                'numeric',
            ],
            'thickness_maximum'            => [
                'numeric',
            ],
            'thickness_unit_code'          => [
                'string',
                'nullable',
            ],
            'surface_area'                 => [
                'numeric',
            ],
            'surface_area_unit_code'       => [
                'string',
                'nullable',
            ],
            'weight'                       => [
                'numeric',
            ],
            'weight_unit_code'             => [
                'string',
                'nullable',
            ],
            'length'                       => [
                'numeric',
            ],
            'width'                        => [
                'numeric',
            ],
            'height'                       => [
                'numeric',
            ],
            'dimension_unit_code'          => [
                'string',
                'nullable',
            ],
            'material_thickness'           => [
                'numeric',
            ],
            'material_thickness_unit_code' => [
                'string',
                'nullable',
            ],
            'quality_check_1'              => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'quality_check_2'              => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'quality_check_3'              => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'quality_check_4'              => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'quality_check_5'              => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'quality_check_6'              => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'image_count'                  => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'session'                      => [
                'string',
                'nullable',
            ],
            'revision'                     => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
        ];
    }
}
