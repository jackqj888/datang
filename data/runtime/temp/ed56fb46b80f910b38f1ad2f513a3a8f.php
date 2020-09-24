<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:23:"./template/pc/index.htm";i:1600937221;s:71:"/Users/haoming/work/dl/客户/大唐机械/jixie/template/pc/header.htm";i:1600937221;s:71:"/Users/haoming/work/dl/客户/大唐机械/jixie/template/pc/footer.htm";i:1600937209;}*/ ?>
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
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-top: 30px;
    height: 130px;
  }
  .lang-c {
    position: relative;
    top: 35px;
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
<!--规模-->
<div class="guimo">
  <h3 class="eyou-edit" e-id="101" e-type="text">  <?php  $tagUitext = new \think\template\taglib\eyou\TagUitext; $__LIST__ = $tagUitext->getUitext("101", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?>
    <?php echo $field['value']; else: ?>
    涂料市场规模3000亿
    <?php endif; ?> </h3>
  <em></em>
  <p class="eyou-edit" e-id="102" e-type="text">  <?php  $tagUitext = new \think\template\taglib\eyou\TagUitext; $__LIST__ = $tagUitext->getUitext("102", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?>
    <?php echo $field['value']; else: ?>
    我们和你一起掘金！
    <?php endif; ?> </p>
  <dl class="container">
    <dt class="eyou-edit" e-id="103" e-type="upload">  <?php  $tagUiupload = new \think\template\taglib\eyou\TagUiupload; $__LIST__ = $tagUiupload->getUiupload("103", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?>
      <?php echo $field['value']; else: ?> <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/guimo.jpg" width="460" height="384"> <?php endif; ?> </dt>
    <dd class="eyou-edit" e-id="104" e-type="text">  <?php  $tagUitext = new \think\template\taglib\eyou\TagUitext; $__LIST__ = $tagUitext->getUitext("104", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?>
      <?php echo $field['value']; else: ?>
      <p>2013年全球涂料总销量达到4175万吨，在过去的十年里，<br>
        平均每年上涨5.4%。</p>
      <p>2013年全球涂料行业销售额达到1273亿美元，同比增长6.1%。</p>
      <p>2014 年涂料终端市场分布：10 亿美元。 </p>
      <p><b>中国涂料行业的规模大约为2800-3000 亿元。</b></p>
      <?php endif; ?> </dd>
  </dl>
</div>
<div class="shidai">
  <h4 class="eyou-edit" e-id="105" e-type="text">  <?php  $tagUitext = new \think\template\taglib\eyou\TagUitext; $__LIST__ = $tagUitext->getUitext("105", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?>
    <?php echo $field['value']; else: ?>
    中国涂料工业成跨越式发展
    <?php endif; ?> </h4>
  <h3 class="eyou-edit" e-id="106" e-type="text">  <?php  $tagUitext = new \think\template\taglib\eyou\TagUitext; $__LIST__ = $tagUitext->getUitext("106", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?>
    <?php echo $field['value']; else: ?>
    涂料家装行业<b>5.0时代已经到来</b> <?php endif; ?> </h3>
  <p><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/shidai02.png">
    <c class="eyou-edit" e-id="107" e-type="text">  <?php  $tagUitext = new \think\template\taglib\eyou\TagUitext; $__LIST__ = $tagUitext->getUitext("107", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?>
      <?php echo $field['value']; else: ?>
      一个巨大的市场商机已诞生，你是否已经察觉？ 
      <?php endif; ?> </c>
    <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/shidai02.png"></p>
  <ul>
    <li class="li01 eyou-edit" <?php  $tagAd = new \think\template\taglib\eyou\TagAd; $_result = $tagAd->getAd("10"); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator):  $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "";else: $field = $__LIST__;?>style="background: url(<?php echo $field['litpic']; ?>) no-repeat center bottom" e-id="<?php echo $field['id']; ?>" e-type="adv"<?php endif; else: echo "";endif; $field = []; ?>>
      <h5 class="eyou-edit" e-id="108" e-type="text"> <?php  $tagUitext = new \think\template\taglib\eyou\TagUitext; $__LIST__ = $tagUitext->getUitext("108", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?>
        <?php echo $field['value']; else: ?>1.0 时代 - 石灰 <?php endif; ?></h5>
      <p class="eyou-edit" e-id="109" e-type="text"> <?php  $tagUitext = new \think\template\taglib\eyou\TagUitext; $__LIST__ = $tagUitext->getUitext("109", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?>
        <?php echo $field['value']; else: ?>市场早已淘汰，没人做，无利可图<?php endif; ?></p>
    </li>
    <li class="li02 eyou-edit" <?php  $tagAd = new \think\template\taglib\eyou\TagAd; $_result = $tagAd->getAd("11"); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator):  $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "";else: $field = $__LIST__;?>style="background: url(<?php echo $field['litpic']; ?>) no-repeat center bottom" e-id="<?php echo $field['id']; ?>" e-type="adv"<?php endif; else: echo "";endif; $field = []; ?>>
      <h5 class="eyou-edit" e-id="110" e-type="text"> <?php  $tagUitext = new \think\template\taglib\eyou\TagUitext; $__LIST__ = $tagUitext->getUitext("110", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?>
        <?php echo $field['value']; else: ?>2.0 时代 - 家装壁纸<?php endif; ?></h5>
      <p class="eyou-edit" e-id="111" e-type="text"> <?php  $tagUitext = new \think\template\taglib\eyou\TagUitext; $__LIST__ = $tagUitext->getUitext("111", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?>
        <?php echo $field['value']; else: ?>品牌多，利润低，逐渐被消费者舍弃<?php endif; ?></p>
    </li>
    <li class="li03 eyou-edit" <?php  $tagAd = new \think\template\taglib\eyou\TagAd; $_result = $tagAd->getAd("12"); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator):  $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "";else: $field = $__LIST__;?>style="background: url(<?php echo $field['litpic']; ?>) no-repeat center bottom" e-id="<?php echo $field['id']; ?>" e-type="adv"<?php endif; else: echo "";endif; $field = []; ?>>
      <h5 class="eyou-edit" e-id="112" e-type="text"> <?php  $tagUitext = new \think\template\taglib\eyou\TagUitext; $__LIST__ = $tagUitext->getUitext("112", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?>
        <?php echo $field['value']; else: ?>3.0 时代 - 乳胶漆<?php endif; ?></h5>
      <p class="eyou-edit" e-id="113" e-type="text"> <?php  $tagUitext = new \think\template\taglib\eyou\TagUitext; $__LIST__ = $tagUitext->getUitext("113", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?>
        <?php echo $field['value']; else: ?>市场乱，品牌多，竞争激烈，不环保<?php endif; ?></p>
    </li>
    <li class="li04 eyou-edit" <?php  $tagAd = new \think\template\taglib\eyou\TagAd; $_result = $tagAd->getAd("13"); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator):  $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "";else: $field = $__LIST__;?>style="background: url(<?php echo $field['litpic']; ?>) no-repeat center bottom" e-id="<?php echo $field['id']; ?>" e-type="adv"<?php endif; else: echo "";endif; $field = []; ?>>
      <h5 class="eyou-edit" e-id="114" e-type="text"> <?php  $tagUitext = new \think\template\taglib\eyou\TagUitext; $__LIST__ = $tagUitext->getUitext("114", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?>
        <?php echo $field['value']; else: ?>4.0 时代 - 硅藻泥<?php endif; ?></h5>
      <p class="eyou-edit" e-id="115" e-type="text"> <?php  $tagUitext = new \think\template\taglib\eyou\TagUitext; $__LIST__ = $tagUitext->getUitext("115", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?>
        <?php echo $field['value']; else: ?>品牌乱，品质良莠不齐市场价格昂贵<?php endif; ?></p>
    </li>
    <li class="li05 eyou-edit" <?php  $tagAd = new \think\template\taglib\eyou\TagAd; $_result = $tagAd->getAd("14"); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator):  $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "";else: $field = $__LIST__;?>style="background: url(<?php echo $field['litpic']; ?>) no-repeat center bottom" e-id="<?php echo $field['id']; ?>" e-type="adv"<?php endif; else: echo "";endif; $field = []; ?>>
      <h5 class="eyou-edit" e-id="116" e-type="text"> <?php  $tagUitext = new \think\template\taglib\eyou\TagUitext; $__LIST__ = $tagUitext->getUitext("116", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?>
        <?php echo $field['value']; else: ?>5.0 时代<br>
        贝壳粉涂料<?php endif; ?></h5>
      <p class="eyou-edit" e-id="117" e-type="text"> <?php  $tagUitext = new \think\template\taglib\eyou\TagUitext; $__LIST__ = $tagUitext->getUitext("117", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?>
        <?php echo $field['value']; else: ?>新兴行业，竞争少，安全更环保，备受消费者青睐！<?php endif; ?></p>
    </li>
  </ul>
</div>
<div class="qianli">
  <h4 class="eyou-edit" e-id="118" e-type="text">  <?php  $tagUitext = new \think\template\taglib\eyou\TagUitext; $__LIST__ = $tagUitext->getUitext("118", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?><?php echo $field['value']; else: ?>深度剖析涂料市场<?php endif; ?></h4>
  <h3 class="eyou-edit" e-id="119" e-type="text">  <?php  $tagUitext = new \think\template\taglib\eyou\TagUitext; $__LIST__ = $tagUitext->getUitext("119", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?><?php echo $field['value']; else: ?>贝壳粉接管涂料大市场，潜力无限<?php endif; ?></h3>
  <p class="eyou-edit" e-id="120" e-type="text">  <?php  $tagUitext = new \think\template\taglib\eyou\TagUitext; $__LIST__ = $tagUitext->getUitext("120", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?><?php echo $field['value']; else: ?>贝壳粉一上市就引爆市场热潮，占领涂料行业半壁江山<?php endif; ?></p>
  <div class="container qlWen eyou-edit" <?php  $tagAd = new \think\template\taglib\eyou\TagAd; $_result = $tagAd->getAd("9"); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator):  $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "";else: $field = $__LIST__;?>style="background: url(<?php echo $field['litpic']; ?>) no-repeat center top;" e-id="<?php echo $field['id']; ?>" e-type="adv"<?php endif; else: echo "";endif; $field = []; ?>>
    <div class="wen eyou-edit" e-id="121" e-type="text">  <?php  $tagUitext = new \think\template\taglib\eyou\TagUitext; $__LIST__ = $tagUitext->getUitext("121", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?><?php echo $field['value']; else: ?>
      <h5><b>环保是国策</b>，大力发展循环经济，发展环保</h5>
      <p>“十二五”提出注重“高性能绿色环保涂料”和“以可再生资源为原料的涂料”<em>的开发和利用。贝壳粉无污染</em>、零排放的创新型生态涂料，完全符合。</p>
      <h5>市场有需求，规模宏大，<b>前景广阔</b></h5>
      <p>据统计，现代人平均90%时间在室内，室内空气污染98%源自装修材料！且现代消费者，更趋向于健康、实用、时尚化的涂料</p>
      <h5>贝壳粉行业正处市场导入期，是投资加盟最好时期</h5>
      <p>贝壳粉在我国的市场占有率不足10%，贝壳粉市场以每年30%的速度递增，市场空间潜力无穷。</p>
      <?php endif; ?> </div>
    <div class="clear"></div>
    <span class="eyou-edit" e-id="122" e-type="text">  <?php  $tagUitext = new \think\template\taglib\eyou\TagUitext; $__LIST__ = $tagUitext->getUitext("122", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?><?php echo $field['value']; else: ?>
    贝壳粉涂料，现代家具装饰<b>装修最好的选择！</b> <?php endif; ?> </span>
    <p class="eyou-edit" e-id="123" e-type="text">  <?php  $tagUitext = new \think\template\taglib\eyou\TagUitext; $__LIST__ = $tagUitext->getUitext("123", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?><?php echo $field['value']; else: ?>只要把握住机遇，巨额财富就会属于您<?php endif; ?></p>
  </div>
</div>
<!--优势-->
<div class="youshi eyou-edit" <?php  $tagAd = new \think\template\taglib\eyou\TagAd; $_result = $tagAd->getAd("15"); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator):  $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "";else: $field = $__LIST__;?>style="background: url(<?php echo $field['litpic']; ?>) no-repeat center top;" e-id="<?php echo $field['id']; ?>" e-type="adv"<?php endif; else: echo "";endif; $field = []; ?>>
  <h3 class="eyou-edit" e-id="124" e-type="text">  <?php  $tagUitext = new \think\template\taglib\eyou\TagUitext; $__LIST__ = $tagUitext->getUitext("124", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?><?php echo $field['value']; else: ?> <em>贝壳粉涂料产品<b>绝佳优势</b></em><br>
    <span><b>完胜市场多款</b>传统涂料产品</span> <?php endif; ?></h3>
  <div class="ysContent">
    <div class="ysLeft ysf">
      <div class="eyou-edit" e-id="125" e-type="text">  <?php  $tagUitext = new \think\template\taglib\eyou\TagUitext; $__LIST__ = $tagUitext->getUitext("125", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?><?php echo $field['value']; else: ?>
        <h4>贝壳粉</h4>
        <span>比乳胶漆更环保</span>
        <p><b>以挖掘石油资源、砍伐森林为代价，</b>破坏自然生态平衡，涂刷上墙凝固过程中挥发有毒气体。</p>
        <?php endif; ?></div>
      <div class="img eyou-edit" e-id="186" e-type="upload">  <?php  $tagUiupload = new \think\template\taglib\eyou\TagUiupload; $__LIST__ = $tagUiupload->getUiupload("186", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?>
        <?php echo $field['value']; else: ?> <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/ys_r.jpg" width="213" height="142"><?php endif; ?> </div>
    </div>
    <div class="ysBox">
      <h5 class="eyou-edit" e-id="126" e-type="text">  <?php  $tagUitext = new \think\template\taglib\eyou\TagUitext; $__LIST__ = $tagUitext->getUitext("126", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?><?php echo $field['value']; else: ?>贝壳粉生态涂料的独有优势<?php endif; ?></h5>
      <div id="ysList">
        <div class="ysList">
          <div class="bd">
            <ul>
              <li > 
              <div class="eyou-edit" e-id="193" e-type="upload">
               <?php  $tagUiupload = new \think\template\taglib\eyou\TagUiupload; $__LIST__ = $tagUiupload->getUiupload("193", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?>
                <?php echo $field['value']; else: ?> 
                <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/20160531104621_23753.jpg" width="478" height="235"  />
                <?php endif; ?>
                </div>
                <dl>
                  <dt>01 </dt>
                  <dd>
                    <h4 class="eyou-edit" e-id="194" e-type="text">  <?php  $tagUitext = new \think\template\taglib\eyou\TagUitext; $__LIST__ = $tagUitext->getUitext("194", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?><?php echo $field['value']; else: ?>安全耐用，维护简单，艺术与奢华的结合<?php endif; ?></h4>
                    <p class="eyou-edit" e-id="195" e-type="text">  <?php  $tagUitext = new \think\template\taglib\eyou\TagUitext; $__LIST__ = $tagUitext->getUitext("195", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?><?php echo $field['value']; else: ?>成品耐腐蚀，耐酸碱，防霉、防潮，防火阻燃等级高；装饰艺术效果逼真；一擦一抹光洁如新<?php endif; ?></p>
                  </dd>
                </dl>
              </li>
              <li>
              <div class="eyou-edit" e-id="196" e-type="upload">
                <?php  $tagUiupload = new \think\template\taglib\eyou\TagUiupload; $__LIST__ = $tagUiupload->getUiupload("196", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?>
                <?php echo $field['value']; else: ?> 
                <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/20160514155641_83878.jpg" width="478" height="235"  />
                <?php endif; ?>
                </div>
                <dl>
                  <dt>02 </dt>
                  <dd>
                    <h4 class="eyou-edit" e-id="197" e-type="text">  <?php  $tagUitext = new \think\template\taglib\eyou\TagUitext; $__LIST__ = $tagUitext->getUitext("197", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?><?php echo $field['value']; else: ?>超强吸附有害物质，居家健康第一选择<?php endif; ?></h4>
                    <p class="eyou-edit" e-id="198" e-type="text">  <?php  $tagUitext = new \think\template\taglib\eyou\TagUitext; $__LIST__ = $tagUitext->getUitext("198", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?><?php echo $field['value']; else: ?>不含对人体有害的物质，分解、吸附空气中的有害物质，最大化降低装修对健康的损害<?php endif; ?></p>
                  </dd>
                </dl>
              </li>
              <li>
              <div class="eyou-edit" e-id="199" e-type="upload">
               <?php  $tagUiupload = new \think\template\taglib\eyou\TagUiupload; $__LIST__ = $tagUiupload->getUiupload("199", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?>
                <?php echo $field['value']; else: ?> 
                <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/20160514155220_21139.jpg" width="478" height="235"  />
                <?php endif; ?>
                </div>
                <dl>
                  <dt>03 </dt>
                  <dd>
                    <h4 class="eyou-edit" e-id="200" e-type="text">  <?php  $tagUitext = new \think\template\taglib\eyou\TagUitext; $__LIST__ = $tagUitext->getUitext("200", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?><?php echo $field['value']; else: ?>低成本经济，施工更便捷<?php endif; ?></h4>
                    <p class="eyou-edit" e-id="201" e-type="text">  <?php  $tagUitext = new \think\template\taglib\eyou\TagUitext; $__LIST__ = $tagUitext->getUitext("201", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?><?php echo $field['value']; else: ?>精细干粉状的贝壳粉涂料，无需任何配置，可直接在毛坯上刷涂料，省钱、省时、省力<?php endif; ?></p>
                  </dd>
                </dl>
              </li>
              <li>
              <div class="eyou-edit" e-id="202" e-type="upload">
               <?php  $tagUiupload = new \think\template\taglib\eyou\TagUiupload; $__LIST__ = $tagUiupload->getUiupload("202", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?>
                <?php echo $field['value']; else: ?> 
                <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/20160531104600_32408.jpg" width="478" height="235"  />
                <?php endif; ?>
               </div> 
                <dl>
                  <dt>04 </dt>
                  <dd>
                    <h4 class="eyou-edit" e-id="203" e-type="text">  <?php  $tagUitext = new \think\template\taglib\eyou\TagUitext; $__LIST__ = $tagUitext->getUitext("203", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?><?php echo $field['value']; else: ?>新型环保的干粉性涂料，更环保<?php endif; ?></h4>
                    <p class="eyou-edit" e-id="204" e-type="text">  <?php  $tagUitext = new \think\template\taglib\eyou\TagUitext; $__LIST__ = $tagUitext->getUitext("204", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?><?php echo $field['value']; else: ?>取材天然优质贝壳，既保护自然资源又解决无处堆放的大量贝壳垃圾<?php endif; ?></p>
                  </dd>
                </dl>
              </li>
            </ul>
          </div>
        </div>
        <div class="hd">
          <div class="btn"><span></span><span></span><span></span><span></span></div>
        </div>
      </div>
    </div>
    <div class="ysRight ysf">
      <div class="eyou-edit" e-id="127" e-type="text">  <?php  $tagUitext = new \think\template\taglib\eyou\TagUitext; $__LIST__ = $tagUitext->getUitext("127", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?><?php echo $field['value']; else: ?>
        <h4>贝壳粉</h4>
        <span>比硅藻泥更实惠</span>
        <p><b>硅藻泥以不可再生的硅质岩石为原料</b>，价格昂贵；不少品牌为了降低成本而掺入了白水泥和胶质物</p>
        <?php endif; ?></div>
      <div class="img eyou-edit" e-id="187" e-type="upload">  <?php  $tagUiupload = new \think\template\taglib\eyou\TagUiupload; $__LIST__ = $tagUiupload->getUiupload("187", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?>
        <?php echo $field['value']; else: ?> <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/ys_l.jpg" width="213" height="142"><?php endif; ?> </div>
    </div>
  </div>
</div>
<div class="kunrao container eyou-edit" <?php  $tagAd = new \think\template\taglib\eyou\TagAd; $_result = $tagAd->getAd("16"); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator):  $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "";else: $field = $__LIST__;?>style="background: url(<?php echo $field['litpic']; ?>) no-repeat center bottom;" e-id="<?php echo $field['id']; ?>" e-type="adv"<?php endif; else: echo "";endif; $field = []; ?>>
  <p class="eyou-edit" e-id="128" e-type="text">  <?php  $tagUitext = new \think\template\taglib\eyou\TagUitext; $__LIST__ = $tagUitext->getUitext("128", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?><?php echo $field['value']; else: ?>
    现在市面上也有很多贝壳粉涂料品牌在大肆宣传<?php endif; ?></p>
  <h4 class="eyou-edit" e-id="129" e-type="text">  <?php  $tagUitext = new \think\template\taglib\eyou\TagUitext; $__LIST__ = $tagUitext->getUitext("129", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?><?php echo $field['value']; else: ?>
    在选择做哪家贝壳粉来代理时<?php endif; ?></h4>
  <h3 class="eyou-edit" e-id="130" e-type="text">  <?php  $tagUitext = new \think\template\taglib\eyou\TagUitext; $__LIST__ = $tagUitext->getUitext("130", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?><?php echo $field['value']; else: ?>
    你是否正在被这些问题所<b>困扰？</b><?php endif; ?></h3>
  <span class="s01 eyou-edit" e-id="131" e-type="text" style="position: absolute;">  <?php  $tagUitext = new \think\template\taglib\eyou\TagUitext; $__LIST__ = $tagUitext->getUitext("131", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?><?php echo $field['value']; else: ?> <b>没资金</b>担心加盟要求高？<?php endif; ?></span> <span class="s02 eyou-edit" e-id="132" e-type="text" style="position: absolute;">  <?php  $tagUitext = new \think\template\taglib\eyou\TagUitext; $__LIST__ = $tagUitext->getUitext("132", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?><?php echo $field['value']; else: ?> <b>怕亏本</b>担心卖不出产品？<?php endif; ?></span> <span class="s03 eyou-edit" e-id="133" e-type="text" style="position: absolute;">  <?php  $tagUitext = new \think\template\taglib\eyou\TagUitext; $__LIST__ = $tagUitext->getUitext("133", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?><?php echo $field['value']; else: ?> <b>怕没经验</b>不知道怎么下手？<?php endif; ?></span> <span class="s04 eyou-edit" e-id="134" e-type="text" style="position: absolute;">  <?php  $tagUitext = new \think\template\taglib\eyou\TagUitext; $__LIST__ = $tagUitext->getUitext("134", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?><?php echo $field['value']; else: ?> <b>怕没扶持</b>担心得不到支持？<?php endif; ?></span> <span class="s05 eyou-edit" e-id="135" e-type="text" style="position: absolute;">  <?php  $tagUitext = new \think\template\taglib\eyou\TagUitext; $__LIST__ = $tagUitext->getUitext("135", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?><?php echo $field['value']; else: ?> <b>不会管理</b>缺少经营方法？<?php endif; ?></span>
  <div class="btn"> <a href="http://wpa.qq.com/msgrd?v=3&site=<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_name"); echo $__VALUE__; ?>&menu=yes&uin=<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_2"); echo $__VALUE__; ?>" target="_blank"></a>
    <p class="eyou-edit" e-id="135" e-type="text"> <?php  $tagUitext = new \think\template\taglib\eyou\TagUitext; $__LIST__ = $tagUitext->getUitext("1351", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?><?php echo $field['value']; else: ?> 全国加盟咨询热线：<em><?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_1"); echo $__VALUE__; ?></em><?php endif; ?></p>
  </div>
</div>
<!--pk-->
<div class="pk"> <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/pk_bk.png" width="286" height="289" class="bk">
  <div class="eyou-edit" e-id="136" e-type="text">  <?php  $tagUitext = new \think\template\taglib\eyou\TagUitext; $__LIST__ = $tagUitext->getUitext("136", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?><?php echo $field['value']; else: ?>
    <h3>要想知道哪家品牌好 还得看产品品质</h3>
    <p>我们的贝壳粉竞争力在哪里，比比就知道</p>
    <?php endif; ?> </div>
  <div class="pkBox">
    <div id="pkContent">
      <div class="pkContent">
        <div class="bd">
          <ul>
            <li > 
            <div class="eyou-edit" e-id="137" e-type="upload">
             <?php  $tagUiupload = new \think\template\taglib\eyou\TagUiupload; $__LIST__ = $tagUiupload->getUiupload("137", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?>
              <?php echo $field['value']; else: ?> 
              <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/20160531104343_54696.jpg" width="972" height="273" alt="品质对比" /> 
              <?php endif; ?>
             </div> 
              <p class="pleft eyou-edit" e-id="138" e-type="text">  <?php  $tagUitext = new \think\template\taglib\eyou\TagUitext; $__LIST__ = $tagUitext->getUitext("138", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?><?php echo $field['value']; else: ?> <b>业內唯一从原材料生产到成品</b>，清洗—高温锻烧—研磨—催化—混合—包装。自己工厂独立完成，能做到从一而终监控产品，保证产品质量！<?php endif; ?></p>
              <p class="pright eyou-edit" e-id="139" e-type="text">  <?php  $tagUitext = new \think\template\taglib\eyou\TagUitext; $__LIST__ = $tagUitext->getUitext("139", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?><?php echo $field['value']; else: ?> 同行多数是采购别人的半成品，再进行加工<b>，原材料已经被别人掺假</b>;内地工厂由于离贝壳产地遥远，只能采购别人材料，不能保证原材料系质量。<?php endif; ?></p>
            </li>
            <li > 
            <div class="eyou-edit" e-id="140" e-type="upload">
             <?php  $tagUiupload = new \think\template\taglib\eyou\TagUiupload; $__LIST__ = $tagUiupload->getUiupload("140", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?>
              <?php echo $field['value']; else: ?> 
              <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/20160531151313_22604.jpg" width="972" height="273" alt="成分对比" /> 
              <?php endif; ?>
              </div> 
              <p class="pleft eyou-edit" e-id="141" e-type="text">  <?php  $tagUitext = new \think\template\taglib\eyou\TagUitext; $__LIST__ = $tagUitext->getUitext("141", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?><?php echo $field['value']; else: ?>我们的，<b>贝壳粉含量高，高达90%以上</b>，分解甲醛、苯、氨、VOC等有害气体的功能越强。<?php endif; ?></p>
              <p class="pright eyou-edit" e-id="142" e-type="text">  <?php  $tagUitext = new \think\template\taglib\eyou\TagUitext; $__LIST__ = $tagUitext->getUitext("142", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?><?php echo $field['value']; else: ?> 同行贝壳粉含量少，<b>添加双飞粉、石灰粉、白水泥等强碱性物质</b>，施工时会伤手，做成墙面会泛白现象。<?php endif; ?></p>
            </li>
            <li > 
            <div class="eyou-edit" e-id="143" e-type="upload"> 
             <?php  $tagUiupload = new \think\template\taglib\eyou\TagUiupload; $__LIST__ = $tagUiupload->getUiupload("143", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?>
              <?php echo $field['value']; else: ?> 
              <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/20160531104312_63030.jpg" width="972" height="273" alt="分解能力" /> 
              <?php endif; ?>
             </div>  
              <p class="pleft eyou-edit" e-id="144" e-type="text">  <?php  $tagUitext = new \think\template\taglib\eyou\TagUitext; $__LIST__ = $tagUitext->getUitext("144", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?><?php echo $field['value']; else: ?>我们的<b>首创从竹炭中提取无机净化剂</b>，净化性能高，速度快，消除量大。纯物理吸附净化，无需加化学剂，避免生成二次污染。<?php endif; ?></p>
              <p class="pright eyou-edit" e-id="145" e-type="text">  <?php  $tagUitext = new \think\template\taglib\eyou\TagUitext; $__LIST__ = $tagUitext->getUitext("145", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?><?php echo $field['value']; else: ?> 同行采用<b>二氧化钛等化学物质，不够环保</b>，有残留物，不彻底。<?php endif; ?></p>
            </li>
            <li > 
            <div class="eyou-edit" e-id="146" e-type="upload"> 
             <?php  $tagUiupload = new \think\template\taglib\eyou\TagUiupload; $__LIST__ = $tagUiupload->getUiupload("146", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?>
              <?php echo $field['value']; else: ?> 
              <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/20160531104302_47002.jpg" width="972" height="273" alt="环保对比" />
              <?php endif; ?>
            </div>     
              <p class="pleft eyou-edit" e-id="147" e-type="text">  <?php  $tagUitext = new \think\template\taglib\eyou\TagUitext; $__LIST__ = $tagUitext->getUitext("147", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?><?php echo $field['value']; else: ?>我们的，<b>采用木炭煅烧贝壳，没有残留物</b>，对环境不造成污染。<?php endif; ?></p>
              <p class="pright eyou-edit" e-id="148" e-type="text">  <?php  $tagUitext = new \think\template\taglib\eyou\TagUitext; $__LIST__ = $tagUitext->getUitext("148", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?><?php echo $field['value']; else: ?> 同行采用煤煅烧贝壳，<b>成品残留有害物，污染环境</b>。<?php endif; ?></p>
            </li>
          </ul>
        </div>
      </div>
      <div class="hd">
        <ul class="menu">
          <li class="eyou-edit" e-id="149" e-type="text">  <?php  $tagUitext = new \think\template\taglib\eyou\TagUitext; $__LIST__ = $tagUitext->getUitext("149", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?><?php echo $field['value']; else: ?> 品质对比<?php endif; ?></li>
          <li class="eyou-edit" e-id="150" e-type="text">  <?php  $tagUitext = new \think\template\taglib\eyou\TagUitext; $__LIST__ = $tagUitext->getUitext("150", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?><?php echo $field['value']; else: ?> 成分对比<?php endif; ?></li>
          <li class="eyou-edit" e-id="151" e-type="text">  <?php  $tagUitext = new \think\template\taglib\eyou\TagUitext; $__LIST__ = $tagUitext->getUitext("151", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?><?php echo $field['value']; else: ?> 分解能力<?php endif; ?></li>
          <li class="eyou-edit" e-id="152" e-type="text">  <?php  $tagUitext = new \think\template\taglib\eyou\TagUitext; $__LIST__ = $tagUitext->getUitext("152", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?><?php echo $field['value']; else: ?> 环保对比<?php endif; ?></li>
        </ul>
      </div>
    </div>
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
<div class="kongjian eyou-edit" <?php  $tagAd = new \think\template\taglib\eyou\TagAd; $_result = $tagAd->getAd("20"); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator):  $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "";else: $field = $__LIST__;?>style="background: url(<?php echo $field['litpic']; ?>) no-repeat center top;" e-id="<?php echo $field['id']; ?>" e-type="adv"<?php endif; else: echo "";endif; $field = []; ?>></div>
<div class="koubei container eyou-edit" e-id="1701" e-type="arclist"> 
   <?php  $tagUiarclist = new \think\template\taglib\eyou\TagUiarclist; $__LIST__ = $tagUiarclist->getUiarclist("4","1701", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["info"]) || (($__LIST__["info"] instanceof \think\Collection || $__LIST__["info"] instanceof \think\Paginator ) && $__LIST__["info"]->isEmpty()))): $field = $__LIST__;  $ui_typeid = !empty($field["info"]["typeid"]) ? $field["info"]["typeid"] : ""; if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 10; endif; $tagChannelartlist = new \think\template\taglib\eyou\TagChannelartlist; $_result = $tagChannelartlist->getChannelartlist($typeid, "self"); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$channelartlist): $channelartlist["typename"] = text_msubstr($channelartlist["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $channelartlist;$mod = ($e % 2 );$i= intval($key) + 1;?>
  <h3><a href="<?php  $__VALUE__ = isset($channelartlist["typeurl"]) ? $channelartlist["typeurl"] : "变量名不存在"; echo $__VALUE__; ?>" class="eyou-edit" e-id="171" e-type="text">  <?php  $tagUitext = new \think\template\taglib\eyou\TagUitext; $__LIST__ = $tagUitext->getUitext("171", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?><?php echo $field['value']; else: ?>事实和口碑胜于一切<?php endif; ?></a></h3>
  <p class="eyou-edit" e-id="172" e-type="text">  <?php  $tagUitext = new \think\template\taglib\eyou\TagUitext; $__LIST__ = $tagUitext->getUitext("172", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?><?php echo $field['value']; else: ?>他们选择我们，都赚钱了<?php endif; ?></p>
  <div class="kbBanner">
    <div class="bd">
      <ul >
        <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 3; endif; $channelid = ""; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "",      "noflag"=> "",      "channel"=> $channelid, ); $tag = array (
  'titlelen' => '20',
  'limit' => '0,3',
); $tagArclist = new \think\template\taglib\eyou\TagArclist; $_result = $tagArclist->getArclist($param, $row, "", "","desc","",$tag,"0");if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$field["title"] = text_msubstr($field["title"], 0, 20, false);$field["seo_description"] = text_msubstr($field["seo_description"], 0, 160, true);$mod = ($e % 2 );$i= intval($key) + 1;?>
        <li><a href="<?php echo $field['arcurl']; ?>"> <img src="<?php echo $field['litpic']; ?>" width="394" height="262" alt="<?php echo $field['title']; ?>" />
          <div class="wen">
            <h5> <?php echo $field['title']; ?><em></em></h5>
            <span></span> </div>
          </a></li>
        <?php ++$e; $aid = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
      </ul>
     </div>
    <div class="hd">
      <div class="btn"><?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 3; endif; $channelid = ""; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "",      "noflag"=> "",      "channel"=> $channelid, ); $tag = array (
  'titlelen' => '20',
  'limit' => '0,3',
); $tagArclist = new \think\template\taglib\eyou\TagArclist; $_result = $tagArclist->getArclist($param, $row, "", "","desc","",$tag,"0");if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$field["title"] = text_msubstr($field["title"], 0, 20, false);$field["seo_description"] = text_msubstr($field["seo_description"], 0, 160, true);$mod = ($e % 2 );$i= intval($key) + 1;?><span></span><?php ++$e; $aid = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?></div>
    </div>
  </div>
  <div class="kbList" >
    <div class="bd"> <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 20; endif; $channelid = ""; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "",      "noflag"=> "",      "channel"=> $channelid, ); $tag = array (
  'titlelen' => '20',
  'limit' => '3,20',
  'infolen' => '50',
); $tagArclist = new \think\template\taglib\eyou\TagArclist; $_result = $tagArclist->getArclist($param, $row, "", "","desc","",$tag,"0");if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,3, $row, true) : $_result->slice(3, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$field["title"] = text_msubstr($field["title"], 0, 20, false);$field["seo_description"] = text_msubstr($field["seo_description"], 0, 50, true);$mod = ($e % 2 );$i= intval($key) + 1;?>
      <dl>
        <dt><a href="<?php echo $field['arcurl']; ?>" title="<?php echo $field['title']; ?>" target="_blank"> <img src="<?php echo $field['litpic']; ?>" width="244" height="162" alt="<?php echo $field['title']; ?>" /></a> </dt>
        <dd>
          <h4> <a href="<?php echo $field['arcurl']; ?>" title="<?php echo $field['title']; ?>" target="_blank"><?php echo $field['title']; ?></a></h4>
          <p><?php echo $field['seo_description']; ?>...</p>
        </dd>
      </dl>
      <?php ++$e; $aid = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?> </div>
    </div>
    <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $typeid = $row = ""; unset($channelartlist); $ui_typeid = $ui_row = ""; endif; ?> 
</div>
<div class="khzs">
<div class="container">

  <div class="kehu eyou-edit" e-id="173" e-type="arclist"> 
   <?php  $tagUiarclist = new \think\template\taglib\eyou\TagUiarclist; $__LIST__ = $tagUiarclist->getUiarclist("3","173", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["info"]) || (($__LIST__["info"] instanceof \think\Collection || $__LIST__["info"] instanceof \think\Paginator ) && $__LIST__["info"]->isEmpty()))): $field = $__LIST__;  $ui_typeid = !empty($field["info"]["typeid"]) ? $field["info"]["typeid"] : ""; if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 10; endif; $tagChannelartlist = new \think\template\taglib\eyou\TagChannelartlist; $_result = $tagChannelartlist->getChannelartlist($typeid, "self"); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$channelartlist): $channelartlist["typename"] = text_msubstr($channelartlist["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $channelartlist;$mod = ($e % 2 );$i= intval($key) + 1;?>
    <h3 > <a href="<?php  $__VALUE__ = isset($channelartlist["typeurl"]) ? $channelartlist["typeurl"] : "变量名不存在"; echo $__VALUE__; ?>" class="eyou-edit" e-id="1731" e-type="text">  <?php  $tagUitext = new \think\template\taglib\eyou\TagUitext; $__LIST__ = $tagUitext->getUitext("1731", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?><?php echo $field['value']; else: ?>众多客户长期的选择<?php endif; ?></a> </h3>
    <ul >
      <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 8; endif; $channelid = ""; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "",      "noflag"=> "",      "channel"=> $channelid, ); $tag = array (
  'titlelen' => '20',
  'row' => '8',
); $tagArclist = new \think\template\taglib\eyou\TagArclist; $_result = $tagArclist->getArclist($param, $row, "", "","desc","",$tag,"0");if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$field["title"] = text_msubstr($field["title"], 0, 20, false);$field["seo_description"] = text_msubstr($field["seo_description"], 0, 160, true);$mod = ($e % 2 );$i= intval($key) + 1;?>
      <li ><a> <img src="<?php echo $field['litpic']; ?>" width="156" height="116" alt="<?php echo $field['title']; ?>" /></a></li>
      <?php ++$e; $aid = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
    </ul>
    <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $typeid = $row = ""; unset($channelartlist); $ui_typeid = $ui_row = ""; endif; ?> </div>
  <div class="zhengshu eyou-edit" e-id="1733" e-type="arclist"> 
   <?php  $tagUiarclist = new \think\template\taglib\eyou\TagUiarclist; $__LIST__ = $tagUiarclist->getUiarclist("5","1733", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["info"]) || (($__LIST__["info"] instanceof \think\Collection || $__LIST__["info"] instanceof \think\Paginator ) && $__LIST__["info"]->isEmpty()))): $field = $__LIST__;  $ui_typeid = !empty($field["info"]["typeid"]) ? $field["info"]["typeid"] : "";?>
    <div class="zhengshu"> 
    <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 10; endif; $tagChannelartlist = new \think\template\taglib\eyou\TagChannelartlist; $_result = $tagChannelartlist->getChannelartlist($typeid, "self"); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$channelartlist): $channelartlist["typename"] = text_msubstr($channelartlist["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $channelartlist;$mod = ($e % 2 );$i= intval($key) + 1;?>
      <h3><a href="<?php  $__VALUE__ = isset($channelartlist["typeurl"]) ? $channelartlist["typeurl"] : "变量名不存在"; echo $__VALUE__; ?>"><?php  $__VALUE__ = isset($channelartlist["typename"]) ? $channelartlist["typename"] : "变量名不存在"; echo $__VALUE__; ?></a></h3>
      <div class="zsBox" id="honerMain">
        <div class="hd" style="display: none;">
          <ul>
            <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 8; endif; $channelid = ""; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "",      "noflag"=> "",      "channel"=> $channelid, ); $tag = array (
  'row' => '8',
); $tagArclist = new \think\template\taglib\eyou\TagArclist; $_result = $tagArclist->getArclist($param, $row, "", "","desc","",$tag,"0");if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$field["title"] = text_msubstr($field["title"], 0, 100, false);$field["seo_description"] = text_msubstr($field["seo_description"], 0, 160, true);$mod = ($e % 2 );$i= intval($key) + 1;?>
            <li></li>
            <?php ++$e; $aid = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
          </ul>
        </div>
        <span class="zsLeft prev" id="zsLeft"></span><span class="zsRight next" id="zsRight"> </span>
        <div class="zsWin">
          <div class="bd">
            <ul>
              <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 8; endif; $channelid = ""; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "",      "noflag"=> "",      "channel"=> $channelid, ); $tag = array (
  'titlelen' => '20',
  'row' => '8',
); $tagArclist = new \think\template\taglib\eyou\TagArclist; $_result = $tagArclist->getArclist($param, $row, "", "","desc","",$tag,"0");if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$field["title"] = text_msubstr($field["title"], 0, 20, false);$field["seo_description"] = text_msubstr($field["seo_description"], 0, 160, true);$mod = ($e % 2 );$i= intval($key) + 1;?>
              <li><a href="<?php echo $field['arcurl']; ?>" title="<?php echo $field['title']; ?>" target="_blank"> <img src="<?php echo $field['litpic']; ?>" width="216" height="236" alt="<?php echo $field['title']; ?>">
                <p><?php echo $field['title']; ?></p>
                </a></li>
              <?php ++$e; $aid = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $typeid = $row = ""; unset($channelartlist); $ui_typeid = $ui_row = ""; endif; ?> </div>
</div>
</div>
<div class="jmzc eyou-edit" <?php  $tagAd = new \think\template\taglib\eyou\TagAd; $_result = $tagAd->getAd("18"); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator):  $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "";else: $field = $__LIST__;?>style="background: url(<?php echo $field['litpic']; ?>) no-repeat center top;" e-id="<?php echo $field['id']; ?>" e-type="adv"<?php endif; else: echo "";endif; $field = []; ?>>
  <div class="container jmzcBox">
    <div class="wen01 eyou-edit" e-id="174" e-type="text">  <?php  $tagUitext = new \think\template\taglib\eyou\TagUitext; $__LIST__ = $tagUitext->getUitext("174", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?><?php echo $field['value']; else: ?>
      <h5> 丰富的营销活动支持，<b>降低您的投资压力</b></h5>
      <p>我们将协助经销商一起制定详细销售促销或推广计划，不再担心产品销量问题！</p>
      <?php endif; ?> </div>
    <div class="wen02 eyou-edit" e-id="175" e-type="text">  <?php  $tagUitext = new \think\template\taglib\eyou\TagUitext; $__LIST__ = $tagUitext->getUitext("175", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?><?php echo $field['value']; else: ?>
      <h5>营销团队培训，为你打造<b>最强销售精英</b></h5>
      <p>提供销售期间的市场营销辅导，协助完成团队组建支持，提供全年度的销售、施工培训，不断提高经销商团队的销售能力。</p>
      <?php endif; ?> </div>
    <div class="wen03 eyou-edit" e-id="176" e-type="text">  <?php  $tagUitext = new \think\template\taglib\eyou\TagUitext; $__LIST__ = $tagUitext->getUitext("176", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?><?php echo $field['value']; else: ?>
      <h5>开店<b>产品物料支持</b>，开店更便捷</h5>
      <p>协助经销商定制宣传单页、比色卡、矢量图、授权牌匾、色卡、检测报告等，周到更放心！</p>
      <?php endif; ?> </div>
    <div class="wen04 eyou-edit" e-id="177" e-type="text">  <?php  $tagUitext = new \think\template\taglib\eyou\TagUitext; $__LIST__ = $tagUitext->getUitext("177", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?><?php echo $field['value']; else: ?>
      <h5>全面的<b>营销推广支持</b>，让你市场稳步增长</h5>
      <p>在微信公众平台、贴吧、B2B平台等大力推广，区域人员配合加盟商推广如小区宣传活动、家装展会、品牌团购会等。</p>
      <?php endif; ?> </div>
    <div class="wen05 eyou-edit" e-id="178" e-type="text">  <?php  $tagUitext = new \think\template\taglib\eyou\TagUitext; $__LIST__ = $tagUitext->getUitext("178", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?><?php echo $field['value']; else: ?>
      <h5>区域保护支持，<b>保障代理商权益</b></h5>
      <p>实行区域独家代理，全国统一供货价，严厉打击窜货，真正实现平等竞争。</p>
      <?php endif; ?> </div>
    <div class="wen06 eyou-edit" e-id="179" e-type="text">  <?php  $tagUitext = new \think\template\taglib\eyou\TagUitext; $__LIST__ = $tagUitext->getUitext("179", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?><?php echo $field['value']; else: ?>
      <h5>销量越多，可<b>提供返点支持</b></h5>
      <p>加盟商年度提货量达到一定额度，公司给予一定的返点鼓励。</p>
      <?php endif; ?> </div>
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
<!--加盟留言-->
<div class="jmly">
  <div class="jmlyLeft">
    <h5 class="eyou-edit" e-id="180" e-type="text">  <?php  $tagUitext = new \think\template\taglib\eyou\TagUitext; $__LIST__ = $tagUitext->getUitext("180", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?><?php echo $field['value']; else: ?>我要加盟<em>现在留言，免费获取详细加盟资料</em><?php endif; ?></h5>
    <div class="eyou-edit" e-id="181" e-type="upload">  <?php  $tagUiupload = new \think\template\taglib\eyou\TagUiupload; $__LIST__ = $tagUiupload->getUiupload("181", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?>
      <?php echo $field['value']; else: ?> <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/jmly01.jpg" width="441" height="125" /> <?php endif; ?> </div>
    <h4 class="eyou-edit" e-id="182" e-type="text">  <?php  $tagUitext = new \think\template\taglib\eyou\TagUitext; $__LIST__ = $tagUitext->getUitext("182", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?><?php echo $field['value']; else: ?>现在加入，送4重好礼<?php endif; ?></h4>
    <ul class="eyou-edit" e-id="183" e-type="text">
       <?php  $tagUitext = new \think\template\taglib\eyou\TagUitext; $__LIST__ = $tagUitext->getUitext("183", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?><?php echo $field['value']; else: ?>
      <li>加盟即送产品</li>
      <li>加盟送调色软件</li>
      <li>加盟送产品物料</li>
      <li>加盟送1000元创业补助</li>
      <?php endif; ?>
    </ul>
    <h3 class="eyou-edit" e-id="184" e-type="text">  <?php  $tagUitext = new \think\template\taglib\eyou\TagUitext; $__LIST__ = $tagUitext->getUitext("184", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?><?php echo $field['value']; else: ?>新型生态绿色环保涂料史无前例！<?php endif; ?></h3>
    <p class="eyou-edit" e-id="185" e-type="text">  <?php  $tagUitext = new \think\template\taglib\eyou\TagUitext; $__LIST__ = $tagUitext->getUitext("185", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?><?php echo $field['value']; else: ?>主动出击就是成功的第一步！<?php endif; ?></p>
  </div>
  <div class="jmlyRight">
    <p class="eyou-edit" e-id="1851" e-type="text">  <?php  $tagUitext = new \think\template\taglib\eyou\TagUitext; $__LIST__ = $tagUitext->getUitext("1851", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?><?php echo $field['value']; else: ?>全国免费加盟热线：<b><?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_1"); echo $__VALUE__; ?></b><?php endif; ?></p>
    <?php  $typeid = "24"; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $tagGuestbookform = new \think\template\taglib\eyou\TagGuestbookform; $_result = $tagGuestbookform->getGuestbookform($typeid, "default"); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $mod = ($e % 2 );$i= intval($key) + 1;?>
    <form method="POST" class="guest-form" enctype="multipart/form-data" action="<?php echo $field['action']; ?>" onsubmit="return checkForm();" name="MsgForm">
      <ul>
        <li>
          <input type="text" placeholder="<?php echo $field['itemname_1']; ?>：" id="attr_1" name="<?php echo $field['attr_1']; ?>"/>
          <em>*</em></li>
        <li>
          <input type="text" placeholder="<?php echo $field['itemname_2']; ?>：" id="attr_2" name="<?php echo $field['attr_2']; ?>"/>
          <em>*</em></li>
        <li>
          <input type="text" placeholder="<?php echo $field['itemname_3']; ?>：" id="attr_3" name="<?php echo $field['attr_3']; ?>">
        </li>
        <li>
          <textarea  id="attr_4" name="<?php echo $field['attr_4']; ?>" placeholder="<?php echo $field['itemname_4']; ?>:"></textarea>
        </li>
        <li>
          <input class="btnTjly" name="submit" type="submit" value="立即提交"/>
        </li>
      </ul>
      <?php echo $field['hidden']; ?>
    </form>
    <script type="text/javascript">
            function checkForm()
            {
              if(document.getElementById('attr_1').value.length == 0)
              {
                alert('请填写<?php echo $field['itemname_1']; ?>');
                return false;
              }
              if(document.getElementById('attr_2').value.length == 0)
              {
                alert('请填写<?php echo $field['itemname_2']; ?>');
                return false;
              }
              
              return true;
            }
          </script> 
    <?php ++$e; endforeach;endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?> </div>
</div>
<!--link-->
<div class="link">
  <div class="container">
    <h3><a>友情链接</a><span>LINKS</span></h3>
    <ul>
      <?php  $tagFlink = new \think\template\taglib\eyou\TagFlink; $_result = $tagFlink->getFlink("1", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $field["title"] = text_msubstr($field["title"], 0, 45, false); $__LIST__[$key] = $_result[$key] = $field;$mod = ($e % 2 );$i= intval($key) + 1;?>
      <li><a href="<?php echo $field['url']; ?>" <?php echo $field['target']; ?>><?php echo $field['title']; ?> </a>
      
      <li><?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
    </ul>
  </div>
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