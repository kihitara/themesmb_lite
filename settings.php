<?php
 
/**
 * Settings for the themesmb_lite theme
 */

defined('MOODLE_INTERNAL') || die;

// Adds our page to the structure of the admin tree

if ($ADMIN->fulltree) { 

// Logo file setting
// $name = 'theme_themesmb_lite/logo';
// $title = get_string('logo','theme_themesmb_lite');
// $description = get_string('logodesc', 'theme_themesmb_lite');
// $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
// $settings->add($setting);

// Foot note setting
$name = 'theme_themesmb_lite/footnote';
$title = get_string('footnote','theme_themesmb_lite');
$description = get_string('footnotedesc', 'theme_themesmb_lite');
$setting = new admin_setting_confightmleditor($name, $title, $description, '');
$settings->add($setting);

// Show the credits to MoodleBites for Theme Designers
$name = 'theme_themesmb_lite/mbcredits';
$title = get_string('mbcredits','theme_themesmb_lite');
$description = get_string('mbcreditsdesc', 'theme_themesmb_lite');
$default = 1;
$choices = array(0=>'No', 1=>'Yes');
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$settings->add($setting);

// Custom CSS file
$name = 'theme_themesmb_lite/customcss';
$title = get_string('customcss','theme_themesmb_lite');
$description = get_string('customcssdesc', 'theme_aerie');
$setting = new admin_setting_configtextarea($name, $title, $description, '');
$settings->add($setting);

}