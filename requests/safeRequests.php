<?php

function sanitizeInput($input) {

    $input = trim($input);
    $input = filter_var($input, FILTER_SANITIZE_SPECIAL_CHARS);
    
    if (!is_string($input)) {
        return '';
    }

    $max_length = 255;
    $input = substr($input, 0, $max_length);

    return $input;
}

// Функція для безпечного отримання даних з GET-запиту
function safeGet($paramName, $defaultValue = null) {
    if (isset($_GET[$paramName])) {
        return sanitizeInput($_GET[$paramName]);
    } else {
        return $defaultValue;
    }
}

// Функція для безпечного отримання даних з POST-запиту
function safePost($paramName, $defaultValue = null) {
    if (isset($_POST[$paramName])) {
        return sanitizeInput($_POST[$paramName]);
    } else {
        return $defaultValue;
    }
}

function safeRequest($paramName, $defaultValue = null) {
    if (isset($_REQUEST[$paramName])) {
        return sanitizeInput($_REQUEST[$paramName]);
    } else {
        return $defaultValue;
    }
}