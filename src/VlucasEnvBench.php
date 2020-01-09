<?php

use Dotenv\Dotenv as Loader;

class VlucasEnvBench
{
    /**
     * @Revs(1000)
     */
    public function benchLoad()
    {
        \putenv('z=');

        Loader::createMutable(__DIR__ . '/../tests/', 'test.env', null, false)->load();

        if ('1YZ' !== \getenv('z')) {
            throw new \Exception('LoadEnv failed');
        }
    }
}
