<?php

namespace FormFactory\Fieldfactory\Providers;

class SeedServiceProvider
{
    protected $seedsPath = '/../database/seeders'; // Path relative to this provider

    public function boot()
    {
        if ($this->app->runningInConsole()) {
            // Listen for command finish to inject seeds
            Event::listen(CommandFinished::class, function (CommandFinished $event) {
                if ($event->output instanceof ConsoleOutput) {
                    $this->registerPackageSeeds();
                }
            });
        }
    }

    protected function registerPackageSeeds()
    {
        $path = __DIR__ . $this->seedsPath;
        if (!is_dir($path)) return;

        foreach (glob($path . '/*.php') as $file) {
            $class = $this->getClassName($file);
            if ($class) {
                // Only run if not already running a specific class via --class flag
                Artisan::call('db:seed', ['--class' => $class, '--force' => '']);
            }
        }
    }

    protected function getClassName($file)
    {
        $content = file_get_contents($file);
        if (preg_match('/class\s+(\w+)\s+extends\s+Seeder/', $content, $matches)) {
            $namespace = '';
            if (preg_match('/namespace\s+([^;]+);/', $content, $nsMatches)) {
                $namespace = $nsMatches[1];
            }
            return $namespace ? $namespace . '\\' . $matches[1] : $matches[1];
        }
        return null;
    }
}