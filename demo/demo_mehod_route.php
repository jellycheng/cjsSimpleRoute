<?php
include __DIR__ . '/common.php';



$_GET['method'] = 'nfangbian.user.auth.login';
$res = \CjsSimpleRoute\MethodRouter::getInstance()->init()->run(function($methodObj, $ext){
                                                    $errorData = $methodObj->getError();
                                                    if(!$errorData['error_code']) {//正常
                                                        $msg = $errorData['error_msg'];

                                                    } else {
                                                        //发生错误
                                                        $msg = $errorData['error_msg'];
                                                    }
                                                    var_export($errorData);
                                                    var_export($methodObj->getFormatData());
                                                    echo $methodObj->getMethod() . PHP_EOL;
                                                    //开始路由
                                                    $content = 'content_' . date('Y-m-d H:i:s') . '_' . $msg . PHP_EOL; //执行结果
                                                    return $content;
                                                });
echo $res;

