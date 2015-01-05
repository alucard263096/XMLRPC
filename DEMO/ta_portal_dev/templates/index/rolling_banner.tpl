<{if $smarty.session.city_id==1}>
<script language="javascript"  type="text/javascript"   src="<{$rootpath}>/js/showcase.js"></script>
<div id="showcase_right">
	        <a  href="#" >
	          <img src="images/gz_movie_select_a.jpg" alt="">
	        </a>
	        <a  href="#" >
	          <img src="images/gz_movie_select_b" alt="">
	        </a>
	        <a  href="#" >
	          <img src="images/gz_movie_select_c" alt="">
	        </a>
		<script>
			$(document).ready(function(){
				$("#showcase_right").showcase({
					css: { "z-index": "1" },
			        //animation: { type: "fade" },
			   	    titleBar: { autoHide: false, 
			   	    			css: { fontStyle: "normal" }
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
</div>
<{elseif $smarty.session.city_id==2}>
<script language="javascript"  type="text/javascript"   src="<{$rootpath}>/js/showcase.js"></script>
<div id="showcase_right">
	        <a  href="#" >
	          <img src="images/h_movie_select1.jpg" alt="">
	        </a>
	        <a  href="#" >
	          <img src="images/h_movie_select2.jpg" alt="">
	        </a>
	        <a  href="#" >
	          <img src="images/h_movie_select3.jpg" alt="">
	        </a>
		<script>
			$(document).ready(function(){
				$("#showcase_right").showcase({
					css: { "z-index": "1" },
			        //animation: { type: "fade" },
			   	    titleBar: { autoHide: false, 
			   	    			css: { fontStyle: "normal" }
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
</div>
<{elseif $smarty.session.city_id==3}>
<script language="javascript"  type="text/javascript"   src="<{$rootpath}>/js/showcase.js"></script>
<div id="showcase_right">
	        <a  href="#" >
	          <img src="images/m_movie_select01.jpg" alt="">
	        </a>
	        <a  href="#" >
	          <img src="images/m_movie_select02.jpg" alt="">
	        </a>
	        <a  href="#" >
	          <img src="images/m_movie_select03.jpg" alt="">
	        </a>
		<script>
			$(document).ready(function(){
				$("#showcase_right").showcase({
					css: { "z-index": "1" },
			        //animation: { type: "fade" },
			   	    titleBar: { autoHide: false, 
			   	    			css: { fontStyle: "normal" }
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
</div>
<{/if}>
