<?php
/*
 * e107 Bootstrap CMS
 *
 * Copyright (C) 2008-2015 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 * IMPORTANT: Make sure the redirect script uses the following code to load class2.php:
 *
 * 	if (!defined('e107_INIT'))
 * 	{
 * 		require_once("../../class2.php");
 * 	}
 *
 */

if (!defined('e107_INIT')) { exit; }

// v2.x Standard  - Simple mod-rewrite module.

class download_url // plugin-folder + '_url'
{

	public $alias = 'download';

	function config()
	{
		$config = array();

		$config['index'] = array(
		//	'regex'			=> '^download/?$', 						// matched against url, and if true, redirected to 'redirect' below.
			'alias'         => 'download',
			'sef'			=> '{alias}', 							// used by e107::url(); to create a url from the db table.
			'redirect'		=> '{e_PLUGIN}download/download.php', 		// file-path of what to load when the regex returns true.

		);

		$config['category'] = array(


		);

		$config['item']     = array(


		);

		$config['get']     = array(


		);

		return $config;
	}



}