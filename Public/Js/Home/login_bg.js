/* 
*   登录页面背景 切换效果和前台登录框验证  login_bg.js
* 
*/

$(document).ready(function(){
    
    //1.让图片自动适应屏幕宽度
    var width = $(window).width();
    $('.login_bg li img').css({'width':width});

    //2.让背景图片自动的切换
    var number=Math.random()*4;
    index=Math.floor(number);

    //alert(index)
    $('.login_bg li img').css('opacity',0);
    $('.login_bg li img').eq(index).css('opacity',1);

    //$('.login_bg li img:first').css('opacity',1);
    //alert(Math.floor(number));
    //var index=0;

    setInterval(function(){
        index++;
        if(index>=4){
            index=0;
        }
        $('.login_bg li img').eq(index).animate({'opacity':1},3000);
        $('.login_bg li img').eq(index-1).animate({'opacity':0},3000);
    },5000);

    //3.点击文本框切换边框颜色
    $('input[name="username"]').focus(function(){
        $(this).css('border','1px solid rgba(10,15,244,0.35)');    
    });
    $('input[name="username"]').blur(function(){
        $(this).css('border','1px solid rgba(255,255,255,0.35)');
        
        //3.1用户名失去焦点去空格的判断是否为空
        if($.trim($(this).val())==''){
            $(this).next().show();
            $(this).css('border','1px solid rgba(233,16,22,0.85)');
        }else{
            $(this).next().hide();
        }
    });
    $('input[name="password"]').focus(function(){
        $(this).css('border','1px solid rgba(10,15,244,0.35)');
    });
    $('input[name="password"]').blur(function(){
        $(this).css('border','1px solid rgba(255,255,255,0.35)');

        //3.2密码失去焦点判断
        if($(this).val()==''){
            $(this).next().show();
            $(this).css('border','1px solid rgba(233,16,22,0.85)');
        }else{
            $(this).next().hide();
        }
    });

    //4.前台检验输入的用户名和密码是否为空 是否允许提交
    var oUser = $('input[name="username"]');
    var oPass = $('input[name="password"]');
    //var oForm = document.form[0];
    $('form').submit(function(){
        if($.trim(oUser.val())=='' || oPass.val()==''){
            if(oUser.val()==''){
                oUser.next().show();
                oUser.css('border','1px solid rgba(233,16,22,0.85)');
            }
            if(oPass.val()==''){
                oPass.next().show();
                oPass.css('border','1px solid rgba(233,16,22,0.85)');
            }
            return false;
        }else{
            
            //提交成功 孙悟空远去先大后小 
            imgLeft = $('#moveImg').css('left');
            imgTop = $('#moveImg').css('top');
            $('div[class="go"]').slideDown(1000);
            $('#moveImg').animate({
                "left":300,
                "top":250,
                "opacity":0.7,
                "width":220,
                "height":150,
            },500).animate({
                "left":600,
                "top":350,
                "opacity":0,
                "width":0,
                "height":0,
            },500);

            $('#moveImg').css({"top":imgTop,"left":imgLeft,"opacity":1});
            return true;
        }
    });

    if($("#test").html()=="0"){
        $("#test").next().css("visibility",'visible');    
    }
   

});