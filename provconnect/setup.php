<?php

define('PROVCONNECT_VERSION', '0.0.1');

/**
 * Init the hooks of the plugins - Needed
 *
 * @return void
 */
function plugin_init_provconnect() {
   global $PLUGIN_HOOKS;

   //required!
   $PLUGIN_HOOKS['csrf_compliant']['provconnect'] = true;

   //some code here, like call to Plugin::registerClass(), populating PLUGIN_HOOKS, ...
}

/**
 * Get the name and the version of the plugin - Needed
 *
 * @return array
 */
function plugin_version_provconnect() {
   return [
      'name'           => 'proVconnect',
      'version'        => PROVCONNECT_VERSION,
      'author'         => 'Wanpulse SAS - 2024</a>',
      'license'        => 'MIT',
      'homepage'       => 'https://github.com/Wanpulse/glpi_provconnect',
      'requirements'   => [
         'glpi'   => [
            'min' => '9.1'
         ]
      ]
   ];
}

/**
 * Optional : check prerequisites before install : may print errors or add to message after redirect
 *
 * @return boolean
 */
function plugin_provconnect_check_prerequisites() {
   //do what the checks you want
   return true;
}

/**
 * Check configuration process for plugin : need to return true if succeeded
 * Can display a message only if failure and $verbose is true
 *
 * @param boolean $verbose Enable verbosity. Default to false
 *
 * @return boolean
 */
function plugin_provconnect_check_config($verbose = false) {
   if (true) { // Your configuration check
      return true;
   }

   if ($verbose) {
      echo "Installed, but not configured";
   }
   return false;
}

/**
 * Optional: defines plugin options.
 *
 * @return array
 */
function plugin_provconnect_options() {
   return [
      Plugin::OPTION_AUTOINSTALL_DISABLED => false,
   ];
}