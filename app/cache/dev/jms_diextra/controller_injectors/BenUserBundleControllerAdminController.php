<?php

namespace Ben\UserBundle\Controller;

/**
 * This code has been auto-generated by the JMSDiExtraBundle.
 *
 * Manual changes to it will be lost.
 */
class AdminController__JMSInjector
{
    public static function inject($container) {
        require_once '/home/pacifik/Desktop/Doctors-master/app/cache/dev/jms_diextra/proxies/Ben-UserBundle-Controller-AdminController.php';
        $b = new \JMS\AopBundle\Aop\InterceptorLoader($container, array('Ben\\UserBundle\\Controller\\AdminController' => array('indexAction' => array(0 => 'security.access.method_interceptor'), 'ajaxListAction' => array(0 => 'security.access.method_interceptor'), 'newAction' => array(0 => 'security.access.method_interceptor'), 'addAction' => array(0 => 'security.access.method_interceptor'), 'showAction' => array(0 => 'security.access.method_interceptor'), 'editAction' => array(0 => 'security.access.method_interceptor'), 'updateAction' => array(0 => 'security.access.method_interceptor'), 'deleteAction' => array(0 => 'security.access.method_interceptor'), 'removeUsersAction' => array(0 => 'security.access.method_interceptor'), 'enableUsersAction' => array(0 => 'security.access.method_interceptor'), 'setRoleAction' => array(0 => 'security.access.method_interceptor'), 'exportAction' => array(0 => 'security.access.method_interceptor'), 'editMeAction' => array(0 => 'security.access.method_interceptor'), 'updateMeAction' => array(0 => 'security.access.method_interceptor'))));
        $instance = new \EnhancedProxy32b63242_aaa968b903122828095fdfdbf82a8a9887fe7bb9\__CG__\Ben\UserBundle\Controller\AdminController();
        $instance->__CGInterception__setLoader($b);
        return $instance;
    }
}
