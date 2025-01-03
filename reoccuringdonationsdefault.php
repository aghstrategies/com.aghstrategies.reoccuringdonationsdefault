<?php

require_once 'reoccuringdonationsdefault.civix.php';

/**
 * [reoccuringdonationsdefault_civicrm_buildForm description]
 *
 */
function reoccuringdonationsdefault_civicrm_buildForm($formName, &$form) {
  if ($formName == "CRM_Contribute_Form_Contribution_Main") {
    // id number of the contribution page to be defaulted to reoccuring
    if ($form->_id == '8') {
      if ($form->getAction() == CRM_Core_Action::ADD) {
        $defaults['is_recur'] = '1';
        $form->setDefaults($defaults);
      }
    }
  }
}
/**
 * Implements hook_civicrm_config().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_config
 */
function reoccuringdonationsdefault_civicrm_config(&$config) {
  _reoccuringdonationsdefault_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_install
 */
function reoccuringdonationsdefault_civicrm_install() {
  _reoccuringdonationsdefault_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_enable
 */
function reoccuringdonationsdefault_civicrm_enable() {
  _reoccuringdonationsdefault_civix_civicrm_enable();
}

/**
 * Functions below this ship commented out. Uncomment as required.
 *

/**
 * Implements hook_civicrm_preProcess().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_preProcess
 *

 // */

/**
 * Implements hook_civicrm_navigationMenu().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_navigationMenu
 *
function reoccuringdonationsdefault_civicrm_navigationMenu(&$menu) {
  _reoccuringdonationsdefault_civix_insert_navigation_menu($menu, NULL, array(
    'label' => ts('The Page', array('domain' => 'com.aghstrategies.reoccuringdonationsdefault')),
    'name' => 'the_page',
    'url' => 'civicrm/the-page',
    'permission' => 'access CiviReport,access CiviContribute',
    'operator' => 'OR',
    'separator' => 0,
  ));
  _reoccuringdonationsdefault_civix_navigationMenu($menu);
} // */
