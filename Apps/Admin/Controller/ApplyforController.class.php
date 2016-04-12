<?php 
namespace Admin\Controller;
use Think\Controller;
/**
 *
 *          2016/4/10 这里是管理员批准申请控制器
 *          初步构思为：
 *          1.内部呈现一个表格样式 若有申请则展示申请编号，产品标题，发布者头像，发布者名称，处理状态,操作处理
 *          2.其中产品标题是个超链接 跳至展现发布者所发布的信息页面（信息结尾处有通过和不通过两个选项）
 *          3.但由于我将商品表分成了5个不同的子表 所以可能会用个tab选项卡的格式来分别呈现每张表的申请情况
 *
 * 
 */
class ApplyforController extends Controller{
    
     /*公共函数*/
     function dbCom(&$list,$type){
        //为重组模板中的数据的二维数组
        $newList = array();
        
        foreach ($list as $key => $value) {
            $value['type'] = $type;
            $uid = $value['uId'];
            
            //通过外键uId查询user表中的发布者名称和头像信息
            $F_user = M('User');
            //返回指定的username和headPic
            $res = $F_user -> where("id=$uid") -> getField('username, headPic');
            if($res){
                foreach($res as $k => $v){
                //将user表中的username和headPic添加到$value数组中
                   $value['username'] = $k;
                   $value['headPic'] = $v;
                } 
            }else{
                echo "操作失败<br>";
            }
            if($value['state'] == 0){
                $value['state'] = '未处理';
            }
            if($value['state'] == 1){
                $value['state'] = '已处理';
            }
            //将$value这个一维数组重组成个二维数组 方面模板中foreach使用
            $newList[] = $value;
        }
        return  $newList;
    }

    /*1.查看请求页面*/
    public function applyfor(){
        
        //1.查询电子商品数据库中的数据
        $digitals = M('Digitals');
        //返回指定字段值id,title,state,uId
        $list = $digitals -> field('id,title,state,uId') -> select();
        $this->assign('res',$this->dbCom($list,1));


        //2.查询图书商品数据库中的数据
        $books = M('Books');
        $list2 = $books -> field('id,title,state,uId') -> select();
        $this->assign('res2',$this->dbCom($list2,2));

        //3.查询运动装备商品数据库中的数据
        $sports = M('Sports');
        $list3 = $sports -> field('id,title,state,uId') -> select();
        $this->assign('res3',$this->dbCom($list3,3));

        //4.查询乐器商品数据库中的数据
        $arguments = M('Arguments');
        $list4 = $arguments -> field('id,title,state,uId') -> select();
        $this->assign('res4',$this->dbCom($list4,4));

        //5.查询杂货铺商品数据库中的数据
        $groceries = M('Groceries');
        $list5 = $groceries -> field('id,title,state,uId') -> select();
        $this->assign('res5',$this->dbCom($list5,5));


        //显示模板
        $this->display();
    }

    /*2.点击查看跳转至详细页面模板*/
    public function showApplyfor(){
        //获取get方式传过来的该商品id号和对应的数据库表及发布者姓名
        $gods_id = $_GET['id'];
        $gods_type = $_GET['type'];
        $user_name = $_GET['name'];
        //echo $user_name;

        $dbName = null; 
        //操作对应id和type查询数据库返回数据
        if($gods_type == 1){
            $dbName = 'Digitals';
        }
        if($gods_type == 2){
            $dbName = 'Books';
        }
        if($gods_type == 3){
            $dbName = 'Sports';
        }
        if($gods_type == 4){
            $dbName = 'Arguments';
        }
        if($gods_type == 5){
            $dbName = 'Groceries';
        }
        //echo $dbName;
        //echo '<br>'.$gods_id;

        //操作对应的数据库表
        $db = M($dbName);
        $res = $db->where("id=$gods_id")->find();
        if($res){
            //$res['username'] = $user_name;
            //dump($res);
            $this->assign('title',$res['title']);
            $this->assign('nowPrice',$res['nowPrice']);
            $this->assign('costPrice',$res['costPrice']);
            $this->assign('details',$res['details']);
            $this->assign('address',$res['address']);
            $this->assign('connPhone',$res['connPhone']);

            //判断type值来显示不同的二手种类
            if($gods_type == 1){
                $this->assign('type','电子产品');
            }
            if($gods_type == 2){
                $this->assign('type','图书');
            }
            if($gods_type == 3){
                $this->assign('type','运动装备');
            }
            if($gods_type == 4){
                $this->assign('type','乐器');
            }
            if($gods_type == 5){
                $this->assign('type','杂货铺');
            }

            //判断degree值来显示不同的新旧程度
            if($res['degree'] == 1){
                $this->assign('degree','全新');
            }
            if($res['degree'] == 2){
                $this->assign('degree','99成新');
            }
            if($res['degree'] == 3){
                $this->assign('degree','95成新');
            }
            if($res['degree'] == 4){
                $this->assign('degree','9成新');
            }
            if($res['degree'] == 5){
                $this->assign('degree','8成新');
            }
            if($res['degree'] == 6){
                $this->assign('degree','7成新及以下');
            }

        }else{
            $this->error('操作数据库表失败!');
        }

        //显示模板
        $this->display();
    }
}
    

?>