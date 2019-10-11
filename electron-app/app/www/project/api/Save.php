<?php
namespace project\api;
use core\Db;
class  Save{
    /**
     * Account::verifyAdminLogin()
     * 后台登录验证接口
     * @param userName 用户名  passWord 密码
     * @return array['status'返回结果代码info返回结果详情]
     */
    public function saveImg(){  
        $res = [];
        $input = input();
        if (!empty($input['url'])) {
            
            $path = "model2/".$input['x']."/".$input['y']."/".$input['z']."/";
            if(!is_dir($path)) {
                mkdir($path, 0777, true);
            }
            if(!file_exists($path."Gali.jpg") || filesize($path."Gali.jpg") == 0) {
                $url = "http://mt1.google.cn/vt/lyrs=s&hl=zh-CN&x=".$input['x']."&y=".$input['y']."&z=".$input['z']."&s=Gali";
                $content = file_get_contents($url);
                $res['r'] = file_put_contents($path."Gali.jpg", $content);
                $res['status'] = 1;//失败
                $res['content'] = strlen($content);
                $res['path'] = $path."Gali.jpg"; 
                $res['info'] = "success"; 
            } else {
                $res['path'] = $path."Gali.jpg"; 
                $res['status'] =2;//失败
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