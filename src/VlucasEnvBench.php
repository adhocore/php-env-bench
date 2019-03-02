<?php

use Dotenv\Dotenv as Loader;

class VlucasEnvBench
{
    /**
     * @Revs(1000)
     */
    public function benchLoad()
    {
        (Loader::create(__DIR__.'/../tests/', 'test.env'))->load();

        if ('1YZ' !== \getenv('z')) {
            throw new \Exception('LoadEnv failed');
        }
    }
}
