<?php
/**
 * User: Liv
 * Date: 15/4/28
 * Time: 下午12:02
 */

namespace lui;


class Assets {

    public $packages;

    public function __construct($packages)
    {
        $this->packages = $packages;
    }

    public function registerPackage($name){

        if(isset($this->packages[$name])){
            $baseUrl = ArrayHelper::getValue($this->packages[$name],'baseUrl');
            $js = ArrayHelper::getValue($this->packages[$name],'js');
            $css = ArrayHelper::getValue($this->packages[$name],'css');
            $depends = ArrayHelper::getValue($this->packages[$name],'depends');

            //首先注册depends
            foreach((array)$depends as $name){
                $this->registerPackage($name);
            }

            //注册css在header
            foreach((array)$css as $name){
                echo Html::cssFile($baseUrl . $name);
            }

            //注册js在header
            foreach((array)$js as $name){
                echo Html::jsFile($baseUrl . $name);
            }
        }
    }
}