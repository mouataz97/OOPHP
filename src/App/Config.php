<?php

declare(strict_types=1);

namespace App;

class Config
{
    protected array $config = [];
    public function __construct(array $env)
    {
        $this->config = [
            'db' => [
                'host'      => $env['DB_HOST'] ?? '127.0.0.1',
                'name'      => $env['DB_NAME'] ?? 'my_db',
                'user'      => $env['DB_USER'] ?? 'root',
                'pass'      => $env['DB_PASS'] ?? 'root',
                'driver'    => $env['DB_DRIVER'] ?? 'mysql',
            ],
        ];
    }

    public function __get(string $name)
    {
        return $this->config[$name] ?? null;
    }
}
