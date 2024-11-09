<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    use HasFactory;


    // $table->string('site_name');
    // $table->string('site_email');
    // $table->string('site_phone');
    // $table->string('site_address');
    // $table->string('site_logo');
    // $table->string('site_facebook');
    // $table->string('site_linkedin');

    protected $fillable = [
    'site_name',
    'site_email',
    'site_phone',
    'site_address',
    'site_logo',
    'site_favicon_logo',
    'site_facebook',
    'site_linkedin',
    ];
}
