<?php

declare(strict_types=1);

use TAD\God\God;

if (! function_exists('godsays')) {
    /**
     * Ask God to speak.
     */
    function godsays(int $words = 30): string
    {
        return (new God())->speak($words);
    }
}
