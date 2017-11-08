<?php

namespace EnhancedProxy32b63242_1815ac752dd45699579149d2a77845d35a9f90e0\__CG__\Ben\DoctorsBundle\Controller;

/**
 * CG library enhanced proxy class.
 *
 * This code was generated automatically by the CG library, manual changes to it
 * will be lost upon next generation.
 */
class ConfigController extends \Ben\DoctorsBundle\Controller\ConfigController
{
    private $__CGInterception__loader;

    public function updateAction(\Symfony\Component\HttpFoundation\Request $request)
    {
        $ref = new \ReflectionMethod('Ben\\DoctorsBundle\\Controller\\ConfigController', 'updateAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($request));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($request), $interceptors);

        return $invocation->proceed();
    }

    public function showAction(\Ben\DoctorsBundle\Entity\Config $entity)
    {
        $ref = new \ReflectionMethod('Ben\\DoctorsBundle\\Controller\\ConfigController', 'showAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($entity));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($entity), $interceptors);

        return $invocation->proceed();
    }

    public function newAction()
    {
        $ref = new \ReflectionMethod('Ben\\DoctorsBundle\\Controller\\ConfigController', 'newAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function indexAction()
    {
        $ref = new \ReflectionMethod('Ben\\DoctorsBundle\\Controller\\ConfigController', 'indexAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function editAction(\Ben\DoctorsBundle\Entity\Config $entity)
    {
        $ref = new \ReflectionMethod('Ben\\DoctorsBundle\\Controller\\ConfigController', 'editAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($entity));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($entity), $interceptors);

        return $invocation->proceed();
    }

    public function deleteAction(\Symfony\Component\HttpFoundation\Request $request, \Ben\DoctorsBundle\Entity\Config $entity)
    {
        $ref = new \ReflectionMethod('Ben\\DoctorsBundle\\Controller\\ConfigController', 'deleteAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($request, $entity));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($request, $entity), $interceptors);

        return $invocation->proceed();
    }

    public function createAction(\Symfony\Component\HttpFoundation\Request $request)
    {
        $ref = new \ReflectionMethod('Ben\\DoctorsBundle\\Controller\\ConfigController', 'createAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($request));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($request), $interceptors);

        return $invocation->proceed();
    }

    public function __CGInterception__setLoader(\CG\Proxy\InterceptorLoaderInterface $loader)
    {
        $this->__CGInterception__loader = $loader;
    }
}