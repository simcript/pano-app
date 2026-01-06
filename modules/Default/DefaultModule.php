<?php

namespace Modules\Default;

use Pano\Core\BaseModule;
use Pano\Core\BaseRouter;
use Pano\Foundation\Router;

readonly class DefaultModule extends BaseModule
{
    public function routes(): BaseRouter
    {
        $router = new Router($this->request);
        $router->get('/', fn() => $this->info());

        return $router;
    }

    public function info(): void
    {
        $this->view()
            ->with(['name' => 'Pano'])
            ->layout('layout')
            ->render('home');
    }
}