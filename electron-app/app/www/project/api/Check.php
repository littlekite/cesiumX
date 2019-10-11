<?php
namespace project\api;
use core\Db;
class Check{
    /**
     * Account::verifyAdminLogin()
     * 后台登录验证接口
     * @param userName 用户名  passWord 密码
     * @return array['status'返回结果代码info返回结果详情]
     */
    public function checkImg(){  
        $res = [];
        $input = input();
        if (!empty($input['url'])) {
            $n_url = explode('/',$input['url']);

            $input['x'] = $n_url[4];
            $input['y'] = $n_url[5];
            $input['z'] = $n_url[6];
            $path = "model2/".$input['x']."/".$input['y']."/".$input['z']."/";
            if(!is_dir($path)) {
                mkdir($path, 0777, true);
            }
            if(!file_exists($path."Gali.jpg") || filesize($path."Gali.jpg") == 0) {
                $url = "http://mt1.google.cn/vt/lyrs=s&hl=zh-CN&x=".$input['x']."&y=".$input['y']."&z=".$input['z']."&s=Gali";
                $content = file_get_contents($url);
                $res['r'] = file_put_contents($path."Gali.jpg", $content);
                //重新检测
                if(!file_exists($path."Gali.jpg") || filesize($path."Gali.jpg") == 0) {
                    $res['status'] = 1;
                    $res['content'] = strlen($content);
                    $res['path'] = $path."Gali.jpg"; 
                    $res['info'] = "success"; 
                } else {
                    //二次尝试写入
                    $content = file_get_contents($url);
                    $res['r'] = file_put_contents($path."Gali.jpg", $content);
                    if(!file_exists($path."Gali.jpg") || filesize($path."Gali.jpg") == 0) {
                        //三次尝试写入
                        $content = file_get_contents($url);
                        $res['r'] = file_put_contents($path."Gali.jpg", $content);
                        if(!file_exists($path."Gali.jpg") || filesize($path."Gali.jpg") == 0) {
                           $res['status'] = 3;
                           $res['url'] = "http://mt1.google.cn/vt/lyrs=s&hl=zh-CN&x=".$input['x']."&y=".$input['y']."&z=".$input['z']."&s=Gali";
                           $res['info'] = "error";
                        } else {
                           $res['status'] = 1;
                           $res['content'] = strlen($content);
                           $res['path'] = $path."Gali.jpg"; 
                           $res['info'] = "success3"; 
                        }
                    } else {
                        $res['status'] = 1;
                        $res['content'] = strlen($content);
                        $res['path'] = $path."Gali.jpg"; 
                        $res['info'] = "success2";
                    }
                    
                }
            } else {
                $res['path'] = $path."Gali.jpg"; 
                $res['status'] = 2;//失败
                $res['info'] = "yi cunzai";
                $res['size'] = filesize($path."Gali.jpg");
            }
            
        } else {
            $res['status'] = 2;//失败
            $res['info'] = "参数不全"; 
        }
        return $res; 
    }
  
}
?>