<?php

/**
 * 初始化类
 * 该类执行应用项目所需的初始化工作，会在调用控制器之前执行，方法名称开始部分必须包含“_init”
 *
 */
class Bootstrap extends Yaf_Bootstrap_Abstract
{
    /**
     * 初始化http协议的头信息
     */
    public function _initHeader()
    {
        //设置输出流字符编码
        header('Content-type: text/html;charset=utf-8');

    }

    /**
     * 注册配置对象
     */
    public function _initBootstrap()
    {
        Yaf_Registry::set('g_config', Yaf_Application::app()->getConfig());

    }
    /**
     * 注册插件
     * @param Yaf_Dispatcher $dispatcher
     */
    public function _initPlugin(Yaf_Dispatcher $dispatcher) {
        //注册一个插件
//        $objSellerPlugin = new DomainPlugin();
//        $dispatcher->registerPlugin($objSellerPlugin);
    }

    /**
     * 初始化路由协议
     * @param Yaf_Dispatcher $dispatcher
     */
    public function _initRoute(Yaf_Dispatcher $dispatcher)
    {
//        $router = $dispatcher->getRouter();
//        $router->addConfig(Yaf_Application::app()->getConfig()->routes);
    }

    /**
     * 初始化模板引擎
     * 默认使用yaf框架提供的简单模板引擎，Core_System_View是对Yaf_View_Simple的封装
     */
    public function _initView(Yaf_Dispatcher $dispatcher)
    {
//        //是否关闭模板自动渲染
//        if(isset(Yaf_Application::app()->getConfig()->view->disableView) && Yaf_Application::app()->getConfig()->view->disableView == 1){
//            $dispatcher->disableView();
//        }
//        //使用application.ini配置文件view.engine定义的模板引擎
//        $engine = isset(Yaf_Application::app()->getConfig()->view->engine) ? Yaf_Application::app()->getConfig()->view->engine : '';
//
//        if($engine == 'smarty'){
//            $smartyDirArr = array();
//            if(Yaf_Application::app()->getConfig()->smarty){
//                $smartyDirArr = Yaf_Application::app()->getConfig()->smarty->toArray();
//            }
//            $view         = new Kfz_System_Smarty(null, $smartyDirArr);
//        }else{
//            $view = new Kfz_System_View(null);
//        }
//
//        $dispatcher->setView($view);

    }

    /**
     * 注册公共对象
     * @param Yaf_Dispatcher $dispatcher
     */
    public function _initRegistry(Yaf_Dispatcher $dispatcher)
    {
//        //将数据库参数注册成db对象
//        if(isset(Yaf_Application::app()->getConfig()->db)){
//            Yaf_Registry::set('g_db', Yaf_Application::app()->getConfig()->db->toArray());
//        }
//
//        //注册缓存信息
//        if(isset(Yaf_Application::app()->getConfig()->cache)){
//            Yaf_Registry::set('g_cache', Yaf_Application::app()->getConfig()->cache->toArray());
//        }
//
//        //注册thrift日志服务器参数
//        if(isset(Yaf_Application::app()->getConfig()->log->thrift)){
//            Yaf_Registry::set('g_thrift', Yaf_Application::app()->getConfig()->log->thrift->toArray());
//        }

    }

    /**
     * 初始化session
     */
    public function _initSession(Yaf_Dispatcher $dispatcher)
    {
//        if (!$dispatcher->getRequest()->isCli()) {
//            //判断是否时综合管理后台的业务模块
//            $moduleName = $dispatcher->getRequest()->getModuleName();
//            $controllerName = $dispatcher->getRequest()->getControllerName();
//            if(empty($moduleName)){
//                $moduleName = $dispatcher->getRequest()->get('m');
//            }
//            if(empty($moduleName)){
//                $requestUri = $dispatcher->getRequest()->getRequestUri();
//                if($requestUri != ''){
//                    $params = explode('/', $requestUri);
//                    $moduleName = isset($params[1]) ? $params[1] : '';
//                    $controllerName = isset($params[2]) ? $params[2] : '';
//                }
//            }
//            if(is_string($moduleName) && $moduleName != ''){
//                $moduleName = strtolower($moduleName);
//                $controllerName = strtolower($controllerName);
//            }
//
//            $curDomain = isset($_SERVER['SERVER_NAME']) ? $_SERVER['SERVER_NAME'] : '';
//            $shopAdmin = Yaf_Application::app()->getConfig()->site->shopAdmin;
//            if($moduleName == 'admin' || stripos($shopAdmin, $curDomain) !== FALSE){
//                $session = Yaf_Application::app()->getConfig()->cache->memcache->adminSession->toArray();
//            }else{
////                if(in_array($moduleName, array('seller')) && in_array($controllerName, array('item','decorate'))){
//                    $session = Yaf_Application::app()->getConfig()->cache->memcache->session->toArray();
////                }else{
////                    $session = Yaf_Application::app()->getConfig()->cache->memcache->neibusession->toArray();
////                }
//                $session[0]['domain'] = Yaf_Application::app()->getConfig()->application->session->domain;
//            }
//
//            $memSess = new Tool_MemcacheSession($session[0]['host'], $session[0]['port'], $session[0]['domain'], $session[0]['leftTime']);
//            $memSess->initSess();
//            session_cache_limiter('private, must-revalidate');
//            session_start();
//        }

    }
}
