<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Farms extends Model
{
    protected $table = 'farms';

    // الأعمدة القابلة للتعبئة بشكل جماعي
    protected $fillable = [
        'name',
        'commercialregistrationno',
        'image',
        'user_id',
        'address_id',
    ];

    // تحديد العلاقة مع نموذج User
    public function user()
    {
        return $this->belongsTo(User::class);
    }



    // تحديد العلاقة مع نموذج Address
    public function address()
    {
        return $this->belongsTo(Addresses::class);
    }
}
