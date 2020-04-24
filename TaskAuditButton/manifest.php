<?php
/*********************************************************************************
 * Task Audit
 ********************************************************************************/

$manifest = array (
  'acceptable_sugar_versions' => 
  array (
    '7.*.*',
    '8.*.*',
    '9.*.*',
	'10.*.*',
  ),
  'acceptable_sugar_flavors' => 
  array (
   'PRO',
   'ENT',
   'ULT',
  ),
  'readme' => '',
  'author' => 'Harald Kuske',
  'description' => 'Tasks Audit einschalten',
  'icon' => '',
  'is_uninstallable' => true,
  'name' => 'TaskAudit',
  'published_date' => '2014-05-20 00:00:00',
  'type' => 'module',
  'version' => 760,
  'remove_tables' => 'false',
);

$installdefs = array (
  'id' => 'TaskAudit',
  'copy' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/Extension/',
      'to' => 'custom/Extension/',
    ),
  ),
);