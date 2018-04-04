<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcDevDebugProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'admin_alunos' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\Admin\\AdminAlunoController::index',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/alunos/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_banner' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\Admin\\AdminBannerController::index',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/banner/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_content' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\Admin\\AdminContentController::index',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/content/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_image' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\Admin\\AdminImageController::index',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/images/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_menu' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\Admin\\AdminMenuController::index',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/menu/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_menu_novo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\Admin\\AdminMenuController::new',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/menu/novo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_menu_novo_sub' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\Admin\\AdminMenuController::newSub',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/menu/novo/submenu',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_menu_edit' => array (  0 =>   array (    0 => 'menu_id',  ),  1 =>   array (    '_controller' => 'App\\Controller\\Admin\\AdminMenuController::update',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'menu_id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/menu/editar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_menu_delet' => array (  0 =>   array (    0 => 'menu_id',  ),  1 =>   array (    '_controller' => 'App\\Controller\\Admin\\AdminMenuController::delete',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'menu_id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/menu/excluir',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_news_letter' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\Admin\\AdminNewsLetterController::index',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/news-letter/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_page' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\Admin\\AdminPageController::index',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/pages/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_text' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\Admin\\AdminTextController::index',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/textos/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_url' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\Admin\\AdminUrlController::index',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/url/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_users' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\Admin\\AdminUsersController::index',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/users/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\DefautController::index',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_twig_error_test' => array (  0 =>   array (    0 => 'code',    1 => '_format',  ),  1 =>   array (    '_controller' => 'twig.controller.preview_error:previewErrorPageAction',    '_format' => 'html',  ),  2 =>   array (    'code' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'code',    ),    2 =>     array (      0 => 'text',      1 => '/_error',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
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
