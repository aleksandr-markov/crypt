<?php

namespace App\Console\Commands;

use App\CurrencyService;
use Illuminate\Console\Command;

class PriceChanges extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'parse:priceChanges{symbol} {currency}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(CurrencyService $currencyService)
    {
        dd($currencyService->getPriceChanges($this->argument('symbol'), $this->argument('currency')));
    }
}
