<?php

namespace bss-php\Fixer\Tests\Support;

use bss-php\Fixer\Presets\AbstractPreset;

class AdditionalTestPreset extends AbstractPreset
{
    public function getRules(): array
    {
        return [
            'additional_rule',
        ];
    }

    protected function getFilePatterns(): array
    {
        return [];
    }

    protected function getExcludedDirectories(): array
    {
        return [];
    }

    protected function getExcludedFiles(): array
    {
        return [];
    }
}
