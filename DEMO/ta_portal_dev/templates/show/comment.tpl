<{include file="$smarty_root/header.tpl" }>
<table width="960" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="730" valign="top">
			<{include file="$smarty_root/event_common/comment.tpl" }>
        </td>
        <td width="25"><img src="<{$rootpath}>/images/spacer.gif" width="25" height="1"></td>
        <td width="205" valign="top">
        
        
        <!--==============//////    Start Right Adv Banner  \\\\\\=========== -->
        <{include file="$smarty_root/event_common/box.tpl" }>
        <{include file="$smarty_root/event_common/banner_list.tpl" }>
        <!--==============//////    End Right Adv Banner  \\\\\\=========== -->        </td>
      </tr>
    </table>

<script type="text/javascript">	
	var PopupLayer1 = new PopupLayer({trigger:"#ele1",popupBlk:"#blk1",closeBtn:"#close1",useFx:true});
	$(function() {		
		$('#div2').css('display','none');
		$('#div2_load').css('display','');
		$('#div3').css('display','none');
		$('#div3_load').css('display','');
		$('#div2').load("hot_movie.php", {"action":"resetLocation"}, function() {
			$('#div2').css('display','');
			$('#div2_load').css('display','none');			
		    
		});
		$('#div3').load("hot_movie.php", {"action":"resetCriteria"}, function() {
			$('#div3').css('display','');
			$('#div3_load').css('display','none');
		});
		
	});
	<{include file="$smarty_root/score/score_js.tpl" }>
	function changeCity(city_id,long_name) {
		var url = "<{$file_url}>";
		$.post(url, {"action":"resetLocation","city_id":city_id}, function() {
			window.location.reload();
		});
		$('#header_selecttext_div').html('<span class="header_selecttext">'+long_name+'</span>');
		PopupLayer1.close();
	}
	
	function searchMovie(){
		var keyword=$('#keyword').val();
		$('#div3').css('display','none');
		$('#div3_load').css('display','');
		var url = "hot_movie.php";
		$('#div3').load(url, {"action":"resetCriteria","keyword":keyword}, function() {
			$('#div3').css('display','');
			$('#div3_load').css('display','none');
		});
	}
	
	
	
	function changeDistrict(district_id) {
		$('#div2').css('display','none');
		$('#div2_load').css('display','');
		$('#div3').css('display','none');
		$('#div3_load').css('display','');
		var url = "hot_movie.php";
		$('#div2').load(url, {"action":"resetLocation","district_id":district_id}, function() {
			$('#div2').css('display','');
			$('#div2_load').css('display','none');
		});
		$('#div3').load(url, {"action":"resetCriteria","district_id":district_id}, function() {
			$('#div3').css('display','');
			$('#div3_load').css('display','none');
		});
		PopupLayer5.close();
	}
	
	
	function changeVenue() {
		$('#activity_id').attr('value', '-1');
		var venue=$('#venue').val();
		$('#div3').css('display','none');
		$('#div3_load').css('display','');
		var url = "hot_movie.php";
		if (venue.substring(0,1) == 'c') {
			venue_id = venue.substring(1);
			$('#div3').load(url, {"action":"resetCriteria","organizer_id":venue_id}, function() {
				$('#div3').css('display','');
				$('#div3_load').css('display','none');
			});
		} else if (venue.substring(0,1) == 'v') {
			venue_id = venue.substring(1);
			$('#div3').load(url, {"action":"resetCriteria","venue_id":venue_id}, function() {
				$('#div3').css('display','');
				$('#div3_load').css('display','none');
			});
		} else {
			$('#div3').css('display','');
			$('#div3_load').css('display','none');
		}
	}
	
	
	function changeMovie() {
		$('#venue').attr('value', 'v-1');
		var activity_id=$('#activity_id').val();
		$('#div3').css('display','none');
		$('#div3_load').css('display','');
		var url = "hot_movie.php";
		$('#div3').load(url, {"action":"resetCriteria","activity_id":activity_id}, function() {
			$('#div3').css('display','');
			$('#div3_load').css('display','none');
		});
	}
</script>

<{include file="$smarty_root/footer.tpl" }>