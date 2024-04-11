<?php
/**
 * Install hook
 *
 * @return boolean
 */
function plugin_provconnect_install() {
   global $DB;
   
   $migration = new Migration(100);
   
   $query = "ALTER TABLE glpi_computers
			 ADD COLUMN provconnect VARCHAR(255)";
   
   $DB->queryOrDie($query, $DB->error());
   
   $migration->executeMigration();
   
   
   return true;
}

/**
 * Uninstall hook
 *
 * @return boolean
 */
function plugin_provconnect_uninstall() {
   global $DB;
   
   $migration = new Migration(100);
   
   $query = "ALTER TABLE glpi_computers
			 DROP COLUMN provconnect";
   
   $DB->queryOrDie($query, $DB->error());
   
   $migration->executeMigration();
   
   
   return true;
}