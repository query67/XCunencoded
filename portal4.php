<?php

require "./init.php";
include "./langs/mag_langs.php";
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
@header("Content-type: text/javascript");
$C67bb99ac96dc06002512be6652b0192 = !empty(App::$request["mac"]) ? App::$request["mac"] : $_COOKIE["mac"];
if (!empty($C67bb99ac96dc06002512be6652b0192)) {
    $Ec8602a5273865d9f596011654c13420 = new Ee74F642002Cf752C1920105cE3Fc9f7();
    $Ec8602a5273865d9f596011654c13420->type = "MAG";
    $Ec8602a5273865d9f596011654c13420->mac = $C67bb99ac96dc06002512be6652b0192;
    $Ec8602a5273865d9f596011654c13420->debug = App::$settings["enable_debug_stalker"] == 1 ? true : false;
    $Ec8602a5273865d9f596011654c13420->getStreamIDs = true;
    $Ec8602a5273865d9f596011654c13420->mag_token = C0686A491701b5084Feace4FB98857E4();
    $Ec8602a5273865d9f596011654c13420->responseCodeTrigger = false;
    $Ec8602a5273865d9f596011654c13420->FCdEF1DaF4E9825daFFF625985523C6F();
    if (!(App::$request["type"] == "stb" && App::$request["action"] == "handshake")) {
        $A9658f106f3f848e2ef9637551a23301 = $Ec8602a5273865d9f596011654c13420->auth ? true : false;
        $e61a6ac52cd82d75d3e91ae1ec91aa19 = !empty(App::$request["gmode"]) ? intval(App::$request["gmode"]) : null;
        if (empty($Ec8602a5273865d9f596011654c13420->UserInfo["locale"]) && !empty($_COOKIE["locale"])) {
            $Ec8602a5273865d9f596011654c13420->UserInfo["locale"] = $_COOKIE["locale"];
            goto c846ac48feb3a4441ce16d7d57f46a7a;
        }
        $Ec8602a5273865d9f596011654c13420->UserInfo["locale"] = "en_GB.utf8";
        c846ac48feb3a4441ce16d7d57f46a7a:
        $d25dfa80bcade80659652a1f5dc94094 = array("id" => $A9658f106f3f848e2ef9637551a23301 ? $Ec8602a5273865d9f596011654c13420->UserInfo["mag_id"] : 0, "name" => $A9658f106f3f848e2ef9637551a23301 ? $Ec8602a5273865d9f596011654c13420->UserInfo["mag_id"] : 0, "sname" => '', "pass" => '', "parent_password" => "0000", "bright" => "200", "contrast" => "127", "saturation" => "127", "video_out" => '', "volume" => "70", "playback_buffer_bytes" => "0", "playback_buffer_size" => "0", "audio_out" => "1", "mac" => $Ec8602a5273865d9f596011654c13420->mac, "ls" => '', "version" => '', "lang" => '', "locale" => $Ec8602a5273865d9f596011654c13420->UserInfo["locale"], "city_id" => "0", "hd" => "1", "main_notify" => "1", "fav_itv_on" => "0", "now_playing_start" => "2018-02-18 17:33:43", "now_playing_type" => "1", "now_playing_content" => "Test channel", "additional_services_on" => "1", "time_last_play_tv" => "0000-00-00 00:00:00", "time_last_play_video" => "0000-00-00 00:00:00", "operator_id" => "0", "storage_name" => '', "hd_content" => "0", "image_version" => "undefined", "last_change_status" => "0000-00-00 00:00:00", "last_start" => "2018-02-18 17:33:38", "last_active" => "2018-02-18 17:33:43", "keep_alive" => "2018-02-18 17:33:43", "screensaver_delay" => "10", "phone" => '', "fname" => '', "login" => '', "password" => '', "stb_type" => '', "num_banks" => "0", "tariff_plan_id" => "0", "comment" => null, "now_playing_link_id" => "0", "now_playing_streamer_id" => "0", "just_started" => "1", "last_watchdog" => "2018-02-18 17:33:39", "created" => "2018-02-18 14:40:12", "plasma_saving" => "0", "ts_enabled" => "0", "ts_enable_icon" => "1", "ts_path" => '', "ts_max_length" => "3600", "ts_buffer_use" => "cyclic", "ts_action_on_exit" => "no_save", "ts_delay" => "on_pause", "video_clock" => "Off", "verified" => "0", "hdmi_event_reaction" => 1, "pri_audio_lang" => '', "sec_audio_lang" => '', "pri_subtitle_lang" => '', "sec_subtitle_lang" => '', "subtitle_color" => "16777215", "subtitle_size" => "20", "show_after_loading" => '', "play_in_preview_by_ok" => null, "hw_version" => "undefined", "openweathermap_city_id" => "0", "theme" => '', "settings_password" => "0000", "expire_billing_date" => "0000-00-00 00:00:00", "reseller_id" => null, "account_balance" => '', "client_type" => "STB", "hw_version_2" => "62", "blocked" => "0", "units" => "metric", "tariff_expired_date" => null, "tariff_id_instead_expired" => null, "activation_code_auto_issue" => "1", "last_itv_id" => 0, "updated" => array("id" => "1", "uid" => "1", "anec" => "0", "vclub" => "0"), "rtsp_type" => "4", "rtsp_flags" => "0", "stb_lang" => "en", "display_menu_after_loading" => '', "record_max_length" => 180, "web_proxy_host" => '', "web_proxy_port" => '', "web_proxy_user" => '', "web_proxy_pass" => '', "web_proxy_exclude_list" => '', "demo_video_url" => '', "tv_quality_filter" => '', "is_moderator" => false, "timeslot_ratio" => 0.33333333333333, "timeslot" => 40, "kinopoisk_rating" => "1", "enable_tariff_plans" => '', "strict_stb_type_check" => '', "cas_type" => 0, "cas_params" => null, "cas_web_params" => null, "cas_additional_params" => array(), "cas_hw_descrambling" => 0, "cas_ini_file" => '', "logarithm_volume_control" => '', "allow_subscription_from_stb" => "1", "deny_720p_gmode_on_mag200" => "1", "enable_arrow_keys_setpos" => "1", "show_purchased_filter" => '', "timezone_diff" => 0, "enable_connection_problem_indication" => "1", "invert_channel_switch_direction" => '', "play_in_preview_only_by_ok" => false, "enable_stream_error_logging" => '', "always_enabled_subtitles" => App::$settings["always_enabled_subtitles"] == 1 ? "1" : '', "enable_service_button" => '', "enable_setting_access_by_pass" => '', "tv_archive_continued" => '', "plasma_saving_timeout" => "600", "show_tv_only_hd_filter_option" => '', "tv_playback_retry_limit" => "0", "fading_tv_retry_timeout" => "1", "epg_update_time_range" => 0.6, "store_auth_data_on_stb" => false, "account_page_by_password" => '', "tester" => false, "enable_stream_losses_logging" => '', "external_payment_page_url" => '', "max_local_recordings" => "10", "tv_channel_default_aspect" => "fit", "default_led_level" => "10", "standby_led_level" => "90", "show_version_in_main_menu" => "1", "disable_youtube_for_mag200" => "1", "auth_access" => false, "epg_data_block_period_for_stb" => "5", "standby_on_hdmi_off" => "1", "force_ch_link_check" => '', "stb_ntp_server" => "pool.ntp.org", "overwrite_stb_ntp_server" => '', "hide_tv_genres_in_fullscreen" => null, "advert" => null);
        $ca1c2e20411cb664fbd076325707e1ef["get_locales"]["English"] = "en_GB.utf8";
        $ca1c2e20411cb664fbd076325707e1ef["get_locales"]["\xce\x95\xce\xbb\xce\xbb\xce\xb7\xce\xbd\xce\xb9\xce\xba\xce\xac"] = "el_GR.utf8";
        $d1b306a5f315b0b3f4c10b9a7a2dba88 = empty(App::$settings["stalker_theme"]) ? "default" : App::$settings["stalker_theme"];
        $dded9c4b3ef279e7c0b5a0d9168aa0e5 = empty($_COOKIE["timezone"]) || $_COOKIE["timezone"] == "undefined" ? App::$settings["default_timezone"] : $_COOKIE["timezone"];
        $aafcaaeffee4e632e44c18a4464f5765 = !empty(App::$request["type"]) ? App::$request["type"] : null;
        $Dae539630859afa2d11ec03a3660bc0a = !empty(App::$request["action"]) ? App::$request["action"] : null;
        switch ($aafcaaeffee4e632e44c18a4464f5765) {
            case "stb":
                switch ($Dae539630859afa2d11ec03a3660bc0a) {
                    case "get_ad":
                        exit(json_encode(array("js" => array())));
                    case "get_storages":
                        exit(json_encode(array("js" => array())));
                    case "get_profile":
                        $Ea8404404725dcd4dd14f9bb1589fbba = $A9658f106f3f848e2ef9637551a23301 ? array_merge($d25dfa80bcade80659652a1f5dc94094, $Ec8602a5273865d9f596011654c13420->get_profile_vars) : $d25dfa80bcade80659652a1f5dc94094;
                        $Ea8404404725dcd4dd14f9bb1589fbba["status"] = intval(!$A9658f106f3f848e2ef9637551a23301);
                        $Ea8404404725dcd4dd14f9bb1589fbba["update_url"] = empty(App::$settings["update_url"]) ? '' : App::$settings["update_url"];
                        $Ea8404404725dcd4dd14f9bb1589fbba["test_download_url"] = empty(App::$settings["test_download_url"]) ? '' : App::$settings["test_download_url"];
                        $Ea8404404725dcd4dd14f9bb1589fbba["default_timezone"] = App::$settings["default_timezone"];
                        $Ea8404404725dcd4dd14f9bb1589fbba["default_locale"] = App::$settings["default_locale"];
                        $Ea8404404725dcd4dd14f9bb1589fbba["allowed_stb_types"] = App::$settings["allowed_stb_types"];
                        $Ea8404404725dcd4dd14f9bb1589fbba["allowed_stb_types_for_local_recording"] = App::$settings["allowed_stb_types"];
                        $Ea8404404725dcd4dd14f9bb1589fbba["storages"] = array();
                        $Ea8404404725dcd4dd14f9bb1589fbba["tv_channel_default_aspect"] = empty(App::$settings["tv_channel_default_aspect"]) ? "fit" : App::$settings["tv_channel_default_aspect"];
                        $Ea8404404725dcd4dd14f9bb1589fbba["playback_limit"] = empty(App::$settings["playback_limit"]) ? false : intval(App::$settings["playback_limit"]);
                        if (!empty($Ea8404404725dcd4dd14f9bb1589fbba["playback_limit"])) {
                            goto Ae90c9d3c3fd87b1270cf8c279c2880e;
                        }
                        $Ea8404404725dcd4dd14f9bb1589fbba["enable_playback_limit"] = false;
                        Ae90c9d3c3fd87b1270cf8c279c2880e:
                        $Ea8404404725dcd4dd14f9bb1589fbba["show_tv_channel_logo"] = empty(App::$settings["show_tv_channel_logo"]) ? false : true;
                        $Ea8404404725dcd4dd14f9bb1589fbba["show_channel_logo_in_preview"] = empty(App::$settings["show_channel_logo_in_preview"]) ? false : true;
                        $Ea8404404725dcd4dd14f9bb1589fbba["enable_connection_problem_indication"] = empty(App::$settings["enable_connection_problem_indication"]) ? false : true;
                        $Ea8404404725dcd4dd14f9bb1589fbba["hls_fast_start"] = "1";
                        $Ea8404404725dcd4dd14f9bb1589fbba["check_ssl_certificate"] = 0;
                        $Ea8404404725dcd4dd14f9bb1589fbba["enable_buffering_indication"] = 1;
                        $Ea8404404725dcd4dd14f9bb1589fbba["watchdog_timeout"] = mt_rand(80, 120);
                        if (!(empty($Ea8404404725dcd4dd14f9bb1589fbba["aspect"]) && App::$StreamingServers[SERVER_ID]["server_protocol"] == "https")) {
                            goto Aed5b8d8f9fafa32ac74341c3c0e96a0;
                        }
                        $Ea8404404725dcd4dd14f9bb1589fbba["aspect"] = "16";
                        Aed5b8d8f9fafa32ac74341c3c0e96a0:
                        exit(json_encode(array("js" => $Ea8404404725dcd4dd14f9bb1589fbba), JSON_PARTIAL_OUTPUT_ON_ERROR));
                    case "get_localization":
                        exit(json_encode(array("js" => $D1961f9681af960881954ebc363700de[$Ec8602a5273865d9f596011654c13420->UserInfo["locale"]])));
                    case "log":
                        exit(json_encode(array("js" => true)));
                    case "get_modules":
                        $c930aa132ee71a15b6b1a2f443ffd8d8 = array("all_modules" => array("media_browser", "tv", "vclub", "sclub", "radio", "apps", "youtube", "dvb", "tv_archive", "time_shift", "time_shift_local", "epg.reminder", "epg.recorder", "epg", "epg.simple", "audioclub", "downloads_dialog", "downloads", "karaoke", "weather.current", "widget.audio", "widget.radio", "records", "remotepvr", "pvr_local", "settings.parent", "settings.localization", "settings.update", "settings.playback", "settings.common", "settings.network_status", "settings", "course.nbu", "weather.day", "cityinfo", "horoscope", "anecdote", "game.mastermind", "account", "demo", "infoportal", "internet", "service_management", "logout", "account_menu"), "switchable_modules" => array("sclub", "vlub", "karaoke", "cityinfo", "horoscope", "anecdote", "game.mastermind"), "disabled_modules" => array("weather.current", "weather.day", "cityinfo", "karaoke", "game.mastermind", "records", "downloads", "remotepvr", "service_management", "settings.update", "settings.common", "audioclub", "course.nbu", "infoportal", "demo", "widget.audio", "widget.radio"), "restricted_modules" => array(), "template" => $d1b306a5f315b0b3f4c10b9a7a2dba88, "launcher_url" => '', "launcher_profile_url" => '');
                        exit(json_encode(array("js" => $c930aa132ee71a15b6b1a2f443ffd8d8)));
                }
                D2cfc1beeb5930ea6ccf7c21e39cb5bd:
                goto f2ccdccb040852a80ede9473a3f6d215;
            case "watchdog":
                $cf0a25072f4b9a32281a937290123528 = array("data" => array("msgs" => 0, "additional_services_on" => 1));
                if (!empty($Ec8602a5273865d9f596011654c13420->UserInfo["mag_id"])) {
                    App::$ipTV_db->query("UPDATE `mag_devices` SET `last_watchdog` = '%d' WHERE `mag_id` = '%d'", time(), $Ec8602a5273865d9f596011654c13420->UserInfo["mag_id"]);
                    switch ($Dae539630859afa2d11ec03a3660bc0a) {
                        case "get_events":
                            App::$ipTV_db->query("SELECT * FROM `mag_events` WHERE `mag_device_id` = '%d' AND `status` = 0 ORDER BY `id` ASC LIMIT 1", $Ec8602a5273865d9f596011654c13420->UserInfo["mag_id"]);
                            if (!(App::$ipTV_db->num_rows() > 0)) {
                                goto A4ba00bab00ef3e9a71d5bbfd404018c;
                            }
                            $Fc0e16d588bdcb7151dba8f0df483111 = App::$ipTV_db->C7aA024a27cF4472e107a8152e52c9B6();
                            App::$ipTV_db->query("SELECT count(*) FROM `mag_events` WHERE `mag_device_id` = '%d' AND `status` = 0 ", $Ec8602a5273865d9f596011654c13420->UserInfo["mag_id"]);
                            $D6cfc0be84ff101a470b42cb76a307d0 = App::$ipTV_db->E9e03eec0700E2d8C38208fF7D2db65D();
                            $cf0a25072f4b9a32281a937290123528 = array("data" => array("msgs" => $D6cfc0be84ff101a470b42cb76a307d0, "id" => $Fc0e16d588bdcb7151dba8f0df483111["id"], "event" => $Fc0e16d588bdcb7151dba8f0df483111["event"], "need_confirm" => $Fc0e16d588bdcb7151dba8f0df483111["need_confirm"], "msg" => $Fc0e16d588bdcb7151dba8f0df483111["msg"], "reboot_after_ok" => $Fc0e16d588bdcb7151dba8f0df483111["reboot_after_ok"], "auto_hide_timeout" => $Fc0e16d588bdcb7151dba8f0df483111["auto_hide_timeout"], "send_time" => date("d-m-Y H:i:s", $Fc0e16d588bdcb7151dba8f0df483111["send_time"]), "additional_services_on" => $Fc0e16d588bdcb7151dba8f0df483111["additional_services_on"], "updated" => array("anec" => $Fc0e16d588bdcb7151dba8f0df483111["anec"], "vclub" => $Fc0e16d588bdcb7151dba8f0df483111["vclub"])));
                            $bf62ec09db7330d04d5801c5e4dc90aa = array("reboot", "reload_portal", "play_channel", "cut_off");
                            if (!in_array($Fc0e16d588bdcb7151dba8f0df483111["event"], $bf62ec09db7330d04d5801c5e4dc90aa)) {
                                goto fe2893466a18d2205a98585bc5ae31d0;
                            }
                            App::$ipTV_db->query("UPDATE `mag_events` SET `status` = 1 WHERE `id` = '%d'", $Fc0e16d588bdcb7151dba8f0df483111["id"]);
                            fe2893466a18d2205a98585bc5ae31d0:
                            A4ba00bab00ef3e9a71d5bbfd404018c:
                            exit(json_encode(array("js" => $cf0a25072f4b9a32281a937290123528), JSON_PARTIAL_OUTPUT_ON_ERROR));
                        case "confirm_event":
                            if (empty(App::$request["event_active_id"])) {
                                goto Db66c376ae42bc3102533e9053cf3619;
                            }
                            $Ab30a676770cce2b5cff54fb647a8520 = App::$request["event_active_id"];
                            App::$ipTV_db->query("UPDATE `mag_events` SET `status` = 1 WHERE `id` = '%d'", $Ab30a676770cce2b5cff54fb647a8520);
                            if (!(App::$ipTV_db->b6b9384b52DD85e590450e9e1FE3649e() > 0)) {
                                Db66c376ae42bc3102533e9053cf3619:
                                goto B8b9cc5120c0d51a6116986d61a6f990;
                            }
                            exit(json_encode(array("js" => array("data" => "ok"))));
                    }
                    B8b9cc5120c0d51a6116986d61a6f990:
                }
                exit(json_encode(array("js" => $cf0a25072f4b9a32281a937290123528), JSON_PARTIAL_OUTPUT_ON_ERROR));
        }
        f2ccdccb040852a80ede9473a3f6d215:
        if ($A9658f106f3f848e2ef9637551a23301) {
            $ace34b9ef659fb27b40bbe3317490508 = !empty($Ec8602a5273865d9f596011654c13420->UserInfo["mag_player"]) ? $Ec8602a5273865d9f596011654c13420->UserInfo["mag_player"] . " " : "ffmpeg ";
            switch ($aafcaaeffee4e632e44c18a4464f5765) {
                case "stb":
                    switch ($Dae539630859afa2d11ec03a3660bc0a) {
                        case "get_preload_images":
                            $E8dc8abc884c4eb0a2ed8958db9af32f = is_numeric($e61a6ac52cd82d75d3e91ae1ec91aa19) ? "i_" . $e61a6ac52cd82d75d3e91ae1ec91aa19 : "i";
                            $Ee8d3073a2839241cd05883d58aaf489 = array("template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/loading.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/horoscope_menu_button_1_6_a.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/ico_info.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/mb_pass_bg.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/mm_ico_info.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/footer_menu_act.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/_2_cloudy.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/footer_sidepanel.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/footer_search.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/v_menu_1a.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/loading_bg.gif", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/horoscope_menu_button_1_11_b.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/mb_table_act01.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/horoscope_menu_button_1_11_a.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/tv_table.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/vol_1.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/mb_prev_bg.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/horoscope_menu_button_1_8_b.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/mm_ico_youtube.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/horoscope_menu_button_1_4_a.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/tv_table_arrows.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/horoscope_menu_button_1_9_a.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/horoscope_menu_button_1_10_a.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/1x1.gif", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/mm_ico_karaoke.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/mm_ico_video.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/mb_table05.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/mb_table_act02.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/tv_table_separator.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/mb_icons.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/footer_btn.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/horoscope_menu_button_1_5_b.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/mm_ico_audio.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/_7_hail.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/mb_table_act05.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/_9_snow.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/v_menu_4.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/_3_pasmurno.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/low_q.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/mm_ico_setting.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/mb_context_borders.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/input_episode_bg.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/mb_table_act04.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/mm_hor_bg3.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/black85.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/pause_btn.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/ico_error26.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/input_episode.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/epg_red_mark.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/footer_sidepanel_act.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/horoscope_menu_button_1_3_b.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/mb_pass_input.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/footer_bg2.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/osd_bg.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/epg_orange_mark.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/mm_ico_mb.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/ears_arrow_l.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/hr_filminfo.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/mm_ico_rec.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/mm_ico_account.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/mb_icon_rec.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/mm_hor_left.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/mb_table04.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/mb_player.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/footer_search_act2.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/input_channel_bg.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/horoscope_menu_button_1_12_a.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/horoscope_menu_button_1_9_b.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/mm_ico_android.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/bg.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/mm_hor_right.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/mb_quality.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/mb_table02.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/bg2.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/horoscope_menu_button_1_1_a.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/osd_line_pos.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/input_channel.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/horoscope_menu_button_1_7_a.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/arr_right.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/mm_ico_radio.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/ico_confirm.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/osd_btn.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/osd_time.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/footer_menu.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/volume_off.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/btn2.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/mm_ico_internet.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/volume_bg.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/horoscope_menu_button_1_1_b.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/v_menu_2b.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/horoscope_menu_button_1_3_a.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/horoscope_menu_button_1_4_b.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/_255_NA.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/_1_sun_cl.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/horoscope_menu_button_1_10_b.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/25alfa_20.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/mb_table_act06.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/input.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/tv_table_focus.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/skip.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/epg_green_mark.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/mm_vert_cell.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/_1_moon_cl.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/modal_bg.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/_4_short_rain.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/ears_arrow_r.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/mm_ico_default.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/osd_line.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/mb_table07.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/mm_ico_usb.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/mb_context_bg.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/footer_sidepanel_r.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/horoscope_menu_button_1_2_a.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/v_menu_1b.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/mb_table03.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/mb_table_act03.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/mb_table01.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/mm_ico_dm.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/horoscope_menu_button_1_5_a.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/horoscope_menu_button_1_6_b.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/footer_sidepanel_l.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/footer_sidepanel_line.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/mm_ico_tv.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/mb_table06.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/mb_scroll_bg.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/_8_rain_swon.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/mb_scroll.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/v_menu_2a.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/v_menu_5.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/horoscope_menu_button_1_2_b.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/_10_heavy_snow.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/aspect_bg.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/_0_moon.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/volume_bar.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/v_menu_3.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/mm_hor_bg1.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/horoscope_menu_button_1_12_b.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/mm_ico_ex.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/footer_bg.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/footer_sidepanel_arr.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/mb_icon_scrambled.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/ico_alert.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/mm_ico_apps.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/input_act.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/ears.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/horoscope_menu_button_1_8_a.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/mm_hor_bg2.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/arr_left.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/horoscope_menu_button_1_7_b.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/footer_search_act.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/_0_sun.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/_6_lightning.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/osd_rec.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/tv_prev_bg.png", "template/{$d1b306a5f315b0b3f4c10b9a7a2dba88}/{$E8dc8abc884c4eb0a2ed8958db9af32f}/_5_rain.png");
                            exit(json_encode(array("js" => $Ee8d3073a2839241cd05883d58aaf489)));
                        case "get_settings_profile":
                            App::$ipTV_db->query("SELECT * FROM `mag_devices` WHERE `mag_id` = '%d'", $Ec8602a5273865d9f596011654c13420->UserInfo["mag_id"]);
                            $b9c343afac89cc8efa3bd23b4ec1861c = App::$ipTV_db->C7aa024A27cf4472E107a8152e52c9b6();
                            $db2b4288f40e1aca3b27d4dca74ee0b4 = array("js" => array("modules" => array(array("name" => "lock"), array("name" => "lang"), array("name" => "update"), array("name" => "net_info", "sub" => array(array("name" => "wired"), array("name" => "pppoe", "sub" => array(array("name" => "dhcp"), array("name" => "dhcp_manual"), array("name" => "disable"))), array("name" => "wireless"), array("name" => "speed"))), array("name" => "video"), array("name" => "audio"), array("name" => "net", "sub" => array(array("name" => "ethernet", "sub" => array(array("name" => "dhcp"), array("name" => "dhcp_manual"), array("name" => "manual"), array("name" => "no_ip"))), array("name" => "pppoe", "sub" => array(array("name" => "dhcp"), array("name" => "dhcp_manual"), array("name" => "disable"))), array("name" => "wifi", "sub" => array(array("name" => "dhcp"), array("name" => "dhcp_manual"), array("name" => "manual"))), array("name" => "speed"))), array("name" => "advanced"), array("name" => "dev_info"), array("name" => "reload"), array("name" => "internal_portal"), array("name" => "reboot"))));
                            $db2b4288f40e1aca3b27d4dca74ee0b4["js"]["parent_password"] = $b9c343afac89cc8efa3bd23b4ec1861c["parent_password"];
                            $db2b4288f40e1aca3b27d4dca74ee0b4["js"]["update_url"] = App::$settings["update_url"];
                            $db2b4288f40e1aca3b27d4dca74ee0b4["js"]["test_download_url"] = App::$settings["test_download_url"];
                            $db2b4288f40e1aca3b27d4dca74ee0b4["js"]["playback_buffer_size"] = $b9c343afac89cc8efa3bd23b4ec1861c["playback_buffer_size"];
                            $db2b4288f40e1aca3b27d4dca74ee0b4["js"]["screensaver_delay"] = $b9c343afac89cc8efa3bd23b4ec1861c["screensaver_delay"];
                            $db2b4288f40e1aca3b27d4dca74ee0b4["js"]["plasma_saving"] = $b9c343afac89cc8efa3bd23b4ec1861c["plasma_saving"];
                            $db2b4288f40e1aca3b27d4dca74ee0b4["js"]["spdif_mode"] = $b9c343afac89cc8efa3bd23b4ec1861c["spdif_mode"];
                            $db2b4288f40e1aca3b27d4dca74ee0b4["js"]["ts_enabled"] = $b9c343afac89cc8efa3bd23b4ec1861c["ts_enabled"];
                            $db2b4288f40e1aca3b27d4dca74ee0b4["js"]["ts_enable_icon"] = $b9c343afac89cc8efa3bd23b4ec1861c["ts_enable_icon"];
                            $db2b4288f40e1aca3b27d4dca74ee0b4["js"]["ts_path"] = $b9c343afac89cc8efa3bd23b4ec1861c["ts_path"];
                            $db2b4288f40e1aca3b27d4dca74ee0b4["js"]["ts_max_length"] = $b9c343afac89cc8efa3bd23b4ec1861c["ts_max_length"];
                            $db2b4288f40e1aca3b27d4dca74ee0b4["js"]["ts_buffer_use"] = $b9c343afac89cc8efa3bd23b4ec1861c["ts_buffer_use"];
                            $db2b4288f40e1aca3b27d4dca74ee0b4["js"]["ts_action_on_exit"] = $b9c343afac89cc8efa3bd23b4ec1861c["ts_action_on_exit"];
                            $db2b4288f40e1aca3b27d4dca74ee0b4["js"]["ts_delay"] = $b9c343afac89cc8efa3bd23b4ec1861c["ts_delay"];
                            $db2b4288f40e1aca3b27d4dca74ee0b4["js"]["hdmi_event_reaction"] = $b9c343afac89cc8efa3bd23b4ec1861c["hdmi_event_reaction"];
                            $db2b4288f40e1aca3b27d4dca74ee0b4["js"]["pri_audio_lang"] = $d25dfa80bcade80659652a1f5dc94094["pri_audio_lang"];
                            $db2b4288f40e1aca3b27d4dca74ee0b4["js"]["show_after_loading"] = $b9c343afac89cc8efa3bd23b4ec1861c["show_after_loading"];
                            $db2b4288f40e1aca3b27d4dca74ee0b4["js"]["sec_audio_lang"] = $d25dfa80bcade80659652a1f5dc94094["sec_audio_lang"];
                            if (App::$settings["always_enabled_subtitles"] == 1) {
                                $db2b4288f40e1aca3b27d4dca74ee0b4["js"]["pri_subtitle_lang"] = $d25dfa80bcade80659652a1f5dc94094["pri_subtitle_lang"];
                                $db2b4288f40e1aca3b27d4dca74ee0b4["js"]["sec_subtitle_lang"] = $d25dfa80bcade80659652a1f5dc94094["sec_subtitle_lang"];
                                goto D6b80e5131bac79acd8de14b192ddf87;
                            }
                            $db2b4288f40e1aca3b27d4dca74ee0b4["js"]["pri_subtitle_lang"] = $db2b4288f40e1aca3b27d4dca74ee0b4["js"]["sec_subtitle_lang"] = '';
                            D6b80e5131bac79acd8de14b192ddf87:
                            exit(json_encode($db2b4288f40e1aca3b27d4dca74ee0b4));
                        case "get_locales":
                            App::$ipTV_db->query("SELECT `locale` FROM `mag_devices` WHERE `mag_id` = '%d'", $Ec8602a5273865d9f596011654c13420->UserInfo["mag_id"]);
                            $C37d240cf06edcdc813889110cc7121c = App::$ipTV_db->C7aa024A27CF4472E107a8152E52c9B6();
                            $output = array();
                            foreach ($ca1c2e20411cb664fbd076325707e1ef["get_locales"] as $a1e8dfee98d018915be6df6992f0a1ed => $ee39a88da98c29009022e6bed2fb2e28) {
                                $C37d240cf06edcdc813889110cc7121c = $C37d240cf06edcdc813889110cc7121c["locale"] == $ee39a88da98c29009022e6bed2fb2e28 ? 1 : 0;
                                $output[] = array("label" => $a1e8dfee98d018915be6df6992f0a1ed, "value" => $ee39a88da98c29009022e6bed2fb2e28, "selected" => $C37d240cf06edcdc813889110cc7121c);
                            }
                            exit(json_encode(array("js" => $output)));
                        case "get_countries":
                            exit(json_encode(array("js" => array())));
                        case "get_timezones":
                            $e2a9f153ec87c02a720cb0632e52f45e = DateTimeZone::listIdentifiers(DateTimeZone::ALL);
                            $output = array();
                            foreach ($e2a9f153ec87c02a720cb0632e52f45e as $D0cfbc6fc34ac87703e22e40482aaaf5) {
                                $C37d240cf06edcdc813889110cc7121c = $dded9c4b3ef279e7c0b5a0d9168aa0e5 == $D0cfbc6fc34ac87703e22e40482aaaf5 ? 1 : 0;
                                $output[] = array("label" => $D0cfbc6fc34ac87703e22e40482aaaf5, "value" => $D0cfbc6fc34ac87703e22e40482aaaf5, "selected" => $C37d240cf06edcdc813889110cc7121c);
                            }
                            exit(json_encode(array("js" => $output)));
                        case "get_cities":
                            exit(json_encode(array("js" => array())));
                        case "search_cities":
                            exit(json_encode(array("js" => array())));
                        case "get_tv_aspects":
                            if (!empty($Ec8602a5273865d9f596011654c13420->UserInfo["aspect"])) {
                                exit($Ec8602a5273865d9f596011654c13420->UserInfo["aspect"]);
                            }
                            exit(json_encode($Ec8602a5273865d9f596011654c13420->UserInfo["aspect"]));
                        case "set_volume":
                            $fcbdc0313cbd7ee6f58000a68977d496 = App::$request["vol"];
                            if (empty($fcbdc0313cbd7ee6f58000a68977d496)) {
                                goto abd4ceecf0eadff3f377220cfad99cfa;
                            }
                            App::$ipTV_db->query("UPDATE `mag_devices` SET `volume` = '%d' WHERE `mag_id` = '%d'", $fcbdc0313cbd7ee6f58000a68977d496, $Ec8602a5273865d9f596011654c13420->UserInfo["mag_id"]);
                            if (!(App::$ipTV_db->b6B9384B52Dd85e590450e9E1Fe3649E() > 0)) {
                                abd4ceecf0eadff3f377220cfad99cfa:
                                goto d50854b850713de14b7db8b962a3661d;
                            }
                            exit(json_encode(array("data" => true)));
                        case "set_aspect":
                            if (empty(App::$request["ch_id"])) {
                                goto a916da2a6b7bf03d8addf0391076ea47;
                            }
                            $dae53a981b9f73e4eb3ad9145b3a0ab6 = App::$request["ch_id"];
                            $F041c49c2b3e0016e82273362895dbe5 = App::$request["aspect"];
                            $De7df37dd479538e600add0027b14f7e = $Ec8602a5273865d9f596011654c13420->UserInfo["aspect"];
                            if (empty($De7df37dd479538e600add0027b14f7e)) {
                                App::$ipTV_db->query("UPDATE `mag_devices` SET `aspect` = '%s' WHERE mag_id = '%d'", json_encode(array("js" => array($dae53a981b9f73e4eb3ad9145b3a0ab6 => $F041c49c2b3e0016e82273362895dbe5))), $Ec8602a5273865d9f596011654c13420->UserInfo["mag_id"]);
                                goto f54a7843c80a891623e4b95f09a75128;
                            }
                            $De7df37dd479538e600add0027b14f7e = json_decode($De7df37dd479538e600add0027b14f7e, true);
                            $De7df37dd479538e600add0027b14f7e["js"][$dae53a981b9f73e4eb3ad9145b3a0ab6] = $F041c49c2b3e0016e82273362895dbe5;
                            App::$ipTV_db->query("UPDATE `mag_devices` SET `aspect` = '%s' WHERE mag_id = '%d'", json_encode($De7df37dd479538e600add0027b14f7e), $Ec8602a5273865d9f596011654c13420->UserInfo["mag_id"]);
                            f54a7843c80a891623e4b95f09a75128:
                            a916da2a6b7bf03d8addf0391076ea47:
                            exit(json_encode(array("js" => true)));
                        case "set_stream_error":
                            exit(json_encode(array("js" => true)));
                        case "set_screensaver_delay":
                            if (empty($_SERVER["HTTP_COOKIE"])) {
                                goto d4332df0ebe5d1aa5c1feb251433a3ec;
                            }
                            $ef532e657d7400a0539d234b21080131 = intval(App::$request["screensaver_delay"]);
                            App::$ipTV_db->query("UPDATE `mag_devices` SET `screensaver_delay` = '%d' WHERE `mag_id` = '%d'", $ef532e657d7400a0539d234b21080131, $Ec8602a5273865d9f596011654c13420->UserInfo["mag_id"]);
                            d4332df0ebe5d1aa5c1feb251433a3ec:
                            exit(json_encode(array("js" => true)));
                        case "set_playback_buffer":
                            if (empty($_SERVER["HTTP_COOKIE"])) {
                                goto ef19d5aa6d36060568b4c7dd96b72485;
                            }
                            $a8d2292944a1f9f0ab52c670f0aea82d = intval(App::$request["playback_buffer_bytes"]);
                            $Df8115aa100cdbcb31a7a79783369bdc = intval(App::$request["playback_buffer_size"]);
                            App::$ipTV_db->query("UPDATE `mag_devices` SET `playback_buffer_bytes` = '%d' , `playback_buffer_size` = '%d' WHERE `mag_id` = '%d'", $a8d2292944a1f9f0ab52c670f0aea82d, $Df8115aa100cdbcb31a7a79783369bdc, $Ec8602a5273865d9f596011654c13420->UserInfo["mag_id"]);
                            ef19d5aa6d36060568b4c7dd96b72485:
                            exit(json_encode(array("js" => true)));
                        case "set_plasma_saving":
                            $Fdb348a6a6e49915b064d5fd78e2bc42 = intval(App::$request["plasma_saving"]);
                            App::$ipTV_db->query("UPDATE `mag_devices` SET `plasma_saving` = '%d' WHERE `mag_id` = '%d'", $Fdb348a6a6e49915b064d5fd78e2bc42, $Ec8602a5273865d9f596011654c13420->UserInfo["mag_id"]);
                            exit(json_encode(array("js" => true)));
                        case "set_parent_password":
                            if (isset(App::$request["parent_password"]) && isset(App::$request["pass"]) && isset(App::$request["repeat_pass"]) && App::$request["pass"] == App::$request["repeat_pass"]) {
                                App::$ipTV_db->query("UPDATE `mag_devices` SET `parent_password` = '%s' WHERE `mag_id` = '%d'", App::$request["pass"], $Ec8602a5273865d9f596011654c13420->UserInfo["mag_id"]);
                                exit(json_encode(array("js" => true)));
                            }
                            exit(json_encode(array("js" => true)));
                        case "set_locale":
                            if (empty(App::$request["locale"])) {
                                goto De152b8ae930ce498f2d02ceada1054f;
                            }
                            App::$ipTV_db->query("UPDATE `mag_devices` SET `locale` = '%s' WHERE `mag_id` = '%d'", App::$request["locale"], $Ec8602a5273865d9f596011654c13420->UserInfo["mag_id"]);
                            De152b8ae930ce498f2d02ceada1054f:
                            exit(json_encode(array("js" => array())));
                        case "set_hdmi_reaction":
                            if (!(!empty($_SERVER["HTTP_COOKIE"]) && isset(App::$request["data"]))) {
                                goto Eeb79cf296784d4852aefa67a0c0020f;
                            }
                            $E2545bbf10c8bb0f5fa35482916ba603 = App::$request["data"];
                            App::$ipTV_db->query("UPDATE `mag_devices` SET `hdmi_event_reaction` = '%s' WHERE `mag_id` = '%d'", $E2545bbf10c8bb0f5fa35482916ba603, $Ec8602a5273865d9f596011654c13420->UserInfo["mag_id"]);
                            Eeb79cf296784d4852aefa67a0c0020f:
                            exit(json_encode(array("js" => true)));
                    }
                    d50854b850713de14b7db8b962a3661d:
                    goto Eb367e5ecb7206ab12c234a74053acde;
                case "audioclub":
                    switch ($Dae539630859afa2d11ec03a3660bc0a) {
                        case "get_categories":
                            $output = array();
                            $output["js"] = array();
                            $Fceeb189626a9b3bb9ff747551d7f4eb = AA929A0c1981b835Ab1a91eD15ebC7b5("movie");
                            if (!(App::$settings["show_all_category_mag"] == 1)) {
                                goto ed838c7f47db1b29f368b03b0464ff2e;
                            }
                            $output["js"][] = array("id" => "*", "title" => "All", "alias" => "*", "censored" => 0);
                            ed838c7f47db1b29f368b03b0464ff2e:
                            foreach ($Fceeb189626a9b3bb9ff747551d7f4eb[0] as $B726f6951aa8bb6186a89aa6556a5fda => $a9a8ee79ae35dd38ca815d60faeacdf3) {
                                $output["js"][] = array("id" => $a9a8ee79ae35dd38ca815d60faeacdf3["id"], "title" => $a9a8ee79ae35dd38ca815d60faeacdf3["category_name"], "alias" => $a9a8ee79ae35dd38ca815d60faeacdf3["category_name"], "censored" => stristr($a9a8ee79ae35dd38ca815d60faeacdf3["category_name"], "adults") ? 1 : 0);
                            }
                            exit(json_encode($output));
                    }
                    aba62025c3e6b1d4f7b3fab8666ab297:
                    goto Eb367e5ecb7206ab12c234a74053acde;
                case "itv":
                    switch ($Dae539630859afa2d11ec03a3660bc0a) {
                        case "create_link":
                            $Dee60c56ca507ad041c60ec9e0982c62 = App::$request["cmd"];
                            $b49fe5e7e52274b9ac295953f2db315c = "http://localhost/ch/";
                            list($a9c5934acd47be1fce9633a3a7c3a291, $F2da948d0119f321df4b6e4497e3921a) = explode("_", substr($Dee60c56ca507ad041c60ec9e0982c62, strpos($Dee60c56ca507ad041c60ec9e0982c62, $b49fe5e7e52274b9ac295953f2db315c) + strlen($b49fe5e7e52274b9ac295953f2db315c)));
                            if (empty($F2da948d0119f321df4b6e4497e3921a)) {
                                $cfc2cc083b0e79a53fa2e526ee5372fc = B5688da14831ea0989755FdE158E739A();
                                App::$ipTV_db->query("UPDATE `users` SET `play_token` = '%s' WHERE `id` = '%d'", $cfc2cc083b0e79a53fa2e526ee5372fc . ":" . (time() + 10) . ":" . $a9c5934acd47be1fce9633a3a7c3a291, $Ec8602a5273865d9f596011654c13420->UserInfo["user_id"]);
                                $d466a2ae0e067ebfee7c7e9868c52af8 = $ace34b9ef659fb27b40bbe3317490508 . App::$StreamingServers[SERVER_ID]["site_url"] . "{$Ec8602a5273865d9f596011654c13420->UserInfo["username"]}/{$Ec8602a5273865d9f596011654c13420->UserInfo["password"]}/{$a9c5934acd47be1fce9633a3a7c3a291}?play_token={$cfc2cc083b0e79a53fa2e526ee5372fc}";
                                goto B760270d5a72745ca4c49db1178dfec0;
                            }
                            $d466a2ae0e067ebfee7c7e9868c52af8 = $ace34b9ef659fb27b40bbe3317490508 . $F2da948d0119f321df4b6e4497e3921a;
                            B760270d5a72745ca4c49db1178dfec0:
                            exit(json_encode(array("js" => array("id" => $a9c5934acd47be1fce9633a3a7c3a291, "cmd" => $d466a2ae0e067ebfee7c7e9868c52af8), "streamer_id" => 0, "link_id" => 0, "load" => 0, "error" => '')));
                        case "set_claim":
                            if (!(!empty(App::$request["id"]) && !empty(App::$request["real_type"]))) {
                                goto C54a015b89063014d50df1b49a52c543;
                            }
                            $d0bb7be46c16439c99dfeaf837b13db6 = intval(App::$request["id"]);
                            $bb0bfc2e62ff0d90f6c46deb90a083b6 = App::$request["real_type"];
                            $Cf6869ffea9a0c2075293e7c3c330d4d = date("Y-m-d H:i:s");
                            App::$ipTV_db->query("INSERT INTO `mag_claims` (`stream_id`,`mag_id`,`real_type`,`date`) VALUES('%d','%d','%s','%s')", $d0bb7be46c16439c99dfeaf837b13db6, $Ec8602a5273865d9f596011654c13420->UserInfo["mag_id"], $bb0bfc2e62ff0d90f6c46deb90a083b6, $Cf6869ffea9a0c2075293e7c3c330d4d);
                            C54a015b89063014d50df1b49a52c543:
                            echo json_encode(array("js" => true));
                            exit;
                        case "set_fav":
                            $Efe4be4aa11dbb7817810fe337f08223 = empty(App::$request["fav_ch"]) ? '' : App::$request["fav_ch"];
                            $Efe4be4aa11dbb7817810fe337f08223 = array_filter(array_map("intval", explode(",", $Efe4be4aa11dbb7817810fe337f08223)));
                            $Ec8602a5273865d9f596011654c13420->UserInfo["fav_channels"]["live"] = $Efe4be4aa11dbb7817810fe337f08223;
                            $Ec8602a5273865d9f596011654c13420->A01858985B955ECb1347732ED13C5F5f();
                            App::$ipTV_db->query("UPDATE `mag_devices` SET `fav_channels` = '%s' WHERE `mag_id` = '%d'", json_encode($Ec8602a5273865d9f596011654c13420->UserInfo["fav_channels"]), $Ec8602a5273865d9f596011654c13420->UserInfo["mag_id"]);
                            exit(json_encode(array("js" => true)));
                        case "get_fav_ids":
                            echo json_encode(array("js" => $Ec8602a5273865d9f596011654c13420->UserInfo["fav_channels"]["live"]));
                            exit;
                        case "get_all_channels":
                            exit(EcBc0C6e46dABe991510f9ba1E0eD241(null, true));
                        case "get_ordered_list":
                            $c75c6e892526bf4353f3ad2e2c485a10 = !empty(App::$request["fav"]) ? 1 : null;
                            $Dcc7cc723f70038d27d929aa461ce83e = !empty(App::$request["sortby"]) ? App::$request["sortby"] : null;
                            $cae6bb9a48cd0e3dc3febd1c7b116804 = empty(App::$request["genre"]) || !is_numeric(App::$request["genre"]) ? null : intval(App::$request["genre"]);
                            exit(ecbC0c6e46dABe991510F9Ba1E0ed241($cae6bb9a48cd0e3dc3febd1c7b116804, false, $c75c6e892526bf4353f3ad2e2c485a10, $Dcc7cc723f70038d27d929aa461ce83e));
                        case "get_all_fav_channels":
                            $cae6bb9a48cd0e3dc3febd1c7b116804 = empty(App::$request["genre"]) || !is_numeric(App::$request["genre"]) ? null : intval(App::$request["genre"]);
                            exit(eCBC0C6e46DABE991510F9Ba1e0ED241($cae6bb9a48cd0e3dc3febd1c7b116804, true, 1));
                        case "get_epg_info":
                            $d658c95128bbd2d94afb5e17b1932070 = empty(App::$request["period"]) || !is_numeric(App::$request["period"]) ? 3 : intval(App::$request["period"]);
                            $A55ff9c1fcce8f45f315e85ad1224748 = a1d1B00D6CF0bc98fa2CA35183664900(array("live", "created_live"));
                            $b2978c77e40a7a7291016c1b4b90badf = array("js" => array());
                            $b2978c77e40a7a7291016c1b4b90badf["js"]["data"] = array();
                            $E47661722dd0a4bb511ed48db7ece503 = App::B026322780cD85a24ea2acdEb00311f8($dded9c4b3ef279e7c0b5a0d9168aa0e5);
                            foreach ($A55ff9c1fcce8f45f315e85ad1224748["streams"] as $Af1a37b9a908a173cf5980363b044d80 => $ae51a59cd6263a6ace2b89b0b9f7b742) {
                                if (!empty($ae51a59cd6263a6ace2b89b0b9f7b742["channel_id"])) {
                                    if (file_exists(TMP_DIR . "epg_info_{$ae51a59cd6263a6ace2b89b0b9f7b742["id"]}_stalker")) {
                                        $da694ade493bd6007415e69b0c53e836 = json_decode(file_get_contents(TMP_DIR . "epg_info_{$ae51a59cd6263a6ace2b89b0b9f7b742["id"]}_stalker"), true);
                                        goto e1a4333641be70186363a7e0feccfc8e;
                                    }
                                    App::$ipTV_db->query("SELECT * FROM `epg_data` WHERE `start` >= '%s' AND `end` <= '%s' AND `channel_id` = '%s' ORDER BY `start` ASC LIMIT 10", date("Y-m-d H:i:00"), date("Y-m-d H:i:00", strtotime("+{$d658c95128bbd2d94afb5e17b1932070} hours")), $ae51a59cd6263a6ace2b89b0b9f7b742["channel_id"]);
                                    $da694ade493bd6007415e69b0c53e836 = App::$ipTV_db->F72278fcECD1536556c4CCE92E91446F();
                                    file_put_contents(TMP_DIR . "epg_info_{$ae51a59cd6263a6ace2b89b0b9f7b742["id"]}_stalker", json_encode($da694ade493bd6007415e69b0c53e836));
                                    e1a4333641be70186363a7e0feccfc8e:
                                    if (empty($da694ade493bd6007415e69b0c53e836)) {
                                        goto C178ff8340b3f47588f309b98e4a02a0;
                                    }
                                    $B786dea0d5099bced1aca079470b539f = 0;
                                    cb360686da59c83ed79b94d12cf53667:
                                    if (!($B786dea0d5099bced1aca079470b539f < count($da694ade493bd6007415e69b0c53e836))) {
                                        C178ff8340b3f47588f309b98e4a02a0:
                                        goto ba2ccfa2eaa5b83c23f80eecac142de9;
                                    }
                                    $da694ade493bd6007415e69b0c53e836[$B786dea0d5099bced1aca079470b539f]["start_timestamp"] = strtotime($da694ade493bd6007415e69b0c53e836[$B786dea0d5099bced1aca079470b539f]["start"]);
                                    $da694ade493bd6007415e69b0c53e836[$B786dea0d5099bced1aca079470b539f]["stop_timestamp"] = strtotime($da694ade493bd6007415e69b0c53e836[$B786dea0d5099bced1aca079470b539f]["end"]);
                                    $fb6ada3db36317805fe41ffa0b838950 = new DateTime($da694ade493bd6007415e69b0c53e836[$B786dea0d5099bced1aca079470b539f]["start"]);
                                    $fb6ada3db36317805fe41ffa0b838950->modify("{$E47661722dd0a4bb511ed48db7ece503} seconds");
                                    $Bb1bf8dabba51a6510736c4cd7d75586 = new DateTime($da694ade493bd6007415e69b0c53e836[$B786dea0d5099bced1aca079470b539f]["end"]);
                                    $Bb1bf8dabba51a6510736c4cd7d75586->modify("{$E47661722dd0a4bb511ed48db7ece503} seconds");
                                    $b2978c77e40a7a7291016c1b4b90badf["js"]["data"][$ae51a59cd6263a6ace2b89b0b9f7b742["id"]][$B786dea0d5099bced1aca079470b539f]["id"] = $da694ade493bd6007415e69b0c53e836[$B786dea0d5099bced1aca079470b539f]["id"];
                                    $b2978c77e40a7a7291016c1b4b90badf["js"]["data"][$ae51a59cd6263a6ace2b89b0b9f7b742["id"]][$B786dea0d5099bced1aca079470b539f]["ch_id"] = $ae51a59cd6263a6ace2b89b0b9f7b742["id"];
                                    $b2978c77e40a7a7291016c1b4b90badf["js"]["data"][$ae51a59cd6263a6ace2b89b0b9f7b742["id"]][$B786dea0d5099bced1aca079470b539f]["time"] = $fb6ada3db36317805fe41ffa0b838950->format("Y-m-d H:i:s");
                                    $b2978c77e40a7a7291016c1b4b90badf["js"]["data"][$ae51a59cd6263a6ace2b89b0b9f7b742["id"]][$B786dea0d5099bced1aca079470b539f]["time_to"] = $Bb1bf8dabba51a6510736c4cd7d75586->format("Y-m-d H:i:s");
                                    $b2978c77e40a7a7291016c1b4b90badf["js"]["data"][$ae51a59cd6263a6ace2b89b0b9f7b742["id"]][$B786dea0d5099bced1aca079470b539f]["duration"] = $da694ade493bd6007415e69b0c53e836[$B786dea0d5099bced1aca079470b539f]["start_timestamp"] - $da694ade493bd6007415e69b0c53e836[$B786dea0d5099bced1aca079470b539f]["stop_timestamp"];
                                    $b2978c77e40a7a7291016c1b4b90badf["js"]["data"][$ae51a59cd6263a6ace2b89b0b9f7b742["id"]][$B786dea0d5099bced1aca079470b539f]["name"] = base64_decode($da694ade493bd6007415e69b0c53e836[$B786dea0d5099bced1aca079470b539f]["title"]);
                                    $b2978c77e40a7a7291016c1b4b90badf["js"]["data"][$ae51a59cd6263a6ace2b89b0b9f7b742["id"]][$B786dea0d5099bced1aca079470b539f]["descr"] = base64_decode($da694ade493bd6007415e69b0c53e836[$B786dea0d5099bced1aca079470b539f]["description"]);
                                    $b2978c77e40a7a7291016c1b4b90badf["js"]["data"][$ae51a59cd6263a6ace2b89b0b9f7b742["id"]][$B786dea0d5099bced1aca079470b539f]["real_id"] = $ae51a59cd6263a6ace2b89b0b9f7b742["id"] . "_" . $da694ade493bd6007415e69b0c53e836[$B786dea0d5099bced1aca079470b539f]["start_timestamp"];
                                    $b2978c77e40a7a7291016c1b4b90badf["js"]["data"][$ae51a59cd6263a6ace2b89b0b9f7b742["id"]][$B786dea0d5099bced1aca079470b539f]["category"] = '';
                                    $b2978c77e40a7a7291016c1b4b90badf["js"]["data"][$ae51a59cd6263a6ace2b89b0b9f7b742["id"]][$B786dea0d5099bced1aca079470b539f]["director"] = '';
                                    $b2978c77e40a7a7291016c1b4b90badf["js"]["data"][$ae51a59cd6263a6ace2b89b0b9f7b742["id"]][$B786dea0d5099bced1aca079470b539f]["actor"] = '';
                                    $b2978c77e40a7a7291016c1b4b90badf["js"]["data"][$ae51a59cd6263a6ace2b89b0b9f7b742["id"]][$B786dea0d5099bced1aca079470b539f]["start_timestamp"] = $fb6ada3db36317805fe41ffa0b838950->getTimestamp();
                                    $b2978c77e40a7a7291016c1b4b90badf["js"]["data"][$ae51a59cd6263a6ace2b89b0b9f7b742["id"]][$B786dea0d5099bced1aca079470b539f]["stop_timestamp"] = $Bb1bf8dabba51a6510736c4cd7d75586->getTimestamp();
                                    $b2978c77e40a7a7291016c1b4b90badf["js"]["data"][$ae51a59cd6263a6ace2b89b0b9f7b742["id"]][$B786dea0d5099bced1aca079470b539f]["t_time"] = $fb6ada3db36317805fe41ffa0b838950->format("H:i");
                                    $b2978c77e40a7a7291016c1b4b90badf["js"]["data"][$ae51a59cd6263a6ace2b89b0b9f7b742["id"]][$B786dea0d5099bced1aca079470b539f]["t_time_to"] = $Bb1bf8dabba51a6510736c4cd7d75586->format("H:i");
                                    $b2978c77e40a7a7291016c1b4b90badf["js"]["data"][$ae51a59cd6263a6ace2b89b0b9f7b742["id"]][$B786dea0d5099bced1aca079470b539f]["display_duration"] = $da694ade493bd6007415e69b0c53e836[$B786dea0d5099bced1aca079470b539f]["start_timestamp"] - $da694ade493bd6007415e69b0c53e836[$B786dea0d5099bced1aca079470b539f]["stop_timestamp"];
                                    $b2978c77e40a7a7291016c1b4b90badf["js"]["data"][$ae51a59cd6263a6ace2b89b0b9f7b742["id"]][$B786dea0d5099bced1aca079470b539f]["larr"] = 0;
                                    $b2978c77e40a7a7291016c1b4b90badf["js"]["data"][$ae51a59cd6263a6ace2b89b0b9f7b742["id"]][$B786dea0d5099bced1aca079470b539f]["rarr"] = 0;
                                    $b2978c77e40a7a7291016c1b4b90badf["js"]["data"][$ae51a59cd6263a6ace2b89b0b9f7b742["id"]][$B786dea0d5099bced1aca079470b539f]["mark_rec"] = 0;
                                    $b2978c77e40a7a7291016c1b4b90badf["js"]["data"][$ae51a59cd6263a6ace2b89b0b9f7b742["id"]][$B786dea0d5099bced1aca079470b539f]["mark_memo"] = 0;
                                    $b2978c77e40a7a7291016c1b4b90badf["js"]["data"][$ae51a59cd6263a6ace2b89b0b9f7b742["id"]][$B786dea0d5099bced1aca079470b539f]["mark_archive"] = 0;
                                    $b2978c77e40a7a7291016c1b4b90badf["js"]["data"][$ae51a59cd6263a6ace2b89b0b9f7b742["id"]][$B786dea0d5099bced1aca079470b539f]["on_date"] = $fb6ada3db36317805fe41ffa0b838950->format("l d.m.Y");
                                    $B786dea0d5099bced1aca079470b539f++;
                                    goto cb360686da59c83ed79b94d12cf53667;
                                }
                                ba2ccfa2eaa5b83c23f80eecac142de9:
                            }
                            exit(json_encode($b2978c77e40a7a7291016c1b4b90badf, JSON_PARTIAL_OUTPUT_ON_ERROR));
                        case "set_fav_status":
                            exit(json_encode(array("js" => array())));
                        case "get_short_epg":
                            if (empty(App::$request["ch_id"])) {
                                goto C6037ddb181b066e9c7a195f6d841437;
                            }
                            $dae53a981b9f73e4eb3ad9145b3a0ab6 = App::$request["ch_id"];
                            $b2978c77e40a7a7291016c1b4b90badf = array("js" => array());
                            if (file_exists(TMP_DIR . "epg_{$dae53a981b9f73e4eb3ad9145b3a0ab6}_stalker")) {
                                $B7114ac593a671c18290262f003c12fe = json_decode(file_get_contents(TMP_DIR . "epg_{$dae53a981b9f73e4eb3ad9145b3a0ab6}_stalker"), true);
                                goto Fb1c52b96c47bd530f2be6d6ebd6b222;
                            }
                            $B7114ac593a671c18290262f003c12fe = array();
                            App::$ipTV_db->query("SELECT `channel_id`,`epg_id` FROM `streams` WHERE `id` = '%d' AND epg_id IS NOT NULL", $dae53a981b9f73e4eb3ad9145b3a0ab6);
                            if (!(App::$ipTV_db->num_rows() > 0)) {
                                goto cafdb77479bdc8416c637eb693d15d2c;
                            }
                            $B381e84814b5cab4cb573e58dd591e96 = App::$ipTV_db->c7AA024A27Cf4472E107a8152E52c9b6();
                            App::$ipTV_db->f6ddaC891Da1536D20Cb29753dD5fe15("SELECT * FROM `epg_data` WHERE `epg_id` = '{$B381e84814b5cab4cb573e58dd591e96["epg_id"]}' AND `channel_id` = '" . App::$ipTV_db->escape($B381e84814b5cab4cb573e58dd591e96["channel_id"]) . "' AND ('" . date("Y-m-d H:i:00") . "' BETWEEN `start` AND `end` OR `start` >= '" . date("Y-m-d H:i:00") . "') ORDER BY `start` LIMIT 4");
                            if (!(App::$ipTV_db->num_rows() > 0)) {
                                goto a57af9b80940703011536876c6cf41d1;
                            }
                            $B7114ac593a671c18290262f003c12fe = App::$ipTV_db->f72278FCeCd1536556c4cce92E91446f();
                            a57af9b80940703011536876c6cf41d1:
                            cafdb77479bdc8416c637eb693d15d2c:
                            file_put_contents(TMP_DIR . "epg_{$dae53a981b9f73e4eb3ad9145b3a0ab6}_stalker", json_encode($B7114ac593a671c18290262f003c12fe));
                            Fb1c52b96c47bd530f2be6d6ebd6b222:
                            if (empty($B7114ac593a671c18290262f003c12fe)) {
                                goto B91a6cca897e415ff350d3325212741f;
                            }
                            $E47661722dd0a4bb511ed48db7ece503 = App::B026322780Cd85A24ea2AcdEb00311F8($dded9c4b3ef279e7c0b5a0d9168aa0e5);
                            $B786dea0d5099bced1aca079470b539f = 0;
                            E20e1f11ad7504d727ffdd96f94647d2:
                            if (!($B786dea0d5099bced1aca079470b539f < count($B7114ac593a671c18290262f003c12fe))) {
                                B91a6cca897e415ff350d3325212741f:
                                C6037ddb181b066e9c7a195f6d841437:
                                exit(json_encode($b2978c77e40a7a7291016c1b4b90badf, JSON_PARTIAL_OUTPUT_ON_ERROR));
                            }
                            $B7114ac593a671c18290262f003c12fe[$B786dea0d5099bced1aca079470b539f]["start_timestamp"] = strtotime($B7114ac593a671c18290262f003c12fe[$B786dea0d5099bced1aca079470b539f]["start"]);
                            $B7114ac593a671c18290262f003c12fe[$B786dea0d5099bced1aca079470b539f]["stop_timestamp"] = strtotime($B7114ac593a671c18290262f003c12fe[$B786dea0d5099bced1aca079470b539f]["end"]);
                            $fb6ada3db36317805fe41ffa0b838950 = new DateTime($B7114ac593a671c18290262f003c12fe[$B786dea0d5099bced1aca079470b539f]["start"]);
                            $fb6ada3db36317805fe41ffa0b838950->modify("{$E47661722dd0a4bb511ed48db7ece503} seconds");
                            $Bb1bf8dabba51a6510736c4cd7d75586 = new DateTime($B7114ac593a671c18290262f003c12fe[$B786dea0d5099bced1aca079470b539f]["end"]);
                            $Bb1bf8dabba51a6510736c4cd7d75586->modify("{$E47661722dd0a4bb511ed48db7ece503} seconds");
                            $b2978c77e40a7a7291016c1b4b90badf["js"][$B786dea0d5099bced1aca079470b539f]["id"] = $B7114ac593a671c18290262f003c12fe[$B786dea0d5099bced1aca079470b539f]["id"];
                            $b2978c77e40a7a7291016c1b4b90badf["js"][$B786dea0d5099bced1aca079470b539f]["ch_id"] = $dae53a981b9f73e4eb3ad9145b3a0ab6;
                            $b2978c77e40a7a7291016c1b4b90badf["js"][$B786dea0d5099bced1aca079470b539f]["correct"] = $fb6ada3db36317805fe41ffa0b838950->format("Y-m-d H:i:s");
                            $b2978c77e40a7a7291016c1b4b90badf["js"][$B786dea0d5099bced1aca079470b539f]["time"] = $fb6ada3db36317805fe41ffa0b838950->format("Y-m-d H:i:s");
                            $b2978c77e40a7a7291016c1b4b90badf["js"][$B786dea0d5099bced1aca079470b539f]["time_to"] = $Bb1bf8dabba51a6510736c4cd7d75586->format("Y-m-d H:i:s");
                            $b2978c77e40a7a7291016c1b4b90badf["js"][$B786dea0d5099bced1aca079470b539f]["duration"] = $B7114ac593a671c18290262f003c12fe[$B786dea0d5099bced1aca079470b539f]["stop_timestamp"] - $B7114ac593a671c18290262f003c12fe[$B786dea0d5099bced1aca079470b539f]["start_timestamp"];
                            $b2978c77e40a7a7291016c1b4b90badf["js"][$B786dea0d5099bced1aca079470b539f]["name"] = base64_decode($B7114ac593a671c18290262f003c12fe[$B786dea0d5099bced1aca079470b539f]["title"]);
                            $b2978c77e40a7a7291016c1b4b90badf["js"][$B786dea0d5099bced1aca079470b539f]["descr"] = base64_decode($B7114ac593a671c18290262f003c12fe[$B786dea0d5099bced1aca079470b539f]["description"]);
                            $b2978c77e40a7a7291016c1b4b90badf["js"][$B786dea0d5099bced1aca079470b539f]["real_id"] = $dae53a981b9f73e4eb3ad9145b3a0ab6 . "_" . $B7114ac593a671c18290262f003c12fe[$B786dea0d5099bced1aca079470b539f]["start_timestamp"];
                            $b2978c77e40a7a7291016c1b4b90badf["js"][$B786dea0d5099bced1aca079470b539f]["category"] = '';
                            $b2978c77e40a7a7291016c1b4b90badf["js"][$B786dea0d5099bced1aca079470b539f]["director"] = '';
                            $b2978c77e40a7a7291016c1b4b90badf["js"][$B786dea0d5099bced1aca079470b539f]["actor"] = '';
                            $b2978c77e40a7a7291016c1b4b90badf["js"][$B786dea0d5099bced1aca079470b539f]["start_timestamp"] = $fb6ada3db36317805fe41ffa0b838950->getTimestamp();
                            $b2978c77e40a7a7291016c1b4b90badf["js"][$B786dea0d5099bced1aca079470b539f]["stop_timestamp"] = $Bb1bf8dabba51a6510736c4cd7d75586->getTimestamp();
                            $b2978c77e40a7a7291016c1b4b90badf["js"][$B786dea0d5099bced1aca079470b539f]["t_time"] = $fb6ada3db36317805fe41ffa0b838950->format("H:i");
                            $b2978c77e40a7a7291016c1b4b90badf["js"][$B786dea0d5099bced1aca079470b539f]["t_time_to"] = $Bb1bf8dabba51a6510736c4cd7d75586->format("H:i");
                            $b2978c77e40a7a7291016c1b4b90badf["js"][$B786dea0d5099bced1aca079470b539f]["mark_memo"] = 0;
                            $b2978c77e40a7a7291016c1b4b90badf["js"][$B786dea0d5099bced1aca079470b539f]["mark_archive"] = 0;
                            $B786dea0d5099bced1aca079470b539f++;
                            goto E20e1f11ad7504d727ffdd96f94647d2;
                        case "set_played":
                            exit(json_encode(array("js" => true)));
                        case "set_last_id":
                            $dae53a981b9f73e4eb3ad9145b3a0ab6 = intval(App::$request["id"]);
                            if (!($dae53a981b9f73e4eb3ad9145b3a0ab6 > 0)) {
                                goto e11b2c910f92dc4479feceb34428ad9b;
                            }
                            App::$ipTV_db->query("UPDATE `mag_devices` SET `last_itv_id` = '%d' WHERE `mag_id` = '%d'", $dae53a981b9f73e4eb3ad9145b3a0ab6, $Ec8602a5273865d9f596011654c13420->UserInfo["mag_id"]);
                            $Ec8602a5273865d9f596011654c13420->UserInfo["last_itv_id"] = $dae53a981b9f73e4eb3ad9145b3a0ab6;
                            $Ec8602a5273865d9f596011654c13420->a01858985b955eCB1347732eD13C5f5f();
                            e11b2c910f92dc4479feceb34428ad9b:
                            exit(json_encode(array("js" => true)));
                        case "get_genres":
                            $output = array();
                            $c7b21f09da862b77661ad98362a592ba = 1;
                            $d608980ae96da7fac0843882cae286dc = aa929A0c1981b835AB1A91ED15EBC7B5("live");
                            if (!(App::$settings["show_all_category_mag"] == 1)) {
                                goto bcf934636c4f6cfef3bd2e4ecd55fbfd;
                            }
                            $output["js"][] = array("id" => "*", "title" => "All", "alias" => "All", "active_sub" => true, "censored" => 0);
                            bcf934636c4f6cfef3bd2e4ecd55fbfd:
                            foreach ($d608980ae96da7fac0843882cae286dc as $dbae6fe3fd17f9d0ec41270a9383d0c4 => $c0a868c6df6eb16618329669f2f296d6) {
                                if (B9dec8Ae86D5D7f9ff1dEd8feB3129C2($dbae6fe3fd17f9d0ec41270a9383d0c4, $Ec8602a5273865d9f596011654c13420->UserInfo["bouquet"])) {
                                    $output["js"][] = array("id" => $c0a868c6df6eb16618329669f2f296d6["id"], "title" => $c0a868c6df6eb16618329669f2f296d6["category_name"], "modified" => '', "number" => $c7b21f09da862b77661ad98362a592ba++, "alias" => mb_strtolower($c0a868c6df6eb16618329669f2f296d6["category_name"]), "censored" => stristr($c0a868c6df6eb16618329669f2f296d6["category_name"], "adults") ? 1 : 0);
                                    goto Cc4d5b3708c836d1c1a8ddeba415143b;
                                }
                                Cc4d5b3708c836d1c1a8ddeba415143b:
                            }
                            exit(json_encode($output, JSON_PARTIAL_OUTPUT_ON_ERROR));
                    }
                    B9e1e55ae2a2f6b2f0b196ca8524f36f:
                    goto Eb367e5ecb7206ab12c234a74053acde;
                case "remote_pvr":
                    switch ($Dae539630859afa2d11ec03a3660bc0a) {
                        case "start_record_on_stb":
                            exit(json_encode(array("js" => true)));
                        case "stop_record_on_stb":
                            exit(json_encode(array("js" => true)));
                        case "get_active_recordings":
                            exit(json_encode(array("js" => array())));
                    }
                    goto Eb367e5ecb7206ab12c234a74053acde;
                case "media_favorites":
                    switch ($Dae539630859afa2d11ec03a3660bc0a) {
                        case "get_all":
                            exit(json_encode(array("js" => '')));
                    }
                    goto Eb367e5ecb7206ab12c234a74053acde;
                case "tvreminder":
                    switch ($Dae539630859afa2d11ec03a3660bc0a) {
                        case "get_all_active":
                            exit(json_encode(array("js" => array())));
                    }
                    goto Eb367e5ecb7206ab12c234a74053acde;
                case "vod":
                    switch ($Dae539630859afa2d11ec03a3660bc0a) {
                        case "set_claim":
                            if (!(!empty(App::$request["id"]) && !empty(App::$request["real_type"]))) {
                                goto d7efde5f5d6400ce6e209ca7aee011d7;
                            }
                            $d0bb7be46c16439c99dfeaf837b13db6 = intval(App::$request["id"]);
                            $bb0bfc2e62ff0d90f6c46deb90a083b6 = App::$request["real_type"];
                            $Cf6869ffea9a0c2075293e7c3c330d4d = date("Y-m-d H:i:s");
                            App::$ipTV_db->query("INSERT INTO `mag_claims` (`stream_id`,`mag_id`,`real_type`,`date`) VALUES('%d','%d','%s','%s')", $d0bb7be46c16439c99dfeaf837b13db6, $Ec8602a5273865d9f596011654c13420->UserInfo["mag_id"], $bb0bfc2e62ff0d90f6c46deb90a083b6, $Cf6869ffea9a0c2075293e7c3c330d4d);
                            d7efde5f5d6400ce6e209ca7aee011d7:
                            echo json_encode(array("js" => true));
                            exit;
                        case "set_not_ended":
                            exit(json_encode(array("js" => true)));
                        case "del_link":
                            exit(json_encode(array("js" => true)));
                        case "set_fav":
                            if (empty(App::$request["video_id"])) {
                                goto B5cbe1594626f98dfe09e76b5fc69539;
                            }
                            $cb8c889e3663bb728442d668a20a11cf = intval(App::$request["video_id"]);
                            if (in_array($cb8c889e3663bb728442d668a20a11cf, $Ec8602a5273865d9f596011654c13420->UserInfo["fav_channels"]["movie"])) {
                                goto Af83ab82c9a3bf35f0f7ed4db28afa9f;
                            }
                            $Ec8602a5273865d9f596011654c13420->UserInfo["fav_channels"]["movie"][] = $cb8c889e3663bb728442d668a20a11cf;
                            Af83ab82c9a3bf35f0f7ed4db28afa9f:
                            $Ec8602a5273865d9f596011654c13420->a01858985b955eCb1347732eD13C5f5f();
                            App::$ipTV_db->query("UPDATE `mag_devices` SET `fav_channels` = '%s' WHERE `mag_id` = '%d'", json_encode($Ec8602a5273865d9f596011654c13420->UserInfo["fav_channels"]), $Ec8602a5273865d9f596011654c13420->UserInfo["mag_id"]);
                            B5cbe1594626f98dfe09e76b5fc69539:
                            exit(json_encode(array("js" => true)));
                        case "del_fav":
                            if (empty(App::$request["video_id"])) {
                                exit(json_encode(array("js" => true)));
                            }
                            $cb8c889e3663bb728442d668a20a11cf = intval(App::$request["video_id"]);
                            foreach ($Ec8602a5273865d9f596011654c13420->UserInfo["fav_channels"]["movie"] as $d2e771d1b2111bd6bb33eaed79849fe2 => $d307b13a9edbcffd54b2e811cf7b7682) {
                                if (!($d307b13a9edbcffd54b2e811cf7b7682 == $cb8c889e3663bb728442d668a20a11cf)) {
                                }
                                unset($Ec8602a5273865d9f596011654c13420->UserInfo["fav_channels"]["movie"][$d2e771d1b2111bd6bb33eaed79849fe2]);
                                goto A4b649c6d535155494abbbab8d03020c;
                            }
                            A4b649c6d535155494abbbab8d03020c:
                            $Ec8602a5273865d9f596011654c13420->a01858985b955eCB1347732ED13c5F5F();
                            App::$ipTV_db->query("UPDATE `mag_devices` SET `fav_channels` = '%s' WHERE `mag_id` = '%d'", json_encode($Ec8602a5273865d9f596011654c13420->UserInfo["fav_channels"]), $Ec8602a5273865d9f596011654c13420->UserInfo["mag_id"]);
                            goto f1f9a864b2735a39fb3360fa6dc03ae0;
                        case "get_categories":
                            $output = array();
                            $output["js"] = array();
                            $Fceeb189626a9b3bb9ff747551d7f4eb = aA929A0c1981b835AB1a91eD15Ebc7B5("movie");
                            if (!(App::$settings["show_all_category_mag"] == 1)) {
                                goto f981ae65767213d91dae54c16edfaf0c;
                            }
                            $output["js"][] = array("id" => "*", "title" => "All", "alias" => "*", "censored" => 0);
                            f981ae65767213d91dae54c16edfaf0c:
                            foreach ($Fceeb189626a9b3bb9ff747551d7f4eb as $B726f6951aa8bb6186a89aa6556a5fda => $a9a8ee79ae35dd38ca815d60faeacdf3) {
                                if (b9dec8ae86d5D7F9FF1deD8fEB3129C2($B726f6951aa8bb6186a89aa6556a5fda, $Ec8602a5273865d9f596011654c13420->UserInfo["bouquet"])) {
                                    $output["js"][] = array("id" => $a9a8ee79ae35dd38ca815d60faeacdf3["id"], "title" => $a9a8ee79ae35dd38ca815d60faeacdf3["category_name"], "alias" => $a9a8ee79ae35dd38ca815d60faeacdf3["category_name"], "censored" => stristr($a9a8ee79ae35dd38ca815d60faeacdf3["category_name"], "adults") ? 1 : 0);
                                    goto ef6865997c5af547697cf3dc8e9d823c;
                                }
                                ef6865997c5af547697cf3dc8e9d823c:
                            }
                            exit(json_encode($output));
                        case "get_genres_by_category_alias":
                            $output = array();
                            $output["js"][] = array("id" => "*", "title" => "*");
                            exit(json_encode($output, JSON_PARTIAL_OUTPUT_ON_ERROR));
                        case "get_years":
                            exit(json_encode($f62f0d6e08364e396ce3aa9a5e131d18["get_years"]));
                        case "get_ordered_list":
                            $E94723068ab78b57e41f07ad0e270b52 = !empty(App::$request["category"]) && is_numeric(App::$request["category"]) ? App::$request["category"] : null;
                            $c75c6e892526bf4353f3ad2e2c485a10 = !empty(App::$request["fav"]) ? 1 : null;
                            $Dcc7cc723f70038d27d929aa461ce83e = !empty(App::$request["sortby"]) ? App::$request["sortby"] : "added";
                            $F94dc52c3b8ec3234268ba121640d6c9 = !empty(App::$request["search"]) ? App::$request["search"] : null;
                            $C5c4abc2c8b530967c9b7979bb7a282e = array();
                            $C5c4abc2c8b530967c9b7979bb7a282e["abc"] = !empty(App::$request["abc"]) ? App::$request["abc"] : "*";
                            $C5c4abc2c8b530967c9b7979bb7a282e["genre"] = !empty(App::$request["genre"]) ? App::$request["genre"] : "*";
                            $C5c4abc2c8b530967c9b7979bb7a282e["years"] = !empty(App::$request["years"]) ? App::$request["years"] : "*";
                            exit(Ab8b6486e8794fFd74826Be9552353B6($E94723068ab78b57e41f07ad0e270b52, $c75c6e892526bf4353f3ad2e2c485a10, $Dcc7cc723f70038d27d929aa461ce83e, $F94dc52c3b8ec3234268ba121640d6c9, $C5c4abc2c8b530967c9b7979bb7a282e));
                        case "create_link":
                            $Dee60c56ca507ad041c60ec9e0982c62 = App::$request["cmd"];
                            $error = '';
                            if (!(stripos($Dee60c56ca507ad041c60ec9e0982c62, "/media/") === false)) {
                                goto b54c448aebc5d864e91a7f973658cf7d;
                            }
                            $Dee60c56ca507ad041c60ec9e0982c62 = json_decode(base64_decode($Dee60c56ca507ad041c60ec9e0982c62), true);
                            b54c448aebc5d864e91a7f973658cf7d:
                            $cfc2cc083b0e79a53fa2e526ee5372fc = B5688Da14831EA0989755fDE158e739a();
                            if (!empty($Dee60c56ca507ad041c60ec9e0982c62["stream_source"])) {
                                $d466a2ae0e067ebfee7c7e9868c52af8 = $ace34b9ef659fb27b40bbe3317490508 . json_decode($Dee60c56ca507ad041c60ec9e0982c62["stream_source"], true)[0];
                                goto a7cebdaf7bbefeb34865327dffbd1183;
                            }
                            $E507412caaa3b9fe1f53cf1f87be32dc = !empty(App::$request["series"]) ? (int) App::$request["series"] : 0;
                            if (!($E507412caaa3b9fe1f53cf1f87be32dc > 0)) {
                                goto a0c15486c1ccceceaa375bd461039985;
                            }
                            if (!(empty($Dee60c56ca507ad041c60ec9e0982c62["series_id"]) && empty($Dee60c56ca507ad041c60ec9e0982c62["season_num"]))) {
                                goto C8884b749bdc42439a20cf049a678f77;
                            }
                            $ea50c6f60bdf618b683e6799a5848165 = $Dee60c56ca507ad041c60ec9e0982c62;
                            $Dee60c56ca507ad041c60ec9e0982c62 = array();
                            $Dee60c56ca507ad041c60ec9e0982c62["type"] = "series";
                            list($Dee60c56ca507ad041c60ec9e0982c62["series_id"], $Dee60c56ca507ad041c60ec9e0982c62["season_num"]) = explode(":", basename($ea50c6f60bdf618b683e6799a5848165, ".mpg"));
                            C8884b749bdc42439a20cf049a678f77:
                            App::$ipTV_db->query("SELECT t1.stream_id,if(t2.direct_source = 1 AND t2.redirect_stream = 0,t2.stream_source,NULL) as stream_source,t2.target_container FROM `series_episodes` t1 INNER JOIN `streams` t2 ON t2.id = t1.stream_id WHERE t1.`sort` = '%d' AND t1.`series_id` = '%d' AND t1.`season_num` = '%d' LIMIT 1", $E507412caaa3b9fe1f53cf1f87be32dc, $Dee60c56ca507ad041c60ec9e0982c62["series_id"], $Dee60c56ca507ad041c60ec9e0982c62["season_num"]);
                            $cf0a25072f4b9a32281a937290123528 = App::$ipTV_db->C7AA024a27cf4472e107A8152e52C9B6();
                            $Dee60c56ca507ad041c60ec9e0982c62["stream_id"] = $cf0a25072f4b9a32281a937290123528["stream_id"];
                            $Dee60c56ca507ad041c60ec9e0982c62["target_container"] = $cf0a25072f4b9a32281a937290123528["target_container"];
                            a0c15486c1ccceceaa375bd461039985:
                            $d466a2ae0e067ebfee7c7e9868c52af8 = $ace34b9ef659fb27b40bbe3317490508 . App::$StreamingServers[SERVER_ID]["site_url"] . "{$Dee60c56ca507ad041c60ec9e0982c62["type"]}/{$Ec8602a5273865d9f596011654c13420->UserInfo["username"]}/{$Ec8602a5273865d9f596011654c13420->UserInfo["password"]}/{$Dee60c56ca507ad041c60ec9e0982c62["stream_id"]}." . Cba6e5673181a2912F52082e5c087625($Dee60c56ca507ad041c60ec9e0982c62["target_container"], true) . "?play_token=" . $cfc2cc083b0e79a53fa2e526ee5372fc;
                            a7cebdaf7bbefeb34865327dffbd1183:
                            App::$ipTV_db->query("UPDATE `users` SET `play_token` = '%s' WHERE `id` = '%d'", $cfc2cc083b0e79a53fa2e526ee5372fc . ":" . strtotime("+5 hours") . ":" . $Dee60c56ca507ad041c60ec9e0982c62["stream_id"], $Ec8602a5273865d9f596011654c13420->UserInfo["user_id"]);
                            $output = array("js" => array("id" => $Dee60c56ca507ad041c60ec9e0982c62["stream_id"], "cmd" => $d466a2ae0e067ebfee7c7e9868c52af8, "load" => '', "subtitles" => array(), "error" => $error));
                            exit(json_encode($output));
                        case "log":
                            exit(json_encode(array("js" => true)));
                        case "get_abc":
                            exit(json_encode($f62f0d6e08364e396ce3aa9a5e131d18["get_abc"]));
                    }
                    f1f9a864b2735a39fb3360fa6dc03ae0:
                    goto Eb367e5ecb7206ab12c234a74053acde;
                case "series":
                    switch ($Dae539630859afa2d11ec03a3660bc0a) {
                        case "set_claim":
                            if (!(!empty(App::$request["id"]) && !empty(App::$request["real_type"]))) {
                                goto afa7edab95506968f4232b4b8ccd4ab5;
                            }
                            $d0bb7be46c16439c99dfeaf837b13db6 = intval(App::$request["id"]);
                            $bb0bfc2e62ff0d90f6c46deb90a083b6 = App::$request["real_type"];
                            $Cf6869ffea9a0c2075293e7c3c330d4d = date("Y-m-d H:i:s");
                            App::$ipTV_db->query("INSERT INTO `mag_claims` (`stream_id`,`mag_id`,`real_type`,`date`) VALUES('%d','%d','%s','%s')", $d0bb7be46c16439c99dfeaf837b13db6, $Ec8602a5273865d9f596011654c13420->UserInfo["mag_id"], $bb0bfc2e62ff0d90f6c46deb90a083b6, $Cf6869ffea9a0c2075293e7c3c330d4d);
                            afa7edab95506968f4232b4b8ccd4ab5:
                            echo json_encode(array("js" => true));
                            exit;
                        case "set_not_ended":
                            exit(json_encode(array("js" => true)));
                        case "del_link":
                            exit(json_encode(array("js" => true)));
                        case "set_fav":
                            if (empty(App::$request["video_id"])) {
                                goto dc1bc9d8844bf31a10614388903988a0;
                            }
                            $cb8c889e3663bb728442d668a20a11cf = intval(App::$request["video_id"]);
                            if (in_array($cb8c889e3663bb728442d668a20a11cf, $Ec8602a5273865d9f596011654c13420->UserInfo["fav_channels"]["series"])) {
                                goto C6c5974b6fd82a3edb9c0b9b92725d1b;
                            }
                            $Ec8602a5273865d9f596011654c13420->UserInfo["fav_channels"]["series"][] = $cb8c889e3663bb728442d668a20a11cf;
                            C6c5974b6fd82a3edb9c0b9b92725d1b:
                            $Ec8602a5273865d9f596011654c13420->A01858985B955eCB1347732Ed13C5f5F();
                            App::$ipTV_db->query("UPDATE `mag_devices` SET `fav_channels` = '%s' WHERE `mag_id` = '%d'", json_encode($Ec8602a5273865d9f596011654c13420->UserInfo["fav_channels"]), $Ec8602a5273865d9f596011654c13420->UserInfo["mag_id"]);
                            dc1bc9d8844bf31a10614388903988a0:
                            exit(json_encode(array("js" => true)));
                        case "del_fav":
                            if (empty(App::$request["video_id"])) {
                                exit(json_encode(array("js" => true)));
                            }
                            $cb8c889e3663bb728442d668a20a11cf = intval(App::$request["video_id"]);
                            foreach ($Ec8602a5273865d9f596011654c13420->UserInfo["fav_channels"]["series"] as $d2e771d1b2111bd6bb33eaed79849fe2 => $d307b13a9edbcffd54b2e811cf7b7682) {
                                if (!($d307b13a9edbcffd54b2e811cf7b7682 == $cb8c889e3663bb728442d668a20a11cf)) {
                                }
                                unset($Ec8602a5273865d9f596011654c13420->UserInfo["fav_channels"]["series"][$d2e771d1b2111bd6bb33eaed79849fe2]);
                                goto Bb2f13f117a11bf406d63a772819e438;
                            }
                            Bb2f13f117a11bf406d63a772819e438:
                            $Ec8602a5273865d9f596011654c13420->a01858985B955eCb1347732ed13C5F5F();
                            App::$ipTV_db->query("UPDATE `mag_devices` SET `fav_channels` = '%s' WHERE `mag_id` = '%d'", json_encode($Ec8602a5273865d9f596011654c13420->UserInfo["fav_channels"]), $Ec8602a5273865d9f596011654c13420->UserInfo["mag_id"]);
                            goto Dea94f5bcd7b529d22c209ff73f51fce;
                        case "get_categories":
                            $output = array();
                            $output["js"] = array();
                            $Fceeb189626a9b3bb9ff747551d7f4eb = aa929A0C1981b835ab1A91eD15EbC7B5("series");
                            if (!(App::$settings["show_all_category_mag"] == 1)) {
                                goto D6012ef7a01389c015ef098f6a23694f;
                            }
                            $output["js"][] = array("id" => "*", "title" => "All", "alias" => "*", "censored" => 0);
                            D6012ef7a01389c015ef098f6a23694f:
                            foreach ($Fceeb189626a9b3bb9ff747551d7f4eb as $B726f6951aa8bb6186a89aa6556a5fda => $a9a8ee79ae35dd38ca815d60faeacdf3) {
                                $output["js"][] = array("id" => $a9a8ee79ae35dd38ca815d60faeacdf3["id"], "title" => $a9a8ee79ae35dd38ca815d60faeacdf3["category_name"], "alias" => $a9a8ee79ae35dd38ca815d60faeacdf3["category_name"], "censored" => stristr($a9a8ee79ae35dd38ca815d60faeacdf3["category_name"], "adults") ? 1 : 0);
                            }
                            exit(json_encode($output));
                        case "get_genres_by_category_alias":
                            $output = array();
                            $output["js"][] = array("id" => "*", "title" => "*");
                            exit(json_encode($output, JSON_PARTIAL_OUTPUT_ON_ERROR));
                        case "get_years":
                            exit(json_encode($f62f0d6e08364e396ce3aa9a5e131d18["get_years"]));
                        case "get_ordered_list":
                            $E94723068ab78b57e41f07ad0e270b52 = !empty(App::$request["category"]) && is_numeric(App::$request["category"]) ? App::$request["category"] : null;
                            $c75c6e892526bf4353f3ad2e2c485a10 = !empty(App::$request["fav"]) ? 1 : null;
                            $Dcc7cc723f70038d27d929aa461ce83e = !empty(App::$request["sortby"]) ? App::$request["sortby"] : "added";
                            $F94dc52c3b8ec3234268ba121640d6c9 = !empty(App::$request["search"]) ? App::$request["search"] : null;
                            $fb6de5cdfc6eeede97a325f77fb68bf6 = !empty(App::$request["movie_id"]) ? (int) App::$request["movie_id"] : null;
                            $c581bf36b7cdd769503edf9f44b7dfe7 = !empty(App::$request["season_id"]) ? (int) App::$request["season_id"] : 0;
                            $C5c4abc2c8b530967c9b7979bb7a282e = array();
                            $C5c4abc2c8b530967c9b7979bb7a282e["abc"] = !empty(App::$request["abc"]) ? App::$request["abc"] : "*";
                            $C5c4abc2c8b530967c9b7979bb7a282e["genre"] = !empty(App::$request["genre"]) ? App::$request["genre"] : "*";
                            $C5c4abc2c8b530967c9b7979bb7a282e["years"] = !empty(App::$request["years"]) ? App::$request["years"] : "*";
                            exit(b7DBcfe577ecd3d8C1cF05a92ECd36CC($fb6de5cdfc6eeede97a325f77fb68bf6, $E94723068ab78b57e41f07ad0e270b52, $c75c6e892526bf4353f3ad2e2c485a10, $Dcc7cc723f70038d27d929aa461ce83e, $F94dc52c3b8ec3234268ba121640d6c9, $C5c4abc2c8b530967c9b7979bb7a282e));
                        case "log":
                            exit(json_encode(array("js" => 1)));
                        case "get_abc":
                            exit(json_encode($f62f0d6e08364e396ce3aa9a5e131d18["get_abc"]));
                    }
                    Dea94f5bcd7b529d22c209ff73f51fce:
                    goto Eb367e5ecb7206ab12c234a74053acde;
                case "downloads":
                    switch ($Dae539630859afa2d11ec03a3660bc0a) {
                        case "save":
                            exit(json_encode(array("js" => true)));
                        case "get_all":
                            exit(json_encode(array("js" => "\"\"")));
                        case "get_all":
                            exit(json_encode(array("js" => true)));
                    }
                    goto Eb367e5ecb7206ab12c234a74053acde;
                case "weatherco":
                    switch ($Dae539630859afa2d11ec03a3660bc0a) {
                        case "get_current":
                            exit(json_encode(array("js" => false)));
                    }
                    goto Eb367e5ecb7206ab12c234a74053acde;
                case "course":
                    switch ($Dae539630859afa2d11ec03a3660bc0a) {
                        case "get_data":
                            exit(json_encode(array("js" => true)));
                    }
                    goto Eb367e5ecb7206ab12c234a74053acde;
                case "account_info":
                    switch ($Dae539630859afa2d11ec03a3660bc0a) {
                        case "get_terms_info":
                            exit(json_encode(array("js" => true)));
                        case "get_payment_info":
                            exit(json_encode(array("js" => true)));
                        case "get_main_info":
                            if (empty($Ec8602a5273865d9f596011654c13420->UserInfo["exp_date"])) {
                                $f4f8eead3b52838ca5fd6d5a45b6c095 = "Unlimited";
                                goto be424886ae177e872fe4973fd33765bb;
                            }
                            $f4f8eead3b52838ca5fd6d5a45b6c095 = date("F j, Y, g:i a", $Ec8602a5273865d9f596011654c13420->UserInfo["exp_date"]);
                            be424886ae177e872fe4973fd33765bb:
                            exit(json_encode(array("js" => array("mac" => $Ec8602a5273865d9f596011654c13420->mac, "phone" => $f4f8eead3b52838ca5fd6d5a45b6c095))));
                        case "get_demo_video_parts":
                            exit(json_encode(array("js" => true)));
                        case "get_agreement_info":
                            exit(json_encode(array("js" => true)));
                    }
                    B5b6a35d8d2ecc6585233b0a4f6e646e:
                    goto Eb367e5ecb7206ab12c234a74053acde;
                case "radio":
                    switch ($Dae539630859afa2d11ec03a3660bc0a) {
                        case "get_ordered_list":
                            $c75c6e892526bf4353f3ad2e2c485a10 = !empty(App::$request["fav"]) ? 1 : null;
                            $Dcc7cc723f70038d27d929aa461ce83e = !empty(App::$request["sortby"]) ? App::$request["sortby"] : "added";
                            exit(a940C1A6d1fF06fA0E91005627F31122(null, $c75c6e892526bf4353f3ad2e2c485a10, $Dcc7cc723f70038d27d929aa461ce83e));
                        case "get_all_fav_radio":
                            exit(A940C1A6D1FF06fA0e91005627f31122(null, 1, null));
                        case "set_fav":
                            $B6bee76093f7e2382633f310b39aa9ff = empty(App::$request["fav_radio"]) ? '' : App::$request["fav_radio"];
                            $B6bee76093f7e2382633f310b39aa9ff = array_filter(array_map("intval", explode(",", $B6bee76093f7e2382633f310b39aa9ff)));
                            $Ec8602a5273865d9f596011654c13420->UserInfo["fav_channels"]["radio_streams"] = $B6bee76093f7e2382633f310b39aa9ff;
                            $Ec8602a5273865d9f596011654c13420->A01858985B955ecB1347732ED13C5F5F();
                            App::$ipTV_db->query("UPDATE `mag_devices` SET `fav_channels` = '%s' WHERE `mag_id` = '%d'", json_encode($Ec8602a5273865d9f596011654c13420->UserInfo["fav_channels"]), $Ec8602a5273865d9f596011654c13420->UserInfo["mag_id"]);
                            exit(json_encode(array("js" => true)));
                        case "get_fav_ids":
                            exit(json_encode(array("js" => $Ec8602a5273865d9f596011654c13420->UserInfo["fav_channels"]["radio_streams"])));
                    }
                    D8fdf9840a8bca587c482b79ba0352cb:
                    goto Eb367e5ecb7206ab12c234a74053acde;
                case "tv_archive":
                    switch ($Dae539630859afa2d11ec03a3660bc0a) {
                        case "get_next_part_url":
                            if (empty(App::$request["id"])) {
                                goto Ceed6e84c4b19231e3a3bc819a9bf171;
                            }
                            $d0bb7be46c16439c99dfeaf837b13db6 = App::$request["id"];
                            $a9c5934acd47be1fce9633a3a7c3a291 = substr($d0bb7be46c16439c99dfeaf837b13db6, 0, strpos($d0bb7be46c16439c99dfeaf837b13db6, "_"));
                            $Cf6869ffea9a0c2075293e7c3c330d4d = substr($d0bb7be46c16439c99dfeaf837b13db6, strpos($d0bb7be46c16439c99dfeaf837b13db6, "_") + 1);
                            App::$ipTV_db->query("SELECT\r\n                                      t2.*\r\n                                    FROM\r\n                                      `streams` t1\r\n                                    INNER JOIN\r\n                                      `epg_data` t2\r\n                                    ON\r\n                                      t2.channel_id = t1.channel_id AND t2.epg_id = t1.epg_id\r\n                                    WHERE\r\n                                      t1.id = '%d'\r\n                                      AND t2.`start` > '%s' ORDER BY t2.start ASC limit 1;", $a9c5934acd47be1fce9633a3a7c3a291, $Cf6869ffea9a0c2075293e7c3c330d4d);
                            if (!(App::$ipTV_db->num_rows() > 0)) {
                                Ceed6e84c4b19231e3a3bc819a9bf171:
                                exit(json_encode(array("js" => false)));
                            }
                            $b2f9f5a782023ba63917f16c8fe0b279 = App::$ipTV_db->C7Aa024a27cf4472e107a8152e52c9B6();
                            $dfccb17036de875b5c4a5634bbcb18fe = date("Y-m-d:H-i", strtotime($b2f9f5a782023ba63917f16c8fe0b279["start"]));
                            $C16ecd7f3ea8319aa3b8a095dc824422 = intval((strtotime($b2f9f5a782023ba63917f16c8fe0b279["end"]) - strtotime($b2f9f5a782023ba63917f16c8fe0b279["start"])) / 60);
                            $d891210001f72c060cfc775b77925054 = base64_decode($b2f9f5a782023ba63917f16c8fe0b279["title"]);
                            $ff027bd0265576bde3edca05cdb6a185 = $ace34b9ef659fb27b40bbe3317490508 . App::$StreamingServers[SERVER_ID]["site_url"] . "timeshift/{$Ec8602a5273865d9f596011654c13420->UserInfo["username"]}/{$Ec8602a5273865d9f596011654c13420->UserInfo["password"]}/{$C16ecd7f3ea8319aa3b8a095dc824422}/{$dfccb17036de875b5c4a5634bbcb18fe}/{$a9c5934acd47be1fce9633a3a7c3a291}.ts?&osd_title={$d891210001f72c060cfc775b77925054}";
                            exit(json_encode(array("js" => $ff027bd0265576bde3edca05cdb6a185)));
                        case "create_link":
                            $Dee60c56ca507ad041c60ec9e0982c62 = empty(App::$request["cmd"]) ? '' : App::$request["cmd"];
                            list($db797cf80efbef91d35dc0b461d8eaa8, $a9c5934acd47be1fce9633a3a7c3a291) = explode("_", pathinfo($Dee60c56ca507ad041c60ec9e0982c62)["filename"]);
                            App::$ipTV_db->query("SELECT t2.tv_archive_server_id,t1.start,t1.end,t2.id as stream_id\r\n                                    FROM epg_data t1\r\n                                    INNER JOIN `streams` t2 ON t2.id = '%d'\r\n                                    WHERE t1.id = '%d' AND t2.tv_archive_server_id IS NOT NULL", $a9c5934acd47be1fce9633a3a7c3a291, $db797cf80efbef91d35dc0b461d8eaa8);
                            if (!(App::$ipTV_db->num_rows() > 0)) {
                                goto e1fb12236a297001df7e9afee1a6c825;
                            }
                            $b2f9f5a782023ba63917f16c8fe0b279 = App::$ipTV_db->C7Aa024a27CF4472E107a8152E52c9B6();
                            $dfccb17036de875b5c4a5634bbcb18fe = date("Y-m-d:H-i", strtotime($b2f9f5a782023ba63917f16c8fe0b279["start"]));
                            $C16ecd7f3ea8319aa3b8a095dc824422 = intval((strtotime($b2f9f5a782023ba63917f16c8fe0b279["end"]) - strtotime($b2f9f5a782023ba63917f16c8fe0b279["start"])) / 60);
                            $cfc2cc083b0e79a53fa2e526ee5372fc = b5688da14831EA0989755Fde158e739A();
                            App::$ipTV_db->query("UPDATE `users` SET `play_token` = '%s' WHERE `id` = '%d'", $cfc2cc083b0e79a53fa2e526ee5372fc . ":" . strtotime("+5 hours") . ":" . $a9c5934acd47be1fce9633a3a7c3a291, $Ec8602a5273865d9f596011654c13420->UserInfo["user_id"]);
                            $ff027bd0265576bde3edca05cdb6a185 = $ace34b9ef659fb27b40bbe3317490508 . App::$StreamingServers[SERVER_ID]["site_url"] . "timeshift/{$Ec8602a5273865d9f596011654c13420->UserInfo["username"]}/{$Ec8602a5273865d9f596011654c13420->UserInfo["password"]}/{$C16ecd7f3ea8319aa3b8a095dc824422}/{$dfccb17036de875b5c4a5634bbcb18fe}/{$b2f9f5a782023ba63917f16c8fe0b279["stream_id"]}.ts?play_token={$cfc2cc083b0e79a53fa2e526ee5372fc}";
                            $output["js"] = array("id" => 0, "cmd" => $ff027bd0265576bde3edca05cdb6a185, "storage_id" => '', "load" => 0, "error" => '', "download_cmd" => $ff027bd0265576bde3edca05cdb6a185, "to_file" => '');
                            exit(json_encode($output, JSON_PARTIAL_OUTPUT_ON_ERROR));
                        case "get_link_for_channel":
                            $output = array();
                            $dae53a981b9f73e4eb3ad9145b3a0ab6 = !empty(App::$request["ch_id"]) ? intval(App::$request["ch_id"]) : 0;
                            $start = date("Ymd-H");
                            $cfc2cc083b0e79a53fa2e526ee5372fc = B5688DA14831ea0989755Fde158e739A();
                            App::$ipTV_db->query("UPDATE `users` SET `play_token` = '%s' WHERE `id` = '%d'", $cfc2cc083b0e79a53fa2e526ee5372fc . ":" . strtotime("+5 hours") . ":" . $dae53a981b9f73e4eb3ad9145b3a0ab6, $Ec8602a5273865d9f596011654c13420->UserInfo["user_id"]);
                            $ff027bd0265576bde3edca05cdb6a185 = $ace34b9ef659fb27b40bbe3317490508 . App::$StreamingServers[SERVER_ID]["site_url"] . "timeshifts/{$Ec8602a5273865d9f596011654c13420->UserInfo["username"]}/{$Ec8602a5273865d9f596011654c13420->UserInfo["password"]}/60/{$dae53a981b9f73e4eb3ad9145b3a0ab6}/{$start}.ts?play_token={$cfc2cc083b0e79a53fa2e526ee5372fc} position:" . (intval(date("i")) * 60 + intval(date("s"))) . " media_len:" . (intval(date("H")) * 3600 + intval(date("i")) * 60 + intval(date("s")));
                            $output["js"] = array("id" => 0, "cmd" => $ff027bd0265576bde3edca05cdb6a185, "storage_id" => '', "load" => 0, "error" => '');
                            exit(json_encode($output, JSON_PARTIAL_OUTPUT_ON_ERROR));
                        case "set_played_timeshift":
                            exit(json_encode(array("js" => true)));
                        case "set_played":
                            exit(json_encode(array("js" => true)));
                        case "update_played_timeshift_end_time":
                            exit(json_encode(array("js" => true)));
                    }
                    e1fb12236a297001df7e9afee1a6c825:
                    goto Eb367e5ecb7206ab12c234a74053acde;
                case "epg":
                    switch ($Dae539630859afa2d11ec03a3660bc0a) {
                        case "get_week":
                            $be358dca3b5d06c13678019c0768afb9 = -16;
                            $B786dea0d5099bced1aca079470b539f = 0;
                            $bc55a73fce975b0b8b561a9ac9cf383c = array();
                            $E4a30c2409a5502b6f5900480aa7d72f = strtotime(date("Y-m-d"));
                            D8e011b9cef81b3dd216420aac5199a6:
                            if (!true) {
                                exit(json_encode($bc55a73fce975b0b8b561a9ac9cf383c));
                            }
                            $A4ffa88b22a409dfa0a7b559607c206a = $E4a30c2409a5502b6f5900480aa7d72f + $be358dca3b5d06c13678019c0768afb9 * 86400;
                            $bc55a73fce975b0b8b561a9ac9cf383c["js"][$B786dea0d5099bced1aca079470b539f]["f_human"] = date("D d F", $A4ffa88b22a409dfa0a7b559607c206a);
                            $bc55a73fce975b0b8b561a9ac9cf383c["js"][$B786dea0d5099bced1aca079470b539f]["f_mysql"] = date("Y-m-d", $A4ffa88b22a409dfa0a7b559607c206a);
                            $bc55a73fce975b0b8b561a9ac9cf383c["js"][$B786dea0d5099bced1aca079470b539f]["today"] = $be358dca3b5d06c13678019c0768afb9 == 0 ? 1 : 0;
                            $be358dca3b5d06c13678019c0768afb9++;
                            $B786dea0d5099bced1aca079470b539f++;
                            goto D8e011b9cef81b3dd216420aac5199a6;
                        case "get_data_table":
                            exit(json_encode(array("js" => eb8bcF29C11884029235bfaDcC2F0791()), JSON_PARTIAL_OUTPUT_ON_ERROR));
                        case "get_simple_data_table":
                            if (!(!empty(App::$request["ch_id"]) && !empty(App::$request["date"]))) {
                                exit;
                            }
                            $dae53a981b9f73e4eb3ad9145b3a0ab6 = App::$request["ch_id"];
                            $cd61aa5b92cfa5034e0263f00f3b5b3a = App::$request["date"];
                            $Abbc0a9d0b55f93fa77b79eeeee66893 = intval(App::$request["p"]);
                            $cededb57b306f201bd3218eb58d83189 = 10;
                            $Bc64a6743e9464994d1366e3119a6e0c = false;
                            App::$ipTV_db->query("SELECT `tv_archive_duration`,`channel_id`,`epg_id` FROM `streams` WHERE `id` = '%d' AND epg_id IS NOT NULL", $dae53a981b9f73e4eb3ad9145b3a0ab6);
                            $caafddda68ba555844a8337beb910f44 = array();
                            $E68daafb109f092ca7923a93b732e265 = 0;
                            $e491c0726b323922e9bcc39e8f3481bd = 0;
                            if (!(App::$ipTV_db->num_rows() > 0)) {
                                goto B23b71adbf21bdbfa7ce7a190bcecb0e;
                            }
                            $Fb4c20ded6718e10847bb5e632f5cd4c = App::$ipTV_db->c7aa024A27cF4472e107A8152E52C9B6();
                            App::$ipTV_db->query("SELECT *  FROM `epg_data` WHERE `epg_id` = '%d' AND `channel_id` = '%s' AND `start` >= '%s' AND `start` <= '%s' ORDER BY `start` ASC", $Fb4c20ded6718e10847bb5e632f5cd4c["epg_id"], $Fb4c20ded6718e10847bb5e632f5cd4c["channel_id"], $cd61aa5b92cfa5034e0263f00f3b5b3a . " 00:00:00", $cd61aa5b92cfa5034e0263f00f3b5b3a . " 23:59:59");
                            if (!(App::$ipTV_db->num_rows() > 0)) {
                                goto c94988bfb5760f9a51af210be7157f7f;
                            }
                            $caafddda68ba555844a8337beb910f44 = App::$ipTV_db->F72278FCecD1536556c4cce92E91446F();
                            foreach ($caafddda68ba555844a8337beb910f44 as $d2e771d1b2111bd6bb33eaed79849fe2 => $B381e84814b5cab4cb573e58dd591e96) {
                                $caafddda68ba555844a8337beb910f44[$d2e771d1b2111bd6bb33eaed79849fe2]["start_timestamp"] = strtotime($B381e84814b5cab4cb573e58dd591e96["start"]);
                                $caafddda68ba555844a8337beb910f44[$d2e771d1b2111bd6bb33eaed79849fe2]["stop_timestamp"] = strtotime($B381e84814b5cab4cb573e58dd591e96["end"]);
                                if (!($caafddda68ba555844a8337beb910f44[$d2e771d1b2111bd6bb33eaed79849fe2]["start_timestamp"] <= time() && $caafddda68ba555844a8337beb910f44[$d2e771d1b2111bd6bb33eaed79849fe2]["stop_timestamp"] >= time())) {
                                    goto ef4bf71a25e5063140d22952db1a0a6b;
                                }
                                $e491c0726b323922e9bcc39e8f3481bd = $e491c0726b323922e9bcc39e8f3481bd == 0 ? $d2e771d1b2111bd6bb33eaed79849fe2 + 1 : $e491c0726b323922e9bcc39e8f3481bd;
                                ef4bf71a25e5063140d22952db1a0a6b:
                            }
                            c94988bfb5760f9a51af210be7157f7f:
                            B23b71adbf21bdbfa7ce7a190bcecb0e:
                            if (!($Abbc0a9d0b55f93fa77b79eeeee66893 == 0)) {
                                goto b0feb046ada6cd566b8ec19912063d33;
                            }
                            $Bc64a6743e9464994d1366e3119a6e0c = true;
                            $Abbc0a9d0b55f93fa77b79eeeee66893 = ceil($e491c0726b323922e9bcc39e8f3481bd / $cededb57b306f201bd3218eb58d83189);
                            if (!($Abbc0a9d0b55f93fa77b79eeeee66893 == 0)) {
                                goto C7dd3795980e02dd64635c5b84aa3e9b;
                            }
                            $Abbc0a9d0b55f93fa77b79eeeee66893 = 1;
                            C7dd3795980e02dd64635c5b84aa3e9b:
                            if (!($cd61aa5b92cfa5034e0263f00f3b5b3a != date("Y-m-d"))) {
                                goto e9059a9b554f73a5ab9d652722e623c6;
                            }
                            $Abbc0a9d0b55f93fa77b79eeeee66893 = 1;
                            $Bc64a6743e9464994d1366e3119a6e0c = false;
                            e9059a9b554f73a5ab9d652722e623c6:
                            b0feb046ada6cd566b8ec19912063d33:
                            $b40cece591310617feef72e4cc019613 = array_slice($caafddda68ba555844a8337beb910f44, 0 * $cededb57b306f201bd3218eb58d83189, $cededb57b306f201bd3218eb58d83189);
                            $cf0a25072f4b9a32281a937290123528 = array();
                            $E47661722dd0a4bb511ed48db7ece503 = App::b026322780CD85a24eA2acDEB00311F8($dded9c4b3ef279e7c0b5a0d9168aa0e5);
                            $B786dea0d5099bced1aca079470b539f = 0;
                            C89796ee2ac056df55865b738680e36f:
                            if (!($B786dea0d5099bced1aca079470b539f < count($b40cece591310617feef72e4cc019613))) {
                                if ($Bc64a6743e9464994d1366e3119a6e0c) {
                                    $E84b9dab5525b597923c8339cd77c7c7 = $Abbc0a9d0b55f93fa77b79eeeee66893;
                                    $Fc0d1535ab47a048e737150fa2b8f42f = $e491c0726b323922e9bcc39e8f3481bd - 0 * $cededb57b306f201bd3218eb58d83189;
                                    goto be00ede01c8405f90c701fa1e954f51c;
                                }
                                $E84b9dab5525b597923c8339cd77c7c7 = 0;
                                $Fc0d1535ab47a048e737150fa2b8f42f = 0;
                                be00ede01c8405f90c701fa1e954f51c:
                                $output = array();
                                $output["js"]["cur_page"] = $E84b9dab5525b597923c8339cd77c7c7;
                                $output["js"]["selected_item"] = $Fc0d1535ab47a048e737150fa2b8f42f;
                                $output["js"]["total_items"] = count($caafddda68ba555844a8337beb910f44);
                                $output["js"]["max_page_items"] = $cededb57b306f201bd3218eb58d83189;
                                $output["js"]["data"] = $cf0a25072f4b9a32281a937290123528;
                                exit(json_encode($output, JSON_PARTIAL_OUTPUT_ON_ERROR));
                            }
                            $f042c618d9a3d2c213b6aba789c25d23 = 0;
                            if (!($b40cece591310617feef72e4cc019613[$B786dea0d5099bced1aca079470b539f]["stop_timestamp"] >= time())) {
                                goto D631b5948d13b8885e73d41d70b3d9b7;
                            }
                            $f042c618d9a3d2c213b6aba789c25d23 = 1;
                            D631b5948d13b8885e73d41d70b3d9b7:
                            $fb6ada3db36317805fe41ffa0b838950 = new DateTime($b40cece591310617feef72e4cc019613[$B786dea0d5099bced1aca079470b539f]["start"]);
                            $fb6ada3db36317805fe41ffa0b838950->modify("{$E47661722dd0a4bb511ed48db7ece503} seconds");
                            $Bb1bf8dabba51a6510736c4cd7d75586 = new DateTime($b40cece591310617feef72e4cc019613[$B786dea0d5099bced1aca079470b539f]["end"]);
                            $Bb1bf8dabba51a6510736c4cd7d75586->modify("{$E47661722dd0a4bb511ed48db7ece503} seconds");
                            $cf0a25072f4b9a32281a937290123528[$B786dea0d5099bced1aca079470b539f]["id"] = $b40cece591310617feef72e4cc019613[$B786dea0d5099bced1aca079470b539f]["id"] . "_" . $dae53a981b9f73e4eb3ad9145b3a0ab6;
                            $cf0a25072f4b9a32281a937290123528[$B786dea0d5099bced1aca079470b539f]["ch_id"] = $dae53a981b9f73e4eb3ad9145b3a0ab6;
                            $cf0a25072f4b9a32281a937290123528[$B786dea0d5099bced1aca079470b539f]["time"] = $fb6ada3db36317805fe41ffa0b838950->format("Y-m-d H:i:s");
                            $cf0a25072f4b9a32281a937290123528[$B786dea0d5099bced1aca079470b539f]["time_to"] = $Bb1bf8dabba51a6510736c4cd7d75586->format("Y-m-d H:i:s");
                            $cf0a25072f4b9a32281a937290123528[$B786dea0d5099bced1aca079470b539f]["duration"] = $b40cece591310617feef72e4cc019613[$B786dea0d5099bced1aca079470b539f]["stop_timestamp"] - $b40cece591310617feef72e4cc019613[$B786dea0d5099bced1aca079470b539f]["start_timestamp"];
                            $cf0a25072f4b9a32281a937290123528[$B786dea0d5099bced1aca079470b539f]["name"] = base64_decode($b40cece591310617feef72e4cc019613[$B786dea0d5099bced1aca079470b539f]["title"]);
                            $cf0a25072f4b9a32281a937290123528[$B786dea0d5099bced1aca079470b539f]["descr"] = base64_decode($b40cece591310617feef72e4cc019613[$B786dea0d5099bced1aca079470b539f]["description"]);
                            $cf0a25072f4b9a32281a937290123528[$B786dea0d5099bced1aca079470b539f]["real_id"] = $dae53a981b9f73e4eb3ad9145b3a0ab6 . "_" . $b40cece591310617feef72e4cc019613[$B786dea0d5099bced1aca079470b539f]["start"];
                            $cf0a25072f4b9a32281a937290123528[$B786dea0d5099bced1aca079470b539f]["category"] = '';
                            $cf0a25072f4b9a32281a937290123528[$B786dea0d5099bced1aca079470b539f]["director"] = '';
                            $cf0a25072f4b9a32281a937290123528[$B786dea0d5099bced1aca079470b539f]["actor"] = '';
                            $cf0a25072f4b9a32281a937290123528[$B786dea0d5099bced1aca079470b539f]["start_timestamp"] = $fb6ada3db36317805fe41ffa0b838950->getTimestamp();
                            $cf0a25072f4b9a32281a937290123528[$B786dea0d5099bced1aca079470b539f]["stop_timestamp"] = $Bb1bf8dabba51a6510736c4cd7d75586->getTimestamp();
                            $cf0a25072f4b9a32281a937290123528[$B786dea0d5099bced1aca079470b539f]["t_time"] = $fb6ada3db36317805fe41ffa0b838950->format("H:i");
                            $cf0a25072f4b9a32281a937290123528[$B786dea0d5099bced1aca079470b539f]["t_time_to"] = $Bb1bf8dabba51a6510736c4cd7d75586->format("H:i");
                            $cf0a25072f4b9a32281a937290123528[$B786dea0d5099bced1aca079470b539f]["open"] = $f042c618d9a3d2c213b6aba789c25d23;
                            $cf0a25072f4b9a32281a937290123528[$B786dea0d5099bced1aca079470b539f]["mark_memo"] = 0;
                            $cf0a25072f4b9a32281a937290123528[$B786dea0d5099bced1aca079470b539f]["mark_rec"] = 0;
                            $cf0a25072f4b9a32281a937290123528[$B786dea0d5099bced1aca079470b539f]["mark_archive"] = !empty($Fb4c20ded6718e10847bb5e632f5cd4c["tv_archive_duration"]) && time() > $b40cece591310617feef72e4cc019613[$B786dea0d5099bced1aca079470b539f]["stop_timestamp"] && strtotime("-{$Fb4c20ded6718e10847bb5e632f5cd4c["tv_archive_duration"]} days") <= $b40cece591310617feef72e4cc019613[$B786dea0d5099bced1aca079470b539f]["stop_timestamp"] ? 1 : 0;
                            $B786dea0d5099bced1aca079470b539f++;
                            goto C89796ee2ac056df55865b738680e36f;
                        case "get_all_program_for_ch":
                            $output = array();
                            $output["js"] = array();
                            $dae53a981b9f73e4eb3ad9145b3a0ab6 = empty(App::$request["ch_id"]) ? 0 : intval(App::$request["ch_id"]);
                            App::$ipTV_db->query("SELECT `tv_archive_duration`,`channel_id`,`epg_id` FROM `streams` WHERE `id` = '%d' AND epg_id IS NOT NULL", $dae53a981b9f73e4eb3ad9145b3a0ab6);
                            if (!(App::$ipTV_db->num_rows() > 0)) {
                                goto a6d780e5fa8821c432a51ae8a9df692a;
                            }
                            $Fb4c20ded6718e10847bb5e632f5cd4c = App::$ipTV_db->C7AA024A27cF4472E107A8152e52C9b6();
                            App::$ipTV_db->query("SELECT * FROM `epg_data` WHERE `epg_id` = '%d' AND `channel_id` = '%s' AND `start` >= '%s' ORDER BY `start` ASC", $Fb4c20ded6718e10847bb5e632f5cd4c["epg_id"], $Fb4c20ded6718e10847bb5e632f5cd4c["channel_id"], date("Y-m-d 00:00:00"));
                            if (!(App::$ipTV_db->num_rows() > 0)) {
                                goto e03d43d956489e8863a48700fb61e8bb;
                            }
                            $E47661722dd0a4bb511ed48db7ece503 = App::b026322780CD85A24ea2aCdeB00311F8($dded9c4b3ef279e7c0b5a0d9168aa0e5);
                            foreach (App::$ipTV_db->f72278fcecD1536556C4cCE92e91446F() as $b2f9f5a782023ba63917f16c8fe0b279) {
                                $fb6ada3db36317805fe41ffa0b838950 = new DateTime($b2f9f5a782023ba63917f16c8fe0b279["start"]);
                                $fb6ada3db36317805fe41ffa0b838950->modify("{$E47661722dd0a4bb511ed48db7ece503} seconds");
                                $Bb1bf8dabba51a6510736c4cd7d75586 = new DateTime($b2f9f5a782023ba63917f16c8fe0b279["end"]);
                                $Bb1bf8dabba51a6510736c4cd7d75586->modify("{$E47661722dd0a4bb511ed48db7ece503} seconds");
                                $output["js"][] = array("start_timestamp" => $fb6ada3db36317805fe41ffa0b838950->getTimestamp(), "stop_timestamp" => $Bb1bf8dabba51a6510736c4cd7d75586->getTimestamp(), "name" => base64_decode($b2f9f5a782023ba63917f16c8fe0b279["title"]));
                            }
                            e03d43d956489e8863a48700fb61e8bb:
                            a6d780e5fa8821c432a51ae8a9df692a:
                            exit(json_encode($output, JSON_PARTIAL_OUTPUT_ON_ERROR));
                    }
                    Ae6ed445d345b5dfcba0e142cf22a177:
                    goto Eb367e5ecb7206ab12c234a74053acde;
            }
            Eb367e5ecb7206ab12c234a74053acde:
            function AB8B6486e8794fFD74826bE9552353B6($B233de535022ee8b7ca88c11d74817ee = null, $c75c6e892526bf4353f3ad2e2c485a10 = null, $d0024e3250a8bb679173b3a79d83321a = null, $ef116040f33659b3a4f8f287fab6a323 = null, $C5c4abc2c8b530967c9b7979bb7a282e = array())
            {
                global $Ec8602a5273865d9f596011654c13420, $ace34b9ef659fb27b40bbe3317490508;
                $Abbc0a9d0b55f93fa77b79eeeee66893 = !empty(App::$request["p"]) ? App::$request["p"] : 0;
                $cededb57b306f201bd3218eb58d83189 = 14;
                $Bc64a6743e9464994d1366e3119a6e0c = false;
                $A55ff9c1fcce8f45f315e85ad1224748 = a1D1B00D6cf0BC98Fa2Ca35183664900(array("movie"), $B233de535022ee8b7ca88c11d74817ee, $c75c6e892526bf4353f3ad2e2c485a10, $d0024e3250a8bb679173b3a79d83321a, $ef116040f33659b3a4f8f287fab6a323, $C5c4abc2c8b530967c9b7979bb7a282e);
                $D22f1a0bbd662d65b64329e866c22bc3 = count($A55ff9c1fcce8f45f315e85ad1224748["streams"]);
                $e491c0726b323922e9bcc39e8f3481bd = 0;
                if (!($Abbc0a9d0b55f93fa77b79eeeee66893 == 0)) {
                    goto fb9a6b7b0a4d26efc7f4b61196a8b329;
                }
                $Bc64a6743e9464994d1366e3119a6e0c = true;
                $Abbc0a9d0b55f93fa77b79eeeee66893 = ceil($e491c0726b323922e9bcc39e8f3481bd / $cededb57b306f201bd3218eb58d83189);
                if (!($Abbc0a9d0b55f93fa77b79eeeee66893 == 0)) {
                    goto C0e838ac4bdaea64ac805f262001ee66;
                }
                $Abbc0a9d0b55f93fa77b79eeeee66893 = 1;
                C0e838ac4bdaea64ac805f262001ee66:
                fb9a6b7b0a4d26efc7f4b61196a8b329:
                $A55ff9c1fcce8f45f315e85ad1224748 = array_slice($A55ff9c1fcce8f45f315e85ad1224748["streams"], 0 * $cededb57b306f201bd3218eb58d83189, $cededb57b306f201bd3218eb58d83189);
                $b873800528c62505344c8736f06b180a = array();
                foreach ($A55ff9c1fcce8f45f315e85ad1224748 as $Eb8efade19ba6645e54f10ea71852370) {
                    $movie_properties = App::C38FC830cB36cd012070ab2a32375a20($Eb8efade19ba6645e54f10ea71852370["id"]);
                    $C43191a5e8eec302f8966cf6092904d0 = array("type" => "movie", "stream_id" => $Eb8efade19ba6645e54f10ea71852370["id"], "stream_source" => $Eb8efade19ba6645e54f10ea71852370["stream_source"], "target_container" => $Eb8efade19ba6645e54f10ea71852370["target_container"]);
                    $Fbd1b8f2fe85510e187813e27b0ed4af = date("m");
                    $b94c77f49737e19bcae0a0548b414743 = date("d");
                    $dc0b8d91d76a9bb76c51d4808ad6357e = date("Y");
                    if ($Eb8efade19ba6645e54f10ea71852370["added"] > mktime(0, 0, 0, $Fbd1b8f2fe85510e187813e27b0ed4af, $b94c77f49737e19bcae0a0548b414743, $dc0b8d91d76a9bb76c51d4808ad6357e)) {
                        $Dda48d5965bcdd22792545bc2907de7d = "today";
                        $A2c98cce2c96c2cccc753c69c8d73682 = "Today";
                        goto e98bf38df46dbbb5ffd11aab1d00d3d4;
                    }
                    if ($Eb8efade19ba6645e54f10ea71852370["added"] > mktime(0, 0, 0, $Fbd1b8f2fe85510e187813e27b0ed4af, $b94c77f49737e19bcae0a0548b414743 - 1, $dc0b8d91d76a9bb76c51d4808ad6357e)) {
                        $Dda48d5965bcdd22792545bc2907de7d = "yesterday";
                        $A2c98cce2c96c2cccc753c69c8d73682 = "Yesterday";
                        goto e98bf38df46dbbb5ffd11aab1d00d3d4;
                    }
                    if ($Eb8efade19ba6645e54f10ea71852370["added"] > mktime(0, 0, 0, $Fbd1b8f2fe85510e187813e27b0ed4af, $b94c77f49737e19bcae0a0548b414743 - 7, $dc0b8d91d76a9bb76c51d4808ad6357e)) {
                        $Dda48d5965bcdd22792545bc2907de7d = "week_and_more";
                        $A2c98cce2c96c2cccc753c69c8d73682 = "Last week";
                        goto E3d1a7a31e637330b2dcaaa233d69ffa;
                    }
                    $Dda48d5965bcdd22792545bc2907de7d = "week_and_more";
                    $A2c98cce2c96c2cccc753c69c8d73682 = date("F", $Eb8efade19ba6645e54f10ea71852370["added"]) . " " . date("Y", $Eb8efade19ba6645e54f10ea71852370["added"]);
                    E3d1a7a31e637330b2dcaaa233d69ffa:
                    e98bf38df46dbbb5ffd11aab1d00d3d4:
                    $C16ecd7f3ea8319aa3b8a095dc824422 = isset($movie_properties["duration_secs"]) ? $movie_properties["duration_secs"] : 60;
                    $b873800528c62505344c8736f06b180a[] = array("id" => $Eb8efade19ba6645e54f10ea71852370["id"], "owner" => '', "name" => $Eb8efade19ba6645e54f10ea71852370["stream_display_name"], "old_name" => '', "o_name" => $Eb8efade19ba6645e54f10ea71852370["stream_display_name"], "fname" => '', "description" => empty($movie_properties["plot"]) ? "N/A" : $movie_properties["plot"], "pic" => '', "cost" => 0, "time" => intval($C16ecd7f3ea8319aa3b8a095dc824422 / 60), "file" => '', "path" => str_replace(" ", "_", $Eb8efade19ba6645e54f10ea71852370["stream_display_name"]), "protocol" => '', "rtsp_url" => '', "censored" => (int) $Eb8efade19ba6645e54f10ea71852370["is_adult"], "series" => array(), "volume_correction" => 0, "category_id" => $Eb8efade19ba6645e54f10ea71852370["category_id"], "genre_id" => 0, "genre_id_1" => 0, "genre_id_2" => 0, "genre_id_3" => 0, "hd" => 1, "genre_id_4" => 0, "cat_genre_id_1" => $Eb8efade19ba6645e54f10ea71852370["category_id"], "cat_genre_id_2" => 0, "cat_genre_id_3" => 0, "cat_genre_id_4" => 0, "director" => empty($movie_properties["director"]) ? "N/A" : $movie_properties["director"], "actors" => empty($movie_properties["cast"]) ? "N/A" : $movie_properties["cast"], "year" => empty($movie_properties["releasedate"]) ? "N/A" : $movie_properties["releasedate"], "accessed" => 1, "status" => 1, "disable_for_hd_devices" => 0, "added" => date("Y-m-d H:i:s", $Eb8efade19ba6645e54f10ea71852370["added"]), "count" => 0, "count_first_0_5" => 0, "count_second_0_5" => 0, "vote_sound_good" => 0, "vote_sound_bad" => 0, "vote_video_good" => 0, "vote_video_bad" => 0, "rate" => '', "last_rate_update" => '', "last_played" => '', "for_sd_stb" => 0, "rating_imdb" => empty($movie_properties["rating"]) ? "N/A" : $movie_properties["rating"], "rating_count_imdb" => '', "rating_last_update" => "0000-00-00 00:00:00", "age" => "12+", "high_quality" => 0, "rating_kinopoisk" => empty($movie_properties["rating"]) ? "N/A" : $movie_properties["rating"], "comments" => '', "low_quality" => 0, "is_series" => 0, "year_end" => 0, "autocomplete_provider" => "imdb", "screenshots" => '', "is_movie" => 1, "lock" => (int) $Eb8efade19ba6645e54f10ea71852370["is_adult"], "fav" => in_array($Eb8efade19ba6645e54f10ea71852370["id"], $Ec8602a5273865d9f596011654c13420->UserInfo["fav_channels"]["movie"]) ? 1 : 0, "for_rent" => 0, "screenshot_uri" => empty($movie_properties["movie_image"]) ? '' : $movie_properties["movie_image"], "genres_str" => empty($movie_properties["genre"]) ? "N/A" : $movie_properties["genre"], "cmd" => base64_encode(json_encode($C43191a5e8eec302f8966cf6092904d0, JSON_PARTIAL_OUTPUT_ON_ERROR)), $Dda48d5965bcdd22792545bc2907de7d => $A2c98cce2c96c2cccc753c69c8d73682, "has_files" => 0);
                }
                if ($Bc64a6743e9464994d1366e3119a6e0c) {
                    $E84b9dab5525b597923c8339cd77c7c7 = $Abbc0a9d0b55f93fa77b79eeeee66893;
                    $Fc0d1535ab47a048e737150fa2b8f42f = $e491c0726b323922e9bcc39e8f3481bd - ($Abbc0a9d0b55f93fa77b79eeeee66893 - 1) * $cededb57b306f201bd3218eb58d83189;
                    goto A8b19c096209b9f17e82d548fa6086e4;
                }
                $E84b9dab5525b597923c8339cd77c7c7 = 0;
                $Fc0d1535ab47a048e737150fa2b8f42f = 0;
                A8b19c096209b9f17e82d548fa6086e4:
                $output = array("js" => array("total_items" => $D22f1a0bbd662d65b64329e866c22bc3, "max_page_items" => $cededb57b306f201bd3218eb58d83189, "selected_item" => $Fc0d1535ab47a048e737150fa2b8f42f, "cur_page" => $E84b9dab5525b597923c8339cd77c7c7, "data" => $b873800528c62505344c8736f06b180a));
                return json_encode($output, JSON_PARTIAL_OUTPUT_ON_ERROR);
            }
            function dbc161Ca44018346A5f6eaE8BcDc3c68($be6a0915b759565db185ab90868e148b, $d0024e3250a8bb679173b3a79d83321a = null, $ef116040f33659b3a4f8f287fab6a323 = null, $C5c4abc2c8b530967c9b7979bb7a282e = array())
            {
                $Bb5eb906332cce28c8bbc58cf2d3e4d0 = [];
                foreach ($be6a0915b759565db185ab90868e148b["series_data"] as $be358dca3b5d06c13678019c0768afb9 => $f27fde14f2aaefb5190ce5cca403666d) {
                    if (!array_key_exists($be358dca3b5d06c13678019c0768afb9, $Bb5eb906332cce28c8bbc58cf2d3e4d0)) {
                        $Bb5eb906332cce28c8bbc58cf2d3e4d0[$be358dca3b5d06c13678019c0768afb9] = array("season_num" => $be358dca3b5d06c13678019c0768afb9, "title" => "Season " . $be358dca3b5d06c13678019c0768afb9, "category_id" => $be6a0915b759565db185ab90868e148b["category_id"], "episode_run_time" => $be6a0915b759565db185ab90868e148b["episode_run_time"], "total_episodes" => count($be6a0915b759565db185ab90868e148b["series_data"][$be358dca3b5d06c13678019c0768afb9]), "added" => $f27fde14f2aaefb5190ce5cca403666d[key($f27fde14f2aaefb5190ce5cca403666d)]["added"], "season_info" => !empty($be6a0915b759565db185ab90868e148b["seasons"][$be358dca3b5d06c13678019c0768afb9]) ? $be6a0915b759565db185ab90868e148b["seasons"][$be358dca3b5d06c13678019c0768afb9] : array());
                        goto Ff2f173cd7078e1ef06701d9c5f1eed7;
                    }
                    if ($f27fde14f2aaefb5190ce5cca403666d[key($f27fde14f2aaefb5190ce5cca403666d)]["added"] > $Bb5eb906332cce28c8bbc58cf2d3e4d0[$be358dca3b5d06c13678019c0768afb9]["added"]) {
                        $Bb5eb906332cce28c8bbc58cf2d3e4d0[$be358dca3b5d06c13678019c0768afb9]["added"] = $f27fde14f2aaefb5190ce5cca403666d[key($f27fde14f2aaefb5190ce5cca403666d)]["added"];
                        goto A36457ac34300923204c70cbe4c583e8;
                    }
                    A36457ac34300923204c70cbe4c583e8:
                    Ff2f173cd7078e1ef06701d9c5f1eed7:
                }
                uasort($Bb5eb906332cce28c8bbc58cf2d3e4d0, function ($be358dca3b5d06c13678019c0768afb9, $f27fde14f2aaefb5190ce5cca403666d) {
                    return $be358dca3b5d06c13678019c0768afb9["added"] < $f27fde14f2aaefb5190ce5cca403666d["added"];
                });
                return $Bb5eb906332cce28c8bbc58cf2d3e4d0;
            }
            function b7DBCFe577Ecd3d8C1cF05a92EcD36cC($fb6de5cdfc6eeede97a325f77fb68bf6 = null, $B233de535022ee8b7ca88c11d74817ee = null, $c75c6e892526bf4353f3ad2e2c485a10 = null, $d0024e3250a8bb679173b3a79d83321a = null, $ef116040f33659b3a4f8f287fab6a323 = null, $C5c4abc2c8b530967c9b7979bb7a282e = array())
            {
                global $eb0adeea66b83598ad26fc38956f1342, $ace34b9ef659fb27b40bbe3317490508, $cbd858f82bc7041deb947407172eee4f, $Ec8602a5273865d9f596011654c13420;
                $Abbc0a9d0b55f93fa77b79eeeee66893 = !empty(App::$request["p"]) ? App::$request["p"] : 0;
                $cededb57b306f201bd3218eb58d83189 = 14;
                $Bc64a6743e9464994d1366e3119a6e0c = false;
                $E507412caaa3b9fe1f53cf1f87be32dc = App::bbd76eFA04e950493b70Cf62A03d433D();
                $be6a0915b759565db185ab90868e148b = !empty($fb6de5cdfc6eeede97a325f77fb68bf6) ? $E507412caaa3b9fe1f53cf1f87be32dc[$fb6de5cdfc6eeede97a325f77fb68bf6] : array();
                if (empty($fb6de5cdfc6eeede97a325f77fb68bf6)) {
                    $f98cd4c6954a9b77c6659051216a7be8 = e8A9a4eDbf66bABE1481f0ACC40a1886($E507412caaa3b9fe1f53cf1f87be32dc, $B233de535022ee8b7ca88c11d74817ee, $c75c6e892526bf4353f3ad2e2c485a10, $d0024e3250a8bb679173b3a79d83321a, $ef116040f33659b3a4f8f287fab6a323, $C5c4abc2c8b530967c9b7979bb7a282e);
                    goto A55bde81fe1a470e204c15f8470a7f85;
                }
                $f98cd4c6954a9b77c6659051216a7be8 = DBC161Ca44018346a5F6eaE8bCDC3C68($be6a0915b759565db185ab90868e148b, $d0024e3250a8bb679173b3a79d83321a, $ef116040f33659b3a4f8f287fab6a323, $C5c4abc2c8b530967c9b7979bb7a282e);
                A55bde81fe1a470e204c15f8470a7f85:
                $D22f1a0bbd662d65b64329e866c22bc3 = count($f98cd4c6954a9b77c6659051216a7be8);
                $e491c0726b323922e9bcc39e8f3481bd = 0;
                if (!($Abbc0a9d0b55f93fa77b79eeeee66893 == 0)) {
                    goto e98ad123f11c41bfad181d8abf9e67f2;
                }
                $Bc64a6743e9464994d1366e3119a6e0c = true;
                $Abbc0a9d0b55f93fa77b79eeeee66893 = ceil($e491c0726b323922e9bcc39e8f3481bd / $cededb57b306f201bd3218eb58d83189);
                if (!($Abbc0a9d0b55f93fa77b79eeeee66893 == 0)) {
                    goto C181ed9d0014636f446689e22ac83f12;
                }
                $Abbc0a9d0b55f93fa77b79eeeee66893 = 1;
                C181ed9d0014636f446689e22ac83f12:
                e98ad123f11c41bfad181d8abf9e67f2:
                $f98cd4c6954a9b77c6659051216a7be8 = array_slice($f98cd4c6954a9b77c6659051216a7be8, 0 * $cededb57b306f201bd3218eb58d83189, $cededb57b306f201bd3218eb58d83189, true);
                $b873800528c62505344c8736f06b180a = array();
                foreach ($f98cd4c6954a9b77c6659051216a7be8 as $d2e771d1b2111bd6bb33eaed79849fe2 => $Eb8efade19ba6645e54f10ea71852370) {
                    if (!empty($be6a0915b759565db185ab90868e148b)) {
                        $A875491612316cf56695741e4e37e8e5 = $be6a0915b759565db185ab90868e148b;
                        $ef06bae73ecb669d722ae1ab95479588 = $Eb8efade19ba6645e54f10ea71852370["added"];
                        goto aefa99321fc1bb182948e004f656fd78;
                    }
                    $A875491612316cf56695741e4e37e8e5 = $Eb8efade19ba6645e54f10ea71852370;
                    $ef06bae73ecb669d722ae1ab95479588 = $Eb8efade19ba6645e54f10ea71852370["last_modified"];
                    aefa99321fc1bb182948e004f656fd78:
                    $C43191a5e8eec302f8966cf6092904d0 = array("series_id" => $fb6de5cdfc6eeede97a325f77fb68bf6, "season_num" => $d2e771d1b2111bd6bb33eaed79849fe2, "type" => "series");
                    $Fbd1b8f2fe85510e187813e27b0ed4af = date("m");
                    $b94c77f49737e19bcae0a0548b414743 = date("d");
                    $dc0b8d91d76a9bb76c51d4808ad6357e = date("Y");
                    if ($ef06bae73ecb669d722ae1ab95479588 > mktime(0, 0, 0, $Fbd1b8f2fe85510e187813e27b0ed4af, $b94c77f49737e19bcae0a0548b414743, $dc0b8d91d76a9bb76c51d4808ad6357e)) {
                        $Dda48d5965bcdd22792545bc2907de7d = "today";
                        $A2c98cce2c96c2cccc753c69c8d73682 = "today";
                        goto fa3990d6dc27497ddd04bdc3768716c5;
                    }
                    if ($ef06bae73ecb669d722ae1ab95479588 > mktime(0, 0, 0, $Fbd1b8f2fe85510e187813e27b0ed4af, $b94c77f49737e19bcae0a0548b414743 - 1, $dc0b8d91d76a9bb76c51d4808ad6357e)) {
                        $Dda48d5965bcdd22792545bc2907de7d = "yesterday";
                        $A2c98cce2c96c2cccc753c69c8d73682 = "yesterday";
                        goto fa3990d6dc27497ddd04bdc3768716c5;
                    }
                    if ($ef06bae73ecb669d722ae1ab95479588 > mktime(0, 0, 0, $Fbd1b8f2fe85510e187813e27b0ed4af, $b94c77f49737e19bcae0a0548b414743 - 7, $dc0b8d91d76a9bb76c51d4808ad6357e)) {
                        $Dda48d5965bcdd22792545bc2907de7d = "week_and_more";
                        $A2c98cce2c96c2cccc753c69c8d73682 = "Last Week";
                        goto C78ad8040d407f4ba8cbcfe71b0c5e87;
                    }
                    $Dda48d5965bcdd22792545bc2907de7d = "week_and_more";
                    $A2c98cce2c96c2cccc753c69c8d73682 = date("F", $ef06bae73ecb669d722ae1ab95479588) . " " . date("Y", $ef06bae73ecb669d722ae1ab95479588);
                    C78ad8040d407f4ba8cbcfe71b0c5e87:
                    fa3990d6dc27497ddd04bdc3768716c5:
                    if (!empty($be6a0915b759565db185ab90868e148b)) {
                        if ($d2e771d1b2111bd6bb33eaed79849fe2 == 0) {
                            $d891210001f72c060cfc775b77925054 = "Specials";
                            goto A7efc283a318914e1db63e373909133f;
                        }
                        $d891210001f72c060cfc775b77925054 = "Season " . $d2e771d1b2111bd6bb33eaed79849fe2;
                        A7efc283a318914e1db63e373909133f:
                        goto fa0a94eae3c3bee9c1dfbdcaea98a5e2;
                    }
                    $d891210001f72c060cfc775b77925054 = $Eb8efade19ba6645e54f10ea71852370["title"];
                    fa0a94eae3c3bee9c1dfbdcaea98a5e2:
                    $b873800528c62505344c8736f06b180a[] = array("id" => $A875491612316cf56695741e4e37e8e5["id"] . ":" . $d2e771d1b2111bd6bb33eaed79849fe2, "owner" => '', "name" => $d891210001f72c060cfc775b77925054, "old_name" => '', "o_name" => $d891210001f72c060cfc775b77925054, "fname" => '', "description" => empty($A875491612316cf56695741e4e37e8e5["plot"]) ? "N/A" : $A875491612316cf56695741e4e37e8e5["plot"], "pic" => '', "cost" => 0, "time" => "N/a", "file" => '', "path" => str_replace(" ", "_", $A875491612316cf56695741e4e37e8e5["title"]), "protocol" => '', "rtsp_url" => '', "censored" => 0, "series" => !empty($fb6de5cdfc6eeede97a325f77fb68bf6) ? range(1, $Eb8efade19ba6645e54f10ea71852370["total_episodes"]) : array(), "volume_correction" => 0, "category_id" => $A875491612316cf56695741e4e37e8e5["category_id"], "genre_id" => 0, "genre_id_1" => 0, "genre_id_2" => 0, "genre_id_3" => 0, "hd" => 1, "genre_id_4" => 0, "cat_genre_id_1" => $A875491612316cf56695741e4e37e8e5["category_id"], "cat_genre_id_2" => 0, "cat_genre_id_3" => 0, "cat_genre_id_4" => 0, "director" => empty($A875491612316cf56695741e4e37e8e5["director"]) ? "N/A" : $A875491612316cf56695741e4e37e8e5["director"], "actors" => empty($A875491612316cf56695741e4e37e8e5["cast"]) ? "N/A" : $A875491612316cf56695741e4e37e8e5["cast"], "year" => empty($A875491612316cf56695741e4e37e8e5["releaseDate"]) ? "N/A" : $A875491612316cf56695741e4e37e8e5["releaseDate"], "accessed" => 1, "status" => 1, "disable_for_hd_devices" => 0, "added" => date("Y-m-d H:i:s", $ef06bae73ecb669d722ae1ab95479588), "count" => 0, "count_first_0_5" => 0, "count_second_0_5" => 0, "vote_sound_good" => 0, "vote_sound_bad" => 0, "vote_video_good" => 0, "vote_video_bad" => 0, "rate" => '', "last_rate_update" => '', "last_played" => '', "for_sd_stb" => 0, "rating_imdb" => empty($A875491612316cf56695741e4e37e8e5["rating"]) ? "N/A" : $A875491612316cf56695741e4e37e8e5["rating"], "rating_count_imdb" => '', "rating_last_update" => "0000-00-00 00:00:00", "age" => "12+", "high_quality" => 0, "rating_kinopoisk" => empty($A875491612316cf56695741e4e37e8e5["rating"]) ? "N/A" : $A875491612316cf56695741e4e37e8e5["rating"], "comments" => '', "low_quality" => 0, "is_series" => 1, "year_end" => 0, "autocomplete_provider" => "imdb", "screenshots" => '', "is_movie" => 1, "lock" => 0, "fav" => in_array($A875491612316cf56695741e4e37e8e5["id"], $Ec8602a5273865d9f596011654c13420->UserInfo["fav_channels"]["series"]) ? 1 : 0, "for_rent" => 0, "screenshot_uri" => empty($A875491612316cf56695741e4e37e8e5["cover"]) ? '' : $A875491612316cf56695741e4e37e8e5["cover"], "genres_str" => empty($A875491612316cf56695741e4e37e8e5["genre"]) ? "N/A" : $A875491612316cf56695741e4e37e8e5["genre"], "cmd" => !empty($fb6de5cdfc6eeede97a325f77fb68bf6) ? base64_encode(json_encode($C43191a5e8eec302f8966cf6092904d0, JSON_PARTIAL_OUTPUT_ON_ERROR)) : '', $Dda48d5965bcdd22792545bc2907de7d => $A2c98cce2c96c2cccc753c69c8d73682, "has_files" => empty($fb6de5cdfc6eeede97a325f77fb68bf6) ? 1 : 0);
                }
                if ($Bc64a6743e9464994d1366e3119a6e0c) {
                    $E84b9dab5525b597923c8339cd77c7c7 = $Abbc0a9d0b55f93fa77b79eeeee66893;
                    $Fc0d1535ab47a048e737150fa2b8f42f = $e491c0726b323922e9bcc39e8f3481bd - ($Abbc0a9d0b55f93fa77b79eeeee66893 - 1) * $cededb57b306f201bd3218eb58d83189;
                    goto b361555d11f45df5745fdd9ad8681da3;
                }
                $E84b9dab5525b597923c8339cd77c7c7 = 0;
                $Fc0d1535ab47a048e737150fa2b8f42f = 0;
                b361555d11f45df5745fdd9ad8681da3:
                $output = array("js" => array("total_items" => $D22f1a0bbd662d65b64329e866c22bc3, "max_page_items" => $cededb57b306f201bd3218eb58d83189, "selected_item" => $Fc0d1535ab47a048e737150fa2b8f42f, "cur_page" => $E84b9dab5525b597923c8339cd77c7c7, "data" => $b873800528c62505344c8736f06b180a));
                return json_encode($output, JSON_PARTIAL_OUTPUT_ON_ERROR);
            }
            function E8A9A4edBF66baBE1481F0ACC40A1886($E507412caaa3b9fe1f53cf1f87be32dc, $B233de535022ee8b7ca88c11d74817ee = null, $c75c6e892526bf4353f3ad2e2c485a10 = null, $d0024e3250a8bb679173b3a79d83321a = null, $ef116040f33659b3a4f8f287fab6a323 = null, $C5c4abc2c8b530967c9b7979bb7a282e = array())
            {
                global $Ec8602a5273865d9f596011654c13420;
                $Dab8d0329fdba0a0c4c342f0ba88680a = array();
                foreach ($E507412caaa3b9fe1f53cf1f87be32dc as $fb6de5cdfc6eeede97a325f77fb68bf6 => $Dbeeacb4195c12464801613481323cef) {
                    if (array_key_exists($fb6de5cdfc6eeede97a325f77fb68bf6, $Ec8602a5273865d9f596011654c13420->UserInfo["series_ids"])) {
                        if (!(!empty($B233de535022ee8b7ca88c11d74817ee) && $Dbeeacb4195c12464801613481323cef["category_id"] != $B233de535022ee8b7ca88c11d74817ee)) {
                            if (!(!empty($ef116040f33659b3a4f8f287fab6a323) && !stristr($Dbeeacb4195c12464801613481323cef["title"], $ef116040f33659b3a4f8f287fab6a323))) {
                                if (!(!empty($C5c4abc2c8b530967c9b7979bb7a282e["abc"]) && $C5c4abc2c8b530967c9b7979bb7a282e["abc"] != "*" && strtoupper(substr($Dbeeacb4195c12464801613481323cef["title"], 0, 1)) != $C5c4abc2c8b530967c9b7979bb7a282e["abc"])) {
                                    if (!(!empty($C5c4abc2c8b530967c9b7979bb7a282e["genre"]) && $C5c4abc2c8b530967c9b7979bb7a282e["genre"] != "*" && $Dbeeacb4195c12464801613481323cef["category_id"] != $C5c4abc2c8b530967c9b7979bb7a282e["genre"])) {
                                        if (!(!empty($C5c4abc2c8b530967c9b7979bb7a282e["years"]) && $C5c4abc2c8b530967c9b7979bb7a282e["years"] != "*" && $Dbeeacb4195c12464801613481323cef["releaseDate"] != $C5c4abc2c8b530967c9b7979bb7a282e["years"])) {
                                            if (!(!empty($c75c6e892526bf4353f3ad2e2c485a10) && !in_array($fb6de5cdfc6eeede97a325f77fb68bf6, $Ec8602a5273865d9f596011654c13420->UserInfo["fav_channels"]["series"]))) {
                                                $Dab8d0329fdba0a0c4c342f0ba88680a[$fb6de5cdfc6eeede97a325f77fb68bf6] = $Dbeeacb4195c12464801613481323cef;
                                                goto E5fa0910dbfa858889e17ed3979c3116;
                                            }
                                            goto e4bd8aa7eadd1668e2c39758c59d2f15;
                                        }
                                        goto e4bd8aa7eadd1668e2c39758c59d2f15;
                                    }
                                    goto e4bd8aa7eadd1668e2c39758c59d2f15;
                                }
                                goto e4bd8aa7eadd1668e2c39758c59d2f15;
                            }
                            goto e4bd8aa7eadd1668e2c39758c59d2f15;
                        }
                        goto e4bd8aa7eadd1668e2c39758c59d2f15;
                    }
                    E5fa0910dbfa858889e17ed3979c3116:
                    e4bd8aa7eadd1668e2c39758c59d2f15:
                }
                switch ($d0024e3250a8bb679173b3a79d83321a) {
                    case "name":
                        uasort($Dab8d0329fdba0a0c4c342f0ba88680a, "sortArrayStreamName");
                        goto D59f927eb073fc46281b36d6c284c132;
                    case "top":
                        uasort($Dab8d0329fdba0a0c4c342f0ba88680a, "sortArrayStreamRating");
                        goto D59f927eb073fc46281b36d6c284c132;
                    case "rating":
                        uasort($Dab8d0329fdba0a0c4c342f0ba88680a, "sortArrayStreamRating");
                        goto D59f927eb073fc46281b36d6c284c132;
                    case "added":
                        uasort($Dab8d0329fdba0a0c4c342f0ba88680a, "sortArrayStreamAdded");
                        goto D59f927eb073fc46281b36d6c284c132;
                    case "number":
                        uasort($Dab8d0329fdba0a0c4c342f0ba88680a, "sortArrayStreamNumber");
                        goto D59f927eb073fc46281b36d6c284c132;
                }
                D59f927eb073fc46281b36d6c284c132:
                return $Dab8d0329fdba0a0c4c342f0ba88680a;
            }
            function a1D1B00d6Cf0Bc98fA2cA35183664900($Ae886f5d81829eef36a27bed28105aeb = array(), $B233de535022ee8b7ca88c11d74817ee = null, $c75c6e892526bf4353f3ad2e2c485a10 = null, $d0024e3250a8bb679173b3a79d83321a = null, $ef116040f33659b3a4f8f287fab6a323 = null, $C5c4abc2c8b530967c9b7979bb7a282e = array())
            {
                global $Ec8602a5273865d9f596011654c13420;
                $A55ff9c1fcce8f45f315e85ad1224748 = array();
                $A55ff9c1fcce8f45f315e85ad1224748["streams"] = array();
                $d2e771d1b2111bd6bb33eaed79849fe2 = 1;
                foreach (D1B3A4DEcf28d243A9BA40Ac5d852F2B($Ec8602a5273865d9f596011654c13420->UserInfo["channel_ids"], $Ae886f5d81829eef36a27bed28105aeb) as $ae51a59cd6263a6ace2b89b0b9f7b742) {
                    $ae51a59cd6263a6ace2b89b0b9f7b742["number"] = App::$settings["channel_number_type"] == "bouquet" ? $d2e771d1b2111bd6bb33eaed79849fe2++ : (string) $ae51a59cd6263a6ace2b89b0b9f7b742["number"];
                    if (!(!empty($B233de535022ee8b7ca88c11d74817ee) && $ae51a59cd6263a6ace2b89b0b9f7b742["category_id"] != $B233de535022ee8b7ca88c11d74817ee)) {
                        if (!(empty($B233de535022ee8b7ca88c11d74817ee) && $ae51a59cd6263a6ace2b89b0b9f7b742["is_adult"] == 1)) {
                            if (!(!empty($ef116040f33659b3a4f8f287fab6a323) && !stristr($ae51a59cd6263a6ace2b89b0b9f7b742["stream_display_name"], $ef116040f33659b3a4f8f287fab6a323))) {
                                if (!(!empty($C5c4abc2c8b530967c9b7979bb7a282e["abc"]) && $C5c4abc2c8b530967c9b7979bb7a282e["abc"] != "*" && strtoupper(substr($ae51a59cd6263a6ace2b89b0b9f7b742["stream_display_name"], 0, 1)) != $C5c4abc2c8b530967c9b7979bb7a282e["abc"])) {
                                    if (!(!empty($C5c4abc2c8b530967c9b7979bb7a282e["genre"]) && $C5c4abc2c8b530967c9b7979bb7a282e["genre"] != "*" && $ae51a59cd6263a6ace2b89b0b9f7b742["category_id"] != $C5c4abc2c8b530967c9b7979bb7a282e["genre"])) {
                                        if (empty($c75c6e892526bf4353f3ad2e2c485a10)) {
                                            goto C08a76aea9781591cf85ba7062ec7489;
                                        }
                                        $c3ba56af5b8e7ff768d94bae45ece5ab = false;
                                        foreach ($Ae886f5d81829eef36a27bed28105aeb as $c7aa57f4dab805c3d1a3d6debd26f986) {
                                            if (!(!empty($Ec8602a5273865d9f596011654c13420->UserInfo["fav_channels"][$c7aa57f4dab805c3d1a3d6debd26f986]) && in_array($ae51a59cd6263a6ace2b89b0b9f7b742["id"], $Ec8602a5273865d9f596011654c13420->UserInfo["fav_channels"][$c7aa57f4dab805c3d1a3d6debd26f986]))) {
                                            }
                                            $c3ba56af5b8e7ff768d94bae45ece5ab = true;
                                            goto e6def823c57a71d48e333f4b3ba8076b;
                                        }
                                        e6def823c57a71d48e333f4b3ba8076b:
                                        if ($c3ba56af5b8e7ff768d94bae45ece5ab) {
                                            C08a76aea9781591cf85ba7062ec7489:
                                            $A55ff9c1fcce8f45f315e85ad1224748["streams"][$ae51a59cd6263a6ace2b89b0b9f7b742["id"]] = $ae51a59cd6263a6ace2b89b0b9f7b742;
                                            goto ba73364326936a7c1fbc5412b46fb9d8;
                                        }
                                        goto A8deabedd81a9cc5347198d61c2563f9;
                                    }
                                    goto A8deabedd81a9cc5347198d61c2563f9;
                                }
                                goto A8deabedd81a9cc5347198d61c2563f9;
                            }
                            goto A8deabedd81a9cc5347198d61c2563f9;
                        }
                        goto A8deabedd81a9cc5347198d61c2563f9;
                    }
                    ba73364326936a7c1fbc5412b46fb9d8:
                    A8deabedd81a9cc5347198d61c2563f9:
                }
                switch ($d0024e3250a8bb679173b3a79d83321a) {
                    case "name":
                        uasort($A55ff9c1fcce8f45f315e85ad1224748["streams"], "sortArrayStreamName");
                        goto ff068aa17dff01e93c32e7e2d07ca836;
                    case "top":
                        uasort($A55ff9c1fcce8f45f315e85ad1224748["streams"], "sortArrayStreamRating");
                        goto ff068aa17dff01e93c32e7e2d07ca836;
                    case "rating":
                        uasort($A55ff9c1fcce8f45f315e85ad1224748["streams"], "sortArrayStreamRating");
                        goto ff068aa17dff01e93c32e7e2d07ca836;
                    case "added":
                        uasort($A55ff9c1fcce8f45f315e85ad1224748["streams"], "sortArrayStreamAdded");
                        goto ff068aa17dff01e93c32e7e2d07ca836;
                    case "number":
                        uasort($A55ff9c1fcce8f45f315e85ad1224748["streams"], "sortArrayStreamNumber");
                        goto ff068aa17dff01e93c32e7e2d07ca836;
                }
                ff068aa17dff01e93c32e7e2d07ca836:
                return $A55ff9c1fcce8f45f315e85ad1224748;
            }
            function sortArrayStreamRating($e98ba35003ffb569cfdccd7c9f4ce431, $b1902521df5b798cbf9845e67680ca21)
            {
                if (isset($e98ba35003ffb569cfdccd7c9f4ce431["rating"])) {
                    goto c2e204ad882f6a8c8c78070b10f43af3;
                }
                if (!(!isset($e98ba35003ffb569cfdccd7c9f4ce431["movie_propeties"]) || !isset($b1902521df5b798cbf9845e67680ca21["movie_propeties"]))) {
                    if (!is_array($e98ba35003ffb569cfdccd7c9f4ce431["movie_propeties"])) {
                        $e98ba35003ffb569cfdccd7c9f4ce431 = json_decode($e98ba35003ffb569cfdccd7c9f4ce431["movie_propeties"], true);
                        goto F417f033b77699b3118a6d85c23a66e6;
                    }
                    $e98ba35003ffb569cfdccd7c9f4ce431 = $e98ba35003ffb569cfdccd7c9f4ce431["movie_propeties"];
                    F417f033b77699b3118a6d85c23a66e6:
                    if (!is_array($b1902521df5b798cbf9845e67680ca21["movie_propeties"])) {
                        $b1902521df5b798cbf9845e67680ca21 = json_decode($b1902521df5b798cbf9845e67680ca21["movie_propeties"], true);
                        goto C8b3097391761f14e3b83fd70a0d34f9;
                    }
                    $b1902521df5b798cbf9845e67680ca21 = $b1902521df5b798cbf9845e67680ca21["movie_propeties"];
                    C8b3097391761f14e3b83fd70a0d34f9:
                    c2e204ad882f6a8c8c78070b10f43af3:
                    if (!($e98ba35003ffb569cfdccd7c9f4ce431["rating"] == $b1902521df5b798cbf9845e67680ca21["rating"])) {
                        return $e98ba35003ffb569cfdccd7c9f4ce431["rating"] > $b1902521df5b798cbf9845e67680ca21["rating"] ? -1 : 1;
                    }
                    return 0;
                }
                return 0;
            }
            function sortArrayStreamAdded($e98ba35003ffb569cfdccd7c9f4ce431, $b1902521df5b798cbf9845e67680ca21)
            {
                $ffa2a8a93e0233c754e242dfd5418e89 = isset($e98ba35003ffb569cfdccd7c9f4ce431["added"]) ? "added" : "last_modified";
                if (is_numeric($e98ba35003ffb569cfdccd7c9f4ce431[$ffa2a8a93e0233c754e242dfd5418e89])) {
                    goto edf618968b2c979f9e22550793d96f86;
                }
                $e98ba35003ffb569cfdccd7c9f4ce431[$ffa2a8a93e0233c754e242dfd5418e89] = strtotime($e98ba35003ffb569cfdccd7c9f4ce431["added"]);
                edf618968b2c979f9e22550793d96f86:
                if (is_numeric($b1902521df5b798cbf9845e67680ca21[$ffa2a8a93e0233c754e242dfd5418e89])) {
                    goto d1d9063265d7ee445a44bf40d3f16654;
                }
                $b1902521df5b798cbf9845e67680ca21[$ffa2a8a93e0233c754e242dfd5418e89] = strtotime($b1902521df5b798cbf9845e67680ca21[$ffa2a8a93e0233c754e242dfd5418e89]);
                d1d9063265d7ee445a44bf40d3f16654:
                if (!($e98ba35003ffb569cfdccd7c9f4ce431[$ffa2a8a93e0233c754e242dfd5418e89] == $b1902521df5b798cbf9845e67680ca21[$ffa2a8a93e0233c754e242dfd5418e89])) {
                    return $e98ba35003ffb569cfdccd7c9f4ce431[$ffa2a8a93e0233c754e242dfd5418e89] > $b1902521df5b798cbf9845e67680ca21[$ffa2a8a93e0233c754e242dfd5418e89] ? -1 : 1;
                }
                return 0;
            }
            function sortArrayStreamNumber($e98ba35003ffb569cfdccd7c9f4ce431, $b1902521df5b798cbf9845e67680ca21)
            {
                if (!($e98ba35003ffb569cfdccd7c9f4ce431["number"] == $b1902521df5b798cbf9845e67680ca21["number"])) {
                    return $e98ba35003ffb569cfdccd7c9f4ce431["number"] < $b1902521df5b798cbf9845e67680ca21["number"] ? -1 : 1;
                }
                return 0;
            }
            function sortArrayStreamName($e98ba35003ffb569cfdccd7c9f4ce431, $b1902521df5b798cbf9845e67680ca21)
            {
                $ffa2a8a93e0233c754e242dfd5418e89 = isset($e98ba35003ffb569cfdccd7c9f4ce431["stream_display_name"]) ? "stream_display_name" : "title";
                return strcmp($e98ba35003ffb569cfdccd7c9f4ce431[$ffa2a8a93e0233c754e242dfd5418e89], $b1902521df5b798cbf9845e67680ca21[$ffa2a8a93e0233c754e242dfd5418e89]);
            }
            function A940C1A6d1FF06fa0e91005627f31122($B233de535022ee8b7ca88c11d74817ee = null, $c75c6e892526bf4353f3ad2e2c485a10 = null, $d0024e3250a8bb679173b3a79d83321a = null)
            {
                global $ace34b9ef659fb27b40bbe3317490508, $Ec8602a5273865d9f596011654c13420;
                $Abbc0a9d0b55f93fa77b79eeeee66893 = isset(App::$request["p"]) ? intval(App::$request["p"]) : 0;
                $cededb57b306f201bd3218eb58d83189 = 14;
                $Bc64a6743e9464994d1366e3119a6e0c = false;
                $A55ff9c1fcce8f45f315e85ad1224748 = A1d1B00d6cf0Bc98FA2cA35183664900(array("radio_streams"), $B233de535022ee8b7ca88c11d74817ee, $c75c6e892526bf4353f3ad2e2c485a10, $d0024e3250a8bb679173b3a79d83321a);
                $D22f1a0bbd662d65b64329e866c22bc3 = count($A55ff9c1fcce8f45f315e85ad1224748["streams"]);
                $e491c0726b323922e9bcc39e8f3481bd = 0;
                if (!($Abbc0a9d0b55f93fa77b79eeeee66893 == 0)) {
                    goto F8aedf9c8f609a1129434f68dba2fe90;
                }
                $Bc64a6743e9464994d1366e3119a6e0c = true;
                $Abbc0a9d0b55f93fa77b79eeeee66893 = ceil($e491c0726b323922e9bcc39e8f3481bd / $cededb57b306f201bd3218eb58d83189);
                if (!($Abbc0a9d0b55f93fa77b79eeeee66893 == 0)) {
                    goto E06573ed744ad33322187c0306a61b21;
                }
                $Abbc0a9d0b55f93fa77b79eeeee66893 = 1;
                E06573ed744ad33322187c0306a61b21:
                F8aedf9c8f609a1129434f68dba2fe90:
                $A55ff9c1fcce8f45f315e85ad1224748 = array_slice($A55ff9c1fcce8f45f315e85ad1224748["streams"], 0 * $cededb57b306f201bd3218eb58d83189, $cededb57b306f201bd3218eb58d83189);
                $b873800528c62505344c8736f06b180a = array();
                $B786dea0d5099bced1aca079470b539f = 1;
                foreach ($A55ff9c1fcce8f45f315e85ad1224748 as $Af1a37b9a908a173cf5980363b044d80 => $ae51a59cd6263a6ace2b89b0b9f7b742) {
                    if (App::$settings["mag_security"] == 0) {
                        if (!empty($ae51a59cd6263a6ace2b89b0b9f7b742["stream_source"])) {
                            $d466a2ae0e067ebfee7c7e9868c52af8 = $ace34b9ef659fb27b40bbe3317490508 . json_decode($ae51a59cd6263a6ace2b89b0b9f7b742["stream_source"], true)[0];
                            goto ab4b567777973b0de9c94c1954998701;
                        }
                        $d466a2ae0e067ebfee7c7e9868c52af8 = $ace34b9ef659fb27b40bbe3317490508 . App::$StreamingServers[SERVER_ID]["site_url"] . "{$Ec8602a5273865d9f596011654c13420->UserInfo["username"]}/{$Ec8602a5273865d9f596011654c13420->UserInfo["password"]}/{$ae51a59cd6263a6ace2b89b0b9f7b742["id"]}";
                        ab4b567777973b0de9c94c1954998701:
                        $Bbc721290433682db3afe9a419a861ab = 0;
                        goto Db9bcf76f0127c491dcf9511747c7649;
                    }
                    if (!empty($ae51a59cd6263a6ace2b89b0b9f7b742["stream_source"])) {
                        $d466a2ae0e067ebfee7c7e9868c52af8 = $ace34b9ef659fb27b40bbe3317490508 . "http://localhost/ch/{$ae51a59cd6263a6ace2b89b0b9f7b742["id"]}_" . json_decode($ae51a59cd6263a6ace2b89b0b9f7b742["stream_source"], true)[0];
                        goto C644f22e0bdd0b515a86097d78aefaf2;
                    }
                    $d466a2ae0e067ebfee7c7e9868c52af8 = $ace34b9ef659fb27b40bbe3317490508 . "http://localhost/ch/{$ae51a59cd6263a6ace2b89b0b9f7b742["id"]}_";
                    C644f22e0bdd0b515a86097d78aefaf2:
                    $Bbc721290433682db3afe9a419a861ab = 1;
                    Db9bcf76f0127c491dcf9511747c7649:
                    $b873800528c62505344c8736f06b180a[] = array("id" => $ae51a59cd6263a6ace2b89b0b9f7b742["id"], "name" => $ae51a59cd6263a6ace2b89b0b9f7b742["stream_display_name"], "number" => $B786dea0d5099bced1aca079470b539f++, "cmd" => $d466a2ae0e067ebfee7c7e9868c52af8, "count" => 0, "open" => 1, "use_http_tmp_link" => "1", "status" => 1, "volume_correction" => 0, "fav" => in_array($ae51a59cd6263a6ace2b89b0b9f7b742["id"], $Ec8602a5273865d9f596011654c13420->UserInfo["fav_channels"]["radio_streams"]) ? 1 : 0);
                }
                if ($Bc64a6743e9464994d1366e3119a6e0c) {
                    $E84b9dab5525b597923c8339cd77c7c7 = $Abbc0a9d0b55f93fa77b79eeeee66893;
                    $Fc0d1535ab47a048e737150fa2b8f42f = $e491c0726b323922e9bcc39e8f3481bd - ($Abbc0a9d0b55f93fa77b79eeeee66893 - 1) * $cededb57b306f201bd3218eb58d83189;
                    goto df391c7da277f4f3b9f51ce324f57e86;
                }
                $E84b9dab5525b597923c8339cd77c7c7 = 0;
                $Fc0d1535ab47a048e737150fa2b8f42f = 0;
                df391c7da277f4f3b9f51ce324f57e86:
                $output = array("js" => array("total_items" => $D22f1a0bbd662d65b64329e866c22bc3, "max_page_items" => $cededb57b306f201bd3218eb58d83189, "selected_item" => $Fc0d1535ab47a048e737150fa2b8f42f, "cur_page" => $E84b9dab5525b597923c8339cd77c7c7, "data" => $b873800528c62505344c8736f06b180a));
                return json_encode($output, JSON_PARTIAL_OUTPUT_ON_ERROR);
            }
            function ECBC0C6e46daBE991510F9Ba1E0eD241($B233de535022ee8b7ca88c11d74817ee = null, $d532a35916fb57da50e0d40b2e4e40a1 = false, $c75c6e892526bf4353f3ad2e2c485a10 = null, $d0024e3250a8bb679173b3a79d83321a = null)
            {
                global $Ec8602a5273865d9f596011654c13420, $ace34b9ef659fb27b40bbe3317490508;
                $Abbc0a9d0b55f93fa77b79eeeee66893 = isset(App::$request["p"]) ? intval(App::$request["p"]) : 0;
                $cededb57b306f201bd3218eb58d83189 = 14;
                $Bc64a6743e9464994d1366e3119a6e0c = false;
                $e491c0726b323922e9bcc39e8f3481bd = 0;
                if (!($Abbc0a9d0b55f93fa77b79eeeee66893 == 0)) {
                    goto d283df30153719a0073043846c1f9a75;
                }
                $Bc64a6743e9464994d1366e3119a6e0c = true;
                $Abbc0a9d0b55f93fa77b79eeeee66893 = ceil($e491c0726b323922e9bcc39e8f3481bd / $cededb57b306f201bd3218eb58d83189);
                if (!($Abbc0a9d0b55f93fa77b79eeeee66893 == 0)) {
                    goto d3eb7907316494c0462349d513daa176;
                }
                $Abbc0a9d0b55f93fa77b79eeeee66893 = 1;
                d3eb7907316494c0462349d513daa176:
                d283df30153719a0073043846c1f9a75:
                $A55ff9c1fcce8f45f315e85ad1224748 = a1D1B00d6CF0BC98fA2ca35183664900(array("live", "created_live"), $B233de535022ee8b7ca88c11d74817ee, $c75c6e892526bf4353f3ad2e2c485a10, $d0024e3250a8bb679173b3a79d83321a);
                if (!($Bc64a6743e9464994d1366e3119a6e0c && array_key_exists($Ec8602a5273865d9f596011654c13420->UserInfo["last_itv_id"], $A55ff9c1fcce8f45f315e85ad1224748["streams"]))) {
                    goto c7f4e2c540cafb501e6a8d8a957f16f2;
                }
                $e491c0726b323922e9bcc39e8f3481bd = array_search($Ec8602a5273865d9f596011654c13420->UserInfo["last_itv_id"], array_keys($A55ff9c1fcce8f45f315e85ad1224748["streams"])) + 1;
                $Abbc0a9d0b55f93fa77b79eeeee66893 = $e491c0726b323922e9bcc39e8f3481bd / $cededb57b306f201bd3218eb58d83189;
                if (!is_float($Abbc0a9d0b55f93fa77b79eeeee66893)) {
                    goto f64c08f918576263f6146a8bd441b9ff;
                }
                $Abbc0a9d0b55f93fa77b79eeeee66893 = ceil($Abbc0a9d0b55f93fa77b79eeeee66893);
                f64c08f918576263f6146a8bd441b9ff:
                if (!($Abbc0a9d0b55f93fa77b79eeeee66893 == 0)) {
                    goto A2e345f04af6cc6a32c5da04a3249561;
                }
                $Abbc0a9d0b55f93fa77b79eeeee66893 = 1;
                A2e345f04af6cc6a32c5da04a3249561:
                c7f4e2c540cafb501e6a8d8a957f16f2:
                $D22f1a0bbd662d65b64329e866c22bc3 = count($A55ff9c1fcce8f45f315e85ad1224748["streams"]);
                if (!$d532a35916fb57da50e0d40b2e4e40a1) {
                    $A55ff9c1fcce8f45f315e85ad1224748 = array_slice($A55ff9c1fcce8f45f315e85ad1224748["streams"], 0 * $cededb57b306f201bd3218eb58d83189, $cededb57b306f201bd3218eb58d83189);
                    goto a434beb21b1b1a6a6fef1eec5075dd41;
                }
                $A55ff9c1fcce8f45f315e85ad1224748 = $A55ff9c1fcce8f45f315e85ad1224748["streams"];
                a434beb21b1b1a6a6fef1eec5075dd41:
                $cc5010b1dfc4845e6defa59a4e53208c = '';
                $b873800528c62505344c8736f06b180a = array();
                $B786dea0d5099bced1aca079470b539f = 1;
                foreach ($A55ff9c1fcce8f45f315e85ad1224748 as $Af1a37b9a908a173cf5980363b044d80 => $ae51a59cd6263a6ace2b89b0b9f7b742) {
                    if (App::$settings["mag_security"] == 0) {
                        if (!empty($ae51a59cd6263a6ace2b89b0b9f7b742["stream_source"])) {
                            $d466a2ae0e067ebfee7c7e9868c52af8 = $ace34b9ef659fb27b40bbe3317490508 . json_decode($ae51a59cd6263a6ace2b89b0b9f7b742["stream_source"], true)[0];
                            goto a2784446cf97ba4c17876803bc9d2258;
                        }
                        $d466a2ae0e067ebfee7c7e9868c52af8 = $ace34b9ef659fb27b40bbe3317490508 . App::$StreamingServers[SERVER_ID]["site_url"] . "{$Ec8602a5273865d9f596011654c13420->UserInfo["username"]}/{$Ec8602a5273865d9f596011654c13420->UserInfo["password"]}/{$ae51a59cd6263a6ace2b89b0b9f7b742["id"]}";
                        a2784446cf97ba4c17876803bc9d2258:
                        $Bbc721290433682db3afe9a419a861ab = 0;
                        goto E7cf7e9252682f099d402c58568f7153;
                    }
                    if (!empty($ae51a59cd6263a6ace2b89b0b9f7b742["stream_source"])) {
                        $d466a2ae0e067ebfee7c7e9868c52af8 = $ace34b9ef659fb27b40bbe3317490508 . "http://localhost/ch/{$ae51a59cd6263a6ace2b89b0b9f7b742["id"]}_" . json_decode($ae51a59cd6263a6ace2b89b0b9f7b742["stream_source"], true)[0];
                        goto A48f98aef17063e3f475a6d5e9493e60;
                    }
                    $d466a2ae0e067ebfee7c7e9868c52af8 = $ace34b9ef659fb27b40bbe3317490508 . "http://localhost/ch/{$ae51a59cd6263a6ace2b89b0b9f7b742["id"]}_";
                    A48f98aef17063e3f475a6d5e9493e60:
                    $Bbc721290433682db3afe9a419a861ab = 1;
                    E7cf7e9252682f099d402c58568f7153:
                    $b873800528c62505344c8736f06b180a[] = array("id" => $ae51a59cd6263a6ace2b89b0b9f7b742["id"], "name" => $ae51a59cd6263a6ace2b89b0b9f7b742["stream_display_name"], "number" => (string) $ae51a59cd6263a6ace2b89b0b9f7b742["number"], "censored" => (int) $ae51a59cd6263a6ace2b89b0b9f7b742["is_adult"], "cmd" => $d466a2ae0e067ebfee7c7e9868c52af8, "cost" => "0", "count" => "0", "status" => 1, "hd" => 0, "tv_genre_id" => $ae51a59cd6263a6ace2b89b0b9f7b742["category_id"], "base_ch" => "1", "hd" => "0", "xmltv_id" => !empty($ae51a59cd6263a6ace2b89b0b9f7b742["channel_id"]) ? $ae51a59cd6263a6ace2b89b0b9f7b742["channel_id"] : '', "service_id" => '', "bonus_ch" => "0", "volume_correction" => "0", "mc_cmd" => '', "enable_tv_archive" => $ae51a59cd6263a6ace2b89b0b9f7b742["tv_archive_duration"] > 0 ? 1 : 0, "wowza_tmp_link" => "0", "wowza_dvr" => "0", "use_http_tmp_link" => "1", "monitoring_status" => "1", "enable_monitoring" => "0", "enable_wowza_load_balancing" => "0", "cmd_1" => '', "cmd_2" => '', "cmd_3" => '', "logo" => $ae51a59cd6263a6ace2b89b0b9f7b742["stream_icon"], "correct_time" => "0", "nimble_dvr" => "0", "allow_pvr" => (int) $ae51a59cd6263a6ace2b89b0b9f7b742["allow_record"], "allow_local_pvr" => (int) $ae51a59cd6263a6ace2b89b0b9f7b742["allow_record"], "allow_remote_pvr" => 0, "modified" => '', "allow_local_timeshift" => "1", "nginx_secure_link" => "1", "tv_archive_duration" => $ae51a59cd6263a6ace2b89b0b9f7b742["tv_archive_duration"] > 0 ? $ae51a59cd6263a6ace2b89b0b9f7b742["tv_archive_duration"] * 24 : 0, "locked" => 0, "lock" => (int) $ae51a59cd6263a6ace2b89b0b9f7b742["is_adult"], "fav" => in_array($ae51a59cd6263a6ace2b89b0b9f7b742["id"], $Ec8602a5273865d9f596011654c13420->UserInfo["fav_channels"]["live"]) ? 1 : 0, "archive" => $ae51a59cd6263a6ace2b89b0b9f7b742["tv_archive_duration"] > 0 ? 1 : 0, "genres_str" => '', "cur_playing" => "[No channel info]", "epg" => array(), "open" => 1, "cmds" => array(array("id" => (string) $ae51a59cd6263a6ace2b89b0b9f7b742["id"], "ch_id" => (string) $ae51a59cd6263a6ace2b89b0b9f7b742["id"], "priority" => "0", "url" => $d466a2ae0e067ebfee7c7e9868c52af8, "status" => "1", "use_http_tmp_link" => "1", "wowza_tmp_link" => "0", "user_agent_filter" => '', "use_load_balancing" => "0", "changed" => '', "enable_monitoring" => "0", "enable_balancer_monitoring" => "0", "nginx_secure_link" => "1", "flussonic_tmp_link" => "0")), "use_load_balancing" => 0, "pvr" => (int) $ae51a59cd6263a6ace2b89b0b9f7b742["allow_record"]);
                }
                if ($Bc64a6743e9464994d1366e3119a6e0c) {
                    $E84b9dab5525b597923c8339cd77c7c7 = $Abbc0a9d0b55f93fa77b79eeeee66893;
                    $Fc0d1535ab47a048e737150fa2b8f42f = $e491c0726b323922e9bcc39e8f3481bd - ($Abbc0a9d0b55f93fa77b79eeeee66893 - 1) * $cededb57b306f201bd3218eb58d83189;
                    goto F892e98ec04ad73f3babfb606cf58c6c;
                }
                $E84b9dab5525b597923c8339cd77c7c7 = 0;
                $Fc0d1535ab47a048e737150fa2b8f42f = 0;
                F892e98ec04ad73f3babfb606cf58c6c:
                $output = array("js" => array("total_items" => $D22f1a0bbd662d65b64329e866c22bc3, "max_page_items" => $cededb57b306f201bd3218eb58d83189, "selected_item" => $Fc0d1535ab47a048e737150fa2b8f42f, "cur_page" => $d532a35916fb57da50e0d40b2e4e40a1 ? 0 : $E84b9dab5525b597923c8339cd77c7c7, "data" => $b873800528c62505344c8736f06b180a));
                return json_encode($output, JSON_PARTIAL_OUTPUT_ON_ERROR);
            }
            function EB8bCf29C11884029235BFAdcC2f0791()
            {
                global $dded9c4b3ef279e7c0b5a0d9168aa0e5;
                $Abbc0a9d0b55f93fa77b79eeeee66893 = intval(App::$request["p"]);
                $dae53a981b9f73e4eb3ad9145b3a0ab6 = intval(App::$request["ch_id"]);
                $F0fef45f065d4a1110cc8343a8b9f0c1 = App::$request["from"];
                $F0aa8e49ae99d98f6681a105a81710b6 = App::$request["to"];
                $Bc64a6743e9464994d1366e3119a6e0c = false;
                $cededb57b306f201bd3218eb58d83189 = 10;
                $A55ff9c1fcce8f45f315e85ad1224748 = A1d1B00D6cf0Bc98FA2Ca35183664900(array("live", "created_live"));
                $Fabb506262a752569fd879f2c9f1c9eb = array_keys($A55ff9c1fcce8f45f315e85ad1224748["streams"]);
                $E9a254f28e454a8fca99c7f275b4fb9d = array_values($A55ff9c1fcce8f45f315e85ad1224748["streams"]);
                $A2295c39fa4669668ab0fb22273f74fd = array();
                $C6339d986c8ae048bb18e285abaedde2 = null;
                App::$ipTV_db->query("SELECT * FROM `streams` WHERE `id` = '%d'", $dae53a981b9f73e4eb3ad9145b3a0ab6);
                $channel = App::$ipTV_db->c7Aa024a27cF4472e107A8152E52C9b6();
                if (!empty($channel)) {
                    goto A589b26c706eea29267b23018872ac2a;
                }
                foreach ($A2295c39fa4669668ab0fb22273f74fd as $bc3373c2c19a4f0973122cfa1d84db11) {
                    if (!($bc3373c2c19a4f0973122cfa1d84db11["id"] == $dae53a981b9f73e4eb3ad9145b3a0ab6)) {
                    }
                    $channel = $bc3373c2c19a4f0973122cfa1d84db11;
                    goto f2b24f1103306656f92106588b6b20e2;
                }
                f2b24f1103306656f92106588b6b20e2:
                $B786dea0d5099bced1aca079470b539f = 0;
                c265a51f7367992f9d7752afb1aa3c86:
                if (!($B786dea0d5099bced1aca079470b539f < count($A2295c39fa4669668ab0fb22273f74fd))) {
                    if (!($C6339d986c8ae048bb18e285abaedde2 != null)) {
                        goto Bf4f9c9b610e7be892946cae176fcc79;
                    }
                    $C6339d986c8ae048bb18e285abaedde2++;
                    Bf4f9c9b610e7be892946cae176fcc79:
                    A589b26c706eea29267b23018872ac2a:
                    $a5e1074275e9ceda3d02eff449a4486a = count($Fabb506262a752569fd879f2c9f1c9eb);
                    $Bd9ccbc5dc6907d552fb346bddde46ee = $a5e1074275e9ceda3d02eff449a4486a;
                    $a5e1074275e9ceda3d02eff449a4486a += count($A2295c39fa4669668ab0fb22273f74fd);
                    $e491c0726b323922e9bcc39e8f3481bd = array_search($channel["id"], $Fabb506262a752569fd879f2c9f1c9eb);
                    $e491c0726b323922e9bcc39e8f3481bd += $C6339d986c8ae048bb18e285abaedde2;
                    if (!($e491c0726b323922e9bcc39e8f3481bd === false)) {
                        goto dda950e87cfc15e2f141b83f6ed48cab;
                    }
                    $e491c0726b323922e9bcc39e8f3481bd = 0;
                    dda950e87cfc15e2f141b83f6ed48cab:
                    if (!($Abbc0a9d0b55f93fa77b79eeeee66893 == 0)) {
                        goto c2b75efa6d30edd15dad1059aabaeb5e;
                    }
                    $Bc64a6743e9464994d1366e3119a6e0c = true;
                    $Abbc0a9d0b55f93fa77b79eeeee66893 = ceil($e491c0726b323922e9bcc39e8f3481bd / $cededb57b306f201bd3218eb58d83189);
                    if (!($Abbc0a9d0b55f93fa77b79eeeee66893 == 0)) {
                        goto f04823a92387fc98f2bb9d278e897d9c;
                    }
                    $Abbc0a9d0b55f93fa77b79eeeee66893 == 1;
                    f04823a92387fc98f2bb9d278e897d9c:
                    c2b75efa6d30edd15dad1059aabaeb5e:
                    $e491c0726b323922e9bcc39e8f3481bd -= ($Abbc0a9d0b55f93fa77b79eeeee66893 - 1) * $cededb57b306f201bd3218eb58d83189;
                    $a1f789e73f1f0f153eeec22d8d22cfc6 = array_slice($E9a254f28e454a8fca99c7f275b4fb9d, ($Abbc0a9d0b55f93fa77b79eeeee66893 - 1) * $cededb57b306f201bd3218eb58d83189, $cededb57b306f201bd3218eb58d83189);
                    $cbf3bd0c92bb2956668c87fb637387ad = ceil($Bd9ccbc5dc6907d552fb346bddde46ee / $cededb57b306f201bd3218eb58d83189);
                    if (!(count($a1f789e73f1f0f153eeec22d8d22cfc6) < $cededb57b306f201bd3218eb58d83189)) {
                        goto E747a9044af0287e0129e43f14a7541b;
                    }
                    if ($Abbc0a9d0b55f93fa77b79eeeee66893 == $cbf3bd0c92bb2956668c87fb637387ad) {
                        $A4063d50578ccc16cbbcd16b19142095 = $cededb57b306f201bd3218eb58d83189 - $Bd9ccbc5dc6907d552fb346bddde46ee % $cededb57b306f201bd3218eb58d83189;
                        goto D097d2de079a9b0b2d8c43d2e12abb0b;
                    }
                    $A4063d50578ccc16cbbcd16b19142095 = $cededb57b306f201bd3218eb58d83189;
                    D097d2de079a9b0b2d8c43d2e12abb0b:
                    if ($Abbc0a9d0b55f93fa77b79eeeee66893 > $cbf3bd0c92bb2956668c87fb637387ad) {
                        $F85bb2eee1dff0fe3e758f73be3045ad = ($Abbc0a9d0b55f93fa77b79eeeee66893 - $cbf3bd0c92bb2956668c87fb637387ad - 1) * $cededb57b306f201bd3218eb58d83189 + ($cededb57b306f201bd3218eb58d83189 - $Bd9ccbc5dc6907d552fb346bddde46ee % $cededb57b306f201bd3218eb58d83189);
                        goto f62627b808f6382bf5fd08a8e727261c;
                    }
                    $F85bb2eee1dff0fe3e758f73be3045ad = 0;
                    f62627b808f6382bf5fd08a8e727261c:
                    if (!isset(App::$request["p"])) {
                        goto adabf16266d88b1408065e52793b8741;
                    }
                    $A2295c39fa4669668ab0fb22273f74fd = array_splice($A2295c39fa4669668ab0fb22273f74fd, $F85bb2eee1dff0fe3e758f73be3045ad, $A4063d50578ccc16cbbcd16b19142095);
                    adabf16266d88b1408065e52793b8741:
                    $a1f789e73f1f0f153eeec22d8d22cfc6 = array_merge($a1f789e73f1f0f153eeec22d8d22cfc6, $A2295c39fa4669668ab0fb22273f74fd);
                    E747a9044af0287e0129e43f14a7541b:
                    $a71d090e6cd4cf4f6c70e9733f94ce0b = array();
                    $B786dea0d5099bced1aca079470b539f = 0;
                    Cb5bc15500f49aaee8773010899cc75b:
                    if (!($B786dea0d5099bced1aca079470b539f < count($a1f789e73f1f0f153eeec22d8d22cfc6))) {
                        if (empty($a71d090e6cd4cf4f6c70e9733f94ce0b)) {
                            goto e3d11e3b65f28e3922f693bac4cf4f17;
                        }
                        App::$ipTV_db->query("\r\n                SELECT t1.id as stream_id,t2.*\r\n                FROM `streams` t1\r\n                LEFT JOIN `epg_data` t2 ON t1.channel_id = t2.channel_id AND t2.`start` >= '%s' AND t2.`end` <= '%s'\r\n                WHERE t1.id IN(" . implode(",", $a71d090e6cd4cf4f6c70e9733f94ce0b) . ")", $F0fef45f065d4a1110cc8343a8b9f0c1, $F0aa8e49ae99d98f6681a105a81710b6);
                        $c0b490c259e4a1248722248fd61e322b = App::$ipTV_db->F72278FcECD1536556C4ccE92E91446F(true, "stream_id");
                        $Ab8badec45ac76a69b6af77459594b6e = array();
                        $B786dea0d5099bced1aca079470b539f = 0;
                        $output = array();
                        $d2e771d1b2111bd6bb33eaed79849fe2 = 0;
                        foreach ($a71d090e6cd4cf4f6c70e9733f94ce0b as $a9c5934acd47be1fce9633a3a7c3a291) {
                            $channel = $A55ff9c1fcce8f45f315e85ad1224748["streams"][$a9c5934acd47be1fce9633a3a7c3a291];
                            $Ab8badec45ac76a69b6af77459594b6e[$d2e771d1b2111bd6bb33eaed79849fe2] = array("ch_id" => $a9c5934acd47be1fce9633a3a7c3a291, "name" => $channel["stream_display_name"], "number" => (string) $B786dea0d5099bced1aca079470b539f++, "ch_type" => isset($channel["type"]) && $channel["type"] == "dvb" ? "dvb" : "iptv", "dvb_id" => isset($channel["type"]) && $channel["type"] == "dvb" ? $channel["dvb_id"] : null, "epg_container" => 1);
                            $Afd39de8693866d4363c9ecd96d0381b = array();
                            $bbbaff265d14f52acd3acfae5028c7e3 = 0;
                            $E47661722dd0a4bb511ed48db7ece503 = App::B026322780CD85A24eA2aCDeB00311F8($dded9c4b3ef279e7c0b5a0d9168aa0e5);
                            foreach (CC30C3155c8A0919cecf7AF6a95CDf78($c0b490c259e4a1248722248fd61e322b, "stream_id", $a9c5934acd47be1fce9633a3a7c3a291) as $b2978c77e40a7a7291016c1b4b90badf) {
                                if (empty($b2978c77e40a7a7291016c1b4b90badf["epg_id"])) {
                                    goto F470cf9a1fe34e7ec7b1894f75696cdb;
                                }
                                $fb6ada3db36317805fe41ffa0b838950 = new DateTime($b2978c77e40a7a7291016c1b4b90badf["start"]);
                                $fb6ada3db36317805fe41ffa0b838950->modify("{$E47661722dd0a4bb511ed48db7ece503} seconds");
                                $Bb1bf8dabba51a6510736c4cd7d75586 = new DateTime($b2978c77e40a7a7291016c1b4b90badf["end"]);
                                $Bb1bf8dabba51a6510736c4cd7d75586->modify("{$E47661722dd0a4bb511ed48db7ece503} seconds");
                                $Afd39de8693866d4363c9ecd96d0381b[$bbbaff265d14f52acd3acfae5028c7e3]["id"] = $b2978c77e40a7a7291016c1b4b90badf["id"];
                                $Afd39de8693866d4363c9ecd96d0381b[$bbbaff265d14f52acd3acfae5028c7e3]["ch_id"] = $b2978c77e40a7a7291016c1b4b90badf["stream_id"];
                                $Afd39de8693866d4363c9ecd96d0381b[$bbbaff265d14f52acd3acfae5028c7e3]["time"] = $fb6ada3db36317805fe41ffa0b838950->format("Y-m-d H:i:s");
                                $Afd39de8693866d4363c9ecd96d0381b[$bbbaff265d14f52acd3acfae5028c7e3]["time_to"] = $Bb1bf8dabba51a6510736c4cd7d75586->format("Y-m-d H:i:s");
                                $Afd39de8693866d4363c9ecd96d0381b[$bbbaff265d14f52acd3acfae5028c7e3]["duration"] = $Bb1bf8dabba51a6510736c4cd7d75586->getTimestamp() - $fb6ada3db36317805fe41ffa0b838950->getTimestamp();
                                $Afd39de8693866d4363c9ecd96d0381b[$bbbaff265d14f52acd3acfae5028c7e3]["name"] = base64_decode($b2978c77e40a7a7291016c1b4b90badf["title"]);
                                $Afd39de8693866d4363c9ecd96d0381b[$bbbaff265d14f52acd3acfae5028c7e3]["descr"] = base64_decode($b2978c77e40a7a7291016c1b4b90badf["description"]);
                                $Afd39de8693866d4363c9ecd96d0381b[$bbbaff265d14f52acd3acfae5028c7e3]["real_id"] = $b2978c77e40a7a7291016c1b4b90badf["stream_id"] . "_" . $fb6ada3db36317805fe41ffa0b838950->getTimestamp();
                                $Afd39de8693866d4363c9ecd96d0381b[$bbbaff265d14f52acd3acfae5028c7e3]["category"] = '';
                                $Afd39de8693866d4363c9ecd96d0381b[$bbbaff265d14f52acd3acfae5028c7e3]["director"] = '';
                                $Afd39de8693866d4363c9ecd96d0381b[$bbbaff265d14f52acd3acfae5028c7e3]["actor"] = '';
                                $Afd39de8693866d4363c9ecd96d0381b[$bbbaff265d14f52acd3acfae5028c7e3]["start_timestamp"] = $fb6ada3db36317805fe41ffa0b838950->getTimestamp();
                                $Afd39de8693866d4363c9ecd96d0381b[$bbbaff265d14f52acd3acfae5028c7e3]["stop_timestamp"] = $Bb1bf8dabba51a6510736c4cd7d75586->getTimestamp();
                                $Afd39de8693866d4363c9ecd96d0381b[$bbbaff265d14f52acd3acfae5028c7e3]["t_time"] = $fb6ada3db36317805fe41ffa0b838950->format("h:i A");
                                $Afd39de8693866d4363c9ecd96d0381b[$bbbaff265d14f52acd3acfae5028c7e3]["t_time_to"] = $Bb1bf8dabba51a6510736c4cd7d75586->format("h:i A");
                                $Afd39de8693866d4363c9ecd96d0381b[$bbbaff265d14f52acd3acfae5028c7e3]["display_duration"] = $Bb1bf8dabba51a6510736c4cd7d75586->getTimestamp() - $fb6ada3db36317805fe41ffa0b838950->getTimestamp();
                                $Afd39de8693866d4363c9ecd96d0381b[$bbbaff265d14f52acd3acfae5028c7e3]["larr"] = 0;
                                $Afd39de8693866d4363c9ecd96d0381b[$bbbaff265d14f52acd3acfae5028c7e3]["rarr"] = 0;
                                $Afd39de8693866d4363c9ecd96d0381b[$bbbaff265d14f52acd3acfae5028c7e3]["mark_rec"] = 0;
                                $Afd39de8693866d4363c9ecd96d0381b[$bbbaff265d14f52acd3acfae5028c7e3]["mark_memo"] = 0;
                                $Afd39de8693866d4363c9ecd96d0381b[$bbbaff265d14f52acd3acfae5028c7e3]["mark_archive"] = 0;
                                $Afd39de8693866d4363c9ecd96d0381b[$bbbaff265d14f52acd3acfae5028c7e3++]["on_date"] = $fb6ada3db36317805fe41ffa0b838950->format("l d.m.Y");
                                F470cf9a1fe34e7ec7b1894f75696cdb:
                            }
                            $Ab8badec45ac76a69b6af77459594b6e[$d2e771d1b2111bd6bb33eaed79849fe2++]["epg"] = $Afd39de8693866d4363c9ecd96d0381b;
                        }
                        e3d11e3b65f28e3922f693bac4cf4f17:
                        $De7fa750348ae8ab666b0394c4fe4b0a = array();
                        $ef94f7ac09bf4b3824d258870f27c03d = strtotime($F0fef45f065d4a1110cc8343a8b9f0c1);
                        $dacc9bc676555f3cb40d19374d45751b = strtotime($F0aa8e49ae99d98f6681a105a81710b6);
                        $De7fa750348ae8ab666b0394c4fe4b0a[] = date("H:i", $ef94f7ac09bf4b3824d258870f27c03d);
                        $De7fa750348ae8ab666b0394c4fe4b0a[] = date("H:i", $ef94f7ac09bf4b3824d258870f27c03d + 1800);
                        $De7fa750348ae8ab666b0394c4fe4b0a[] = date("H:i", $ef94f7ac09bf4b3824d258870f27c03d + 3600);
                        $De7fa750348ae8ab666b0394c4fe4b0a[] = date("H:i", $ef94f7ac09bf4b3824d258870f27c03d + 5400);
                        if (!in_array($dae53a981b9f73e4eb3ad9145b3a0ab6, $a71d090e6cd4cf4f6c70e9733f94ce0b)) {
                            $e491c0726b323922e9bcc39e8f3481bd = 0;
                            $Abbc0a9d0b55f93fa77b79eeeee66893 = 0;
                            goto a97691b15c6a8d995828a2a9551477ed;
                        }
                        $e491c0726b323922e9bcc39e8f3481bd = array_search($dae53a981b9f73e4eb3ad9145b3a0ab6, $a71d090e6cd4cf4f6c70e9733f94ce0b) + 1;
                        a97691b15c6a8d995828a2a9551477ed:
                        return array("total_items" => $a5e1074275e9ceda3d02eff449a4486a, "max_page_items" => $cededb57b306f201bd3218eb58d83189, "cur_page" => $Abbc0a9d0b55f93fa77b79eeeee66893, "selected_item" => $e491c0726b323922e9bcc39e8f3481bd, "time_marks" => $De7fa750348ae8ab666b0394c4fe4b0a, "from_ts" => $ef94f7ac09bf4b3824d258870f27c03d, "to_ts" => $dacc9bc676555f3cb40d19374d45751b, "data" => $Ab8badec45ac76a69b6af77459594b6e);
                    }
                    $a71d090e6cd4cf4f6c70e9733f94ce0b[] = $a1f789e73f1f0f153eeec22d8d22cfc6[$B786dea0d5099bced1aca079470b539f]["id"];
                    $B786dea0d5099bced1aca079470b539f++;
                    goto Cb5bc15500f49aaee8773010899cc75b;
                }
                if (!($A2295c39fa4669668ab0fb22273f74fd[$B786dea0d5099bced1aca079470b539f]["id"] == $dae53a981b9f73e4eb3ad9145b3a0ab6)) {
                    goto C82d64438879f03f5a10e4a83d0789b8;
                }
                $channel = $A2295c39fa4669668ab0fb22273f74fd[$B786dea0d5099bced1aca079470b539f];
                $C6339d986c8ae048bb18e285abaedde2 = $B786dea0d5099bced1aca079470b539f;
                C82d64438879f03f5a10e4a83d0789b8:
                $B786dea0d5099bced1aca079470b539f++;
                goto c265a51f7367992f9d7752afb1aa3c86;
            }
            function C0686A491701b5084FeAce4fb98857e4()
            {
                if (function_exists("getallheaders")) {
                    $F07cb10d0f30032dbf7fa0ea87a20152 = getallheaders();
                    goto Bdf6428fc56b9aa0e7681f804afcd2e4;
                }
                $F07cb10d0f30032dbf7fa0ea87a20152 = dd197E4c194ac57Cd7712Ca2a6f11064();
                Bdf6428fc56b9aa0e7681f804afcd2e4:
                if ($F07cb10d0f30032dbf7fa0ea87a20152) {
                    $a26325b3e17b9f615f71151fdf21dea8 = !empty($F07cb10d0f30032dbf7fa0ea87a20152["Authorization"]) ? $F07cb10d0f30032dbf7fa0ea87a20152["Authorization"] : null;
                    if (!($a26325b3e17b9f615f71151fdf21dea8 && preg_match("/Bearer\\s+(.*)\$/i", $a26325b3e17b9f615f71151fdf21dea8, $Ac0d5eb3c99bf4dbcf00f5a485760267))) {
                        return null;
                    }
                    return trim($Ac0d5eb3c99bf4dbcf00f5a485760267[1]);
                }
                return null;
            }
            function DD197e4c194AC57CD7712ca2A6f11064()
            {
                $F07cb10d0f30032dbf7fa0ea87a20152 = array();
                foreach ($_SERVER as $E34740ba89e350119b2a559ea5a9e056 => $f3a041fafed3a08df56cc1e6b564b65d) {
                    if (!(substr($E34740ba89e350119b2a559ea5a9e056, 0, 5) == "HTTP_")) {
                        goto Fd34259891b0a998c48b2848f565bf22;
                    }
                    $F07cb10d0f30032dbf7fa0ea87a20152[str_replace(" ", "-", ucwords(strtolower(str_replace("_", " ", substr($E34740ba89e350119b2a559ea5a9e056, 5)))))] = $f3a041fafed3a08df56cc1e6b564b65d;
                    Fd34259891b0a998c48b2848f565bf22:
                }
                return $F07cb10d0f30032dbf7fa0ea87a20152;
            }
            // [PHPDeobfuscator] Implied script end
            return;
        }
        exit;
    }
    die(json_encode(array("js" => array("token" => empty($Ec8602a5273865d9f596011654c13420->TokenAuth) ? strtoupper(md5(uniqid(rand(), true))) : $Ec8602a5273865d9f596011654c13420->TokenAuth))));
}
exit;
