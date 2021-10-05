<?php
/**
 * Integrates live translation of messages,
 * instead of cf7´s weird approach to only translate once for the settings
 *
 * This makes it possible to use one form in multiple languages
 *
 * Requirement is, that the messages in the form are set to their default english texts,
 * so the translation can work
 *
 * todo:
 * make an option to override the configured messages
 * by using Helpers::get_untranslated_default_messages()
 * and get the default messages in translate_cf7_messages() by the $status
 *
 */
namespace mlcf7pll\frontend;

use mlcf7pll\Helpers;

new Messages_Translation();
class Messages_Translation
{

    public function __construct()
    {

        if(is_admin())
            return;

        add_filter( 'load_textdomain_mofile',  [$this, 'load_textdomain_mofile']  );

        add_filter( 'wpcf7_display_message', [$this, 'translate_cf7_messages'], 90, 2);
    }




    /**
     * fix translation of cf7 messages
     * force loading the translation language version that is defined in polylang cookie
     * whyever this does not work out of the box, especially in AJAX
     */
    function load_textdomain_mofile( $mofile ) {

        // if the cookie is not set, we cannot retrieve the current language
        if(empty($_COOKIE['pll_language'])){
            return $mofile;
        }

        $user_locale = get_user_locale();
        $pll_locale = Helpers::pll_get_locale_by_slug($_COOKIE['pll_language']);

        return str_replace( "{$user_locale}.mo", "{$pll_locale}.mo", $mofile );
    }


    /**
     * translate the cf7 messages
     * only works with the standard messages that are also defined in the translation files
     * if these are changed in the form settings, the translation does not work
     */
    function translate_cf7_messages($message, $status){

        // make sure the cf7 textdomain is loaded
        // this may not be the case if the base language of the site is US EN
        Helpers::maybe_load_cf7_textdomain();

        $translated = __($message, 'contact-form-7');
        return $translated;
    }


}






