<?php

namespace Kovyakin\Components\app\Console\Commands;

use Illuminate\Console\GeneratorCommand;
use Illuminate\Contracts\Filesystem\FileNotFoundException;
use Kovyakin\Components\app\Providers\ComponentsServiceProvider;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Exception\InvalidArgumentException;
use Symfony\Component\Console\Input\InputArgument;

#[AsCommand(name: 'components:table')]
class makeTableCommand extends GeneratorCommand
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $name = 'components:table';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new table';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Table';

    /**
     * The name of class being generated.
     *
     * @var string
     */
    private $tableClass;

    /**
     * The name of class being generated.
     *
     * @var string
     */
    private $model;

    /**
     * Execute the console command.
     *
     * @return bool|null
     * @throws FileNotFoundException
     */
    public function fire()
    {
        $this->setTableClass();

        $path = $this->getPath($this->tableClass);

        if ($this->alreadyExists($this->getNameInput())) {
            $this->error($this->type . ' already exists!');

            return false;
        }

        $this->makeDirectory($path);

        $this->files->put($path, $this->buildClass($this->tableClass));

        $this->info($this->type . ' created successfully.');

        $this->line("<info>Created Table :</info> $this->tableClass");
    }

    /**
     * Set repository class name
     *
     * @return  void
     */
    private function setTableClass()
    {
        $name = ucwords(strtolower($this->argument('name')));

        $this->model = $name;

        $modelClass = $this->parseName($name);

        $this->tableClass = $modelClass . 'Table';

        return $this;
    }

    /**
     * Replace the class name for the given stub.
     *
     * @param string $stub
     * @param string $name
     * @return string
     */
    protected function replaceClass($stub, $name)
    {
        if (!$this->argument('name')) {
            throw new InvalidArgumentException("Missing required argument model name");
        }

        $stub = parent::replaceClass($stub, $name);

        return str_replace('DummyModel', $this->model, $stub);
    }

    /**
     *
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return base_path('vendor/kovyakin/components/src/stubs/table.stub');//
//        return base_path('packages/kovyakin/components/src/stubs/table.stub');
    }

    /**
     * Get the default namespace for the class.
     *
     * @param string $rootNamespace
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace . '\Components\Table';
    }

    /**
     * Get the console command arguments.
     *
     * @return array
     */
    protected function getArguments()
    {
        return [
            ['name', InputArgument::REQUIRED, 'The name of the model class.'],
        ];
    }

}
