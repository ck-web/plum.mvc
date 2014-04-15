<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/hello')) {
            if (0 === strpos($pathinfo, '/hello.formation')) {
                // hello_formation_homepage
                if (rtrim($pathinfo, '/') === '/hello.formation') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'hello_formation_homepage');
                    }

                    return array (  '_controller' => 'Hello\\FormationBundle\\Controller\\DefaultController::indexAction',  '_route' => 'hello_formation_homepage',);
                }

                if (0 === strpos($pathinfo, '/hello.formation/module')) {
                    // module_index
                    if ($pathinfo === '/hello.formation/module/index') {
                        return array (  '_controller' => 'Hello\\FormationBundle\\Controller\\ManagerModuleController::indexAction',  '_route' => 'module_index',);
                    }

                    // module_creer
                    if ($pathinfo === '/hello.formation/module/new') {
                        return array (  '_controller' => 'Hello\\FormationBundle\\Controller\\ManagerModuleController::creerAction',  '_route' => 'module_creer',);
                    }

                    // module_afficher
                    if (0 === strpos($pathinfo, '/hello.formation/module/afficher') && preg_match('#^/hello\\.formation/module/afficher/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'module_afficher')), array (  '_controller' => 'Hello\\FormationBundle\\Controller\\ManagerModuleController::afficherAction',));
                    }

                    // module_modifier
                    if (0 === strpos($pathinfo, '/hello.formation/module/modifier') && preg_match('#^/hello\\.formation/module/modifier/(?P<id>\\d+)/(?P<nouveauNom>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'module_modifier')), array (  '_controller' => 'Hello\\FormationBundle\\Controller\\ManagerModuleController::modifierAction',));
                    }

                }

            }

            // hello_world_homepage
            if (preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hello_world_homepage')), array (  '_controller' => 'Hello\\WorldBundle\\Controller\\DefaultController::indexAction',));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
