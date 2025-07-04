<?php

namespace App;

class View
{
    public static function make(string $template, array $data = []): string
    {
        // Simple example: include a PHP template file and return its output
        $templatePath = __DIR__ . '/../views/' . $template . '.php';
        if (!file_exists($templatePath)) {
            return 'View not found: ' . htmlspecialchars($template);
        }
        ob_start();
        extract($data);
        include $templatePath;
        return ob_get_clean();
    }
}

// ... other code