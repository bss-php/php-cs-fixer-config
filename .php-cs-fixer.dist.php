<?php

// Ladies and gentlemen fasten your seatbelts.
// We're going deep.

return bssphp\Fixer\Config::make()
    ->in(__DIR__)
    ->preset(
        new bssphp\Fixer\Presets\PrettyLaravel()
    )
    ->out();
