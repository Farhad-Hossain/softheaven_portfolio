<?php 

namespace App\Console\Commands;

use Illuminate\Console\Command;

use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

class DumpAutoload extends Command
{
    protected $signature = 'autoload:dump';
    protected $description = 'Run composer dump-autoload';

    private $command = '';
    public function __construct()
    {
        parent::__construct();
        $this->command = "dump-autoload";
    }

    public function handle()
    {
        echo shell_exec('(cd '. base_path() .' && composer '.$this->command.')');
    }
}
