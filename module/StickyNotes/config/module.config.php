<?php

// module/StickyNotes/config/module.config.php:
return array(
    'StickyNotes' => array(
        'type'    => 'Literal',
        'options' => array(
            'route'    => '/StickyNotes',
            'defaults' => array(
                'controller'    => 'StickyNotes\Controller\Index',
                'action'        => 'index',
            ),
        ),
    ),
    'controllers' => array(
        'invokables' => array(
            'StickyNotes\Controller\StickyNotes' => 'StickyNotes\Controller\StickyNotesController',
        ),
    ),
    'router' => array(
        'routes' => array(
            'stickynotes' => array(
                'type' => 'segment',
                'options' => array(
                   // 'route' => 'http://localhost:63342/Big-Sticky-Notes-master/public/index.php/stickynotes[/:action][/:id]',
                    'route' => '/stickynotes[/:action][/:id]',
                    'constraints' => array(
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id' => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'StickyNotes\Controller\StickyNotes',
                        'action' => 'index',
                    ),
                ),
            ),
            'list_all' => array(
                'type'    => 'Segment',
                'options' => array(
                    'route'    => '/listAllTabelar',
                    'defaults' => array(
                        'controller'    => 'StickyNotes\Controller\StickyNotes',
                        'action'        => 'listall',
                    ),


                ),
            ),
       ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            'stickynotes' => __DIR__ . '/../view',
        ),
    ),
);
