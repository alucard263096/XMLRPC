
  	<script type="text/javascript">
  		var moneySum= $('#moneySum').val();
	  	moneySum=parseInt(moneySum);
	  	$(document).ready(function() {
	  		$(".ctabs-selected").click();
	  		$('#container-1').tabs();
	  				 
	  		var money=0;
	  		var number;
			var memberPriceMoney;
			var feeMoney=0;
			var sumNumer=0;
	  		var tag = $('.qq');  		
	  		$.each(tag, function(){ 
			   if(this.id.substring(0,1) == 'n' && this.value==moneySum  ){
			   	$('#moneyId').val(this.id);
			   } 
			   if(this.id.substring(0,1) == 'm') {
			   	  memberPriceMoney=this.value;
			   }
			   if(this.id.substring(0,1) == 'f') {	
			   	  feeMoney=Number(this.value);
			   }    
			   if(this.id.substring(0,1) == 's' && number>0) {	
			   	  this.value=(parseInt(memberPriceMoney)+parseInt(feeMoney))*parseInt(number);
			   } 
			   if(this.id.substring(0,1) == 's' && number==0) {	
			   	  this.value=0;
			   } 
			   if(this.id.substring(0,1) == 'n' && this.value>0){
			   	  	number=parseInt(this.value);
					sumNumer=parseInt(sumNumer)+parseInt(number);					
					if(parseInt(sumNumer) <= parseInt(moneySum)){											
						money=parseInt(money)+((parseInt(memberPriceMoney)+parseInt(feeMoney))*parseInt(number));						
					}	
					number=0;
			   }
			   if(this.id.substring(0,1) == 'n'){
			   	  	number=parseInt(this.value);					
			   }
			     
			 }); 
			 $('#money').val(money);
			 $('#moneyTemp').val(money);
			 $("#country_id").change(function(){
				var country_id=$(this).val();
				$(".city").removeClass("show1").addClass("hidden1");
				$("#city_"+country_id).removeClass("hidden1").addClass("show1").val(-1);
				
				var city_id=$("#city_"+country_id).val();
				$(".district").removeClass("show1").addClass("hidden1");
				$("#district_"+city_id).removeClass("hidden1").addClass("show1");
				
				getAddress();
			 });
				
			 $(".city").change(function(){
				var city_id=$(this).val();
				$(".district").removeClass("show1").addClass("hidden1");
				$("#district_"+city_id).removeClass("hidden1").addClass("show1").val(-1);
				
				getAddress();
			 });
			 $(".district").change(function(){
				getAddress();
			 });	
		});
  		
   		function sumMoney(name){   		
   			moneySum= $('#moneySum').val();	 
   			var money=0;
			var tag = $('.qq');
			var number;
			var memberPriceMoney;
			var feeMoney=0;
			var sumNumer=0;
			if(parseInt($("#"+$('#moneyId').val()).val())>parseInt(0)){
				$("#"+$('#moneyId').val()).val(parseInt($("#"+$('#moneyId').val()).val())-1);		
				$("#"+name).val(parseInt($("#"+name).val())+1);
			}
			$.each(tag, function(){    
			   if(this.id.substring(0,1) == 'm') {
			   	  memberPriceMoney=this.value;
			   }
			   if(this.id.substring(0,1) == 'f') {	
			   	  feeMoney=Number(this.value);
			   }    
			   if(this.id.substring(0,1) == 's' && number>0) {	
			   	  this.value=(parseInt(memberPriceMoney)+parseInt(feeMoney))*parseInt(number);
			   	  
			   } 
			   if(this.id.substring(0,1) == 's' && number==0) {	
			   	  this.value=0;
			   } 
			   if(this.id.substring(0,1) == 'n' && this.value>0){
			   	  	number=parseInt(this.value);
					sumNumer=parseInt(sumNumer)+parseInt(this.value);					
					if(parseInt(sumNumer) <= parseInt(moneySum)){											
						money=parseInt(money)+((parseInt(memberPriceMoney)+parseInt(feeMoney))*parseInt(number));	
					}	
			   }
			   if(this.id.substring(0,1) == 'n'){
			   	  	number=parseInt(this.value);					
			   }
			}); 
			$('#money').val(money);
			$('#moneyTemp').val(money);
			
			//soon add code in it, for summary money
			$(".delivery_radio").each(function(){
				if($(this).attr("checked"))
				{
					$(this).click();
				}
			});
			
   		}
   		function reduceMoney(name){
   			moneySum= $('#moneySum').val();	 
   			var money=0;
			var tag = $('.qq');
			var number;
			var memberPriceMoney;
			var feeMoney=0;
			var sumNumer=0;
			if($("#"+name).val()>parseInt(0)){
				$("#"+$('#moneyId').val()).val(parseInt($("#"+$('#moneyId').val()).val())+1);				
				$("#"+name).val(parseInt($("#"+name).val())-1);
			}
			$.each(tag, function(){ 
				if(this.id.substring(0,1) == 'm') {					
					memberPriceMoney=this.value;
				}
			 	if(this.id.substring(0,1) == 'f') {	
			   	  feeMoney=Number(this.value);
			   	}  
			   	if(this.id.substring(0,1) == 's' && number>0) {	
			   	  this.value=(parseInt(memberPriceMoney)+parseInt(feeMoney))*parseInt(number);
			   	  
			    } 
			    if(this.id.substring(0,1) == 's' && number==0) {	
			   	  this.value=0;
			   	  
			   	} 
				if(this.id.substring(0,1) == 'n' && this.value>0){					
					number=parseInt(this.value);
					sumNumer=parseInt(sumNumer)+parseInt(number);
					if(sumNumer<= moneySum){					
						money=parseInt(money)+((parseInt(memberPriceMoney)+parseInt(feeMoney))*parseInt(number));	
					}					
				}	
				if(this.id.substring(0,1) == 'n'){
			   	  	number=parseInt(this.value);				
			   }			
			}); 			
			$('#money').val(money);
			$('#moneyTemp').val(money);
			
			//soon add code in it, for summary money
			$(".delivery_radio").each(function(){
				if($(this).attr("checked"))
				{
					$(this).click();
				}
			});
   		}
   		
   		function showDiv(value,fee,rate){
   			if(value==3 || value==4 || value==2){
   				$('#express').show(); 
   				$('#expresshr').show(); 
   				
   			}else{	
   				$('#express').hide(); 
   				$('#expresshr').hide(); 
   			}  
   			
   			if(fee.length>0){
   				fee=parseInt(fee);
   			}
   			else
   			{
   				fee=0;
   			}
   			var rate_fee=0;
   			rate_fee=Math.ceil(parseInt($('#moneyTemp').val())*(rate/100));
   			$('#money').val(parseInt($('#moneyTemp').val())+parseInt(fee)+parseInt(rate_fee));	
   			$('#deliveryValue').val(value); 		
   		}
   		
   		var changeValue =function(){
   				$("#expressName").val($(this).val());
   				}
   				
   		$('#expressName').change(function(){
   			$("#unifyName").unbind("blur",changeValue);
   		});
   		
   		$("#unifyName").bind("blur",changeValue);
   		
   		$("#unifyEmail").blur(function(){
   			$("#expressEmail").val($(this).val());
   		});
   		
   		$("#unifyMobilePhone").blur(function(){
   			if(!isNaN($(this).val()))
   				$("#expressMobilePhone").val($(this).val());
   			if(!isNaN($("#unifyMobilePhoneCode").val()))
   				$("#expressMobilePhoneCode").val($("#unifyMobilePhoneCode").val());
   		});
   		
   		$("#sumbitButton").click(function() {		
   		   
   		   $('#expressErrorMessage').text("");	
   		   $('#unifyErrorMessage').text("");  
   		   $('#errorDiv').text("");	 	
   		   var validation=true;
   		   var ticket_type_id="";
   		   var tag = $('.qq');
   		   $.each(tag, function(){
   		   	   if(this.id.substring(0,1) == 'n' && this.value>0){	
			   	  	ticket_type_id+=this.value+this.id+",";
			   }    
   		   });	
   		   
	   		   var emailRegExp = new RegExp("[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?");
	   		   var pattern=/^[0-9]{1,20}$/;
	   		   var value=$('#deliveryValue').val();
	   		   //alert(value);
	   		   if(value!=1){  
							
	   				if($('#expressName').val()==null || $('#expressName').val()==''){
	   					$('#expressErrorMessage').show();
						$('#expressErrorMessage').append('<{$LANG.order_pay.name_prompt}>');	
	   				}else if($('#expressEmail').val()==null || $('#expressEmail').val()==''){
	   					$('#expressErrorMessage').show();
						$('#expressErrorMessage').append('<{$LANG.order_pay.email_prompt}>');	
	   				}else if ($("#district_"+$("#city_"+$("#country_id").val()).val()).val() == -1){
						$('#expressErrorMessage').show();
						$('#expressErrorMessage').append('<{$LANG.register.district_prompt}>');	
					}else if (!emailRegExp.test($('#expressEmail').val())||$('#expressEmail').val().indexOf('.')==-1){
						$('#expressErrorMessage').show();
						$('#expressErrorMessage').append('<{$LANG.order_pay.wrong_eamil}>');	
					}else if($('#expressAddressLine').val()==null || $('#expressAddressLine').val()==''){
	   					$('#expressErrorMessage').show();
						$('#expressErrorMessage').append('<{$LANG.order_pay.address_prompt}>');	
	   				}else if($('#expressMobilePhone').val()==null || $('#expressMobilePhone').val()==''){
	   					$('#expressErrorMessage').show();
						$('#expressErrorMessage').append('<{$LANG.order_pay.mobile_phone_prompt}>');	
	   				}else if (!pattern.exec($('#expressMobilePhone').val())){
						$('#expressErrorMessage').show();
						$('#expressErrorMessage').append('<{$LANG.order_pay.input_mobile_phone}>');	
					}else{
					
					var cardType="";
   		   	   		var exp_date=$("#expYear").val()+$("#expMonth").val();
					if($('#paymentType').val()=='CreditCard'){
							<{if $param_list.payment_gateway_type == 'payease'}>
							cardType="IT";
							<{else}>
					   		cardType=$("#cardType").val();
					   		if($('#holder_name').val()==null || $('#holder_name').val()==''){
					   			$('#errorDiv').show();
								$('#errorDiv').append('<{$LANG.order_pay.input_card_name}>');	
								validation=false;
					   		}else{
				   		   		switch(CheckCardNumber($("#cardType").val(),$("#ccNo").val(),$("#expYear").val(),$("#expMonth").val())){
								case 0:
									$('#errorDiv').show();
									$('#errorDiv').append('<{$LANG.order_pay.input_credit_card_num}>');	
									validation=false;
									break;
								case 1:
									$('#errorDiv').show();
									$('#errorDiv').append('<{$LANG.order_pay.choose_year_prompt}>');	
									validation=false;
									break;
								case 2:
									$('#errorDiv').show();
									$('#errorDiv').append('<{$LANG.order_pay.year_invalid}>');	
									validation=false;
									break;
								case 3:
									$('#errorDiv').show();
									$('#errorDiv').append('<{$LANG.order_pay.card_invalid}>');	
									validation=false;
									break;
								case 4:
									validation=true;
									break;
								case 5:
									$('#errorDiv').show();
									$('#errorDiv').append('<{$LANG.order_pay.credit_card_num_prompt}>');	
									validation=false;
									break;
								case 6:
									$('#errorDiv').show();
									$('#errorDiv').append('<{$LANG.order_pay.credit_card_num_prompt}>');	
									validation=false;
									break;
								}
							}
							<{/if}>
					   }else{
					   		cardType="DC";
					   }
					   if(validation==true){
						$(".value_gray").attr({disabled:true});
						var newAddress="";
						var country_id=$("#country_id").val();
						if(country_id!=-1){
							newAddress=newAddress+$("#country_id").find("option:selected").text();
						}
						var city_id=$("#city_"+country_id).val();
						if(city_id!=-1){
							newAddress=newAddress+$("#city_"+country_id).find("option:selected").text();
							
						}
						var district_id=$("#district_"+city_id).val();
						if(district_id!=-1){
							newAddress=newAddress+$("#district_"+city_id).find("option:selected").text();
						}
						newAddress=newAddress+$('#expressAddressLine').val();
	   					$.post("order_pay.php", {action:"setTrans",
	   					ticket_type_id:ticket_type_id,
	   					recipient_name:$('#expressName').val(),
	   					address:newAddress,
	   					postal_code:$('#expressPostcode').val(),
	   					expressEmail:$('#expressEmail').val(),
	   					home_no:$('#expressFixedPhone').val(),
	   					home_area_code:$('#expressFixedPhoneAreaCode').val(),
	   					home_country_code:$('#expressFixedPhoneCode').val(),
	   					mobile_no:$('#expressMobilePhone').val(),
	   					mobile_country_code:$('#expressMobilePhoneCode').val(),
	   					expressMobilePhone:$('#expressMobilePhone').val(),
	   					remark:$('#expressRemark').val(),
	   					ticket_type_id:ticket_type_id,
	   					unifyName:$('#unifyName').val(),
	   					unifyEmail:$('#unifyEmail').val(),
	   					unifyMobilePhone:$('#unifyMobilePhone').val(),
	   					delivery_type_id:$('#deliveryValue').val(),
	   					name:$('#unifyName').val(),
	   					email:$('#unifyEmail').val(),
	   					phone:$('#unifyMobilePhone').val(),
	   					phone_code:$('#unifyMobilePhoneCode').val(),
	   					holder_name:$('#holder_name').val(),
	   					cc_no:$('#ccNo').val(),
	   					exp_date:exp_date,
	   					pt_code:cardType}, function(message) {
	   						msg_arr = message.split(':');
							if (parseInt(msg_arr[0]) == parseInt(0)) {
								str = msg_arr[1];
								str_arr = str.split('_');
								var paymentType = $('#paymentType').val();
								<{if $param_list.payment_gateway_type == 'payease'}>
									if (paymentType == 'DebitCard' || paymentType == 'CreditCard') {
										$('#payment_trans_id').val(str_arr[0]);
										$('#payment_total_amount').val(str_arr[1]);
										$('#payment_ref_no').val(str_arr[2]);
										$('#payment_currency_id').val(str_arr[3]);
										$('#payment_name').val($('#unifyName').val());
										$('#payment_mobile_no').val($('#unifyMobilePhoneCode').val() + '' + $('#unifyMobilePhone').val());
										if(paymentType=='CreditCard'){
											$('#card_type').val(1);
										}else{
											$('#card_type').val(2);
										}
										$('#form1').submit();
									} else {
									    
									}
								<{elseif $param_list.payment_gateway_type == 'asiapay'}>
						  			if (paymentType == 'DebitCard') {
							  			$('#dc_transid').val(str_arr[0]);
							  			$('#dc_amount').val(str_arr[1]);
							  			$('#dc_orderRef').val(str_arr[2]);
							  			$('#form2').submit();
							  		} else if (paymentType == 'CreditCard') {
							  			$('#cc_transid').val(str_arr[0]);
							  			$('#cc_amount').val(str_arr[1]);
							  			$('#cc_orderRef').val(str_arr[2]);
							  			$('#cc_cardNo').val($("#ccNo").val());
							  			$('#cc_pMethod').val($('#cardType').val());
							  			$('#cc_securitycode').val($('#securityCode').val());
							  			$('#cc_epMonth').val($('#expMonth').val());
							  			$('#cc_epYear').val($('#expYear').val());
							  			$('#form3').submit();
							  		} else {
							  		    
							  		}
								<{/if}>
							} else {
								errorMessage = msg_arr[1];					
								alert("<{$LANG.order_pay.order_error}>");
								window.location.href='<{$rootpath}>/<{$module}>/choose_seat.php?show_id='+<{$param_list.show_id}>;
								//history.back();
							}
						});
	   				}
	   				}
	   		   }else{
	   		   		if($('#unifyName').val()==null || $('#unifyName').val()==''){
	   					$('#unifyErrorMessage').show();
						$('#unifyErrorMessage').append('<{$LANG.order_pay.name_prompt}>');	
	   				}else if($('#unifyEmail').val()==null || $('#unifyEmail').val()==''){
	   					$('#unifyErrorMessage').show();
						$('#unifyErrorMessage').append('<{$LANG.order_pay.email_prompt}>');	
	   				}else if($('#unifyMobilePhone').val()==null || $('#unifyMobilePhone').val()==''){
	   					$('#unifyErrorMessage').show();
						$('#unifyErrorMessage').append('<{$LANG.order_pay.mobile_phone_prompt}>');	
	   				}else if (!emailRegExp.test($('#unifyEmail').val())||$('#unifyEmail').val().indexOf('.')==-1){
						$('#unifyErrorMessage').show();
						$('#unifyErrorMessage').append('<{$LANG.order_pay.wrong_eamil}>');	
					}else if (!pattern.exec($('#unifyMobilePhone').val())){
						$('#unifyErrorMessage').show();
						$('#unifyErrorMessage').append('<{$LANG.order_pay.input_mobile_phone}>');	
					}else{
						if($('#paymentType').val()=='CreditCard'){
							<{if $param_list.payment_gateway_type == 'payease'}>
							cardType="IT";
							<{else}>
					   		cardType=$("#cardType").val();
					   		if($('#holder_name').val()==null || $('#holder_name').val()==''){
					   			$('#errorDiv').show();
								$('#errorDiv').append('<{$LANG.order_pay.input_card_name}>');	
								validation=false;
					   		}else{
				   		   		switch(CheckCardNumber($("#cardType").val(),$("#ccNo").val(),$("#expYear").val(),$("#expMonth").val())){
								case 0:
									$('#errorDiv').show();
									$('#errorDiv').append('<{$LANG.order_pay.input_credit_card_num}>');	
									validation=false;
									break;
								case 1:
									$('#errorDiv').show();
									$('#errorDiv').append('<{$LANG.order_pay.choose_year_prompt}>');	
									validation=false;
									break;
								case 2:
									$('#errorDiv').show();
									$('#errorDiv').append('<{$LANG.order_pay.year_invalid}>');	
									validation=false;
									break;
								case 3:
									$('#errorDiv').show();
									$('#errorDiv').append('<{$LANG.order_pay.card_invalid}>');	
									validation=false;
									break;
								case 4:
									validation=true;
									break;
								case 5:
									$('#errorDiv').show();
									$('#errorDiv').append('<{$LANG.order_pay.credit_card_num_prompt}>');	
									validation=false;
									break;
								case 6:
									$('#errorDiv').show();
									$('#errorDiv').append('<{$LANG.order_pay.credit_card_num_prompt}>');	
									validation=false;
									break;
								}
							}
							<{/if}>
					   }else{
					   		cardType="DC";
					   }
					   if(validation==true){
						$(".value_gray").attr({disabled:true});
	   					$.post("order_pay.php", {action:"setTrans",ticket_type_id:ticket_type_id,name:$('#unifyName').val(),
	   											 email:$('#unifyEmail').val(),phone:$('#unifyMobilePhone').val(),
	   											 phone_code:$('#unifyMobilePhoneCode').val(),delivery_type_id:$('#deliveryValue').val(),
	   											 holder_name:$('#holder_name').val(),cc_no:$('#ccNo').val(),exp_date:exp_date,pt_code:cardType}, function(message) {
	   						
							msg_arr = message.split(':');
							if (parseInt(msg_arr[0]) == parseInt(0)) {
								var paymentType = $('#paymentType').val();
								str = msg_arr[1];
								str_arr = str.split('_');
								<{if $param_list.payment_gateway_type == 'payease'}>
									if (paymentType == 'DebitCard' || paymentType == 'CreditCard') {
										$('#payment_trans_id').val(str_arr[0]);
										$('#payment_total_amount').val(str_arr[1]);
										$('#payment_ref_no').val(str_arr[2]);
										$('#payment_currency_id').val(str_arr[3]);
										$('#payment_name').val($('#unifyName').val());
										$('#payment_mobile_no').val($('#unifyMobilePhoneCode').val() + '' + $('#unifyMobilePhone').val());
										if(paymentType=='CreditCard'){
											$('#card_type').val(1);
										}else{
											$('#card_type').val(2);
										}
										$('#form1').submit();
									} else {
									    
									}
								<{elseif $param_list.payment_gateway_type == 'asiapay'}>
						  			if (paymentType == 'DebitCard') {
							  			$('#dc_transid').val(str_arr[0]);
							  			$('#dc_amount').val(str_arr[1]);
							  			$('#dc_orderRef').val(str_arr[2]);
							  			$('#form2').submit();
							  		} else if (paymentType == 'CreditCard') {
							  			$('#cc_transid').val(str_arr[0]);
							  			$('#cc_amount').val(str_arr[1]);
							  			$('#cc_orderRef').val(str_arr[2]);
							  			$('#cc_cardNo').val($("#ccNo").val());
							  			$('#cc_pMethod').val($('#cardType').val());
							  			$('#cc_securitycode').val($('#securityCode').val());
							  			$('#cc_epMonth').val($('#expMonth').val());
							  			$('#cc_epYear').val($('#expYear').val());
							  			$('#form3').submit();
							  		} else {
							  		    
							  		}
								<{/if}>
							} else {
								errorMessage = msg_arr[1];		
								alert("<{$LANG.order_pay.order_error}>");
								window.location.href='<{$rootpath}>/<{$module}>/choose_seat.php?show_id='+<{$param_list.show_id}>;
							}
						});
						}
	   				}
	   		   } 	 
   		});
   		function getAddress(){
			var country_id=$("#country_id").val();
			if(country_id==-1){
				$("#country_name").html("");
			}else{
				$("#country_name").html($("#country_id").find("option:selected").text());
				<{foreach from=$country item=rs }>
						if(<{$rs.id}>==$("#country_id").find("option:selected").val()){
							$("#expressFixedPhoneCode").val(<{$rs.code}>);
							$("#expressMobilePhoneCode").val(<{$rs.code}>);
							$("#expressFixedPhoneAreaCode").val("");
						}
				<{/foreach}>
			}
			var city_id=$("#city_"+country_id).val();
			if(city_id==-1){
				$("#city_name").html("");
			}else{
				$("#city_name").html($("#city_"+country_id).find("option:selected").text());
				<{foreach from=$city item=det}>
						<{foreach from=$det.details item=rs}>
							if(<{$rs.id}>==$("#city_"+country_id).find("option:selected").val()){
								$("#expressFixedPhoneAreaCode").val(<{$rs.code}>);
								
							}						
						<{/foreach}>
				<{/foreach}>
			}
			var district_id=$("#district_"+city_id).val();
			if(district_id==-1){
				$("#district_name").html("");
			}else{
				$("#district_name").html($("#district_"+city_id).find("option:selected").text());
			}
		}
		function setPaymentType(bankid){
			$('#paymentType').val(bankid);
			$(".delivery_tab").hide();
			$("#delivery_tab_"+bankid).show();
			var delivery_type_id=1;
			
			$(".delivery_radio").each(function(){
				if($(this).attr("checked"))
				{
					delivery_type_id=$(this).val();
				}
			});
			if($("#delivery_"+bankid+"_"+delivery_type_id).length>0)
			{
				$("#delivery_"+bankid+"_"+delivery_type_id).click();
			}
			else
			{
				$("#delivery_tab_"+bankid+" .delivery_check").click();
			}
		}
	</script>
	<style>
	#content{		
		width:780px; 		
		height:860px;
		padding-top:4px;
		padding-bottom:4px;
						
	}
	
	#delivery_top{
		background-color:#F9F9F9;	
		border:1px #E3CEF6 solid;	
		width:780px; 			
		height:360px;				
	}
	
	#delivery_middle{
		background-color:#F9F9F9;	
		border:1px #E3CEF6 solid;		
		width:780px; 				
		height:260px;			
	}
	
	#delivery_down{	
		//background-color:gray;		
		background-color:#F9F9F9;		
		border:1px #E3CEF6 solid;		
		width:780px; 	
		height:180px;		
	}
	
	#btndiv{
		padding-top:66px;
		padding-left:500px;
	}
	
	#td2{
		text-align:right;	
	}
	
	
	
	#Shipping{
		border:1px #FDAC43 solid;
	
	}	
	
	#message{
		border:1px #E3CEF6 solid;
		width:300px;
		height:46px;
		overflow:visible;
		
	}

	#down{	
		border:1px #FDAC43 solid;
		width:400px;		
	}
	
	#t1{
		text-align:right;	
	}
	
	
	#table1{
		padding-top:10px;
		width:716px;
		border:1px #E3CEF6 solid;	
		padding-left:6px;
	}
	
	.d1{
		display:block;
		width:760px; 
		height:20px;	
		background-color:#484848;		
		padding-left:20px;
		padding-top:10px;		
		
	}
	
	.font1a{
		
		color:white;
		padding-bottom:0px;
		padding-left:420px;		
		
	}
	
	.orderbtn{
		background-color:#EE6306;
		padding-left:0px;
		color:white;
		height:36px;
		width:150px;		
	}
	
	.hidden1 {
		display:none;
	}
	.show1 {
		display:"";
	}
	
</style>