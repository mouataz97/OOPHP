<?php
declare(strict_types=1);
require_once __DIR__ . '/../../../vendor/autoload.php';

use App\Controllers\Router;

class HomeController
{
    public function index(): string
    {
        return <<<FORM
<form action="/upload" method="post">
    <input type="file" name="receipt">
    <button type="submit">Upload</button>
</form>
FORM;
    }

    public function upload()
    {
        var_dump($_FILES);
    }
}
