<script language="javascript"  type="text/javascript"   src="<{$rootpath}>/js/showcase.js"></script>
<div id="showcase_right">
	<{if $banner_count > 0 }>
		<{foreach item=banner  from=$banner_list}>
	        <a href="#">
	          <img src="<{$rootpath}>/images/hotel/<{$banner.image}>" width="730" alt="<{$banner.hotel_name}>   <{$LANG.hotel_list.address}> : <{$banner.hotel_address}>"/>
	        </a>
		<{/foreach}>
		<script>
			$(document).ready(function(){
				$("#showcase_right").showcase({
					css: { "z-index": "1" },
			        //animation: { type: "fade" },
			   	    titleBar: { autoHide: false, 
			   	    			css: { fontStyle: "normal" },
			   	    			enabled:false
			   	    		  },
			     	navigator: { position: "bottom-right",
								 css: { padding: "0px",
								 		margin: "0px 0px 1px 1px" },
								 showNumber: true,
								 autoHide: false
							   }
		        });
			});
		</script>
	<{else}>
	<!--
		<a href="###" >
			<img src="<{$rootpath}>/images/img_blank_banner.jpg" width="730" height="260" alt="">
		</a>
		-->
	<{/if}>
</div>