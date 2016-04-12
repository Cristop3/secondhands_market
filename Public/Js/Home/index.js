/**
 *
 *         这是登录后页面的Js处理： flindex.js(2016.3.23)
 *         1.头部的js
 *         2.
 * 
 */
var timer = null;  //控制延迟消失的菜单
var timer2 = null; //控制向左向右显示
var timer3 = null; //控制向左向右显示
var timer4 = null; //控制图片自动切换
var timer5 = null; //控制电子产品图片自动切换
var timer6 = null; //控制乐器产品图片自动切换
var timer7 = null; //控制杂货产品图片自动切换
var flagPublish = null;

$(document).ready(function(){
    var iNow = 0; //控制中间大图片轮播index
    var iNow2 = 1; //控制电子产品下图片轮播距离的倍数
    var currzIndex = 2; //自定义增大的z-index
    var izIndex = 2; //自定义增大的z-index 布局转换中

   

    /*1.页面加载时 ajax访问后台的session数据看是否有用户名和头像*/
    $.get('checkIndex',function(data){
        //alert(data['flag']);
        if(data['flag'] == "1"){
            //alert('该用户已登录');
            var str1 = '<li><img src="../../../Public/Uploads/'+data["headPic"]+'"/></li><li id="userMes"><a href="#">'+data["username"]+'<i class="glyphicon glyphicon-chevron-down "></i></a></li>';
           $(str1).prependTo($('.navbar_nav'));
           flagPublish = true;

        }else{
            //alert('该用户未登录');
            
            var str0 = "<li><a href='../Register/register' >注册</a></li><li><a href='../Login/login/index/2' >登录</a></li>";
            $(str0).prependTo($('.navbar_nav'));
            flagPublish = false;
        }
        
    });

    /*判断用户登录与否 能否发布信息*/

    $('#publish').click(function(){
        if(flagPublish){
            window.location.href = '../Publish/publish';
        }else{
            if( confirm('对不起 您未登录 需要跳转到登录页面吗？') ){  
              window.location.href = "../Login/login";
            }
        }
       
    })

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

    /*2.中部轮播图效果*/
    $('.leftPaper').hover(function(){
        $('#btnLeft').animate({"opacity":0.8}, 500);
    },function(){
        timer2 = setTimeout(function(){
            $('#btnLeft').animate({"opacity":0},500);
        }, 50);
    });
    $('#btnLeft').hover(function(){
        clearInterval(timer2);
        $(this).animate({"opacity":0.8});
    });

    $('.rightPaper').hover(function(){
        $('#btnRight').animate({"opacity":0.8},500);
    },function(){
        timer3 = setTimeout(function(){
            $('#btnRight').animate({"opacity":0},500);
        }, 50);
    });
    $('#btnRight').hover(function(){
        clearInterval(timer3);
        $(this).animate({"opacity":0.8});
    });


    autoPlay();

    /*鼠标在图片移入移出停止和开启*/
    $('.Viwepager').hover(function(){
        clearInterval(timer4);
    },function(){
        autoPlay();
    });

    $('#btnLeft').click(function(){
        iNow--;
        //alert(iNow)
        if(iNow==-1){
            iNow = 3;
        }

        imgChange();
    });

    $('#btnRight').click(function(){
        iNow++;
        if(iNow==4){
            iNow = 0;
        }
        imgChange();
    })

    /*自动播放函数*/
    function autoPlay(){
        timer4 = setInterval(function(){
            iNow++;
            if(iNow == 4){
                iNow = 0;
            }
            imgChange();
        },5000);

    }
    /*实现图片的切换*/
    function imgChange(){     
        var currObj = $('#V_ul').find('li').eq(iNow);
        var oldHeight = currObj.height();
        currObj.css('zIndex',currzIndex++);
        currObj.css('height',0);
        currObj.animate({"height":oldHeight},1000);
    }


    /*电子产品目录下的图片轮播*/
    function move(index){
        var adLeft = $('.ul1').find('li').eq(0).width();
        $('.ul1').stop(true,false).animate({
            "left":-(adLeft * index),
        },1000);
        $('.ul1_div span').eq(index).addClass('active').siblings().removeClass('active');
    }
    timer5 = setInterval(function(){
        move(iNow2);
        iNow2++;
        if(iNow2 == 3){
            iNow2 = 0;
        }
    }, 3000);

    /*乐器产品目录下的图片淡入淡出效果*/
    var number=Math.random()*3;
    index=Math.floor(number);
    $('.ul4 li img').css('opacity',0);
    $('.ul4 li img').eq(index).css('opacity',1);

    timer6 = setInterval(function(){
        index++;
        if(index>=3){
            index=0;
        }
        $('.ul4 li img').eq(index).animate({'opacity':1},2000);
        $('.ul4 li img').eq(index-1).animate({'opacity':0},2000);
    },4000);

    /*杂货*/
    var number2=Math.random()*3;
    index2=Math.floor(number2);
    $('.grocery a img').css('opacity',0.3);
    $('.grocery a img').eq(index2).css('opacity',1);
  
    timer7 = setInterval(function(){
        index2++;
        if(index2>=3){
            index2=0;
        }
        $('.grocery a img').eq(index2).animate({'opacity':1},2000);
        $('.grocery a img').eq(index2-1).animate({'opacity':0.3},2000);
    },4000);

    /*布局转换效果*/
    $('.showUl').find('li').each(function(index){
        $(this).css('left',$(this).position().left);
        $(this).css('top',$(this).position().top);
    });
    $('.showUl').find('li').each(function(){
        $(this).css('position','absolute');
        $(this).css('margin',0);
    });
    $('.showUl').find('li').hover(function(){
        $(this).css('zIndex',izIndex++);
        $(this).stop(true, false).animate({
            "width":320,
            "height":200,
            "margin-left":-50,
            "margin-top":-50
        });
    },function(){
        $(this).stop(true,false).animate({
            "width":210,
            "height":150,
            "margin-left":0,
            "margin-top":0
        });
    }).click(function(){
        alert(1)
    })

});