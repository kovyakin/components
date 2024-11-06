<?php

namespace Kovyakin\Components\app\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class InstallComponentsCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'components:initialize';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install Kovyakin/Components package';

    /**
     * Execute the console command.
     */
    public function handle()
    {
       $question = $this->confirm('Do you want to initialize kovyakin/components?');
      if($question) {
          Artisan::call('vendor:publish', ['--tag' => 'components', '--force' => true]);
          $this->info('Kovyakin/Components package initialized successfully.');
          $this->info("Add to blade scripts and styles.");
      }
    }
}
