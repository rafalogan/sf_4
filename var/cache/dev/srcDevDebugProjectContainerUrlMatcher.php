<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        if (0 === strpos($pathinfo, '/admin')) {
            // admin_alunos
            if ('/admin/alunos' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'App\\Controller\\Admin\\AdminAlunoController::index',  '_route' => 'admin_alunos',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_admin_alunos;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'admin_alunos'));
                }

                return $ret;
            }
            not_admin_alunos:

            // admin_banner
            if ('/admin/banner' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'App\\Controller\\Admin\\AdminBannerController::index',  '_route' => 'admin_banner',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_admin_banner;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'admin_banner'));
                }

                return $ret;
            }
            not_admin_banner:

            // admin_content
            if ('/admin/content' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'App\\Controller\\Admin\\AdminContentController::index',  '_route' => 'admin_content',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_admin_content;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'admin_content'));
                }

                return $ret;
            }
            not_admin_content:

            // admin_image
            if ('/admin/images' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'App\\Controller\\Admin\\AdminImageController::index',  '_route' => 'admin_image',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_admin_image;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'admin_image'));
                }

                return $ret;
            }
            not_admin_image:

            if (0 === strpos($pathinfo, '/admin/menu')) {
                // admin_menu
                if ('/admin/menu' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'App\\Controller\\Admin\\AdminMenuController::index',  '_route' => 'admin_menu',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_admin_menu;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'admin_menu'));
                    }

                    return $ret;
                }
                not_admin_menu:

                if (0 === strpos($pathinfo, '/admin/menu/novo')) {
                    // admin_menu_novo
                    if ('/admin/menu/novo' === $pathinfo) {
                        return array (  '_controller' => 'App\\Controller\\Admin\\AdminMenuController::new',  '_route' => 'admin_menu_novo',);
                    }

                    // admin_menu_novo_sub
                    if ('/admin/menu/novo/submenu' === $pathinfo) {
                        return array (  '_controller' => 'App\\Controller\\Admin\\AdminMenuController::newSub',  '_route' => 'admin_menu_novo_sub',);
                    }

                }

                // admin_menu_edit
                if (0 === strpos($pathinfo, '/admin/menu/editar') && preg_match('#^/admin/menu/editar/(?P<menu_id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_menu_edit')), array (  '_controller' => 'App\\Controller\\Admin\\AdminMenuController::update',));
                }

                // admin_menu_delet
                if (0 === strpos($pathinfo, '/admin/menu/excluir') && preg_match('#^/admin/menu/excluir/(?P<menu_id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_menu_delet')), array (  '_controller' => 'App\\Controller\\Admin\\AdminMenuController::delete',));
                }

            }

            // admin_news_letter
            if ('/admin/news-letter' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'App\\Controller\\Admin\\AdminNewsLetterController::index',  '_route' => 'admin_news_letter',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_admin_news_letter;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'admin_news_letter'));
                }

                return $ret;
            }
            not_admin_news_letter:

            // admin_page
            if ('/admin/pages' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'App\\Controller\\Admin\\AdminPageController::index',  '_route' => 'admin_page',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_admin_page;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'admin_page'));
                }

                return $ret;
            }
            not_admin_page:

            // admin_text
            if ('/admin/textos' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'App\\Controller\\Admin\\AdminTextController::index',  '_route' => 'admin_text',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_admin_text;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'admin_text'));
                }

                return $ret;
            }
            not_admin_text:

            // admin_url
            if ('/admin/url' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'App\\Controller\\Admin\\AdminUrlController::index',  '_route' => 'admin_url',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_admin_url;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'admin_url'));
                }

                return $ret;
            }
            not_admin_url:

            // admin_users
            if ('/admin/users' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'App\\Controller\\Admin\\AdminUsersController::index',  '_route' => 'admin_users',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_admin_users;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'admin_users'));
                }

                return $ret;
            }
            not_admin_users:

        }

        // home
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'App\\Controller\\DefautController::index',  '_route' => 'home',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_home;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'home'));
            }

            return $ret;
        }
        not_home:

        // _twig_error_test
        if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
