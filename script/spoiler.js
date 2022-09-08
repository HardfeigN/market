$(document).ready(function() {
    $('.spoiler_title').click(function(event) {
        if($('.for_spoiler').hasClass('one')){
            $('.spoiler_title').not($(this)).removeClass('active');
            $('.spoiler_text').not($(this).next()).slideUp(300);
        }
        $(this).toggleClass('active').next().slideToggle(300);
        $(".spoiler_text").animate({ scrollTop: $(this).offset().top }, 1000);
    });
});