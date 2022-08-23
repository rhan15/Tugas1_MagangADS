<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class Pulang extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'pulang';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Pulang woeeeeeee';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // $this->info("Waktu pulang telah tiba silahkan keluar LISTRIK MAHALLLLL");
        // $this->warn("Waktu pulang telah tiba silahkan keluar LISTRIK MAHALLLLL");
        // $this->error("Waktu pulang telah tiba silahkan keluar LISTRIK MAHALLLLL");
        // $this->line("Waktu pulang telah tiba silahkan keluar LISTRIK MAHALLLLL");

        $user = User::factory()->create();
        $this->info($user->name . " Waktu pulang telah tiba silahkan keluar LISTRIK MAHALLLLL" );
    }
}
