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
        (new Loader)->load(__DIR__ . '/../tests/test.env', true, Loader::ALL);
    }
}
