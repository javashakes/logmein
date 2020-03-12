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

// EE v2 backward compatibility
// Ignored by EE v3+
$plugin_info = array(
    'pi_name'           => LOGMEIN_NAME,
    'pi_version'        => LOGMEIN_VERSION,
    'pi_author'         => LOGMEIN_AUTHOR,
    'pi_author_url'     => LOGMEIN_AUTHOR_URL,
    'pi_description'    => LOGMEIN_DESC
);

class Logmein 
{	

    /**
     * Constructor
     *
     * @access  public
     * @return  string
    */
    public function __construct()
    {
        // default output
        $this->return_data = '' . LOGMEIN_NAME . '<br>' . LOGMEIN_DESC;
    }
	
    /**
     * Log the user in
     *
     * @access  public
     * @return  empty
    */
	function now()
	{
		// if submitted, checks if member group is correct
		if (ee()->TMPL->fetch_param('if_member_group') AND ee()->session->userdata['group_id'] != ee()->TMPL->fetch_param('if_member_group')) {
			return;
		}

		// check if username was submitted
		if (!$username = ee()->TMPL->fetch_param('username')) { return; }
		
		// fetch member
		ee()->db->where('username', $username);
		$query = ee()->db->get('members');
		
		// if invalid username
		if (!$row = $query->row()) { return; }
		
		// load authentication library
		ee()->load->library('auth');
		
		// create authenticated session
		$sess = new Auth_result($row);
		
		// set default cookie expiration to one day
		$expire = ee()->TMPL->fetch_param('expire', 60*60*24);
		$sess->remember_me($expire);
		
		// start session		
		$sess->start_session();
	}

}

/* End of file pi.logmein.php */
/* Location: ./system/expressionengine/third_party/logmein/pi.logmein.php */