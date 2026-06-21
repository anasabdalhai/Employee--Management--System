<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Department extends Model
{
    protected $fillable = [
        'name',
        'description',
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }
    public static function rules(){
        return[
            'name'=>'required|min:2',
       
        ];
    }
}