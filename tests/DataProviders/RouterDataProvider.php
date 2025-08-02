<?php

namespace Tests\DataProviders;

use PHPUnit\Framework\Attributes\DataProvider;

class RouterDataProvider
{
    public static function routeNotFoundCases(): array
    {
        return [
            ['/users', 'put'],   // Method not registered
            ['/invoices', 'post'], // Path not registered
            ['/users', 'get'], // Method not registered
            ['/users', 'post'], // Method not registered
        ];
    }
}