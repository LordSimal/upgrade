<?php

declare(strict_types=1);

use Rector\CakePHP\Rector\Property\ChangeSnakedFixtureNameToPascalRector;

use Rector\Config\RectorConfig;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->import(__DIR__ . '/../../../../../config/config.php');

    $rectorConfig->rule(ChangeSnakedFixtureNameToPascalRector::class);
};
