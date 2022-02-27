<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuids;
use App\Traits\CustomFields;
;

class Property extends Model
{
    use HasFactory, Uuids, CustomFields;
    use \Conner\Tagging\Taggable;

    protected $fillable = ['title','tags','description'];
}
