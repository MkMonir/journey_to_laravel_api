<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $primaryKey = 'supplier_id'; // Set the primary key
    public $incrementing = true; // Enable auto-increment
    protected $keyType = 'int'; // Ensure the type is integer

    protected $fillable = [
        "supplier_id",
        'name',
        'email',
        'address',
        'phone',
        'phone_emergency',
        "nid_number",
        "total_due",
        "company_name",
        "photo",
    ];

    protected $casts = [
        'supplier_id' => 'string',
    ];

    protected static function boot()
    {
        parent::boot();
    
        // Add prefix during the creation event
        static::creating(function ($supplier) {
            // Generate a unique ID based on the auto-incrementing primary key (supplier_id)
            $maxId = Supplier::max('supplier_id'); // Get the max supplier_id
            $numericPart = (int) str_replace('SID-', '', $maxId); // Remove prefix and convert to int
            $nextId = ($numericPart ?? 0) + 1; // Increment numeric part
    
            // Format the supplier_id with prefix 'SID-'
            $supplier->supplier_id = 'SID-' . str_pad($nextId, 4, '0', STR_PAD_LEFT);
        });
    }
    

    
}
