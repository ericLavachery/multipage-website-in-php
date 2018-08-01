<script type="text/javascript">
var bigNavbarHeight = 90;
var smallNavbarHeight = 68;
var navbarHeight = bigNavbarHeight;

$(document).ready(function(){

    var topOffset = 180;

    $(window).scroll(function(){

        if($(this).scrollTop() > topOffset) {
            $(".navbar-container").addClass("sticky");
        }
        else {
            $(".navbar-container").removeClass("sticky");
        }

    });

    /* Single page nav */
    if($(window).width() < 992) {
        navbarHeight = smallNavbarHeight;
    }

    $('#tmNavbar').singlePageNav({
        'currentClass' : "active",
        offset : navbarHeight
    });


    /* Collapse menu after click */
    $('#tmNavbar').on("click", "a", null, function () {
        $('#tmNavbar').collapse('hide');
    });

    // Handle nav offset upon window resize
    $(window).resize(function(){
        if($(window).width() < 992) {
            navbarHeight = smallNavbarHeight;
        } else {
            navbarHeight = bigNavbarHeight;
        }

        $('#tmNavbar').singlePageNav({
            'currentClass' : "active",
            offset : navbarHeight
        });
    });

    /*  Scroll to top */
    $('#go-to-top').each(function(){
        $(this).click(function(){
            $('html,body').animate({ scrollTop: 0 }, 'slow');
            return false;
        });
    });

});
</script>
