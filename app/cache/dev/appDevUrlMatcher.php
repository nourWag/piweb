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

        if (0 === strpos($pathinfo, '/js/8bb605b')) {
            // _assetic_8bb605b
            if ($pathinfo === '/js/8bb605b.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '8bb605b',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_8bb605b',);
            }

            // _assetic_8bb605b_0
            if ($pathinfo === '/js/8bb605b_rating_1.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '8bb605b',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_8bb605b_0',);
            }

        }

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

        // myappvisiteur_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'myappvisiteur_homepage')), array (  '_controller' => 'Myapp\\visiteurBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/user/pages')) {
            // profile_user
            if (rtrim($pathinfo, '/') === '/user/pages') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'profile_user');
                }

                return array (  '_controller' => 'Myapp\\userBundle\\Controller\\AccueilController::affAction',  '_route' => 'profile_user',);
            }

            // error403
            if ($pathinfo === '/user/pages/error403') {
                return array (  '_controller' => 'Myapp\\userBundle\\Controller\\AccueilController::errorAction',  '_route' => 'error403',);
            }

            // catalogue
            if ($pathinfo === '/user/pages/catalogue') {
                return array (  '_controller' => 'Myapp\\userBundle\\Controller\\packetController::listAction',  '_route' => 'catalogue',);
            }

            // profile12
            if ($pathinfo === '/user/pages/profile') {
                return array (  '_controller' => 'Myapp\\userBundle\\Controller\\Profile2Controller::showAction',  '_route' => 'profile12',);
            }

            // edit12
            if ($pathinfo === '/user/pages/edit') {
                return array (  '_controller' => 'Myapp\\userBundle\\Controller\\Profile2Controller::editAction',  '_route' => 'edit12',);
            }

            // changePassword12
            if ($pathinfo === '/user/pages/changePassword') {
                return array (  '_controller' => 'Myapp\\userBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'changePassword12',);
            }

            // ajouter_Au_panier
            if ($pathinfo === '/user/pages/ajou') {
                return array (  '_controller' => 'Myapp\\userBundle\\Controller\\PanierController::ajouterAction',  '_route' => 'ajouter_Au_panier',);
            }

            // tunisia_supprimer_du panier
            if ($pathinfo === '/user/pages/supp') {
                return array (  '_controller' => 'Myapp\\userBundle\\Controller\\PanierController::supprimerAction',  '_route' => 'tunisia_supprimer_du panier',);
            }

            // afficher_panier
            if ($pathinfo === '/user/pages/panier') {
                return array (  '_controller' => 'Myapp\\userBundle\\Controller\\PanierController::affichageAction',  '_route' => 'afficher_panier',);
            }

            // liraisonf
            if ($pathinfo === '/user/pages/liste') {
                return array (  '_controller' => 'Myapp\\userBundle\\Controller\\LiraisonfController::indexAction',  '_route' => 'liraisonf',);
            }

            // liraisonf_show
            if (preg_match('#^/user/pages/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'liraisonf_show')), array (  '_controller' => 'Myapp\\userBundle\\Controller\\LiraisonfController::showAction',));
            }

            // liraisonf_new
            if ($pathinfo === '/user/pages/new') {
                return array (  '_controller' => 'Myapp\\userBundle\\Controller\\LiraisonfController::newAction',  '_route' => 'liraisonf_new',);
            }

            // liraisonf_create
            if ($pathinfo === '/user/pages/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_liraisonf_create;
                }

                return array (  '_controller' => 'Myapp\\userBundle\\Controller\\LiraisonfController::createAction',  '_route' => 'liraisonf_create',);
            }
            not_liraisonf_create:

            // liraisonf_edit
            if (preg_match('#^/user/pages/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'liraisonf_edit')), array (  '_controller' => 'Myapp\\userBundle\\Controller\\LiraisonfController::editAction',));
            }

            // liraisonf_update
            if (preg_match('#^/user/pages/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_liraisonf_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'liraisonf_update')), array (  '_controller' => 'Myapp\\userBundle\\Controller\\LiraisonfController::updateAction',));
            }
            not_liraisonf_update:

            // liraisonf_delete
            if (preg_match('#^/user/pages/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_liraisonf_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'liraisonf_delete')), array (  '_controller' => 'Myapp\\userBundle\\Controller\\LiraisonfController::deleteAction',));
            }
            not_liraisonf_delete:

            // liraisonf_recherche
            if ($pathinfo === '/user/pages/recherche') {
                return array (  '_controller' => 'Myapp\\userBundle\\Controller\\LiraisonfController::rechercheAction',  '_route' => 'liraisonf_recherche',);
            }

            // liraisonf_ajout
            if ($pathinfo === '/user/pages/ajout') {
                return array (  '_controller' => 'Myapp\\userBundle\\Controller\\LiraisonfController::ajoutAction',  '_route' => 'liraisonf_ajout',);
            }

        }

        // homme
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homme');
            }

            return array (  '_controller' => 'Myapp\\userBundle\\Controller\\AccueilController::indexAction',  '_route' => 'homme',);
        }

        // myapp_responsable_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'myapp_responsable_homepage')), array (  '_controller' => 'Myapp\\ResponsableBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/respensable/pages')) {
            // respensablePages
            if (rtrim($pathinfo, '/') === '/respensable/pages') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'respensablePages');
                }

                return array (  '_controller' => 'Myapp\\ResponsableBundle\\Controller\\respController::affAction',  '_route' => 'respensablePages',);
            }

            // profile1
            if ($pathinfo === '/respensable/pages/profile') {
                return array (  '_controller' => 'Myapp\\ResponsableBundle\\Controller\\Profile2Controller::showAction',  '_route' => 'profile1',);
            }

            // edit1
            if ($pathinfo === '/respensable/pages/edit') {
                return array (  '_controller' => 'Myapp\\ResponsableBundle\\Controller\\Profile2Controller::editAction',  '_route' => 'edit1',);
            }

            // changePassword1
            if ($pathinfo === '/respensable/pages/changePassword') {
                return array (  '_controller' => 'Myapp\\ResponsableBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'changePassword1',);
            }

            // respensablePagespack
            if ($pathinfo === '/respensable/pages/aff') {
                return array (  '_controller' => 'Myapp\\ResponsableBundle\\Controller\\ImageController::uploadAction',  '_route' => 'respensablePagespack',);
            }

            // pi2tst_homepage2
            if ($pathinfo === '/respensable/pages/boutique') {
                return array (  '_controller' => 'Myapp\\ResponsableBundle\\Controller\\AccueilController::BoutiqueAction',  '_route' => 'pi2tst_homepage2',);
            }

            // pi2tst_home
            if ($pathinfo === '/respensable/pages/ajout') {
                return array (  '_controller' => 'Myapp\\ResponsableBundle\\Controller\\boutiqueController::ajout2Action',  '_route' => 'pi2tst_home',);
            }

            // pi2tst_homepage5
            if ($pathinfo === '/respensable/pages/listboutique') {
                return array (  '_controller' => 'Myapp\\ResponsableBundle\\Controller\\boutiqueController::listAction',  '_route' => 'pi2tst_homepage5',);
            }

            // pi2tst_homepage6
            if ($pathinfo === '/respensable/pages/find') {
                return array (  '_controller' => 'Myapp\\ResponsableBundle\\Controller\\boutiqueController::rechercheAction',  '_route' => 'pi2tst_homepage6',);
            }

            // delete
            if (0 === strpos($pathinfo, '/respensable/pages/del') && preg_match('#^/respensable/pages/del/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete')), array (  '_controller' => 'Myapp\\ResponsableBundle\\Controller\\boutiqueController::supprimerAction',));
            }

            // update_boutique
            if (0 === strpos($pathinfo, '/respensable/pages/maj') && preg_match('#^/respensable/pages/maj/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'update_boutique')), array (  '_controller' => 'Myapp\\ResponsableBundle\\Controller\\boutiqueController::modifierAction',));
            }

            // my_app_mail_succ
            if ($pathinfo === '/respensable/pages/succ') {
                return array (  '_controller' => 'Myapp\\ResponsableBundle\\Controller\\MailController::indexAction',  '_route' => 'my_app_mail_succ',);
            }

            // my_app_mail_form
            if ($pathinfo === '/respensable/pages/mail') {
                return array (  '_controller' => 'Myapp\\ResponsableBundle\\Controller\\MailController::newAction',  '_route' => 'my_app_mail_form',);
            }

            // my_app_mail_sendpage
            if ($pathinfo === '/respensable/pages/sendmail') {
                return array (  '_controller' => 'Myapp\\ResponsableBundle\\Controller\\MailController::sendMailAction',  '_route' => 'my_app_mail_sendpage',);
            }

            // my_app_esprit_aff_article
            if (0 === strpos($pathinfo, '/respensable/pages/aff') && preg_match('#^/respensable/pages/aff/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'my_app_esprit_aff_article')), array (  '_controller' => 'Myapp\\ResponsableBundle\\Controller\\ImgController::afficheAction',));
            }

        }

        // my_app_esprit_upload
        if (0 === strpos($pathinfo, '/upload') && preg_match('#^/upload/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'my_app_esprit_upload')), array (  '_controller' => 'Myapp\\ResponsableBundle\\Controller\\Image1Controller::uploadAction',));
        }

        // my_app_esprit_list
        if ($pathinfo === '/list') {
            return array (  '_controller' => 'Myapp\\ResponsableBundle\\Controller\\Image1Controller::listAction',  '_route' => 'my_app_esprit_list',);
        }

        // my_app_esprit_aff_img
        if (0 === strpos($pathinfo, '/aff') && preg_match('#^/aff/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'my_app_esprit_aff_img')), array (  '_controller' => 'Myapp\\ResponsableBundle\\Controller\\Image1Controller::photo2Action',));
        }

        // my_image_route
        if (0 === strpos($pathinfo, '/images') && preg_match('#^/images/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'my_image_route')), array (  '_controller' => 'Myapp\\ResponsableBundle\\Controller\\Image1Controller::photoAction',));
        }

        // pi2tst_homepage1
        if ($pathinfo === '/homme') {
            return array (  '_controller' => 'Myapp\\ResponsableBundle\\Controller\\AccueillController::indexAction',  '_route' => 'pi2tst_homepage1',);
        }

        // registerAccount
        if ($pathinfo === '/register') {
            return array (  '_controller' => 'Myapp\\ResponsableBundle\\Controller\\AccueillController::registerAction',  '_route' => 'registerAccount',);
        }

        // afficher_produits
        if ($pathinfo === '/afficherP') {
            return array (  '_controller' => 'Myapp\\ResponsableBundle\\Controller\\ProduitController::afficherPAction',  '_route' => 'afficher_produits',);
        }

        // paginationpa
        if ($pathinfo === '/hello') {
            return array (  '_controller' => 'Myapp\\ResponsableBundle\\Controller\\ProduitController::afficherP2Action',  '_route' => 'paginationpa',);
        }

        // afficherdetailleProduit
        if (0 === strpos($pathinfo, '/produit') && preg_match('#^/produit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'afficherdetailleProduit')), array (  '_controller' => 'Myapp\\ResponsableBundle\\Controller\\ProduitController::afficherPDetailleAction',));
        }

        // my_image_route2
        if (0 === strpos($pathinfo, '/image') && preg_match('#^/image/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'my_image_route2')), array (  '_controller' => 'Myapp\\ResponsableBundle\\Controller\\Image1Controller::photo2Action',));
        }

        // modifierProduit
        if (0 === strpos($pathinfo, '/modifierProduit') && preg_match('#^/modifierProduit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'modifierProduit')), array (  '_controller' => 'Myapp\\ResponsableBundle\\Controller\\ProduitController::modifierProduitAction',));
        }

        // uploadAjout
        if (0 === strpos($pathinfo, '/uploadAjout') && preg_match('#^/uploadAjout/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'uploadAjout')), array (  '_controller' => 'Myapp\\ResponsableBundle\\Controller\\Image1Controller::uploadAjoutAction',));
        }

        // SupprimerProduit
        if (0 === strpos($pathinfo, '/SupprimerProduit') && preg_match('#^/SupprimerProduit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'SupprimerProduit')), array (  '_controller' => 'Myapp\\ResponsableBundle\\Controller\\ProduitController::SupprimerProduitAction',));
        }

        if (0 === strpos($pathinfo, '/AjouterProduit')) {
            // AjouterProduit
            if ($pathinfo === '/AjouterProduit') {
                return array (  '_controller' => 'Myapp\\ResponsableBundle\\Controller\\ProduitController::AjouterProduitAction',  '_route' => 'AjouterProduit',);
            }

            // uploadAjoutProduit
            if ($pathinfo === '/AjouterProduitImage') {
                return array (  '_controller' => 'Myapp\\ResponsableBundle\\Controller\\Image1Controller::uploadAjoutProduitAction',  '_route' => 'uploadAjoutProduit',);
            }

        }

        if (0 === strpos($pathinfo, '/order_produit')) {
            // order_produit_prix_achat
            if ($pathinfo === '/order_produit') {
                return array (  '_controller' => 'Myapp\\ResponsableBundle\\Controller\\ProduitController::order_produitAction',  '_route' => 'order_produit_prix_achat',);
            }

            // order_produit_prixvendre
            if ($pathinfo === '/order_produit_prixvendre') {
                return array (  '_controller' => 'Myapp\\ResponsableBundle\\Controller\\ProduitController::order_produit_prixvendreAction',  '_route' => 'order_produit_prixvendre',);
            }

        }

        // fixer_nmb_produits
        if (0 === strpos($pathinfo, '/fixer_nmb_produits') && preg_match('#^/fixer_nmb_produits/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fixer_nmb_produits')), array (  '_controller' => 'Myapp\\ResponsableBundle\\Controller\\ProduitController::fixer_nmb_produitsAction',));
        }

        // produit_rechercher
        if ($pathinfo === '/produit_rechercher') {
            return array (  '_controller' => 'Myapp\\ResponsableBundle\\Controller\\ProduitController::produit_rechercherAction',  '_route' => 'produit_rechercher',);
        }

        // afficherPClient
        if ($pathinfo === '/afficherPClient') {
            return array (  '_controller' => 'Myapp\\ResponsableBundle\\Controller\\ProduitController::afficherPClientAction',  '_route' => 'afficherPClient',);
        }

        // myappadmin_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'myappadmin_homepage')), array (  '_controller' => 'Myapp\\adminBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/admin/pages')) {
            // adminPages
            if (rtrim($pathinfo, '/') === '/admin/pages') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'adminPages');
                }

                return array (  '_controller' => 'Myapp\\adminBundle\\Controller\\PagesAdminController::indexAction',  '_route' => 'adminPages',);
            }

            // adminPages_show
            if (preg_match('#^/admin/pages/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminPages_show')), array (  '_controller' => 'Myapp\\adminBundle\\Controller\\PagesAdminController::showAction',));
            }

            // adminPages_new
            if ($pathinfo === '/admin/pages/new') {
                return array (  '_controller' => 'Myapp\\adminBundle\\Controller\\PagesAdminController::newAction',  '_route' => 'adminPages_new',);
            }

            // adminPages_create
            if ($pathinfo === '/admin/pages/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_adminPages_create;
                }

                return array (  '_controller' => 'Myapp\\adminBundle\\Controller\\PagesAdminController::createAction',  '_route' => 'adminPages_create',);
            }
            not_adminPages_create:

            // adminPages_edit
            if (preg_match('#^/admin/pages/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminPages_edit')), array (  '_controller' => 'Myapp\\adminBundle\\Controller\\PagesAdminController::editAction',));
            }

            // adminPages_update
            if (preg_match('#^/admin/pages/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_adminPages_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminPages_update')), array (  '_controller' => 'Myapp\\adminBundle\\Controller\\PagesAdminController::updateAction',));
            }
            not_adminPages_update:

            // adminPages_delete
            if (preg_match('#^/admin/pages/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_adminPages_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminPages_delete')), array (  '_controller' => 'Myapp\\adminBundle\\Controller\\PagesAdminController::deleteAction',));
            }
            not_adminPages_delete:

            // affich
            if ($pathinfo === '/admin/pages/affichage') {
                return array (  '_controller' => 'Myapp\\adminBundle\\Controller\\clientController::listAction',  '_route' => 'affich',);
            }

            // aaa
            if (0 === strpos($pathinfo, '/admin/pages/supprimer') && preg_match('#^/admin/pages/supprimer/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'aaa')), array (  '_controller' => 'Myapp\\adminBundle\\Controller\\clientController::supprimerAction',));
            }

            // rech
            if ($pathinfo === '/admin/pages/rech') {
                return array (  '_controller' => 'Myapp\\adminBundle\\Controller\\clientController::RechercheAction',  '_route' => 'rech',);
            }

            // profile
            if ($pathinfo === '/admin/pages/profile') {
                return array (  '_controller' => 'Myapp\\adminBundle\\Controller\\Profile2Controller::showAction',  '_route' => 'profile',);
            }

            // edit
            if ($pathinfo === '/admin/pages/edit') {
                return array (  '_controller' => 'Myapp\\adminBundle\\Controller\\Profile2Controller::editAction',  '_route' => 'edit',);
            }

            // changePassword
            if ($pathinfo === '/admin/pages/changePassword') {
                return array (  '_controller' => 'Myapp\\adminBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'changePassword',);
            }

            // logout
            if ($pathinfo === '/admin/pages/logout') {
                return array (  '_controller' => 'Myapp\\adminBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'logout',);
            }

            // upload_pack
            if ($pathinfo === '/admin/pages/upload') {
                return array (  '_controller' => 'MyappadminBundle:Image:upload',  '_route' => 'upload_pack',);
            }

            // graphe_homepage
            if (0 === strpos($pathinfo, '/admin/pages/hello') && preg_match('#^/admin/pages/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'graphe_homepage')), array (  '_controller' => 'Myapp\\adminBundle\\Controller\\DefaultController::indexAction',));
            }

            // _grapheChartLine
            if ($pathinfo === '/admin/pages/ChartLine') {
                return array (  '_controller' => 'Myapp\\adminBundle\\Controller\\GrapheController::ChartLineAction',  '_route' => '_grapheChartLine',);
            }

            // _grapheHistogramme
            if ($pathinfo === '/admin/pages/histogramme') {
                return array (  '_controller' => 'Myapp\\adminBundle\\Controller\\GrapheController::chartHistogrammeAction',  '_route' => '_grapheHistogramme',);
            }

            // _graphePie
            if ($pathinfo === '/admin/pages/pie') {
                return array (  '_controller' => 'Myapp\\adminBundle\\Controller\\GrapheController::PieAction',  '_route' => '_graphePie',);
            }

        }

        // page
        if (0 === strpos($pathinfo, '/page') && preg_match('#^/page/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'page')), array (  '_controller' => 'MyappadminBundle:Pages:page',));
        }

        // piwebapp_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'piwebapp_homepage')), array (  '_controller' => 'piweb\\appBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
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

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
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

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
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

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _demo_security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_demo_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
