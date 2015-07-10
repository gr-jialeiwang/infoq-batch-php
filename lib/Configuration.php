<?php
/**
 * @file
 * @brief XML-RPC Ini情報
 * @author K.Nomura
 * @date 2012-10-24
 */

require_once 'XMLRPC/Controller.php';

class XMLRPC_Controller_Configuration extends XMLRPC_Controller
{
    /**
     * com_cron_daily_list.ini
     * Iniファイル取得メソッド
     *
     * @since  2012-11-07 nomura-kouichi
     * @return Array
     */
    function Call_GeneralTopDailyList()
    {
        $request = $this->request;

        $ini_dir = Common::getTopIniDir();
        $request['path'] = $ini_dir . 'com_cron_daily_list.ini';

        return $this->_getIni($request);
    }

    /**
     * cojp_cron_daily_list.ini
     * Iniファイル取得メソッド
     *
     * @since  2012-11-07 nomura-kouichi
     * @return Array
     */
    function Call_AdultTopDailyList()
    {
        $request = $this->request;

        $ini_dir = Common::getTopIniDir();
        $request['path'] = $ini_dir . 'cojp_cron_daily_list.ini';

        return $this->_getIni($request);
    }

    /**
     * cojp_digital_book.ini
     * Iniファイル取得メソッド
     *
     * @since  2013-01-07 ayumi-seitoku
     * @return Array
     */
    function Call_AdultDigitalBook()
    {
        $request = $this->request;

        $ini_dir = Common::getTopIniDir();
        $request['path'] = $ini_dir . 'cojp_digital_book.ini';

        return $this->_getIni($request);
    }

    /**
     * cojp_digital_doujin.ini
     * Iniファイル取得メソッド
     *
     * @since  2013-01-07 ayumi-seitoku
     * @return Array
     */
    function Call_AdultDigitalDoujin()
    {
        $request = $this->request;

        $ini_dir = Common::getTopIniDir();
        $request['path'] = $ini_dir . 'cojp_digital_doujin.ini';

        return $this->_getIni($request);
    }

    /**
     * cojp_digital_pcgame.ini
     * Iniファイル取得メソッド
     *
     * @since  2013-01-07 ayumi-seitoku
     * @return Array
     */
    function Call_AdultDigitalPcgame()
    {
        $request = $this->request;

        $ini_dir = Common::getTopIniDir();
        $request['path'] = $ini_dir . 'cojp_digital_pcgame.ini';

        return $this->_getIni($request);
    }

    /**
     * cojp_digital_videoa.ini
     * Iniファイル取得メソッド
     *
     * @since  2013-01-07 ayumi-seitoku
     * @return Array
     */
    function Call_AdultDigitalVideoa()
    {
        $request = $this->request;

        $ini_dir = Common::getTopIniDir();
        $request['path'] = $ini_dir . 'cojp_digital_videoa.ini';

        return $this->_getIni($request);
    }

    /**
     * cojp_monthly.ini
     * Iniファイル取得メソッド
     *
     * @since  2013-01-07 ayumi-seitoku
     * @return Array
     */
    function Call_AdultMonthly()
    {
        $request = $this->request;

        $ini_dir = Common::getTopIniDir();
        $request['path'] = $ini_dir . 'cojp_monthly.ini';

        return $this->_getIni($request);
    }

    /**
     * cojp_ppm.ini
     * Iniファイル取得メソッド
     *
     * @since  2013-01-07 ayumi-seitoku
     * @return Array
     */
    function Call_AdultPpm()
    {
        $request = $this->request;

        $ini_dir = Common::getTopIniDir();
        $request['path'] = $ini_dir . 'cojp_ppm.ini';

        return $this->_getIni($request);
    }

    /**
     * newdmm/include/ini/redirect/actor.ini
     * Iniファイル取得メソッド
     *
     * @since  2012-11-07 nomura-kouichi
     * @return Array
     */
    function Call_RedirectActor()
    {
        $request = $this->request;

        $request['path'] = 'ini/redirect/actor.ini';

        return $this->_getIni($request);
    }

    /**
     * newdmm/include/ini/redirect/actress.ini
     * Iniファイル取得メソッド
     *
     * @since  2012-12-07 nomura-kouichi
     * @return Array
     */
    function Call_RedirectActress()
    {
        $request = $this->request;

        $request['path'] = 'ini/redirect/actress.ini';

        return $this->_getIni($request);
    }

    /**
     * newdmm/include/ini/redirect/artist.ini
     * Iniファイル取得メソッド
     *
     * @since  2012-12-07 nomura-kouichi
     * @return Array
     */
    function Call_RedirectArtist()
    {
        $request = $this->request;

        $request['path'] = 'ini/redirect/artist.ini';

        return $this->_getIni($request);
    }

    /**
     * newdmm/include/ini/redirect/author.ini
     * Iniファイル取得メソッド
     *
     * @since  2012-12-07 nomura-kouichi
     * @return Array
     */
    function Call_RedirectAuthor()
    {
        $request = $this->request;

        $request['path'] = 'ini/redirect/author.ini';

        return $this->_getIni($request);
    }

    /**
     * newdmm/include/ini/redirect/label.ini
     * Iniファイル取得メソッド
     *
     * @since  2012-12-07 nomura-kouichi
     * @return Array
     */
    function Call_RedirectLabel()
    {
        $request = $this->request;

        $request['path'] = 'ini/redirect/label.ini';

        return $this->_getIni($request);
    }

    /**
     * newdmm/include/ini/redirect/series.ini
     * Iniファイル取得メソッド
     *
     * @since  2012-12-07 nomura-kouichi
     * @return Array
     */
    function Call_RedirectSeries()
    {
        $request = $this->request;

        $request['path'] = 'ini/redirect/series.ini';

        return $this->_getIni($request);
    }

    /**
     * newdmm/include/ini/redirect/script.ini
     * Iniファイル取得メソッド
     *
     * @since  2012-12-07 nomura-kouichi
     * @return Array
     */
    function Call_RedirectScript()
    {
        $request = $this->request;

        $request['path'] = 'ini/redirect/script.ini';

        return $this->_getIni($request);
    }

    /**
     * newdmm/include/ini/redirect/maker.ini
     * Iniファイル取得メソッド
     *
     * @since  2012-12-07 nomura-kouichi
     * @return Array
     */
    function Call_RedirectMaker()
    {
        $request = $this->request;

        $request['path'] = 'ini/redirect/maker.ini';

        return $this->_getIni($request);
    }

    /**
     * newdmm/include/ini/redirect/director.ini
     * Iniファイル取得メソッド
     *
     * @since  2012-12-07 nomura-kouichi
     * @return Array
     */
    function Call_RedirectDirector()
    {
        $request = $this->request;

        $request['path'] = 'ini/redirect/director.ini';

        return $this->_getIni($request);
    }

    /**
     * newdmm/include/ini/redirect/keyword.ini
     * Iniファイル取得メソッド
     *
     * @since  2012-12-07 nomura-kouichi
     * @return Array
     */
    function Call_RedirectKeyword()
    {
        $request = $this->request;

        $request['path'] = 'ini/redirect/keyword.ini';

        return $this->_getIni($request);
    }

    /**
     * newdmm/include/ini/redirect/producer.ini
     * Iniファイル取得メソッド
     *
     * @since  2012-12-07 nomura-kouichi
     * @return Array
     */
    function Call_RedirectProducer()
    {
        $request = $this->request;

        $request['path'] = 'ini/redirect/producer.ini';

        return $this->_getIni($request);
    }

    /**
     * newdmm/include/ini/redirect/histrion.ini
     * Iniファイル取得メソッド
     *
     * @since  2012-12-07 nomura-kouichi
     * @return Array
     */
    function Call_RedirectHistrion()
    {
        $request = $this->request;

        $request['path'] = 'ini/redirect/histrion.ini';

        return $this->_getIni($request);
    }

    /**
     * newdmm/include/ini/redirect/cid.ini
     * Iniファイル取得メソッド
     *
     * @since  2012-12-07 nomura-kouichi
     * @return Array
     */
    function Call_RedirectCid()
    {
        $request = $this->request;

        $request['path'] = 'ini/redirect/cid.ini';

        return $this->_getIni($request);
    }

    /**
     * newdmm/include/ini/redirect/fighter.ini
     * Iniファイル取得メソッド
     *
     * @since  2012-12-07 nomura-kouichi
     * @return Array
     */
    function Call_RedirectFighter()
    {
        $request = $this->request;

        $request['path'] = 'ini/redirect/fighter.ini';

        return $this->_getIni($request);
    }

    /**
     * newdmm/include/ini/redirect/parody.ini
     * Iniファイル取得メソッド
     *
     * @since  2012-12-07 nomura-kouichi
     * @return Array
     */
    function Call_RedirectParody()
    {
        $request = $this->request;

        $request['path'] = 'ini/redirect/parody.ini';

        return $this->_getIni($request);
    }

    /**
     * newdmm/include/ini/redirect/ske48member.ini
     * Iniファイル取得メソッド
     *
     * @since  2012-12-07 nomura-kouichi
     * @return Array
     */
    function Call_RedirectSke48member()
    {
        $request = $this->request;

        $request['path'] = 'ini/redirect/ske48member.ini';

        return $this->_getIni($request);
    }

    /**
     * newdmm/include/ini/redirect/ebimasu_member.ini
     * Iniファイル取得メソッド
     *
     * @since  2012-12-07 nomura-kouichi
     * @return Array
     */
    function Call_RedirectEbimasumember()
    {
        $request = $this->request;

        $request['path'] = 'ini/redirect/ebimasu_member.ini';

        return $this->_getIni($request);
    }

    /**
     * newdmm/include/ini/redirect/pachinko.ini
     * Iniファイル取得メソッド
     *
     * @since  2012-12-07 nomura-kouichi
     * @return Array
     */
    function Call_RedirectPachinko()
    {
        $request = $this->request;

        $request['path'] = 'ini/redirect/pachinko.ini';

        return $this->_getIni($request);
    }

    /**
     * newdmm/include/ini/redirect/akb48member.ini
     * Iniファイル取得メソッド
     *
     * @since  2012-12-07 nomura-kouichi
     * @return Array
     */
    function Call_RedirectAkb48member()
    {
        $request = $this->request;

        $request['path'] = 'ini/redirect/akb48member.ini';

        return $this->_getIni($request);
    }

    /**
     * newdmm/include/ini/redirect/scenario.ini
     * Iniファイル取得メソッド
     *
     * @since  2012-12-07 nomura-kouichi
     * @return Array
     */
    function Call_RedirectScenario()
    {
        $request = $this->request;

        $request['path'] = 'ini/redirect/scenario.ini';

        return $this->_getIni($request);
    }

    /**
     * newdmm/include/ini/rectangle.ini
     * から、有効なデータを取得する
     *
     * @since  2012-11-22 kohara-shinji@dooga.co.jp
     * @return boolean
     */
    function Call_ActiveRectangleIni()
    {
        $isSuccess = $this->_getIni(array('path' => 'ini/rectangle.ini'));
        if ($isSuccess == FALSE) {
            return FALSE;
        }

        $iniList = array_pop($this->getResult());
        $target = array_filter($iniList, array($this, '_rectangleFilter'));

        $this->setResult(array('data' => $target));

        return TRUE;
    }

    /**
     * newdmm/include/ini/bannerS.ini
     * から、有効なデータを取得する
     *
     * @since   2012-11-28 kohara-shinji@dooga.co.jp
     * @return  boolean
     */
    function Call_ActiveBannerSIni()
    {
        /// <変数定義>
            $VARIABLE = new stdClass();

            $VARIABLE->requestUri   = (boolean)$this->request['request_uri'];
            $VARIABLE->isAdult      = (boolean)$this->request['is_adult'];
        /// </変数定義>

        // co.jpの年齢認証ページは一般扱いでバナーを取得すること
        if ($this->isAdult && $VARIABLE->requestUri == '/') {
            $this->request['is_adult'] = false;
        }

        $isSuccess = $this->_getIni(array('path' => 'ini/bannerS.ini'));
        if ($isSuccess == FALSE) {
            return FALSE;
        }

        $iniList = array_pop($this->getResult());

        $target = array_filter($iniList, array($this, '_rectangleFilter'));
        $this->setResult(array('data' => $target));

        return TRUE;
    }

    /**
     * newdmm/include/ini/bannerMy.ini
     * から、有効なデータを取得する
     *
     * @since   2012-11-28 kohara-shinji@dooga.co.jp
     * @return  boolean
     */
    function Call_ActiveBannerMyIni()
    {
        $isSuccess = $this->_getIni(array('path' => 'ini/bannerMy.ini'));
        if ($isSuccess == FALSE) {
            return FALSE;
        }

        $iniList = array_pop($this->getResult());

        // 言語に一致した有効なバナーがなければ
        // 言語に不一致の有効なバナーで代用する仕様
        $target = array_filter($iniList, array($this, '_rectangleFilter'));
        $targetWithLanguage = array_filter($target, array($this, '_rectangleFilterWithLanguage'));
        if (empty($targetWithLanguage) === false) {
            $target = $targetWithLanguage;
        }

        $this->setResult(array('data' => $target));

        return TRUE;
    }

    /**
     * iniファイルから有効なデータを取得する
     *
     * 検索・リスト下部、横長バナー用iniファイル(キャンペーン時)
     * newdmm/lib/Esp/ini/banner_pc_adult.ini
     * newdmm/lib/Esp/ini/banner_pc_general.ini
     *
     * @return boolean
    */
    function Call_EspCampaignBanner()
    {
        $request = $this->request;
        if ($this->request['is_adult']) {
            $request['path'] = 'Esp/Ini/banner_pc_adult.ini';
        } else {
            $request['path'] = 'Esp/Ini/banner_pc_general.ini';
        }

        return $this->_getIni($request);
    }

    /**
     * フィルタリング関数
     * rectangle.ini, bannerS.ini, bannerMy.iniのデータに適用
     *
     * @since   2012-11-22 kohara-shinji@dooga.co.jp
     * @return  boolean
     */
    function _rectangleFilter($params)
    {
        /// <変数定義>
            $VARIABLE = new stdClass();

            $VARIABLE->isLogin  = (boolean)$this->request['is_login'];
            $VARIABLE->isAdult  = (boolean)$this->request['is_adult'];
            $VARIABLE->requestUri = $this->request['request_uri'];
        /// </変数定義>

        $onair = $VARIABLE->isAdult ? 'adult' : 'com';

        $age_chk = preg_match("/\/age_check\//", $VARIABLE->requestUri);
        if ($age_chk === 0) {
            if (/* $VARIABLE->isAdult && */ $VARIABLE->requestUri === '/') {
                $age_chk = 1;
            }
        }

        //com,adultに限らず全体をチェック
        if ($params['onair'] == 'adult') {
            if ($onair == 'adult') {
                if ($VARIABLE->requestUri === '/' && $params['agechk'] != 'OK') {
                    return FALSE;
                }
            } else {
                if ($params['agechk'] != 'OK') {
                    return FALSE;
                }
            }
        }
        if ($params['onair'] == 'com') {
            if ($onair == 'adult') {
                if ($VARIABLE->requestUri === '/' && array_key_exists('agechk', $params) && $params['agechk'] === 'NG') {
                    return FALSE;
                } else if ($VARIABLE->requestUri !== '/') {
                    return FALSE;
                }
            } else {
                if ($age_chk) {
                    if (array_key_exists('agechk', $params) && $params['agechk'] === 'NG') {
                        return FALSE;
                    }
                } else {
                    if (array_key_exists('agechk', $params) && $params['agechk'] === 'ONLY') {
                        return FALSE;
                    }
                }
            }
        }

        $login = $VARIABLE->isLogin ? array(0, 1) : array(0, 2);
        if (in_array($params['login'], $login) == false) {
            return FALSE;
        }

        if (array_key_exists('begin', $params) && time() < strtotime($params['begin'])) {
            return FALSE;
        }

        if (array_key_exists('end', $params) && strtotime($params['end']) < time()) {
            return FALSE;
        }

        return TRUE;
    }

    /**
     * フィルタリング関数（言語含む）
     * bannerMy.iniのデータに適用
     *
     * @since  2013-06-12
     * @return boolean
     */
    function _rectangleFilterWithLanguage($params)
    {
        /// <変数定義>
            $VARIABLE = new stdClass();
            $VARIABLE->language = isset($this->request['language']) ? $this->request['language'] : 'ja';
        /// <変数定義>

        // 通常、サイトの言語は日本語であるため
        // 外国語の判定をパラメータで受け取り、
        // かつバナー設定ファイルでlanguageの指定があった場合にのみ突き合わせる
        $language = isset($params['language']) ? $params['language'] : 'ja';
        if ($language !== $VARIABLE->language) {
            return FALSE;
        }

        return TRUE;
    }

    /**
     * newdmm/include/ini/livechat/timer_banner_top.ini
     * からデータを取得する
     *
     * @since   2012-1-17 m-yamashita@dooga.co.jp
     */
    function Call_TopLivechatBannerIni()
    {
        $request = $this->request;

        $request['path'] = 'ini/livechat/timer_banner_top.ini';

        return $this->_getIni($request);
    }

    /**
     * Iniファイル取得メソッド
     *
     *
     * @since  2012-10-24 nomura-kouichi
     * @return Array
     */
    function _getIni($request)
    {
        /// <読込定義>
            $INCLUDE = new stdClass();
            $INCLUDE->Configuration = 'Configuration.php';

        /// </読込定義>
        /// <データベース定義>
            $DATABASE = new stdClass();

        /// </データベース定義>
        /// <変数定義>
            $VARIABLE = new stdClass();

            $VARIABLE->path      = $request['path'];
            $VARIABLE->section   = $request['section'];
            $VARIABLE->directive = $request['directive'];
        /// </変数定義>

        require_once $INCLUDE->Configuration;

        // pathパラメータエラー
        if (empty($VARIABLE->path)) {
            $pearError = new PEAR_Error('path parameter is empty', 301);
            $this->setResult(NULL, 301, __LINE__, $VARIABLE->member_id);
            return FALSE;
        }

        // ini取得
        $Configuration = new Configuration($VARIABLE->path);
        $data          = $Configuration->get($VARIABLE->section, $VARIABLE->directive);
        if (PEAR::isError($data))
        {
            $pearError = new PEAR_Error('data is empty', 100);
            $this->setResult(NULL, 100, __LINE__, $VARIABLE->member_id);
            return FALSE;
        }

        $result = array(
            'data' => $data
        );

        $this->setResult($result);

        return TRUE;
    }

}
