<?php
set_time_limit(0);
ignore_user_abort(true);
ini_set('display_errors', 1);
require_once dirname(__FILE__).'/../lib/include_path.php';
require_once 'Infoq/Cron/GrantPointMonthly.php';

/**
 * �ݥ���ȸ򴹤򤷤���˥���XXX̾��YYY�ݥ���Ȥ��Ǽ�ư����Ϳ������
 * DEFAULT XXX:390,YYY:390
 * 
 * php Infoq_GrantPointMonthly.php
 *  -n �Ϳ�
 *  -p �ݥ���ȿ�
 *  -d ����
 *  -t Ǥ�դΥ��ץ���� �ꥫ�Хꤹ�륿���פ�����
 *     -t basic��ͭ���Τߡ�premium�ǥץ�ߥ���Τߡ�point�ǥݥ���ȤΤߡ�age��ǯ��ǧ�ڤΤ�
 *     ��-t basic,premium�ȥ���޶��ڤ��ʣ�������
 *     ����ʤ���������
 *     ��) -t basic
 *     ��) -t basic,point
 *  -m Ǥ�դΥ��ץ���� �����API�Υ����ָƤӽФ����� ���ƴĶ��Хå��� -m yes�ǥ��ƤǤθƤӽФ�
 *     ����ʤ����� ��ȯ������ include/ini/koikatsu/api.ini��������(stub or pdev)������ prd
 *     ��) -m yes
 * */

$options = getopt("n:p:d:");
var_dump($options);

$cron = new Infoq_Cron_GrantPointMonthly();

$res = $cron->connectDB('updator');
