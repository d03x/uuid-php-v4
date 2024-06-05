<?php

namespace dadanski\uuidv4;

/**
 * Undocumented function.
 *
 * @return void
 */
function uuidv4(): string
{
    $data = random_bytes(16);
    $data[6] = chr(ord($data[6]) & 0x0F | 0x40);
    $data[8] = chr(ord($data[8]) & 0x3F | 0x80);

    return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
}
