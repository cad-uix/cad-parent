/* 
 *
 * Script for adding pretty photo rel to wp-image
 *
 * @package oracle
 * @author marcelbadua
 */

jQuery(function($){
  
  $("img[class^='wp-image-']").parent().attr('rel', 'prettyPhoto[post-images]');

});
