<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Carbon\Carbon;
class FechaMayorAHoy implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $fechaSplit = explode("-", $value);
        $fechaCarbonValue = Carbon::create($fechaSplit[0], $fechaSplit[1], $fechaSplit[2], 0, 0, 0, 'America/Mexico_City');

        $fechaCarbon = Carbon::now()->format('Y-m-d');
        $fechaSplit2 = explode("-", $fechaCarbon);
        $fechaCarboHoy = Carbon::create($fechaSplit2[0], $fechaSplit2[1], $fechaSplit2[2], 0, 0, 0, 'America/Mexico_City');
        if($fechaCarbonValue >= $fechaCarboHoy)
        {
            return true;
        }
        return false;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'La :attribute debe ser mayor o igual a la fecha actual';
    }
}
