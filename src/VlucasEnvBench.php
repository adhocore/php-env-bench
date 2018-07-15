<?php

use Dotenv\Dotenv as Loader;

class VlucasEnvBench
{
    /**
     * @Revs(1000)
     */
    public function benchLoad()
    {
        (new Loader(__DIR__ . '/../tests/', 'test.env'))->load();
    }
}
