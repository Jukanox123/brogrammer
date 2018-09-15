<script>
    // Navbar change on scroll
    $(document).ready(function () {
        let scroll_start = 0;
        let startchange = $('.bg');
        let offset = startchange.offset();
        if (startchange.length) {
            $(document).scroll(function () {
                scroll_start = $(this).scrollTop();
                if (scroll_start > offset.top) {
                    $("nav").css('background-color', 'white');
                    $(".navbarTitle").css('color', '#05189a');
                } else {
                    $('nav').css('background-color', 'transparent');
                    $(".navbarTitle").css('color', 'white');
                }
            });
        }
    });
</script>