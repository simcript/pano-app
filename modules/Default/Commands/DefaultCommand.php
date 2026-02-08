<?php

namespace Modules\Default\Commands;

use Composer\InstalledVersions;
use Pano\Core\BaseCommand;
use Pano\Enum\ResultCode;

class DefaultCommand extends BaseCommand
{

    public function handle(array $arguments): ResultCode
    {
        $version = InstalledVersions::getPrettyVersion('simcript/pano') ?? 'dev';
        $this->info(env('APP_NAME', 'Pano') . " - " . $version);
        return ResultCode::OK;
    }
}