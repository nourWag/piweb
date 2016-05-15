<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // myappvisiteur_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'myappvisiteur_homepage')), array (  '_controller' => 'Myapp\\visiteurBundle\\Controller\\DefaultController::indexAction',));
        }

        // visiter_mall
        if ($pathinfo === '/visite') {
            return array (  '_controller' => 'Myapp\\visiteurBundle\\Controller\\VisiteController::visiterAction',  '_route' => 'visiter_mall',);
        }

        if (0 === strpos($pathinfo, '/user')) {
            // profile_user
            if (rtrim($pathinfo, '/') === '/user') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'profile_user');
                }

                return array (  '_controller' => 'Myapp\\userBundle\\Controller\\AccueilController::affAction',  '_route' => 'profile_user',);
            }

            // catalogue
            if ($pathinfo === '/user/catalogue') {
                return array (  '_controller' => 'Myapp\\userBundle\\Controller\\packetController::listAction',  '_route' => 'catalogue',);
            }

            // profile12
            if ($pathinfo === '/user/profile') {
                return array (  '_controller' => 'Myapp\\userBundle\\Controller\\Profile2Controller::showAction',  '_route' => 'profile12',);
            }

            // edit12
            if ($pathinfo === '/user/edit') {
                return array (  '_controller' => 'Myapp\\userBundle\\Controller\\Profile2Controller::editAction',  '_route' => 'edit12',);
            }

            // changePassword12
            if ($pathinfo === '/user/changePassword') {
                return array (  '_controller' => 'Myapp\\userBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'changePassword12',);
            }

            // ajouter_Au_panier
            if ($pathinfo === '/user/ajou') {
                return array (  '_controller' => 'Myapp\\userBundle\\Controller\\PanierController::ajouterAction',  '_route' => 'ajouter_Au_panier',);
            }

            // tunisia_supprimer_du panier
            if ($pathinfo === '/user/supp') {
                return array (  '_controller' => 'Myapp\\userBundle\\Controller\\PanierController::supprimerAction',  '_route' => 'tunisia_supprimer_du panier',);
            }

            // afficher_panier
            if ($pathinfo === '/user/panier') {
                return array (  '_controller' => 'Myapp\\userBundle\\Controller\\PanierController::affichageAction',  '_route' => 'afficher_panier',);
            }

            // afficher_facture
            if ($pathinfo === '/user/Facture') {
                return array (  '_controller' => 'Myapp\\userBundle\\Controller\\FactureController::ajouterAction',  '_route' => 'afficher_facture',);
            }

            // liraisonf_new
            if ($pathinfo === '/user/new') {
                return array (  '_controller' => 'Myapp\\userBundle\\Controller\\LiraisonfController::newAction',  '_route' => 'liraisonf_new',);
            }

            // liraisonf_create
            if ($pathinfo === '/user/create') {
                return array (  '_controller' => 'Myapp\\userBundle\\Controller\\LiraisonfController::createAction',  '_route' => 'liraisonf_create',);
            }

            // liraisonf_edit
            if (preg_match('#^/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'liraisonf_edit')), array (  '_controller' => 'Myapp\\userBundle\\Controller\\LiraisonfController::editAction',));
            }

            // liraisonf_update
            if (preg_match('#^/user/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_liraisonf_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'liraisonf_update')), array (  '_controller' => 'Myapp\\userBundle\\Controller\\LiraisonfController::updateAction',));
            }
            not_liraisonf_update:

            // liraisonf_recherche
            if ($pathinfo === '/user/recherche') {
                return array (  '_controller' => 'Myapp\\userBundle\\Controller\\LiraisonfController::rechercheAction',  '_route' => 'liraisonf_recherche',);
            }

            // liraisonf_ajout
            if ($pathinfo === '/user/ajout') {
                return array (  '_controller' => 'Myapp\\userBundle\\Controller\\LiraisonfController::ajoutAction',  '_route' => 'liraisonf_ajout',);
            }

        }

        // homme
        if ($pathinfo === '/a') {
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

                return array (  '_controller' => 'Myapp\\ResponsableBundle\\Controller\\boutiqueController::productListAction',  '_route' => 'respensablePages',);
            }

            // profile1
            if ($pathinfo === '/respensable/pages/profile') {
                return array (  '_controller' => 'Myapp\\ResponsableBundle\\Controller\\Profile2Controller::showAction',  '_route' => 'profile1',);
            }

            // changePassword1
            if ($pathinfo === '/respensable/pages/changePassword') {
                return array (  '_controller' => 'Myapp\\ResponsableBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'changePassword1',);
            }

            // respensablePagespack
            if ($pathinfo === '/respensable/pages/aff') {
                return array (  '_controller' => 'Myapp\\ResponsableBundle\\Controller\\ImageController::uploadAction',  '_route' => 'respensablePagespack',);
            }

            if (0 === strpos($pathinfo, '/respensable/pages/pack')) {
                // my_app_esprit_aff_article
                if (preg_match('#^/respensable/pages/pack/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'my_app_esprit_aff_article')), array (  '_controller' => 'Myapp\\ResponsableBundle\\Controller\\ImageController::afficheAction',));
                }

                // my_app_esprit_aff_article1
                if ($pathinfo === '/respensable/pages/pack') {
                    return array (  '_controller' => 'Myapp\\ResponsableBundle\\Controller\\ImageController::listAction',  '_route' => 'my_app_esprit_aff_article1',);
                }

            }

            // pi2tst_homepage2
            if ($pathinfo === '/respensable/pages/boutique') {
                return array (  '_controller' => 'Myapp\\ResponsableBundle\\Controller\\AccueilController::BoutiqueAction',  '_route' => 'pi2tst_homepage2',);
            }

            // path_ajout
            if ($pathinfo === '/respensable/pages/ajout') {
                return array (  '_controller' => 'Myapp\\ResponsableBundle\\Controller\\boutiqueController::ajout2Action',  '_route' => 'path_ajout',);
            }

            // path_list
            if ($pathinfo === '/respensable/pages/listboutique') {
                return array (  '_controller' => 'Myapp\\ResponsableBundle\\Controller\\boutiqueController::listAction',  '_route' => 'path_list',);
            }

            // path_list2
            if ($pathinfo === '/respensable/pages/comm') {
                return array (  '_controller' => 'Myapp\\ResponsableBundle\\Controller\\boutiqueController::list2Action',  '_route' => 'path_list2',);
            }

            // path_recherche
            if ($pathinfo === '/respensable/pages/find') {
                return array (  '_controller' => 'Myapp\\ResponsableBundle\\Controller\\boutiqueController::rechercheAction',  '_route' => 'path_recherche',);
            }

            // path_delete
            if (0 === strpos($pathinfo, '/respensable/pages/del') && preg_match('#^/respensable/pages/del/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'path_delete')), array (  '_controller' => 'Myapp\\ResponsableBundle\\Controller\\boutiqueController::supprimerAction',));
            }

            // path_update
            if (0 === strpos($pathinfo, '/respensable/pages/maj') && preg_match('#^/respensable/pages/maj/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'path_update')), array (  '_controller' => 'Myapp\\ResponsableBundle\\Controller\\boutiqueController::modifierAction',));
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

            // my_app_esprit_
            if ($pathinfo === '/respensable/pages/uploadd') {
                return array (  '_controller' => 'Myapp\\ResponsableBundle\\Controller\\ImgController::uploadAction',  '_route' => 'my_app_esprit_',);
            }

            // my_app_e
            if ($pathinfo === '/respensable/pages/list') {
                return array (  '_controller' => 'Myapp\\ResponsableBundle\\Controller\\ImgController::listAction',  '_route' => 'my_app_e',);
            }

            // my_image_ro
            if (0 === strpos($pathinfo, '/respensable/pages/images') && preg_match('#^/respensable/pages/images/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'my_image_ro')), array (  '_controller' => 'Myapp\\ResponsableBundle\\Controller\\ImgController::photoAction',));
            }

            // afficherProduitResp
            if (0 === strpos($pathinfo, '/respensable/pages/afficherProduitResp') && preg_match('#^/respensable/pages/afficherProduitResp/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'afficherProduitResp')), array (  '_controller' => 'Myapp\\ResponsableBundle\\Controller\\ProduitController::afficherProduitRespAction',));
            }

            // SupprimerProduitRes
            if (0 === strpos($pathinfo, '/respensable/pages/SupprimerProduitRes') && preg_match('#^/respensable/pages/SupprimerProduitRes/(?P<id>[^/]++)/(?P<idb>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'SupprimerProduitRes')), array (  '_controller' => 'Myapp\\ResponsableBundle\\Controller\\ProduitController::SupprimerProduitResAction',));
            }

            // modifierProduitRes
            if (0 === strpos($pathinfo, '/respensable/pages/modifierProduitRes') && preg_match('#^/respensable/pages/modifierProduitRes/(?P<id>[^/]++)/(?P<idb>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'modifierProduitRes')), array (  '_controller' => 'Myapp\\ResponsableBundle\\Controller\\ProduitController::modifierProduitResAction',));
            }

            // SupprimerImageProduitRes
            if (0 === strpos($pathinfo, '/respensable/pages/SupprimerImageProduitRes') && preg_match('#^/respensable/pages/SupprimerImageProduitRes/(?P<id>[^/]++)/(?P<idp>[^/]++)/(?P<idb>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'SupprimerImageProduitRes')), array (  '_controller' => 'Myapp\\ResponsableBundle\\Controller\\ProduitController::SupprimerImageProduitResAction',));
            }

            // ajouterProduitRes
            if (0 === strpos($pathinfo, '/respensable/pages/ajouterProduitRes') && preg_match('#^/respensable/pages/ajouterProduitRes/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ajouterProduitRes')), array (  '_controller' => 'Myapp\\ResponsableBundle\\Controller\\ProduitController::ajouterProduitResAction',));
            }

            // testRes
            if (rtrim($pathinfo, '/') === '/respensable/pages/testRes') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'testRes');
                }

                return array (  '_controller' => 'Myapp\\ResponsableBundle\\Controller\\ProduitController::testResAction',  '_route' => 'testRes',);
            }

            // Chart
            if ($pathinfo === '/respensable/pages/Chart') {
                return array (  '_controller' => 'Myapp\\ResponsableBundle\\Controller\\GrapheController::chartLineAction',  '_route' => 'Chart',);
            }

            // Ajouter_CarteFidelite
            if ($pathinfo === '/respensable/pages/ajoutercarte') {
                return array (  '_controller' => 'Myapp\\ResponsableBundle\\Controller\\CarteFideliteController::AjouterCarteFideliteAction',  '_route' => 'Ajouter_CarteFidelite',);
            }

            // Modifier_CarteFidelite
            if (0 === strpos($pathinfo, '/respensable/pages/modifiercarte') && preg_match('#^/respensable/pages/modifiercarte/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'Modifier_CarteFidelite')), array (  '_controller' => 'Myapp\\ResponsableBundle\\Controller\\CarteFideliteController::ModifierCarteFideliteAction',));
            }

            // Supprimer_CarteFidelite
            if (0 === strpos($pathinfo, '/respensable/pages/supprimercarte') && preg_match('#^/respensable/pages/supprimercarte/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'Supprimer_CarteFidelite')), array (  '_controller' => 'Myapp\\ResponsableBundle\\Controller\\CarteFideliteController::SupprimerCarteFideliteAction',));
            }

            // Valider_CarteFidelite
            if ($pathinfo === '/respensable/pages/validercarte') {
                return array (  '_controller' => 'Myapp\\ResponsableBundle\\Controller\\CarteFideliteController::ValiderCarteFideliteAction',  '_route' => 'Valider_CarteFidelite',);
            }

            // Afficher_CarteFidelite
            if ($pathinfo === '/respensable/pages/affichercarte') {
                return array (  '_controller' => 'Myapp\\ResponsableBundle\\Controller\\CarteFideliteController::AfficherCarteFideliteAction',  '_route' => 'Afficher_CarteFidelite',);
            }

            // Rechercher_CarteFidelite
            if ($pathinfo === '/respensable/pages/recherchercarte') {
                return array (  '_controller' => 'Myapp\\ResponsableBundle\\Controller\\CarteFideliteController::RechercherCarteFideliteAction',  '_route' => 'Rechercher_CarteFidelite',);
            }

            // liraisonf
            if ($pathinfo === '/respensable/pages/liste') {
                return array (  '_controller' => 'Myapp\\ResponsableBundle\\Controller\\LiraisonfController::indexAction',  '_route' => 'liraisonf',);
            }

            // liraisonf_delete12
            if (0 === strpos($pathinfo, '/respensable/pages/delete1') && preg_match('#^/respensable/pages/delete1/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'liraisonf_delete12')), array (  '_controller' => 'Myapp\\ResponsableBundle\\Controller\\LiraisonfController::deleteAction',));
            }

            // supprimerliv
            if (0 === strpos($pathinfo, '/respensable/pages/supprimerli') && preg_match('#^/respensable/pages/supprimerli/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'supprimerliv')), array (  '_controller' => 'Myapp\\ResponsableBundle\\Controller\\LiraisonfController::supprimerAction',));
            }

            // liraisonf_showliv
            if (preg_match('#^/respensable/pages/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'liraisonf_showliv')), array (  '_controller' => 'Myapp\\ResponsableBundle\\Controller\\LiraisonfController::showAction',));
            }

            // graphe_homepageresp
            if (0 === strpos($pathinfo, '/respensable/pages/hello') && preg_match('#^/respensable/pages/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'graphe_homepageresp')), array (  '_controller' => 'Myapp\\ResponsableBundle\\Controller\\DefaultController::indexAction',));
            }

            // _grapheChartLineresp
            if ($pathinfo === '/respensable/pages/ChartLine') {
                return array (  '_controller' => 'Myapp\\ResponsableBundle\\Controller\\GrapheController::ChartLineAction',  '_route' => '_grapheChartLineresp',);
            }

            // _grapheHistogrammeresp
            if ($pathinfo === '/respensable/pages/histogramme') {
                return array (  '_controller' => 'Myapp\\ResponsableBundle\\Controller\\GrapheController::chartHistogrammeAction',  '_route' => '_grapheHistogrammeresp',);
            }

            // _graphePieresp
            if ($pathinfo === '/respensable/pages/pie') {
                return array (  '_controller' => 'Myapp\\ResponsableBundle\\Controller\\GrapheController::PieAction',  '_route' => '_graphePieresp',);
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

        // afficherdetailleProduitNe
        if (0 === strpos($pathinfo, '/produit') && preg_match('#^/produit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'afficherdetailleProduitNe')), array (  '_controller' => 'Myapp\\ResponsableBundle\\Controller\\ProduitController::afficherPDetailleAction',));
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

        if (0 === strpos($pathinfo, '/a')) {
            // afficherPClient
            if ($pathinfo === '/afficherPClient') {
                return array (  '_controller' => 'Myapp\\ResponsableBundle\\Controller\\ProduitController::afficherPClientAction',  '_route' => 'afficherPClient',);
            }

            if (0 === strpos($pathinfo, '/api/threads')) {
                // fos_comment_new_threads
                if (0 === strpos($pathinfo, '/api/threads/new') && preg_match('#^/api/threads/new(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_comment_new_threads;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_new_threads')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::newThreadsAction',  '_format' => 'html',));
                }
                not_fos_comment_new_threads:

                // fos_comment_edit_thread_commentable
                if (preg_match('#^/api/threads/(?P<id>[^/]++)/commentable/edit(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_comment_edit_thread_commentable;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_edit_thread_commentable')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::editThreadCommentableAction',  '_format' => 'html',));
                }
                not_fos_comment_edit_thread_commentable:

                // fos_comment_new_thread_comments
                if (preg_match('#^/api/threads/(?P<id>[^/]++)/comments/new(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_comment_new_thread_comments;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_new_thread_comments')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::newThreadCommentsAction',  '_format' => 'html',));
                }
                not_fos_comment_new_thread_comments:

                // fos_comment_remove_thread_comment
                if (preg_match('#^/api/threads/(?P<id>[^/]++)/comments/(?P<commentId>[^/]++)/remove(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_comment_remove_thread_comment;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_remove_thread_comment')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::removeThreadCommentAction',  '_format' => 'html',));
                }
                not_fos_comment_remove_thread_comment:

                // fos_comment_edit_thread_comment
                if (preg_match('#^/api/threads/(?P<id>[^/]++)/comments/(?P<commentId>[^/]++)/edit(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_comment_edit_thread_comment;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_edit_thread_comment')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::editThreadCommentAction',  '_format' => 'html',));
                }
                not_fos_comment_edit_thread_comment:

                // fos_comment_new_thread_comment_votes
                if (preg_match('#^/api/threads/(?P<id>[^/]++)/comments/(?P<commentId>[^/]++)/votes/new(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_comment_new_thread_comment_votes;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_new_thread_comment_votes')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::newThreadCommentVotesAction',  '_format' => 'html',));
                }
                not_fos_comment_new_thread_comment_votes:

                // fos_comment_get_thread
                if (preg_match('#^/api/threads/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_comment_get_thread;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_get_thread')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::getThreadAction',  '_format' => 'html',));
                }
                not_fos_comment_get_thread:

                // fos_comment_get_threads
                if (preg_match('#^/api/threads(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_comment_get_threads;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_get_threads')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::getThreadsActions',  '_format' => 'html',));
                }
                not_fos_comment_get_threads:

                // fos_comment_post_threads
                if (preg_match('#^/api/threads(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_comment_post_threads;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_post_threads')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::postThreadsAction',  '_format' => 'html',));
                }
                not_fos_comment_post_threads:

                // fos_comment_patch_thread_commentable
                if (preg_match('#^/api/threads/(?P<id>[^/]++)/commentable(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PATCH') {
                        $allow[] = 'PATCH';
                        goto not_fos_comment_patch_thread_commentable;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_patch_thread_commentable')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::patchThreadCommentableAction',  '_format' => 'html',));
                }
                not_fos_comment_patch_thread_commentable:

                // fos_comment_get_thread_comment
                if (preg_match('#^/api/threads/(?P<id>[^/]++)/comments/(?P<commentId>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_comment_get_thread_comment;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_get_thread_comment')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::getThreadCommentAction',  '_format' => 'html',));
                }
                not_fos_comment_get_thread_comment:

                // fos_comment_patch_thread_comment_state
                if (preg_match('#^/api/threads/(?P<id>[^/]++)/comments/(?P<commentId>[^/]++)/state(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PATCH') {
                        $allow[] = 'PATCH';
                        goto not_fos_comment_patch_thread_comment_state;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_patch_thread_comment_state')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::patchThreadCommentStateAction',  '_format' => 'html',));
                }
                not_fos_comment_patch_thread_comment_state:

                // fos_comment_put_thread_comments
                if (preg_match('#^/api/threads/(?P<id>[^/]++)/comments/(?P<commentId>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_fos_comment_put_thread_comments;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_put_thread_comments')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::putThreadCommentsAction',  '_format' => 'html',));
                }
                not_fos_comment_put_thread_comments:

                // fos_comment_get_thread_comments
                if (preg_match('#^/api/threads/(?P<id>[^/]++)/comments(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_comment_get_thread_comments;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_get_thread_comments')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::getThreadCommentsAction',  '_format' => 'html',));
                }
                not_fos_comment_get_thread_comments:

                // fos_comment_post_thread_comments
                if (preg_match('#^/api/threads/(?P<id>[^/]++)/comments(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_comment_post_thread_comments;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_post_thread_comments')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::postThreadCommentsAction',  '_format' => 'html',));
                }
                not_fos_comment_post_thread_comments:

                // fos_comment_get_thread_comment_votes
                if (preg_match('#^/api/threads/(?P<id>[^/]++)/comments/(?P<commentId>[^/]++)/votes(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_comment_get_thread_comment_votes;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_get_thread_comment_votes')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::getThreadCommentVotesAction',  '_format' => 'html',));
                }
                not_fos_comment_get_thread_comment_votes:

                // fos_comment_post_thread_comment_votes
                if (preg_match('#^/api/threads/(?P<id>[^/]++)/comments/(?P<commentId>[^/]++)/votes(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_comment_post_thread_comment_votes;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_post_thread_comment_votes')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::postThreadCommentVotesAction',  '_format' => 'html',));
                }
                not_fos_comment_post_thread_comment_votes:

            }

        }

        if (0 === strpos($pathinfo, '/cat')) {
            // path_categorie1
            if ($pathinfo === '/cat') {
                return array (  '_controller' => 'Myapp\\ResponsableBundle\\Controller\\boutiqueController::list_categorie1Action',  '_route' => 'path_categorie1',);
            }

            // path_categorie2
            if ($pathinfo === '/cat2') {
                return array (  '_controller' => 'Myapp\\ResponsableBundle\\Controller\\boutiqueController::list_categorie2Action',  '_route' => 'path_categorie2',);
            }

            // path_categorie4
            if ($pathinfo === '/cat4') {
                return array (  '_controller' => 'Myapp\\ResponsableBundle\\Controller\\boutiqueController::list_categorie4Action',  '_route' => 'path_categorie4',);
            }

            // path_categorie3
            if (0 === strpos($pathinfo, '/cat3') && preg_match('#^/cat3/(?P<nom>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'path_categorie3')), array (  '_controller' => 'Myapp\\ResponsableBundle\\Controller\\boutiqueController::ListCategorie3Action',));
            }

        }

        // path_promotion
        if ($pathinfo === '/promotion') {
            return array (  '_controller' => 'Myapp\\ResponsableBundle\\Controller\\boutiqueController::ListPromotionAction',  '_route' => 'path_promotion',);
        }

        // pi_homepage1
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'pi_homepage1');
            }

            return array (  '_controller' => 'Myapp\\ResponsableBundle\\Controller\\AccueillController::indexAction',  '_route' => 'pi_homepage1',);
        }

        // ajouterImage
        if ($pathinfo === '/imageAjoutF') {
            return array (  '_controller' => 'Myapp\\ResponsableBundle\\Controller\\ProduitController::imageAjoutFAction',  '_route' => 'ajouterImage',);
        }

        // afficherImage
        if ($pathinfo === '/afficherImage') {
            return array (  '_controller' => 'Myapp\\ResponsableBundle\\Controller\\ProduitController::afficherImagePAction',  '_route' => 'afficherImage',);
        }

        // ajouterImageProduit
        if ($pathinfo === '/imageAjoutFP') {
            return array (  '_controller' => 'Myapp\\ResponsableBundle\\Controller\\ProduitController::imageAjoutProduitFAction',  '_route' => 'ajouterImageProduit',);
        }

        if (0 === strpos($pathinfo, '/afG')) {
            // afficherImageProduit
            if (0 === strpos($pathinfo, '/afGI') && preg_match('#^/afGI/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'afficherImageProduit')), array (  '_controller' => 'Myapp\\ResponsableBundle\\Controller\\ProduitController::afficherImageProduitAction',));
            }

            // afficherG
            if (preg_match('#^/afG/(?P<id>[^/]++)/(?P<catB>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'afficherG')), array (  '_controller' => 'Myapp\\ResponsableBundle\\Controller\\ProduitController::affichergAction',));
            }

            // afficherGC
            if (0 === strpos($pathinfo, '/afGF') && preg_match('#^/afGF/(?P<id>[^/]++)/(?P<cat>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'afficherGC')), array (  '_controller' => 'Myapp\\ResponsableBundle\\Controller\\ProduitController::affichergFAction',));
            }

        }

        // afficherdetailleProduit2
        if (0 === strpos($pathinfo, '/produit') && preg_match('#^/produit/(?P<id>[^/]++)/(?P<bout>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'afficherdetailleProduit2')), array (  '_controller' => 'Myapp\\ResponsableBundle\\Controller\\ProduitController::afficherPDetailleAction',));
        }

        if (0 === strpos($pathinfo, '/afficher_produit_')) {
            // afficher_produit_solde
            if ($pathinfo === '/afficher_produit_solde') {
                return array (  '_controller' => 'Myapp\\ResponsableBundle\\Controller\\ProduitController::afficher_produit_soldeAction',  '_route' => 'afficher_produit_solde',);
            }

            // afficher_produit_evenement
            if ($pathinfo === '/afficher_produit_evenement') {
                return array (  '_controller' => 'Myapp\\ResponsableBundle\\Controller\\ProduitController::afficher_produit_evenementAction',  '_route' => 'afficher_produit_evenement',);
            }

            // afficher_produit_new
            if ($pathinfo === '/afficher_produit_new') {
                return array (  '_controller' => 'Myapp\\ResponsableBundle\\Controller\\ProduitController::afficher_produit_newAction',  '_route' => 'afficher_produit_new',);
            }

        }

        // myappadmin_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'myappadmin_homepage')), array (  '_controller' => 'Myapp\\adminBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/admin')) {
            // adminPages
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'adminPages');
                }

                return array (  '_controller' => 'Myapp\\adminBundle\\Controller\\PagesAdminController::index1Action',  '_route' => 'adminPages',);
            }

            // admin_users_lock_page
            if (0 === strpos($pathinfo, '/admin/lock') && preg_match('#^/admin/lock/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_users_lock_page')), array (  '_controller' => 'Myapp\\adminBundle\\Controller\\clientController::lockAction',));
            }

            // adminPages_show
            if (preg_match('#^/admin/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminPages_show')), array (  '_controller' => 'Myapp\\adminBundle\\Controller\\PagesAdminController::showAction',));
            }

            // adminPages_new
            if ($pathinfo === '/admin/new') {
                return array (  '_controller' => 'Myapp\\adminBundle\\Controller\\PagesAdminController::newAction',  '_route' => 'adminPages_new',);
            }

            // adminPages_create
            if ($pathinfo === '/admin/create') {
                return array (  '_controller' => 'Myapp\\adminBundle\\Controller\\PagesAdminController::createAction',  '_route' => 'adminPages_create',);
            }

            // adminPages_edit
            if ($pathinfo === '/admin/edit') {
                return array (  '_controller' => 'Myapp\\adminBundle\\Controller\\PagesAdminController::editAction',  '_route' => 'adminPages_edit',);
            }

            // adminPages_update
            if (preg_match('#^/admin/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminPages_update')), array (  '_controller' => 'Myapp\\adminBundle\\Controller\\PagesAdminController::updateAction',));
            }

            // adminPages_delete
            if ($pathinfo === '/admin/1/delete') {
                return array (  '_controller' => 'Myapp\\adminBundle\\Controller\\PagesAdminController::deleteAction',  '_route' => 'adminPages_delete',);
            }

            // affich
            if ($pathinfo === '/admin/affichage') {
                return array (  '_controller' => 'Myapp\\adminBundle\\Controller\\clientController::listAction',  '_route' => 'affich',);
            }

            // aaa
            if (0 === strpos($pathinfo, '/admin/supprimer') && preg_match('#^/admin/supprimer/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'aaa')), array (  '_controller' => 'Myapp\\adminBundle\\Controller\\clientController::supprimerAction',));
            }

            // rech
            if ($pathinfo === '/admin/rech') {
                return array (  '_controller' => 'Myapp\\adminBundle\\Controller\\clientController::RechercheAction',  '_route' => 'rech',);
            }

            // profile
            if ($pathinfo === '/admin/profile') {
                return array (  '_controller' => 'Myapp\\adminBundle\\Controller\\Profile2Controller::showAction',  '_route' => 'profile',);
            }

            // edit1
            if ($pathinfo === '/admin/edit') {
                return array (  '_controller' => 'Myapp\\adminBundle\\Controller\\Profile2Controller::editAction',  '_route' => 'edit1',);
            }

            // logout
            if ($pathinfo === '/admin/logout') {
                return array (  '_controller' => 'Myapp\\adminBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'logout',);
            }

            // upload_pack
            if ($pathinfo === '/admin/upload') {
                return array (  '_controller' => 'Myapp\\adminBundle\\Controller\\ImageController::uploadAction',  '_route' => 'upload_pack',);
            }

            // graphe_homepage
            if (0 === strpos($pathinfo, '/admin/hello') && preg_match('#^/admin/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'graphe_homepage')), array (  '_controller' => 'Myapp\\adminBundle\\Controller\\DefaultController::indexAction',));
            }

            // _grapheChartLine
            if ($pathinfo === '/admin/ChartLine') {
                return array (  '_controller' => 'Myapp\\adminBundle\\Controller\\GrapheController::ChartLineAction',  '_route' => '_grapheChartLine',);
            }

            // _grapheHistogramme
            if ($pathinfo === '/admin/histogramme') {
                return array (  '_controller' => 'Myapp\\adminBundle\\Controller\\GrapheController::chartHistogrammeAction',  '_route' => '_grapheHistogramme',);
            }

            // _graphePie
            if ($pathinfo === '/admin/pie') {
                return array (  '_controller' => 'Myapp\\adminBundle\\Controller\\GrapheController::PieAction',  '_route' => '_graphePie',);
            }

            // insert_pack
            if ($pathinfo === '/admin/insert') {
                return array (  '_controller' => 'MyappadminBundle:Img:upload',  '_route' => 'insert_pack',);
            }

            // image_edit
            if (preg_match('#^/admin/(?P<id>[^/]++)/editpa$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'image_edit')), array (  '_controller' => 'Myapp\\adminBundle\\Controller\\ImageController::editAction',));
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

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
