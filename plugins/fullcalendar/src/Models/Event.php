<?php

namespace Plugins\FullCalendar\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    /** @use HasFactory<\Plugins\FullCalendar\Database\Factories\EventFactory> */
    use HasFactory;

    protected $guarded = [];
}
