/**
 *              这里是二手商品详细页面showGods.js 2016/4/5
 *              (总体来说这里所有的信息都是从数据库中抽出来的，动态显示)
 *              1.个人信息菜单效果
 *              2.左边二手商品tab图切换、大图罩框
 *              3.右边的两组效果图
 * 
 */
var timer = null;  //控制延迟消失的菜单
var flagPublish = null; //判断用户是否登录的标志

$(document).ready(function(){


    /*1.页面加载时 ajax访问后台的session数据看是否有用户名和头像*/
    $.get('checkLogin',function(data){
    
        if(data['flag'] == "1"){
            //alert('该用户已登录');
            var str1 = '<li><img src="../../../Public/Uploads/'+data["headPic"]+'"/></li><li id="userMes"><a href="#">'+data["username"]+'<i class="glyphicon glyphicon-chevron-down "></i></a></li>';
           $(str1).prependTo($('.navbar_nav'));
           flagPublish = true;

        }else{
            //alert('该用户未登录');
            var str0 = "<li><a href='../Register/register' >注册</a></li><li><a href='../Login/login/showGods/2' >登录</a></li>";
            $(str0).prependTo($('.navbar_nav'));
            flagPublish = false;
        }
    });


    /*3.判断当用户点击发布信息按钮时 用户是否已登录*/
    $('#btnPublish').click(function(){
        if(flagPublish){
            window.location.href = '../Publish/publish';
        }else{
            if( confirm("啊偶 您还未登录 需要跳转到登录页面吗？") ){
                window.location.href = '../Login/login';
            }
        }
    });

    /*2.查看用户的发布信息和退出菜单*/
    $("#nav_ul").delegate('#userMes', 'mouseenter', function(event) {
         $('.menuDown').show();
    });
    $('#nav_ul').delegate('#userMes','mouseleave',function(event){
        timer = setTimeout(function(){
            $('.menuDown').hide();
         }, 50);
    });
    $('.menuDown').hover(function(){
        clearInterval(timer);
        $(this).show();
    },function(){
        $(this).hide();
    });







});