<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Crypt extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'bcrypt {text}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Encrypt a string using bcrypt helper';

    /**
     * Create a new command instance.
     *
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->info(bcrypt($this->argument('text')));
    }
}
