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

        if (0 === strpos($pathinfo, '/admin/newsletter')) {
            // treewalker_admin_newsletter_add
            if ($pathinfo === '/admin/newsletter/add') {
                return array (  '_controller' => 'Treewalker\\Bundle\\NewsletterBundle\\Controller\\AdminNewsletterController::addAction',  '_route' => 'treewalker_admin_newsletter_add',);
            }

            // treewalker_admin_newsletter_view
            if (0 === strpos($pathinfo, '/admin/newsletter/view') && preg_match('#^/admin/newsletter/view/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_treewalker_admin_newsletter_view;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'treewalker_admin_newsletter_view')), array (  '_controller' => 'Treewalker\\Bundle\\NewsletterBundle\\Controller\\AdminNewsletterController::viewAction',));
            }
            not_treewalker_admin_newsletter_view:

        }

        if (0 === strpos($pathinfo, '/hello')) {
            // treewalker_charity_homepage
            if (preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'treewalker_charity_homepage')), array (  '_controller' => 'Treewalker\\Bundle\\CharityBundle\\Controller\\DefaultController::indexAction',));
            }

            // treewalker_social_login_homepage
            if (preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'treewalker_social_login_homepage')), array (  '_controller' => 'Treewalker\\Bundle\\SocialLoginBundle\\Controller\\DefaultController::indexAction',));
            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // treewalker_admin_media_homepage
            if (rtrim($pathinfo, '/') === '/admin/media') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'treewalker_admin_media_homepage');
                }

                return array (  '_controller' => 'Treewalker\\Bundle\\MediaBundle\\Controller\\MediaAdminController::indexAction',  '_route' => 'treewalker_admin_media_homepage',);
            }

            if (0 === strpos($pathinfo, '/admin/article')) {
                // treewalker_admin_article_homepage
                if (rtrim($pathinfo, '/') === '/admin/article') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'treewalker_admin_article_homepage');
                    }

                    return array (  '_controller' => 'Treewalker\\Bundle\\MediaBundle\\Controller\\ArticleAdminController::indexAction',  '_route' => 'treewalker_admin_article_homepage',);
                }

                // treewalker_admin_article_add
                if ($pathinfo === '/admin/article/add') {
                    return array (  '_controller' => 'Treewalker\\Bundle\\MediaBundle\\Controller\\ArticleAdminController::addArticleAction',  '_route' => 'treewalker_admin_article_add',);
                }

            }

        }

        // treewalker_pagination_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'treewalker_pagination_homepage')), array (  '_controller' => 'Treewalker\\Bundle\\PaginationBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/admin')) {
            // treewalker_admin_login
            if ($pathinfo === '/admin/login') {
                return array (  '_controller' => 'Treewalker\\Bundle\\AdminBundle\\Controller\\AdminController::loginAction',  '_route' => 'treewalker_admin_login',);
            }

            // treewalker_admin_homepage
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'treewalker_admin_homepage');
                }

                return array (  '_controller' => 'Treewalker\\Bundle\\AdminBundle\\Controller\\AdminController::dashboardAction',  '_route' => 'treewalker_admin_homepage',);
            }

        }

        // treewalker_user_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'treewalker_user_homepage')), array (  '_controller' => 'Treewalker\\Bundle\\UserBundle\\Controller\\DefaultController::indexAction',));
        }

        // treewalker_user_register
        if (rtrim($pathinfo, '/') === '/register') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'treewalker_user_register');
            }

            return array (  '_controller' => 'Treewalker\\Bundle\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'treewalker_user_register',);
        }

        if (0 === strpos($pathinfo, '/admin/users')) {
            // treewalker_admin_users_homepage
            if (rtrim($pathinfo, '/') === '/admin/users') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'treewalker_admin_users_homepage');
                }

                return array (  '_controller' => 'Treewalker\\Bundle\\UserBundle\\Controller\\UsersAdminController::listUsersAction',  '_route' => 'treewalker_admin_users_homepage',);
            }

            // treewalker_admin_user_add
            if ($pathinfo === '/admin/users/add') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_treewalker_admin_user_add;
                }

                return array (  '_controller' => 'Treewalker\\Bundle\\UserBundle\\Controller\\UsersAdminController::addUserAction',  '_route' => 'treewalker_admin_user_add',);
            }
            not_treewalker_admin_user_add:

            // treewalker_admin_user_edit
            if (0 === strpos($pathinfo, '/admin/users/edit') && preg_match('#^/admin/users/edit/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_treewalker_admin_user_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'treewalker_admin_user_edit')), array (  '_controller' => 'Treewalker\\Bundle\\UserBundle\\Controller\\UsersAdminController::editAction',));
            }
            not_treewalker_admin_user_edit:

            // treewalker_admin_user_delete
            if (0 === strpos($pathinfo, '/admin/users/delete') && preg_match('#^/admin/users/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_treewalker_admin_user_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'treewalker_admin_user_delete')), array (  '_controller' => 'Treewalker\\Bundle\\UserBundle\\Controller\\UsersAdminController::deleteAction',));
            }
            not_treewalker_admin_user_delete:

            // treewalker_admin_user_changepassword
            if (0 === strpos($pathinfo, '/admin/users/change_password') && preg_match('#^/admin/users/change_password/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_treewalker_admin_user_changepassword;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'treewalker_admin_user_changepassword')), array (  '_controller' => 'Treewalker\\Bundle\\UserBundle\\Controller\\UsersAdminController::changePasswordAction',));
            }
            not_treewalker_admin_user_changepassword:

        }

        // treewalker_blog_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'treewalker_blog_homepage');
            }

            return array (  '_controller' => 'Treewalker\\Bundle\\BlogBundle\\Controller\\BlogController::indexAction',  '_route' => 'treewalker_blog_homepage',);
        }

        // TreewalkerBlogBundle_blog_show
        if (preg_match('#^/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_TreewalkerBlogBundle_blog_show;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'TreewalkerBlogBundle_blog_show')), array (  '_controller' => 'Treewalker\\Bundle\\BlogBundle\\Controller\\BlogController::showAction',));
        }
        not_TreewalkerBlogBundle_blog_show:

        // TreewalkerBlogBundle
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'TreewalkerBlogBundle');
            }

            return array (  '_controller' => 'Treewalker\\Bundle\\BlogBundle\\Controller\\BlogController::indexAction',  '_route' => 'TreewalkerBlogBundle',);
        }

        // TreewalkerBlogBundle_comment_create
        if (0 === strpos($pathinfo, '/comment') && preg_match('#^/comment/(?P<blog_id>\\d+)$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_TreewalkerBlogBundle_comment_create;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'TreewalkerBlogBundle_comment_create')), array (  '_controller' => 'Treewalker\\Bundle\\BlogBundle\\Controller\\CommentController::createAction',));
        }
        not_TreewalkerBlogBundle_comment_create:

        // treewalker_blog_about
        if (rtrim($pathinfo, '/') === '/about') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'treewalker_blog_about');
            }

            return array (  '_controller' => 'Treewalker\\Bundle\\BlogBundle\\Controller\\BlogController::aboutAction',  '_route' => 'treewalker_blog_about',);
        }

        // treewalker_blog_contact
        if (rtrim($pathinfo, '/') === '/contact') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'treewalker_blog_contact');
            }

            return array (  '_controller' => 'Treewalker\\Bundle\\BlogBundle\\Controller\\BlogController::contactAction',  '_route' => 'treewalker_blog_contact',);
        }

        if (0 === strpos($pathinfo, '/admin/blog')) {
            // treewalker_blog_admin_homepage
            if (rtrim($pathinfo, '/') === '/admin/blog') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'treewalker_blog_admin_homepage');
                }

                return array (  '_controller' => 'Treewalker\\Bundle\\BlogBundle\\Controller\\BlogAdminListController::listAction',  '_route' => 'treewalker_blog_admin_homepage',);
            }

            // treewalker_blog_admin_add
            if ($pathinfo === '/admin/blog/add') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_treewalker_blog_admin_add;
                }

                return array (  '_controller' => 'Treewalker\\Bundle\\BlogBundle\\Controller\\BlogAdminListController::addAction',  '_route' => 'treewalker_blog_admin_add',);
            }
            not_treewalker_blog_admin_add:

            // treewalker_blog_admin_edit
            if (preg_match('#^/admin/blog/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_treewalker_blog_admin_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'treewalker_blog_admin_edit')), array (  '_controller' => 'Treewalker\\Bundle\\BlogBundle\\Controller\\BlogAdminListController::editAction',));
            }
            not_treewalker_blog_admin_edit:

            // treewalker_blog_admin_delete
            if (preg_match('#^/admin/blog/(?P<id>\\d+)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_treewalker_blog_admin_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'treewalker_blog_admin_delete')), array (  '_controller' => 'Treewalker\\Bundle\\BlogBundle\\Controller\\BlogAdminListController::deleteAction',));
            }
            not_treewalker_blog_admin_delete:

            // treewalker_blog_admin_export
            if (0 === strpos($pathinfo, '/admin/blog/export') && preg_match('#^/admin/blog/export\\.(?P<_format>csv)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_treewalker_blog_admin_export;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'treewalker_blog_admin_export')), array (  '_controller' => 'Treewalker\\Bundle\\BlogBundle\\Controller\\BlogAdminListController::exportAction',));
            }
            not_treewalker_blog_admin_export:

            if (0 === strpos($pathinfo, '/admin/blog/ajax')) {
                // treewalker_blog_admin_ajax
                if (rtrim($pathinfo, '/') === '/admin/blog/ajax') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'treewalker_blog_admin_ajax');
                    }

                    return array (  '_controller' => 'Treewalker\\Bundle\\BlogBundle\\Controller\\BlogAjaxController::indexAction',  '_route' => 'treewalker_blog_admin_ajax',);
                }

                // treewalker_blog_admin_ajax_remove_image
                if ($pathinfo === '/admin/blog/ajax/remove/image') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_treewalker_blog_admin_ajax_remove_image;
                    }

                    return array (  '_controller' => 'Treewalker\\Bundle\\BlogBundle\\Controller\\BlogAjaxController::removefileAction',  '_route' => 'treewalker_blog_admin_ajax_remove_image',);
                }
                not_treewalker_blog_admin_ajax_remove_image:

            }

        }

        if (0 === strpos($pathinfo, '/post')) {
            // post
            if (rtrim($pathinfo, '/') === '/post') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_post;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'post');
                }

                return array (  '_controller' => 'Treewalker\\Bundle\\BlogBundle\\Controller\\PostController::indexAction',  '_route' => 'post',);
            }
            not_post:

            // post_create
            if ($pathinfo === '/post/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_post_create;
                }

                return array (  '_controller' => 'Treewalker\\Bundle\\BlogBundle\\Controller\\PostController::createAction',  '_route' => 'post_create',);
            }
            not_post_create:

            // post_new
            if ($pathinfo === '/post/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_post_new;
                }

                return array (  '_controller' => 'Treewalker\\Bundle\\BlogBundle\\Controller\\PostController::newAction',  '_route' => 'post_new',);
            }
            not_post_new:

            // post_show
            if (preg_match('#^/post/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_post_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_show')), array (  '_controller' => 'Treewalker\\Bundle\\BlogBundle\\Controller\\PostController::showAction',));
            }
            not_post_show:

            // post_edit
            if (preg_match('#^/post/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_post_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_edit')), array (  '_controller' => 'Treewalker\\Bundle\\BlogBundle\\Controller\\PostController::editAction',));
            }
            not_post_edit:

            // post_update
            if (preg_match('#^/post/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_post_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_update')), array (  '_controller' => 'Treewalker\\Bundle\\BlogBundle\\Controller\\PostController::updateAction',));
            }
            not_post_update:

            // post_delete
            if (preg_match('#^/post/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_post_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_delete')), array (  '_controller' => 'Treewalker\\Bundle\\BlogBundle\\Controller\\PostController::deleteAction',));
            }
            not_post_delete:

        }

        if (0 === strpos($pathinfo, '/admin/login')) {
            // admin_login
            if ($pathinfo === '/admin/login') {
                return array (  '_controller' => 'Treewalker\\Bundle\\AdminBundle\\Controller\\AdminController::loginAction',  '_route' => 'admin_login',);
            }

            // admin_login_check
            if ($pathinfo === '/admin/login_check') {
                return array('_route' => 'admin_login_check');
            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'Treewalker\\Bundle\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
                }

                // login_check
                if ($pathinfo === '/login_check') {
                    return array('_route' => 'login_check');
                }

            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

        }

        // admin_logout
        if ($pathinfo === '/admin/logout') {
            return array('_route' => 'admin_logout');
        }

        if (0 === strpos($pathinfo, '/e')) {
            // ef_connect
            if (0 === strpos($pathinfo, '/efconnect') && preg_match('#^/efconnect(?:/(?P<instance>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ef_connect')), array (  '_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::loadAction',  'instance' => 'default',));
            }

            // elfinder
            if (0 === strpos($pathinfo, '/elfinder') && preg_match('#^/elfinder(?:/(?P<instance>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'elfinder')), array (  '_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::showAction',  'instance' => 'default',));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
