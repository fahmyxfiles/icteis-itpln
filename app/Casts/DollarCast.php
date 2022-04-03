<?php
namespace App\Casts;
use Illuminate\Contracts\Database\Eloquent\CastsAttributes;

class DollarCast implements CastsAttributes
{

    public function get($model, string $key, $value, array $attributes)
    {
        return '$ ' . number_format($value, 2, '.', ',');
    }

    public function set($model, string $key, $value, array $attributes)
    {
       return $value;
    }

}