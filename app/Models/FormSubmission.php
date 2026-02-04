<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FormSubmission extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'mobile',
        'email',
        'city',
        'country',
        'state',
    ];
}
