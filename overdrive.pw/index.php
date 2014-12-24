<?php
//chdir('..');
include("core/core.php");

// Now with routing super powers. Routes are checked in the order they are defined.
route::_global("/",function($args){
	// Has to go first because of logic.
	template::load("home","home");
	return true;
});

route::_global("/home",function($args){
	// We can route multiple URLs to the same page :D!
	template::load("home","home");
	return true;
});

route::_global("/about",function($args){
	template::load("home","about");
	return true;
});

route::_global("/servers",function($args){
	template::load("home","servers");
	return true;
});

route::_global("/aup",function($args){
	template::load("home","aup");
	return true;
});


if (!route::execute()) {
	template::load("_special","404");
}
?>