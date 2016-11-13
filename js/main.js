var index = 1,
    animTime = 400,
    br = {};

br = {
    sizeWindow: function() {
        console.log('size window');
        var vph = $(window).height();
        $('.frames li').css({'height':vph + 'px'});
    },
    functionCheck: function(index) {
        // Page functionality by frame
        // Misfits
        if($('.frame').eq(index).hasClass('misfits')) {
            $('.ocean').get(0).play();
            $('.ocean').get(0).volume = 0.1;
        } else {
            $('.ocean').get(0).pause();
        }
    }
}

$(document).ready(function(){
    //size pictures to fill whole screen
    br.sizeWindow();

	$('.next, .prev').click(function(){
        // individual next and previous button actions
        switch ($(this).hasClass('next')) {
            case true:
            if(index !== $('.frames li').length) {
                $('.frame').eq(index).fadeTo('slow', 1);
                index++;
                index === $('.frames li').length ? $('.next-x').show(animTime) : '';
            }
            $('.prev-x').hide(animTime);
            break;
            case false:
            $('.next-x').hide(animTime);
            if(index !== 1) {
                index--;
                $('.frame').eq(index).fadeTo('slow', 0);
                    index === 1 ?  $('.prev-x').show(animTime) : '';
                }
        }

        // collective next and previous button actions
        br.functionCheck(index-1);
    });


});
