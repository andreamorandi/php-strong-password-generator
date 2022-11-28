<?php
function generate_password($strength, $pool, $repetition)
{
    $pool_length = strlen($pool);
    $password = "";
    for ($i = 0; $i < $strength; $i++) {
        $char = $pool[rand(0, $pool_length - 1)];
        if ($repetition || !str_contains($password, $char)) {
            $password .= $char;
        }
    }
    return $password;
}

function set_permitted_chars($letters, $numbers, $symbols)
{
    include __DIR__ . "/data.php";
    if (!$letters && !$numbers && !$symbols) {
        return $permitted_letters . $permitted_numbers . $permitted_symbols;
    }
    $permitted_chars = "";
    if ($letters) {
        $permitted_chars .= $permitted_letters;
    }
    if ($numbers) {
        $permitted_chars .= $permitted_numbers;
    }
    if ($symbols) {
        $permitted_chars .= $permitted_symbols;
    }
    return $permitted_chars;
}
