<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'audit_log_show',
            ],
            [
                'id'    => 18,
                'title' => 'audit_log_access',
            ],
            [
                'id'    => 19,
                'title' => 'customer_resource_management_access',
            ],
            [
                'id'    => 20,
                'title' => 'carrier_create',
            ],
            [
                'id'    => 21,
                'title' => 'carrier_edit',
            ],
            [
                'id'    => 22,
                'title' => 'carrier_show',
            ],
            [
                'id'    => 23,
                'title' => 'carrier_delete',
            ],
            [
                'id'    => 24,
                'title' => 'carrier_access',
            ],
            [
                'id'    => 25,
                'title' => 'customer_create',
            ],
            [
                'id'    => 26,
                'title' => 'customer_edit',
            ],
            [
                'id'    => 27,
                'title' => 'customer_show',
            ],
            [
                'id'    => 28,
                'title' => 'customer_access',
            ],
            [
                'id'    => 29,
                'title' => 'destination_create',
            ],
            [
                'id'    => 30,
                'title' => 'destination_edit',
            ],
            [
                'id'    => 31,
                'title' => 'destination_show',
            ],
            [
                'id'    => 32,
                'title' => 'destination_delete',
            ],
            [
                'id'    => 33,
                'title' => 'destination_access',
            ],
            [
                'id'    => 34,
                'title' => 'contact_create',
            ],
            [
                'id'    => 35,
                'title' => 'contact_edit',
            ],
            [
                'id'    => 36,
                'title' => 'contact_show',
            ],
            [
                'id'    => 37,
                'title' => 'contact_delete',
            ],
            [
                'id'    => 38,
                'title' => 'contact_access',
            ],
            [
                'id'    => 39,
                'title' => 'wip_sys_administration_access',
            ],
            [
                'id'    => 40,
                'title' => 'process_create',
            ],
            [
                'id'    => 41,
                'title' => 'process_edit',
            ],
            [
                'id'    => 42,
                'title' => 'process_show',
            ],
            [
                'id'    => 43,
                'title' => 'process_delete',
            ],
            [
                'id'    => 44,
                'title' => 'process_access',
            ],
            [
                'id'    => 45,
                'title' => 'part_create',
            ],
            [
                'id'    => 46,
                'title' => 'part_edit',
            ],
            [
                'id'    => 47,
                'title' => 'part_show',
            ],
            [
                'id'    => 48,
                'title' => 'part_access',
            ],
            [
                'id'    => 49,
                'title' => 'administration_access',
            ],
            [
                'id'    => 50,
                'title' => 'session_create',
            ],
            [
                'id'    => 51,
                'title' => 'session_edit',
            ],
            [
                'id'    => 52,
                'title' => 'session_show',
            ],
            [
                'id'    => 53,
                'title' => 'session_delete',
            ],
            [
                'id'    => 54,
                'title' => 'session_access',
            ],
            [
                'id'    => 55,
                'title' => 'procedure_create',
            ],
            [
                'id'    => 56,
                'title' => 'procedure_edit',
            ],
            [
                'id'    => 57,
                'title' => 'procedure_show',
            ],
            [
                'id'    => 58,
                'title' => 'procedure_delete',
            ],
            [
                'id'    => 59,
                'title' => 'procedure_access',
            ],
            [
                'id'    => 60,
                'title' => 'material_create',
            ],
            [
                'id'    => 61,
                'title' => 'material_edit',
            ],
            [
                'id'    => 62,
                'title' => 'material_show',
            ],
            [
                'id'    => 63,
                'title' => 'material_delete',
            ],
            [
                'id'    => 64,
                'title' => 'material_access',
            ],
            [
                'id'    => 65,
                'title' => 'method_create',
            ],
            [
                'id'    => 66,
                'title' => 'method_edit',
            ],
            [
                'id'    => 67,
                'title' => 'method_show',
            ],
            [
                'id'    => 68,
                'title' => 'method_delete',
            ],
            [
                'id'    => 69,
                'title' => 'method_access',
            ],
            [
                'id'    => 70,
                'title' => 'quote_create',
            ],
            [
                'id'    => 71,
                'title' => 'quote_edit',
            ],
            [
                'id'    => 72,
                'title' => 'quote_show',
            ],
            [
                'id'    => 73,
                'title' => 'quote_delete',
            ],
            [
                'id'    => 74,
                'title' => 'quote_access',
            ],
            [
                'id'    => 75,
                'title' => 'workorder_create',
            ],
            [
                'id'    => 76,
                'title' => 'workorder_edit',
            ],
            [
                'id'    => 77,
                'title' => 'workorder_show',
            ],
            [
                'id'    => 78,
                'title' => 'workorder_delete',
            ],
            [
                'id'    => 79,
                'title' => 'workorder_access',
            ],
            [
                'id'    => 80,
                'title' => 'workorderhistory_create',
            ],
            [
                'id'    => 81,
                'title' => 'workorderhistory_edit',
            ],
            [
                'id'    => 82,
                'title' => 'workorderhistory_show',
            ],
            [
                'id'    => 83,
                'title' => 'workorderhistory_access',
            ],
            [
                'id'    => 84,
                'title' => 'employee_create',
            ],
            [
                'id'    => 85,
                'title' => 'employee_edit',
            ],
            [
                'id'    => 86,
                'title' => 'employee_show',
            ],
            [
                'id'    => 87,
                'title' => 'employee_access',
            ],
            [
                'id'    => 88,
                'title' => 'equipment_create',
            ],
            [
                'id'    => 89,
                'title' => 'equipment_edit',
            ],
            [
                'id'    => 90,
                'title' => 'equipment_show',
            ],
            [
                'id'    => 91,
                'title' => 'equipment_access',
            ],
            [
                'id'    => 92,
                'title' => 'cal_sy_access',
            ],
            [
                'id'    => 93,
                'title' => 'calibrated_by_create',
            ],
            [
                'id'    => 94,
                'title' => 'calibrated_by_edit',
            ],
            [
                'id'    => 95,
                'title' => 'calibrated_by_show',
            ],
            [
                'id'    => 96,
                'title' => 'calibrated_by_delete',
            ],
            [
                'id'    => 97,
                'title' => 'calibrated_by_access',
            ],
            [
                'id'    => 98,
                'title' => 'calemployee_create',
            ],
            [
                'id'    => 99,
                'title' => 'calemployee_edit',
            ],
            [
                'id'    => 100,
                'title' => 'calemployee_show',
            ],
            [
                'id'    => 101,
                'title' => 'calemployee_delete',
            ],
            [
                'id'    => 102,
                'title' => 'calemployee_access',
            ],
            [
                'id'    => 103,
                'title' => 'cal_type_create',
            ],
            [
                'id'    => 104,
                'title' => 'cal_type_edit',
            ],
            [
                'id'    => 105,
                'title' => 'cal_type_show',
            ],
            [
                'id'    => 106,
                'title' => 'cal_type_delete',
            ],
            [
                'id'    => 107,
                'title' => 'cal_type_access',
            ],
            [
                'id'    => 108,
                'title' => 'cal_location_create',
            ],
            [
                'id'    => 109,
                'title' => 'cal_location_edit',
            ],
            [
                'id'    => 110,
                'title' => 'cal_location_show',
            ],
            [
                'id'    => 111,
                'title' => 'cal_location_delete',
            ],
            [
                'id'    => 112,
                'title' => 'cal_location_access',
            ],
            [
                'id'    => 113,
                'title' => 'cal_owner_create',
            ],
            [
                'id'    => 114,
                'title' => 'cal_owner_edit',
            ],
            [
                'id'    => 115,
                'title' => 'cal_owner_show',
            ],
            [
                'id'    => 116,
                'title' => 'cal_owner_delete',
            ],
            [
                'id'    => 117,
                'title' => 'cal_owner_access',
            ],
            [
                'id'    => 118,
                'title' => 'cal_period_create',
            ],
            [
                'id'    => 119,
                'title' => 'cal_period_edit',
            ],
            [
                'id'    => 120,
                'title' => 'cal_period_show',
            ],
            [
                'id'    => 121,
                'title' => 'cal_period_delete',
            ],
            [
                'id'    => 122,
                'title' => 'cal_period_access',
            ],
            [
                'id'    => 123,
                'title' => 'cal_source_create',
            ],
            [
                'id'    => 124,
                'title' => 'cal_source_edit',
            ],
            [
                'id'    => 125,
                'title' => 'cal_source_show',
            ],
            [
                'id'    => 126,
                'title' => 'cal_source_delete',
            ],
            [
                'id'    => 127,
                'title' => 'cal_source_access',
            ],
            [
                'id'    => 128,
                'title' => 'cal_status_create',
            ],
            [
                'id'    => 129,
                'title' => 'cal_status_edit',
            ],
            [
                'id'    => 130,
                'title' => 'cal_status_show',
            ],
            [
                'id'    => 131,
                'title' => 'cal_status_delete',
            ],
            [
                'id'    => 132,
                'title' => 'cal_status_access',
            ],
            [
                'id'    => 133,
                'title' => 'cal_device_create',
            ],
            [
                'id'    => 134,
                'title' => 'cal_device_edit',
            ],
            [
                'id'    => 135,
                'title' => 'cal_device_show',
            ],
            [
                'id'    => 136,
                'title' => 'cal_device_delete',
            ],
            [
                'id'    => 137,
                'title' => 'cal_device_access',
            ],
            [
                'id'    => 138,
                'title' => 'quality_access',
            ],
            [
                'id'    => 139,
                'title' => 'priority_create',
            ],
            [
                'id'    => 140,
                'title' => 'priority_edit',
            ],
            [
                'id'    => 141,
                'title' => 'priority_show',
            ],
            [
                'id'    => 142,
                'title' => 'priority_delete',
            ],
            [
                'id'    => 143,
                'title' => 'priority_access',
            ],
            [
                'id'    => 144,
                'title' => 'state_create',
            ],
            [
                'id'    => 145,
                'title' => 'state_edit',
            ],
            [
                'id'    => 146,
                'title' => 'state_show',
            ],
            [
                'id'    => 147,
                'title' => 'state_delete',
            ],
            [
                'id'    => 148,
                'title' => 'state_access',
            ],
            [
                'id'    => 149,
                'title' => 'qualitycheck_create',
            ],
            [
                'id'    => 150,
                'title' => 'qualitycheck_edit',
            ],
            [
                'id'    => 151,
                'title' => 'qualitycheck_show',
            ],
            [
                'id'    => 152,
                'title' => 'qualitycheck_delete',
            ],
            [
                'id'    => 153,
                'title' => 'qualitycheck_access',
            ],
            [
                'id'    => 154,
                'title' => 'step_create',
            ],
            [
                'id'    => 155,
                'title' => 'step_edit',
            ],
            [
                'id'    => 156,
                'title' => 'step_show',
            ],
            [
                'id'    => 157,
                'title' => 'step_delete',
            ],
            [
                'id'    => 158,
                'title' => 'step_access',
            ],
            [
                'id'    => 159,
                'title' => 'freight_create',
            ],
            [
                'id'    => 160,
                'title' => 'freight_edit',
            ],
            [
                'id'    => 161,
                'title' => 'freight_show',
            ],
            [
                'id'    => 162,
                'title' => 'freight_delete',
            ],
            [
                'id'    => 163,
                'title' => 'freight_access',
            ],
            [
                'id'    => 164,
                'title' => 'invoice_show',
            ],
            [
                'id'    => 165,
                'title' => 'invoice_access',
            ],
            [
                'id'    => 166,
                'title' => 'labor_card_edit',
            ],
            [
                'id'    => 167,
                'title' => 'labor_card_show',
            ],
            [
                'id'    => 168,
                'title' => 'labor_card_access',
            ],
            [
                'id'    => 169,
                'title' => 'log_show',
            ],
            [
                'id'    => 170,
                'title' => 'log_access',
            ],
            [
                'id'    => 171,
                'title' => 'packing_list_create',
            ],
            [
                'id'    => 172,
                'title' => 'packing_list_edit',
            ],
            [
                'id'    => 173,
                'title' => 'packing_list_show',
            ],
            [
                'id'    => 174,
                'title' => 'packing_list_access',
            ],
            [
                'id'    => 175,
                'title' => 'packing_lists_detail_edit',
            ],
            [
                'id'    => 176,
                'title' => 'packing_lists_detail_show',
            ],
            [
                'id'    => 177,
                'title' => 'packing_lists_detail_access',
            ],
            [
                'id'    => 178,
                'title' => 'parts_backup_edit',
            ],
            [
                'id'    => 179,
                'title' => 'parts_backup_show',
            ],
            [
                'id'    => 180,
                'title' => 'parts_backup_access',
            ],
            [
                'id'    => 181,
                'title' => 'partshistory_edit',
            ],
            [
                'id'    => 182,
                'title' => 'partshistory_show',
            ],
            [
                'id'    => 183,
                'title' => 'partshistory_access',
            ],
            [
                'id'    => 184,
                'title' => 'price_code_create',
            ],
            [
                'id'    => 185,
                'title' => 'price_code_edit',
            ],
            [
                'id'    => 186,
                'title' => 'price_code_show',
            ],
            [
                'id'    => 187,
                'title' => 'price_code_delete',
            ],
            [
                'id'    => 188,
                'title' => 'price_code_access',
            ],
            [
                'id'    => 189,
                'title' => 'printer_create',
            ],
            [
                'id'    => 190,
                'title' => 'printer_edit',
            ],
            [
                'id'    => 191,
                'title' => 'printer_show',
            ],
            [
                'id'    => 192,
                'title' => 'printer_access',
            ],
            [
                'id'    => 193,
                'title' => 'tag_create',
            ],
            [
                'id'    => 194,
                'title' => 'tag_edit',
            ],
            [
                'id'    => 195,
                'title' => 'tag_show',
            ],
            [
                'id'    => 196,
                'title' => 'tag_access',
            ],
            [
                'id'    => 197,
                'title' => 'unit_create',
            ],
            [
                'id'    => 198,
                'title' => 'unit_edit',
            ],
            [
                'id'    => 199,
                'title' => 'unit_show',
            ],
            [
                'id'    => 200,
                'title' => 'unit_delete',
            ],
            [
                'id'    => 201,
                'title' => 'unit_access',
            ],
            [
                'id'    => 202,
                'title' => 'sftuser_create',
            ],
            [
                'id'    => 203,
                'title' => 'sftuser_edit',
            ],
            [
                'id'    => 204,
                'title' => 'sftuser_show',
            ],
            [
                'id'    => 205,
                'title' => 'sftuser_delete',
            ],
            [
                'id'    => 206,
                'title' => 'sftuser_access',
            ],
            [
                'id'    => 207,
                'title' => 'workgroup_create',
            ],
            [
                'id'    => 208,
                'title' => 'workgroup_edit',
            ],
            [
                'id'    => 209,
                'title' => 'workgroup_show',
            ],
            [
                'id'    => 210,
                'title' => 'workgroup_delete',
            ],
            [
                'id'    => 211,
                'title' => 'workgroup_access',
            ],
            [
                'id'    => 212,
                'title' => 'up_show',
            ],
            [
                'id'    => 213,
                'title' => 'up_access',
            ],
            [
                'id'    => 214,
                'title' => 'pac_sy_access',
            ],
            [
                'id'    => 215,
                'title' => 'action_create',
            ],
            [
                'id'    => 216,
                'title' => 'action_edit',
            ],
            [
                'id'    => 217,
                'title' => 'action_show',
            ],
            [
                'id'    => 218,
                'title' => 'action_delete',
            ],
            [
                'id'    => 219,
                'title' => 'action_access',
            ],
            [
                'id'    => 220,
                'title' => 'actions_temp_create',
            ],
            [
                'id'    => 221,
                'title' => 'actions_temp_edit',
            ],
            [
                'id'    => 222,
                'title' => 'actions_temp_show',
            ],
            [
                'id'    => 223,
                'title' => 'actions_temp_delete',
            ],
            [
                'id'    => 224,
                'title' => 'actions_temp_access',
            ],
            [
                'id'    => 225,
                'title' => 'analysi_create',
            ],
            [
                'id'    => 226,
                'title' => 'analysi_edit',
            ],
            [
                'id'    => 227,
                'title' => 'analysi_show',
            ],
            [
                'id'    => 228,
                'title' => 'analysi_delete',
            ],
            [
                'id'    => 229,
                'title' => 'analysi_access',
            ],
            [
                'id'    => 230,
                'title' => 'analysis_new_create',
            ],
            [
                'id'    => 231,
                'title' => 'analysis_new_edit',
            ],
            [
                'id'    => 232,
                'title' => 'analysis_new_show',
            ],
            [
                'id'    => 233,
                'title' => 'analysis_new_delete',
            ],
            [
                'id'    => 234,
                'title' => 'analysis_new_access',
            ],
            [
                'id'    => 235,
                'title' => 'calc_value_create',
            ],
            [
                'id'    => 236,
                'title' => 'calc_value_edit',
            ],
            [
                'id'    => 237,
                'title' => 'calc_value_show',
            ],
            [
                'id'    => 238,
                'title' => 'calc_value_delete',
            ],
            [
                'id'    => 239,
                'title' => 'calc_value_access',
            ],
            [
                'id'    => 240,
                'title' => 'p_employee_create',
            ],
            [
                'id'    => 241,
                'title' => 'p_employee_edit',
            ],
            [
                'id'    => 242,
                'title' => 'p_employee_show',
            ],
            [
                'id'    => 243,
                'title' => 'p_employee_delete',
            ],
            [
                'id'    => 244,
                'title' => 'p_employee_access',
            ],
            [
                'id'    => 245,
                'title' => 'form_create',
            ],
            [
                'id'    => 246,
                'title' => 'form_edit',
            ],
            [
                'id'    => 247,
                'title' => 'form_show',
            ],
            [
                'id'    => 248,
                'title' => 'form_delete',
            ],
            [
                'id'    => 249,
                'title' => 'form_access',
            ],
            [
                'id'    => 250,
                'title' => 'form_type_create',
            ],
            [
                'id'    => 251,
                'title' => 'form_type_edit',
            ],
            [
                'id'    => 252,
                'title' => 'form_type_show',
            ],
            [
                'id'    => 253,
                'title' => 'form_type_delete',
            ],
            [
                'id'    => 254,
                'title' => 'form_type_access',
            ],
            [
                'id'    => 255,
                'title' => 'form_value_action_create',
            ],
            [
                'id'    => 256,
                'title' => 'form_value_action_edit',
            ],
            [
                'id'    => 257,
                'title' => 'form_value_action_show',
            ],
            [
                'id'    => 258,
                'title' => 'form_value_action_delete',
            ],
            [
                'id'    => 259,
                'title' => 'form_value_action_access',
            ],
            [
                'id'    => 260,
                'title' => 'form_value_name_create',
            ],
            [
                'id'    => 261,
                'title' => 'form_value_name_edit',
            ],
            [
                'id'    => 262,
                'title' => 'form_value_name_show',
            ],
            [
                'id'    => 263,
                'title' => 'form_value_name_delete',
            ],
            [
                'id'    => 264,
                'title' => 'form_value_name_access',
            ],
            [
                'id'    => 265,
                'title' => 'form_value_period_create',
            ],
            [
                'id'    => 266,
                'title' => 'form_value_period_edit',
            ],
            [
                'id'    => 267,
                'title' => 'form_value_period_show',
            ],
            [
                'id'    => 268,
                'title' => 'form_value_period_delete',
            ],
            [
                'id'    => 269,
                'title' => 'form_value_period_access',
            ],
            [
                'id'    => 270,
                'title' => 'form_value_range_create',
            ],
            [
                'id'    => 271,
                'title' => 'form_value_range_edit',
            ],
            [
                'id'    => 272,
                'title' => 'form_value_range_show',
            ],
            [
                'id'    => 273,
                'title' => 'form_value_range_delete',
            ],
            [
                'id'    => 274,
                'title' => 'form_value_range_access',
            ],
            [
                'id'    => 275,
                'title' => 'form_value_type_create',
            ],
            [
                'id'    => 276,
                'title' => 'form_value_type_edit',
            ],
            [
                'id'    => 277,
                'title' => 'form_value_type_show',
            ],
            [
                'id'    => 278,
                'title' => 'form_value_type_delete',
            ],
            [
                'id'    => 279,
                'title' => 'form_value_type_access',
            ],
            [
                'id'    => 280,
                'title' => 'form_value_unit_create',
            ],
            [
                'id'    => 281,
                'title' => 'form_value_unit_edit',
            ],
            [
                'id'    => 282,
                'title' => 'form_value_unit_show',
            ],
            [
                'id'    => 283,
                'title' => 'form_value_unit_delete',
            ],
            [
                'id'    => 284,
                'title' => 'form_value_unit_access',
            ],
            [
                'id'    => 285,
                'title' => 'form_value_visible_create',
            ],
            [
                'id'    => 286,
                'title' => 'form_value_visible_edit',
            ],
            [
                'id'    => 287,
                'title' => 'form_value_visible_show',
            ],
            [
                'id'    => 288,
                'title' => 'form_value_visible_delete',
            ],
            [
                'id'    => 289,
                'title' => 'form_value_visible_access',
            ],
            [
                'id'    => 290,
                'title' => 'month_create',
            ],
            [
                'id'    => 291,
                'title' => 'month_edit',
            ],
            [
                'id'    => 292,
                'title' => 'month_show',
            ],
            [
                'id'    => 293,
                'title' => 'month_delete',
            ],
            [
                'id'    => 294,
                'title' => 'month_access',
            ],
            [
                'id'    => 295,
                'title' => 'period_create',
            ],
            [
                'id'    => 296,
                'title' => 'period_edit',
            ],
            [
                'id'    => 297,
                'title' => 'period_show',
            ],
            [
                'id'    => 298,
                'title' => 'period_delete',
            ],
            [
                'id'    => 299,
                'title' => 'period_access',
            ],
            [
                'id'    => 300,
                'title' => 'record_create',
            ],
            [
                'id'    => 301,
                'title' => 'record_edit',
            ],
            [
                'id'    => 302,
                'title' => 'record_show',
            ],
            [
                'id'    => 303,
                'title' => 'record_delete',
            ],
            [
                'id'    => 304,
                'title' => 'record_access',
            ],
            [
                'id'    => 305,
                'title' => 'scope_create',
            ],
            [
                'id'    => 306,
                'title' => 'scope_edit',
            ],
            [
                'id'    => 307,
                'title' => 'scope_show',
            ],
            [
                'id'    => 308,
                'title' => 'scope_delete',
            ],
            [
                'id'    => 309,
                'title' => 'scope_access',
            ],
            [
                'id'    => 310,
                'title' => 'security_create',
            ],
            [
                'id'    => 311,
                'title' => 'security_edit',
            ],
            [
                'id'    => 312,
                'title' => 'security_show',
            ],
            [
                'id'    => 313,
                'title' => 'security_delete',
            ],
            [
                'id'    => 314,
                'title' => 'security_access',
            ],
            [
                'id'    => 315,
                'title' => 'p_unit_create',
            ],
            [
                'id'    => 316,
                'title' => 'p_unit_edit',
            ],
            [
                'id'    => 317,
                'title' => 'p_unit_show',
            ],
            [
                'id'    => 318,
                'title' => 'p_unit_delete',
            ],
            [
                'id'    => 319,
                'title' => 'p_unit_access',
            ],
            [
                'id'    => 320,
                'title' => 'year_create',
            ],
            [
                'id'    => 321,
                'title' => 'year_edit',
            ],
            [
                'id'    => 322,
                'title' => 'year_show',
            ],
            [
                'id'    => 323,
                'title' => 'year_delete',
            ],
            [
                'id'    => 324,
                'title' => 'year_access',
            ],
            [
                'id'    => 325,
                'title' => 'process_data_access',
            ],
            [
                'id'    => 326,
                'title' => 'amp_create',
            ],
            [
                'id'    => 327,
                'title' => 'amp_edit',
            ],
            [
                'id'    => 328,
                'title' => 'amp_show',
            ],
            [
                'id'    => 329,
                'title' => 'amp_delete',
            ],
            [
                'id'    => 330,
                'title' => 'amp_access',
            ],
            [
                'id'    => 331,
                'title' => 'record_type_create',
            ],
            [
                'id'    => 332,
                'title' => 'record_type_edit',
            ],
            [
                'id'    => 333,
                'title' => 'record_type_show',
            ],
            [
                'id'    => 334,
                'title' => 'record_type_delete',
            ],
            [
                'id'    => 335,
                'title' => 'record_type_access',
            ],
            [
                'id'    => 336,
                'title' => 'logger_type_create',
            ],
            [
                'id'    => 337,
                'title' => 'logger_type_edit',
            ],
            [
                'id'    => 338,
                'title' => 'logger_type_show',
            ],
            [
                'id'    => 339,
                'title' => 'logger_type_delete',
            ],
            [
                'id'    => 340,
                'title' => 'logger_type_access',
            ],
            [
                'id'    => 341,
                'title' => 'pd_unit_create',
            ],
            [
                'id'    => 342,
                'title' => 'pd_unit_edit',
            ],
            [
                'id'    => 343,
                'title' => 'pd_unit_show',
            ],
            [
                'id'    => 344,
                'title' => 'pd_unit_delete',
            ],
            [
                'id'    => 345,
                'title' => 'pd_unit_access',
            ],
            [
                'id'    => 346,
                'title' => 'pd_record_create',
            ],
            [
                'id'    => 347,
                'title' => 'pd_record_edit',
            ],
            [
                'id'    => 348,
                'title' => 'pd_record_show',
            ],
            [
                'id'    => 349,
                'title' => 'pd_record_delete',
            ],
            [
                'id'    => 350,
                'title' => 'pd_record_access',
            ],
            [
                'id'    => 351,
                'title' => 'logger_create',
            ],
            [
                'id'    => 352,
                'title' => 'logger_edit',
            ],
            [
                'id'    => 353,
                'title' => 'logger_show',
            ],
            [
                'id'    => 354,
                'title' => 'logger_delete',
            ],
            [
                'id'    => 355,
                'title' => 'logger_access',
            ],
            [
                'id'    => 356,
                'title' => 'temperature_create',
            ],
            [
                'id'    => 357,
                'title' => 'temperature_edit',
            ],
            [
                'id'    => 358,
                'title' => 'temperature_show',
            ],
            [
                'id'    => 359,
                'title' => 'temperature_delete',
            ],
            [
                'id'    => 360,
                'title' => 'temperature_access',
            ],
            [
                'id'    => 361,
                'title' => 'volt_create',
            ],
            [
                'id'    => 362,
                'title' => 'volt_edit',
            ],
            [
                'id'    => 363,
                'title' => 'volt_show',
            ],
            [
                'id'    => 364,
                'title' => 'volt_delete',
            ],
            [
                'id'    => 365,
                'title' => 'volt_access',
            ],
            [
                'id'    => 366,
                'title' => 'validation_create',
            ],
            [
                'id'    => 367,
                'title' => 'validation_edit',
            ],
            [
                'id'    => 368,
                'title' => 'validation_show',
            ],
            [
                'id'    => 369,
                'title' => 'validation_delete',
            ],
            [
                'id'    => 370,
                'title' => 'validation_access',
            ],
            [
                'id'    => 371,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
