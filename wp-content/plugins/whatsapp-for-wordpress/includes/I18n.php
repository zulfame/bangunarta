<?php
namespace NTA_WhatsApp;

defined('ABSPATH') || exit;
/**
 * I18n Logic
 */
class I18n {
  public static function loadPluginTextdomain() {
    if (function_exists('determine_locale')) {
      $locale = determine_locale();
    } else {
      $locale = is_admin() ? get_user_locale() : get_locale();
    }
    unload_textdomain('ninjateam-whatsapp');
    load_textdomain('ninjateam-whatsapp', NTA_WHATSAPP_PLUGIN_DIR . '/languages/' . $locale . '.mo');
    load_plugin_textdomain('ninjateam-whatsapp', false, NTA_WHATSAPP_PLUGIN_DIR . '/languages/');
  }

  public static function getTranslation(){
    $translation = array(
      'online' => __('Online', 'ninjateam-whatsapp'),
      'offline' => __('Offline', 'ninjateam-whatsapp')
    );

    return $translation;
  }
}
