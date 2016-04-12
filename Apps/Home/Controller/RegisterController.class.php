<?php
namespace Home\Controller;
use Think\Controller;
/**
 *
 *              注册模块 控制器
 */
class RegisterController extends Controller{
   
   /*1.ajax用户名校验*/
    public function ajaxCheckName(){
        $username = $_GET['username'];
        $user = M('User');
        $where['username'] = $_GET['username'];
        $count = $user->where($where)->count();
        if($count){
            echo '0';
        }else{
            echo "1";
        }
    }
    
   
   /*2.注册完成后提交的方法doRegister(存储用户注册的信息和处理文件上传)*/
   public function doRegister(){


        //2.1处理文件上传
        $upload = new \Think\Upload(); //获取上传对象
        $upload->maxSize = 3145728; //定义上传文件的大小
        $upload->exts = array('jpg','gif','png','jpeg');//定义上传文件的类型
        $upload->rootPath = './Public/Uploads/';//定义上传文件存储的文件夹
        $upload->autoSub = false; //定义是否采用子目录来存储上传的文件
        $upload->saveName = array('date','Ymd_His');//定义上传文件的文件名

        $info = $upload->upload();
        
        if(!$info){//若上传文件不成功
           $this->error($upload->getError());
           exit();

        }else{//若上传文件成功

            //2.2 进行头像缩略处理
            foreach ($info as $headPic) {
                //获取上传头像的绝对路径
                $fileImg_path = './Public/Uploads/'.$headPic['savepath'].$headPic['savename'];

                //获取上传头像的文件名
                $fileImg_name = $headPic['savename'];
            }
            
            //获取图像处理对象
            $image = new \Think\Image();
            $image -> open("{$fileImg_path}");//打开头像图片文件
            $image->thumb(50,50)->save("{$fileImg_path}");//缩略成50*50规格的头像
        }


        //获取用户信息
        $username = trim($_POST['username']); //用户名
        $password = trim($_POST['password']); //密码
        $sex = $_POST['sex']; //性别
        $phone = $_POST['phone']; //电话
        $code = $_POST['code']; //用户输入的验证码

         //2.3验证码检验
         $verify = new \Think\Verify();
         if(!$verify->check($code)){
            //echo "验证码不符合";
            $this->error('验证码不符合');
            exit();
         }

         //将用户信息存入数据库
         $m = M('User');
         $where['username'] = $username;
         $where['password'] = $password;
         $where['sex'] = $sex;
         $where['phone'] = $phone;
         $where['headPic'] = $fileImg_name;
         $where['regTime'] = date('Y-m-d');
         
         //调用add方法将用户信息存入数据库
         $res = $m->data($where)->add();
         if($res){
            //若存入成功 则把用户名和头像图片名存入session中
            $_SESSION['username'] = $where['username'];
            $_SESSION['headPic'] = $where['headPic'];
            //echo '数据存入成功';
            
            //跳转至主页
            $this->redirect("Index/index");
         }
   }

   

}
?>