<?php

namespace Ben\DoctorsBundle\Controller;

/**
 * This code has been auto-generated by the JMSDiExtraBundle.
 *
 * Manual changes to it will be lost.
 */
class MedsController__JMSInjector
{
    public static function inject($container) {
        require_once '/home/pacifik/Desktop/Doctors-master/app/cache/dev/jms_diextra/proxies/Ben-DoctorsBundle-Controller-MedsController.php';
        $g = new \JMS\AopBundle\Aop\InterceptorLoader($container, array('Ben\\DoctorsBundle\\Controller\\MedsController' => array('indexAction' => array(0 => 'security.access.method_interceptor'), 'ajaxListAction' => array(0 => 'security.access.method_interceptor'), 'createAction' => array(0 => 'security.access.method_interceptor'), 'newAction' => array(0 => 'security.access.method_interceptor'), 'showAction' => array(0 => 'security.access.method_interceptor'), 'editAction' => array(0 => 'security.access.method_interceptor'), 'updateAction' => array(0 => 'security.access.method_interceptor'), 'deleteAction' => array(0 => 'security.access.method_interceptor'), 'removeAction' => array(0 => 'security.access.method_interceptor'))));
        $instance = new \EnhancedProxy32b63242_c6e798dec6e870f5814fd33e9d8a54fde9dff319\__CG__\Ben\DoctorsBundle\Controller\MedsController();
        $instance->__CGInterception__setLoader($g);
        return $instance;
    }
}