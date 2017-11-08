<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        // ben_dashboard
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'ben_dashboard');
            }

            return array (  '_controller' => 'Ben\\DoctorsBundle\\Controller\\DefaultController::indexAction',  '_route' => 'ben_dashboard',);
        }

        // ben_stats
        if ($pathinfo === '/stats') {
            return array (  '_controller' => 'Ben\\DoctorsBundle\\Controller\\DefaultController::statsAction',  '_route' => 'ben_stats',);
        }

        if (0 === strpos($pathinfo, '/person')) {
            // person
            if (rtrim($pathinfo, '/') === '/person') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'person');
                }

                return array (  '_controller' => 'Ben\\DoctorsBundle\\Controller\\PersonController::indexAction',  '_route' => 'person',);
            }

            // person_ajax
            if ($pathinfo === '/person/ajaxlist') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_person_ajax;
                }

                return array (  '_controller' => 'Ben\\DoctorsBundle\\Controller\\PersonController::ajaxListAction',  '_route' => 'person_ajax',);
            }
            not_person_ajax:

            // person_show
            if (preg_match('#^/person/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'person_show')), array (  '_controller' => 'Ben\\DoctorsBundle\\Controller\\PersonController::showAction',));
            }

            // person_new
            if ($pathinfo === '/person/new') {
                return array (  '_controller' => 'Ben\\DoctorsBundle\\Controller\\PersonController::newAction',  '_route' => 'person_new',);
            }

            // person_create
            if ($pathinfo === '/person/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_person_create;
                }

                return array (  '_controller' => 'Ben\\DoctorsBundle\\Controller\\PersonController::createAction',  '_route' => 'person_create',);
            }
            not_person_create:

            // person_edit
            if (preg_match('#^/person/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'person_edit')), array (  '_controller' => 'Ben\\DoctorsBundle\\Controller\\PersonController::editAction',));
            }

            // person_update
            if (preg_match('#^/person/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_person_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'person_update')), array (  '_controller' => 'Ben\\DoctorsBundle\\Controller\\PersonController::updateAction',));
            }
            not_person_update:

            // person_delete
            if (preg_match('#^/person/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_person_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'person_delete')), array (  '_controller' => 'Ben\\DoctorsBundle\\Controller\\PersonController::deleteAction',));
            }
            not_person_delete:

            // person_remove
            if ($pathinfo === '/person/remove') {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_person_remove;
                }

                return array (  '_controller' => 'Ben\\DoctorsBundle\\Controller\\PersonController::removeAction',  '_route' => 'person_remove',);
            }
            not_person_remove:

        }

        if (0 === strpos($pathinfo, '/examen')) {
            // test
            if (rtrim($pathinfo, '/') === '/examen') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'test');
                }

                return array (  '_controller' => 'Ben\\DoctorsBundle\\Controller\\TestController::indexAction',  '_route' => 'test',);
            }

            // test_ajax
            if ($pathinfo === '/examen/ajaxlist') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_test_ajax;
                }

                return array (  '_controller' => 'Ben\\DoctorsBundle\\Controller\\TestController::ajaxListAction',  '_route' => 'test_ajax',);
            }
            not_test_ajax:

            // test_show
            if (preg_match('#^/examen/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'test_show')), array (  '_controller' => 'Ben\\DoctorsBundle\\Controller\\TestController::showAction',));
            }

            // test_new
            if (preg_match('#^/examen/(?P<id>[^/]++)/(?P<type>[^/]++)/new$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'test_new')), array (  '_controller' => 'Ben\\DoctorsBundle\\Controller\\TestController::newAction',  'type' => 0,));
            }

            // test_create
            if (preg_match('#^/examen/(?P<type>[^/]++)/create$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_test_create;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'test_create')), array (  '_controller' => 'Ben\\DoctorsBundle\\Controller\\TestController::createAction',  'type' => 0,));
            }
            not_test_create:

            // test_edit
            if (preg_match('#^/examen/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'test_edit')), array (  '_controller' => 'Ben\\DoctorsBundle\\Controller\\TestController::editAction',));
            }

            // test_update
            if (preg_match('#^/examen/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_test_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'test_update')), array (  '_controller' => 'Ben\\DoctorsBundle\\Controller\\TestController::updateAction',));
            }
            not_test_update:

            // test_delete
            if (preg_match('#^/examen/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_test_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'test_delete')), array (  '_controller' => 'Ben\\DoctorsBundle\\Controller\\TestController::deleteAction',));
            }
            not_test_delete:

            // test_remove
            if ($pathinfo === '/examen/remove') {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_test_remove;
                }

                return array (  '_controller' => 'Ben\\DoctorsBundle\\Controller\\TestController::removeAction',  '_route' => 'test_remove',);
            }
            not_test_remove:

        }

        if (0 === strpos($pathinfo, '/medicaments')) {
            // meds
            if (rtrim($pathinfo, '/') === '/medicaments') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'meds');
                }

                return array (  '_controller' => 'Ben\\DoctorsBundle\\Controller\\MedsController::indexAction',  '_route' => 'meds',);
            }

            // meds_ajax
            if ($pathinfo === '/medicaments/ajaxlist') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_meds_ajax;
                }

                return array (  '_controller' => 'Ben\\DoctorsBundle\\Controller\\MedsController::ajaxListAction',  '_route' => 'meds_ajax',);
            }
            not_meds_ajax:

            // meds_show
            if (preg_match('#^/medicaments/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'meds_show')), array (  '_controller' => 'Ben\\DoctorsBundle\\Controller\\MedsController::showAction',));
            }

            // meds_new
            if ($pathinfo === '/medicaments/new') {
                return array (  '_controller' => 'Ben\\DoctorsBundle\\Controller\\MedsController::newAction',  '_route' => 'meds_new',);
            }

            // meds_create
            if ($pathinfo === '/medicaments/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_meds_create;
                }

                return array (  '_controller' => 'Ben\\DoctorsBundle\\Controller\\MedsController::createAction',  '_route' => 'meds_create',);
            }
            not_meds_create:

            // meds_edit
            if (preg_match('#^/medicaments/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'meds_edit')), array (  '_controller' => 'Ben\\DoctorsBundle\\Controller\\MedsController::editAction',));
            }

            // meds_update
            if (preg_match('#^/medicaments/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_meds_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'meds_update')), array (  '_controller' => 'Ben\\DoctorsBundle\\Controller\\MedsController::updateAction',));
            }
            not_meds_update:

            // meds_delete
            if (preg_match('#^/medicaments/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_meds_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'meds_delete')), array (  '_controller' => 'Ben\\DoctorsBundle\\Controller\\MedsController::deleteAction',));
            }
            not_meds_delete:

            // meds_remove
            if ($pathinfo === '/medicaments/remove') {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_meds_remove;
                }

                return array (  '_controller' => 'Ben\\DoctorsBundle\\Controller\\MedsController::removeAction',  '_route' => 'meds_remove',);
            }
            not_meds_remove:

        }

        if (0 === strpos($pathinfo, '/consultation')) {
            // consultation
            if (rtrim($pathinfo, '/') === '/consultation') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'consultation');
                }

                return array (  '_controller' => 'Ben\\DoctorsBundle\\Controller\\ConsultationController::indexAction',  '_route' => 'consultation',);
            }

            // consultation_ajax
            if ($pathinfo === '/consultation/ajaxlist') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_consultation_ajax;
                }

                return array (  '_controller' => 'Ben\\DoctorsBundle\\Controller\\ConsultationController::ajaxListAction',  '_route' => 'consultation_ajax',);
            }
            not_consultation_ajax:

            // consultation_show
            if (preg_match('#^/consultation/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'consultation_show')), array (  '_controller' => 'Ben\\DoctorsBundle\\Controller\\ConsultationController::showAction',));
            }

            // consultation_new
            if (preg_match('#^/consultation/(?P<id>[^/]++)/(?P<type>[^/]++)/new$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'consultation_new')), array (  '_controller' => 'Ben\\DoctorsBundle\\Controller\\ConsultationController::newAction',  'type' => 0,));
            }

            // consultation_create
            if (preg_match('#^/consultation/(?P<type>[^/]++)/create$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_consultation_create;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'consultation_create')), array (  '_controller' => 'Ben\\DoctorsBundle\\Controller\\ConsultationController::createAction',  'type' => 0,));
            }
            not_consultation_create:

            // consultation_edit
            if (preg_match('#^/consultation/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'consultation_edit')), array (  '_controller' => 'Ben\\DoctorsBundle\\Controller\\ConsultationController::editAction',));
            }

            // consultation_update
            if (preg_match('#^/consultation/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_consultation_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'consultation_update')), array (  '_controller' => 'Ben\\DoctorsBundle\\Controller\\ConsultationController::updateAction',));
            }
            not_consultation_update:

            // consultation_delete
            if (preg_match('#^/consultation/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_consultation_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'consultation_delete')), array (  '_controller' => 'Ben\\DoctorsBundle\\Controller\\ConsultationController::deleteAction',));
            }
            not_consultation_delete:

            // consultation_remove
            if ($pathinfo === '/consultation/remove') {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_consultation_remove;
                }

                return array (  '_controller' => 'Ben\\DoctorsBundle\\Controller\\ConsultationController::removeAction',  '_route' => 'consultation_remove',);
            }
            not_consultation_remove:

        }

        if (0 === strpos($pathinfo, '/antecedent')) {
            // antecedent
            if (rtrim($pathinfo, '/') === '/antecedent') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'antecedent');
                }

                return array (  '_controller' => 'Ben\\DoctorsBundle\\Controller\\AntecedentController::indexAction',  '_route' => 'antecedent',);
            }

            // antecedent_show
            if (preg_match('#^/antecedent/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'antecedent_show')), array (  '_controller' => 'Ben\\DoctorsBundle\\Controller\\AntecedentController::showAction',));
            }

            // antecedent_new
            if (preg_match('#^/antecedent/(?P<id>[^/]++)/new$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'antecedent_new')), array (  '_controller' => 'Ben\\DoctorsBundle\\Controller\\AntecedentController::newAction',));
            }

            // antecedent_create
            if ($pathinfo === '/antecedent/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_antecedent_create;
                }

                return array (  '_controller' => 'Ben\\DoctorsBundle\\Controller\\AntecedentController::createAction',  '_route' => 'antecedent_create',);
            }
            not_antecedent_create:

            // antecedent_edit
            if (preg_match('#^/antecedent/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'antecedent_edit')), array (  '_controller' => 'Ben\\DoctorsBundle\\Controller\\AntecedentController::editAction',));
            }

            // antecedent_update
            if (preg_match('#^/antecedent/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_antecedent_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'antecedent_update')), array (  '_controller' => 'Ben\\DoctorsBundle\\Controller\\AntecedentController::updateAction',));
            }
            not_antecedent_update:

            // antecedent_delete
            if (preg_match('#^/antecedent/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_antecedent_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'antecedent_delete')), array (  '_controller' => 'Ben\\DoctorsBundle\\Controller\\AntecedentController::deleteAction',));
            }
            not_antecedent_delete:

        }

        if (0 === strpos($pathinfo, '/config')) {
            // config
            if (rtrim($pathinfo, '/') === '/config') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'config');
                }

                return array (  '_controller' => 'Ben\\DoctorsBundle\\Controller\\ConfigController::indexAction',  '_route' => 'config',);
            }

            // config_show
            if (preg_match('#^/config/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'config_show')), array (  '_controller' => 'Ben\\DoctorsBundle\\Controller\\ConfigController::showAction',));
            }

            // config_new
            if ($pathinfo === '/config/new') {
                return array (  '_controller' => 'Ben\\DoctorsBundle\\Controller\\ConfigController::newAction',  '_route' => 'config_new',);
            }

            // config_create
            if ($pathinfo === '/config/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_config_create;
                }

                return array (  '_controller' => 'Ben\\DoctorsBundle\\Controller\\ConfigController::createAction',  '_route' => 'config_create',);
            }
            not_config_create:

            // config_edit
            if (preg_match('#^/config/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'config_edit')), array (  '_controller' => 'Ben\\DoctorsBundle\\Controller\\ConfigController::editAction',));
            }

            // config_update
            if ($pathinfo === '/config/update') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_config_update;
                }

                return array (  '_controller' => 'Ben\\DoctorsBundle\\Controller\\ConfigController::updateAction',  '_route' => 'config_update',);
            }
            not_config_update:

            // config_delete
            if (preg_match('#^/config/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_config_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'config_delete')), array (  '_controller' => 'Ben\\DoctorsBundle\\Controller\\ConfigController::deleteAction',));
            }
            not_config_delete:

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'Ben\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'Ben\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'Ben\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'Ben\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'Ben\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'Ben\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'Ben\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'Ben\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'Ben\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'Ben\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'Ben\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'Ben\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'Ben\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/change-password/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'Ben\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        // fos_autocomplete
        if ($pathinfo === '/users/autocomplete') {
            return array (  '_controller' => 'Ben\\UserBundle\\Controller\\UserController::autocompleteAction',  '_route' => 'fos_autocomplete',);
        }

        if (0 === strpos($pathinfo, '/group')) {
            // fos_user_group_list
            if ($pathinfo === '/group/list') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_group_list;
                }

                return array (  '_controller' => 'Ben\\UserBundle\\Controller\\GroupController::listAction',  '_route' => 'fos_user_group_list',);
            }
            not_fos_user_group_list:

            // fos_user_group_new
            if ($pathinfo === '/group/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_group_new;
                }

                return array (  '_controller' => 'Ben\\UserBundle\\Controller\\GroupController::newAction',  '_route' => 'fos_user_group_new',);
            }
            not_fos_user_group_new:

            // fos_user_group_show
            if (preg_match('#^/group/(?P<groupname>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_group_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_group_show')), array (  '_controller' => 'Ben\\UserBundle\\Controller\\GroupController::showAction',));
            }
            not_fos_user_group_show:

            // fos_user_group_edit
            if (preg_match('#^/group/(?P<groupname>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_group_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_group_edit')), array (  '_controller' => 'Ben\\UserBundle\\Controller\\GroupController::editAction',));
            }
            not_fos_user_group_edit:

            // fos_user_group_delete
            if (preg_match('#^/group/(?P<groupname>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_group_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_group_delete')), array (  '_controller' => 'Ben\\UserBundle\\Controller\\GroupController::deleteAction',));
            }
            not_fos_user_group_delete:

        }

        if (0 === strpos($pathinfo, '/manage')) {
            // ben_users
            if (rtrim($pathinfo, '/') === '/manage') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'ben_users');
                }

                return array (  '_controller' => 'Ben\\UserBundle\\Controller\\AdminController::indexAction',  '_route' => 'ben_users',);
            }

            // ben_users_ajax
            if ($pathinfo === '/manage/userslist') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_ben_users_ajax;
                }

                return array (  '_controller' => 'Ben\\UserBundle\\Controller\\AdminController::ajaxListAction',  '_route' => 'ben_users_ajax',);
            }
            not_ben_users_ajax:

            // ben_show_user
            if (0 === strpos($pathinfo, '/manage/show') && preg_match('#^/manage/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ben_show_user')), array (  '_controller' => 'Ben\\UserBundle\\Controller\\AdminController::showAction',));
            }

            // ben_new_user
            if ($pathinfo === '/manage/new') {
                return array (  '_controller' => 'Ben\\UserBundle\\Controller\\AdminController::newAction',  '_route' => 'ben_new_user',);
            }

            // ben_add_user
            if ($pathinfo === '/manage/add') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_ben_add_user;
                }

                return array (  '_controller' => 'Ben\\UserBundle\\Controller\\AdminController::addAction',  '_route' => 'ben_add_user',);
            }
            not_ben_add_user:

            // ben_edit_user
            if (0 === strpos($pathinfo, '/manage/edit') && preg_match('#^/manage/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ben_edit_user')), array (  '_controller' => 'Ben\\UserBundle\\Controller\\AdminController::editAction',));
            }

            if (0 === strpos($pathinfo, '/manage/u')) {
                // ben_update_user
                if (0 === strpos($pathinfo, '/manage/update') && preg_match('#^/manage/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_ben_update_user;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ben_update_user')), array (  '_controller' => 'Ben\\UserBundle\\Controller\\AdminController::updateAction',));
                }
                not_ben_update_user:

                if (0 === strpos($pathinfo, '/manage/users')) {
                    // ben_users_list
                    if ($pathinfo === '/manage/users/list') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_ben_users_list;
                        }

                        return array (  '_controller' => 'Ben\\UserBundle\\Controller\\AdminController::usersListAction',  '_route' => 'ben_users_list',);
                    }
                    not_ben_users_list:

                    // ben_enable_users
                    if (0 === strpos($pathinfo, '/manage/users/active') && preg_match('#^/manage/users/active(?:/(?P<etat>[^/]++))?$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_ben_enable_users;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ben_enable_users')), array (  '_controller' => 'Ben\\UserBundle\\Controller\\AdminController::enableUsersAction',  'etat' => 1,));
                    }
                    not_ben_enable_users:

                }

            }

            // ben_promote_users
            if (0 === strpos($pathinfo, '/manage/promote') && preg_match('#^/manage/promote(?:/(?P<role>[^/]++))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_ben_promote_users;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ben_promote_users')), array (  '_controller' => 'Ben\\UserBundle\\Controller\\AdminController::setRoleAction',  'role' => 'user',));
            }
            not_ben_promote_users:

            if (0 === strpos($pathinfo, '/manage/delete')) {
                // ben_delete_user
                if (preg_match('#^/manage/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ben_delete_user')), array (  '_controller' => 'Ben\\UserBundle\\Controller\\AdminController::deleteAction',));
                }

                // ben_remove_users
                if ($pathinfo === '/manage/delete') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_ben_remove_users;
                    }

                    return array (  '_controller' => 'Ben\\UserBundle\\Controller\\AdminController::removeUsersAction',  '_route' => 'ben_remove_users',);
                }
                not_ben_remove_users:

            }

            // ben_users_export
            if ($pathinfo === '/manage/export') {
                return array (  '_controller' => 'Ben\\UserBundle\\Controller\\AdminController::exportAction',  '_route' => 'ben_users_export',);
            }

            // ben_profile_edit
            if (0 === strpos($pathinfo, '/manage/me/edit') && preg_match('#^/manage/me/edit/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ben_profile_edit')), array (  '_controller' => 'Ben\\UserBundle\\Controller\\AdminController::editMeAction',));
            }

            // ben_profile_update
            if (0 === strpos($pathinfo, '/manage/_me') && preg_match('#^/manage/_me/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_ben_profile_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ben_profile_update')), array (  '_controller' => 'Ben\\UserBundle\\Controller\\AdminController::updateMeAction',));
            }
            not_ben_profile_update:

            // ben_pdf
            if (0 === strpos($pathinfo, '/manage/pdf') && preg_match('#^/manage/pdf/(?P<users>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ben_pdf')), array (  '_controller' => 'Ben\\UserBundle\\Controller\\AdminController::pdfAction',));
            }

            // ben_badge_user
            if (0 === strpos($pathinfo, '/manage/badge') && preg_match('#^/manage/badge/(?P<users>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ben_badge_user')), array (  '_controller' => 'Ben\\UserBundle\\Controller\\AdminController::showBadgeAction',));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
