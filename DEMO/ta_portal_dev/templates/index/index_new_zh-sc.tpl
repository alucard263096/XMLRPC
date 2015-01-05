<{include file="$smarty_root/header.tpl" }>
<style type="text/css">
<!--

.index_movie td{ font:16px;}
.index_movie td .title{color:#81429d;  font-size:16px;}
.index_movie td .date{ color:#515151; font-size:14px;}

.index_hotel td{ font:16px;}
.index_hotel td .title{color:#bc4f14;  font-size:16px;}
.index_hotel td .price{ color:#515151; font-size:20px;}
.index_hotel .hot,
.index_movie .hot{ background:url(<{$rootpath}>/images/index/piaoliangremai2.gif) no-repeat center right;}
ul{list-style-type:disc;}
li{ font-size:13px; line-height:25px;}


-->
</style>

<table width="997" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="310"><img src="<{$rootpath}>/images/<{$lang}>/index_03.gif" width="306" height="49" align="right" /></td>
    <td width="372" rowspan="2" align="center" valign="middle">
    
        <div style="text-align:left;height:391px; width:318px; background:url(<{$rootpath}>/images/index/loading.gif) no-repeat center center ;">
		<{include file="$smarty_root/event_common/banner.tpl" }>
</div>
<{if $smarty.session.city_id == $gz_city_id }>
<div style="height:302px; width:318px; margin-top:15px;"><a href="<{$rootpath}>/promotion/promotion.php">
<img src="<{$rootpath}>/images/index/index_222.gif" width="317" height="302" /></a></div>
<{else}>
<div style="height:302px; width:318px; margin-top:15px;"><a href="<{$rootpath}>/promotion/promotion.php"><img src="<{$rootpath}>/images/<{$lang}>/<{$adv_banner}>" width="317" height="302" /></a></div>
<{/if}>

    
    
    </td>
    <td width="308"><img src="<{$rootpath}>/images/<{$lang}>/index_05.gif" width="308" height="49" style=" margin:0 0 5px 0;" /></td>
  </tr>
  <tr>
    <td width="308" style="background:url(images/index/beijing_03.gif) no-repeat top left"><table width="90%" border="0" align="center" cellpadding="0" cellspacing="0" class="index_movie">
      <tr>
        <td width="102"><img src="<{$rootpath}>/images/index/yyj.gif" width="93" height="65" /></td>
        <td width="186" class="hot"><a href="<{$rootpath}>/show/detail.php?city_id=1&activity_id=211"><span class="title"> 2010亚洲音乐节 </span></a>
          <br /><span class="date"> 日期：11月5日~17日 </span></td>
      </tr>
      <tr>
        <td height="25" colspan="2"><img src="<{$rootpath}>/images/index/xian.gif" width="288" height="9" /></td>
      </tr>
      <tr>
        <td><img src="<{$rootpath}>/images/index/yyh.gif" alt="" width="93" height="65" /></td>
        <td height="30" class="hot"><a href="#"><span class="title">  16届广州亚洲运动会</span></a>
          <br /><span class="date"> 日期：11月12日~27日</span></td>
      </tr>
      <tr>
        <td height="20" colspan="2"><img src="<{$rootpath}>/images/index/xian.gif" width="288" height="9" /></td>
      </tr>
      <tr>
        <td><img src="<{$rootpath}>/images/index/ldh.gif" alt="" width="93" height="65" /></td>
        <td><a href="<{$rootpath}>/show/detail.php?city_id=3&activity_id=206"><span class="title">  陈慧娴澳门演唱会2010</span></a>
          <br /><span class="date"> 日期：11月6日</span></td>
      </tr>
      <tr>
        <td height="20" colspan="2"><img src="<{$rootpath}>/images/index/xian.gif" width="288" height="9" /></td>
      </tr>
      <tr>
        <td><img src="<{$rootpath}>/images/index/index_18.gif" alt="" width="93" height="65" /></td>
        <td><a href="<{$rootpath}>/show/detail.php?city_id=2&activity_id=207">
        <span class="title"> 黄子华栋笃笑</span><br />

          <span class="title"> 娱乐圈血泪史2010</span></a>
          <br /><span class="date"> 日期：11月04日~07日</span></td>
      </tr>
      <tr>
        <td height="20" colspan="2"><img src="<{$rootpath}>/images/index/xian.gif" width="288" height="9" /></td>
      </tr>
      <tr>
        <td><img src="<{$rootpath}>/images/index/index_24.gif" alt="" width="92" height="63" /></td>
        <td><a href="<{$rootpath}>/show/detail.php?city_id=2&activity_id=209"><span class="title"> 容祖儿演唱会2010</span></a>
          <br /><span class="date"> 日期：11月19日~24日</span></td>
      </tr>
      <tr>
        <td height="20" colspan="2"><img src="<{$rootpath}>/images/index/xian.gif" width="288" height="9" /></td>
      </tr>
      <tr>
        <td><img src="<{$rootpath}>/images/index/index_26.gif" alt="" width="93" height="65" /></td>
        <td height="20"><a href="<{$rootpath}>/show/detail.php?city_id=3&activity_id=208"><span class="title"> Twins人人弹起</span><br />

            <span class="title"> 演唱会2010澳门站</span></a>
          <br /><span class="date"> 日期：11月13日</span></td>
      </tr>
      <tr>
        <td height="20" colspan="2"><img src="<{$rootpath}>/images/index/xian.gif" width="288" height="9" /></td>
      </tr>
      <tr>
        <td><img src="<{$rootpath}>/images/index/index_28.gif" alt="" width="93" height="64" /></td>
        <td><a href="<{$rootpath}>/show/detail.php?city_id=3&activity_id=204"><span class="title"> 罗志祥舞法舞天</span><br />

            <span class="title"> 3D SHOW演唱会</span></a>
          <br /><span class="date"> 日期：10月30日</span></td>
      </tr>
      <tr>
        <td height="20" colspan="2"><img src="<{$rootpath}>/images/index/xian.gif" width="288" height="9" /></td>
      </tr>
    </table></td>
    <td width="308" height="656" style="background:url(<{$rootpath}>/images/index/beijing_04_06.gif) no-repeat top left">
    <table width="90%" border="0" align="center" cellpadding="0" cellspacing="0" class="index_hotel">
    <{if $smarty.session.city_id == $mo_city_id }>
      <tr>
        <td width="102"><img src="<{$rootpath}>/images/hotel/hk/hotel_12.jpg" width="93" height="65" /></td>
        <td width="186" class="hot"><a href="<{$rootpath}>/hotel/hotel_list.php"><span class="title"> 红茶馆酒店(油麻地)</span> </a>
          <br /><span class="price"> <{if $smarty.session.city_id == $gz_city_id }>RMB 513<{else}>HKD 570<{/if}></span></td>
      </tr>
      <tr>
        <td height="25" colspan="2"><img src="<{$rootpath}>/images/index/xian.gif" width="288" height="9" /></td>
        </tr>
      <tr>
        <td><img src="<{$rootpath}>/images/hotel/hk/hotel_14.jpg" alt="" width="93" height="65" /></td>
        <td height="30" class="hot"><a href="<{$rootpath}>/hotel/hotel_list.php"><span class="title"> Casa Hotel</span></a>
          <br /><span class="price"> <{if $smarty.session.city_id == $gz_city_id }>RMB 450<{else}>HKD 500<{/if}></span></td>
      </tr>
      <tr>
        <td height="20" colspan="2"><img src="<{$rootpath}>/images/index/xian.gif" width="288" height="9" /></td>
        </tr>
      <tr>
        <td><img src="<{$rootpath}>/images/hotel/hk/hotel_19.jpg" alt="" width="93" height="65" /></td>
        <td><a href="<{$rootpath}>/hotel/hotel_list.php"><span class="title"> 城景国际</span></a>
          <br /><span class="price"> <{if $smarty.session.city_id == $gz_city_id }>RMB 720<{else}>HKD 800<{/if}></span></td>
      </tr>
      <tr>
        <td height="20" colspan="2"><img src="<{$rootpath}>/images/index/xian.gif" width="288" height="9" /></td>
        </tr>
      <tr>
        <td><img src="<{$rootpath}>/images/hotel/hk/hotel_32.jpg" alt="" width="93" height="65" /></td>
        <td><a href="<{$rootpath}>/hotel/hotel_list.php"><span class="title"> 香港逸东酒店</span></a>
          <br /><span class="price"> <{if $smarty.session.city_id == $gz_city_id }>RMB 1053<{else}>HKD 1170<{/if}></span></td>
      </tr>
      <tr>
        <td height="20" colspan="2"><img src="<{$rootpath}>/images/index/xian.gif" width="288" height="9" /></td>
        </tr>
      <tr>
        <td><img src="<{$rootpath}>/images/hotel/gz/hotel_22.jpg" alt="" width="93" height="65" /></td>
        <td> <a href="<{$rootpath}>/hotel/hotel_list.php"><span class="title">广州欧亚酒店</span></a>
          <br /><span class="price"> <{if $smarty.session.city_id == $gz_city_id }>RMB 700<{else}>HKD 323<{/if}></span></td>
      </tr>
      <tr>
        <td height="20" colspan="2"><img src="<{$rootpath}>/images/index/xian.gif" width="288" height="9" /></td>
        </tr>
      <tr>
        <td><img src="<{$rootpath}>/images/hotel/gz/hotel_31.jpg" alt="" width="93" height="65" /></td>
        <td height="20"><a href="<{$rootpath}>/hotel/hotel_list.php"><span class="title"> 广州祈福华庭</span></a>
          <br /><span class="price"> <{if $smarty.session.city_id == $gz_city_id }>RMB 540<{else}>HKD 587<{/if}></span></td>
      </tr>
      <tr>
        <td height="20" colspan="2"><img src="<{$rootpath}>/images/index/xian.gif" width="288" height="9" /></td>
        </tr>
      <tr>
        <td><img src="<{$rootpath}>/images/hotel/gz/hotel_1.jpg" alt="" width="93" height="65" /></td>
        <td><a href="<{$rootpath}>/hotel/hotel_list.php"><span class="title"> 广州花园酒店</span></a>
          <br /><span class="price"> <{if $smarty.session.city_id == $gz_city_id }>RMB 1580<{else}>HKD 995<{/if}></span></td>
      </tr>
    <{elseif $smarty.session.city_id == $hk_city_id }>
      <tr>
        <td width="102"><img src="<{$rootpath}>/images/hotel/mo/hotel_16.jpg" width="93" height="65" /></td>
        <td width="186" class="hot"><a href="<{$rootpath}>/hotel/hotel_list.php"><span class="title"> 澳门Hard Rock酒店</span> </a>
          <br /><span class="price"> <{if $smarty.session.city_id == $gz_city_id }>RMB 513<{else}>HKD 990<{/if}></span></td>
      </tr>
      <tr>
        <td height="25" colspan="2"><img src="<{$rootpath}>/images/index/xian.gif" width="288" height="9" /></td>
        </tr>
      <tr>
        <td><img src="<{$rootpath}>/images/hotel/mo/hotel_21.jpg" alt="" width="93" height="65" /></td>
        <td height="30" class="hot"><a href="<{$rootpath}>/hotel/hotel_list.php"><span class="title"> 澳门兰桂坊酒店</span></a>
          <br /><span class="price"> <{if $smarty.session.city_id == $gz_city_id }>RMB 450<{else}>HKD 890<{/if}></span></td>
      </tr>
      <tr>
        <td height="20" colspan="2"><img src="<{$rootpath}>/images/index/xian.gif" width="288" height="9" /></td>
        </tr>
      <tr>
        <td><img src="<{$rootpath}>/images/hotel/mo/hotel_4.jpg" alt="" width="93" height="65" /></td>
        <td><a href="<{$rootpath}>/hotel/hotel_list.php"><span class="title"> 皇家金堡酒店</span></a>
          <br /><span class="price"> <{if $smarty.session.city_id == $gz_city_id }>RMB 720<{else}>HKD 610<{/if}></span></td>
      </tr>
      <tr>
        <td height="20" colspan="2"><img src="<{$rootpath}>/images/index/xian.gif" width="288" height="9" /></td>
        </tr>
      <tr>
        <td><img src="<{$rootpath}>/images/hotel/mo/hotel_34.jpg" alt="" width="93" height="65" /></td>
        <td><a href="<{$rootpath}>/hotel/hotel_list.php"><span class="title"> 皇庭海景酒店</span></a>
          <br /><span class="price"> <{if $smarty.session.city_id == $gz_city_id }>RMB 1053<{else}>HKD 645<{/if}></span></td>
      </tr>
      <tr>
        <td height="20" colspan="2"><img src="<{$rootpath}>/images/index/xian.gif" width="288" height="9" /></td>
        </tr>
      <tr>
        <td><img src="<{$rootpath}>/images/hotel/gz/hotel_22.jpg" alt="" width="93" height="65" /></td>
        <td> <a href="<{$rootpath}>/hotel/hotel_list.php"><span class="title">广州欧亚酒店</span></a>
          <br /><span class="price"> <{if $smarty.session.city_id == $gz_city_id }>RMB 700<{else}>HKD 323<{/if}></span></td>
      </tr>
      <tr>
        <td height="20" colspan="2"><img src="<{$rootpath}>/images/index/xian.gif" width="288" height="9" /></td>
        </tr>
      <tr>
        <td><img src="<{$rootpath}>/images/hotel/gz/hotel_31.jpg" alt="" width="93" height="65" /></td>
        <td height="20"><a href="<{$rootpath}>/hotel/hotel_list.php"><span class="title"> 广州祈福华庭</span></a>
          <br /><span class="price"> <{if $smarty.session.city_id == $gz_city_id }>RMB 540<{else}>HKD 587<{/if}></span></td>
      </tr>
      <tr>
        <td height="20" colspan="2"><img src="<{$rootpath}>/images/index/xian.gif" width="288" height="9" /></td>
        </tr>
      <tr>
        <td><img src="<{$rootpath}>/images/hotel/gz/hotel_1.jpg" alt="" width="93" height="65" /></td>
        <td><a href="<{$rootpath}>/hotel/hotel_list.php"><span class="title"> 广州花园酒店</span></a>
          <br /><span class="price"> <{if $smarty.session.city_id == $gz_city_id }>RMB 1580<{else}>HKD 995<{/if}></span></td>
      </tr>
    <{else}>
      <tr>
        <td width="102"><img src="<{$rootpath}>/images/hotel/hk/hotel_12.jpg" width="90" height="64" /></td>
        <td width="186" class="hot"><a href="<{$rootpath}>/hotel/hotel_list.php"><span class="title"> 红茶馆酒店(油麻地)</span> </a>
          <br /><span class="price"> <{if $smarty.session.city_id == $gz_city_id }>RMB 513<{else}>HKD 570<{/if}></span></td>
      </tr>
      <tr>
        <td height="25" colspan="2"><img src="<{$rootpath}>/images/index/xian.gif" width="288" height="9" /></td>
        </tr>
      <tr>
        <td><img src="<{$rootpath}>/images/hotel/hk/hotel_14.jpg" alt="" width="93" height="65" /></td>
        <td height="30" class="hot"><a href="<{$rootpath}>/hotel/hotel_list.php"><span class="title"> Casa Hotel</span></a>
          <br /><span class="price"> <{if $smarty.session.city_id == $gz_city_id }>RMB 450<{else}>HKD 500<{/if}></span></td>
      </tr>
      <tr>
        <td height="20" colspan="2"><img src="<{$rootpath}>/images/index/xian.gif" width="288" height="9" /></td>
        </tr>
      <tr>
        <td><img src="<{$rootpath}>/images/hotel/hk/hotel_19.jpg" alt="" width="93" height="65" /></td>
        <td><a href="<{$rootpath}>/hotel/hotel_list.php"><span class="title"> 城景国际</span></a>
          <br /><span class="price"> <{if $smarty.session.city_id == $gz_city_id }>RMB 720<{else}>HKD 800<{/if}></span></td>
      </tr>
      <tr>
        <td height="20" colspan="2"><img src="<{$rootpath}>/images/index/xian.gif" width="288" height="9" /></td>
        </tr>
      <tr>
        <td><img src="<{$rootpath}>/images/hotel/hk/hotel_32.jpg" alt="" width="93" height="65" /></td>
        <td><a href="<{$rootpath}>/hotel/hotel_list.php"><span class="title"> 香港逸东酒店</span></a>
          <br /><span class="price"> <{if $smarty.session.city_id == $gz_city_id }>RMB 1053<{else}>HKD 1170<{/if}></span></td>
      </tr>
      <tr>
        <td height="20" colspan="2"><img src="<{$rootpath}>/images/index/xian.gif" width="288" height="9" /></td>
        </tr>
      <tr>
        <td><img src="<{$rootpath}>/images/hotel/hk/hotel_51.jpg" alt="" width="93" height="65" /></td>
        <td> <a href="<{$rootpath}>/hotel/hotel_list.php"><span class="title">北角海逸酒店</span></a>
          <br /><span class="price"> <{if $smarty.session.city_id == $gz_city_id }>RMB 700<{else}>HKD 780<{/if}></span></td>
      </tr>
      <tr>
        <td height="20" colspan="2"><img src="<{$rootpath}>/images/index/xian.gif" width="288" height="9" /></td>
        </tr>
      <tr>
        <td><img src="<{$rootpath}>/images/hotel/hk/hotel_59.jpg" alt="" width="93" height="65" /></td>
        <td height="20"><a href="<{$rootpath}>/hotel/hotel_list.php"><span class="title"> 雅逸酒店</span></a>
          <br /><span class="price"> <{if $smarty.session.city_id == $gz_city_id }>RMB 540<{else}>HKD 600<{/if}></span></td>
      </tr>
      <tr>
        <td height="20" colspan="2"><img src="<{$rootpath}>/images/index/xian.gif" width="288" height="9" /></td>
        </tr>
      <tr>
        <td><img src="<{$rootpath}>/images/hotel/hk/hotel_69.jpg" alt="" width="93" height="65" /></td>
        <td><a href="<{$rootpath}>/hotel/hotel_list.php"><span class="title"> 海景嘉福酒店</span></a>
          <br /><span class="price"> <{if $smarty.session.city_id == $gz_city_id }>RMB 1580<{else}>HKD 1760<{/if}></span></td>
      </tr>
    <{/if}>
      <tr>
        <td height="20" colspan="2"><img src="<{$rootpath}>/images/index/xian.gif" width="288" height="9" /></td>
        </tr>
    </table></td>
  </tr>
</table>
<table width="997" border="0" cellpadding="0" cellspacing="0" style="margin:10px 0 0 0; ">
  <tr>
    <td width="250"><a href="<{$rootpath}>/sports/sports.php"><img src="<{$rootpath}>/images/<{$lang}>/index_33.gif" width="250" height="221" border="0" /></a></td>
    <{if $smarty.session.city_id == $gz_city_id }>
    <td width="245"><a href="<{$rootpath}>/transport/transport.php"><img src="<{$rootpath}>/images/<{$lang}>/index_315.gif" width="248" height="221" border="0" /></a></td>
    <{else}>
    <td width="245"><a href="<{$rootpath}>/transport/transport.php"><img src="<{$rootpath}>/images/<{$lang}>/index_34.gif" width="248" height="221" border="0" /></a></td>
    <{/if}>
    <td width="248"><a href="<{$rootpath}>/transport/transport.php"><img src="<{$rootpath}>/images/<{$lang}>/index_35.gif" width="248" height="221" border="0" /></a></td>
    <td width="254"><img src="<{$rootpath}>/images/<{$lang}>/index_36.gif" width="254" height="221" border="0" /></td>
  </tr>
</table>
<table width="997" border="0" cellspacing="0" cellpadding="0" style="margin-top:5px;">
  <tr>
    <td width="340"><img src="<{$rootpath}>/images/<{$lang}>/index_38.gif" width="315" height="43" /></td>
    <td><img src="<{$rootpath}>/images/<{$lang}>/index_40.gif" width="661" height="43" /></td>
  </tr>
</table>
<table width="997" border="0" cellspacing="0" cellpadding="0" style="margin:10px 0 0 0; ">
  <tr>
    <td width="314" style="background:#fff URL(<{$rootpath}>/images/index/index_51.gif) no-repeat">
    
    <ol>
       <li>亚洲音乐节2010</li>
       <li>罗志祥舞法舞天演唱会澳门站</li>
       <li>澳门船票及自助餐套票$298起</li>
       <li>黄子华楝笃笑娱乐圈血肉史2010</li>
       <li>Twins人人弹起演唱会澳门站</li>
       <li>海洋公园哈啰喂门票</li>
       <li>Love! To Hebe演唱会</li>
    </ol></td>
    <td width="23" height="228">&nbsp;</td>
    <td width="660" style="background:#fff URL(<{$rootpath}>/images/index/index_54.gif) no-repeat">
    <ul>
        <li>阿Sa直认与William热恋，二人亲密步出机场，大方合照，为11月的Twins澳门演唱会全力造势。</li>
        <li>台湾舞王罗志祥杀到澳门，演唱会高价票网上15分钟售完，粉丝们叹一票难求，小猪承诺送上惊喜演出。</li>   
        <li>黄子华20年首次踏足红馆开骚，尽爆多年于娱乐圈所见变态现象，事先张扬「如有得罪，有怪莫怪」。</li> 
        <li>来回澳门任饮任食每人不超过300元，建议欣赏「水舞间」，或到威尼斯人金光综艺馆看表演，玩足一日。</li>
        <li>陈慧娴靓声献技，大唱八、九十年代经典首本名曲，网友投票点唱，成名作《逝去的诺言》大比数胜出。</li>
        <li>两大主题公园玩尽哇鬼万圣节，「哈啰喂」大战「黑色世界」，快证全线售罊，网友大赞好玩！</li>
        
    </ul></td>
  </tr>
</table>
<{if $domain == "ticketasia"}>
<br/>
<iframe scrolling="no" frameborder="0" src="http://www.facebook.com/connect/connect.php?id=146909122009523&connections=0&stream=1" 
		  allowtransparency="true" style="border: none; width: 100%; height: 370px;"></iframe>
<{/if}>
<script type="text/javascript">
	function changeCity(city_id,long_name) {
		var url = "<{$file_url}>";
		$.post(url, {"action":"resetLocation","city_id":city_id}, function() {
			window.location.reload();
		});
	}
</script>
<{include file="$smarty_root/footer.tpl" }>