<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Department extends Model
{
    // whitelist
    protected $fillable = ['name', 'code'];

    // blacklist
    protected $guarded = ['id'];

    // Soft Delete
    // use SoftDeletes;
    // protected $dates = ['deleted_at'];

    public function position()
    {
        return $this->hasMany('App\Position');
    }
}
