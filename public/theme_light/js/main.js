$(document).ready(function () {
    $(window).scroll(function () {
        var sc = $(window).scrollTop();
        if (sc > 100) {
            $(".nav-section").addClass("sticky");
        } else {
            $(".nav-section").removeClass("sticky");
        }
    });

    $(function() {
        var profile = $('.profile');
        var profiledropdown = $('.profiledropdown');
        profile.on('click', function() {
            if (profiledropdown.hasClass('fade')) {
                profiledropdown.removeClass('fade').addClass('fade_reverse');
            } else if (profiledropdown.hasClass('fade_reverse')) {
                profiledropdown.removeClass('fade_reverse').addClass('fade');
            } else {
                profiledropdown.addClass('fade');
            }
            // profiledropdown.toggleClass('fade');
        });
    });





    // ------------- dashboard-----------
    $(".sidebar-dropdown > a").click(function() {
        $(".sidebar-submenu").slideUp(200);
        if (
            $(this)
                .parent()
                .hasClass("active")
        ) {
            $(".sidebar-dropdown").removeClass("active");
            $(this)
                .parent()
                .removeClass("active");
        } else {
            $(".sidebar-dropdown").removeClass("active");
            $(this)
                .next(".sidebar-submenu")
                .slideDown(200);
            $(this)
                .parent()
                .addClass("active");
        }
    });

    $("#close-sidebar").click(function() {
        $(".page-wrapper").removeClass("toggled");
    });
    $("#show-sidebar").click(function() {
        $(".page-wrapper").addClass("toggled");
    });


    // var Gradient = '<defs><linearGradient id="gradient" x1="0%" y1="0%" x2="100%" y2="0%" gradientUnits="userSpaceOnUse"><stop offset="0%" stop-color="#12C2E9"/><stop offset="50%" stop-color="#2989d8"/><stop offset="100%" stop-color="#7db9e8"/></linearGradient></defs>';
    // var bar1 = new ProgressBar.Circle(progress1, {
    //     strokeWidth: 17,
    //     easing: 'easeInOut',
    //     duration: 1400,
    //     color: 'url(#gradient)',
    //     trailColor: '#eee',
    //     trailWidth: 2,
    //     svgStyle: null
    // });
    // bar1.svg.insertAdjacentHTML('afterbegin', Gradient);
    // bar1.animate(1.0);

    // var bar2 = new ProgressBar.Circle(progress2, {
    //     strokeWidth: 17,
    //     easing: 'easeInOut',
    //     duration: 1400,
    //     color: 'url(#gradient)',
    //     trailColor: '#eee',
    //     trailWidth: 1,
    //     svgStyle: null
    // });
    // bar2.svg.insertAdjacentHTML('afterbegin', Gradient);
    // bar2.animate(1.0);

    // var bar3 = new ProgressBar.Circle(progress3, {
    //     strokeWidth: 17,
    //     easing: 'easeInOut',
    //     duration: 1400,
    //     color: 'url(#gradient)',
    //     trailColor: '#eee',
    //     trailWidth: 1,
    //     svgStyle: null
    // });
    // bar3.svg.insertAdjacentHTML('afterbegin', Gradient);
    // bar3.animate(1.0);


    // window.onclick = function () {
    //     alert("sdf");
    //     document.getElementById("menu-container").classList.remove("active");
    // };



});





