<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuids;
use App\Traits\CustomFields;
use Laravel\Scout\Searchable;

class Property extends Model
{
    use HasFactory, Uuids, CustomFields, Searchable;

    protected $guarded = [];
}
