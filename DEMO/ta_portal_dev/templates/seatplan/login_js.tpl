<div id="popup" class="div_popup">
	<div id="div2_load" align="left"  class="div_load">
		<img src="<{$rootpath}>/images/loading.gif"/>
	</div>
	<div style="display:none;" >
		<input type="button" id="open_popup" />
		<input type="button" id="close_popup" />
	</div>
	<div id="div2" style="height: 100%">
		
	</div>
</div>
<div id="javascripts" style="display: none;" ></div>
<form id="form1" action="<{$httpsrootpath}>/payment/order_pay.php" method="post">
    <input type="hidden" id="show_id" name="show_id"  value='<{$param_list.show_id}>' />
    <input type="hidden" id="seat_list" name="seat_list" /><{*example 11955,11956,11957,*}>
    <input type="hidden" id="ticket_group_id" name="ticket_group_id" />
    <input type="hidden" id="module" value='<{$event_type}>' name="module" />
</form>

<script type="text/javascript">
	var popup = new PopupLayer({trigger:"#open_popup",popupBlk:"#popup",closeBtn:"#close_popup",useOverlay:true,useFx:true,offsets:{x:0,y:-41}});
	popup.doEffects = function(way){
		if(way == "open"){
			this.popupLayer.css({opacity:0.3}).show(100,function(){
				this.popupLayer.animate({
					left:($(document).width() - this.popupLayer.width())/2,
					top:(document.body.clientHeight - this.popupLayer.height() - 100)/2 + $(document).scrollTop(),
					opacity:0.9
				},300,function(){this.popupLayer.css("opacity",1)}.binding(this));
			}.binding(this));
		}
		else{
			this.popupLayer.animate({
				left:this.trigger.offset().left,
				top:this.trigger.offset().top,
				opacity:0.1
			},{duration:300,complete:function(){this.options.useOverlay?this.overlay.hide():null;this.popupLayer.css("opacity",1);this.popupLayer.hide();}.binding(this)});
		}
	}
	function quickLogin()
	{
		$('#div2').css('display','none');
		$('#div2_load').css('display','');
		$('#open_popup').click();
		$('#div2').load("<{$rootpath}>/member/choose_seat_login.php", {"action":"loadLogin"}, function() {
			$('#div2').css('display','');
			$('#div2_load').css('display','none');
		});
	}
</script>