<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * LogMeIn
 *
 * @package		ExpressionEngine
 * @category	Plugin
 * @author		Matthew Kirkpatrick
 * @copyright   Copyright (c) 2020, Matthew Kirkpatrick
 * @link		https://github.com/javashakes
 */

// config
include(PATH_THIRD.'logmein/config.php');

return array(
    'name'              => LOGMEIN_NAME,
    'version'           => LOGMEIN_VERSION,
    'author'            => LOGMEIN_AUTHOR,
    'author_url'        => LOGMEIN_AUTHOR_URL,
    'docs_url'          => LOGMEIN_DOCS,
    'description'       => LOGMEIN_DESC,
    'namespace'         => LOGMEIN_NAMESPACE,
    'settings_exist'    => FALSE
);

/* End of file addon.setup.php */
/* Location: /system/expressionengine/third_party/logmein/addon.setup.php */