(function () {
    var thisScript = document.scripts[document.scripts.length - 1];
    var originDomain = 'http://camp.drupalchile.org';
    var urlIframe = originDomain + '/banner-drupalcamp/widget/index.php';
    var widgetIframe = document.createElement('iframe');

    widgetIframe.src = urlIframe
    widgetIframe.setAttribute("frameborder", "0");
    widgetIframe.style.width    = '100%';
    widgetIframe.style.maxWidth = '300px';
    widgetIframe.style.border   = 'none';
    widgetIframe.style.display  = 'block';
    widgetIframe.style.margin   = 'auto';
    widgetIframe.style.overflow = 'hidden';

    var parent = thisScript.parentElement;
    parent.insertBefore(widgetIframe, thisScript.nextSibling);

    window.addEventListener('message', receiveMessageIframe, false);

    function receiveMessageIframe(evt)
    {
        if (evt.origin === originDomain && typeof evt.data.drupalCamp !== "undefined")
        {
            widgetIframe.height = (evt.data.height) + "px";
        }
    }

})();
