

jQuery(function($){
    var $pagebody   = $('body');
    var $kuabove    = $('.ku-above');
    var $kubelow    = $('.ku-below');
    var $kubassador = $('.ambassador');
    var $footer     = $('.site-footer');
    // var $kubelowsingle = $('.single div[itemprop^="description"]');

    var $window = $(window).on('resize', function(){
        var bodyheight   = $pagebody.height();
        var footerheight = $footer.height();
        var aboveheight  = bodyheight;
        var belowheight  = bodyheight;
        var ambassheight = bodyheight;
        var pullupbelow  = -aboveheight;
      
        $kuabove.height(aboveheight + 'px');
        $kubelow.height(belowheight + 'px');
        $kubassador.css('max-height', ambassheight + 'px');
        $kubassador.css('height', ambassheight + 'px');
        $kubelow.css('margin-top', pullupbelow + 'px');

    }).trigger('resize'); //on page load
});