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
        'accueil' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ADOB\\SenofficeBundle\\Controller\\FrontController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/sen-office/accueil',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'catalogue' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ADOB\\SenofficeBundle\\Controller\\FrontController::catalogueAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/sen-office/catalogue',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'adob_senoffice_front_selectcommune' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ADOB\\SenofficeBundle\\Controller\\FrontController::selectCommuneAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/sen-office/select/commune',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'partager/salle' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ADOB\\SenofficeBundle\\Controller\\FrontController::ajoutSalleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/sen-office/partager/salle',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
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
