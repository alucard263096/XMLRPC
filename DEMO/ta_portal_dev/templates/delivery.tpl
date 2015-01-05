<{include file="$smarty_root/header.tpl" }>


<a id='vv' href='javascript:void(0)'>
	<img id='casss' src='images/active.jpg'  />
</a>




<script>
$(document).ready(function(){
	$("#vv").click(function(){
		try
		{
			alert(1);
			window.location.href='http://www.baidu.com';
			alert(2);
		}
		catch(ex)
		{
			alert(ex);
		}
	});
});
</script>
 
<{include file="$smarty_root/footer.tpl" }>
