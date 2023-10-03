<?php

namespace App\Console\Commands;

use App\Attributes\Teste;
use App\Console\Kernel;
use App\Http\Controllers\Controller;
use Composer\ClassMapGenerator\ClassMapGenerator;
use Illuminate\Console\Command;
use Illuminate\Support\Collection;
use League\Flysystem\Filesystem;

class SyncRoutes extends Command
{
    const SEARCH_DIRECTORIES = ["app\Http\Controllers"];
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sync:routes';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Capturando rotas');
        $classes = $this->getClasses();
        $classes = $this->filterToGetOnlyClassesWithRoutes($classes);
        $this->info('Rotas ressincronizadas');
    }

    private function getClasses(): Collection
    {
        $classes = collect([]);

        // TODO: MELHORAR ESTE MÉTODO, LER O ARQUIVO E CAPTURAR O NAMESPACE E O NOME DA CLASSE
        foreach (self::SEARCH_DIRECTORIES as $dir) {
            $find = ClassMapGenerator::createMap(base_path($dir));
            $classes = $classes->concat($find);
        }

        return $classes->map(function ($c) {
            $c = str_replace(base_path() . "\\", '', $c);
            $c = str_replace(".php", '', $c);

            return ucfirst($c);
        });
    }

    private function filterToGetOnlyClassesWithRoutes(Collection $classes)
    {
        $filtredClasses = collect([]);

        foreach ($classes as $class) {
            $class = new \ReflectionClass($class);
            $attributes = $class->getAttributes();
            dump($attributes);
        }

        // TODO:

        return $filtredClasses;
    }
}
