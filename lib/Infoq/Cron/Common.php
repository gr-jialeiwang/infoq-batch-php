<?php
require_once 'Infoq/Common.php';
require_once 'Configuration.php';
require_once 'Site/DB.php';

class Infoq_Cron_Common extends Infoq_Common
{
    /**
     * DB��³
     */
    function connectDB($use = 'selector')
    {
        # infopanel_sagu_main ���졼��
        $link = mysql_connect('192.168.26.12:3348', 'sagmappusr', 'sagmappusr');
        if (!$link) {
            die('��³���ԤǤ���' . mysql_error());
        }

        $db_selected = mysql_select_db('infopanel_sagu_infoq', $link);
        if (!$db_selected){
            die('�ǡ����١��������ԤǤ���' . mysql_error());
        }

        // MySQL���Ф������
        
        $close_flag = mysql_close($link);
        if ($close_flag) {
            print('<p>���Ǥ��������ޤ�����</p>');
        }

        mysql_close($link);
        return true;
    }
}