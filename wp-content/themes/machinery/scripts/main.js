$(document).ready(function() {
        console.log('PK load -------');
        var actual = $('#stoy').attr('data-url');
        switch(actual){
            case 'index':
                console.log("index");
                $(".navbar-fixed-top").css("opacity","0" );
                      $(window).scroll(function (event) {
                    var scroll = $(window).scrollTop();
                    
                    // Do something
                    console.log(scroll);
                    if(scroll > 480){
                        $(".navbar-fixed-top").css("top", "0px ");
                        $(".navbar-fixed-top").css("bottom", "inherit");
                        $(".navbar-fixed-top").css("opacity", "1");
                    }else{
                        console.log(" estoy abajo");
                        $(".navbar-fixed-top").css("bottom", "-28px ");
                        $(".navbar-fixed-top").css("top", "inherit");
                        $(".navbar-fixed-top").css("opacity","0" );
                    }
                });
            break;
            case 'nosotros':
            console.log("nosotros");
            $(".navbar-fixed-top").css("top", "0px ");
            $(".navbar-fixed-top").css("bottom", "inherit");
            break;
            case 'productos':
                console.log("produtos");
            $(".navbar-fixed-top").css("top", "0px ");
            $(".navbar-fixed-top").css("bottom", "inherit");
            var top = $("#stoy").position();
            console.log(top);
                var scroll = $(window).scrollTop();
             $('html, body').animate({ scrollTop : top.top }, 'slow');
            break;
            case 'videos':
                console.log("produtos");
            $(".navbar-fixed-top").css("top", "0px ");
            $(".navbar-fixed-top").css("bottom", "inherit");
            break;
            case 'contacto':
                console.log("produtos");
            $(".navbar-fixed-top").css("top", "0px ");
            $(".navbar-fixed-top").css("bottom", "inherit");
            break;
        }
});