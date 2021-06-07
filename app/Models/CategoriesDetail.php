<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
class CategoriesDetail extends Model
{
    use Notifiable;
    
    protected $table = 'categories_description';  
    protected $primaryKey = 'categories_id';
}        

