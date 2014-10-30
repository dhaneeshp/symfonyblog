<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRoutes = array(
        'treewalker_admin_newsletter_add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Treewalker\\Bundle\\NewsletterBundle\\Controller\\AdminNewsletterController::addAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/newsletter/add',    ),  ),  4 =>   array (  ),),
        'treewalker_admin_newsletter_view' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Treewalker\\Bundle\\NewsletterBundle\\Controller\\AdminNewsletterController::viewAction',  ),  2 =>   array (    'id' => '\\d+',    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/newsletter/view',    ),  ),  4 =>   array (  ),),
        'treewalker_charity_homepage' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'Treewalker\\Bundle\\CharityBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/hello',    ),  ),  4 =>   array (  ),),
        'treewalker_social_login_homepage' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'Treewalker\\Bundle\\SocialLoginBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/hello',    ),  ),  4 =>   array (  ),),
        'treewalker_admin_media_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Treewalker\\Bundle\\MediaBundle\\Controller\\MediaAdminController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/media/',    ),  ),  4 =>   array (  ),),
        'treewalker_admin_article_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Treewalker\\Bundle\\MediaBundle\\Controller\\ArticleAdminController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/article/',    ),  ),  4 =>   array (  ),),
        'treewalker_admin_article_add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Treewalker\\Bundle\\MediaBundle\\Controller\\ArticleAdminController::addArticleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/article/add',    ),  ),  4 =>   array (  ),),
        'treewalker_pagination_homepage' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'Treewalker\\Bundle\\PaginationBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/hello',    ),  ),  4 =>   array (  ),),
        'treewalker_admin_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Treewalker\\Bundle\\AdminBundle\\Controller\\AdminController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/login',    ),  ),  4 =>   array (  ),),
        'treewalker_admin_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Treewalker\\Bundle\\AdminBundle\\Controller\\AdminController::dashboardAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/',    ),  ),  4 =>   array (  ),),
        'treewalker_user_homepage' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'Treewalker\\Bundle\\UserBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/hello',    ),  ),  4 =>   array (  ),),
        'treewalker_user_register' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Treewalker\\Bundle\\UserBundle\\Controller\\RegistrationController::registerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/',    ),  ),  4 =>   array (  ),),
        'treewalker_admin_users_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Treewalker\\Bundle\\UserBundle\\Controller\\UsersAdminController::listUsersAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/users/',    ),  ),  4 =>   array (  ),),
        'treewalker_admin_user_add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Treewalker\\Bundle\\UserBundle\\Controller\\UsersAdminController::addUserAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/users/add',    ),  ),  4 =>   array (  ),),
        'treewalker_admin_user_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Treewalker\\Bundle\\UserBundle\\Controller\\UsersAdminController::editAction',  ),  2 =>   array (    'id' => '\\d+',    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/users/edit',    ),  ),  4 =>   array (  ),),
        'treewalker_admin_user_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Treewalker\\Bundle\\UserBundle\\Controller\\UsersAdminController::deleteAction',  ),  2 =>   array (    'id' => '\\d+',    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/users/delete',    ),  ),  4 =>   array (  ),),
        'treewalker_admin_user_changepassword' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Treewalker\\Bundle\\UserBundle\\Controller\\UsersAdminController::changePasswordAction',  ),  2 =>   array (    'id' => '\\d+',    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/users/change_password',    ),  ),  4 =>   array (  ),),
        'treewalker_blog_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Treewalker\\Bundle\\BlogBundle\\Controller\\BlogController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),),
        'TreewalkerBlogBundle_blog_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Treewalker\\Bundle\\BlogBundle\\Controller\\BlogController::showAction',  ),  2 =>   array (    '_method' => 'GET',    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),  ),  4 =>   array (  ),),
        'TreewalkerBlogBundle' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Treewalker\\Bundle\\BlogBundle\\Controller\\BlogController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),),
        'TreewalkerBlogBundle_comment_create' => array (  0 =>   array (    0 => 'blog_id',  ),  1 =>   array (    '_controller' => 'Treewalker\\Bundle\\BlogBundle\\Controller\\CommentController::createAction',  ),  2 =>   array (    '_method' => 'POST',    'blog_id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'blog_id',    ),    1 =>     array (      0 => 'text',      1 => '/comment',    ),  ),  4 =>   array (  ),),
        'treewalker_blog_about' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Treewalker\\Bundle\\BlogBundle\\Controller\\BlogController::aboutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/about/',    ),  ),  4 =>   array (  ),),
        'treewalker_blog_contact' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Treewalker\\Bundle\\BlogBundle\\Controller\\BlogController::contactAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/contact/',    ),  ),  4 =>   array (  ),),
        'treewalker_blog_admin_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Treewalker\\Bundle\\BlogBundle\\Controller\\BlogAdminListController::listAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/blog/',    ),  ),  4 =>   array (  ),),
        'treewalker_blog_admin_add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Treewalker\\Bundle\\BlogBundle\\Controller\\BlogAdminListController::addAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/blog/add',    ),  ),  4 =>   array (  ),),
        'treewalker_blog_admin_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Treewalker\\Bundle\\BlogBundle\\Controller\\BlogAdminListController::editAction',  ),  2 =>   array (    'id' => '\\d+',    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/blog',    ),  ),  4 =>   array (  ),),
        'treewalker_blog_admin_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Treewalker\\Bundle\\BlogBundle\\Controller\\BlogAdminListController::deleteAction',  ),  2 =>   array (    'id' => '\\d+',    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/blog',    ),  ),  4 =>   array (  ),),
        'treewalker_blog_admin_export' => array (  0 =>   array (    0 => '_format',  ),  1 =>   array (    '_controller' => 'Treewalker\\Bundle\\BlogBundle\\Controller\\BlogAdminListController::exportAction',  ),  2 =>   array (    '_format' => 'csv',    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'csv',      3 => '_format',    ),    1 =>     array (      0 => 'text',      1 => '/admin/blog/export',    ),  ),  4 =>   array (  ),),
        'treewalker_blog_admin_ajax' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Treewalker\\Bundle\\BlogBundle\\Controller\\BlogAjaxController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/blog/ajax/',    ),  ),  4 =>   array (  ),),
        'treewalker_blog_admin_ajax_remove_image' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Treewalker\\Bundle\\BlogBundle\\Controller\\BlogAjaxController::removefileAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/blog/ajax/remove/image',    ),  ),  4 =>   array (  ),),
        'post' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Treewalker\\Bundle\\BlogBundle\\Controller\\PostController::indexAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/post/',    ),  ),  4 =>   array (  ),),
        'post_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Treewalker\\Bundle\\BlogBundle\\Controller\\PostController::createAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/post/',    ),  ),  4 =>   array (  ),),
        'post_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Treewalker\\Bundle\\BlogBundle\\Controller\\PostController::newAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/post/new',    ),  ),  4 =>   array (  ),),
        'post_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Treewalker\\Bundle\\BlogBundle\\Controller\\PostController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/post',    ),  ),  4 =>   array (  ),),
        'post_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Treewalker\\Bundle\\BlogBundle\\Controller\\PostController::editAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/post',    ),  ),  4 =>   array (  ),),
        'post_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Treewalker\\Bundle\\BlogBundle\\Controller\\PostController::updateAction',  ),  2 =>   array (    '_method' => 'PUT',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/post',    ),  ),  4 =>   array (  ),),
        'post_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Treewalker\\Bundle\\BlogBundle\\Controller\\PostController::deleteAction',  ),  2 =>   array (    '_method' => 'DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/post',    ),  ),  4 =>   array (  ),),
        'admin_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Treewalker\\Bundle\\AdminBundle\\Controller\\AdminController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/login',    ),  ),  4 =>   array (  ),),
        'admin_login_check' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/login_check',    ),  ),  4 =>   array (  ),),
        'login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Treewalker\\Bundle\\UserBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),),
        'login_check' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),),
        'logout' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),),
        'admin_logout' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/logout',    ),  ),  4 =>   array (  ),),
        'ef_connect' => array (  0 =>   array (    0 => 'instance',  ),  1 =>   array (    '_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::loadAction',    'instance' => 'default',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'instance',    ),    1 =>     array (      0 => 'text',      1 => '/efconnect',    ),  ),  4 =>   array (  ),),
        'elfinder' => array (  0 =>   array (    0 => 'instance',  ),  1 =>   array (    '_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::showAction',    'instance' => 'default',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'instance',    ),    1 =>     array (      0 => 'text',      1 => '/elfinder',    ),  ),  4 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens);
    }
}
