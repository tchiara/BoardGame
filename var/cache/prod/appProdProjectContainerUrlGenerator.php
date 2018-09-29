<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdProjectContainerUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'rules' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::rulesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/rules',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'createParty' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::createPartyAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'joinParty' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::joinPartyAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/join',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gameTheme' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::gameThemeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/gameTheme',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'game_create' => array (  0 =>   array (    0 => 'nbJ',    1 => 'theme',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\GameController::createAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'theme',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'nbJ',    ),    2 =>     array (      0 => 'text',      1 => '/create-game',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'game_join' => array (  0 =>   array (    0 => 'iGame',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\GameController::joinAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'iGame',    ),    1 =>     array (      0 => 'text',      1 => '/join-game',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'changeNbPlayerMax' => array (  0 =>   array (    0 => 'iGame',    1 => 'newNbPlayerMax',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\GameController::changeNbPlayerMaxAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'newNbPlayerMax',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'iGame',    ),    2 =>     array (      0 => 'text',      1 => '/changePlayer-game',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'leaveGame' => array (  0 =>   array (    0 => 'iGame',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\GameController::leaveGameAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'iGame',    ),    1 =>     array (      0 => 'text',      1 => '/leave-game',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'game_start' => array (  0 =>   array (    0 => 'iGame',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\GameController::startGameAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'iGame',    ),    1 =>     array (      0 => 'text',      1 => '/start-game',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gameboard' => array (  0 =>   array (    0 => 'iGame',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\GameController::gameBoardAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'iGame',    ),    1 =>     array (      0 => 'text',      1 => '/gameboard',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gameaction' => array (  0 =>   array (    0 => 'action',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\GameController::gameAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'action',    ),    1 =>     array (      0 => 'text',      1 => '/gameboard/action',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\UserController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\UserController::logoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_register' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\UserController::registerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
