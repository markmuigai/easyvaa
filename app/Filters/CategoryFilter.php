<?php

// CategoryFilter.php

namespace App\Filters;

class CategoryFilter
{
    public function filter($builder, $value)
    {
        return $builder->where('address', $value);
    }
}