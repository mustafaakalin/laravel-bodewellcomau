<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends Model
{
    use HasFactory, SoftDeletes;
    
    // $table->string('first_name');
    // $table->string('last_name');
    // $table->string('contact_number');
    // // location input select 2 option VIC , QLD
    // $table->string('location');
    // $table->string('service');
    // $table->string('What_can_we_help_you_with');
    // $table->text('message');
    // $table->softDeletes();


    protected $fillable = [
        'first_name',
        'last_name',
        'contact_number',
        'location',
        'service',
        'What_can_we_help_you_with',
        'message'
    ];
}
