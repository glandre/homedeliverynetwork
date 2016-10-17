<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class MysqlRestore extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mysql:restore {input: Input MySQL Dump file to restore}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Restores datas from a dump file to the current database based on .env credentials.';

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
        $user = config('database.connections.mysql.username');
        $password = config('database.connections.mysql.password');
        $database = config('database.connections.mysql.database');
        $input = $this->argument('input');

        $command = "mysql --user=$user --password=$password $database < $input";

        if($this->option('verbose')) {
            $this->info($command);
        }

        try {
            $process = new Process($command);
            $process->run();
            $this->info("Backup successfully restored from: $input");
        }
        catch(\Exception $exception) {
            $this->error("Error while executing the command: {$exception->getMessage()}");
        }
    }
}
