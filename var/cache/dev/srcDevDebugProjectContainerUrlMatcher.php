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

        // admin_panel
        if ('/admin/panel' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\AdminController::adminPanelAction',  '_route' => 'admin_panel',);
        }

        if (0 === strpos($pathinfo, '/admin/approve')) {
            // approve_panel
            if ('/admin/approve-panel' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\AdminController::approvePanelAction',  '_route' => 'approve_panel',);
            }

            // approve_user
            if (preg_match('#^/admin/approve/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'approve_user')), array (  '_controller' => 'App\\Controller\\AdminController::approveRegistrationAction',));
            }

        }

        // homepage
        if ('/index' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\IndexController::indexAction',  '_route' => 'homepage',);
        }

        // new_mark
        if (0 === strpos($pathinfo, '/mark/new') && preg_match('#^/mark/new/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'new_mark')), array (  '_controller' => 'App\\Controller\\MarkController::newAction',));
        }

        // login
        if ('/login' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\SecurityController::login',  '_route' => 'login',);
        }

        // logout
        if ('/logout' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\SecurityController::logoutAction',  '_route' => 'logout',);
        }

        if (0 === strpos($pathinfo, '/specialty')) {
            // new_specialty
            if ('/specialty/new' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\SpecialtyController::newAction',  '_route' => 'new_specialty',);
            }

            // set_specialty
            if (0 === strpos($pathinfo, '/specialty/set') && preg_match('#^/specialty/set/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'set_specialty')), array (  '_controller' => 'App\\Controller\\SpecialtyController::setAction',));
            }

            // specialty_profile
            if (0 === strpos($pathinfo, '/specialty/profile') && preg_match('#^/specialty/profile/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'specialty_profile')), array (  '_controller' => 'App\\Controller\\SpecialtyController::profileAction',));
            }

            // specialty_classBook
            if (0 === strpos($pathinfo, '/specialty/classBook') && preg_match('#^/specialty/classBook/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'specialty_classBook')), array (  '_controller' => 'App\\Controller\\SpecialtyController::classBookAction',));
            }

        }

        // new_subject
        if ('/subject/new' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\SubjectController::newAction',  '_route' => 'new_subject',);
        }

        // register
        if ('/register' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\UserController::registerAction',  '_route' => 'register',);
        }

        if (0 === strpos($pathinfo, '/user')) {
            // all_users
            if ('/user/all' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\UserController::allStudentsAction',  '_route' => 'all_users',);
            }

            // user_profile
            if (0 === strpos($pathinfo, '/user/profile') && preg_match('#^/user/profile/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_profile')), array (  '_controller' => 'App\\Controller\\UserController::profileAction',));
            }

            // student_profile
            if (0 === strpos($pathinfo, '/user/studentProfile') && preg_match('#^/user/studentProfile/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'student_profile')), array (  '_controller' => 'App\\Controller\\UserController::studentProfileAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/_')) {
            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not__profiler_home;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }
                not__profiler_home:

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

        }

        // index
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'App\\Controller\\IndexController::indexAction',  '_route' => 'index',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_index;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'index'));
            }

            return $ret;
        }
        not_index:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
