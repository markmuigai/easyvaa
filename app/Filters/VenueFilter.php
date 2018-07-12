<?php

// VenueFilter.php

namespace App\Filters;
use App\Filters\AbstractFilter;

use App\Venue;
use Illuminate\Database\Eloquent\Builder;

class VenueFilter extends AbstractFilter
{
    protected $filters = [
        'type' => CategoryFilter::class
    ];
}