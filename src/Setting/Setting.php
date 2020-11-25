<?php

namespace QCod\Settings\Setting;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $guarded = ['updated_at', 'id'];

    protected $table = 'settings';

    protected $casts = [
      'val' => 'array'
    ];

    public function scopeGroup($query, $groupName)
    {
        return $query->whereGroup($groupName);
    }
}