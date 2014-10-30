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

        if (0 === strpos($pathinfo, '/css')) {
            if (0 === strpos($pathinfo, '/css/d32d6e4')) {
                // _assetic_d32d6e4
                if ($pathinfo === '/css/d32d6e4.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'd32d6e4',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_d32d6e4',);
                }

                // _assetic_d32d6e4_0
                if ($pathinfo === '/css/d32d6e4_blog_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'd32d6e4',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_d32d6e4_0',);
                }

            }

            if (0 === strpos($pathinfo, '/css/6f2aa8e')) {
                // _assetic_6f2aa8e
                if ($pathinfo === '/css/6f2aa8e.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '6f2aa8e',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_6f2aa8e',);
                }

                if (0 === strpos($pathinfo, '/css/6f2aa8e_part_1_')) {
                    // _assetic_6f2aa8e_0
                    if ($pathinfo === '/css/6f2aa8e_part_1_admin_1.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '6f2aa8e',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_6f2aa8e_0',);
                    }

                    // _assetic_6f2aa8e_1
                    if ($pathinfo === '/css/6f2aa8e_part_1_menu_2.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '6f2aa8e',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_6f2aa8e_1',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/assetic/css/compiled/fmelfinder/main')) {
            // _assetic_6a8b946
            if ($pathinfo === '/assetic/css/compiled/fmelfinder/main.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '6a8b946',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_6a8b946',);
            }

            if (0 === strpos($pathinfo, '/assetic/css/compiled/fmelfinder/main_part_1_')) {
                // _assetic_6a8b946_0
                if ($pathinfo === '/assetic/css/compiled/fmelfinder/main_part_1_elfinder.min_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '6a8b946',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_6a8b946_0',);
                }

                // _assetic_6a8b946_1
                if ($pathinfo === '/assetic/css/compiled/fmelfinder/main_part_1_jquery-ui-1.8.21.custom_2.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '6a8b946',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_6a8b946_1',);
                }

                // _assetic_6a8b946_2
                if ($pathinfo === '/assetic/css/compiled/fmelfinder/main_part_1_theme_3.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '6a8b946',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_6a8b946_2',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/bundles/fmelfinder/js/main')) {
            // _assetic_1dadbbb
            if ($pathinfo === '/bundles/fmelfinder/js/main.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '1dadbbb',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_1dadbbb',);
            }

            if (0 === strpos($pathinfo, '/bundles/fmelfinder/js/main_')) {
                if (0 === strpos($pathinfo, '/bundles/fmelfinder/js/main_jquery-')) {
                    // _assetic_1dadbbb_0
                    if ($pathinfo === '/bundles/fmelfinder/js/main_jquery-1.8.0.min_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '1dadbbb',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_1dadbbb_0',);
                    }

                    // _assetic_1dadbbb_1
                    if ($pathinfo === '/bundles/fmelfinder/js/main_jquery-ui-1.8.23.custom.min_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '1dadbbb',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_1dadbbb_1',);
                    }

                }

                // _assetic_1dadbbb_2
                if ($pathinfo === '/bundles/fmelfinder/js/main_elfinder.min_3.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '1dadbbb',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_1dadbbb_2',);
                }

                if (0 === strpos($pathinfo, '/bundles/fmelfinder/js/main_part_4_elfinder.')) {
                    // _assetic_1dadbbb_3
                    if ($pathinfo === '/bundles/fmelfinder/js/main_part_4_elfinder.LANG_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '1dadbbb',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_1dadbbb_3',);
                    }

                    // _assetic_1dadbbb_4
                    if ($pathinfo === '/bundles/fmelfinder/js/main_part_4_elfinder.ar_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '1dadbbb',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_1dadbbb_4',);
                    }

                    // _assetic_1dadbbb_5
                    if ($pathinfo === '/bundles/fmelfinder/js/main_part_4_elfinder.bg_3.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '1dadbbb',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_1dadbbb_5',);
                    }

                    if (0 === strpos($pathinfo, '/bundles/fmelfinder/js/main_part_4_elfinder.c')) {
                        // _assetic_1dadbbb_6
                        if ($pathinfo === '/bundles/fmelfinder/js/main_part_4_elfinder.ca_4.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '1dadbbb',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_1dadbbb_6',);
                        }

                        // _assetic_1dadbbb_7
                        if ($pathinfo === '/bundles/fmelfinder/js/main_part_4_elfinder.cs_5.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '1dadbbb',  'pos' => 7,  '_format' => 'js',  '_route' => '_assetic_1dadbbb_7',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/bundles/fmelfinder/js/main_part_4_elfinder.d')) {
                        // _assetic_1dadbbb_8
                        if ($pathinfo === '/bundles/fmelfinder/js/main_part_4_elfinder.da_6.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '1dadbbb',  'pos' => 8,  '_format' => 'js',  '_route' => '_assetic_1dadbbb_8',);
                        }

                        // _assetic_1dadbbb_9
                        if ($pathinfo === '/bundles/fmelfinder/js/main_part_4_elfinder.de_7.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '1dadbbb',  'pos' => 9,  '_format' => 'js',  '_route' => '_assetic_1dadbbb_9',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/bundles/fmelfinder/js/main_part_4_elfinder.e')) {
                        // _assetic_1dadbbb_10
                        if ($pathinfo === '/bundles/fmelfinder/js/main_part_4_elfinder.el_8.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '1dadbbb',  'pos' => 10,  '_format' => 'js',  '_route' => '_assetic_1dadbbb_10',);
                        }

                        // _assetic_1dadbbb_11
                        if ($pathinfo === '/bundles/fmelfinder/js/main_part_4_elfinder.es_9.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '1dadbbb',  'pos' => 11,  '_format' => 'js',  '_route' => '_assetic_1dadbbb_11',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/bundles/fmelfinder/js/main_part_4_elfinder.f')) {
                        // _assetic_1dadbbb_12
                        if ($pathinfo === '/bundles/fmelfinder/js/main_part_4_elfinder.fa_10.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '1dadbbb',  'pos' => 12,  '_format' => 'js',  '_route' => '_assetic_1dadbbb_12',);
                        }

                        // _assetic_1dadbbb_13
                        if ($pathinfo === '/bundles/fmelfinder/js/main_part_4_elfinder.fr_11.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '1dadbbb',  'pos' => 13,  '_format' => 'js',  '_route' => '_assetic_1dadbbb_13',);
                        }

                    }

                    // _assetic_1dadbbb_14
                    if ($pathinfo === '/bundles/fmelfinder/js/main_part_4_elfinder.hu_12.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '1dadbbb',  'pos' => 14,  '_format' => 'js',  '_route' => '_assetic_1dadbbb_14',);
                    }

                    // _assetic_1dadbbb_15
                    if ($pathinfo === '/bundles/fmelfinder/js/main_part_4_elfinder.it_13.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '1dadbbb',  'pos' => 15,  '_format' => 'js',  '_route' => '_assetic_1dadbbb_15',);
                    }

                    // _assetic_1dadbbb_16
                    if ($pathinfo === '/bundles/fmelfinder/js/main_part_4_elfinder.jp_14.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '1dadbbb',  'pos' => 16,  '_format' => 'js',  '_route' => '_assetic_1dadbbb_16',);
                    }

                    // _assetic_1dadbbb_17
                    if ($pathinfo === '/bundles/fmelfinder/js/main_part_4_elfinder.ko_15.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '1dadbbb',  'pos' => 17,  '_format' => 'js',  '_route' => '_assetic_1dadbbb_17',);
                    }

                    if (0 === strpos($pathinfo, '/bundles/fmelfinder/js/main_part_4_elfinder.n')) {
                        // _assetic_1dadbbb_18
                        if ($pathinfo === '/bundles/fmelfinder/js/main_part_4_elfinder.nl_16.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '1dadbbb',  'pos' => 18,  '_format' => 'js',  '_route' => '_assetic_1dadbbb_18',);
                        }

                        // _assetic_1dadbbb_19
                        if ($pathinfo === '/bundles/fmelfinder/js/main_part_4_elfinder.no_17.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '1dadbbb',  'pos' => 19,  '_format' => 'js',  '_route' => '_assetic_1dadbbb_19',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/bundles/fmelfinder/js/main_part_4_elfinder.p')) {
                        // _assetic_1dadbbb_20
                        if ($pathinfo === '/bundles/fmelfinder/js/main_part_4_elfinder.pl_18.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '1dadbbb',  'pos' => 20,  '_format' => 'js',  '_route' => '_assetic_1dadbbb_20',);
                        }

                        // _assetic_1dadbbb_21
                        if ($pathinfo === '/bundles/fmelfinder/js/main_part_4_elfinder.pt_BR_19.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '1dadbbb',  'pos' => 21,  '_format' => 'js',  '_route' => '_assetic_1dadbbb_21',);
                        }

                    }

                    // _assetic_1dadbbb_22
                    if ($pathinfo === '/bundles/fmelfinder/js/main_part_4_elfinder.ru_20.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '1dadbbb',  'pos' => 22,  '_format' => 'js',  '_route' => '_assetic_1dadbbb_22',);
                    }

                    if (0 === strpos($pathinfo, '/bundles/fmelfinder/js/main_part_4_elfinder.s')) {
                        // _assetic_1dadbbb_23
                        if ($pathinfo === '/bundles/fmelfinder/js/main_part_4_elfinder.sk_21.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '1dadbbb',  'pos' => 23,  '_format' => 'js',  '_route' => '_assetic_1dadbbb_23',);
                        }

                        // _assetic_1dadbbb_24
                        if ($pathinfo === '/bundles/fmelfinder/js/main_part_4_elfinder.sl_22.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '1dadbbb',  'pos' => 24,  '_format' => 'js',  '_route' => '_assetic_1dadbbb_24',);
                        }

                        // _assetic_1dadbbb_25
                        if ($pathinfo === '/bundles/fmelfinder/js/main_part_4_elfinder.sv_23.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '1dadbbb',  'pos' => 25,  '_format' => 'js',  '_route' => '_assetic_1dadbbb_25',);
                        }

                    }

                    // _assetic_1dadbbb_26
                    if ($pathinfo === '/bundles/fmelfinder/js/main_part_4_elfinder.tr_24.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '1dadbbb',  'pos' => 26,  '_format' => 'js',  '_route' => '_assetic_1dadbbb_26',);
                    }

                    // _assetic_1dadbbb_27
                    if ($pathinfo === '/bundles/fmelfinder/js/main_part_4_elfinder.vi_25.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '1dadbbb',  'pos' => 27,  '_format' => 'js',  '_route' => '_assetic_1dadbbb_27',);
                    }

                    if (0 === strpos($pathinfo, '/bundles/fmelfinder/js/main_part_4_elfinder.zh_')) {
                        // _assetic_1dadbbb_28
                        if ($pathinfo === '/bundles/fmelfinder/js/main_part_4_elfinder.zh_CN_26.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '1dadbbb',  'pos' => 28,  '_format' => 'js',  '_route' => '_assetic_1dadbbb_28',);
                        }

                        // _assetic_1dadbbb_29
                        if ($pathinfo === '/bundles/fmelfinder/js/main_part_4_elfinder.zh_TW_27.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '1dadbbb',  'pos' => 29,  '_format' => 'js',  '_route' => '_assetic_1dadbbb_29',);
                        }

                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/assetic')) {
            if (0 === strpos($pathinfo, '/assetic/js/compiled/fmelfinder/main')) {
                // _assetic_7c7b115
                if ($pathinfo === '/assetic/js/compiled/fmelfinder/main.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '7c7b115',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_7c7b115',);
                }

                if (0 === strpos($pathinfo, '/assetic/js/compiled/fmelfinder/main_')) {
                    if (0 === strpos($pathinfo, '/assetic/js/compiled/fmelfinder/main_jquery-')) {
                        // _assetic_7c7b115_0
                        if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_jquery-1.8.0.min_1.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '7c7b115',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_7c7b115_0',);
                        }

                        // _assetic_7c7b115_1
                        if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_jquery-ui-1.8.23.custom.min_2.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '7c7b115',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_7c7b115_1',);
                        }

                    }

                    // _assetic_7c7b115_2
                    if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_elfinder.min_3.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '7c7b115',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_7c7b115_2',);
                    }

                    if (0 === strpos($pathinfo, '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.')) {
                        // _assetic_7c7b115_3
                        if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.LANG_1.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '7c7b115',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_7c7b115_3',);
                        }

                        // _assetic_7c7b115_4
                        if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.ar_2.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '7c7b115',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_7c7b115_4',);
                        }

                        // _assetic_7c7b115_5
                        if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.bg_3.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '7c7b115',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_7c7b115_5',);
                        }

                        if (0 === strpos($pathinfo, '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.c')) {
                            // _assetic_7c7b115_6
                            if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.ca_4.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '7c7b115',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_7c7b115_6',);
                            }

                            // _assetic_7c7b115_7
                            if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.cs_5.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '7c7b115',  'pos' => 7,  '_format' => 'js',  '_route' => '_assetic_7c7b115_7',);
                            }

                        }

                        if (0 === strpos($pathinfo, '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.d')) {
                            // _assetic_7c7b115_8
                            if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.da_6.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '7c7b115',  'pos' => 8,  '_format' => 'js',  '_route' => '_assetic_7c7b115_8',);
                            }

                            // _assetic_7c7b115_9
                            if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.de_7.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '7c7b115',  'pos' => 9,  '_format' => 'js',  '_route' => '_assetic_7c7b115_9',);
                            }

                        }

                        if (0 === strpos($pathinfo, '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.e')) {
                            // _assetic_7c7b115_10
                            if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.el_8.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '7c7b115',  'pos' => 10,  '_format' => 'js',  '_route' => '_assetic_7c7b115_10',);
                            }

                            // _assetic_7c7b115_11
                            if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.es_9.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '7c7b115',  'pos' => 11,  '_format' => 'js',  '_route' => '_assetic_7c7b115_11',);
                            }

                        }

                        if (0 === strpos($pathinfo, '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.f')) {
                            // _assetic_7c7b115_12
                            if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.fa_10.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '7c7b115',  'pos' => 12,  '_format' => 'js',  '_route' => '_assetic_7c7b115_12',);
                            }

                            // _assetic_7c7b115_13
                            if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.fr_11.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '7c7b115',  'pos' => 13,  '_format' => 'js',  '_route' => '_assetic_7c7b115_13',);
                            }

                        }

                        // _assetic_7c7b115_14
                        if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.hu_12.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '7c7b115',  'pos' => 14,  '_format' => 'js',  '_route' => '_assetic_7c7b115_14',);
                        }

                        // _assetic_7c7b115_15
                        if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.it_13.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '7c7b115',  'pos' => 15,  '_format' => 'js',  '_route' => '_assetic_7c7b115_15',);
                        }

                        // _assetic_7c7b115_16
                        if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.jp_14.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '7c7b115',  'pos' => 16,  '_format' => 'js',  '_route' => '_assetic_7c7b115_16',);
                        }

                        // _assetic_7c7b115_17
                        if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.ko_15.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '7c7b115',  'pos' => 17,  '_format' => 'js',  '_route' => '_assetic_7c7b115_17',);
                        }

                        if (0 === strpos($pathinfo, '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.n')) {
                            // _assetic_7c7b115_18
                            if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.nl_16.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '7c7b115',  'pos' => 18,  '_format' => 'js',  '_route' => '_assetic_7c7b115_18',);
                            }

                            // _assetic_7c7b115_19
                            if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.no_17.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '7c7b115',  'pos' => 19,  '_format' => 'js',  '_route' => '_assetic_7c7b115_19',);
                            }

                        }

                        if (0 === strpos($pathinfo, '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.p')) {
                            // _assetic_7c7b115_20
                            if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.pl_18.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '7c7b115',  'pos' => 20,  '_format' => 'js',  '_route' => '_assetic_7c7b115_20',);
                            }

                            // _assetic_7c7b115_21
                            if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.pt_BR_19.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '7c7b115',  'pos' => 21,  '_format' => 'js',  '_route' => '_assetic_7c7b115_21',);
                            }

                        }

                        // _assetic_7c7b115_22
                        if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.ru_20.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '7c7b115',  'pos' => 22,  '_format' => 'js',  '_route' => '_assetic_7c7b115_22',);
                        }

                        if (0 === strpos($pathinfo, '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.s')) {
                            // _assetic_7c7b115_23
                            if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.sk_21.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '7c7b115',  'pos' => 23,  '_format' => 'js',  '_route' => '_assetic_7c7b115_23',);
                            }

                            // _assetic_7c7b115_24
                            if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.sl_22.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '7c7b115',  'pos' => 24,  '_format' => 'js',  '_route' => '_assetic_7c7b115_24',);
                            }

                            // _assetic_7c7b115_25
                            if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.sv_23.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '7c7b115',  'pos' => 25,  '_format' => 'js',  '_route' => '_assetic_7c7b115_25',);
                            }

                        }

                        // _assetic_7c7b115_26
                        if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.tr_24.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '7c7b115',  'pos' => 26,  '_format' => 'js',  '_route' => '_assetic_7c7b115_26',);
                        }

                        // _assetic_7c7b115_27
                        if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.vi_25.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '7c7b115',  'pos' => 27,  '_format' => 'js',  '_route' => '_assetic_7c7b115_27',);
                        }

                        if (0 === strpos($pathinfo, '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.zh_')) {
                            // _assetic_7c7b115_28
                            if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.zh_CN_26.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '7c7b115',  'pos' => 28,  '_format' => 'js',  '_route' => '_assetic_7c7b115_28',);
                            }

                            // _assetic_7c7b115_29
                            if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.zh_TW_27.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '7c7b115',  'pos' => 29,  '_format' => 'js',  '_route' => '_assetic_7c7b115_29',);
                            }

                        }

                    }

                }

            }

            if (0 === strpos($pathinfo, '/assetic/css/compiled/fmelfinder/main')) {
                // _assetic_607c75c
                if ($pathinfo === '/assetic/css/compiled/fmelfinder/main.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '607c75c',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_607c75c',);
                }

                if (0 === strpos($pathinfo, '/assetic/css/compiled/fmelfinder/main_part_1_')) {
                    // _assetic_607c75c_0
                    if ($pathinfo === '/assetic/css/compiled/fmelfinder/main_part_1_elfinder.min_1.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '607c75c',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_607c75c_0',);
                    }

                    // _assetic_607c75c_1
                    if ($pathinfo === '/assetic/css/compiled/fmelfinder/main_part_1_jquery-ui-1.8.21.custom_2.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '607c75c',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_607c75c_1',);
                    }

                    // _assetic_607c75c_2
                    if ($pathinfo === '/assetic/css/compiled/fmelfinder/main_part_1_theme_3.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '607c75c',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_607c75c_2',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/assetic/js/compiled/fmelfinder/main')) {
                // _assetic_43ffd91
                if ($pathinfo === '/assetic/js/compiled/fmelfinder/main.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '43ffd91',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_43ffd91',);
                }

                if (0 === strpos($pathinfo, '/assetic/js/compiled/fmelfinder/main_')) {
                    if (0 === strpos($pathinfo, '/assetic/js/compiled/fmelfinder/main_jquery-')) {
                        // _assetic_43ffd91_0
                        if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_jquery-1.8.0.min_1.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '43ffd91',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_43ffd91_0',);
                        }

                        // _assetic_43ffd91_1
                        if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_jquery-ui-1.8.23.custom.min_2.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '43ffd91',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_43ffd91_1',);
                        }

                    }

                    // _assetic_43ffd91_2
                    if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_elfinder.min_3.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '43ffd91',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_43ffd91_2',);
                    }

                    if (0 === strpos($pathinfo, '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.')) {
                        // _assetic_43ffd91_3
                        if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.LANG_1.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '43ffd91',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_43ffd91_3',);
                        }

                        // _assetic_43ffd91_4
                        if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.ar_2.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '43ffd91',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_43ffd91_4',);
                        }

                        // _assetic_43ffd91_5
                        if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.bg_3.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '43ffd91',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_43ffd91_5',);
                        }

                        if (0 === strpos($pathinfo, '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.c')) {
                            // _assetic_43ffd91_6
                            if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.ca_4.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '43ffd91',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_43ffd91_6',);
                            }

                            // _assetic_43ffd91_7
                            if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.cs_5.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '43ffd91',  'pos' => 7,  '_format' => 'js',  '_route' => '_assetic_43ffd91_7',);
                            }

                        }

                        if (0 === strpos($pathinfo, '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.d')) {
                            // _assetic_43ffd91_8
                            if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.da_6.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '43ffd91',  'pos' => 8,  '_format' => 'js',  '_route' => '_assetic_43ffd91_8',);
                            }

                            // _assetic_43ffd91_9
                            if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.de_7.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '43ffd91',  'pos' => 9,  '_format' => 'js',  '_route' => '_assetic_43ffd91_9',);
                            }

                        }

                        if (0 === strpos($pathinfo, '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.e')) {
                            // _assetic_43ffd91_10
                            if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.el_8.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '43ffd91',  'pos' => 10,  '_format' => 'js',  '_route' => '_assetic_43ffd91_10',);
                            }

                            // _assetic_43ffd91_11
                            if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.es_9.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '43ffd91',  'pos' => 11,  '_format' => 'js',  '_route' => '_assetic_43ffd91_11',);
                            }

                        }

                        if (0 === strpos($pathinfo, '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.f')) {
                            // _assetic_43ffd91_12
                            if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.fa_10.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '43ffd91',  'pos' => 12,  '_format' => 'js',  '_route' => '_assetic_43ffd91_12',);
                            }

                            // _assetic_43ffd91_13
                            if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.fr_11.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '43ffd91',  'pos' => 13,  '_format' => 'js',  '_route' => '_assetic_43ffd91_13',);
                            }

                        }

                        // _assetic_43ffd91_14
                        if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.hu_12.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '43ffd91',  'pos' => 14,  '_format' => 'js',  '_route' => '_assetic_43ffd91_14',);
                        }

                        // _assetic_43ffd91_15
                        if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.it_13.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '43ffd91',  'pos' => 15,  '_format' => 'js',  '_route' => '_assetic_43ffd91_15',);
                        }

                        // _assetic_43ffd91_16
                        if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.jp_14.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '43ffd91',  'pos' => 16,  '_format' => 'js',  '_route' => '_assetic_43ffd91_16',);
                        }

                        // _assetic_43ffd91_17
                        if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.ko_15.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '43ffd91',  'pos' => 17,  '_format' => 'js',  '_route' => '_assetic_43ffd91_17',);
                        }

                        if (0 === strpos($pathinfo, '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.n')) {
                            // _assetic_43ffd91_18
                            if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.nl_16.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '43ffd91',  'pos' => 18,  '_format' => 'js',  '_route' => '_assetic_43ffd91_18',);
                            }

                            // _assetic_43ffd91_19
                            if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.no_17.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '43ffd91',  'pos' => 19,  '_format' => 'js',  '_route' => '_assetic_43ffd91_19',);
                            }

                        }

                        if (0 === strpos($pathinfo, '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.p')) {
                            // _assetic_43ffd91_20
                            if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.pl_18.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '43ffd91',  'pos' => 20,  '_format' => 'js',  '_route' => '_assetic_43ffd91_20',);
                            }

                            // _assetic_43ffd91_21
                            if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.pt_BR_19.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '43ffd91',  'pos' => 21,  '_format' => 'js',  '_route' => '_assetic_43ffd91_21',);
                            }

                        }

                        // _assetic_43ffd91_22
                        if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.ru_20.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '43ffd91',  'pos' => 22,  '_format' => 'js',  '_route' => '_assetic_43ffd91_22',);
                        }

                        if (0 === strpos($pathinfo, '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.s')) {
                            // _assetic_43ffd91_23
                            if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.sk_21.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '43ffd91',  'pos' => 23,  '_format' => 'js',  '_route' => '_assetic_43ffd91_23',);
                            }

                            // _assetic_43ffd91_24
                            if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.sl_22.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '43ffd91',  'pos' => 24,  '_format' => 'js',  '_route' => '_assetic_43ffd91_24',);
                            }

                            // _assetic_43ffd91_25
                            if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.sv_23.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '43ffd91',  'pos' => 25,  '_format' => 'js',  '_route' => '_assetic_43ffd91_25',);
                            }

                        }

                        // _assetic_43ffd91_26
                        if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.tr_24.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '43ffd91',  'pos' => 26,  '_format' => 'js',  '_route' => '_assetic_43ffd91_26',);
                        }

                        // _assetic_43ffd91_27
                        if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.vi_25.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '43ffd91',  'pos' => 27,  '_format' => 'js',  '_route' => '_assetic_43ffd91_27',);
                        }

                        if (0 === strpos($pathinfo, '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.zh_')) {
                            // _assetic_43ffd91_28
                            if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.zh_CN_26.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '43ffd91',  'pos' => 28,  '_format' => 'js',  '_route' => '_assetic_43ffd91_28',);
                            }

                            // _assetic_43ffd91_29
                            if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.zh_TW_27.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '43ffd91',  'pos' => 29,  '_format' => 'js',  '_route' => '_assetic_43ffd91_29',);
                            }

                        }

                    }

                }

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

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
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

            // treewalker_admin_newsletter_upload
            if ($pathinfo === '/admin/newsletter/uploadfile') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_treewalker_admin_newsletter_upload;
                }

                return array (  '_controller' => 'Treewalker\\Bundle\\NewsletterBundle\\Controller\\AdminNewsletterController::uploadfile',  '_route' => 'treewalker_admin_newsletter_upload',);
            }
            not_treewalker_admin_newsletter_upload:

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
