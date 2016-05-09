<?php

/* MyAppUserBundle:Default:index.html.twig */
class __TwigTemplate_e3849a9e31742616b426a65680c6fe1ecc68df8828dc67f077b4a24979fdc451 extends Twig_Template
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
        echo "<form id=\"search\">
    <input type=\"text\" id=\"query\" name=\"query\" value=\"";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["querystring"]) ? $context["querystring"] : $this->getContext($context, "querystring")), "html", null, true);
        echo "\">
    <input type=\"submit\" value=\"Ok\">
</form>
<ul>
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fruits"]) ? $context["fruits"] : $this->getContext($context, "fruits")));
        foreach ($context['_seq'] as $context["_key"] => $context["fruit"]) {
            // line 7
            echo "        <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["fruit"], "name", array()), "html", null, true);
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fruit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "</ul>
 
<h3>Facettes:</h3>
<ul>
    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["facets"]) ? $context["facets"] : $this->getContext($context, "facets")));
        foreach ($context['_seq'] as $context["key"] => $context["facet"]) {
            // line 14
            echo "        <li>
            ";
            // line 15
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "
            <ul>
                ";
            // line 17
            if ($this->getAttribute($context["facet"], "ranges", array(), "any", true, true)) {
                // line 18
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["facet"], "ranges", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["range"]) {
                    // line 19
                    echo "                        <li>
                        ";
                    // line 20
                    if (($this->getAttribute($context["range"], "from", array(), "any", true, true) && $this->getAttribute($context["range"], "to", array(), "any", true, true))) {
                        // line 21
                        echo "                            De ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["range"], "from", array()), "html", null, true);
                        echo "
                        ";
                    } elseif (( !$this->getAttribute(                    // line 22
$context["range"], "from", array(), "any", true, true) && $this->getAttribute($context["range"], "to", array(), "any", true, true))) {
                        // line 23
                        echo "                            De 0 
                        ";
                    }
                    // line 25
                    echo "                        ";
                    if ($this->getAttribute($context["range"], "to", array(), "any", true, true)) {
                        // line 26
                        echo "                            à ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["range"], "to", array()), "html", null, true);
                        echo "
                        ";
                    } elseif (( !$this->getAttribute(                    // line 27
$context["range"], "to", array(), "any", true, true) && $this->getAttribute($context["range"], "from", array(), "any", true, true))) {
                        // line 28
                        echo "                            A partir de ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["range"], "from", array()), "html", null, true);
                        echo "
                        ";
                    }
                    // line 30
                    echo "                        (";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["range"], "count", array()), "html", null, true);
                    echo ")
                        </li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['range'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 33
                echo "                ";
            }
            // line 34
            echo "                ";
            if ($this->getAttribute($context["facet"], "terms", array(), "any", true, true)) {
                // line 35
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["facet"], "terms", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["term"]) {
                    // line 36
                    echo "                        <li>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["term"], "term", array()), "html", null, true);
                    echo " (";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["term"], "count", array()), "html", null, true);
                    echo ")</li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['term'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 38
                echo "                ";
            }
            // line 39
            echo "            </ul>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['facet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "</ul>
 
<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js\"></script>
<script type=\"text/javascript\">
    \$(document).ready(function() {
        \$(\"#search\").submit(function(event) {
            event.preventDefault();
            window.location = '";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "getBaseURL", array(), "method"), "html", null, true);
        echo "' + '/search/' + \$('#query').val();
        });
    });
</script>";
    }

    public function getTemplateName()
    {
        return "MyAppUserBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 49,  142 => 42,  134 => 39,  131 => 38,  120 => 36,  115 => 35,  112 => 34,  109 => 33,  99 => 30,  93 => 28,  91 => 27,  86 => 26,  83 => 25,  79 => 23,  77 => 22,  72 => 21,  70 => 20,  67 => 19,  62 => 18,  60 => 17,  55 => 15,  52 => 14,  48 => 13,  42 => 9,  33 => 7,  29 => 6,  22 => 2,  19 => 1,);
    }
}
/* <form id="search">*/
/*     <input type="text" id="query" name="query" value="{{ querystring }}">*/
/*     <input type="submit" value="Ok">*/
/* </form>*/
/* <ul>*/
/*     {% for fruit in fruits %}*/
/*         <li>{{ fruit.name }}</li>*/
/*     {% endfor %}*/
/* </ul>*/
/*  */
/* <h3>Facettes:</h3>*/
/* <ul>*/
/*     {% for key, facet in facets %}*/
/*         <li>*/
/*             {{ key }}*/
/*             <ul>*/
/*                 {% if facet.ranges is defined %}*/
/*                     {% for range in facet.ranges %}*/
/*                         <li>*/
/*                         {% if range.from is defined and range.to is defined %}*/
/*                             De {{ range.from }}*/
/*                         {% elseif range.from is not defined and range.to is defined %}*/
/*                             De 0 */
/*                         {% endif %}*/
/*                         {% if range.to is defined %}*/
/*                             à {{ range.to }}*/
/*                         {% elseif range.to is not defined and range.from is defined %}*/
/*                             A partir de {{ range.from }}*/
/*                         {% endif %}*/
/*                         ({{ range.count }})*/
/*                         </li>*/
/*                     {% endfor %}*/
/*                 {% endif %}*/
/*                 {% if facet.terms is defined %}*/
/*                     {% for term in facet.terms %}*/
/*                         <li>{{ term.term }} ({{ term.count }})</li>*/
/*                     {% endfor %}*/
/*                 {% endif %}*/
/*             </ul>*/
/*         </li>*/
/*     {% endfor %}*/
/* </ul>*/
/*  */
/* <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>*/
/* <script type="text/javascript">*/
/*     $(document).ready(function() {*/
/*         $("#search").submit(function(event) {*/
/*             event.preventDefault();*/
/*             window.location = '{{ app.request.getBaseURL() }}' + '/search/' + $('#query').val();*/
/*         });*/
/*     });*/
/* </script>*/
