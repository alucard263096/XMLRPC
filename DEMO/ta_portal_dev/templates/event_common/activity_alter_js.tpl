function submitRemind(activity_id){
		var emailRegExp = new RegExp("[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?");
		var pattern=/^[0-9]{1,20}$/;
		var errorMessage='#errorMessage_'+activity_id;
		$(errorMessage).text("");	
		var numberTemp=0;
		if($("#Phone_"+activity_id).val().length>0 || $("#Phone_"+activity_id).val()!=''){
			numberTemp=1;
		}
		if($("#expressEmail_"+activity_id).val().length>0 || $("#expressEmail_"+activity_id).val()!=''){
			numberTemp=1;
		}
		//alert(numberTemp);
		if($("#PhoneCode_"+activity_id).val()==null ||$("#PhoneCode_"+activity_id).val()==''){
			$(errorMessage).show();
			$(errorMessage).append('<{$LANG.common.country_code}>');	
		}else if(($("#Phone_"+activity_id).val().length==0 || $("#Phone_"+activity_id).val()=='') && numberTemp==0){
			$(errorMessage).show();
			$(errorMessage).append('<{$LANG.common.mobile_phone}>');	
		}else if ((!pattern.exec($("#Phone_"+activity_id).val())) && numberTemp==0){
			$(errorMessage).show();
			$(errorMessage).append('<{$LANG.common.phone_num}>');	
		}else if(($("#expressEmail_"+activity_id).val().length==0 || $("#expressEmail_"+activity_id).val()=='') && numberTemp==0){
			$(errorMessage).show();
			$(errorMessage).append('<{$LANG.common.email}>');	
		}else if ((!emailRegExp.test($("#expressEmail_"+activity_id).val())|| $("#expressEmail_"+activity_id).val().indexOf('.')==-1) && numberTemp==0){
			$(errorMessage).show();
			$(errorMessage).append('<{$LANG.common.wrong_email}>');	
		}else{
			numberTemp=0;
			$.post("<{$rootpath}>/score/alert.php", {action:"subscribe",activity_id:activity_id,mobile_country_no:$("#PhoneCode_"+activity_id).val()
			,email:$("#expressEmail_"+activity_id).val(),mobile_no:$("#Phone_"+activity_id).val()}, function(message) {		
			//alert(message);	
					if (message == '0'){					
						$(errorMessage).hide();
						alert("<{$LANG.common.success}>");
						$("#expressEmail_"+activity_id).val("");
						$("#Phone_"+activity_id).val("");
						$(errorMessage).text("");
						remindDiv.close();
							
					}else{
						$(errorMessage).show();
						$(errorMessage).text("");
						alert("<{$LANG.common.add_success_prompt}>");
					} 				
				});
		}
	}
