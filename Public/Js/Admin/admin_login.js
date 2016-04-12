/**
 *      这是后台登录页面的js处理 admin_login.js 2016/4/6
 *      1.登录总体验证
 *      2.管理员名为空验证
 *      3.密码为空验证
 */

$(document).ready(function(){

        /*1.验证管理员输入是否为空*/
        $('#manager').blur(function(){
            if($.trim($(this).val()) == ''){
                $('#showMessName').animate({
                    'opacity':1
                }, 500);
                setTimeout(function(){
                    $('#showMessName').animate({
                        'opacity':0
                    },500);
                },1000);
            }
            
        });
        
        /*2.验证密码输入是否为空*/
        $('#pass').blur(function(){
            if($.trim($(this).val()) == ''){
                $('#showMessPass').animate({
                    'opacity':1
                },500);
                setTimeout(function(){
                    $('#showMessPass').animate({
                        'opacity':0
                    },500);
                },1000);
            }
        });

        /*3.表单提交时整体验证*/
        $('#myForm').submit(function(){
            if($.trim($('#pass').val()) == '' || $.trim($('#manager').val()) == ''){
                if($.trim($('#manager').val()) == ''){
                     $('#showMessName').animate({
                        'opacity':1
                     }, 500);
                    setTimeout(function(){
                        $('#showMessName').animate({
                            'opacity':0
                        },500);
                    },1000);
                }
                if($.trim($('#pass').val()) == ''){
                     $('#showMessPass').animate({
                        'opacity':1
                    },500);
                    setTimeout(function(){
                        $('#showMessPass').animate({
                            'opacity':0
                        },500);
                    },1000);
                }
                return false;
            }else{
                return true;
            }
        });
  

    


});