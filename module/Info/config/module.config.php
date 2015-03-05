<?php
return array(
    'controllers' => array(
        'invokables' => array(
            'Info\Controller\Info' => 'Info\Controller\InfoController',
        ),
    ),
	
    // The following section is new and should be added to your file
    'router' => array(
        'routes' => array(
            'info' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/info[/:action][/:id]',
                    'constraints' => array(
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Info\Controller\Info',
                        'action'     => 'index',
                    ),
                ),
            ),
        ),
    ),
	
    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map' => array(
            'layout/layout'           => __DIR__ . '/../view/layout/layout.phtml',
            'info/index/index'		  => __DIR__ . '/../view/info/index/index.phtml',
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
	
);