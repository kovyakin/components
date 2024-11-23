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
    protected $signature = 'components:install';

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
        $question = $this->confirm('Do you want to install kovyakin/table?');

        if ($question) {
            Artisan::call('vendor:publish', ['--tag' => 'table', '--force' => true]);
            $this->info('Kovyakin/Table package initialized successfully.');
            $this->info("Add to blade scripts and styles.");
            $this->info("Don't forget to add a table. artisan components:create-table");
            $this->info("Don't forget to add a controller. artisan components:create-table-controller");
        }
    }
}
