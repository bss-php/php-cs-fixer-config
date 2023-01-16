<?php

// Ladies and gentlemen fasten your seatbelts.
// We're going deep.

return bss-php\Fixer\Config::make()
    ->in(__DIR__)
    ->preset(
        new bss-php\Fixer\Presets\PrettyLaravel()
    )
    ->out();
