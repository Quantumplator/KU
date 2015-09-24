

jQuery(function($){
    var $pagebody = $('body');
    var $kuabove = $('.ku-above');
    var $kubelow = $('.ku-below');
    var $kubassador = $('.ambassador');
    // var $kubelowsingle = $('.single div[itemprop^="description"]');

    var $window = $(window).on('resize', function(){
        var bodyheight = $pagebody.height();
        var aboveheight = bodyheight;
        var belowheight = bodyheight;
        var ambassheight = bodyheight - 33;
        var pullupbelow = -aboveheight;
        // var kubelowwidth = $kubelow.width();
      
        $kuabove.height(aboveheight + 'px');
        $kubelow.height(belowheight + 'px');
        $kubassador.css('max-height', ambassheight + 'px');
        $kubassador.css('margin-top', 32 + 'px');
        $kubelow.css('margin-top', pullupbelow + 'px');

        // $kubelowsingle.height(kubelowsinglewidth + 'px');

        // Remove inline styles injected by audio player. There is a better way! I just don't know it yet.
        // $kubelow.width(''); $kubelow.css('float', '');

    }).trigger('resize'); //on page load
});