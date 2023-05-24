<?php

if (!defined('CIVICRM_MAIL_LOG_AND_SEND')) {
  define( 'CIVICRM_MAIL_LOG_AND_SEND', 1);
}

global $civicrm_root, $civicrm_setting, $civicrm_paths;
// SMTP settings
$civicrm_setting['Mailing Preferences']['mailing_backend']['outBound_option'] = 0;
$civicrm_setting['Mailing Preferences']['mailing_backend']['smtpServer']   = 'localhost';
$civicrm_setting['Mailing Preferences']['mailing_backend']['smtpPort']     = '1025';
$civicrm_setting['Mailing Preferences']['mailing_backend']['smtpUsername'] = '';
$civicrm_setting['Mailing Preferences']['mailing_backend']['smtpPassword'] = '';
$civicrm_setting['Mailing Preferences']['mailing_backend']['smtpAuth']     = 0;
