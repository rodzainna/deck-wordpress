<?php 
/**
 * Strings utility function
 */

if (!defined('WPINC')) {
    header('Status: 403 Forbidden');
    header('HTTP/1.1 403 Forbidden');
    exit();
}

/**
* Theme strings
*/
final class MesasixStrings
{
    public $strings;

    public static function Instance()
    {
        static $inst = null;

        if ($inst === null) {
            $inst = new MesasixStrings();
        }

        return $inst;
    }

    private function __construct()
    {
        $this->getStrings();
    }

    private function getStrings()
    {
        $strings = _fetchFileContents(
            get_stylesheet_directory() . '/inc/strings.php',
            false
        );

        $this->strings = $strings ? $strings : [];
    }

    public function _gs($keys)
    {
        if (!(is_array($keys) && count($keys))) {
            return [];
        }

        return array_intersect_key($this->strings, array_flip($keys));
    }

    public function _g($key, $default = '')
    {
        return isset($this->strings[$key]) ? $this->strings[$key]: $default;
    }
}

// EOF
