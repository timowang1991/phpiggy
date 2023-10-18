<?php

declare(strict_types=1);

function dd(mixed $value) {
    echo "<pre>";
    print_r($value);
    echo "</pre>";
    die(); // stops to generate the page for quick debugging purpose
}

function e(mixed $value): string {
    return htmlspecialchars((string) $value);
}
