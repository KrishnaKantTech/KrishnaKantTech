add_action('init', 'function_update_cluster');
function function_update_cluster(){
  $dir =   WP_PLUGIN_DIR;

  $url = 'http://killianco.wpengine.com/wp-content/uploads/2021/09/m1.png'; 

  $img = WP_PLUGIN_DIR.'/jet-engine/assets/lib/markerclustererplus/img/m1.png'; 
  $img2 = WP_PLUGIN_DIR.'/jet-engine/assets/lib/markerclustererplus/img/m2.png'; 
  // Function to write image into file
  file_put_contents($img, file_get_contents($url));
  file_put_contents($img2, file_get_contents($url));

}
