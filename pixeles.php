<!-- Google Tag Manager -->
<amp-analytics config="https://www.googletagmanager.com/amp.json?id=GTM-N4M9LC4&gtm.url=SOURCE_URL" data-credentials="include"></amp-analytics>
    <?php include ('chat.php');?>
    <amp-user-notification layout="nodisplay"
  id="amp-user-notification1"><p>
  We use technical and analytics cookies to ensure that we give you the best experience on our website.</p>
  <button class="aceptar" on="tap:amp-user-notification1.dismiss">Accept</button>
</amp-user-notification><!--SEGUMIENTO DE ANALYTICS --><amp-analytics type="googleanalytics"><script type="application/json">{"vars":{"account":"UA-122019596-1"},"triggers":{"trackPageview":{"on":"visible","request":"pageview"}}}</script></amp-analytics><!--BACK TO TOP--><div id="top-page"></div><amp-animation id="showAnim" layout="nodisplay"><script type="application/json">{"duration":"200ms","fill":"both","iterations":"1","direction":"alternate","animations":[{"selector":"#scrollToTopButton","keyframes":[{"opacity":"1","visibility":"visible"}]}]}</script></amp-animation><amp-animation id="hideAnim" layout="nodisplay"><script type="application/json">{"duration":"200ms","fill":"both","iterations":"1","direction":"alternate","animations":[{"selector":"#scrollToTopButton","keyframes":[{"opacity":"0","visibility":"hidden"}]}]}</script></amp-animation><div id="marker"><amp-position-observer on="enter:hideAnim.start; exit:showAnim.start" layout="nodisplay"></amp-position-observer></div><header><?php include('menu.php'); ?>
  <!-- Facebook Pixel Analytics tracking -->
<amp-analytics type="facebookpixel" id="facebook-pixel">
    <script type="application/json">
    {
        "vars": {
            "pixelId": "204381543737344"
        },
        "triggers": {
            "trackPageview": {
                "on": "visible",
                "request": "pageview"
            }
        }
    }
    </script>
</amp-analytics>
<!-- End Facebook Pixel Analytics example -->