<?php
require_once 'Infoq/Common.php';
require_once 'Configuration.php';
require_once 'Site/DB.php';

class Infoq_Cron_Common extends Infoq_Common
{
    /**
     * DB接続
     */
    function connectDB($use = 'selector')
    {
        # infopanel_sagu_main スレーブ
        $link = mysql_connect('192.168.26.12:3348', 'sagmappusr', 'sagmappusr');
        if (!$link) {
            die('接続失敗です。' . mysql_error());
        }

        $db_selected = mysql_select_db('infopanel_sagu_infoq', $link);
        if (!$db_selected){
            die('データベース選択失敗です。' . mysql_error());
        }

        // MySQLに対する処理
        
        $close_flag = mysql_close($link);
        if ($close_flag) {
            print('<p>切断に成功しました。</p>');
        }

        mysql_close($link);
        return true;
    }
}