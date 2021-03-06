<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\HWCategory;
use App\Models\Manufacturer;
use App\Models\Purchase;

class Hardware extends Model
{
    use HasFactory;
    protected $table = 'hardwares';
    protected $fillable = ['name', 'hwcategory_id', 'cpu', 'ram', 'storage', 'software', 'manufacturer_id'];
    
    public function hwcategory()
    {
        return $this->belongsTo(HWCategory::class);
    }
    
    public function manufacturer()
    {
        return $this->belongsTo(Manufacturer::class);
    }
    
    public function purchase()
    {
        return $this->hasMany(Purchase::class);
    }
}
