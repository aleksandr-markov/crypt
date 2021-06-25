<?php


namespace App\Repositories\Interfaces;


use App\Models\Currency;

interface CurrencyRepositoryInterface
{

    public function all();

    public function getByShortName(string $shortName);

}
