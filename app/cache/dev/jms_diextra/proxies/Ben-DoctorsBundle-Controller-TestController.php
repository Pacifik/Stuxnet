<?php

namespace EnhancedProxy32b63242_29a5223a14eae118be664aa104cc4f1f9e5a3900\__CG__\Ben\DoctorsBundle\Controller;

/**
 * CG library enhanced proxy class.
 *
 * This code was generated automatically by the CG library, manual changes to it
 * will be lost upon next generation.
 */
class TestController extends \Ben\DoctorsBundle\Controller\TestController
{
    private $__CGInterception__loader;

    public function updateAction(\Symfony\Component\HttpFoundation\Request $request, $id)
    {
        $ref = new \ReflectionMethod('Ben\\DoctorsBundle\\Controller\\TestController', 'updateAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($request, $id));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($request, $id), $interceptors);

        return $invocation->proceed();
    }

    public function showAction($id)
    {
        $ref = new \ReflectionMethod('Ben\\DoctorsBundle\\Controller\\TestController', 'showAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($id));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($id), $interceptors);

        return $invocation->proceed();
    }

    public function removeAction(\Symfony\Component\HttpFoundation\Request $request)
    {
        $ref = new \ReflectionMethod('Ben\\DoctorsBundle\\Controller\\TestController', 'removeAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($request));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($request), $interceptors);

        return $invocation->proceed();
    }

    public function newAction(\Ben\DoctorsBundle\Entity\Consultation $consultation, $type)
    {
        $ref = new \ReflectionMethod('Ben\\DoctorsBundle\\Controller\\TestController', 'newAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($consultation, $type));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($consultation, $type), $interceptors);

        return $invocation->proceed();
    }

    public function indexAction()
    {
        $ref = new \ReflectionMethod('Ben\\DoctorsBundle\\Controller\\TestController', 'indexAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function editAction($id)
    {
        $ref = new \ReflectionMethod('Ben\\DoctorsBundle\\Controller\\TestController', 'editAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($id));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($id), $interceptors);

        return $invocation->proceed();
    }

    public function deleteAction(\Symfony\Component\HttpFoundation\Request $request, $id)
    {
        $ref = new \ReflectionMethod('Ben\\DoctorsBundle\\Controller\\TestController', 'deleteAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($request, $id));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($request, $id), $interceptors);

        return $invocation->proceed();
    }

    public function createAction(\Symfony\Component\HttpFoundation\Request $request, $type)
    {
        $ref = new \ReflectionMethod('Ben\\DoctorsBundle\\Controller\\TestController', 'createAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($request, $type));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($request, $type), $interceptors);

        return $invocation->proceed();
    }

    public function ajaxListAction(\Symfony\Component\HttpFoundation\Request $request)
    {
        $ref = new \ReflectionMethod('Ben\\DoctorsBundle\\Controller\\TestController', 'ajaxListAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($request));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($request), $interceptors);

        return $invocation->proceed();
    }

    public function __CGInterception__setLoader(\CG\Proxy\InterceptorLoaderInterface $loader)
    {
        $this->__CGInterception__loader = $loader;
    }
}