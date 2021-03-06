<?php

return [
/*
* Provider .
*/
'provider'  => 'lavalite',

/*
* Package .
*/
'package'   => 'task',

/*
* Modules .
*/
'modules'   => ['task'],

'views' => ['page' => 'Default'],

'image' => [
            'xs'            => ['width' => '60',     'height' => '45',  'action' => 'resize', 'default' => 'images/noimage.jpg', 'watermark' => 'images/logo/default.png'],
            'sm'            => ['width' => '160',    'height' => '75',  'action' => 'resize', 'default' => 'images/noimage.jpg', 'watermark' => 'images/logo/default.png'],
            'md'            => ['width' => '460',    'height' => '345', 'action' => 'resize', 'default' => 'images/noimage.jpg', 'watermark' => 'images/logo/default.png'],
            'lg'            => ['width' => '800',    'height' => '600', 'action' => 'resize', 'default' => 'images/noimage.jpg', 'watermark' => 'images/logo/default.png'],
            'xl'            => ['width' => '1000',   'height' => '750', 'action' => 'resize', 'default' => 'images/noimage.jpg', 'watermark' => 'images/logo/default.png'],
            ],

// Modale variables for task module.
'task' => [
                'model'         => 'Lavalite\Task\Models\Task',
                'table'         => 'tasks',
                'primaryKey'    => 'id',
                'hidden'        => [],
                'visible'       => [],
                'guarded'       => ['*'],
                'slugs'         => [],
                'dates'         => ['deleted_at'],
                'appends'       => ['eid'],
                'fillable'      => ['user_id',  'start',  'end', 'task',  'status'],
                'listfields'    => ['id', 'user_id',  'start',  'end', 'task',  'status'],
                'uploadfolder'  => '/uploads/task',
                'uploads'       => [
                                        'single'   => [],
                                        'multiple' => [],
                                   ],
                'casts'         => [],
                'encrypt'       => ['id'],
                'translate'     => [],
                'perPage'       => '20',
           ],
];
