/**
 *      2016/4/8 这里是发布信息的js publish.js
 *      1.判断是否登录
 *
 * 
 */

/*现价和联系电话的正则校验*/
var regPrice = /^[0-9]*[1-9][0-9]*$/;
var regPhone = /[0-9]{11}/;

$(document).ready(function(){

    /*0.页面刚加载时隐藏侧面提示信息*/
    $('.titleMess').hide();
    $('.priceMess').hide();

    /*1.页面加载时 ajax访问后台的session数据看是否有用户名和头像*/
    $.get('checkPublish',function(data){
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

    /*3.点击input框边框加深*/
    $('#myTable input').focus(function(){
        $(this).addClass('active');
    }).blur(function(){
        $(this).removeClass('active').removeClass('active2');
    });

    $('#myTable textarea').focus(function(){
        $(this).addClass('active');
    }).blur(function(){
        $(this).removeClass('active').removeClass('active2');
    });

    $('#myTable select').focus(function(){
        $(this).addClass('active');
    }).blur(function(){
        $(this).removeClass('active').removeClass('active2');
    });


    /*4.标题处hover效果*/
    $('#myTable input[name="title"]').hover(function(){
        $('.titleMess').show();
    },function(){
        $('.titleMess').hide();
    });

    /*5.现价处hover效果*/
    $('#myTable input[name="nowPrice"]').hover(function(){
        $('.priceMess').show();
    },function(){
        $('.priceMess').hide();
    });

    /*6.提交判断*/
    $('#myForm').submit(function(){
        var titleVal = $('input[name="title"]').val(); //获取标题的值
        var typeVal = $('select[name="type"]').val();  //获取类型的值
        var nowPriceVal = $('input[name="nowPrice"]').val(); //获取现价的值   
        var degreeVal = $('select[name="degree"]').val(); //获取新旧程度的值
        var addressVal = $('input[name="address"]').val(); //获取地址的值
        var connPhoneVal = $('input[name="connPhone"]').val(); //获取联系电话的值
        var detailsVal = $('textarea[name="details"]').val(); //获取内容的值
        var godsPicVal = $('#up_img1').val(); //获取图片的值
        var godsPicVal2 = $('#up_img2').val(); //获取图片2的值
        var godsPicVal3 = $('#up_img3').val(); //获取图片3的值
        var godsPicVal4 = $('#up_img4').val(); //获取图片4的值
        
        if(titleVal=='' || typeVal=='' || nowPriceVal=='' || degreeVal=='' || addressVal==''
            || connPhoneVal=='' || detailsVal=='' || godsPicVal=='' || godsPicVal2=='' || godsPicVal3=='' || godsPicVal4==''){

            if(titleVal == ''){
                $('#titleSpan').show();
                $('input[name="title"]').addClass('active2');               
            }
            if(typeVal == ''){
                $('#typeSpan').show();  
                $('select[name="type"]').addClass('active2');             
            }
            if(nowPriceVal == ''){
                $('#priceSpan').show();   
                $('input[name="nowPrice"]').addClass('active2');            
            }
            if(degreeVal == ''){
                $('#degreeSpan').show();
                $('select[name="degree"]').addClass('active2');                 
            }
            if(addressVal == ''){
                $('#addressSpan').show();
                $('input[name="address"]').addClass('active2');                
            }
            if(connPhoneVal == ''){
                $('#phoneSpan').show();
                $('input[name="connPhone"]').addClass('active2');               
            }
            if(detailsVal == ''){
                $('#detailsSpan').show();
                $('textarea[name="details"]').addClass('active2');                
            }
            if(godsPicVal == ''){
                $('.godsPicSpan').show();
                $('input[name="godsPic"]').addClass('active2'); 
            }
            if(godsPicVal2 == ''){
                $('.godsPicSpan').show();
                $('input[name="godsPic"]').addClass('active2'); 
            }
            if(godsPicVal3 == ''){
                $('.godsPicSpan').show();
                $('input[name="godsPic"]').addClass('active2'); 
            }
            if(godsPicVal4 == ''){
                $('.godsPicSpan').show();
                $('input[name="godsPic"]').addClass('active2'); 
            }

            return false;
        }

       
    });

    /*7.若提示用户未填信息后blur后消除提示信息*/
     $('input[name="title"]').blur(function(){
            $('#titleSpan').hide();
     });

     $('input[name="nowPrice"]').blur(function(){
            if(regPrice.test($(this).val())){
               $('#priceSpan').hide(); 
            }else{
                $(this).addClass('active2');
                $('#priceSpan').show();
            } 
     });

     $('input[name="address"]').blur(function(){
            $('#addressSpan').hide();
     });

     $('input[name="connPhone"]').blur(function(){
            if(regPhone.test($(this).val())){
                $('#phoneSpan').hide();
            }else{
                $(this).addClass('active2');
                $('#priceSpan').show();
            }
            
     });

     $('#up_img1').blur(function(){
            $(this).next('span').hide();
     });

     $('#up_img2').blur(function(){
            $(this).next('span').hide();
     });

     $('#up_img3').blur(function(){
            $(this).next('span').hide();
     });

     $('#up_img4').blur(function(){
            $(this).next('span').hide();
     });

     $('select[name="degree"]').blur(function(){
            $('#degreeSpan').hide();
     });

     $('select[name="type"]').blur(function(){
            $('#typeSpan').hide();
     });

     $('textarea').blur(function(){
            $('#addressSpan').hide(); 
     })

     /*8.图片上传预览*/
     new uploadPreview({
        UpBtn:"up_img1",
        DivShow:'imgdiv1',
        ImgShow:'imgShow1'
     });
     new uploadPreview({
        UpBtn:"up_img2",
        DivShow:'imgdiv2',
        ImgShow:'imgShow2'
     });
     new uploadPreview({
        UpBtn:"up_img3",
        DivShow:'imgdiv3',
        ImgShow:'imgShow3'
     });
     new uploadPreview({
        UpBtn:"up_img4",
        DivShow:'imgdiv4',
        ImgShow:'imgShow4'
     });



});