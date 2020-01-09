<?php

use Symfony\Component\Dotenv\Dotenv;

class SymfonyEnvBench
{
    /**
     * @Revs(1000)
     */
    public function benchLoad()
    {
        \putenv('z=');

        (new Dotenv(true))->overload(__DIR__ . '/../tests/test.env');

        if ('1YZ' !== \getenv('z')) {
            throw new \Exception('LoadEnv failed');
        }
    }
}
