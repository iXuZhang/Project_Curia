<?php
function anielgg_init() {	
elgg_extend_view("css/elgg", "css/materialanimate");
elgg_extend_view("page/default", "type/order");
elgg_extend_view("page/default", "js/anijs");
elgg_extend_view("page/default", "js/anijs-helper-dom");
elgg_extend_view("page/default", "js/anijs-helper-scrollreveal-min");	
}
elgg_register_event_handler('init','system','anielgg_init'); 




