<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;


    // $table->string('title');
    // $table->string('Our_people');
    // $table->string('Standards_of_care');
    // $table->string('small_text');
    // $table->string('Our_mission');
    // $table->string('Our_values');
    // $table->string('Our_services');
    // $table->string('Our_Relationship-First_Approach');
    // $table->string('Contact_us');
    // $table->timestamps();

    protected $fillable = [
        'title',
        'our_people',
        'standards_of_care',
        'small_text',
        'our_mission',
        'our_values',
        'our_services',
        'our_relationship_first_approach',
        'contact_us'
    ];
}
