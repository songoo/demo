<?php
/**
 * Created by PhpStorm.
 * User: goku
 * Date: 18/08/2014
 * Time: 19:45
 */
namespace App\Router;

use Nette;
use	Nette\Application\Routers\RouteList;
use	Nette\Application\Routers\Route;

/**
 * Router factory.
 */
class RouterFactory
{

    /**
     * @return \Nette\Application\IRouter
     */
    public function createRouter()
    {
        $router = new RouteList();

        $router[] = $serviceRouter = new RouteList('Frontend');
        $serviceRouter[] = new Route('frontend/<presenter>[/<action>]', 'Homepage:default');

        $router[] = $apiRouter = new RouteList('Api');
        $apiRouter[] = new Route('api/<presenter>[/<action>]', 'Homepage:default');

        $router[] = new Route('<presenter>/<action>[/<id>]', 'Homepage:default');

        return $router;
    }
}
