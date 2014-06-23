<?php
class BlogController extends Yaf_Controller_Abstract {
    public function listAction() {
        $this->getView()->assign("content", "helloworld!");
    }
}
