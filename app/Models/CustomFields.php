<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuids;
use App\Traits\CustomFields as CustomFieldsModel;

class CustomFields extends Model
{
    use HasFactory, Uuids, CustomFieldsModel;

    protected $guarded = [];
}
