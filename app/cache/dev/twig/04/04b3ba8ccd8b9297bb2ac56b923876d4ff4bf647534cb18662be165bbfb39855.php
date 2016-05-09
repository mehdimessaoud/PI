<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_1195e446f9b7cb15e435d73f02923ddf9a988b77863ac90be367f3e054a1eeda extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'files' => array($this, 'block_files'),
            'header' => array($this, 'block_header'),
            'username' => array($this, 'block_username'),
            'header_mobile' => array($this, 'block_header_mobile'),
            'username_mobile' => array($this, 'block_username_mobile'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'page' => array($this, 'block_page'),
            'profile' => array($this, 'block_profile'),
            'column' => array($this, 'block_column'),
            'aside' => array($this, 'block_aside'),
            'undercolumn' => array($this, 'block_undercolumn'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />


</script>
        ";
        // line 8
        echo $this->env->getExtension('facebook')->renderInitialize(array("xfbml" => true, "fbAsyncInit" => "onFbInit();"));
        echo "
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/javascript.js"), "html", null, true);
        echo "\"></script>
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/styles.css"), "html", null, true);
        echo "\"/>
        <title>";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
         
        <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\" ></script>
        <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/javascript.js"), "html", null, true);
        echo "\" ></script>
        <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("post_fichiers/ga_002.js"), "html", null, true);
        echo "\" async=\"\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("post_fichiers/recaptcha__fr_002.js"), "html", null, true);
        echo "\" async=\"\" type=\"text/javascript\"></script>
        <script type=\"text/javascript\" async=\"\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("post_fichiers/ga.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" async=\"\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("post_fichiers/recaptcha__fr.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("post_fichiers/ga1.js"), "html", null, true);
        echo "\" async=\"\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("post_fichiers/recaptcha__fr1.js"), "html", null, true);
        echo "\" async=\"\" type=\"text/javascript\"></script>
        <script type=\"text/javascript\">
            window._wpemojiSettings = {\"baseUrl\":\"https:\\/\\/s.w.org\\/images\\/core\\/emoji\\/72x72\\/\", \"ext\":\".png\", \"source\":{\"concatemoji\":\"http:\\/\\/www.bluthemes.com\\/themes-special\\/katla\\/wp-includes\\/js\\/wp-emoji-release.min.js?ver=4.4.2\"}};
            !function(a, b, c){function d(a){var c, d = b.createElement(\"canvas\"), e = d.getContext && d.getContext(\"2d\"), f = String.fromCharCode; return e && e.fillText?(e.textBaseline = \"top\", e.font = \"600 32px Arial\", \"flag\" === a?(e.fillText(f(55356, 56806, 55356, 56826), 0, 0), d.toDataURL().length > 3e3):\"diversity\" === a?(e.fillText(f(55356, 57221), 0, 0), c = e.getImageData(16, 16, 1, 1).data.toString(), e.fillText(f(55356, 57221, 55356, 57343), 0, 0), c !== e.getImageData(16, 16, 1, 1).data.toString()):(\"simple\" === a?e.fillText(f(55357, 56835), 0, 0):e.fillText(f(55356, 57135), 0, 0), 0 !== e.getImageData(16, 16, 1, 1).data[0])):!1}function e(a){var c = b.createElement(\"script\"); c.src = a, c.type = \"text/javascript\", b.getElementsByTagName(\"head\")[0].appendChild(c)}var f, g; c.supports = {simple:d(\"simple\"), flag:d(\"flag\"), unicode8:d(\"unicode8\"), diversity:d(\"diversity\")}, c.DOMReady = !1, c.readyCallback = function(){c.DOMReady = !0}, c.supports.simple && c.supports.flag && c.supports.unicode8 && c.supports.diversity || (g = function(){c.readyCallback()}, b.addEventListener?(b.addEventListener(\"DOMContentLoaded\", g, !1), a.addEventListener(\"load\", g, !1)):(a.attachEvent(\"onload\", g), b.attachEvent(\"onreadystatechange\", function(){\"complete\" === b.readyState && c.readyCallback()})), f = c.source || {}, f.concatemoji?e(f.concatemoji):f.wpemoji && f.twemoji && (e(f.twemoji), e(f.wpemoji)))}(window, document, window._wpemojiSettings);
        </script>
        <script type=\"text/javascript\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("post_fichiers/wp-emoji-release_003.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("post_fichiers/wp-emoji-release_002.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("post_fichiers/wp-emoji-release.js"), "html", null, true);
        echo "\"></script>
        <style type=\"text/css\">
            img.wp-smiley,
            img.emoji {
                display: inline !important;
                border: none !important;
                box-shadow: none !important;
                height: 1em !important;
                width: 1em !important;
                margin: 0 .07em !important;
                vertical-align: -0.1em !important;
                background: none !important;
                padding: 0 !important;
            }
        </style>
        <!-- import files -->
            ";
        // line 44
        $this->displayBlock('files', $context, $blocks);
        // line 45
        echo "        <!-- /import files -->
        <link rel=\"stylesheet\" id=\"acf-global-css\" href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("post_fichiers/acf-global.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
        <link rel=\"stylesheet\" id=\"wp-color-picker-css\" href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("post_fichiers/color-picker.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
        <link rel=\"stylesheet\" id=\"select2-css\" href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("post_fichiers/select2.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
        <link rel=\"stylesheet\" id=\"acf-datepicker-css\" href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("post_fichiers/jquery-ui-1.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
        <link rel=\"stylesheet\" id=\"acf-input-css\" href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("post_fichiers/acf-input.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
        <link rel=\"stylesheet\" id=\"acf-pro-input-css\" href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("post_fichiers/acf-pro-input.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
        <link rel=\"stylesheet\" id=\"acf-input-google_font_selector-css\" href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("post_fichiers/input.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
        <link rel=\"stylesheet\" id=\"wsl-widget-css\" href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("post_fichiers/style_002.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
        <link rel=\"stylesheet\" id=\"blt-bootstrap-css\" href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("post_fichiers/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
        <link rel=\"stylesheet\" id=\"blt-style-css\" href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("post_fichiers/style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
        <link rel=\"stylesheet\" id=\"blt-fontawesome-css\" href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("post_fichiers/font-awesome.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
        <link rel=\"stylesheet\" id=\"acfgfs-enqueue-fonts-css\" href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("post_fichiers/css.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
        <script type=\"text/javascript\" src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("post_fichiers/jquery.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("post_fichiers/jquery-migrate.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("post_fichiers/core.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("post_fichiers/widget.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("post_fichiers/mouse.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("post_fichiers/sortable.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("post_fichiers/resizable.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("post_fichiers/datepicker.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("post_fichiers/draggable.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("post_fichiers/slider.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("post_fichiers/jquery_002.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("post_fichiers/iris.js"), "html", null, true);
        echo "\"></script><style id=\"iris-css\">.iris-picker{display:block;position:relative}.iris-picker,.iris-picker *{-moz-box-sizing:content-box;-webkit-box-sizing:content-box;box-sizing:content-box}input+.iris-picker{margin-top:4px}.iris-error{background-color:#ffafaf}.iris-border{border-radius:3px;border:1px solid #aaa;width:200px;background-color:#fff}.iris-picker-inner{position:absolute;top:0;right:0;left:0;bottom:0}.iris-border .iris-picker-inner{top:10px;right:10px;left:10px;bottom:10px}.iris-picker .iris-square-inner{position:absolute;left:0;right:0;top:0;bottom:0}.iris-picker .iris-square,.iris-picker .iris-slider,.iris-picker .iris-square-inner,.iris-picker .iris-palette{border-radius:3px;box-shadow:inset 0 0 5px rgba(0,0,0,.4);height:100%;width:12.5%;float:left;margin-right:5%}.iris-picker .iris-square{width:76%;margin-right:10%;position:relative}.iris-picker .iris-square-inner{width:auto;margin:0}.iris-ie-9 .iris-square,.iris-ie-9 .iris-slider,.iris-ie-9 .iris-square-inner,.iris-ie-9 .iris-palette{box-shadow:none;border-radius:0}.iris-ie-9 .iris-square,.iris-ie-9 .iris-slider,.iris-ie-9 .iris-palette{outline:1px solid rgba(0,0,0,.1)}.iris-ie-lt9 .iris-square,.iris-ie-lt9 .iris-slider,.iris-ie-lt9 .iris-square-inner,.iris-ie-lt9 .iris-palette{outline:1px solid #aaa}.iris-ie-lt9 .iris-square .ui-slider-handle{outline:1px solid #aaa;background-color:#fff;-ms-filter:\"alpha(Opacity=30)\"}.iris-ie-lt9 .iris-square .iris-square-handle{background:0;border:3px solid #fff;-ms-filter:\"alpha(Opacity=50)\"}.iris-picker .iris-strip{margin-right:0;position:relative}.iris-picker .iris-strip .ui-slider-handle{position:absolute;background:0;margin:0;right:-3px;left:-3px;border:4px solid #aaa;border-width:4px 3px;width:auto;height:6px;border-radius:4px;box-shadow:0 1px 2px rgba(0,0,0,.2);opacity:.9;z-index:5;cursor:ns-resize}.iris-strip .ui-slider-handle:before{content:\" \";position:absolute;left:-2px;right:-2px;top:-3px;bottom:-3px;border:2px solid #fff;border-radius:3px}.iris-picker .iris-slider-offset{position:absolute;top:11px;left:0;right:0;bottom:-3px;width:auto;height:auto;background:transparent;border:0;border-radius:0}.iris-picker .iris-square-handle{background:transparent;border:5px solid #aaa;border-radius:50%;border-color:rgba(128,128,128,.5);box-shadow:none;width:12px;height:12px;position:absolute;left:-10px;top:-10px;cursor:move;opacity:1;z-index:10}.iris-picker .ui-state-focus .iris-square-handle{opacity:.8}.iris-picker .iris-square-handle:hover{border-color:#999}.iris-picker .iris-square-value:focus .iris-square-handle{box-shadow:0 0 2px rgba(0,0,0,.75);opacity:.8}.iris-picker .iris-square-handle:hover::after{border-color:#fff}.iris-picker .iris-square-handle::after{position:absolute;bottom:-4px;right:-4px;left:-4px;top:-4px;border:3px solid #f9f9f9;border-color:rgba(255,255,255,.8);border-radius:50%;content:\" \"}.iris-picker .iris-square-value{width:8px;height:8px;position:absolute}.iris-ie-lt9 .iris-square-value,.iris-mozilla .iris-square-value{width:1px;height:1px}.iris-palette-container{position:absolute;bottom:0;left:0;margin:0;padding:0}.iris-border .iris-palette-container{left:10px;bottom:10px}.iris-picker .iris-palette{margin:0;cursor:pointer}.iris-square-handle,.ui-slider-handle{border:0;outline:0}</style><style id=\"iris-css\">.iris-picker{display:block;position:relative}.iris-picker,.iris-picker *{-moz-box-sizing:content-box;-webkit-box-sizing:content-box;box-sizing:content-box}input+.iris-picker{margin-top:4px}.iris-error{background-color:#ffafaf}.iris-border{border-radius:3px;border:1px solid #aaa;width:200px;background-color:#fff}.iris-picker-inner{position:absolute;top:0;right:0;left:0;bottom:0}.iris-border .iris-picker-inner{top:10px;right:10px;left:10px;bottom:10px}.iris-picker .iris-square-inner{position:absolute;left:0;right:0;top:0;bottom:0}.iris-picker .iris-square,.iris-picker .iris-slider,.iris-picker .iris-square-inner,.iris-picker .iris-palette{border-radius:3px;box-shadow:inset 0 0 5px rgba(0,0,0,.4);height:100%;width:12.5%;float:left;margin-right:5%}.iris-picker .iris-square{width:76%;margin-right:10%;position:relative}.iris-picker .iris-square-inner{width:auto;margin:0}.iris-ie-9 .iris-square,.iris-ie-9 .iris-slider,.iris-ie-9 .iris-square-inner,.iris-ie-9 .iris-palette{box-shadow:none;border-radius:0}.iris-ie-9 .iris-square,.iris-ie-9 .iris-slider,.iris-ie-9 .iris-palette{outline:1px solid rgba(0,0,0,.1)}.iris-ie-lt9 .iris-square,.iris-ie-lt9 .iris-slider,.iris-ie-lt9 .iris-square-inner,.iris-ie-lt9 .iris-palette{outline:1px solid #aaa}.iris-ie-lt9 .iris-square .ui-slider-handle{outline:1px solid #aaa;background-color:#fff;-ms-filter:\"alpha(Opacity=30)\"}.iris-ie-lt9 .iris-square .iris-square-handle{background:0;border:3px solid #fff;-ms-filter:\"alpha(Opacity=50)\"}.iris-picker .iris-strip{margin-right:0;position:relative}.iris-picker .iris-strip .ui-slider-handle{position:absolute;background:0;margin:0;right:-3px;left:-3px;border:4px solid #aaa;border-width:4px 3px;width:auto;height:6px;border-radius:4px;box-shadow:0 1px 2px rgba(0,0,0,.2);opacity:.9;z-index:5;cursor:ns-resize}.iris-strip .ui-slider-handle:before{content:\" \";position:absolute;left:-2px;right:-2px;top:-3px;bottom:-3px;border:2px solid #fff;border-radius:3px}.iris-picker .iris-slider-offset{position:absolute;top:11px;left:0;right:0;bottom:-3px;width:auto;height:auto;background:transparent;border:0;border-radius:0}.iris-picker .iris-square-handle{background:transparent;border:5px solid #aaa;border-radius:50%;border-color:rgba(128,128,128,.5);box-shadow:none;width:12px;height:12px;position:absolute;left:-10px;top:-10px;cursor:move;opacity:1;z-index:10}.iris-picker .ui-state-focus .iris-square-handle{opacity:.8}.iris-picker .iris-square-handle:hover{border-color:#999}.iris-picker .iris-square-value:focus .iris-square-handle{box-shadow:0 0 2px rgba(0,0,0,.75);opacity:.8}.iris-picker .iris-square-handle:hover::after{border-color:#fff}.iris-picker .iris-square-handle::after{position:absolute;bottom:-4px;right:-4px;left:-4px;top:-4px;border:3px solid #f9f9f9;border-color:rgba(255,255,255,.8);border-radius:50%;content:\" \"}.iris-picker .iris-square-value{width:8px;height:8px;position:absolute}.iris-ie-lt9 .iris-square-value,.iris-mozilla .iris-square-value{width:1px;height:1px}.iris-palette-container{position:absolute;bottom:0;left:0;margin:0;padding:0}.iris-border .iris-palette-container{left:10px;bottom:10px}.iris-picker .iris-palette{margin:0;cursor:pointer}.iris-square-handle,.ui-slider-handle{border:0;outline:0}</style><style id=\"iris-css\">.iris-picker{display:block;position:relative}.iris-picker,.iris-picker *{-moz-box-sizing:content-box;-webkit-box-sizing:content-box;box-sizing:content-box}input+.iris-picker{margin-top:4px}.iris-error{background-color:#ffafaf}.iris-border{border-radius:3px;border:1px solid #aaa;width:200px;background-color:#fff}.iris-picker-inner{position:absolute;top:0;right:0;left:0;bottom:0}.iris-border .iris-picker-inner{top:10px;right:10px;left:10px;bottom:10px}.iris-picker .iris-square-inner{position:absolute;left:0;right:0;top:0;bottom:0}.iris-picker .iris-square,.iris-picker .iris-slider,.iris-picker .iris-square-inner,.iris-picker .iris-palette{border-radius:3px;box-shadow:inset 0 0 5px rgba(0,0,0,.4);height:100%;width:12.5%;float:left;margin-right:5%}.iris-picker .iris-square{width:76%;margin-right:10%;position:relative}.iris-picker .iris-square-inner{width:auto;margin:0}.iris-ie-9 .iris-square,.iris-ie-9 .iris-slider,.iris-ie-9 .iris-square-inner,.iris-ie-9 .iris-palette{box-shadow:none;border-radius:0}.iris-ie-9 .iris-square,.iris-ie-9 .iris-slider,.iris-ie-9 .iris-palette{outline:1px solid rgba(0,0,0,.1)}.iris-ie-lt9 .iris-square,.iris-ie-lt9 .iris-slider,.iris-ie-lt9 .iris-square-inner,.iris-ie-lt9 .iris-palette{outline:1px solid #aaa}.iris-ie-lt9 .iris-square .ui-slider-handle{outline:1px solid #aaa;background-color:#fff;-ms-filter:\"alpha(Opacity=30)\"}.iris-ie-lt9 .iris-square .iris-square-handle{background:0;border:3px solid #fff;-ms-filter:\"alpha(Opacity=50)\"}.iris-picker .iris-strip{margin-right:0;position:relative}.iris-picker .iris-strip .ui-slider-handle{position:absolute;background:0;margin:0;right:-3px;left:-3px;border:4px solid #aaa;border-width:4px 3px;width:auto;height:6px;border-radius:4px;box-shadow:0 1px 2px rgba(0,0,0,.2);opacity:.9;z-index:5;cursor:ns-resize}.iris-strip .ui-slider-handle:before{content:\" \";position:absolute;left:-2px;right:-2px;top:-3px;bottom:-3px;border:2px solid #fff;border-radius:3px}.iris-picker .iris-slider-offset{position:absolute;top:11px;left:0;right:0;bottom:-3px;width:auto;height:auto;background:transparent;border:0;border-radius:0}.iris-picker .iris-square-handle{background:transparent;border:5px solid #aaa;border-radius:50%;border-color:rgba(128,128,128,.5);box-shadow:none;width:12px;height:12px;position:absolute;left:-10px;top:-10px;cursor:move;opacity:1;z-index:10}.iris-picker .ui-state-focus .iris-square-handle{opacity:.8}.iris-picker .iris-square-handle:hover{border-color:#999}.iris-picker .iris-square-value:focus .iris-square-handle{box-shadow:0 0 2px rgba(0,0,0,.75);opacity:.8}.iris-picker .iris-square-handle:hover::after{border-color:#fff}.iris-picker .iris-square-handle::after{position:absolute;bottom:-4px;right:-4px;left:-4px;top:-4px;border:3px solid #f9f9f9;border-color:rgba(255,255,255,.8);border-radius:50%;content:\" \"}.iris-picker .iris-square-value{width:8px;height:8px;position:absolute}.iris-ie-lt9 .iris-square-value,.iris-mozilla .iris-square-value{width:1px;height:1px}.iris-palette-container{position:absolute;bottom:0;left:0;margin:0;padding:0}.iris-border .iris-palette-container{left:10px;bottom:10px}.iris-picker .iris-palette{margin:0;cursor:pointer}.iris-square-handle,.ui-slider-handle{border:0;outline:0}</style>
        <script type=\"text/javascript\">
            /* <![CDATA[ */
            var wpColorPickerL10n = {\"clear\":\"Clear\", \"defaultString\":\"Default\", \"pick\":\"Select Color\"};
            /* ]]> */
        </script>
        <script type=\"text/javascript\" src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("post_fichiers/color-picker.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("post_fichiers/select2.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("post_fichiers/acf-input.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("post_fichiers/acf-pro-input.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("post_fichiers/input.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("post_fichiers/api.js"), "html", null, true);
        echo "\"></script>


        <script type=\"text/javascript\">
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-40601789-4']);
            _gaq.push(['_trackPageview']);
            (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();</script>
        <style type=\"text/css\">.blt-sidebar-sticky{display:none}</style><script type=\"text/javascript\"></script>\t<style type=\"text/css\">

            body{

                /* image */

                background-color: #f2f2f2;

                font-family: Open Sans;
            }



            h1,h2,h3,h4,h5{
                font-family: Open Sans;
            }

            .wpcf7-submit,
            .btn-theme{
                background: #4cc2bf;
            }
            .wpcf7-submit,
            .btn-theme:hover{
                background: #38aeab;
            }
            .blt_mailchimp .input-group .btn{
                border-left-color: #38aeab;
            }

            a{
                color: #4cc2bf;
            }
            .blu-post-tags a:hover,
            a.label-blt:hover{
                border-color: #38aeab;
                color: #38aeab;
            }
            a:focus, a:hover, a.label:focus, a.label:hover,
            .primary-menu .nav a:hover,
            .widget_calendar table tbody td a:hover{
                color: #38aeab;
            }

            ::-moz-selection{
                background-color: #4cc2bf;
                color: #FFF;
            }
            ::selection{
                background-color: #4cc2bf;
                color: #FFF;
            }
            .pagination .page-numbers.current{
                background-color: #4cc2bf;
                border-color: #38aeab;
            }

            .blu-post-pagination > a:hover,
            .blu-post-pagination > span{
                background-color: #4cc2bf;
                border-color: #4cc2bf;
            }

            .select2-container-active .select2-choice,
            .select2-container-active .select2-choices,
            .select2-drop-active,
            .select2-search{
                border-color: #38aeab;
            }
            .select2-results .select2-highlighted{
                background-color: #38aeab;
            }

            @media (min-width: 1100px){
                #site-content{
                    width: 1050px;
                }
                #site-content-column{
                    width: 690px;
                }
                .spot_below_menu,
                .container {
                    width: 1050px;
                }
            }

            .post-status{
                background-color: #4cc2bf;
            }
            .new-post-list > .list-group > .blt-add-new-image:hover{
                background-color: #4cc2bf;
            }
        </style>
    </head>
    <body class=\"single single-post postid-46 single-format-standard sidebar-right fixed-header acf-wp-4\">
        <script type=\"text/javascript\">

        var authurl = '";
        // line 188
        echo $this->env->getExtension('routing')->getPath("_security_check_facebook");
        echo "';

        function goLogIn(){
            window.location = authurl;
        }

        function onFbInit() {
            if (typeof(FB) != 'undefined' && FB != null ) {
                FB.Event.subscribe('auth.statusChange', function(response) {
                    setTimeout(goLogIn, 500);
                });
            }
        }

</script>




        ";
        // line 207
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 208
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 209
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 210
                    echo "                    <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                        ";
                    // line 211
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 214
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 215
            echo "        ";
        }
        // line 216
        echo "

        <div class=\"what-size\"></div>
        <main id=\"site\">

            <header style=\"width: 1349px;\" id=\"site-header\" class=\"navbar affix-top\">
                <div class=\"primary-menu\">
                    <div class=\"container\">
                        <div class=\"navbar-inner row\">
                            <div class=\"col-md-12\">

                                <div class=\"navbar-header\">
                                    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#katla-pri-navbar\" aria-expanded=\"false\"><i class=\"fa fa-bars\"></i></button>
                                    <a class=\"brand brand-logo\" href=\"#\" title=\"CrowdRise\" rel=\"home\">
                                        <img class=\"img-responsive\" src=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("post_fichiers/logo.png"), "html", null, true);
        echo "\" alt=\"CrowdRise\">
                                    </a>
                                </div>


                                <div class=\"navbar-collapse collapse\" id=\"katla-pri-navbar\" aria-expanded=\"false\" style=\"height: 1px;\">

                                    ";
        // line 237
        $this->displayBlock('header', $context, $blocks);
        // line 238
        echo "
                                    <!-- \t\t\t \t  -->
                                    <!-- RESPONSIVE MENUS -->
                                    <!-- \t\t\t\t  -->

                                    ";
        // line 243
        $this->displayBlock('header_mobile', $context, $blocks);
        // line 244
        echo "
                                    <ul id=\"menu-main-menu\" class=\"nav navbar-nav\">
                                        <li id=\"menu-item-144\" class=\" menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-144\"><a title=\"New\" href=\"#\"><i class=\"fa fa-star-o\"></i>&nbsp;&nbsp;New</a></li>
                                        <li id=\"menu-item-142\" class=\" menu-item menu-item-type-post_type menu-item-object-page menu-item-142\"><a title=\"Trending\" href=\"#\"><i class=\"fa fa-bolt\"></i>&nbsp;&nbsp;Trending</a></li>
                                        <li id=\"menu-item-143\" class=\" menu-item menu-item-type-post_type menu-item-object-page menu-item-143\"><a title=\"Top 10\" href=\"#\"><i class=\"fa fa-signal\"></i>&nbsp;&nbsp;Top 10</a></li>
                                    </ul>
                                    <ul id=\"menu-secondary\" class=\"nav navbar-nav visible-xs-block\">
                                        <li id=\"menu-item-147\" class=\"menu-item menu-item-type-taxonomy menu-item-object-category menu-item-147\"><a title=\"Funny\" href=\"#\">Funny</a></li>
                                        <li id=\"menu-item-152\" class=\"menu-item menu-item-type-taxonomy menu-item-object-category menu-item-152\"><a title=\"Videos\" href=\"#\">Videos</a></li>
                                        <li id=\"menu-item-151\" class=\"menu-item menu-item-type-taxonomy menu-item-object-category menu-item-151\"><a title=\"Pics\" href=\"#\">Pics</a></li>
                                        <li id=\"menu-item-148\" class=\"menu-item menu-item-type-taxonomy menu-item-object-category menu-item-148\"><a title=\"Inspiration\" href=\"#\">Inspiration</a></li>
                                        <li id=\"menu-item-149\" class=\"menu-item menu-item-type-taxonomy menu-item-object-category menu-item-149\"><a title=\"Music\" href=\"#\">Music</a></li>
                                        <li id=\"menu-item-145\" class=\"menu-item menu-item-type-taxonomy menu-item-object-category menu-item-145\"><a title=\"Art\" href=\"#\">Art</a></li>
                                        <li id=\"menu-item-146\" class=\"menu-item menu-item-type-taxonomy menu-item-object-category menu-item-146\"><a title=\"Design\" href=\"#\">Design</a></li>
                                        <li id=\"menu-item-150\" class=\"menu-item menu-item-type-taxonomy menu-item-object-category current-post-ancestor current-menu-parent current-post-parent menu-item-150\"><a title=\"Nature\" href=\"#\">Nature</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"secondary-menu hidden-xs\">
                    <div class=\"container\">
                        <div class=\"row\">

                            <div class=\"collapse navbar-collapse\" id=\"katla-sec-navbar\"><ul id=\"menu-secondary-1\" class=\"nav navbar-nav\"><li class=\"menu-item menu-item-type-taxonomy menu-item-object-category menu-item-147\"><a title=\"Funny\" href=\"#\">Funny</a></li>
                                    <li class=\"menu-item menu-item-type-taxonomy menu-item-object-category menu-item-152\">test<a title=\"Videos\" href=\"#\">Videos</a></li>
                                    <li class=\"menu-item menu-item-type-taxonomy menu-item-object-category menu-item-151\">test<a title=\"Pics\" href=\"#\">Pics</a></li>
                                    <li class=\"menu-item menu-item-type-taxonomy menu-item-object-category menu-item-148\">test<a title=\"Inspiration\" href=\"#\">Inspiration</a></li>
                                    <li class=\"menu-item menu-item-type-taxonomy menu-item-object-category menu-item-149\"><a title=\"Music\" href=\"#\">Music</a></li>
                                    <li class=\"menu-item menu-item-type-taxonomy menu-item-object-category menu-item-145\"><a title=\"Art\" href=\"#\">Art</a></li>
                                    <li class=\"menu-item menu-item-type-taxonomy menu-item-object-category menu-item-146\"><a title=\"Design\" href=\"#\">Design</a></li>
                                    <li class=\"menu-item menu-item-type-taxonomy menu-item-object-category current-post-ancestor current-menu-parent current-post-parent menu-item-150\"><a title=\"Nature\" href=\"#\">Nature</a></li>
                                </ul>\t\t\t\t\t</div>
                        </div>
                    </div>
                </div>
            </header>
            <div id=\"site-body\">




                  <div id=\"site-content\" class=\"clearfix paddrightzero\"><div class=\"single-widget\">
                           <div>
            ";
        // line 289
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 291
        echo "            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\">
    jQuery(document).ready(function(\$) {
\tjQuery('a.popup').live('click', function(){
\t\tnewwindow=window.open(\$(this).attr('href'),'','height=200,width=150');
\t\tif (window.focus) {newwindow.focus()}
\t\treturn false;
\t});
});
</script>
        </div>
                          ";
        // line 301
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 302
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                <a href=\"";
            // line 303
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "  </a>
                  <a href=\"";
            // line 304
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                     ";
        } else {
            // line 306
            echo "                          <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\" >";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.register", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>

                <a href=\"";
            // line 308
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
            ";
        }
        // line 310
        echo "
         </div></div>
            ";
        // line 312
        $this->displayBlock('page', $context, $blocks);
        // line 313
        echo "                <!-- /Large Page -->



            ";
        // line 317
        $this->displayBlock('profile', $context, $blocks);
        // line 318
        echo "

                    <!-- Left Page: add this div <div id=\"site-content\" class=\"clearfix\"><div id=\"site-content-column\"><div class=\"single-widget\">your code</div></div> -->
            ";
        // line 321
        $this->displayBlock('column', $context, $blocks);
        // line 322
        echo "                <!-- /Left Page  must close with aside-->
                <!-- aside Page: add this div <aside id=\"site-content-sidebar\"><div class=\"content-sidebar-wrap\"><div class=\"single-widget\"><div class=\"widget-body\">your code</div></div></div></aside></div> -->
            ";
        // line 324
        $this->displayBlock('aside', $context, $blocks);
        // line 325
        echo "                <!-- /aside Page -->


                <!-- under Left Page: add this div <div id=\"site-content\" class=\"clearfix\"><div id=\"site-content-column\"><div class=\"single-widget\">your code</div></div></div> -->
            ";
        // line 329
        $this->displayBlock('undercolumn', $context, $blocks);
        // line 330
        echo "

                <div class=\"footer-share clearfix\">
                    <div class=\"post-vote-header\">
                        <a class=\"btn btn-default post-vote post-vote-up\" data-post-id=\"46\" href=\"#vote-up\" title=\"Like\"><i class=\"fa fa-chevron-up\"></i></a>
                        <span class=\"vote-count\">902</span>
                        <a class=\"btn btn-default post-vote post-vote-down\" data-post-id=\"46\" href=\"#vote-down\" title=\"Dislike\"><i class=\"fa fa-chevron-down\"></i></a>
                    </div>
                    <a class=\"btn social-sharing share-facebook\" onclick=\"blt_social_share(event, '#')\">
                        <i class=\"fa fa-facebook\"></i> <span class=\"visible-xs-inline visible-sm-inline\">Share</span>
                    </a>
                    <a class=\"btn social-sharing share-twitter\" onclick=\"blt_social_share(event, '#')\">
                        <i class=\"fa fa-twitter\"></i> <span class=\"visible-xs-inline visible-sm-inline\">Tweet</span>
                    </a>
                </div>
            </div>

            <footer id=\"site-footer\">

                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\">
                            <div id=\"text-2\" class=\"single-widget widget_text\">
                                <div class=\"textwidget\">
                                    <img alt=\"CrowdRise\" src=\"";
        // line 354
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("post_fichiers/logo.png"), "html", null, true);
        echo "\" class=\"img-responsive\">
                                    The Key to your projects
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\">
                            <div id=\"nav_menu-2\" class=\"single-widget widget_nav_menu\">
                                <h3 class=\"widget-head\">Footer Menu</h3>
                                <div class=\"menu-footer-menu-container\">
                                    <ul id=\"menu-footer-menu-1\" class=\"menu\">
                                        <li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-275\"><a href=\"#\">Submit a Post</a></li>
                                        <li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-248\"><a href=\"#\">Theme Options</a></li>
                                        <li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-180\"><a href=\"#\">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"footer-text\">
                    <div class=\"container\">
                        <p>Copyright © 2016 · Theme design by Devs · <a href=\"#\" rel=\"nofollow\">www.crowdrise.com</a></p>
                    </div>
                </div>
            </footer>

        </main>






<link rel=\"stylesheet\" id=\"blt-demo-plugins-styles-css\" href=\"";
        // line 387
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("post_fichiers/plugins.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
<link rel=\"stylesheet\" id=\"spectrum-css-css\" href=\"";
        // line 388
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("post_fichiers/plugins_002.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
<script type=\"text/javascript\" src=\"";
        // line 389
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("post_fichiers/bootstrap.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
            /* <![CDATA[ */
            var blu = {\"site_url\":\"http:\\/\\/www.bluthemes.com\\/themes-special\\/katla\", \"user_logged_in\":\"false\", \"is_single\":\"1\", \"paged\":\"1\", \"post_id\":\"46\", \"ajaxurl\":\"http:\\/\\/www.bluthemes.com\\/themes-special\\/katla\\/wp-admin\\/admin-ajax.php\", \"vote_login_required\":\"false\", \"blt_nonce\":\"b86b100ecd\", \"locale\":{\"ajax_loading\":\"Loading\", \"ajax_no_more\":\"No More Posts\", \"no_email_provided\":\"No Email Provided\", \"thank_you_for_subscribing\":\"Thank you for subscribing\"}};
            /* ]]> */
        </script>
<script type=\"text/javascript\" src=\"";
        // line 395
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("post_fichiers/theme.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 396
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("post_fichiers/comment-reply.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 397
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("post_fichiers/wp-embed.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 398
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("post_fichiers/plugins.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 399
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("post_fichiers/script.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 400
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("post_fichiers/plugins_002.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
            /* <![CDATA[ */
            if (typeof acf !== 'undefined') {

            acf.o = {\"post_id\":null, \"nonce\":\"2a6d9dc63c\", \"admin_url\":\"http:\\/\\/www.bluthemes.com\\/themes-special\\/katla\\/wp-admin\\/\", \"ajaxurl\":\"http:\\/\\/www.bluthemes.com\\/themes-special\\/katla\\/wp-admin\\/admin-ajax.php\", \"ajax\":null, \"validation\":null, \"wp_version\":\"4.4.2\"};
            acf.l10n = {\"unload\":\"The changes you made will be lost if you navigate away from this page\", \"expand_details\":\"Expand Details\", \"collapse_details\":\"Collapse Details\", \"validation_successful\":\"Validation successful\", \"validation_failed\":\"Validation failed\", \"validation_failed_1\":\"1 field requires attention\", \"validation_failed_2\":\"%d fields require attention\", \"restricted\":\"Restricted\", \"image\":{\"select\":\"Select Image\", \"edit\":\"Edit Image\", \"update\":\"Update Image\", \"uploadedTo\":\"Uploaded to this post\", \"all\":\"All images\"}, \"file\":{\"select\":\"Select File\", \"edit\":\"Edit File\", \"update\":\"Update File\", \"uploadedTo\":\"uploaded to this post\"}, \"relationship\":{\"min\":\"Minimum values reached ( {min} values )\", \"max\":\"Maximum values reached ( {max} values )\", \"loading\":\"Loading\", \"empty\":\"No matches found\"}, \"google_map\":{\"locating\":\"Locating\", \"browser_support\":\"Sorry, this browser does not support geolocation\"}, \"date_picker\":{\"closeText\":\"Done\", \"currentText\":\"Today\", \"monthNames\":[\"January\", \"February\", \"March\", \"April\", \"May\", \"June\", \"July\", \"August\", \"September\", \"October\", \"November\", \"December\"], \"monthNamesShort\":[\"Jan\", \"Feb\", \"Mar\", \"Apr\", \"May\", \"Jun\", \"Jul\", \"Aug\", \"Sep\", \"Oct\", \"Nov\", \"Dec\"], \"monthStatus\":\"Show a different month\", \"dayNames\":[\"Sunday\", \"Monday\", \"Tuesday\", \"Wednesday\", \"Thursday\", \"Friday\", \"Saturday\"], \"dayNamesShort\":[\"Sun\", \"Mon\", \"Tue\", \"Wed\", \"Thu\", \"Fri\", \"Sat\"], \"dayNamesMin\":[\"S\", \"M\", \"T\", \"W\", \"T\", \"F\", \"S\"], \"isRTL\":false}, \"repeater\":{\"min\":\"Minimum rows reached ({min} rows)\", \"max\":\"Maximum rows reached ({max} rows)\"}, \"flexible_content\":{\"layout\":\"layout\", \"layouts\":\"layouts\", \"remove\":\"remove {layout}?\", \"min\":\"This field requires at least {min} {identifier}\", \"max\":\"This field has a limit of {max} {identifier}\", \"min_layout\":\"This field requires at least {min} {label} {identifier}\", \"max_layout\":\"Maximum {label} limit reached ({max} {identifier})\", \"available\":\"{available} {label} {identifier} available (max {max})\", \"required\":\"{required} {label} {identifier} required (min {min})\"}, \"gallery\":{\"select\":\"Add Image to Gallery\", \"edit\":\"Edit Image\", \"update\":\"Update Image\", \"uploadedTo\":\"uploaded to this post\", \"max\":\"Maximum selection reached\"}};
            acf.media.mime_types = {\"jpg|jpeg|jpe\":\"image\\/jpeg\", \"gif\":\"image\\/gif\", \"png\":\"image\\/png\", \"bmp\":\"image\\/bmp\", \"tiff|tif\":\"image\\/tiff\", \"ico\":\"image\\/x-icon\", \"asf|asx\":\"video\\/x-ms-asf\", \"wmv\":\"video\\/x-ms-wmv\", \"wmx\":\"video\\/x-ms-wmx\", \"wm\":\"video\\/x-ms-wm\", \"avi\":\"video\\/avi\", \"divx\":\"video\\/divx\", \"flv\":\"video\\/x-flv\", \"mov|qt\":\"video\\/quicktime\", \"mpeg|mpg|mpe\":\"video\\/mpeg\", \"mp4|m4v\":\"video\\/mp4\", \"ogv\":\"video\\/ogg\", \"webm\":\"video\\/webm\", \"mkv\":\"video\\/x-matroska\", \"3gp|3gpp\":\"video\\/3gpp\", \"3g2|3gp2\":\"video\\/3gpp2\", \"txt|asc|c|cc|h|srt\":\"text\\/plain\", \"csv\":\"text\\/csv\", \"tsv\":\"text\\/tab-separated-values\", \"ics\":\"text\\/calendar\", \"rtx\":\"text\\/richtext\", \"css\":\"text\\/css\", \"vtt\":\"text\\/vtt\", \"dfxp\":\"application\\/ttaf+xml\", \"mp3|m4a|m4b\":\"audio\\/mpeg\", \"ra|ram\":\"audio\\/x-realaudio\", \"wav\":\"audio\\/wav\", \"ogg|oga\":\"audio\\/ogg\", \"mid|midi\":\"audio\\/midi\", \"wma\":\"audio\\/x-ms-wma\", \"wax\":\"audio\\/x-ms-wax\", \"mka\":\"audio\\/x-matroska\", \"rtf\":\"application\\/rtf\", \"js\":\"application\\/javascript\", \"pdf\":\"application\\/pdf\", \"class\":\"application\\/java\", \"tar\":\"application\\/x-tar\", \"zip\":\"application\\/zip\", \"gz|gzip\":\"application\\/x-gzip\", \"rar\":\"application\\/rar\", \"7z\":\"application\\/x-7z-compressed\", \"psd\":\"application\\/octet-stream\", \"xcf\":\"application\\/octet-stream\", \"doc\":\"application\\/msword\", \"pot|pps|ppt\":\"application\\/vnd.ms-powerpoint\", \"wri\":\"application\\/vnd.ms-write\", \"xla|xls|xlt|xlw\":\"application\\/vnd.ms-excel\", \"mdb\":\"application\\/vnd.ms-access\", \"mpp\":\"application\\/vnd.ms-project\", \"docx\":\"application\\/vnd.openxmlformats-officedocument.wordprocessingml.document\", \"docm\":\"application\\/vnd.ms-word.document.macroEnabled.12\", \"dotx\":\"application\\/vnd.openxmlformats-officedocument.wordprocessingml.template\", \"dotm\":\"application\\/vnd.ms-word.template.macroEnabled.12\", \"xlsx\":\"application\\/vnd.openxmlformats-officedocument.spreadsheetml.sheet\", \"xlsm\":\"application\\/vnd.ms-excel.sheet.macroEnabled.12\", \"xlsb\":\"application\\/vnd.ms-excel.sheet.binary.macroEnabled.12\", \"xltx\":\"application\\/vnd.openxmlformats-officedocument.spreadsheetml.template\", \"xltm\":\"application\\/vnd.ms-excel.template.macroEnabled.12\", \"xlam\":\"application\\/vnd.ms-excel.addin.macroEnabled.12\", \"pptx\":\"application\\/vnd.openxmlformats-officedocument.presentationml.presentation\", \"pptm\":\"application\\/vnd.ms-powerpoint.presentation.macroEnabled.12\", \"ppsx\":\"application\\/vnd.openxmlformats-officedocument.presentationml.slideshow\", \"ppsm\":\"application\\/vnd.ms-powerpoint.slideshow.macroEnabled.12\", \"potx\":\"application\\/vnd.openxmlformats-officedocument.presentationml.template\", \"potm\":\"application\\/vnd.ms-powerpoint.template.macroEnabled.12\", \"ppam\":\"application\\/vnd.ms-powerpoint.addin.macroEnabled.12\", \"sldx\":\"application\\/vnd.openxmlformats-officedocument.presentationml.slide\", \"sldm\":\"application\\/vnd.ms-powerpoint.slide.macroEnabled.12\", \"onetoc|onetoc2|onetmp|onepkg\":\"application\\/onenote\", \"oxps\":\"application\\/oxps\", \"xps\":\"application\\/vnd.ms-xpsdocument\", \"odt\":\"application\\/vnd.oasis.opendocument.text\", \"odp\":\"application\\/vnd.oasis.opendocument.presentation\", \"ods\":\"application\\/vnd.oasis.opendocument.spreadsheet\", \"odg\":\"application\\/vnd.oasis.opendocument.graphics\", \"odc\":\"application\\/vnd.oasis.opendocument.chart\", \"odb\":\"application\\/vnd.oasis.opendocument.database\", \"odf\":\"application\\/vnd.oasis.opendocument.formula\", \"wp|wpd\":\"application\\/wordperfect\", \"key\":\"application\\/vnd.apple.keynote\", \"numbers\":\"application\\/vnd.apple.numbers\", \"pages\":\"application\\/vnd.apple.pages\"};
            acf.fields.wysiwyg.toolbars = {\"full\":{\"1\":\"bold,italic,strikethrough,bullist,numlist,blockquote,hr,alignleft,aligncenter,alignright,link,unlink,wp_more,spellchecker,fullscreen,wp_adv\", \"2\":\"formatselect,underline,alignjustify,forecolor,pastetext,removeformat,charmap,outdent,indent,undo,redo,wp_help\", \"3\":\"\", \"4\":\"\"}, \"basic\":{\"1\":\"bold,italic,underline,blockquote,strikethrough,bullist,numlist,alignleft,aligncenter,alignright,undo,redo,link,unlink,fullscreen\"}};
            acf.do_action('prepare');
            }
            /* ]]> */
        </script>
    </body>
</html>
";
    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        echo " ";
    }

    // line 44
    public function block_files($context, array $blocks = array())
    {
    }

    // line 237
    public function block_header($context, array $blocks = array())
    {
        $this->displayBlock('username', $context, $blocks);
    }

    public function block_username($context, array $blocks = array())
    {
    }

    // line 243
    public function block_header_mobile($context, array $blocks = array())
    {
        $this->displayBlock('username_mobile', $context, $blocks);
    }

    public function block_username_mobile($context, array $blocks = array())
    {
    }

    // line 289
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 290
        echo "            ";
    }

    // line 312
    public function block_page($context, array $blocks = array())
    {
    }

    // line 317
    public function block_profile($context, array $blocks = array())
    {
    }

    // line 321
    public function block_column($context, array $blocks = array())
    {
    }

    // line 324
    public function block_aside($context, array $blocks = array())
    {
    }

    // line 329
    public function block_undercolumn($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  760 => 329,  755 => 324,  750 => 321,  745 => 317,  740 => 312,  736 => 290,  733 => 289,  723 => 243,  713 => 237,  708 => 44,  702 => 12,  682 => 400,  678 => 399,  674 => 398,  670 => 397,  666 => 396,  662 => 395,  653 => 389,  649 => 388,  645 => 387,  609 => 354,  583 => 330,  581 => 329,  575 => 325,  573 => 324,  569 => 322,  567 => 321,  562 => 318,  560 => 317,  554 => 313,  552 => 312,  548 => 310,  541 => 308,  533 => 306,  526 => 304,  520 => 303,  515 => 302,  513 => 301,  501 => 291,  499 => 289,  452 => 244,  450 => 243,  443 => 238,  441 => 237,  431 => 230,  415 => 216,  412 => 215,  406 => 214,  397 => 211,  392 => 210,  387 => 209,  382 => 208,  380 => 207,  358 => 188,  247 => 80,  243 => 79,  239 => 78,  235 => 77,  231 => 76,  227 => 75,  218 => 69,  214 => 68,  210 => 67,  206 => 66,  202 => 65,  198 => 64,  194 => 63,  190 => 62,  186 => 61,  182 => 60,  178 => 59,  174 => 58,  170 => 57,  166 => 56,  162 => 55,  158 => 54,  154 => 53,  150 => 52,  146 => 51,  142 => 50,  138 => 49,  134 => 48,  130 => 47,  126 => 46,  123 => 45,  121 => 44,  102 => 28,  98 => 27,  94 => 26,  86 => 21,  82 => 20,  78 => 19,  74 => 18,  70 => 17,  66 => 16,  62 => 15,  58 => 14,  53 => 12,  49 => 11,  45 => 10,  40 => 8,  31 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/* */
/* */
/* </script>*/
/*         {{ facebook_initialize({'xfbml': true, 'fbAsyncInit': 'onFbInit();'}) }}*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*         <script src="{{ asset('js/javascript.js') }}"></script>*/
/*         <link rel="stylesheet" href="{{ asset('css/styles.css') }}"/>*/
/*         <title>{% block title %} {% endblock %}</title>*/
/*          */
/*         <script src="{{asset('js/bootstrap.js')}}" ></script>*/
/*         <script src="{{asset('js/javascript.js')}}" ></script>*/
/*         <script src="{{ asset('post_fichiers/ga_002.js')}}" async="" type="text/javascript"></script>*/
/*         <script src="{{ asset('post_fichiers/recaptcha__fr_002.js')}}" async="" type="text/javascript"></script>*/
/*         <script type="text/javascript" async="" src="{{ asset('post_fichiers/ga.js')}}"></script>*/
/*         <script type="text/javascript" async="" src="{{ asset('post_fichiers/recaptcha__fr.js')}}"></script>*/
/*         <script src="{{ asset('post_fichiers/ga1.js')}}" async="" type="text/javascript"></script>*/
/*         <script src="{{ asset('post_fichiers/recaptcha__fr1.js')}}" async="" type="text/javascript"></script>*/
/*         <script type="text/javascript">*/
/*             window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/72x72\/", "ext":".png", "source":{"concatemoji":"http:\/\/www.bluthemes.com\/themes-special\/katla\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.4.2"}};*/
/*             !function(a, b, c){function d(a){var c, d = b.createElement("canvas"), e = d.getContext && d.getContext("2d"), f = String.fromCharCode; return e && e.fillText?(e.textBaseline = "top", e.font = "600 32px Arial", "flag" === a?(e.fillText(f(55356, 56806, 55356, 56826), 0, 0), d.toDataURL().length > 3e3):"diversity" === a?(e.fillText(f(55356, 57221), 0, 0), c = e.getImageData(16, 16, 1, 1).data.toString(), e.fillText(f(55356, 57221, 55356, 57343), 0, 0), c !== e.getImageData(16, 16, 1, 1).data.toString()):("simple" === a?e.fillText(f(55357, 56835), 0, 0):e.fillText(f(55356, 57135), 0, 0), 0 !== e.getImageData(16, 16, 1, 1).data[0])):!1}function e(a){var c = b.createElement("script"); c.src = a, c.type = "text/javascript", b.getElementsByTagName("head")[0].appendChild(c)}var f, g; c.supports = {simple:d("simple"), flag:d("flag"), unicode8:d("unicode8"), diversity:d("diversity")}, c.DOMReady = !1, c.readyCallback = function(){c.DOMReady = !0}, c.supports.simple && c.supports.flag && c.supports.unicode8 && c.supports.diversity || (g = function(){c.readyCallback()}, b.addEventListener?(b.addEventListener("DOMContentLoaded", g, !1), a.addEventListener("load", g, !1)):(a.attachEvent("onload", g), b.attachEvent("onreadystatechange", function(){"complete" === b.readyState && c.readyCallback()})), f = c.source || {}, f.concatemoji?e(f.concatemoji):f.wpemoji && f.twemoji && (e(f.twemoji), e(f.wpemoji)))}(window, document, window._wpemojiSettings);*/
/*         </script>*/
/*         <script type="text/javascript" src="{{ asset('post_fichiers/wp-emoji-release_003.js')}}"></script>*/
/*         <script src="{{ asset('post_fichiers/wp-emoji-release_002.js')}}" type="text/javascript"></script>*/
/*         <script type="text/javascript" src="{{ asset('post_fichiers/wp-emoji-release.js')}}"></script>*/
/*         <style type="text/css">*/
/*             img.wp-smiley,*/
/*             img.emoji {*/
/*                 display: inline !important;*/
/*                 border: none !important;*/
/*                 box-shadow: none !important;*/
/*                 height: 1em !important;*/
/*                 width: 1em !important;*/
/*                 margin: 0 .07em !important;*/
/*                 vertical-align: -0.1em !important;*/
/*                 background: none !important;*/
/*                 padding: 0 !important;*/
/*             }*/
/*         </style>*/
/*         <!-- import files -->*/
/*             {% block files %}{% endblock  %}*/
/*         <!-- /import files -->*/
/*         <link rel="stylesheet" id="acf-global-css" href="{{ asset('post_fichiers/acf-global.css')}}" type="text/css" media="all">*/
/*         <link rel="stylesheet" id="wp-color-picker-css" href="{{ asset('post_fichiers/color-picker.css')}}" type="text/css" media="all">*/
/*         <link rel="stylesheet" id="select2-css" href="{{ asset('post_fichiers/select2.css')}}" type="text/css" media="all">*/
/*         <link rel="stylesheet" id="acf-datepicker-css" href="{{ asset('post_fichiers/jquery-ui-1.css')}}" type="text/css" media="all">*/
/*         <link rel="stylesheet" id="acf-input-css" href="{{ asset('post_fichiers/acf-input.css')}}" type="text/css" media="all">*/
/*         <link rel="stylesheet" id="acf-pro-input-css" href="{{ asset('post_fichiers/acf-pro-input.css')}}" type="text/css" media="all">*/
/*         <link rel="stylesheet" id="acf-input-google_font_selector-css" href="{{ asset('post_fichiers/input.css')}}" type="text/css" media="all">*/
/*         <link rel="stylesheet" id="wsl-widget-css" href="{{ asset('post_fichiers/style_002.css')}}" type="text/css" media="all">*/
/*         <link rel="stylesheet" id="blt-bootstrap-css" href="{{ asset('post_fichiers/bootstrap.css')}}" type="text/css" media="all">*/
/*         <link rel="stylesheet" id="blt-style-css" href="{{ asset('post_fichiers/style.css')}}" type="text/css" media="all">*/
/*         <link rel="stylesheet" id="blt-fontawesome-css" href="{{ asset('post_fichiers/font-awesome.css')}}" type="text/css" media="all">*/
/*         <link rel="stylesheet" id="acfgfs-enqueue-fonts-css" href="{{ asset('post_fichiers/css.css')}}" type="text/css" media="all">*/
/*         <script type="text/javascript" src="{{ asset('post_fichiers/jquery.js')}}"></script>*/
/*         <script type="text/javascript" src="{{ asset('post_fichiers/jquery-migrate.js')}}"></script>*/
/*         <script type="text/javascript" src="{{ asset('post_fichiers/core.js')}}"></script>*/
/*         <script type="text/javascript" src="{{ asset('post_fichiers/widget.js')}}"></script>*/
/*         <script type="text/javascript" src="{{ asset('post_fichiers/mouse.js')}}"></script>*/
/*         <script type="text/javascript" src="{{ asset('post_fichiers/sortable.js')}}"></script>*/
/*         <script type="text/javascript" src="{{ asset('post_fichiers/resizable.js')}}"></script>*/
/*         <script type="text/javascript" src="{{ asset('post_fichiers/datepicker.js')}}"></script>*/
/*         <script type="text/javascript" src="{{ asset('post_fichiers/draggable.js')}}"></script>*/
/*         <script type="text/javascript" src="{{ asset('post_fichiers/slider.js')}}"></script>*/
/*         <script type="text/javascript" src="{{ asset('post_fichiers/jquery_002.js')}}"></script>*/
/*         <script type="text/javascript" src="{{ asset('post_fichiers/iris.js')}}"></script><style id="iris-css">.iris-picker{display:block;position:relative}.iris-picker,.iris-picker *{-moz-box-sizing:content-box;-webkit-box-sizing:content-box;box-sizing:content-box}input+.iris-picker{margin-top:4px}.iris-error{background-color:#ffafaf}.iris-border{border-radius:3px;border:1px solid #aaa;width:200px;background-color:#fff}.iris-picker-inner{position:absolute;top:0;right:0;left:0;bottom:0}.iris-border .iris-picker-inner{top:10px;right:10px;left:10px;bottom:10px}.iris-picker .iris-square-inner{position:absolute;left:0;right:0;top:0;bottom:0}.iris-picker .iris-square,.iris-picker .iris-slider,.iris-picker .iris-square-inner,.iris-picker .iris-palette{border-radius:3px;box-shadow:inset 0 0 5px rgba(0,0,0,.4);height:100%;width:12.5%;float:left;margin-right:5%}.iris-picker .iris-square{width:76%;margin-right:10%;position:relative}.iris-picker .iris-square-inner{width:auto;margin:0}.iris-ie-9 .iris-square,.iris-ie-9 .iris-slider,.iris-ie-9 .iris-square-inner,.iris-ie-9 .iris-palette{box-shadow:none;border-radius:0}.iris-ie-9 .iris-square,.iris-ie-9 .iris-slider,.iris-ie-9 .iris-palette{outline:1px solid rgba(0,0,0,.1)}.iris-ie-lt9 .iris-square,.iris-ie-lt9 .iris-slider,.iris-ie-lt9 .iris-square-inner,.iris-ie-lt9 .iris-palette{outline:1px solid #aaa}.iris-ie-lt9 .iris-square .ui-slider-handle{outline:1px solid #aaa;background-color:#fff;-ms-filter:"alpha(Opacity=30)"}.iris-ie-lt9 .iris-square .iris-square-handle{background:0;border:3px solid #fff;-ms-filter:"alpha(Opacity=50)"}.iris-picker .iris-strip{margin-right:0;position:relative}.iris-picker .iris-strip .ui-slider-handle{position:absolute;background:0;margin:0;right:-3px;left:-3px;border:4px solid #aaa;border-width:4px 3px;width:auto;height:6px;border-radius:4px;box-shadow:0 1px 2px rgba(0,0,0,.2);opacity:.9;z-index:5;cursor:ns-resize}.iris-strip .ui-slider-handle:before{content:" ";position:absolute;left:-2px;right:-2px;top:-3px;bottom:-3px;border:2px solid #fff;border-radius:3px}.iris-picker .iris-slider-offset{position:absolute;top:11px;left:0;right:0;bottom:-3px;width:auto;height:auto;background:transparent;border:0;border-radius:0}.iris-picker .iris-square-handle{background:transparent;border:5px solid #aaa;border-radius:50%;border-color:rgba(128,128,128,.5);box-shadow:none;width:12px;height:12px;position:absolute;left:-10px;top:-10px;cursor:move;opacity:1;z-index:10}.iris-picker .ui-state-focus .iris-square-handle{opacity:.8}.iris-picker .iris-square-handle:hover{border-color:#999}.iris-picker .iris-square-value:focus .iris-square-handle{box-shadow:0 0 2px rgba(0,0,0,.75);opacity:.8}.iris-picker .iris-square-handle:hover::after{border-color:#fff}.iris-picker .iris-square-handle::after{position:absolute;bottom:-4px;right:-4px;left:-4px;top:-4px;border:3px solid #f9f9f9;border-color:rgba(255,255,255,.8);border-radius:50%;content:" "}.iris-picker .iris-square-value{width:8px;height:8px;position:absolute}.iris-ie-lt9 .iris-square-value,.iris-mozilla .iris-square-value{width:1px;height:1px}.iris-palette-container{position:absolute;bottom:0;left:0;margin:0;padding:0}.iris-border .iris-palette-container{left:10px;bottom:10px}.iris-picker .iris-palette{margin:0;cursor:pointer}.iris-square-handle,.ui-slider-handle{border:0;outline:0}</style><style id="iris-css">.iris-picker{display:block;position:relative}.iris-picker,.iris-picker *{-moz-box-sizing:content-box;-webkit-box-sizing:content-box;box-sizing:content-box}input+.iris-picker{margin-top:4px}.iris-error{background-color:#ffafaf}.iris-border{border-radius:3px;border:1px solid #aaa;width:200px;background-color:#fff}.iris-picker-inner{position:absolute;top:0;right:0;left:0;bottom:0}.iris-border .iris-picker-inner{top:10px;right:10px;left:10px;bottom:10px}.iris-picker .iris-square-inner{position:absolute;left:0;right:0;top:0;bottom:0}.iris-picker .iris-square,.iris-picker .iris-slider,.iris-picker .iris-square-inner,.iris-picker .iris-palette{border-radius:3px;box-shadow:inset 0 0 5px rgba(0,0,0,.4);height:100%;width:12.5%;float:left;margin-right:5%}.iris-picker .iris-square{width:76%;margin-right:10%;position:relative}.iris-picker .iris-square-inner{width:auto;margin:0}.iris-ie-9 .iris-square,.iris-ie-9 .iris-slider,.iris-ie-9 .iris-square-inner,.iris-ie-9 .iris-palette{box-shadow:none;border-radius:0}.iris-ie-9 .iris-square,.iris-ie-9 .iris-slider,.iris-ie-9 .iris-palette{outline:1px solid rgba(0,0,0,.1)}.iris-ie-lt9 .iris-square,.iris-ie-lt9 .iris-slider,.iris-ie-lt9 .iris-square-inner,.iris-ie-lt9 .iris-palette{outline:1px solid #aaa}.iris-ie-lt9 .iris-square .ui-slider-handle{outline:1px solid #aaa;background-color:#fff;-ms-filter:"alpha(Opacity=30)"}.iris-ie-lt9 .iris-square .iris-square-handle{background:0;border:3px solid #fff;-ms-filter:"alpha(Opacity=50)"}.iris-picker .iris-strip{margin-right:0;position:relative}.iris-picker .iris-strip .ui-slider-handle{position:absolute;background:0;margin:0;right:-3px;left:-3px;border:4px solid #aaa;border-width:4px 3px;width:auto;height:6px;border-radius:4px;box-shadow:0 1px 2px rgba(0,0,0,.2);opacity:.9;z-index:5;cursor:ns-resize}.iris-strip .ui-slider-handle:before{content:" ";position:absolute;left:-2px;right:-2px;top:-3px;bottom:-3px;border:2px solid #fff;border-radius:3px}.iris-picker .iris-slider-offset{position:absolute;top:11px;left:0;right:0;bottom:-3px;width:auto;height:auto;background:transparent;border:0;border-radius:0}.iris-picker .iris-square-handle{background:transparent;border:5px solid #aaa;border-radius:50%;border-color:rgba(128,128,128,.5);box-shadow:none;width:12px;height:12px;position:absolute;left:-10px;top:-10px;cursor:move;opacity:1;z-index:10}.iris-picker .ui-state-focus .iris-square-handle{opacity:.8}.iris-picker .iris-square-handle:hover{border-color:#999}.iris-picker .iris-square-value:focus .iris-square-handle{box-shadow:0 0 2px rgba(0,0,0,.75);opacity:.8}.iris-picker .iris-square-handle:hover::after{border-color:#fff}.iris-picker .iris-square-handle::after{position:absolute;bottom:-4px;right:-4px;left:-4px;top:-4px;border:3px solid #f9f9f9;border-color:rgba(255,255,255,.8);border-radius:50%;content:" "}.iris-picker .iris-square-value{width:8px;height:8px;position:absolute}.iris-ie-lt9 .iris-square-value,.iris-mozilla .iris-square-value{width:1px;height:1px}.iris-palette-container{position:absolute;bottom:0;left:0;margin:0;padding:0}.iris-border .iris-palette-container{left:10px;bottom:10px}.iris-picker .iris-palette{margin:0;cursor:pointer}.iris-square-handle,.ui-slider-handle{border:0;outline:0}</style><style id="iris-css">.iris-picker{display:block;position:relative}.iris-picker,.iris-picker *{-moz-box-sizing:content-box;-webkit-box-sizing:content-box;box-sizing:content-box}input+.iris-picker{margin-top:4px}.iris-error{background-color:#ffafaf}.iris-border{border-radius:3px;border:1px solid #aaa;width:200px;background-color:#fff}.iris-picker-inner{position:absolute;top:0;right:0;left:0;bottom:0}.iris-border .iris-picker-inner{top:10px;right:10px;left:10px;bottom:10px}.iris-picker .iris-square-inner{position:absolute;left:0;right:0;top:0;bottom:0}.iris-picker .iris-square,.iris-picker .iris-slider,.iris-picker .iris-square-inner,.iris-picker .iris-palette{border-radius:3px;box-shadow:inset 0 0 5px rgba(0,0,0,.4);height:100%;width:12.5%;float:left;margin-right:5%}.iris-picker .iris-square{width:76%;margin-right:10%;position:relative}.iris-picker .iris-square-inner{width:auto;margin:0}.iris-ie-9 .iris-square,.iris-ie-9 .iris-slider,.iris-ie-9 .iris-square-inner,.iris-ie-9 .iris-palette{box-shadow:none;border-radius:0}.iris-ie-9 .iris-square,.iris-ie-9 .iris-slider,.iris-ie-9 .iris-palette{outline:1px solid rgba(0,0,0,.1)}.iris-ie-lt9 .iris-square,.iris-ie-lt9 .iris-slider,.iris-ie-lt9 .iris-square-inner,.iris-ie-lt9 .iris-palette{outline:1px solid #aaa}.iris-ie-lt9 .iris-square .ui-slider-handle{outline:1px solid #aaa;background-color:#fff;-ms-filter:"alpha(Opacity=30)"}.iris-ie-lt9 .iris-square .iris-square-handle{background:0;border:3px solid #fff;-ms-filter:"alpha(Opacity=50)"}.iris-picker .iris-strip{margin-right:0;position:relative}.iris-picker .iris-strip .ui-slider-handle{position:absolute;background:0;margin:0;right:-3px;left:-3px;border:4px solid #aaa;border-width:4px 3px;width:auto;height:6px;border-radius:4px;box-shadow:0 1px 2px rgba(0,0,0,.2);opacity:.9;z-index:5;cursor:ns-resize}.iris-strip .ui-slider-handle:before{content:" ";position:absolute;left:-2px;right:-2px;top:-3px;bottom:-3px;border:2px solid #fff;border-radius:3px}.iris-picker .iris-slider-offset{position:absolute;top:11px;left:0;right:0;bottom:-3px;width:auto;height:auto;background:transparent;border:0;border-radius:0}.iris-picker .iris-square-handle{background:transparent;border:5px solid #aaa;border-radius:50%;border-color:rgba(128,128,128,.5);box-shadow:none;width:12px;height:12px;position:absolute;left:-10px;top:-10px;cursor:move;opacity:1;z-index:10}.iris-picker .ui-state-focus .iris-square-handle{opacity:.8}.iris-picker .iris-square-handle:hover{border-color:#999}.iris-picker .iris-square-value:focus .iris-square-handle{box-shadow:0 0 2px rgba(0,0,0,.75);opacity:.8}.iris-picker .iris-square-handle:hover::after{border-color:#fff}.iris-picker .iris-square-handle::after{position:absolute;bottom:-4px;right:-4px;left:-4px;top:-4px;border:3px solid #f9f9f9;border-color:rgba(255,255,255,.8);border-radius:50%;content:" "}.iris-picker .iris-square-value{width:8px;height:8px;position:absolute}.iris-ie-lt9 .iris-square-value,.iris-mozilla .iris-square-value{width:1px;height:1px}.iris-palette-container{position:absolute;bottom:0;left:0;margin:0;padding:0}.iris-border .iris-palette-container{left:10px;bottom:10px}.iris-picker .iris-palette{margin:0;cursor:pointer}.iris-square-handle,.ui-slider-handle{border:0;outline:0}</style>*/
/*         <script type="text/javascript">*/
/*             /* <![CDATA[ *//* */
/*             var wpColorPickerL10n = {"clear":"Clear", "defaultString":"Default", "pick":"Select Color"};*/
/*             /* ]]> *//* */
/*         </script>*/
/*         <script type="text/javascript" src="{{ asset('post_fichiers/color-picker.js')}}"></script>*/
/*         <script type="text/javascript" src="{{ asset('post_fichiers/select2.js')}}"></script>*/
/*         <script type="text/javascript" src="{{ asset('post_fichiers/acf-input.js')}}"></script>*/
/*         <script type="text/javascript" src="{{ asset('post_fichiers/acf-pro-input.js')}}"></script>*/
/*         <script type="text/javascript" src="{{ asset('post_fichiers/input.js')}}"></script>*/
/*         <script type="text/javascript" src="{{ asset('post_fichiers/api.js')}}"></script>*/
/* */
/* */
/*         <script type="text/javascript">*/
/*             var _gaq = _gaq || [];*/
/*             _gaq.push(['_setAccount', 'UA-40601789-4']);*/
/*             _gaq.push(['_trackPageview']);*/
/*             (function() {*/
/*             var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;*/
/*             ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';*/
/*             var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);*/
/*             })();</script>*/
/*         <style type="text/css">.blt-sidebar-sticky{display:none}</style><script type="text/javascript"></script>	<style type="text/css">*/
/* */
/*             body{*/
/* */
/*                 /* image *//* */
/* */
/*                 background-color: #f2f2f2;*/
/* */
/*                 font-family: Open Sans;*/
/*             }*/
/* */
/* */
/* */
/*             h1,h2,h3,h4,h5{*/
/*                 font-family: Open Sans;*/
/*             }*/
/* */
/*             .wpcf7-submit,*/
/*             .btn-theme{*/
/*                 background: #4cc2bf;*/
/*             }*/
/*             .wpcf7-submit,*/
/*             .btn-theme:hover{*/
/*                 background: #38aeab;*/
/*             }*/
/*             .blt_mailchimp .input-group .btn{*/
/*                 border-left-color: #38aeab;*/
/*             }*/
/* */
/*             a{*/
/*                 color: #4cc2bf;*/
/*             }*/
/*             .blu-post-tags a:hover,*/
/*             a.label-blt:hover{*/
/*                 border-color: #38aeab;*/
/*                 color: #38aeab;*/
/*             }*/
/*             a:focus, a:hover, a.label:focus, a.label:hover,*/
/*             .primary-menu .nav a:hover,*/
/*             .widget_calendar table tbody td a:hover{*/
/*                 color: #38aeab;*/
/*             }*/
/* */
/*             ::-moz-selection{*/
/*                 background-color: #4cc2bf;*/
/*                 color: #FFF;*/
/*             }*/
/*             ::selection{*/
/*                 background-color: #4cc2bf;*/
/*                 color: #FFF;*/
/*             }*/
/*             .pagination .page-numbers.current{*/
/*                 background-color: #4cc2bf;*/
/*                 border-color: #38aeab;*/
/*             }*/
/* */
/*             .blu-post-pagination > a:hover,*/
/*             .blu-post-pagination > span{*/
/*                 background-color: #4cc2bf;*/
/*                 border-color: #4cc2bf;*/
/*             }*/
/* */
/*             .select2-container-active .select2-choice,*/
/*             .select2-container-active .select2-choices,*/
/*             .select2-drop-active,*/
/*             .select2-search{*/
/*                 border-color: #38aeab;*/
/*             }*/
/*             .select2-results .select2-highlighted{*/
/*                 background-color: #38aeab;*/
/*             }*/
/* */
/*             @media (min-width: 1100px){*/
/*                 #site-content{*/
/*                     width: 1050px;*/
/*                 }*/
/*                 #site-content-column{*/
/*                     width: 690px;*/
/*                 }*/
/*                 .spot_below_menu,*/
/*                 .container {*/
/*                     width: 1050px;*/
/*                 }*/
/*             }*/
/* */
/*             .post-status{*/
/*                 background-color: #4cc2bf;*/
/*             }*/
/*             .new-post-list > .list-group > .blt-add-new-image:hover{*/
/*                 background-color: #4cc2bf;*/
/*             }*/
/*         </style>*/
/*     </head>*/
/*     <body class="single single-post postid-46 single-format-standard sidebar-right fixed-header acf-wp-4">*/
/*         <script type="text/javascript">*/
/* */
/*         var authurl = '{{ path('_security_check_facebook') }}';*/
/* */
/*         function goLogIn(){*/
/*             window.location = authurl;*/
/*         }*/
/* */
/*         function onFbInit() {*/
/*             if (typeof(FB) != 'undefined' && FB != null ) {*/
/*                 FB.Event.subscribe('auth.statusChange', function(response) {*/
/*                     setTimeout(goLogIn, 500);*/
/*                 });*/
/*             }*/
/*         }*/
/* */
/* </script>*/
/* */
/* */
/* */
/* */
/*         {% if app.request.hasPreviousSession %}*/
/*             {% for type, messages in app.session.flashbag.all() %}*/
/*                 {% for message in messages %}*/
/*                     <div class="flash-{{ type }}">*/
/*                         {{ message }}*/
/*                     </div>*/
/*                 {% endfor %}*/
/*             {% endfor %}*/
/*         {% endif %}*/
/* */
/* */
/*         <div class="what-size"></div>*/
/*         <main id="site">*/
/* */
/*             <header style="width: 1349px;" id="site-header" class="navbar affix-top">*/
/*                 <div class="primary-menu">*/
/*                     <div class="container">*/
/*                         <div class="navbar-inner row">*/
/*                             <div class="col-md-12">*/
/* */
/*                                 <div class="navbar-header">*/
/*                                     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#katla-pri-navbar" aria-expanded="false"><i class="fa fa-bars"></i></button>*/
/*                                     <a class="brand brand-logo" href="#" title="CrowdRise" rel="home">*/
/*                                         <img class="img-responsive" src="{{ asset('post_fichiers/logo.png')}}" alt="CrowdRise">*/
/*                                     </a>*/
/*                                 </div>*/
/* */
/* */
/*                                 <div class="navbar-collapse collapse" id="katla-pri-navbar" aria-expanded="false" style="height: 1px;">*/
/* */
/*                                     {% block header %}{% block username %}{% endblock %}{% endblock %}*/
/* */
/*                                     <!-- 			 	  -->*/
/*                                     <!-- RESPONSIVE MENUS -->*/
/*                                     <!-- 				  -->*/
/* */
/*                                     {% block header_mobile %}{% block username_mobile %}{% endblock %}{% endblock %}*/
/* */
/*                                     <ul id="menu-main-menu" class="nav navbar-nav">*/
/*                                         <li id="menu-item-144" class=" menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-144"><a title="New" href="#"><i class="fa fa-star-o"></i>&nbsp;&nbsp;New</a></li>*/
/*                                         <li id="menu-item-142" class=" menu-item menu-item-type-post_type menu-item-object-page menu-item-142"><a title="Trending" href="#"><i class="fa fa-bolt"></i>&nbsp;&nbsp;Trending</a></li>*/
/*                                         <li id="menu-item-143" class=" menu-item menu-item-type-post_type menu-item-object-page menu-item-143"><a title="Top 10" href="#"><i class="fa fa-signal"></i>&nbsp;&nbsp;Top 10</a></li>*/
/*                                     </ul>*/
/*                                     <ul id="menu-secondary" class="nav navbar-nav visible-xs-block">*/
/*                                         <li id="menu-item-147" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-147"><a title="Funny" href="#">Funny</a></li>*/
/*                                         <li id="menu-item-152" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-152"><a title="Videos" href="#">Videos</a></li>*/
/*                                         <li id="menu-item-151" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-151"><a title="Pics" href="#">Pics</a></li>*/
/*                                         <li id="menu-item-148" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-148"><a title="Inspiration" href="#">Inspiration</a></li>*/
/*                                         <li id="menu-item-149" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-149"><a title="Music" href="#">Music</a></li>*/
/*                                         <li id="menu-item-145" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-145"><a title="Art" href="#">Art</a></li>*/
/*                                         <li id="menu-item-146" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-146"><a title="Design" href="#">Design</a></li>*/
/*                                         <li id="menu-item-150" class="menu-item menu-item-type-taxonomy menu-item-object-category current-post-ancestor current-menu-parent current-post-parent menu-item-150"><a title="Nature" href="#">Nature</a></li>*/
/*                                     </ul>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="secondary-menu hidden-xs">*/
/*                     <div class="container">*/
/*                         <div class="row">*/
/* */
/*                             <div class="collapse navbar-collapse" id="katla-sec-navbar"><ul id="menu-secondary-1" class="nav navbar-nav"><li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-147"><a title="Funny" href="#">Funny</a></li>*/
/*                                     <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-152">test<a title="Videos" href="#">Videos</a></li>*/
/*                                     <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-151">test<a title="Pics" href="#">Pics</a></li>*/
/*                                     <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-148">test<a title="Inspiration" href="#">Inspiration</a></li>*/
/*                                     <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-149"><a title="Music" href="#">Music</a></li>*/
/*                                     <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-145"><a title="Art" href="#">Art</a></li>*/
/*                                     <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-146"><a title="Design" href="#">Design</a></li>*/
/*                                     <li class="menu-item menu-item-type-taxonomy menu-item-object-category current-post-ancestor current-menu-parent current-post-parent menu-item-150"><a title="Nature" href="#">Nature</a></li>*/
/*                                 </ul>					</div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </header>*/
/*             <div id="site-body">*/
/* */
/* */
/* */
/* */
/*                   <div id="site-content" class="clearfix paddrightzero"><div class="single-widget">*/
/*                            <div>*/
/*             {% block fos_user_content %}*/
/*             {% endblock fos_user_content %}*/
/*             <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js">*/
/*     jQuery(document).ready(function($) {*/
/* 	jQuery('a.popup').live('click', function(){*/
/* 		newwindow=window.open($(this).attr('href'),'','height=200,width=150');*/
/* 		if (window.focus) {newwindow.focus()}*/
/* 		return false;*/
/* 	});*/
/* });*/
/* </script>*/
/*         </div>*/
/*                           {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*                 {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |*/
/*                 <a href="{{ path('fos_user_security_logout') }}"> {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}  </a>*/
/*                   <a href="{{ path('fos_user_profile_show') }}">{{ 'profile'|trans({}, 'FOSUserBundle') }}</a>*/
/*                      {% else %}*/
/*                           <a href="{{ path('fos_user_registration_register') }}" >{{ 'layout.register'|trans({}, 'FOSUserBundle') }}</a>*/
/* */
/*                 <a href="{{ path('fos_user_security_login') }}">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>*/
/*             {% endif %}*/
/* */
/*          </div></div>*/
/*             {% block page %}{% endblock  %}*/
/*                 <!-- /Large Page -->*/
/* */
/* */
/* */
/*             {% block profile %}{% endblock  %}*/
/* */
/* */
/*                     <!-- Left Page: add this div <div id="site-content" class="clearfix"><div id="site-content-column"><div class="single-widget">your code</div></div> -->*/
/*             {% block column %}{% endblock  %}*/
/*                 <!-- /Left Page  must close with aside-->*/
/*                 <!-- aside Page: add this div <aside id="site-content-sidebar"><div class="content-sidebar-wrap"><div class="single-widget"><div class="widget-body">your code</div></div></div></aside></div> -->*/
/*             {% block aside %}{% endblock  %}*/
/*                 <!-- /aside Page -->*/
/* */
/* */
/*                 <!-- under Left Page: add this div <div id="site-content" class="clearfix"><div id="site-content-column"><div class="single-widget">your code</div></div></div> -->*/
/*             {% block undercolumn %}{% endblock  %}*/
/* */
/* */
/*                 <div class="footer-share clearfix">*/
/*                     <div class="post-vote-header">*/
/*                         <a class="btn btn-default post-vote post-vote-up" data-post-id="46" href="#vote-up" title="Like"><i class="fa fa-chevron-up"></i></a>*/
/*                         <span class="vote-count">902</span>*/
/*                         <a class="btn btn-default post-vote post-vote-down" data-post-id="46" href="#vote-down" title="Dislike"><i class="fa fa-chevron-down"></i></a>*/
/*                     </div>*/
/*                     <a class="btn social-sharing share-facebook" onclick="blt_social_share(event, '#')">*/
/*                         <i class="fa fa-facebook"></i> <span class="visible-xs-inline visible-sm-inline">Share</span>*/
/*                     </a>*/
/*                     <a class="btn social-sharing share-twitter" onclick="blt_social_share(event, '#')">*/
/*                         <i class="fa fa-twitter"></i> <span class="visible-xs-inline visible-sm-inline">Tweet</span>*/
/*                     </a>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <footer id="site-footer">*/
/* */
/*                 <div class="container">*/
/*                     <div class="row">*/
/*                         <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">*/
/*                             <div id="text-2" class="single-widget widget_text">*/
/*                                 <div class="textwidget">*/
/*                                     <img alt="CrowdRise" src="{{ asset('post_fichiers/logo.png')}}" class="img-responsive">*/
/*                                     The Key to your projects*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">*/
/*                             <div id="nav_menu-2" class="single-widget widget_nav_menu">*/
/*                                 <h3 class="widget-head">Footer Menu</h3>*/
/*                                 <div class="menu-footer-menu-container">*/
/*                                     <ul id="menu-footer-menu-1" class="menu">*/
/*                                         <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-275"><a href="#">Submit a Post</a></li>*/
/*                                         <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-248"><a href="#">Theme Options</a></li>*/
/*                                         <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-180"><a href="#">Contact Us</a></li>*/
/*                                     </ul>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="footer-text">*/
/*                     <div class="container">*/
/*                         <p>Copyright © 2016 · Theme design by Devs · <a href="#" rel="nofollow">www.crowdrise.com</a></p>*/
/*                     </div>*/
/*                 </div>*/
/*             </footer>*/
/* */
/*         </main>*/
/* */
/* */
/* */
/* */
/* */
/* */
/* <link rel="stylesheet" id="blt-demo-plugins-styles-css" href="{{ asset('post_fichiers/plugins.css')}}" type="text/css" media="all">*/
/* <link rel="stylesheet" id="spectrum-css-css" href="{{ asset('post_fichiers/plugins_002.css')}}" type="text/css" media="all">*/
/* <script type="text/javascript" src="{{ asset('post_fichiers/bootstrap.js')}}"></script>*/
/* <script type="text/javascript">*/
/*             /* <![CDATA[ *//* */
/*             var blu = {"site_url":"http:\/\/www.bluthemes.com\/themes-special\/katla", "user_logged_in":"false", "is_single":"1", "paged":"1", "post_id":"46", "ajaxurl":"http:\/\/www.bluthemes.com\/themes-special\/katla\/wp-admin\/admin-ajax.php", "vote_login_required":"false", "blt_nonce":"b86b100ecd", "locale":{"ajax_loading":"Loading", "ajax_no_more":"No More Posts", "no_email_provided":"No Email Provided", "thank_you_for_subscribing":"Thank you for subscribing"}};*/
/*             /* ]]> *//* */
/*         </script>*/
/* <script type="text/javascript" src="{{ asset('post_fichiers/theme.js')}}"></script>*/
/* <script type="text/javascript" src="{{ asset('post_fichiers/comment-reply.js')}}"></script>*/
/* <script type="text/javascript" src="{{ asset('post_fichiers/wp-embed.js')}}"></script>*/
/* <script type="text/javascript" src="{{ asset('post_fichiers/plugins.js')}}"></script>*/
/* <script type="text/javascript" src="{{ asset('post_fichiers/script.js')}}"></script>*/
/* <script type="text/javascript" src="{{ asset('post_fichiers/plugins_002.js')}}"></script>*/
/* <script type="text/javascript">*/
/*             /* <![CDATA[ *//* */
/*             if (typeof acf !== 'undefined') {*/
/* */
/*             acf.o = {"post_id":null, "nonce":"2a6d9dc63c", "admin_url":"http:\/\/www.bluthemes.com\/themes-special\/katla\/wp-admin\/", "ajaxurl":"http:\/\/www.bluthemes.com\/themes-special\/katla\/wp-admin\/admin-ajax.php", "ajax":null, "validation":null, "wp_version":"4.4.2"};*/
/*             acf.l10n = {"unload":"The changes you made will be lost if you navigate away from this page", "expand_details":"Expand Details", "collapse_details":"Collapse Details", "validation_successful":"Validation successful", "validation_failed":"Validation failed", "validation_failed_1":"1 field requires attention", "validation_failed_2":"%d fields require attention", "restricted":"Restricted", "image":{"select":"Select Image", "edit":"Edit Image", "update":"Update Image", "uploadedTo":"Uploaded to this post", "all":"All images"}, "file":{"select":"Select File", "edit":"Edit File", "update":"Update File", "uploadedTo":"uploaded to this post"}, "relationship":{"min":"Minimum values reached ( {min} values )", "max":"Maximum values reached ( {max} values )", "loading":"Loading", "empty":"No matches found"}, "google_map":{"locating":"Locating", "browser_support":"Sorry, this browser does not support geolocation"}, "date_picker":{"closeText":"Done", "currentText":"Today", "monthNames":["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"], "monthNamesShort":["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"], "monthStatus":"Show a different month", "dayNames":["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"], "dayNamesShort":["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"], "dayNamesMin":["S", "M", "T", "W", "T", "F", "S"], "isRTL":false}, "repeater":{"min":"Minimum rows reached ({min} rows)", "max":"Maximum rows reached ({max} rows)"}, "flexible_content":{"layout":"layout", "layouts":"layouts", "remove":"remove {layout}?", "min":"This field requires at least {min} {identifier}", "max":"This field has a limit of {max} {identifier}", "min_layout":"This field requires at least {min} {label} {identifier}", "max_layout":"Maximum {label} limit reached ({max} {identifier})", "available":"{available} {label} {identifier} available (max {max})", "required":"{required} {label} {identifier} required (min {min})"}, "gallery":{"select":"Add Image to Gallery", "edit":"Edit Image", "update":"Update Image", "uploadedTo":"uploaded to this post", "max":"Maximum selection reached"}};*/
/*             acf.media.mime_types = {"jpg|jpeg|jpe":"image\/jpeg", "gif":"image\/gif", "png":"image\/png", "bmp":"image\/bmp", "tiff|tif":"image\/tiff", "ico":"image\/x-icon", "asf|asx":"video\/x-ms-asf", "wmv":"video\/x-ms-wmv", "wmx":"video\/x-ms-wmx", "wm":"video\/x-ms-wm", "avi":"video\/avi", "divx":"video\/divx", "flv":"video\/x-flv", "mov|qt":"video\/quicktime", "mpeg|mpg|mpe":"video\/mpeg", "mp4|m4v":"video\/mp4", "ogv":"video\/ogg", "webm":"video\/webm", "mkv":"video\/x-matroska", "3gp|3gpp":"video\/3gpp", "3g2|3gp2":"video\/3gpp2", "txt|asc|c|cc|h|srt":"text\/plain", "csv":"text\/csv", "tsv":"text\/tab-separated-values", "ics":"text\/calendar", "rtx":"text\/richtext", "css":"text\/css", "vtt":"text\/vtt", "dfxp":"application\/ttaf+xml", "mp3|m4a|m4b":"audio\/mpeg", "ra|ram":"audio\/x-realaudio", "wav":"audio\/wav", "ogg|oga":"audio\/ogg", "mid|midi":"audio\/midi", "wma":"audio\/x-ms-wma", "wax":"audio\/x-ms-wax", "mka":"audio\/x-matroska", "rtf":"application\/rtf", "js":"application\/javascript", "pdf":"application\/pdf", "class":"application\/java", "tar":"application\/x-tar", "zip":"application\/zip", "gz|gzip":"application\/x-gzip", "rar":"application\/rar", "7z":"application\/x-7z-compressed", "psd":"application\/octet-stream", "xcf":"application\/octet-stream", "doc":"application\/msword", "pot|pps|ppt":"application\/vnd.ms-powerpoint", "wri":"application\/vnd.ms-write", "xla|xls|xlt|xlw":"application\/vnd.ms-excel", "mdb":"application\/vnd.ms-access", "mpp":"application\/vnd.ms-project", "docx":"application\/vnd.openxmlformats-officedocument.wordprocessingml.document", "docm":"application\/vnd.ms-word.document.macroEnabled.12", "dotx":"application\/vnd.openxmlformats-officedocument.wordprocessingml.template", "dotm":"application\/vnd.ms-word.template.macroEnabled.12", "xlsx":"application\/vnd.openxmlformats-officedocument.spreadsheetml.sheet", "xlsm":"application\/vnd.ms-excel.sheet.macroEnabled.12", "xlsb":"application\/vnd.ms-excel.sheet.binary.macroEnabled.12", "xltx":"application\/vnd.openxmlformats-officedocument.spreadsheetml.template", "xltm":"application\/vnd.ms-excel.template.macroEnabled.12", "xlam":"application\/vnd.ms-excel.addin.macroEnabled.12", "pptx":"application\/vnd.openxmlformats-officedocument.presentationml.presentation", "pptm":"application\/vnd.ms-powerpoint.presentation.macroEnabled.12", "ppsx":"application\/vnd.openxmlformats-officedocument.presentationml.slideshow", "ppsm":"application\/vnd.ms-powerpoint.slideshow.macroEnabled.12", "potx":"application\/vnd.openxmlformats-officedocument.presentationml.template", "potm":"application\/vnd.ms-powerpoint.template.macroEnabled.12", "ppam":"application\/vnd.ms-powerpoint.addin.macroEnabled.12", "sldx":"application\/vnd.openxmlformats-officedocument.presentationml.slide", "sldm":"application\/vnd.ms-powerpoint.slide.macroEnabled.12", "onetoc|onetoc2|onetmp|onepkg":"application\/onenote", "oxps":"application\/oxps", "xps":"application\/vnd.ms-xpsdocument", "odt":"application\/vnd.oasis.opendocument.text", "odp":"application\/vnd.oasis.opendocument.presentation", "ods":"application\/vnd.oasis.opendocument.spreadsheet", "odg":"application\/vnd.oasis.opendocument.graphics", "odc":"application\/vnd.oasis.opendocument.chart", "odb":"application\/vnd.oasis.opendocument.database", "odf":"application\/vnd.oasis.opendocument.formula", "wp|wpd":"application\/wordperfect", "key":"application\/vnd.apple.keynote", "numbers":"application\/vnd.apple.numbers", "pages":"application\/vnd.apple.pages"};*/
/*             acf.fields.wysiwyg.toolbars = {"full":{"1":"bold,italic,strikethrough,bullist,numlist,blockquote,hr,alignleft,aligncenter,alignright,link,unlink,wp_more,spellchecker,fullscreen,wp_adv", "2":"formatselect,underline,alignjustify,forecolor,pastetext,removeformat,charmap,outdent,indent,undo,redo,wp_help", "3":"", "4":""}, "basic":{"1":"bold,italic,underline,blockquote,strikethrough,bullist,numlist,alignleft,aligncenter,alignright,undo,redo,link,unlink,fullscreen"}};*/
/*             acf.do_action('prepare');*/
/*             }*/
/*             /* ]]> *//* */
/*         </script>*/
/*     </body>*/
/* </html>*/
/* */
