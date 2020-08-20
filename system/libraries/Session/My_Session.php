<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class MY_Session extends CI_Session 
{
  public function __construct($params = array())
	{
		log_message('debug', "Session Class Initialized");
		// Set the super object to a local variable for use throughout the class
		$this->CI =& get_instance();
		// Set all the session preferences, which can either be set
		// manually via the $params array above or via the config file
		foreach (array('sess_encrypt_cookie', 'sess_use_database', 'sess_table_name', 'sess_expiration', 'sess_expire_on_close', 'sess_match_ip', 'sess_match_useragent', 'sess_cookie_name', 'cookie_path', 'cookie_domain', 'cookie_secure', 'sess_time_to_update', 'time_reference', 'cookie_prefix', 'encryption_key') as $key)
		{
			$this->$key = (isset($params[$key])) ? $params[$key] : $this->CI->config->item($key);
		}
		if ($this->encryption_key == '')
		{
			show_error('In order to use the Session class you are required to set an encryption key in your config file.');
		}
		// Load the string helper so we can use the strip_slashes() function
		$this->CI->load->helper('string');
		
		//using native sessions so no DB
		$this->sess_use_database = FALSE;
		
		// Do we need encryption? If so, load the encryption class
		/*
		if ($this->sess_encrypt_cookie == TRUE)
		{
			$this->CI->load->library('encrypt');
		}
		// Are we using a database?  If so, load it
		if ($this->sess_use_database === TRUE AND $this->sess_table_name != '')
		{
			$this->CI->load->database();
		}
		*/
		
		// Set the "now" time.  Can either be GMT or server time, based on the
		// config prefs.  We use this to set the "last activity" time
		$this->now = $this->_get_time();
		// Set the session length. If the session expiration is
		// set to zero we'll set the expiration two years from now.
		if ($this->sess_expiration == 0)
		{
			$this->sess_expiration = (60*60*24*365*2);
		}
		
		// Set the cookie name
		$this->sess_cookie_name = $this->cookie_prefix.$this->sess_cookie_name;
		// Run the Session routine. If a session doesn't exist we'll
		// create a new one.  If it does, we'll update it.
		session_start();
		ini_set('session.gc_maxlifetime', 3600);
		ini_set('session.cookie_lifetime', 0);
		
		if ( ! $this->sess_read())
		{
			$this->sess_create();
		}
		else
		{
			$this->sess_update();
		}
		// Delete 'old' flashdata (from last request)
		$this->_flashdata_sweep();
		// Mark all new flashdata as old (data will be deleted before next request)
		$this->_flashdata_mark();
		// Delete expired sessions if necessary
		//$this->_sess_gc();
		log_message('debug', "Session routines successfully run");
	}
	
	function sess_create()
	{
		
	}
	
	function sess_update()
	{
		
	}
	
	
	function _set_cookie($cookie_data = NULL)
	{
		
	}
	
	
	function userdata($item)
	{
		return ( ! isset($_SESSION[$item])) ? FALSE : $_SESSION[$item];
	}
	
	function all_userdata()
	{
		return ( ! isset($_SESSION)) ? FALSE : $_SESSION;
	}
	
	function set_userdata($newdata = array(), $newval = '')
	{
		if (is_string($newdata))
		{
			$newdata = array($newdata => $newval);
		}
		if (count($newdata) > 0)
		{
			foreach ($newdata as $key => $val)
			{
				$_SESSION[$key] = $val;
			}
		}
		$this->sess_write();
	}
	
	function unset_userdata($newdata = array())
	{
		if (is_string($newdata))
		{
			$newdata = array($newdata => '');
		}
		if (count($newdata) > 0)
		{
			foreach ($newdata as $key => $val)
			{
				unset($_SESSION[$key]);
			}
		}
		$this->sess_write();
	}
	
	function sess_read()
	{
		// Session is valid!
		$this->userdata = $_SESSION;
		return TRUE;
	}
	
	function sess_destroy()
	{
		$_SESSION = array();
	}
}