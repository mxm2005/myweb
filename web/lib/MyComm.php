<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Administrator
 * Date: 12-12-5
 * Time: 下午2:41
 * To change this template use File | Settings | File Templates.
 */
class MyComm
{
    static function to_json_str($str) {
        //url编码,避免json_encode将中文转为unicode
        $reVal = urlencode($str);
        $reVal = json_encode($reVal);
        //url解码,转完json后将各属性返回,确保对象属性不变
        $reVal = urldecode($reVal);
        return urldecode($reVal);
    }

    static function to_json_array($arr) {
        //url编码,避免json_encode将中文转为unicode
        reset($arr);
        while (list($key, $val) = each($arr)) {
            $key=urlencode($key);
            $val=urlencode($val);
        }
        $reVal = $arr;
        //url解码,转完json后将各属性返回,确保对象属性不变
        $reVal = json_encode($reVal);
        $reVal =urldecode($reVal);
        return $reVal;
    }

    /*
    字符串GBK转码为UTF-8，数字转换为数字。
    */
    static function gbk_to_utf8($s){
        if(is_numeric($s)) {
            return intval($s);
        } else {
            return iconv("GBK","UTF-8",$s);
        }
    }
    /*
    批量处理gbk->utf-8
    */
    static function array_to_utf8($s) {
        if(is_array($s)) {
            foreach($s as $key => $val) {
                $s[$key] = icon_to_utf8($val);
            }
        } else {
            $s = array_to_utf8($s);
        }
        return $s;
    }

}
