<?php

namespace Plugins\FullCalendar\Models;

use Illuminate\Database\Eloquent\Attributes\UseFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Plugins\FullCalendar\Database\Factories\EventFactory;

#[UseFactory(EventFactory::class)]
class Event extends Model
{
    /** @use HasFactory<EventFactory> */
    use HasFactory;

    protected $guarded = [];
}
