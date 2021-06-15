<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Bidding;
use Session;
use App\Conditions;
use App\Auction;
use App\AuctionItem;
use Illuminate\Support\Facades\Crypt;
use CH;
use Carbon\Carbon;
use DB;
class DeclareBiddingWinerJob extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'bidding:result'; 

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Validate bidding And Declare winner send email etc Opertations';

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
    public function handle()
    {

 
               
                  
               
    
    }
}
