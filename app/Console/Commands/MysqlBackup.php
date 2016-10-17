<?php

namespace App\Console\Commands;

use Faker\Provider\cs_CZ\DateTime;
use Illuminate\Console\Command;
use Symfony\Component\Process\Process;

class MysqlBackup extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mysql:backup 
                            {output? : Output file. Default is the current timestamp (YYMMDD.sql)}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generates a Dump from the MySQL Database based on .env credentials';

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
        $output = $this->argument('output') ?? $this->outputDefaultPath();

        $command = "mysqldump --user=$user --password=\"$password\" --result-file=$output $database";
        
        if($this->option('verbose')) {
            $this->info($command);
        }

        try {
            $process = new Process($command);
            $process->run();
            $this->info("Backup successfully performed - Output file: $output");
        }
        catch(\Exception $exception) {
            $this->error("Error while executing the command: {$exception->getMessage()}");
        }
    }

    /**
     *
     * @return string
     */
    private function outputDefaultPath()
    {
        $i = 0;
        do {
            $i++;
            $output =  sprintf('%s%02d_%s_backup.sql', date('ymd'), $i, config('database.connections.mysql.database'));
        }
        while(file_exists($output) && $i < 99);
        return $output;
    }
}
