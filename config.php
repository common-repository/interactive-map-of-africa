<?php $afr_map = $this->options; ?>
var afr_config = {
	'default':{
		'borderclr':'<?php echo $afr_map['borderclr']; ?>',
		'visnames':'<?php echo $afr_map['visnames']; ?>',
	}<?php echo (isset($afr_map['url_1']))?',':''; ?><?php $i = 1; 	while (isset($afr_map['url_'.$i])) { ?>'afr_<?php echo $i; ?>':{
		'hover': '<?php echo str_replace(array("\n","\r","\r\n","'"),array('','','','’'), is_array($afr_map['info_'.$i]) ?
				array_map('stripslashes_deep', $afr_map['info_'.$i]) : stripslashes($afr_map['info_'.$i])); ?>',
		'url':'<?php echo $afr_map['url_'.$i]; ?>',
		'targt':'<?php echo $afr_map['turl_'.$i]; ?>',
		'upclr':'<?php echo $afr_map['upclr_'.$i]; ?>',
		'ovrclr':'<?php echo $afr_map['ovrclr_'.$i]; ?>',
		'dwnclr':'<?php echo $afr_map['dwnclr_'.$i]; ?>',
		'enbl':<?php echo $afr_map['enbl_'.$i]=='1'?'true':'false'; ?>,
		'visnames':'afr_vn<?php echo $i; ?>',
		}
		<?php echo (isset($afr_map['url_'.($i+1)]))?',':''; ?><?php $i++;} ?>
}