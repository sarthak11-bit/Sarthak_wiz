<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'supplier_name',
        'supplier_phone',
        'supplier_address',
        'transporter_name',
        'transporter_phone',
        'vehicle_number',
        'vehicle_type',
        'material_type',
        'material_unit',
        'machine_type',
        'machine_number',
        'diesel_capacity',
        'owned_or_rental',
        'site_address',
        'site_name',
        'site_id',
        'site_manager',
        'site_login_password', 
        'product_select',
        'product_quantity',
        'employee_name',
        'employee_designation',
        'employee_phone',
        'assign_site',
    ];

    // Define hidden fields to avoid exposing them in JSON
    protected $hidden = [
        'site_login_password', // Keep this sensitive field hidden
    ];
}
