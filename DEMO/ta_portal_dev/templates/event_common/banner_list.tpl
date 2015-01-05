<!--<table width="205" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td><img src="<{$rootpath}>/images/spacer.gif" width="205" height="20"></td>
          </tr>
          <tr>
            <td><img src="<{$rootpath}>/images/<{$lang}>/banner_hot_title.gif"></td>
          </tr>
          <tr>
            <td align="center">
            <table width="190" border="0" cellspacing="0" cellpadding="0">
          	  <{foreach item=hotShow from=$hotShowList}>
          		<tr>
                	<td>
                	<{if $banner.url == "" }>
                	<img src="<{$rootpath}>/images/<{$lang}>/banner<{$hotShow.path}>" border="0" />
                	<{else}>
                	<a href="<{$hotShow.url}>"><img src="<{$rootpath}>/images/<{$lang}>/banner<{$hotShow.path}>" border="0" /></a></td>
                	<{/if}>
                </tr>
          	  <{/foreach}>
            </table>
           </td>
          </tr>

</table>//-->
<table width="205" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td><img src="<{$rootpath}>/images/spacer.gif" width="205" height="20"></td>
          </tr>
          <tr>
            <td><img src="<{$rootpath}>/images/<{$lang}>/banner_week_title.gif"></td>
          </tr>
          <tr>
            <td align="center">
            <table width="205" border="0" cellspacing="0" cellpadding="0">
          	  <{foreach item=banner from=$bannerList}>
          		<tr>
                	<td>
                	<{if $banner.url == "" }>
                	<img src="<{$rootpath}>/images/<{$lang}>/banner<{$banner.path}>" border="0" />
                	<{else}>
                	<a href="<{$banner.url}>"><img src="<{$rootpath}>/images/<{$lang}>/banner<{$banner.path}>" border="0" /></a></td>
                	<{/if}>
                </tr>
          	  <{/foreach}>
            </table>
           </td>
          </tr>

</table>