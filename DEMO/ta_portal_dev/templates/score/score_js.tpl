$.fn.studyplay_star=function(options,callback){
		var id=options.id;
		var CurrentStar=options.CurrentStar;
		var settings ={
			MaxStar      :20,
			StarWidth    :16,
			CurrentStar  :5,
			Enabled      :true 
		};	
		if(options) { jQuery.extend(settings, options); };
		var container = jQuery(this);
		container.css({"position":"absolute"})
		.html('<ul class="studyplay_starBg"></ul>')	
		.find('.studyplay_starBg').width(settings.MaxStar*settings.StarWidth)
		.html('<li class="studyplay_starovering" style="width:'+settings.CurrentStar*settings.StarWidth+'px; z-index:0;" id="'+id+'"></li>');
		if(settings.Enabled)
		{
			var ListArray = "";	
			for(k=1;k<settings.MaxStar+1;k++)
			{
				ListArray +='<li class="studyplay_starON" style="width:'+settings.StarWidth*k+'px; height:16px; z-index:'+(settings.MaxStar-k+1)+';"></li>';
			}
			container.find('.studyplay_starBg').append(ListArray)
			.find('.studyplay_starON')
			.hover(function(){
							  $("#"+id).hide();
							  $(this).removeClass('studyplay_starON').addClass("studyplay_starovering");
							  },
				   function(){
							  $(this).removeClass('studyplay_starovering').addClass("studyplay_starON");
							  $("#"+id).show();
  			 })
	   	   .click(function(){					 
				var studyplay_count = settings.MaxStar - $(this).css("z-index")+1;
				$("#"+id).width(studyplay_count*settings.StarWidth);
				$("#div"+id).css('display','');
				//$("#score_number_value"+id).html(studyplay_count);
				$("#score"+id).studyplay_star({MaxStar:5,CurrentStar:CurrentStar,Enabled:false,id:id},function(value){
				});
				$.post("<{$rootpath}>/score/score.php", {"action":"vote","score":studyplay_count,"<{$param_list.score_type}>":id}, function(message) {
				});
				if (typeof callback == 'function') {
					callback(studyplay_count);
					return ;
				}
		  });
	   }	
	}	
	
	