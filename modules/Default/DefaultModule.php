<?php


namespace Modules\Default;

use Pano\Core\BaseLogger;
use Pano\Core\BaseModule;
use Pano\Core\BaseRouter;
use Pano\Core\BaseView;
use Pano\Foundation\Exception;
use Pano\Foundation\Logger;
use Pano\Foundation\View;
use Modules\Default\Commands\DefaultCommand;
use Modules\Default\Handlers\DefaultHandler;
use Modules\Default\Interceptors\DefaultInterceptor;

final readonly class DefaultModule extends BaseModule
{
    /**
     * @throws Exception
     */
    public function routes(): BaseRouter
    {
        $this->router->get('/', DefaultHandler::class, 'info', [DefaultInterceptor::class]);
        $this->router->command('app:info', DefaultCommand::class);

        return $this->router;
    }

    public function view(): BaseView
    {
        return new View($this->viewPath());
    }

    public function log(): BaseLogger
    {
        return new Logger($this->logPath());
    }

}