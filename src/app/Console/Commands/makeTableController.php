<?php

namespace Kovyakin\Components\app\Console\Commands;

use Illuminate\Console\GeneratorCommand;
use Illuminate\Contracts\Filesystem\FileNotFoundException;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Exception\InvalidArgumentException;
use Symfony\Component\Console\Input\InputArgument;

#[AsCommand(name: 'components:create-table-controller')]
class makeTableController extends GeneratorCommand
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $name = 'components:create-table-controller';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new table controller';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Controller';

    /**
     * The name of class being generated.
     *
     * @var string
     */
    private $controllerClass;

    /**
     * The name of class being generated.
     *
     * @var string
     */
    private $model;

    private $resource;
    /**
     * Execute the console command.
     *
     * @return bool|null
     * @throws FileNotFoundException
     */

    protected function buildClass($name)
    {

        $stub = $this->files->get($this->getStub());

        return $this->replaceNamespace($stub, $name)
            ->setControllerClass()
            ->replaceClass(
            $this->replaceResource($stub, $name), $this->resource);
    }
    public function fire()
    {

        $this->setControllerClass();

        $path = $this->getPath($this->controllerClass);

        if ($this->alreadyExists($this->getNameInput())) {
            $this->error($this->type . ' already exists!');

            return false;
        }

        $this->makeDirectory($path);


        $this->files->put($path, $this->buildClass($this->controllerClass));

        $this->info($this->type . ' created successfully.');

        $this->line("<info>Created Table Controller :</info> $this->controllerClass");
    }

    /**
     * Set repository class name
     *
     * @return  void
     */
    private function setControllerClass()
    {
        $name = ucwords(strtolower($this->argument('name')));

        $model = ucwords(strtolower($this->argument('model')));

        $resource = ucwords(strtolower($this->argument('resource')));

        $this->name = $name;

        $this->model = $model;

        $this->resource = $resource;

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
//        str_replace('DummyResource',$this->argument('resource'), $stub);
        return str_replace('DummyModel',$this->argument('model'), $stub);
    }

    protected function replaceResource($stub, $name)
    {

        if (!$this->argument('resource')) {
            throw new InvalidArgumentException("Missing required argument resource name");
        }

        $stub = parent::replaceClass($stub, $name);
        return  str_replace('DummyResource',$this->argument('resource'), $stub);

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
//        return base_path('packages/kovyakin/components/src/stubs/tableController.stub');
    }

    /**
     * Get the default namespace for the class.
     *
     * @param string $rootNamespace
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace . '\Http\Controllers';
    }

    /**
     * Get the console command arguments.
     *
     * @return array
     */
    protected function getArguments()
    {
        return [
            ['name', InputArgument::REQUIRED, 'The name of the controller class.'],
            ['model', InputArgument::REQUIRED, 'The name of the model class that is used in the controller.'],
            ['resource', InputArgument::REQUIRED, 'The name of the resource class that is used in the controller.'],
        ];
    }

}
