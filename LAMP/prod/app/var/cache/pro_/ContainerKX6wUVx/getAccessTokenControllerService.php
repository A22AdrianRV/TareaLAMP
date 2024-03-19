<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShopBundle\Controller\Api\OAuth2\AccessTokenController' shared service.

$a = new \League\OAuth2\Server\AuthorizationServer(new \PrestaShopBundle\Security\OAuth2\Repository\ClientRepository(($this->privates['security.user.provider.concrete.oauth2'] ?? ($this->privates['security.user.provider.concrete.oauth2'] = new \Symfony\Component\Security\Core\User\InMemoryUserProvider([]))), ($this->services['security.password_encoder'] ?? $this->load('getSecurity_PasswordEncoderService.php'))), new \PrestaShopBundle\Security\OAuth2\Repository\AccessTokenRepository(), new \PrestaShopBundle\Security\OAuth2\Repository\NullScopeRepository(), new \League\OAuth2\Server\CryptKey('-----BEGIN PRIVATE KEY-----'."\n".'MIIEvAIBADANBgkqhkiG9w0BAQEFAASCBKYwggSiAgEAAoIBAQCvJ2NYcb13re+h'."\n".'desDZ2vKY7zhHl8SrlIra0I1YUpDYcmzBXJZ2p4HgpbkDJWs7QLc2sofa+tP7Bn4'."\n".'dsnW+KCNxHC+7XP0hL9cfYQFime+ZrRfoAx+yAXTkDknFN3I5ECPMWvHc7jI3jbl'."\n".'KSxCo+9EjxQhUjthonVG3HYxPRLEhDmXFz/kBJlNyW/HqSrsoIUYsAJ+KabQlOvs'."\n".'ZuJ1KS5cttLqACRxAjXBffBknEK1b422sCyfPMxBPbaRkjwuxxW7TfWtrL0GZCBB'."\n".'m8eCRmovMBxRpz/kDeweHAB2URuB+VM48JirAgbKLUEk2Lbj9Pcxg65FAwICqaWf'."\n".'pknllVczAgMBAAECggEAFn1pPS8Fk/tqfIHmlj5OUeNymjlLHdvyQw73pmECpxpE'."\n".'Ss9VOoJerjovY8LV6SlZp8AUGerCgTWgtA2UpxyviOSDUZCtxeTRqW+YZxm5bnJD'."\n".'kM+9Kv5F+T9Yh1Mfky7zty8yVp7eSDR4Of6KZ1gjXds9S3YCl+vDQUEHkBT2dvMJ'."\n".'B8Nv5qniorbsfeddCpGfx7miMQjUym9swSlc5g45v50u8VTvgeH66HugyGDQFdDq'."\n".'TUQy+hHAHJ+rndZB0M9qV5fabUsWZ+je2BvZCQMRqNdyzchdZHq5q4zGZBXL4q1x'."\n".'Alnq0kRJxYjjyUm3d/fGf/0gbRtSB90ApE3YzmbVqQKBgQDZlhAUnWMhb2GX9WEF'."\n".'3YO3YSDclGc/GISUGa2Lfqb0v7pGgbCt8wTNGzE1WPlpEbFwUkteJkdh/oWeXrxU'."\n".'LBv9/ZFPxcHxyvbfOvyCeHMbVpcsvVRDx1T69Xe+JxzD1nQNoxIBE1CA66CsLOoJ'."\n".'9LAXV8kpQd/w6pF3q8U7wp9T1wKBgQDOE5I1CcsjGF9o8F+aCH2gMf6dyQ4hZ+0U'."\n".'DklTFiyQI00WsIkeAB6qj0jUHOXLadmNP3JGqT8XYUy6e9oVq+22ROz84Kk+cJiF'."\n".'ecc9WI3Vnh+QOvCIyaMA2Rr3iWVSkzvnYA4ydvTI1U+q5bG/eJ3IhivMSJkJ4Oh+'."\n".'OgRfJHZsBQKBgAnQZvFHGA2OBIziGHo3P5Wp392TJAUIihJUBivgjo9DhpdfiiSO'."\n".'bY0CyPlrBfTjQ2mZjKS2fUnCPSyjgUMaqjiOk1tRxCmvyerPskwAOtDk2vS9pWtZ'."\n".'NlALelctVHLQ3XMwA8PgpyTpe9nIPNYuHzMuVnhx7DPloKIRMVg8swsJAoGAC1rC'."\n".'tI9slOtz3llYOyl6mogGqnT4hVivlGpRGfXf0LVROw3REEkbZ3Rro9xPwQx9Ay5a'."\n".'wo/yvPwMeT33vzfw6hkUIb7TNHCJxtj15GhrsDh9LrpApJjPlW1g8gCtB4a7Rz1g'."\n".'quEpDaPLNvRe/djMgM77vM7HN+cfiEz0DrX4nG0CgYBeu4ZdAmfk1DWmX+2rYrKY'."\n".'mdu/LLaykfx/1WVSG8HV3qcKzCPp8Ankpat8bbgZPEAoXEFw0GMMrFAJfAIMg3dN'."\n".'9BpEH778v9b40RRWgYztmwb/WRnglEVxWMSVxCEFy2klzNzq/QpoX+8yv1DLbi6P'."\n".'9N2PNoqzERmCS/V4WK0t/A=='."\n".'-----END PRIVATE KEY-----'."\n".''), 'def00000f256467c1c45209ddeb14e5054bad41f381d736c774e92c770f0fa6bfaa84e3e283af2cd62cc399682c831972a11654f209e689fb2d71c34d4d34aa6d254d0b0');
$a->enableGrantType(new \League\OAuth2\Server\Grant\ClientCredentialsGrant());
$b = new \Nyholm\Psr7\Factory\Psr17Factory();

return $this->services['PrestaShopBundle\\Controller\\Api\\OAuth2\\AccessTokenController'] = new \PrestaShopBundle\Controller\Api\OAuth2\AccessTokenController($a, new \Symfony\Bridge\PsrHttpMessage\Factory\PsrHttpFactory($b, $b, $b, $b), new \Symfony\Bridge\PsrHttpMessage\Factory\HttpFoundationFactory(), $b);
