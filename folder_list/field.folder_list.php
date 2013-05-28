<?php defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Folder List Field Type
 *
 * @package		Addons\Field Types
 * @author		Jamie Blacker, Amity Web Solutions
 */
class Field_folder_list
{
	public $field_type_slug    = 'folder_list';
	public $db_col_type        = 'int';
	public $version            = '1.0';
	public $author             = array('name'=>'Jamie Blacker', 'url'=>'');
	
	// --------------------------------------------------------------------------

	/**
	 * Output form input
	 *
	 * @param	array
	 * @param	array
	 * @return	string
	 */
	public function form_output($data, $entry_id, $field)
	{
		$this->CI->load->library('files/files');
		$this->CI->load->model('files/file_folders_m');

		// Get Folder List and put in an array
		$folders = $this->CI->file_folders_m->get_folders();
		foreach ($folders as $folder):
			$folders_array[$folder->id] = repeater('--', $folder->depth) . ' ' .$folder->name;
		endforeach;
		
		$folder_select = form_dropdown($data['form_slug'], $folders_array, $data['value'], 'id="'.$data['form_slug'].'"');
		
		return $folder_select;
	}
	
	/**
	 * Process before outputting
	 *
	 * @param	array
	 * @param	array
	 * @return	string
	 */
	public function pre_output($input)
	{
		$this->CI->load->library('files/files');
		$this->CI->load->model('files/file_folders_m');
		
		$folders = $this->CI->file_folders_m->get_folders();
		$folder = $folders[$input];
		
		return $folder->name;
	}
	
	/**
	 * Process before outputting
	 *
	 * @param	array
	 * @param	array
	 * @return	string
	 */
	public function pre_output_plugin($input)
	{
		$this->CI->load->library('files/files');
		$this->CI->load->model('files/file_folders_m');
		
		$folders = $this->CI->file_folders_m->get_folders();
		$folder = $folders[$input];
		
		return $folder;
	}
}
