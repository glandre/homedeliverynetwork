<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use League\Flysystem\Exception;
use Symfony\Component\Process\Process;

class MysqlRestore extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mysql:restore {input : Input MySQL Dump file to restore}
                                          {--no-reset : Don\'t drop the current database before restoring the dump}
                                          {--pretend : Prints the commands but not execute them}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Drops the current database and restores data from a dump file to the current ' .
                             'database based on .env credentials.';

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
        if(config('app.env') != 'local') {
            $this->error("This command must not be executed on production environments.");
        }

        $user = config('database.connections.mysql.username');
        $password = config('database.connections.mysql.password');
        $database = config('database.connections.mysql.database');
        $input = $this->argument('input');

        $commands = [];

        if(! ($this->option('no-reset')) ) {
            $commands[] = "mysqladmin --user=$user --password=\"$password\" drop $database";
            $commands[] = "mysqladmin --user=$user --password=\"$password\" create $database";
        }

        $commands[] = "mysql --user=$user --password=\"$password\" $database < $input";

        if($this->option('pretend')) {
            $this->info('Commands to execute:');
        }

        if($this->option('verbose') || $this->option('pretend')) {
            foreach ($commands as $command) {
                $this->info($command);
            }
        }

        if(! ($this->option('pretend'))) {
            try {
                foreach ($commands as $command) {
                    $process = new Process($command);
                    $process->run();
                }
                $this->info("Backup successfully restored from: $input");
            } catch (\Exception $exception) {
                $this->error("Error while executing the command: {$exception->getMessage()}");
            }
        }
    }
}
