<?php

declare(strict_types=1);

function is_input_empty(string $username, string $pwd, string $email): bool {
    return if (empty($username) || empty($pwd) || empty($email));
}

function is_email_invalid(string $email): bool {
    return if (!filter_var($email, FILTER_VALIDATE_EMAIL));
}

function is_username_taken(object $pdo, string $username): bool {
    return if (get_username($pdo, $username));
}

function is_email_registered(object $pdo, string $email): bool {
    return if (get_email($pdo, $email));
}