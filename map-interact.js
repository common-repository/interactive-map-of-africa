function isTouchEnabled() {
 	return (('ontouchstart' in window)
      	|| (navigator.MaxTouchPoints > 0)
      	|| (navigator.msMaxTouchPoints > 0));
}
jQuery(function(){
	jQuery("path[id^=\"afr_\"]").each(function (i, e) {
		addEvent( jQuery(e).attr('id') );
	});
})
function addEvent(id,relationId){
	var _obj = jQuery('#'+id);
	var _Textobj = jQuery('#'+id+','+'#'+afr_config[id]['visnames']);
	var _h = jQuery('#map').height();

	jQuery('#'+['visnames']).attr({'fill':afr_config['default']['visnames']});

		_obj.attr({'fill':afr_config[id]['upclr'],'stroke':afr_config['default']['borderclr']});
		_Textobj.attr({'cursor':'default'});
		if(afr_config[id]['enbl'] == true){
			if (isTouchEnabled()) {
				_Textobj.on('touchstart', function(e){
					var touch = e.originalEvent.touches[0];
					var x=touch.pageX-10, y=touch.pageY+(-15);
					var maptipw=jQuery('#tipafr').outerWidth(), maptiph=jQuery('#tipafr').outerHeight(), 
					x=(x+maptipw>jQuery(document).scrollLeft()+jQuery(window).width())? x-maptipw-(20*2) : x
					y=(y+maptiph>jQuery(document).scrollTop()+jQuery(window).height())? jQuery(document).scrollTop()+jQuery(window).height()-maptiph-10 : y
					if(afr_config[id]['targt'] != 'none'){
						jQuery('#'+id).css({'fill':afr_config[id]['dwnclr']});
					}
					jQuery('#tipafr').show().html(afr_config[id]['hover']);
					jQuery('#tipafr').css({left:x, top:y})
				})
				_Textobj.on('touchend', function(){
					jQuery('#'+id).css({'fill':afr_config[id]['upclr']});
					if(afr_config[id]['targt'] == '_blank'){
						window.open(afr_config[id]['url']);	
					}else if(afr_config[id]['targt'] == '_self'){
						window.parent.location.href=afr_config[id]['url'];
					}
					jQuery('#tipafr').hide();
				})
			}
			_Textobj.attr({'cursor':'pointer'});
			_Textobj.hover(function(){
				//moving in/out effect
				jQuery('#tipafr').show().html(afr_config[id]['hover']);
				_obj.css({'fill':afr_config[id]['ovrclr']})
			},function(){
				jQuery('#tipafr').hide();
				jQuery('#'+id).css({'fill':afr_config[id]['upclr']});
			})
			if(afr_config[id]['targt'] != 'none'){
				//clicking effect
				_Textobj.mousedown(function(){
					jQuery('#'+id).css({'fill':afr_config[id]['dwnclr']});
				})
			}
			_Textobj.mouseup(function(){
				jQuery('#'+id).css({'fill':afr_config[id]['ovrclr']});
				if(afr_config[id]['targt'] == '_blank'){
					window.open(afr_config[id]['url']);	
				}else if(afr_config[id]['targt'] == '_self'){
					window.parent.location.href=afr_config[id]['url'];
				}
			})
			_Textobj.mousemove(function(e){
				var x=e.pageX+10, y=e.pageY+15;
				var maptipw=jQuery('#tipafr').outerWidth(), maptiph=jQuery('#tipafr').outerHeight(), 
				x=(x+maptipw>jQuery(document).scrollLeft()+jQuery(window).width())? x-maptipw-(20*2) : x
				y=(y+maptiph>jQuery(document).scrollTop()+jQuery(window).height())? jQuery(document).scrollTop()+jQuery(window).height()-maptiph-10 : y
				jQuery('#tipafr').css({left:x, top:y})
			})
		}	
}