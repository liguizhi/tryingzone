<?php
class IndexController extends Yaf_Controller_Abstract {
    public function indexAction() {
        var_dump("aaaa");
        $this->getView()->assign("content", "helloworld!");
    }
}
