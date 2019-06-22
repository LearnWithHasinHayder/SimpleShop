/* ---------------------------------------------
 common scripts
 --------------------------------------------- */

;(function ($) {

    "use strict";

    var $window = $(window);

    $(document).ready(function () {

        var $navbarCollapse = $(".navbar-collapse"),
            $navbarNav = $navbarCollapse.find('.navbar-nav');

        $navbarNav.on('click', 'a', function(e) {
            if ( e.target.hash &&
                document.getElementById(e.target.hash.slice(1))
            ) {
                e.preventDefault();

                // Add active class to clicked item and remove from the rest
                $navbarNav.find('.active').removeClass('active');
                $(e.target).addClass('active');

                // Navigate to clicked section
                var offset = $(e.target.hash).offset();
                $('html, body')
                    .stop()
                    .animate({
                        scrollTop: offset.top
                    }, 500);

                // Collapse navbar
                $navbarCollapse.collapse('hide');
            }
        });

        /**
         * Multilevel dropdown
         */
        $('.dropdown-menu a.dropdown-toggle').on('click', function() {
            var $_this = $(this);
            var $subMenu =  $_this.next(".dropdown-menu");

            if (! $_this.next().hasClass('show')) {
                $_this.parents('.dropdown-menu').first().find('.show').removeClass("show");
            }

            $subMenu.toggleClass('show');

            $_this.parents('li.dropdown.show').on('hidden.bs.dropdown', function() {
                $('.dropdown-submenu .show').removeClass("show");
            });

            return false;
        });

        /* ---------------------------------------------
         height 100%
         --------------------------------------------- */

        $(".js_full_height").height($window.height());

        $window.on('resize', function(){
            $(".js_full_height").height($window.height());
        });



        /* ---------------------------------------------
         add sticky
         --------------------------------------------- */

        $window.on('scroll', function () {
            var wSize = $window.width();
            if (wSize > 767 && $(this).scrollTop() > 1) {
                $('.app-header').addClass("sticky-header");
            }
            else {
                $('.app-header').removeClass("sticky-header");
            }
        });


        // search
        $('#search-icon').on('click', function (e) {
            e.preventDefault();
            // console.log('Click');
            $('#menu').addClass('hidden-for-search-appear');
            $('#form-search').addClass('form-search--visible');
            $('#form-search .form-control').focus();
        });
        $('#form-search-close-btn').on('click', function (e) {
            e.preventDefault();
            $('#menu').removeClass('hidden-for-search-appear');
            // $('.tb-attr').removeClass('hidden-for-search-appear');
            $('#form-search').removeClass('form-search--visible');
        });




    });

})(jQuery);
