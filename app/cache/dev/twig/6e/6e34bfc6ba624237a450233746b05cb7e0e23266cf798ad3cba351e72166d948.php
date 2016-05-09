<?php

/* FOSFacebookBundle::initialize.html.twig */
class __TwigTemplate_9d8e9e17e4586ea69a88b6ba0b688906d7fbfada71288896d5366ae5d836533a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div id=\"fb-root\"></div>
";
        // line 2
        if ( !(isset($context["async"]) ? $context["async"] : $this->getContext($context, "async"))) {
            // line 3
            echo "<script type=\"text/javascript\" src=\"http://connect.facebook.net/";
            echo twig_escape_filter($this->env, (isset($context["culture"]) ? $context["culture"] : $this->getContext($context, "culture")), "html", null, true);
            echo "/all.js\"></script>
";
        }
        // line 5
        echo "<script type=\"text/javascript\">
";
        // line 7
        if ((isset($context["async"]) ? $context["async"] : $this->getContext($context, "async"))) {
            // line 8
            echo "window.fbAsyncInit = function() {
";
        }
        // line 10
        echo "  FB.init(";
        echo twig_jsonencode_filter(array("appId" => (isset($context["appId"]) ? $context["appId"] : $this->getContext($context, "appId")), "xfbml" => (isset($context["xfbml"]) ? $context["xfbml"] : $this->getContext($context, "xfbml")), "oauth" => (isset($context["oauth"]) ? $context["oauth"] : $this->getContext($context, "oauth")), "status" => (isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")), "cookie" => (isset($context["cookie"]) ? $context["cookie"] : $this->getContext($context, "cookie")), "logging" => (isset($context["logging"]) ? $context["logging"] : $this->getContext($context, "logging")), "channelUrl" => (isset($context["channelUrl"]) ? $context["channelUrl"] : $this->getContext($context, "channelUrl"))));
        echo ");
";
        // line 11
        if ((isset($context["async"]) ? $context["async"] : $this->getContext($context, "async"))) {
            // line 12
            echo "  ";
            echo (isset($context["fbAsyncInit"]) ? $context["fbAsyncInit"] : $this->getContext($context, "fbAsyncInit"));
            echo "
};

(function() {
  var e = document.createElement('script');
  e.src = document.location.protocol + ";
            // line 17
            echo twig_jsonencode_filter(sprintf("//connect.facebook.net/%s/all.js", (isset($context["culture"]) ? $context["culture"] : $this->getContext($context, "culture"))));
            echo ";
  e.async = true;
  document.getElementById('fb-root').appendChild(e);
}());
";
        }
        // line 23
        echo "</script>
";
    }

    public function getTemplateName()
    {
        return "FOSFacebookBundle::initialize.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 23,  55 => 17,  46 => 12,  44 => 11,  39 => 10,  35 => 8,  33 => 7,  30 => 5,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div id="fb-root"></div>*/
/* {% if not async %}*/
/* <script type="text/javascript" src="http://connect.facebook.net/{{ culture }}/all.js"></script>*/
/* {% endif %}*/
/* <script type="text/javascript">*/
/* {% autoescape false %}*/
/* {% if async %}*/
/* window.fbAsyncInit = function() {*/
/* {% endif %}*/
/*   FB.init({{ {'appId':appId, 'xfbml':xfbml, 'oauth':oauth, 'status':status, 'cookie':cookie, 'logging':logging, 'channelUrl':channelUrl}|json_encode }});*/
/* {% if async %}*/
/*   {{ fbAsyncInit }}*/
/* };*/
/* */
/* (function() {*/
/*   var e = document.createElement('script');*/
/*   e.src = document.location.protocol + {{ "//connect.facebook.net/%s/all.js"|format(culture)|json_encode }};*/
/*   e.async = true;*/
/*   document.getElementById('fb-root').appendChild(e);*/
/* }());*/
/* {% endif %}*/
/* {% endautoescape %}*/
/* </script>*/
/* */
