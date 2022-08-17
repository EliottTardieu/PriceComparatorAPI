<?php

namespace PriceComparator;

use Exception;
use JetBrains\PhpStorm\NoReturn;
use JetBrains\PhpStorm\Pure;

class App {

    private static ?App $instance = null;

    #[Pure] private function __construct() {}

    /**
     * Generates a v4 UUID.
     *
     * @return string
     * @throws Exception
     */
    public static function UUIDGenerator(): string {
        return vsprintf('%s%s%s%s%s%s%s%s', str_split(bin2hex(random_bytes(16)), 4));
    }

    #[NoReturn]
    public static function printJson($data): void {
        header('Content-Type: application/json');
        echo json_encode($data, JSON_PRETTY_PRINT);
    }

    public static function getInstance():App {
        if (is_null(static::$instance)) static::$instance = new App();
        return static::$instance;
    }
}