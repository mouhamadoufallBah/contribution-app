<?php

function initSession()
{
    if (PHP_SESSION_NONE) {
        session_start();
    }
}

function save(string $key, array $data): void
{
    if (!isset($_SESSION[$key])) {
        $_SESSION[$key] = [];
    }

    $_SESSION[$key][] = $data;
}

function getData(string $key): array
{
    return $_SESSION[$key];
}

function removeData(string $key): void
{
    unset($_SESSION[$key]);
}

function destroy(): void
{
    session_destroy();
}
