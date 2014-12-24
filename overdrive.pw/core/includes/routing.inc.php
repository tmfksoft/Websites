<?php
class route {
	private static $route = array();
	public static function _private($regex,$callback) {
		self::$route[] = array("preg"=>$regex,"cb"=>$callback,"access"=>"private");
	}
	public static function _public($regex,$callback) {
		self::$route[] = array("preg"=>$regex,"cb"=>$callback,"access"=>"public");
	}
	public static function _global($regex,$callback) {
		self::$route[] = array("preg"=>$regex,"cb"=>$callback,"access"=>"global");
	}
	public static function execute() {
		$path = "/".$_SERVER['QUERY_STRING'];
		$routed = true; // Auto assume it to have routed.
		if ($_SESSION['UID'] > 0) {
		}
		foreach (self::$route as $ar) {
			$preg = "/^".str_replace("/","\/",$ar['preg'])."[\/]?$/";
			$match = preg_match($preg,$path,$matches);
			if ($match > 0) {
				if ($_SESSION['UID'] > 0 && $ar['access'] == "private") {
					$res = $ar['cb']($matches);
					if ($res == false) {
						$routed = false;
					}
					return $res;
				} else if ($_SESSION['UID'] == 0 && $ar['access'] == "public") {
					$res = $ar['cb']($matches);
					if ($res == false) {
						$routed = false;
					}
					return $res;
				} else if ($ar['access'] == "global") {
					$res = $ar['cb']($matches);
					if ($res == false) {
						$routed = false;
					}
					return $res;
				}
			}
		}
	}
}
?>