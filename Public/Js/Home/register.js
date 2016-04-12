/**
 *
 *      注册页面_前台js注册校验 register.js
 *
 *      目前存在的问题：（2016.3.21）
 *          1.如何嵌入tp的验证码？
 *          2.如何上传头像文件？
 *          3.如何处理上传的头像图片？
 *          4.如何在Model层进行后台的再次验证用户注册信息是否正确？
 *          5.忘了如何使用tp的ajax验证用户注册的用户名是否同名？
 *          6.如何使用md5加密用户所注册的密码？
 *
 *      目前已解决的问题：（2016.3.22）
 *          1.解决了如何嵌套tp的验证码 √
 *          5.解决了如何使用tp的ajax验证用户注册的用户名是否同名 √
 *
 */

//1.用户名的正则规则
    var regUser = /[_a-zA-Z0-9]{4,10}/;

//2.密码的正则规则(任意字母的大小写和数字4-8位的组合)
    var regPass = /[a-zA-Z0-9]{4,8}/;

//3.电话的正则规则
    var regPhone = /[0-9]{11}/;


$(document).ready(function(){

    $('.form_table').find('i:odd').hide();
    
    /*1.用户名ajax判断是否在数据库中存在同名的校验*/
    $('input[name="username"]').blur(function(event) {
           
        var user = $(this).val().trim();
        
        //获取当前的错误信息提示对象
        var pEmess = $(this).parent('td').next().next().find('p').eq(0);
        
        //ajax的get方法来判断用户名是否已注册过
        $.get('ajaxCheckName',{'username':user},function(resData){
            
            //当用户名存在时
            if(resData == '0'){
                 $('i[title="ok_user"]').removeClass().addClass('glyphicon glyphicon-remove').show();
                pEmess.html('啊哦! 该用户名存在了呦!').show();
               //alert('存在该用户名');
            }else{
                //alert('可以注册');
               
                $('i[title="ok_user"]').removeClass().addClass('glyphicon glyphicon-ok').show();
                pEmess.html('可以注册!').show();

                //再次验证用户注册的用户名是否符合规则
                if(regUser.test(user)){
                    $('i[title="ok_user"]').removeClass().addClass('glyphicon glyphicon-ok').show();
                   
                }else{
                    pEmess.html('');
                    $('i[title="ok_user"]').removeClass().addClass('glyphicon glyphicon-remove').show();
                    pEmess.html('用户名为大小写字母或下划线或数字4-10位组成!').show();
                }
            }
        });


    });
    
   
    /*2.输入的第一次密码的校验（必须满足密码在4到8位任意字母的大小写和数字的组合）*/ 
    $('input[name="password1"]').blur((function(event) {
            var pass = $(this).val().trim();

            //获取当前的错误信息提示对象
            var pEmess = $(this).parent('td').next().next().find('p').eq(0);

            //若用户创建的密码符合规则
            if(regPass.test(pass)){
               pEmess.hide();
               $('i[title="ok_pass1"]').removeClass().addClass('glyphicon glyphicon-ok').show().css("color",'green');
            }else{
               $('i[title="ok_pass1"]').removeClass().addClass('glyphicon glyphicon-remove').show();
               pEmess.html('密码在4到8位任意字母的大小写和数字的组合').show();
            }
    }));

    /*3.确认密码的校验(一二次输入的密码必须一致)*/
    $('input[name="password"]').blur(function(event){
        //获取确认密码中的用户输入内容
        var pass2 = $(this).val().trim();

        //获取用户第一次输入的密码内容
        var pass1 = $('input[name="password1"]').val().trim();

        //获取当前的错误信息提示对象
        var pEmess = $(this).parent('td').next().next().find('p').eq(0);

        if(pass1 != pass2){
            $('i[title="ok_pass2"]').removeClass().addClass('glyphicon glyphicon-remove').show();
            pEmess.html('亲 输入密码前后不一致!!').show();
        }else{
            if(pass2 == ''){
                $('i[title="ok_pass2"]').removeClass().addClass('glyphicon glyphicon-remove').show();
                pEmess.html('亲 前后密码非空哦!!').show();
            }else{
               pEmess.hide();
               $('i[title="ok_pass2"]').removeClass().addClass('glyphicon glyphicon-ok').show().css("color",'green'); 
            }
            
        }
    });


    /*电话的校验(必须为由0到9的11位数字所组成的)*/
    $('input[name="phone"]').blur(function(){
        //获取用户输入的密码
        var u_phone = $(this).val().trim();

        //获取当前的错误信息提示对象
        var pEmess = $(this).parent('td').next().next().find('p').eq(0);

        //校验电话输入是否正确
        if(!regPhone.test(u_phone)){
            $('i[title="ok_phone"]').removeClass().addClass('glyphicon glyphicon-remove').show();
            pEmess.html('亲 密码必须为由0到9的11位数字所组成').show();
        }else{
            pEmess.hide();
            $('i[title="ok_phone"]').removeClass().addClass('glyphicon glyphicon-ok').show().css("color",'green');
        }
    });

});



