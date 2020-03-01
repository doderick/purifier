<?php
/*
 * @Author: doderick
 * @Date: 2020-02-23 23:47:07
 * @LastEditTime: 2020-03-01 21:54:07
 * @LastEditors: doderick
 * @Description: 定义common函数
 */

if (!function_exists('clean')) {
    function clean($dirty, $config = null) {
        return app('purifier')->clean($dirty, $config);
    }
}
