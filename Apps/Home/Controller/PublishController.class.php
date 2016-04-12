<?php
namespace Home\Controller;
use Think\Controller;
/**
 *
 *              发布二手信息模块 控制器
 *              2016/4/10
 *              遇到的问题:
 *              1.这他妈的TP框架多文件上传有问题 只能得到一个文件的信息 后面看了说的不能设置
 *              savaName就可以得到完整的文件 那么我的想 那我保存文件的名称是不是只能在 后面来
 *              修改 后面暂时没想到方法来修改 算了就用原上传名
 * 
 */
class PublishController extends Controller{

    //1.显示发布信息页面
    public function publish(){
        $this->display();
    }

    //2.处理发布信息
    public function doPublish(){
        
        //2.1 处理文件上传
        
        $upload = new \Think\Upload(); //声明上传类
        $upload->maxSize = 3145728; //定义上传文件的大小
        $upload->exts = array('jpg','gif','png','jpeg');//定义上传文件的类型
        $upload->rootPath = './Public/Uploads_Gods/';//定义上传文件存储的文件夹
        $upload->autoSub = true; //定义是否采用子目录来存储上传的文件
        $upload->subName = $_SESSION['username']; //定义用户发布信息的文件子目录


        $upload->saveName = ''; //可能TP框架为了保证多文件的上传不重名 不让设置文件名

        $info = $upload -> upload();

        //若文件上传不成功
        if(!$info){
            $this->error($upload->getError());
            exit();

        //若图片文件上传成功
        }else{
            //dump($info);

            foreach($info as $godsPic){

                //获取图片的文件路径
                $fileGodsImg_path = './Public/Uploads_Gods/'.$godsPic['savepath'].$godsPic['savename'];

                //将用户上传的图片缩放第一次处理成模板中的500x400带水印规格的图片
                $image1 = new \Think\Image();
                $image1 -> open($fileGodsImg_path);
                $image1 -> thumb(500,400,\Think\Image::IMAGE_THUMB_FIXED) -> text('cuit二手网','./Public/Font/font1.ttc',25,'#CD0000',\Think\Image::IMAGE_WATER_NORTHEAST) -> save($fileGodsImg_path);

                //将用户上传的图片缩放第二次处理成模板中的80x80带水印规格的图片
                $image2 = new \Think\Image();
                $image2 -> open($fileGodsImg_path);
                $smallGods_path =  './Public/Uploads_Gods/'.$godsPic['savepath'].'small_'.$godsPic['savename'];
                $image2 -> thumb(80,80) -> save($smallGods_path);

            }
        }
        //处理form表单中的数据
        if($_POST){

            //dump($_POST);

            //获取post提交中的所有值
            $state = $_POST['state'];
            $title = trim($_POST['title']);
            $type = $_POST['type'];
            $nowPrice = trim($_POST['nowPrice']);
            $costPrice = trim($_POST['costPrice']);
            $degree = $_POST['degree'];
            $details = trim($_POST['details']);
            $address = trim($_POST['address']);
            $connPhone = trim($_POST['connPhone']);

            //将post中的数据和文件图片信息存入where数组中
            $where['state'] = $state;
            $where['title'] = $title;
            $where['nowPrice'] = $nowPrice;
            $where['costPrice'] = $costPrice;
            $where['degree'] = $degree;
            $where['details'] = $details;
            $where['address'] = $address;
            $where['connPhone'] = $connPhone;
            $where['godsPic1'] = $info['godsPic1']['name'];
            $where['godsPic2'] = $info['godsPic2']['name'];
            $where['godsPic3'] = $info['godsPic3']['name'];
            $where['godsPic4'] = $info['godsPic4']['name'];
            //把该用户的编号id存入数据库中当作外键使用
            $where['uId'] = $_SESSION['uId'];

            //操作二手电子产品表
            if($type == '1'){
                //echo '正在操作电子产品表<br>';
                $digitals = M('Digitals');
                $res = $digitals -> data($where) -> add();
                if($res){
                    $this->success('发布成功 请耐心等待管理员的审批','../Myself/myself');
                }else{
                    //echo "操作电子产品表不成功";
                    $this->error();
                }
            }

            //操作二手图书表
            if($type == '2'){
                //echo "正在操作图书表<br>";
                $books = M('Books');
                $res = $books -> data($where) -> add();
                if($res){
                    $this->success('发布成功 请耐心等待管理员的审批','../Myself/myself');
                }else{
                    //echo "操作图书表出错<br>"; 
                    $this->error();
                }
            }

            //操作二手运动装备表
            if($type == '3'){
                $sports = M('Sports');
                $res = $sports -> data($where) -> add();
                if($res){
                    $this->success('发布成功 请耐心等待管理员的审批','../Myself/myself');
                }else{
                    $this->error();
                }
            }

            //操作二手乐器表
            if($type == '4'){
                $arguments = M('Arguments');
                $res = $arguments -> data($where) -> add();
                if($res){
                    $this->success('发布成功 请耐心等待管理员的审批','../Myself/myself');
                }else{
                    $this->error();
                }
            }

            //操作二手杂货铺表
            if($type == '5'){
                $groceries = M('Groceries');
                $res = $groceries -> data($where) -> add();
                if($res){
                    $this->success('发布成功 请耐心等待管理员的审批','../Myself/myself');
                }else{
                    $this->error();
                }
            }
        }
    }

    //3.ajax判断是否登录
    public function checkPublish(){
        if(session('username') && session('headPic')){
            $data['username'] = session('username');
            $data['headPic'] = session('headPic');
            $data['flag'] = "1";
            $this->ajaxReturn($data);
        }else{
            $data['flag'] = "0";
            $this->ajaxReturn($data);
        }
    }

}
?>