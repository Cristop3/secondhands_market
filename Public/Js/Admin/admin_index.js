/**
 *
 *      2016/4/6 这里是后台管理主页的js admin_index.js
 *      1.控制左侧菜单栏的效果
 *      2016/4/7
 * 
 */

$(document).ready(function(){

    /*1.内部框架默认页面*/
    $('#myIframe').attr('src','../../../Apps/Admin/View/Index/inner_index.html');
      
    
    /*2.左侧菜单栏的伸缩*/    
    $('.box h2').click(function(){
        $(this).next('p').slideToggle(400);
        $(this).toggleClass('active');   
    });
    $('.box h2').eq(2).click(function(){
        $(this).next('ul').slideToggle(400);
    })

    /*3.鼠标移入移出变化*/
    $('.box p').hover(function(){
        $(this).addClass('hover');
    },function(){
        $(this).removeClass('hover');
    });

    /*4.点击添加商品*/
    $('#addGods').click(function(){
        $('#myIframe').attr('src','../Gods/addGods');
    });

    /*5.点击查询商品*/
    $('#searchGods').click(function(){
        $('#myIframe').attr('src','../Gods/searchGods');
    });

    /*6.点击查看请求*/
    $('#applyfor').click(function(){
        $('#myIframe').attr('src','../Applyfor/applyfor');
    });

    /*7.点击查看用户*/
    $('#user').click(function(){
        $('#myIframe').attr('src','../User/user');
    });

    /*8.点击修改通告*/
    $('#commess').click(function(){
        $('#myIframe').attr('src','../Commess/commess');
    });




});