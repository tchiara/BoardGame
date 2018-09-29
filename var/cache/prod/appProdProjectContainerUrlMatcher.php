<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // home
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'home');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::homeAction',  '_route' => 'home',);
        }

        // rules
        if ($pathinfo === '/rules') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::rulesAction',  '_route' => 'rules',);
        }

        // createParty
        if ($pathinfo === '/create') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::createPartyAction',  '_route' => 'createParty',);
        }

        // joinParty
        if ($pathinfo === '/join') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::joinPartyAction',  '_route' => 'joinParty',);
        }

        // gameTheme
        if ($pathinfo === '/gameTheme') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::gameThemeAction',  '_route' => 'gameTheme',);
        }

        // game_create
        if (0 === strpos($pathinfo, '/create-game') && preg_match('#^/create\\-game/(?P<nbJ>[^/]++)/(?P<theme>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'game_create')), array (  '_controller' => 'AppBundle\\Controller\\GameController::createAction',));
        }

        // game_join
        if (0 === strpos($pathinfo, '/join-game') && preg_match('#^/join\\-game/(?P<iGame>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'game_join')), array (  '_controller' => 'AppBundle\\Controller\\GameController::joinAction',));
        }

        // changeNbPlayerMax
        if (0 === strpos($pathinfo, '/changePlayer-game') && preg_match('#^/changePlayer\\-game/(?P<iGame>[^/]++)/(?P<newNbPlayerMax>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'changeNbPlayerMax')), array (  '_controller' => 'AppBundle\\Controller\\GameController::changeNbPlayerMaxAction',));
        }

        // leaveGame
        if (0 === strpos($pathinfo, '/leave-game') && preg_match('#^/leave\\-game/(?P<iGame>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'leaveGame')), array (  '_controller' => 'AppBundle\\Controller\\GameController::leaveGameAction',));
        }

        // game_start
        if (0 === strpos($pathinfo, '/start-game') && preg_match('#^/start\\-game/(?P<iGame>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'game_start')), array (  '_controller' => 'AppBundle\\Controller\\GameController::startGameAction',));
        }

        if (0 === strpos($pathinfo, '/gameboard')) {
            // gameboard
            if (preg_match('#^/gameboard/(?P<iGame>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'gameboard')), array (  '_controller' => 'AppBundle\\Controller\\GameController::gameBoardAction',));
            }

            // gameaction
            if (0 === strpos($pathinfo, '/gameboard/action') && preg_match('#^/gameboard/action/(?P<action>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'gameaction')), array (  '_controller' => 'AppBundle\\Controller\\GameController::gameAction',));
            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            // login
            if ($pathinfo === '/login') {
                return array (  '_controller' => 'AppBundle\\Controller\\UserController::loginAction',  '_route' => 'login',);
            }

            // logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'AppBundle\\Controller\\UserController::logoutAction',  '_route' => 'logout',);
            }

        }

        // user_register
        if ($pathinfo === '/register') {
            return array (  '_controller' => 'AppBundle\\Controller\\UserController::registerAction',  '_route' => 'user_register',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
