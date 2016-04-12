/**
 * 
 *         2016/4/11 这里是申请页面的审批
 *         1.由于我是将商品表分成了5份 所以这里用个tab来分别展示
 * 
 * 
 */
$(document).ready(function(){
    //1.页面加载显示电子产品中的申请
    $('.digitals').show();
    $('.spanDigitals').addClass('active');


    //2.点击tab切换查看
    $('.spanDigitals').click(function(){
        $(this).addClass('active').siblings().removeClass('active');
        $('div .digitals').show().siblings().hide();
    });

    $('.spanBooks').click(function(){
        $(this).addClass('active').siblings().removeClass('active');
        $('div .books').show().siblings().hide();
    });

    $('.spanSports').click(function(){
        $(this).addClass('active').siblings().removeClass('active');
        $('div .sports').show().siblings().hide();
    });

    $('.spanArguments').click(function(){
        $(this).addClass('active').siblings().removeClass('active');
        $('div .arguments').show().siblings().hide();
    });

    $('.spanGroceries').click(function(){
        $(this).addClass('active').siblings().removeClass('active');
        $('div .groceries').show().siblings().hide();
    });


    //3.点击查看按钮跳转至用户具体信息模板
    //alert($('.digitals button').length);
    $('.digitals button').click(function(){
        //alert($(this).parent().parent().children().first().html());
        var idIndex = $(this).parent().parent().children().first().html();
        //alert(idIndex);
        var typeIndex = $(this).parent().parent().children().eq(3).html();
        //alert(typeIndex);
        var usernameIndex = $(this).parent().parent().children().eq(4).html();
        //alert(usernameIndex);
        window.location.href = '../Applyfor/showApplyfor/id/'+idIndex+'/type/'+typeIndex+'/name/' + usernameIndex;
    })
});