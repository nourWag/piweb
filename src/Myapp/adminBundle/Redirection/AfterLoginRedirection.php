<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AfterLoginRedirection
 *
 * @author snoussi
 */

namespace MyApp\adminBundle\Redirection;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationSuccessHandlerInterface;
class AfterLoginRedirection implements AuthenticationSuccessHandlerInterface
{
    /**
     * @var \Symfony\Component\Routing\RouterInterface
     */
    private $router;
    /**
     * @param RouterInterface $router
     */
    public function __construct(RouterInterface $router)
    {
        $this->router = $router;
    }
    /**
     * @param Request $request
     * @param TokenInterface $token
     * @return RedirectResponse
     */
    public function onAuthenticationSuccess(Request $request, TokenInterface $token)
    {
        // Get list of roles for current user
        $roles = $token->getRoles();
        // Tranform this list in array
        $rolesTab = array_map(function($role){ 
          return $role->getRole(); 
        }, $roles);
        // If is a admin or super admin we redirect to the backoffice area
        if (in_array('ROLE_SUPER_ADMIN', $rolesTab, true)) {
            $redirection = new RedirectResponse($this->router->generate('adminPages'));
        }
        // otherwise, if is a commercial user we redirect to the crm area
//        elseif (in_array('ROLE_ADMIN', $rolesTab, true)) {
//            $redirection = new RedirectResponse($this->router->generate('homme'));
//        }
        // otherwise we redirect user to the member area
         elseif (in_array('ROLE_RESPENSABLE', $rolesTab, true)) {
            $redirection = new RedirectResponse($this->router->generate('respensablePages'));
           
        }
          else {
            $redirection = new RedirectResponse($this->router->generate('pi_homepage1'));
        }

        return $redirection;
    }
} 