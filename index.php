<?php
set_time_limit(0);
$data=explode('////',file_get_contents('music-list.data'));
$folder=iconv('UTF-8', 'GBK','天谕原声音乐');
mkdir($_SERVER['DOCUMENT_ROOT'].'/'.$folder);
foreach($data as $list){
	$i=json_decode($list,true);
	mkdir($_SERVER['DOCUMENT_ROOT'].'/'.$folder.'/'.iconv('UTF-8', 'GBK',$i['name']));
	foreach($i['list'] as $o){
		file_put_contents($_SERVER['DOCUMENT_ROOT'].'/'.$folder.'/'.iconv('UTF-8', 'GBK',$i['name']).'/'.iconv('UTF-8', 'GBK',$o[1]).'.mp3',file_get_contents('http://v.tianyu.netease.com/2015/1126/'.$i['path'].'/'.$o[0]));
	}
}
?>