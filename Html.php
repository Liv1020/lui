<?php
/**
 * ui 工具
 * User: Liv
 * Date: 15/4/27
 * Time: 下午7:52
 */

namespace lui;


class Html extends BaseHtml {

    /**
     * 删除配置，并获得该配置信息
     * @param $options
     * @param $name
     * @param null $default
     * @return mixed|null
     */
    public function removeOption(&$options,$name,$default = null){

        return ArrayHelper::remove($options,$name,$default);
    }

    /**
     * 获取配置信息
     * @param $options
     * @param $name
     * @param null $default
     * @return mixed
     */
    public function getOption($options,$name,$default = null){

        return ArrayHelper::getValue($options,$name,$default);
    }
}