<?php

include_once './Choice.php';

//填写申请的AppID
$AppID = '1612291336551959';

//填写申请的AppKey
$AppKey = 'ab99510a0b9dc42427874314cbba399cd';

$open = new Choice( $AppID, $AppKey );

echo $open->detail(552453217587,1);

//获取分类
//echo $open->cates();

//获取商品详情
//echo $open->detail( 558416426296, 1 );

//获取某类商品
//echo $open->goods( array('cate_id' => 1) );

//搜索商品商品
//echo $open->goods( array('kw' => '水壶') );

//更多搜索条件
//echo $open->goods( array('cate_id' => 1, 'activity' => '聚划算', 'kw' => '水壶') );