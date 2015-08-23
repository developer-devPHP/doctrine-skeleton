<?php
/**
 * @license   http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 * @copyright Copyright (c) 2014 Zend Technologies USA Inc. (http://www.zend.com)
 */

return array(
    // Retrieve the list of modules for this application.
    'modules' => include __DIR__ . '/modules.config.php',
    // This should be an array of paths in which modules reside.
    // If a string key is provided, the listener will consider that a module
    // namespace, the value of that key the specific path to that module's
    // Module class.
    'module_listener_options' => array(
        'module_paths' => array(
            './module',
            './vendor'
        ),
    )
);
