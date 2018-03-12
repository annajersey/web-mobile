"use strict"
jQuery(function () {
    jQuery('#wom-submit').on('click', function () {
        var result = 0;
        var mobileOnly = 0;
        var webOnly = 0;
        var message = '';
        jQuery('#web-or-mobile input:checked').each(function () {
            console.log('test');
            result += Number(jQuery(this).val());
            if (jQuery(this).attr('data-mobile-only') == 1) mobileOnly += Number(jQuery(this).attr('data-result'));
            if (jQuery(this).attr('data-web-only') == 1) webOnly += Number(jQuery(this).attr('data-result'));
        });
        if (webOnly < 1) {
            console.log('webOnly');
            message = "You don't need to invest in a native mobile app now as you'll get what you need with a web app. Either way, you'll need to reconsider this questions in future"
        }
        if (mobileOnly > 2) {
            console.log('mobileOnly');
            message = "You'll definitely need a native mobile app. As for today, required features indicated in your test can't work great on web app so you won't be able to deliver acceptable user experience";
        }

        if (!message) {
            if (result >= 1.6 && result < 3.9) message = "You don't need to invest in a native mobile app now as you'll get what you need with a web app. Either way, you'll need to reconsider this questions in future"
            else if (result < 6.2) message = "We recommend to start with a Web app, as you don't require features that can be delivered only with mobile app. Such solution will save your funds and let you test the solution in cost-effective way"
            else if (result < 8.5) message = "Mobile app is a recommended way to go - some of indicated requirements won't work properly with a web app."
            else message = "You'll definitely need a native mobile app. As for today, required features indicated in yout test can't work great on web app so you won't be able to deliver acceptable user experience"
        }

        console.log(result);
        console.log('webOnly<1', webOnly);
        console.log('mobileOnly>2', mobileOnly);
        jQuery('#wom-submit').hide();
        jQuery('#wom-loader').show();
        window.setTimeout(function(){
            jQuery('#wom-loader').hide();
           jQuery('#wom-message').text(message);
        },1000);
    })
});