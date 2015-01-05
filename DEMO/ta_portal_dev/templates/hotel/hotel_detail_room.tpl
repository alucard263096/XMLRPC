<script language="javascript"  type="text/javascript"   src="<{$rootpath}>/js/hotelDetail.js"></script>

<table  border="0"  cellpadding="0" cellspacing="0"　>
	<tr>
		<td class="titleText"><{$LANG.hotel_detail_room.room_reservation_data}>:</td>
		<td class="titleText"><{$LANG.hotel_detail_room.room_price}>:</td>
	</tr>
	<tr>
		<td class="textlen" ><{$LANG.hotel_detail_room.room_type}>:
			<select id="room_type" onChange="changeAll()">
			<!--  room_type  -->
			<{foreach key=i item=pl from=$room_type_list}>
				<option value="<{$i}>"><{$pl.name}></option>
			<{/foreach}>	
			</select>
		</td>
		<td rowspan="7">
			<div style="width:210px;height:320px;">
			<table border="0"  cellpadding="0" cellspacing="2" >
				<tr>
    				<td style="width:70px;height:50px;text-align:center;background:#EEEEEE;size:12px;font-weight:bold;" rowspan="2"><{$LANG.hotel_detail_room.room_reservation_date}></td>
    				<td style="height:25px;text-align:center;background:#EEEEEE;size:12px;font-weight:bold;" colspan="2"><div id="bookingName"><{$room_type_list[0].name}><{$LANG.hotel_detail_room.price}><div></td>
  				</tr>
  				<tr>
    				<td style="width:70px;height:25px;text-align:center;background:#EEEEEE;size:12px;font-weight:bold;"><{$LANG.hotel_detail_room.common_price}></td>
    				<td style="width:70px;height:25px;text-align:center;color:red;background:#EEEEEE;size:12px;font-weight:bold;"><{$LANG.hotel_detail_room.member_price}></td>
  				</tr>
  				<tr><td colspan="3">
  					
  					<table id="priceTbl" border="0"  cellpadding="0" cellspacing="0">
  					</table>
  					<!-- more info -->
					<div id="detail" style="POSITION: absolute;width:210px" title="ddd"></div>
  				</td></ttr>
			</table>
			</div>
			
		</td>
	</tr>
												
	<tr>
		<td class="textlen" ><{$LANG.hotel_detail_room.room_number}>:
			<select id="room_no" style="width:65px" onChange="changeAll()">
				<{foreach key=k from=$nums item=rs }>
					<option value="<{$k+1}>"><{$rs}></option>
				<{/foreach}>
			</select>
		</td>
		<tr><td class="textlen2"><{$LANG.hotel_detail_room.select_room_type}>:</td><td></td></tr>
		<tr><td class="textlen">
			<div id="bunkType">
				<table id="bunkTable">
				<tr><td><{$LANG.hotel_detail_room.room}>#1 - <{$LANG.hotel_detail_room.bed_type}>:
					<select id="bed_type1">
					<{foreach key=j item=bedtype from=$room_type_list[0].bed_type}>
						<option value="<{$bedtype.bed_type_id}>"><{$bedtype.bed_type_name}></option>
					<{/foreach}>	
					</select>
				</td></tr>
				</table>
			</div>
			</td>
			<td></td></tr>
												
		<!-- 房數＊人頭-->
		<tr><td class="textlen"><{$LANG.hotel_detail_room.adult_number}>:<input id="adult_count" type="text" value="2" style="width:200px" onblur="checkNum(this.value,this.id);"/></td><td></td></tr>
		<tr><td class="textlen"><{$LANG.hotel_detail_room.child_number}>:<input id="child_count" type="text" value="0" style="width:200px" onblur="checkNum(this.value,this.id);"/></td><td></td></tr>
		<tr><td class="textlen"><{$LANG.hotel_detail_room.others}>:<textarea id="remarks" type="textarea" style="overflow:hidden; overflow-x:hidden;width:200px;height:80px" onblur="checkRemarks(this.value);"></textarea></td><td></td></tr>
		<!--  每日房價顯示  -->
		<tr><td colspan="2">
			<table id="eachDayPrice"></table>
		</td></tr>
		<!-- 間隔-->
		<tr><td colspan="2"><img src="<{$rootpath}>/images/movie/spacer.gif" width="1" height="30"></td></tr>
											
		<tr>
			<td class="titleText"><{$LANG.hotel_detail_room.guest_name}>:</td>
			<td class="titleText"><{$LANG.hotel_detail_room.passport}>:</td>
		</tr>
		<!--循環 (人頭數)-->
		<tr><td class="textlen2" ><{$LANG.hotel_detail_room.guest_name}>1<{$LANG.hotel_detail_room.one}>:<img src="<{$rootpath}>/images/movie/spacer.gif" width="30" height="10" ><input type="text" id="customerName1" style="width:200px;border:2px solid #E67D08"/></td><td><select id='country1' style='width:200px;border:2px solid #E67D08;'><{foreach from=$country_list item=country}><option value='<{$country.country_id}>'><{$country.long_name}></option><{/foreach}></select></td></tr>
		<tr><td colspan="2">
		
		
		<table id="customerMsg" border="0">
			<tr><td class="textlen3"><{$LANG.hotel_detail_room.guest_name}>2:<img src="<{$rootpath}>/images/movie/spacer.gif" width="87" height="10" ><input type="text" id="customerName2" style="width:200px;"></td><td align="left"><select id='country2' style='width: 200px'><{foreach from=$country_list item=country}><option value='<{$country.country_id}>'><{$country.long_name}></option><{/foreach}></select></td></tr>
		</table>
		
		
		</td></tr>
		<!-- 間隔-->
		<tr><td colspan="2"><img src="<{$rootpath}>/images/movie/spacer.gif" width="1" height="30"></td></tr>
		<!--提交 -->
		<tr><td colspan="2" align="right"><input type="button" style="width:80px;height:30px" value="<{$LANG.hotel_detail_room.save}>" onClick="hotelSubmit()"></td></tr>
		<!-- 間隔-->
		<tr><td colspan="2"><img src="<{$rootpath}>/images/movie/spacer.gif" width="1" height="30">	
		</td></tr>
</table>

<script type="text/javascript">
	var headnum = new Array();
	var price = new Array();
	var roomtypeids = new Array();
	var roomTypeName = new Array();
	var price2 = new Array(new Array());
	var bookingDate = new Array(new Array());
	var memberPrice = new Array(new Array());
	var bedtype = new Array(new Array());
	var bedtypeId = new Array(new Array());
	var hotelShowId = new Array(new Array());
	
	<{foreach key=i item=lists from=$room_type_list}>{
		headnum[<{$i}>] = "<{$lists.max_head_count}>";
		price[<{$i}>] = "<{$lists.base_price}>";
		roomTypeName[<{$i}>] = "<{$lists.name}>";
		roomtypeids[<{$i}>] = "<{$lists.room_type_id}>";
		price2[<{$i}>] = new Array();
		memberPrice[<{$i}>] = new Array();
		bookingDate[<{$i}>] = new Array();
		bedtype[<{$i}>] = new Array();
		bedtypeId[<{$i}>] = new Array();
		hotelShowId[<{$i}>] = new Array();
			<{foreach key=j item=bt from=$lists.bed_type}>{
				bedtype[<{$i}>][<{$j}>] = "<{$bt.bed_type_name}>"; 
				bedtypeId[<{$i}>][<{$j}>] = "<{$bt.bed_type_id}>"; 
			}<{/foreach}>
			<{foreach key=k item=dd from=$lists.room_type_show_date_detail}>{
				price2[<{$i}>][<{$k}>] = "<{$dd.price}>";
				memberPrice[<{$i}>][<{$k}>] = "<{$dd.member_price}>"; 
				bookingDate[<{$i}>][<{$k}>] = "<{$dd.2}>";
				hotelShowId[<{$i}>][<{$k}>] = "<{$dd.hotel_show_id}>";
			}<{/foreach}>
	}<{/foreach}>
	
	$(function(){
		 $(document).bind("click", function(event)
            {
                $("#sdialog").dialog("destroy");
            });
		
		$("select").css("zindex","-1");
		changePrice();
	});
	
	function showDialog(){
		
		$("#sdialog").html("");
		var rtId = $("#room_type").val();
		var priceStr= "<table style='border-color:#E67D08;border-collapse:collapse;border:none;'><tr><td style='width:70px;height:50px;text-align:center;background:#EEEEEE;size:12px;font-weight:bold;border:solid #000 1px;' rowspan='2'>订房日期</td>"+
				"<td style='height:25px;text-align:center;background:#EEEEEE;size:12px;font-weight:bold;border:solid #000 1px;' colspan='2'><div id='bookingName'>"+roomTypeName[rtId]+"的房价<div></td>"+
				"</tr><tr><td style='width:70px;height:25px;text-align:center;background:#EEEEEE;size:12px;font-weight:bold;border:solid #000 1px;'>普通房价</td>"+
				"<td style='width:70px;height:25px;text-align:center;color:red;background:#EEEEEE;size:12px;font-weight:bold;border:solid #000 1px;'>会员房价</td></tr>"
		priceStr =  priceStr+getPrice(rtId,bookingDate[rtId].length,bookingDate[rtId].length,false)+"</table>";
		$("#sdialog").show();
		$('#sdialog').dialog({
			title:roomTypeName[rtId]+"<{$LANG.hotel_detail_room.all_room_price}>:",
			show: null,
        	autoOpen: false,
        	width: 250,
        	maxHeight:500,
        	draggable: false,
        	resizable:false
    	});
    	$('#dialog_link').click(function(event){
    			$("*").stop();
        		$("#sdialog").dialog("close");
                event.stopPropagation();
                var top = 100;
                var left = $(event.target).offset().left+100;
                $("#sdialog").html(priceStr);
                $("#sdialog").dialog("option", "position", [left, top]);
                $("#sdialog").dialog("open");
        		$('#sdialog').dialog('moveToTop');
        	return false;
    	});
    	
	}
	
	function changePrice(){
		var priceStr = "";
		var roomTypeId = $("#room_type").val();
		var inDate = $.trim($('#check_in_date').val());
		var outDate = $.trim($("#check_out_date").val());
		if(inDate != "" && outDate != ""){
		//	var checkInDate = new Date(inDate.split("-")[0],parseInt(inDate.split("-")[1])-1,inDate.split("-")[2]);
		//	var checkOutDate = new Date(outDate.split("-")[0],parseInt(outDate.split("-")[1])-1,outDate.split("-")[2]);
		//	var dayTimes = checkOutDate.getTime() - checkInDate.getTime();
		//	var daylens = Math.floor(dayTimes / (1000 * 60 * 60 * 24))+1;
			if(bookingDate== ""){
				alert("<{$LANG.hotel_detail_room.message}>");
				priceStr = "<tr><td colspan='3'><div class='textMore'><br><{$LANG.hotel_detail_room.no_room}><br><br><{$LANG.hotel_detail_room.pls_select}></div></td></tr>";
			}else{
				var daylens = bookingDate[roomTypeId].length;
				if(parseInt(daylens) < 4 && parseInt(daylens) >= 0){
					priceStr =  getPrice(roomTypeId,daylens,daylens);	
				}
				if(parseInt(daylens) >= 4) {
					priceStr =  getPrice(roomTypeId,4,daylens);																	
					priceStr = priceStr + "<tr><td colspan='3' align='right'><a href='javascript:void(0);' id='dialog_link'  style='text-decoration:none'><span onclick='showDialog();' class='textMore'>more...</span></a></td></tr>";
				}
			}
			$('#priceTbl').html("");
			$('#priceTbl').append(priceStr);
		}
	}
	
	function getPrice(roomTypeId,lens,lens2){  //房型，显示日期记录数，日期记录总数
		var priceString = "";
		var priceSum = 0;
		var numberPriceSum = 0;
		for(var n = 0 ; n < lens2 ; n++) {
			priceSum = priceSum + parseInt(price2[roomTypeId][n]);
			numberPriceSum = numberPriceSum + parseInt(memberPrice[roomTypeId][n]);
			
			if(n < lens){
			priceString = priceString+"<tr><td class='priceTbl'>"+bookingDate[roomTypeId][n].split("-")[1]+"月"+bookingDate[roomTypeId][n].split("-")[2]+"日</td>"+
									  "<td class='priceTbl'>￥"+price2[roomTypeId][n]+"</td>"+
									  "<td class='priceTbl2'>￥"+memberPrice[roomTypeId][n]+"</td></tr>";
			}	  
		}
		if(lens == 4 && arguments.length == 3){
			priceString = priceString + "<tr><td class='priceTbl'>.<br>.<br></td><td class='priceTbl'>.<br>.<br></td><td class='priceTbl'>.<br>.<br></td></tr>";
		}
		priceString = priceString + "<tr><td class='priceTbl'>入住<font color='#E67D08' size='5'>"+lens2+"</font><{$LANG.hotel_detail_room.day}><br><br><{$LANG.hotel_detail_room.room_money}>：</td>"+
									  "<td class='priceTbl'>￥"+priceSum+".00</td>"+
									  "<td class='priceTbl2'>￥"+numberPriceSum+".00</td></tr>";
		return priceString;
	}
	
	function getOption(roomTypeId){
		var htmlString = "";
		for(var k = 0 ; k < bedtype[roomTypeId].length; k++){
			htmlString = htmlString+"<option value='"+bedtypeId[roomTypeId][k]+"'>"+bedtype[roomTypeId][k]+"</option>";
		}
		return htmlString;
	}

	function changeAll(){
		var roomTypeId = $("#room_type").val();
		var roomHeadnum = headnum[roomTypeId];
		var roomPrice = price[roomTypeId];
		var num = $("#room_no").val();
		var cusCount =  eval(num*roomHeadnum);
		$("#roomMoney").text("￥"+roomPrice);
		$("#sum").text("￥"+eval($("#room_no").val()+"*"+roomPrice));
		$("#numslb").text("×"+num);
		$("#bunkTable").html("");
		
		var htmlStrings = getOption(roomTypeId);
		for(var i = 1 ; i <= num ; i++){
			if(i<10)
				$("#bunkTable").append("<tr><td>房间#0"+ i +" - 床位类型:<select id='bed_type"+i+"'>"+htmlStrings+"</select></td></tr>");
			else
				$("#bunkTable").append("<tr><td>房间#"+ i +" - 床位类型:<select id='bed_type"+i+"'>"+htmlStrings+"</select></td></tr>");
		}
		$("#sum").text("￥"+eval(num+"*"+price[$("#room_type").val()]));
		$("#adult_count").focus();
	
		$("#customerMsg").html("");
		if(cusCount < 5 ){
			setcustomerMsg(cusCount);
		}else{
			setcustomerMsg(4);    		
			$("#customerMsg").append("<tr><td align='right' colspan='2'><a href='javascript:void(0);' onclick='setMoreCustomerMsg("+cusCount+");' style='text-decoration:none'><span class='textMore'>more...</span></a></td></tr>");
		}
		$("#bookingName").text(roomTypeName[roomTypeId]+"的房价");
		changePrice();
	}
	
	function setMoreCustomerMsg(counts){
		$("#customerMsg").html("");
		setcustomerMsg(counts);
	}
	
	function setcustomerMsg(counts){	
		str = "";
		for(var k = 2; k <= counts ; k++){
			if(k<10) {
				str += "<tr><td class='textlen3'>入住客人姓名0"+k+":<img src='<{$rootpath}>/images/movie/spacer.gif' width='80' height='10' ><input type='text' id='customerName"+k+"' style='width:200px;'></td><td align='left'><select id='country"+k+"' style='width: 200px'><{foreach from=$country_list item=country}><option value='<{$country.country_id}>'><{$country.long_name}></option><{/foreach}></select></td></tr>";
			} else {
				str += "<tr><td class='textlen3'>入住客人姓名"+k+":<img src='<{$rootpath}>/images/movie/spacer.gif' width='80' height='10' ><input type='text' id='customerName"+k+"' style='width:200px;'></td><td align='left'><select id='country"+k+"' style='width: 200px'><{foreach from=$country_list item=country}><option value='<{$country.country_id}>'><{$country.long_name}></option><{/foreach}></select></td></tr>";
			}
		}
		$("#customerMsg").append(str);
	}
	function checkNum(value,id){
		if(!isNaN(value) & value.length > 0 & value.length < 5){
			$("#"+id).css({width:"200px",border:"2px solid #B4B4B4"});;
		}else{
			$("#"+id).css({width:"200px",border:"2px solid #FF0000"});
			$("#"+id).val("2");
			$("#"+id).focus();
		}
		
	}
	function checkRemarks(value){
		if(value.length > 400)
			$("#remarks").val(value.substr(0,400));
	}
	
	
	function hotelSubmit(){
		if($("#room_type") == "") return; //沒有記錄直接退出
		
		var roomtypeId = parseInt($("#room_type").val());	
		var clientName = $("#clientName").val();
		var honorific_id = $("#honorific_id").val();
		var email = $("#email").val();
		var countryId = $("#country").val();
		var phone = $("#phone").val();
		var fax = $("#fax").val();
		
		var roomType= roomtypeids[roomtypeId];
		var roomNo= $("#room_no").val();
		var adultCount= $("#adult_count").val();
		var childCount= $("#child_count").val();
		var remarks= $("#remarks").val();
			
		var bedTypeString = "";
		for(var m = 1 ; m <= parseInt(roomNo) ; m++){
			bedTypeString = bedTypeString + $("#bed_type"+m).val() + ",";
		}

		var hotelShowIdString = "";
		for(var c = 0 ; c < hotelShowId[roomtypeId].length ; c++){
			hotelShowIdString = hotelShowIdString + hotelShowId[roomtypeId][c] + ",";
		}

		var headnums = eval(headnum[$("#room_type").val()]+"*"+roomNo);
		var clientsString ="";
		for(var b = 1 ; b <= headnums ; b++){
			if($("#customerName"+b).val() !='')
			{
				clientsString = clientsString + $("#customerName"+b).val() + "()^_^()" + $("#country"+b).val() + "<!@-+@!>";
			}
		}
		//Booking 
		var flag = false;
		if($("#customerName1").val().length < 2){
			$("#customerName1").css("border","2px solid #FF0000");
			flag = true;
		}else{
			$("#customerName1").css("border","2px solid #B4B4B4");
			flag = false;
		}
		if ($('#hotelMsg').jVal({style:'cover',padding:3,border:1,wrap:true}) && !flag) 
		{
			$.post("hotel_detail.php", 
				{
					action:"booking",
					hotel_show_id:hotelShowIdString,
					client_name:clientName,
					honorific_id:honorific_id,
					email:email,
					country:countryId,
					phone:phone,
					fax:fax,
					room_type:roomType,
					room_no:roomNo,
					adult_count:adultCount,
					child_count:childCount,
					bed_types:bedTypeString,
					check_client_name:clientsString,
					remarks:remarks	
				},
				function(message) {
					msg_arr = message.split(':');
					if (parseInt(msg_arr[0]) == parseInt(0)) {
						$('#ref_no').val(msg_arr[1]);
						//alert("恭喜你，预定成功!!");
						$('#form1').submit();
					} else {
						errorMessage = msg_arr[1];
						alert(errorMessage);
					}
				},
				"text"
			);
	
		}
	}
</script>




<style>
.jfVal {
        position: absolute;
        z-index: 10;
}
.jValSpacer {
        position: absolute;
        width: 0px;
        float: left;
}
.jValSpacercover {
        background: #eee url(eeGrad2.gif) bottom repeat-x;
        border: 1px solid #ccc;
        border-right: 0px;
}
.jValSpacerpod {
        background: #f0f2f5 url(f0f2f5grad.gif) bottom repeat-x;
        border: 1px solid #ccc;
        border-right: 0px;
}
.jValSpacerblank {
        height: 16px !important;
        opacity: 0.6;
}
.jfVal .icon {
        float: left;
}
.jfVal .iconcover {
        background: #eee url(eeGrad2.gif) bottom repeat-x;
        border: 1px solid #ccc;
        border-width: 1px 0px;
        width: 20px;
        text-align: left;
}
.jfVal .iconpod {
        background: #f0f2f5 url(f0f2f5grad.gif) bottom repeat-x;
        border: 1px solid #ccc;
        border-left: 0px;
        -moz-border-radius-topright: 3px;
        -moz-border-radius-bottomright: 3px;
        -webkit-border-top-right-radius: 3px;
        -webkit-border-bottom-right-radius: 3px;
        width: 20px;
        text-align: left;
}
.jfVal .iconblank {
        background: #fff;
        margin-top: -4px;
        height: 20px !important;
        padding-left: 5px;
}
.jfVal .icon .iconbg {
        background: url(<{$rootpath}>/images/hotel/warning.gif) center left no-repeat;
        height: 100%;
        width: 16px;
}
.jfVal .content {
        color: red;
        vertical-align: middle;
        white-space: nowrap;
        float: left;
        padding-right: 5px;
}
.jfVal .contentcover {
        background: #eee url(eeGrad2.gif) bottom repeat-x;
        border: 1px solid #ccc;
        border-left: 0px;
        -moz-border-radius-topright: 3px;
        -moz-border-radius-bottomright: 3px;
        -webkit-border-top-right-radius: 3px;
        -webkit-border-bottom-right-radius: 3px;
}
.jfVal .messagepod {
        opacity: 0.8;
        background: #fff;
        padding: 2px 5px;
}
.jfVal .messageblank {
        background: #fff;
        padding: 2px 5px;
}
#form_blank input[type=text], #form_blank [jVal] {
        padding-top:3px;
}
</style>											
												
												
												
												
												
												
												
												
												
												
												