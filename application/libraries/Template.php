<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Template {
		var $template_data = array();
		
		var $CI = array();
		
		function template() {
		 $this->CI =& get_instance();
		}
		
		function set($name, $value)
		{
			$this->template_data[$name] = $value;
		}
		
		function set_region($name, $view = '' , $view_data = array(), $return = FALSE)
		{
			$this->set($name, $this->CI->load->view($view, $view_data, TRUE));			
		}
	
		function load($template = '', $view = '' , $view_data = array(), $return = FALSE)
		{               
			return $this->CI->load->view($template, $this->template_data, $return);
		}
		
}

/* End of file Template.php */
/* Location: ./system/application/libraries/Template.php */