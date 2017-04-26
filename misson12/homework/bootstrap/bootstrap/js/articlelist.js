$(function() {
    //加载侧边栏html代码
   /* $(window).load("aside.html",function(data){
         $("#aside").append(data);
    })*/
    $('[data-toggle="tooltip"]').tooltip();
    $("#bar").animate({"width":"100%"},1000);
    $('#exambox').on('inserted.bs.tooltip', function() {
        $('#exambox').parent().children("div").css("left", "-128px");
    })

    $('#subjectbox').on('inserted.bs.tooltip', function() {
        $('#subjectbox').parent().children("div").css("left", "-130px");
    })
    $('#tipbox').on('inserted.bs.tooltip', function() {
        $('#tipbox').parent().children("div").css("left", "-58px");
    })

    $('#gotop').on('inserted.bs.tooltip', function() {
        $('#gotop').parent().children("div").css("left", "-58px");
    })

    //点击侧边按钮，侧边栏显示,遮罩层开启
    $("#sidebtn").click(function() {
            $("#nav-mobile").animate({
                "left": "0"
            }, 1000);

            $("#mask").show();
            $("#mask").animate({
                "left": "250px"
            }, 1000);

            $("#container").animate({
                "left": "250px"
            }, 1000);

            $("body").css("overflow", "hidden");
        })
        //点击遮罩层任意位置，遮罩层消失，侧边栏隐藏，主要内容区域恢复
    $("#mask").click(function() {
            $("#mask").hide();
            $("#mask").css("left", "0px");
            $("#nav-mobile").animate({
                "left": "-250px"
            }, 1000);


            $("#container").animate({
                "left": "0px"
            }, 1000);

            $("body").css("overflow", "auto");
        })
        /*滚动条监听*/
    $(window).scroll(function() {
            var top = $(window).scrollTop();

            if (top > 30) {
                $(".gotop").show();
            } else {
                $(".gotop").hide();
            }
        })
        //点击回到顶部
    $("#gotop").click(function() {
        $(window).scrollTop(0);
    })
})
