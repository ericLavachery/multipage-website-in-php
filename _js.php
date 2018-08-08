<!-- load JS files -->
<!-- <script src="js/jquery-1.11.3.min.js"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Tether for Bootstrap -->
<script src="https://www.atlasestateagents.co.uk/javascript/tether.min.js"></script>
<!-- <script src="js/bootstrap.min.js"></script> -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

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

    // $('#tmNavbar').singlePageNav({
    //     'currentClass' : "active",
    //     offset : navbarHeight
    // });


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

        // $('#tmNavbar').singlePageNav({
        //     'currentClass' : "active",
        //     offset : navbarHeight
        // });
    });

    /*  Scroll to top */
    $('#go-to-top').each(function(){
        $(this).click(function(){
            $('html,body').animate({ scrollTop: 0 }, 'slow');
            return false;
        });
    });

});

var ww = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
console.log(ww);
</script>

<?php if (isset($okThen) && $okThen == 'yes') {
    echo('<script>$("#formConfirmModal").modal("show");</script>');
} ?>

<script type="text/javascript">
//Add this below content to your HTML page, or add the js file to your page at the very top to register service worker
if (navigator.serviceWorker.controller) {
    console.log('[PWA Builder] active service worker found, no need to register')
} else {
    //Register the ServiceWorker
    navigator.serviceWorker.register('service-worker.js', {
        scope: './'
    }).then(function(reg) {
        console.log('Service worker has been registered for scope:'+ reg.scope);
    });
}
</script>

<!-- <script type="text/javascript">
//This is the service worker with the Cache-first network
//Add this below content to your HTML page, or add the js file to your page at the very top to register service worker
if (navigator.serviceWorker.controller) {
console.log('[PWA Builder] active service worker found, no need to register')
} else {
//Register the ServiceWorker
navigator.serviceWorker.register('pwabuilder-sw.js', {
scope: './'
}).then(function(reg) {
console.log('Service worker has been registered for scope:'+ reg.scope);
});
}
</script> -->
