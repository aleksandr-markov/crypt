<?php


namespace App\Repositories;


use App\Models\Currency;
use App\Repositories\Interfaces\CurrencyRepositoryInterface;

class CurrencyRepository implements CurrencyRepositoryInterface
{

    public function all()
    {
        return Currency::all();
    }

    public function getByShortName(string $shortName)
    {
//        dd($shortName);
//        return Currency::where('symbol', '=', $shortName);
    }
}
