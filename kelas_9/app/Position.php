<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Position extends Model
{
    // whitelist
    protected $fillable = ['department_id', 'name', 'code'];

    // blacklist
    protected $guarded = ['id'];

    // Soft Delete
    // use SoftDeletes;
    // protected $dates = ['deleted_at'];

    public function department()
    {
        return $this->belongsTo('App\Department');
    }

    public function employee()
    {
        return $this->hasMany('App\Employee');
    }
}
