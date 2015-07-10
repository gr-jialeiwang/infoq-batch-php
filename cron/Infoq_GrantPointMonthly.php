<?php
set_time_limit(0);
ignore_user_abort(true);
ini_set('display_errors', 1);
require_once dirname(__FILE__).'/../lib/include_path.php';
require_once 'Infoq/Cron/GrantPointMonthly.php';

/**
 * ポイント交換をしたモニターXXX名にYYYポイントを月次で自動で付与したい
 * DEFAULT XXX:390,YYY:390
 * 
 * php Infoq_GrantPointMonthly.php
 *  -n 人数
 *  -p ポイント数
 *  -d 日付
 *  -t 任意のオプション リカバリするタイプを設定
 *     -t basicで有料のみ、premiumでプレミアムのみ、pointでポイントのみ、ageで年齢認証のみ
 *     ※-t basic,premiumとカンマ区切りで複数選択可
 *     指定なし時は全て
 *     例) -t basic
 *     例) -t basic,point
 *  -m 任意のオプション 提携先APIのスタブ呼び出し設定 メンテ環境バッチ用 -m yesでメンテでの呼び出し
 *     指定なし時は 開発・メンテ include/ini/koikatsu/api.iniの設定値(stub or pdev)、本番 prd
 *     例) -m yes
 * */

$options = getopt("n:p:d:");
var_dump($options);

$cron = new Infoq_Cron_GrantPointMonthly();

$res = $cron->connectDB('updator');
