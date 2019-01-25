(function ($) {
    "use strict";

    // manual carousel controls
    $('.team .next').click(function () { $('.team .carousel').carousel('next'); return false; });
    $('.team .prev').click(function () { $('.team .carousel').carousel('prev'); return false; });

})(jQuery);