<?php

/* FOSFacebookBundle::loginButton.html.twig */
class __TwigTemplate_c53cc784a9e06c836ca8c31e5ba367dada377822e9c1f3e9a750502a562ecb2f extends Twig_Template
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
        echo "<div class=\"fb-login-button\" data-show-faces=\"";
        echo twig_escape_filter($this->env, (isset($context["showFaces"]) ? $context["showFaces"] : $this->getContext($context, "showFaces")), "html", null, true);
        echo "\" data-size=\"";
        echo twig_escape_filter($this->env, (isset($context["size"]) ? $context["size"] : $this->getContext($context, "size")), "html", null, true);
        echo "\" data-scope=\"";
        echo twig_escape_filter($this->env, (isset($context["scope"]) ? $context["scope"] : $this->getContext($context, "scope")), "html", null, true);
        echo "\" data-autologoutlink=\"";
        echo twig_escape_filter($this->env, (isset($context["autologoutlink"]) ? $context["autologoutlink"] : $this->getContext($context, "autologoutlink")), "html", null, true);
        echo "\" data-width=\"";
        echo twig_escape_filter($this->env, (isset($context["width"]) ? $context["width"] : $this->getContext($context, "width")), "html", null, true);
        echo "\" data-max-rows=\"";
        echo twig_escape_filter($this->env, (isset($context["maxRows"]) ? $context["maxRows"] : $this->getContext($context, "maxRows")), "html", null, true);
        echo "\"  data-onlogin=\"";
        echo twig_escape_filter($this->env, (isset($context["onlogin"]) ? $context["onlogin"] : $this->getContext($context, "onlogin")), "html", null, true);
        echo "\">
  ";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "FOSFacebookBundle::loginButton.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 2,  19 => 1,);
    }
}
/* <div class="fb-login-button" data-show-faces="{{ showFaces }}" data-size="{{ size }}" data-scope="{{ scope }}" data-autologoutlink="{{ autologoutlink }}" data-width="{{ width }}" data-max-rows="{{ maxRows }}"  data-onlogin="{{ onlogin }}">*/
/*   {{ label }}*/
/* </div>*/
/* */
