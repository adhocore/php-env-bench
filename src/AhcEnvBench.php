<?php

use Ahc\Env\Loader;
use Ahc\Env\Retriever;

class AhcEnvBench
{
    /**
     * @Revs(1000)
     */
    public function benchLoad()
    {
        \putenv('z=');

        (new Loader)->load(__DIR__ . '/../tests/test.env', true, Loader::ALL);

        if ('1YZ' !== \getenv('z')) {
            throw new \Exception('LoadEnv failed');
        }
    }
}
