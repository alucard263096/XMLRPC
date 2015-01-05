<table width="210" border="0" cellspacing="0" cellpadding="0">
  <{foreach item=movie  from=$movie_rank_list}>
  <tr>
    <td class="showtable_right_5pxguid" width="25" valign="top" align="center"><img src="<{$rootpath}>/images/<{$event_type}>/icon_list_indent<{$movie.index}>.gif" width="17" height="17"></td>
    <td class="showtable_right_5pxguid" valign="top"><a href="detail.php?city_id=<{$param_list.city_id}>&activity_id=<{$movie.activity_id}>" class="blklink"><{$movie.name}></a></td>
    <td width="25" align="center" valign="top"><span class="moviemark"><!--4.5--></span></td>
  </tr>
  <{/foreach}>
</table>
<!--  <table width="210" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td align="right" class="movietable_right_5pxguid"><a href="#" class="showmorelink">+<{$LANG.more}>&gt;&gt;</a></td>
    </tr>
  </table>//-->