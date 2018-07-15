<?php

use Symfony\Component\Dotenv\Dotenv;

class SymfonyEnvBench
{
    /**
     * @Revs(1000)
     */
    public function benchLoad()
    {
        (new Dotenv)->load(__DIR__ . '/../tests/test.env');

        if ('1YZ' !== \getenv('z')) {
            throw new \Exception('LoadEnv failed');
        }
    }
}
