<?php

namespace EnhancedProxy32b63242_560895319b6bd7fa7c59184513cb78713623e619\__CG__\Ben\DoctorsBundle\Controller;

/**
 * CG library enhanced proxy class.
 *
 * This code was generated automatically by the CG library, manual changes to it
 * will be lost upon next generation.
 */
class DefaultController extends \Ben\DoctorsBundle\Controller\DefaultController
{
    private $__CGInterception__loader;

    public function statsAction(\Symfony\Component\HttpFoundation\Request $request)
    {
        $ref = new \ReflectionMethod('Ben\\DoctorsBundle\\Controller\\DefaultController', 'statsAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($request));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($request), $interceptors);

        return $invocation->proceed();
    }

    public function indexAction()
    {
        $ref = new \ReflectionMethod('Ben\\DoctorsBundle\\Controller\\DefaultController', 'indexAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function __CGInterception__setLoader(\CG\Proxy\InterceptorLoaderInterface $loader)
    {
        $this->__CGInterception__loader = $loader;
    }
}