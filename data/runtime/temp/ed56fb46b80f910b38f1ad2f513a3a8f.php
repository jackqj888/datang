<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:23:"./template/pc/index.htm";i:1602661109;s:40:"E:\gz\jixie\jixie\template\pc\header.htm";i:1602559892;s:40:"E:\gz\jixie\jixie\template\pc\footer.htm";i:1600939570;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
<meta name="renderer" content="webkit" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_title"); echo $__VALUE__; ?></title>
<meta name="description" content="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_description"); echo $__VALUE__; ?>" />
<meta name="keywords" content="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_keywords"); echo $__VALUE__; ?>" />
<link href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_cmspath"); echo $__VALUE__; ?>/favicon.ico" rel="shortcut icon" type="image/x-icon" />
<link href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/css/common.css" rel="stylesheet" type="text/css" />
<link href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/css/index.css" rel="stylesheet" type="text/css" />
</head>
<body>
<style>
  .logo-box-c {
    margin-top: 20px;
    height: 130px;
  }
  .lang-c {
    position: relative;
    top: 35px;
    float: right;
    height: 20px;
    padding: 50px;
  }
  .lang-c img {
    margin-top: 4px;
    margin-right: 2px;
  }
  .eyou-edit2 {
    margin-top: 30px!important;
  }
</style>
<div class="header" e-page="header">
  <div class="headerTop container logo-box-c">
    <h1 class="eyou-edit eyou-edit2" e-id="h1" e-type="upload"> <a href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_cmsurl"); echo $__VALUE__; ?>/">  <?php  $tagUiupload = new \think\template\taglib\eyou\TagUiupload; $__LIST__ = $tagUiupload->getUiupload("h1", "header"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?>
      <?php echo $field['value']; else: ?> <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_logo"); echo $__VALUE__; ?>"  alt="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_name"); echo $__VALUE__; ?>" ><?php endif; ?></a></h1>
    <div class="lang-c">
      <?php  $tagLanguage = new \think\template\taglib\eyou\TagLanguage; $_result = $tagLanguage->getLanguage("", "", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $field["title"] = text_msubstr($field["title"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field;$mod = ($e % 2 );$i= intval($key) + 1;?>
      <a href="<?php echo $field['url']; ?>"><img src="<?php echo $field['logo']; ?>" alt="<?php echo $field['title']; ?>"><span><?php echo $field['title']; ?></span></a>
      <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
    </div>
  </div>

</div>
<div class="headerNav">
  <ul class="container nav">
    <li <?php if(CONTROLLER_NAME == 'Index'): ?>class="cur"<?php endif; ?>><a href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_cmsurl"); echo $__VALUE__; ?>/">首页</a></li>
    <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 10; endif; $tagChannel = new \think\template\taglib\eyou\TagChannel; $_result = $tagChannel->getChannel($typeid, "top", "cur"); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $field["typename"] = text_msubstr($field["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field;$mod = ($e % 2 );$i= intval($key) + 1;?>
    <li class="<?php echo $field['currentstyle']; ?>"><a href="<?php echo $field['typeurl']; ?>"><?php echo $field['typename']; ?></a></li>
    <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
  </ul>
</div>
</div>

<main  e-page="index">
<div id="flashs">
  <div class="bd">
    <div class="banerer"> <?php  $tagAdv = new \think\template\taglib\eyou\TagAdv; $_result = $tagAdv->getAdv(1, "", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, 10, true) : $_result->slice(0, 10, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field):  if ($i == 0) : $field["currentstyle"] = ""; else:  $field["currentstyle"] = ""; endif;$mod = ($e % 2 );$i= intval($key) + 1;?>
      <div title="<?php echo $field['title']; ?>" alt="<?php echo $field['title']; ?>" onclick="window.open('<?php echo $field['links']; ?>')"  class="bgitem eyou-edit" id="<?php echo $key; ?>" style="background: url('<?php echo $field['litpic']; ?>') no-repeat scroll center top; height: 600px; width: 100%; cursor: pointer; margin: 0 auto;" e-id="<?php echo $field['id']; ?>" e-type="adv"> </div>
      <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?> </div>
  </div>
  <div class="btn hd"> <?php  $tagAdv = new \think\template\taglib\eyou\TagAdv; $_result = $tagAdv->getAdv(1, "", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, 10, true) : $_result->slice(0, 10, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field):  if ($i == 0) : $field["currentstyle"] = ""; else:  $field["currentstyle"] = ""; endif;$mod = ($e % 2 );$i= intval($key) + 1;?><span><?php echo $i; ?></span><?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?></div>
</div>

<!--search-->
<div class="search container">
  <p id="commonHeaderkeywords"> <b>热门关键词：</b><?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "2"; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 5; endif; $channelid = ""; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "",      "noflag"=> "",      "channel"=> $channelid, ); $tag = array (
  'row' => '5',
  'titlelen' => '30',
  'typeid' => '2',
  'orderby' => 'click',
); $tagArclist = new \think\template\taglib\eyou\TagArclist; $_result = $tagArclist->getArclist($param, $row, "click", "","desc","",$tag,"0");if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$field["title"] = text_msubstr($field["title"], 0, 30, false);$field["seo_description"] = text_msubstr($field["seo_description"], 0, 160, true);$mod = ($e % 2 );$i= intval($key) + 1;?> <a href="<?php echo $field['typeurl']; ?>" title="<?php echo $field['title']; ?>"> <?php echo $field['title']; ?> </a> <?php ++$e; $aid = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?> </p>
  <div class="sBox">
    <form name="search" class="sidebar-search" method="get" action="<?php  $tagSearchurl = new \think\template\taglib\eyou\TagSearchurl; $__VALUE__ = $tagSearchurl->getSearchurl(); echo $__VALUE__?>">
      <input type="hidden" name="channel" value="" />
      <input type="hidden" name="typeid" value="" />
      <input type="hidden" name="uiset" value="<?php echo \think\Request::instance()->param('uiset'); ?>" />
      <input type="hidden" name="v" value="<?php echo \think\Request::instance()->param('v'); ?>" />
      <input type="text" value="输入关键词查询" id="keywords" name="keywords" onfocus="if(this.value=='输入关键词查询'){this.value=''}"
                                onblur="if(this.value=='')this.value='输入关键词查询'" />
      <a href="javascript:document.search.submit();"></a>
    </form>
  </div>
</div>
<div class="clear"></div>
<div class="baozhang container">
  <h3 class="eyou-edit" e-id="153" e-type="text">  <?php  $tagUitext = new \think\template\taglib\eyou\TagUitext; $__LIST__ = $tagUitext->getUitext("153", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?><?php echo $field['value']; else: ?>
    贝壳粉生态涂料领航者，<b>合作有保障</b><?php endif; ?></h3>
  <p class="eyou-edit" e-id="154" e-type="text">  <?php  $tagUitext = new \think\template\taglib\eyou\TagUitext; $__LIST__ = $tagUitext->getUitext("154", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?><?php echo $field['value']; else: ?>
    我们自有大型工厂，欢迎实地参观考察<?php endif; ?></p>
  <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "8"; endif; if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 10; endif; $tagChannelartlist = new \think\template\taglib\eyou\TagChannelartlist; $_result = $tagChannelartlist->getChannelartlist($typeid, "self"); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$channelartlist): $channelartlist["typename"] = text_msubstr($channelartlist["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $channelartlist;$mod = ($e % 2 );$i= intval($key) + 1;?>
  <dl>
    <dt> <a href="<?php  $__VALUE__ = isset($channelartlist["typeurl"]) ? $channelartlist["typeurl"] : "变量名不存在"; echo $__VALUE__; ?>" target="_blank">
      <p style="text-align: center;">
        <iframe frameborder="0" width="447" height="280" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_3"); echo $__VALUE__; ?>" allowfullscreen=""></iframe>
      </p>
      </a> </dt>
    <dd>
      <h4><a href="<?php  $__VALUE__ = isset($channelartlist["typeurl"]) ? $channelartlist["typeurl"] : "变量名不存在"; echo $__VALUE__; ?>" target="_blank" class="eyou-edit" e-id="1055" e-type="text">  <?php  $tagUitext = new \think\template\taglib\eyou\TagUitext; $__LIST__ = $tagUitext->getUitext("1055", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?><?php echo $field['value']; else:  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_name"); echo $__VALUE__; endif; ?></a></h4>
      <p class="eyou-edit" e-id="155" e-type="text">  <?php  $tagUitext = new \think\template\taglib\eyou\TagUitext; $__LIST__ = $tagUitext->getUitext("155", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?><?php echo $field['value']; else:  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $tagType = new \think\template\taglib\eyou\TagType; $_result = $tagType->getType($typeid, "self", "content"); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator):  $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: $field = $__LIST__;?><?php echo html_msubstr($field['content'],0,235); ?>...<?php endif; else: echo htmlspecialchars_decode("");endif; $field = []; endif; ?></p>
      <a href="<?php  $__VALUE__ = isset($channelartlist["typeurl"]) ? $channelartlist["typeurl"] : "变量名不存在"; echo $__VALUE__; ?>" target="_blank" class="btn01">了解更多</a> <a href="http://wpa.qq.com/msgrd?v=3&site=<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_name"); echo $__VALUE__; ?>&menu=yes&uin=<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_2"); echo $__VALUE__; ?>" target="_blank" class="btn02">在线咨询</a> </dd>
  </dl>
  <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $typeid = $row = ""; unset($channelartlist); ?>
  <div class="bzBox" id="bzBox">
    <div class="bd eyou-edit" e-id="1550" e-type="arclist" >
      <?php  $tagUiarclist = new \think\template\taglib\eyou\TagUiarclist; $__LIST__ = $tagUiarclist->getUiarclist("11","1550", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["info"]) || (($__LIST__["info"] instanceof \think\Collection || $__LIST__["info"] instanceof \think\Paginator ) && $__LIST__["info"]->isEmpty()))): $field = $__LIST__;  $ui_typeid = !empty($field["info"]["typeid"]) ? $field["info"]["typeid"] : "";?>
      <ul>
        <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 10; endif; $channelid = ""; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "",      "noflag"=> "",      "channel"=> $channelid, ); $tag = array (
  'titlelen' => '20',
); $tagArclist = new \think\template\taglib\eyou\TagArclist; $_result = $tagArclist->getArclist($param, $row, "", "","desc","",$tag,"0");if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$field["title"] = text_msubstr($field["title"], 0, 20, false);$field["seo_description"] = text_msubstr($field["seo_description"], 0, 160, true);$mod = ($e % 2 );$i= intval($key) + 1;?>
        <li> <a href="<?php echo $field['arcurl']; ?>" title="<?php echo $field['title']; ?>" target="_blank"> <img src="<?php echo $field['litpic']; ?>" width="238" height="161" alt="<?php echo $field['title']; ?>" />
          <p><?php echo $field['title']; ?></p>
          </a> </li>
        <?php ++$e; $aid = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
      </ul>
      <?php $ui_typeid = $ui_row = ""; endif; ?>
    </div>
  </div>
 </div>
<div class="pro eyou-edit" e-id="1551" e-type="arclist"> 
   <?php  $tagUiarclist = new \think\template\taglib\eyou\TagUiarclist; $__LIST__ = $tagUiarclist->getUiarclist("2","1551", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["info"]) || (($__LIST__["info"] instanceof \think\Collection || $__LIST__["info"] instanceof \think\Paginator ) && $__LIST__["info"]->isEmpty()))): $field = $__LIST__;  $ui_typeid = !empty($field["info"]["typeid"]) ? $field["info"]["typeid"] : ""; if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 10; endif; $tagChannelartlist = new \think\template\taglib\eyou\TagChannelartlist; $_result = $tagChannelartlist->getChannelartlist($typeid, "self"); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$channelartlist): $channelartlist["typename"] = text_msubstr($channelartlist["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $channelartlist;$mod = ($e % 2 );$i= intval($key) + 1;?>
  <h3 class="eyou-edit" e-id="156" e-type="text">  <?php  $tagUitext = new \think\template\taglib\eyou\TagUitext; $__LIST__ = $tagUitext->getUitext("156", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?><?php echo $field['value']; else: ?>产品系列丰富，销路自然好的不得了<?php endif; ?></h3>
  <p class="eyou-edit" e-id="157" e-type="text">  <?php  $tagUitext = new \think\template\taglib\eyou\TagUitext; $__LIST__ = $tagUitext->getUitext("157", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?><?php echo $field['value']; else: ?>新一代环保涂—贝壳粉，人见人爱，样样都让你轻松获利<?php endif; ?></p>
  <div class="container">
    <div class="proLeft"> 
      <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $tagType = new \think\template\taglib\eyou\TagType; $_result = $tagType->getType($typeid, "self", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator):  $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: $field = $__LIST__;?>
      <h3><a href="<?php echo $field['typeurl']; ?>"><?php echo $field['typename']; ?></a><em><?php echo $field['englist_name']; ?></em></h3>
      <?php endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
      <ul>
        <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 6; endif; $tagChannel = new \think\template\taglib\eyou\TagChannel; $_result = $tagChannel->getChannel($typeid, "son", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $field["typename"] = text_msubstr($field["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field;$mod = ($e % 2 );$i= intval($key) + 1;?>
        <li style="background: initial;"> <a href="<?php echo $field['typeurl']; ?>"><?php echo $field['typename']; ?></a> </li>
        <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
      </ul>
      
      <div class="phone eyou-edit" <?php  $tagAd = new \think\template\taglib\eyou\TagAd; $_result = $tagAd->getAd("19"); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator):  $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "";else: $field = $__LIST__;?>style="background: url(<?php echo $field['litpic']; ?>) no-repeat center bottom;" e-id="<?php echo $field['id']; ?>" e-type="adv"<?php endif; else: echo "";endif; $field = []; ?>>
        <p class="eyou-edit" e-id="158" e-type="text">  <?php  $tagUitext = new \think\template\taglib\eyou\TagUitext; $__LIST__ = $tagUitext->getUitext("158", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?><?php echo $field['value']; else: ?>致富热线：<em><?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_1"); echo $__VALUE__; ?></em><?php endif; ?></p>
      </div>
    </div>
    <div class="proRight">
      <div class="topmenu">
        <ul>
          <li class="cur first"><a href="<?php  $__VALUE__ = isset($channelartlist["typeurl"]) ? $channelartlist["typeurl"] : "变量名不存在"; echo $__VALUE__; ?>" class="products0 eyou-edit" e-id="1581" e-type="text"> <?php  $tagUitext = new \think\template\taglib\eyou\TagUitext; $__LIST__ = $tagUitext->getUitext("1581", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?><?php echo $field['value']; else: ?> 推荐产品<?php endif; ?></a> </li>
          <li class=""><a href="<?php  $__VALUE__ = isset($channelartlist["typeurl"]) ? $channelartlist["typeurl"] : "变量名不存在"; echo $__VALUE__; ?>" class="products1 eyou-edit" e-id="1582" e-type="text"> <?php  $tagUitext = new \think\template\taglib\eyou\TagUitext; $__LIST__ = $tagUitext->getUitext("1582", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?><?php echo $field['value']; else: ?> 最新产品<?php endif; ?></a> </li>
        </ul>
       <a href="<?php  $__VALUE__ = isset($channelartlist["typeurl"]) ? $channelartlist["typeurl"] : "变量名不存在"; echo $__VALUE__; ?>" class="more productsmor">MORE +</a>
      </div>
      <div class="proBox" >
        <ul>
          <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 6; endif; $channelid = ""; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "c",      "noflag"=> "",      "channel"=> $channelid, ); $tag = array (
  'titlelen' => '20',
  'row' => '6',
  'flag' => 'c',
); $tagArclist = new \think\template\taglib\eyou\TagArclist; $_result = $tagArclist->getArclist($param, $row, "", "","desc","",$tag,"0");if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$field["title"] = text_msubstr($field["title"], 0, 20, false);$field["seo_description"] = text_msubstr($field["seo_description"], 0, 160, true);$mod = ($e % 2 );$i= intval($key) + 1;?>
          <li><a href="<?php echo $field['arcurl']; ?>" target="_blank" title="<?php echo $field['title']; ?>"> <img src="<?php echo $field['litpic']; ?>" width="226" height="226" alt="<?php echo $field['title']; ?>">
            <p> <?php echo $field['title']; ?></p>
            </a></li>
          <?php ++$e; $aid = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
        </ul>
       </div>
      <div class="proBox" style='display: none;'>
        <ul>
          <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 6; endif; $channelid = ""; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "",      "noflag"=> "",      "channel"=> $channelid, ); $tag = array (
  'titlelen' => '20',
  'row' => '6',
); $tagArclist = new \think\template\taglib\eyou\TagArclist; $_result = $tagArclist->getArclist($param, $row, "", "","desc","",$tag,"0");if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$field["title"] = text_msubstr($field["title"], 0, 20, false);$field["seo_description"] = text_msubstr($field["seo_description"], 0, 160, true);$mod = ($e % 2 );$i= intval($key) + 1;?>
          <li><a href="<?php echo $field['arcurl']; ?>" target="_blank" title="<?php echo $field['title']; ?>"> <img src="<?php echo $field['litpic']; ?>" width="226" height="226" alt="<?php echo $field['title']; ?>">
            <p> <?php echo $field['title']; ?></p>
            </a></li>
          <?php ++$e; $aid = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
        </ul>
      </div>
    </div>
  </div>
  <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $typeid = $row = ""; unset($channelartlist); $ui_typeid = $ui_row = ""; endif; ?> 
</div>
<div class="jmys">
  <div class="container jmysBox eyou-edit" <?php  $tagAd = new \think\template\taglib\eyou\TagAd; $_result = $tagAd->getAd("17"); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator):  $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "";else: $field = $__LIST__;?>style="background: url(<?php echo $field['litpic']; ?>) no-repeat center top;" e-id="<?php echo $field['id']; ?>" e-type="adv"<?php endif; else: echo "";endif; $field = []; ?>>
    <div class="wen01">
      <h4 class="eyou-edit" e-id="159" e-type="text">  <?php  $tagUitext = new \think\template\taglib\eyou\TagUitext; $__LIST__ = $tagUitext->getUitext("159", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?><?php echo $field['value']; else: ?><b>实力雄厚</b>高端品牌<?php endif; ?></h4>
      <p class="eyou-edit" e-id="160" e-type="text">  <?php  $tagUitext = new \think\template\taglib\eyou\TagUitext; $__LIST__ = $tagUitext->getUitext("160", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?><?php echo $field['value']; else: ?>我们是一家集装饰涂料研发、设计、生产、销售、服务于一体的高端品牌，行业翘楚。<?php endif; ?></p>
    </div>
    <div class="wen02">
      <h4 class="eyou-edit" e-id="161" e-type="text">  <?php  $tagUitext = new \think\template\taglib\eyou\TagUitext; $__LIST__ = $tagUitext->getUitext("161", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?><?php echo $field['value']; else: ?><b>专利配方</b>产品市场竞争强<?php endif; ?></h4>
      <p class="eyou-edit" e-id="162" e-type="text">  <?php  $tagUitext = new \think\template\taglib\eyou\TagUitext; $__LIST__ = $tagUitext->getUitext("162", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?><?php echo $field['value']; else: ?>业内涂料中贝壳粉成分高，长期与中科院、中山大学、华南理工大学、广东海洋大学保持合作关系。<?php endif; ?></p>
    </div>
    <div class="wen03">
      <h4 class="eyou-edit" e-id="163" e-type="text">  <?php  $tagUitext = new \think\template\taglib\eyou\TagUitext; $__LIST__ = $tagUitext->getUitext("163", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?><?php echo $field['value']; else: ?><b>施工人员免费培训</b>快速上手<?php endif; ?></h4>
      <p class="eyou-edit" e-id="164" e-type="text">  <?php  $tagUitext = new \think\template\taglib\eyou\TagUitext; $__LIST__ = $tagUitext->getUitext("164", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?><?php echo $field['value']; else: ?>贝壳粉施工简单，上手快，公司免费提供施工、业务、导购培训，让你最快建立好施工团队。<?php endif; ?></p>
    </div>
    <div class="wen04">
      <h4 class="eyou-edit" e-id="165" e-type="text">  <?php  $tagUitext = new \think\template\taglib\eyou\TagUitext; $__LIST__ = $tagUitext->getUitext("165", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?><?php echo $field['value']; else: ?><b>价格有优势</b>利润高，赚钱快<?php endif; ?></h4>
      <p class="eyou-edit" e-id="166" e-type="text">  <?php  $tagUitext = new \think\template\taglib\eyou\TagUitext; $__LIST__ = $tagUitext->getUitext("166", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?><?php echo $field['value']; else: ?>原材料到成品，自己工厂独立完成，大大降低生产成本，最大程度让利经销商<?php endif; ?></p>
    </div>
    <div class="wen05">
      <h4 class="eyou-edit" e-id="167" e-type="text">  <?php  $tagUitext = new \think\template\taglib\eyou\TagUitext; $__LIST__ = $tagUitext->getUitext("167", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?><?php echo $field['value']; else: ?><b>业内最低加盟门槛</b>免加盟费<?php endif; ?></h4>
      <p class="eyou-edit" e-id="168" e-type="text">  <?php  $tagUitext = new \think\template\taglib\eyou\TagUitext; $__LIST__ = $tagUitext->getUitext("168", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?><?php echo $field['value']; else: ?>加盟我们2万起步，0加盟费。与加盟商共同进退，开拓市场，做长久生意！<?php endif; ?></p>
    </div>
    <div class="phone">
      <p class="eyou-edit" e-id="169" e-type="text">  <?php  $tagUitext = new \think\template\taglib\eyou\TagUitext; $__LIST__ = $tagUitext->getUitext("169", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?><?php echo $field['value']; else: ?>全国加盟咨询热线：<em><?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_1"); echo $__VALUE__; ?></em><?php endif; ?></p>
      <a href="http://wpa.qq.com/msgrd?v=3&site=<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_name"); echo $__VALUE__; ?>&menu=yes&uin=<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_2"); echo $__VALUE__; ?>" target="_blank"></a> </div>
  </div>
</div>
<div class="n_box container">
  <div class="news newslist">
    <div class="title">
      <ul>
        <li class="cur eyou-edit" e-id="188" e-type="arclist">  <?php  $tagUiarclist = new \think\template\taglib\eyou\TagUiarclist; $__LIST__ = $tagUiarclist->getUiarclist("20","188", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["info"]) || (($__LIST__["info"] instanceof \think\Collection || $__LIST__["info"] instanceof \think\Paginator ) && $__LIST__["info"]->isEmpty()))): $field = $__LIST__;  $ui_typeid = !empty($field["info"]["typeid"]) ? $field["info"]["typeid"] : ""; if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $tagType = new \think\template\taglib\eyou\TagType; $_result = $tagType->getType($typeid, "self", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator):  $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: $field = $__LIST__;?> <a href="<?php echo $field['typeurl']; ?>" class="news0"> <?php echo $field['typename']; ?></a> <?php endif; else: echo htmlspecialchars_decode("");endif; $field = []; $ui_typeid = $ui_row = ""; endif; ?> </li>
        <li class="eyou-edit" e-id="189" e-type="arclist">  <?php  $tagUiarclist = new \think\template\taglib\eyou\TagUiarclist; $__LIST__ = $tagUiarclist->getUiarclist("21","189", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["info"]) || (($__LIST__["info"] instanceof \think\Collection || $__LIST__["info"] instanceof \think\Paginator ) && $__LIST__["info"]->isEmpty()))): $field = $__LIST__;  $ui_typeid = !empty($field["info"]["typeid"]) ? $field["info"]["typeid"] : ""; if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $tagType = new \think\template\taglib\eyou\TagType; $_result = $tagType->getType($typeid, "self", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator):  $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: $field = $__LIST__;?> <a href="<?php echo $field['typeurl']; ?>" class="news0"> <?php echo $field['typename']; ?></a> <?php endif; else: echo htmlspecialchars_decode("");endif; $field = []; $ui_typeid = $ui_row = ""; endif; ?> </li>
      </ul>
      <a href="javascript:;" class="more newsmor">MORE+</a> </div>
    <div class="newsBox eyou-edit" e-id="190" e-type="arclist">  <?php  $tagUiarclist = new \think\template\taglib\eyou\TagUiarclist; $__LIST__ = $tagUiarclist->getUiarclist("20","190", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["info"]) || (($__LIST__["info"] instanceof \think\Collection || $__LIST__["info"] instanceof \think\Paginator ) && $__LIST__["info"]->isEmpty()))): $field = $__LIST__;  $ui_typeid = !empty($field["info"]["typeid"]) ? $field["info"]["typeid"] : ""; if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 3; endif; $channelid = ""; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "",      "noflag"=> "",      "channel"=> $channelid, ); $tag = array (
  'titlelen' => '30',
  'row' => '3',
  'infolen' => '50',
); $tagArclist = new \think\template\taglib\eyou\TagArclist; $_result = $tagArclist->getArclist($param, $row, "", "","desc","",$tag,"0");if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$field["title"] = text_msubstr($field["title"], 0, 30, false);$field["seo_description"] = text_msubstr($field["seo_description"], 0, 50, true);$mod = ($e % 2 );$i= intval($key) + 1;?>
      <dl>
        <dt><a href="<?php echo $field['arcurl']; ?>" title="<?php echo $field['title']; ?>" target="_blank"> <img src="<?php echo $field['litpic']; ?>" width="126" height="84" alt="<?php echo $field['title']; ?>" /></a> </dt>
        <dd>
          <h5> <a href="<?php echo $field['arcurl']; ?>" title="<?php echo $field['title']; ?>" target="_blank"><?php echo $field['title']; ?></a></h5>
          <p><?php echo $field['seo_description']; ?>...</p>
        </dd>
      </dl>
      <?php ++$e; $aid = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; $ui_typeid = $ui_row = ""; endif; ?> </div>
    <div class="newsBox eyou-edit" e-id="191" e-type="arclist" style='display: none;'>  <?php  $tagUiarclist = new \think\template\taglib\eyou\TagUiarclist; $__LIST__ = $tagUiarclist->getUiarclist("21","191", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["info"]) || (($__LIST__["info"] instanceof \think\Collection || $__LIST__["info"] instanceof \think\Paginator ) && $__LIST__["info"]->isEmpty()))): $field = $__LIST__;  $ui_typeid = !empty($field["info"]["typeid"]) ? $field["info"]["typeid"] : ""; if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 3; endif; $channelid = ""; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "",      "noflag"=> "",      "channel"=> $channelid, ); $tag = array (
  'titlelen' => '20',
  'row' => '3',
  'infolen' => '50',
); $tagArclist = new \think\template\taglib\eyou\TagArclist; $_result = $tagArclist->getArclist($param, $row, "", "","desc","",$tag,"0");if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$field["title"] = text_msubstr($field["title"], 0, 20, false);$field["seo_description"] = text_msubstr($field["seo_description"], 0, 50, true);$mod = ($e % 2 );$i= intval($key) + 1;?>
      <dl>
        <dt><a href="<?php echo $field['arcurl']; ?>" title="<?php echo $field['title']; ?>" target="_blank"> <img src="<?php echo $field['litpic']; ?>" width="126" height="84" alt="<?php echo $field['title']; ?>" /></a> </dt>
        <dd>
          <h5> <a href="<?php echo $field['arcurl']; ?>" title="<?php echo $field['title']; ?>" target="_blank"><?php echo $field['title']; ?></a></h5>
          <p><?php echo $field['seo_description']; ?>...</p>
        </dd>
      </dl>
      <?php ++$e; $aid = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; $ui_typeid = $ui_row = ""; endif; ?> </div>
  </div>
  <div class="wenda eyou-edit" e-id="192" e-type="arclist">  <?php  $tagUiarclist = new \think\template\taglib\eyou\TagUiarclist; $__LIST__ = $tagUiarclist->getUiarclist("22","192", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["info"]) || (($__LIST__["info"] instanceof \think\Collection || $__LIST__["info"] instanceof \think\Paginator ) && $__LIST__["info"]->isEmpty()))): $field = $__LIST__;  $ui_typeid = !empty($field["info"]["typeid"]) ? $field["info"]["typeid"] : ""; if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 10; endif; $tagChannelartlist = new \think\template\taglib\eyou\TagChannelartlist; $_result = $tagChannelartlist->getChannelartlist($typeid, "self"); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$channelartlist): $channelartlist["typename"] = text_msubstr($channelartlist["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $channelartlist;$mod = ($e % 2 );$i= intval($key) + 1;?>
    <div class="title">
      <h3><a href="<?php  $__VALUE__ = isset($channelartlist["typeurl"]) ? $channelartlist["typeurl"] : "变量名不存在"; echo $__VALUE__; ?>"><?php  $__VALUE__ = isset($channelartlist["typename"]) ? $channelartlist["typename"] : "变量名不存在"; echo $__VALUE__; ?></a></h3>
      <a href="<?php  $__VALUE__ = isset($channelartlist["typeurl"]) ? $channelartlist["typeurl"] : "变量名不存在"; echo $__VALUE__; ?>" class="more">MORE+</a> </div>
    <div class="wdBox quetion">
      <div class="bd"> <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 10; endif; $channelid = ""; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "",      "noflag"=> "",      "channel"=> $channelid, ); $tag = array (
  'titlelen' => '20',
  'infolen' => '30',
); $tagArclist = new \think\template\taglib\eyou\TagArclist; $_result = $tagArclist->getArclist($param, $row, "", "","desc","",$tag,"0");if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$field["title"] = text_msubstr($field["title"], 0, 20, false);$field["seo_description"] = text_msubstr($field["seo_description"], 0, 30, true);$mod = ($e % 2 );$i= intval($key) + 1;?>
        <div class="wdList">
          <h5> <a href="<?php echo $field['arcurl']; ?>" title="<?php echo $field['title']; ?>" target="_blank"><?php echo $field['title']; ?></a></h5>
          <p> 答：<?php echo $field['seo_description']; ?>...</p>
        </div>
        <?php ++$e; $aid = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?> </div>
    </div>
    <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $typeid = $row = ""; unset($channelartlist); $ui_typeid = $ui_row = ""; endif; ?> </div>
</div>
<!--footer-->
</main>
<div class="footer"  e-page="footer">
  <ul class="container f_nav">
    <li class="cur"><a href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_cmsurl"); echo $__VALUE__; ?>/">首页</a></li>
    <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 10; endif; $tagChannel = new \think\template\taglib\eyou\TagChannel; $_result = $tagChannel->getChannel($typeid, "top", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $field["typename"] = text_msubstr($field["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field;$mod = ($e % 2 );$i= intval($key) + 1;?>
    <li><a href="<?php echo $field['typeurl']; ?>"><?php echo $field['typename']; ?></a></li>
    <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
  </ul>
  <div class="f_btm container">
    <dl>
      <dt class="eyou-edit" e-id="f1" e-type="upload"> <a href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_cmsurl"); echo $__VALUE__; ?>/">  <?php  $tagUiupload = new \think\template\taglib\eyou\TagUiupload; $__LIST__ = $tagUiupload->getUiupload("f1", "footer"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?>
        <?php echo $field['value']; else: ?> <a href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_cmsurl"); echo $__VALUE__; ?>/"><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_4"); echo $__VALUE__; ?>" width="85" height="99" /></a> <?php endif; ?></dt>
      <dd>
        <p class="phone eyou-edit" e-id="f2" e-type="text">  <?php  $tagUitext = new \think\template\taglib\eyou\TagUitext; $__LIST__ = $tagUitext->getUitext("f2", "footer"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?>
          <?php echo $field['value']; else:  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_name"); echo $__VALUE__; ?><em></em> 公司地址：<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_5"); echo $__VALUE__; endif; ?></p>
        <p class="phone eyou-edit" e-id="f3" e-type="text">  <?php  $tagUitext = new \think\template\taglib\eyou\TagUitext; $__LIST__ = $tagUitext->getUitext("f3", "footer"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?>
          <?php echo $field['value']; else: ?>电话：<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_1"); echo $__VALUE__; ?> / <?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_6"); echo $__VALUE__; ?><em></em>传真：<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_7"); echo $__VALUE__; endif; ?></p>
        <p class="phone eyou-edit" e-id="f4" e-type="text">   <?php  $tagUitext = new \think\template\taglib\eyou\TagUitext; $__LIST__ = $tagUitext->getUitext("f4", "footer"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?>
          <?php echo $field['value']; else: ?>企业邮箱：<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_8"); echo $__VALUE__; endif; ?></p>
        <p></p>
        <p><?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_copyright"); echo $__VALUE__; ?></p>
        <p><?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_recordnum"); echo $__VALUE__; ?></p>
      </dd>
    </dl>
    <div class="ewm eyou-edit" e-id="181" e-type="upload"> 
     <?php  $tagUiupload = new \think\template\taglib\eyou\TagUiupload; $__LIST__ = $tagUiupload->getUiupload("f5", "footer"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?>
      <?php echo $field['value']; else: ?> 
      <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_9"); echo $__VALUE__; ?>" width="120" height="120">
    <?php endif; ?>
      <p>扫描关注</p>
    </div>
  </div>
</div>
<div class="rtTop">
  <h4><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/backbg.png" width="43" height="86" alt="回顶部" title="回顶部" /></h4>
</div>
<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_thirdcode_pc"); echo $__VALUE__; ?> 
<!-- 应用插件标签 start --> 
 <?php  $tagWeapp = new \think\template\taglib\eyou\TagWeapp; $__VALUE__ = $tagWeapp->getWeapp("default"); echo $__VALUE__; ?> 
<!-- 应用插件标签 end -->
 
<script type="text/javascript" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/im.js"></script> 
<script src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/index.js" type="text/javascript"></script> 
<?php  $tagUi = new \think\template\taglib\eyou\TagUi; $__VALUE__ = $tagUi->getUi(); echo $__VALUE__; ?>
</body>
</html>