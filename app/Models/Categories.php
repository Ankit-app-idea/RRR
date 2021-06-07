<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
class Categories extends Model
{
    use Notifiable;
    protected $table = 'Categories';
    protected $primaryKey = 'categories_id';
    
    public function detail()
    {
        return $this->belongsTo(CategoriesDetail::class, 'categories_id', 'categories_id');
    }
    public function maindetail()
    {
//         return $this->belongsTo(CategoriesDetail::class, 'categories_id', 'categories_id');
        return $this->belongsTo(Categories::class, 'parent_id', 'categories_id')->with('detail');
    }
}        

