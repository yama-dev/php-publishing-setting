<?php
// タイムゾーンを指定
date_default_timezone_set('Asia/Tokyo');

// 公開日時を指定
$target_date = "2017/01/30 12:00:00";

// 公開ファイルを指定
$include_file_path = 'public.html';

// サーバー時刻の取得
$server_dete = date("Y/m/d G:i:s");

// ファイルの選択
if($target_date >= $server_dete):
  echo 'not public';
else:
  include($include_file_path);
endif;
