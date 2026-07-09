<?php

namespace FormFactory\Fieldfactory\Models;

use Carbon\Traits\Timestamp;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

#[Fillable(['name', 'slug', 'destination'])]
class FieldType extends Model
{
    use Timestamp;
    use SoftDeletes;

}
