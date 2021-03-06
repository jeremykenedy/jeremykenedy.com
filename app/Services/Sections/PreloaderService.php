<?php

namespace App\Services\Sections;

class PreloaderService
{
    /**
     * Gets the preloader data.
     *
     * @return array The preloader data.
     */
    public function getSectionData()
    {
        return [
            'enabled' => true,
            'type'    => '8',    // 1-8
        ];
    }
}
