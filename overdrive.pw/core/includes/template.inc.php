<?php
class template {
	public static function setHeader($value) {
		global $_ODRIVE;
		if ($value == true) {
			$_ODRIVE['template']['header'] = true;
		} else if ($value == false) {
			$_ODRIVE['template']['header'] = false;
		}
	}
	public static function setFooter($value) {
		global $_ODRIVE;
		if ($value == true) {
			$_ODRIVE['template']['footer'] = true;
		} else if ($value == false) {
			$_ODRIVE['template']['footer'] = false;
		}
	}
	public static function load($section,$page) {
		global $_ODRIVE;
		$_ODRIVE['template']['vars']['request_page'] = $page;
		$_ODRIVE['template']['vars']['request_section'] = $section;
		if ($section) {
			if (file_exists("core/pages/".$section."/".$page.".php")) {
				// Magic!
				ob_start();
				include("core/pages/".$section."/".$page.".php");
				$content = ob_get_contents();
				ob_end_clean();
			} else {
				ob_start();
				include("core/pages/404.php");
				$content = ob_get_contents();
				ob_end_clean();
			}
		} else {
			ob_start();
			include("core/pages/".$page.".php");
			$content = ob_get_contents();
			ob_end_clean();
		}
		self::loadHeader($section);
		echo $content;
		self::loadFooter($section);
	}
	public static function loadHeader($section = "home") {
		global $_ODRIVE;
		if ($_ODRIVE['template']['header']) {
			if (file_exists("core/tmpl/{$section}/header.php")) {
				include("core/tmpl/{$section}/header.php");
			}
		}
	}
	public static function loadFooter($section = "home") {
		global $_ODRIVE;
		if ($_ODRIVE['template']['footer']) {
			if (file_exists("core/tmpl/{$section}/footer.php")) {
				include("core/tmpl/{$section}/footer.php");
			}
		}
	}
	public static function __($item) {
		// To get an item.
		global $_ODRIVE;
		if (isset($_ODRIVE['template']['vars'][$item])) {
			return $_ODRIVE['template']['vars'][$item];
		} else {
			return NULL;
		}
	}
	public static function set($item,$value = NULL) {
		global $_ODRIVE;
		$_ODRIVE['template']['vars'][$item] = $value;
	}
	
	// Active Class
	public static function active($page) {
		global $_ODRIVE;
		if (isset($_ODRIVE['template']['vars']['page'])) {
			if (strtolower($_ODRIVE['template']['vars']['request_page']) == strtolower($page)) {
				return 'class="active"';
			}
		}
	}
}
?>