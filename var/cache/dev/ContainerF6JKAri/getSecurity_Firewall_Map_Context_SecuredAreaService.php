<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.firewall.map.context.secured_area' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\security\\Http\\EntryPoint\\AuthenticationEntryPointInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\security\\Http\\EntryPoint\\FormAuthenticationEntryPoint.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\security\\Http\\Util\\TargetPathTrait.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\security\\Http\\Firewall\\ExceptionListener.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\security-bundle\\Security\\FirewallConfig.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\security-bundle\\Security\\FirewallContext.php';

$a = ($this->privates['security.http_utils'] ?? $this->load(__DIR__.'/getSecurity_HttpUtilsService.php'));

return $this->privates['security.firewall.map.context.secured_area'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(new RewindableGenerator(function () {
    yield 0 => ($this->privates['security.channel_listener'] ?? $this->load(__DIR__.'/getSecurity_ChannelListenerService.php'));
    yield 1 => ($this->privates['security.context_listener.0'] ?? $this->load(__DIR__.'/getSecurity_ContextListener_0Service.php'));
    yield 2 => ($this->privates['security.logout_listener.secured_area'] ?? $this->load(__DIR__.'/getSecurity_LogoutListener_SecuredAreaService.php'));
    yield 3 => ($this->privates['security.authentication.listener.form.secured_area'] ?? $this->load(__DIR__.'/getSecurity_Authentication_Listener_Form_SecuredAreaService.php'));
    yield 4 => ($this->privates['security.authentication.listener.anonymous.secured_area'] ?? $this->load(__DIR__.'/getSecurity_Authentication_Listener_Anonymous_SecuredAreaService.php'));
    yield 5 => ($this->privates['security.access_listener'] ?? $this->load(__DIR__.'/getSecurity_AccessListenerService.php'));
}, 6), new \Symfony\Component\Security\Http\Firewall\ExceptionListener(($this->services['security.token_storage'] ?? $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage()), ($this->privates['security.authentication.trust_resolver'] ?? $this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver('Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken', 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken')), $a, 'secured_area', new \Symfony\Component\Security\Http\EntryPoint\FormAuthenticationEntryPoint(($this->services['http_kernel'] ?? $this->getHttpKernelService()), $a, 'login', false), NULL, NULL, ($this->privates['monolog.logger.security'] ?? $this->load(__DIR__.'/getMonolog_Logger_SecurityService.php')), false), new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('secured_area', 'security.user_checker', 'security.request_matcher.00qF1Z7', true, false, 'security.user.provider.concrete.database_users', 'secured_area', 'security.authentication.form_entry_point.secured_area', NULL, NULL, array(0 => 'logout', 1 => 'form_login', 2 => 'anonymous'), NULL));