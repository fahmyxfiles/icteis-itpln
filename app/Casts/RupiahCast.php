<?php
namespace App\Casts;
use Illuminate\Contracts\Database\Eloquent\CastsAttributes;

class RupiahCast implements CastsAttributes
{

    public function get($model, string $key, $value, array $attributes)
    {
        return 'Rp. ' . number_format($value, 0, ',', '.');
    }

    public function set($model, string $key, $value, array $attributes)
    {
       return $value;
    }

}