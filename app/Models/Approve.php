<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'Approve';
    protected $fillable = [
        'user_id',
        'name',
        'room_type',
        'check_in_date',
        'check_out_date',
    ];
    // Additional model configuration or relationships can be defined here
}
