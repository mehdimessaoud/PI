<?php

/* MyAppUserBundle:Default:template_admin.html.twig */
class __TwigTemplate_4b047b9fa05ededcfacd2a3dea3e4339b15b3b739d37fa3a2ecfe3804e45b61f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'page' => array($this, 'block_page'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<title>Admin - Panel</title>

<link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template_admin/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template_admin/css/datepicker3.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template_admin/css/styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

<!--Icons-->
<script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template_admin/js/lumino.glyphs.js"), "html", null, true);
        echo "\"></script>

<!--[if lt IE 9]>
<script src=\"js/html5shiv.js\"></script>
<script src=\"js/respond.min.js\"></script>
<![endif]-->

</head>

<body>
\t<nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"navbar-header\">
\t\t\t\t<button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#sidebar-collapse\">
\t\t\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t</button>
                                <a class=\"brand brand-logo\" href=\"#\" title=\"CrowdRise\" rel=\"home\">
                                    <img class=\"img-responsive\" src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template_admin/logo.png"), "html", null, true);
        echo "\" alt=\"CrowdRise\" Style=\"max-width: 100px;display: inherit;\" >
                                </a>
\t\t\t\t<ul class=\"user-menu\">
\t\t\t\t\t<li class=\"dropdown pull-right\">
\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><svg class=\"glyph stroked male-user\"><use xlink:href=\"#stroked-male-user\"></use></svg> Admin <span class=\"caret\"></span></a>
\t\t\t\t\t\t<ul class=\"dropdown-menu\" role=\"menu\">
\t\t\t\t\t\t\t<li><a href=\"#\"><svg class=\"glyph stroked male-user\"><use xlink:href=\"#stroked-male-user\"></use></svg> Profile</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><svg class=\"glyph stroked gear\"><use xlink:href=\"#stroked-gear\"></use></svg> Settings</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><svg class=\"glyph stroked cancel\"><use xlink:href=\"#stroked-cancel\"></use></svg> Logout</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t\t\t\t\t
\t\t</div><!-- /.container-fluid -->
\t</nav>
\t\t
\t<div id=\"sidebar-collapse\" class=\"col-sm-3 col-lg-2 sidebar\">
\t\t<form role=\"search\">
\t\t\t<div class=\"form-group\">
\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Search\">
\t\t\t</div>
\t\t</form>
            ";
        // line 56
        $this->displayBlock('menu', $context, $blocks);
        // line 90
        echo " 

\t</div><!--/.sidebar-->
\t\t
\t<div class=\"col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main\">\t\t\t
\t\t
\t\t
\t\t
\t\t
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-12\">
\t\t\t\t<div class=\"panel panel-default\">
                                    ";
        // line 102
        $this->displayBlock('page', $context, $blocks);
        // line 109
        echo "    
\t\t\t\t</div>
\t\t\t</div>
\t\t</div><!--/.row-->
\t\t
\t\t
\t</div>\t<!--/.main-->

\t<script src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template_admin/js/jquery-1.11.1.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template_admin/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template_admin/js/chart.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template_admin/js/chart-data.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template_admin/js/easypiechart.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template_admin/js/easypiechart-data.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template_admin/js/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
\t<script>
\t\t\$('#calendar').datepicker({
\t\t});

\t\t!function (\$) {
\t\t    \$(document).on(\"click\",\"ul.nav li.parent > a > span.icon\", function(){          
\t\t        \$(this).find('em:first').toggleClass(\"glyphicon-minus\");      
\t\t    }); 
\t\t    \$(\".sidebar span.icon\").find('em:first').addClass(\"glyphicon-plus\");
\t\t}(window.jQuery);

\t\t\$(window).on('resize', function () {
\t\t  if (\$(window).width() > 768) \$('#sidebar-collapse').collapse('show')
\t\t})
\t\t\$(window).on('resize', function () {
\t\t  if (\$(window).width() <= 767) \$('#sidebar-collapse').collapse('hide')
\t\t})
\t</script>\t
</body>

</html>
";
    }

    // line 56
    public function block_menu($context, array $blocks = array())
    {
        // line 57
        echo "            <ul class=\"nav menu\">
                <li class=\"active\"><a href=\"index.html\"><svg class=\"glyph stroked dashboard-dial\"><use xlink:href=\"#stroked-dashboard-dial\"></use></svg> Dashboard</a></li>
                <li><a href=\"widgets.html\"><svg class=\"glyph stroked calendar\"><use xlink:href=\"#stroked-calendar\"></use></svg> Widgets</a></li>
                <li><a href=\"charts.html\"><svg class=\"glyph stroked line-graph\"><use xlink:href=\"#stroked-line-graph\"></use></svg> Charts</a></li>
                <li><a href=\"tables.html\"><svg class=\"glyph stroked table\"><use xlink:href=\"#stroked-table\"></use></svg> Tables</a></li>
                <li><a href=\"forms.html\"><svg class=\"glyph stroked pencil\"><use xlink:href=\"#stroked-pencil\"></use></svg> Forms</a></li>
                <li><a href=\"panels.html\"><svg class=\"glyph stroked app-window\"><use xlink:href=\"#stroked-app-window\"></use></svg> Alerts &amp; Panels</a></li>
                <li><a href=\"icons.html\"><svg class=\"glyph stroked star\"><use xlink:href=\"#stroked-star\"></use></svg> Icons</a></li>
                <li class=\"parent \">
                    <a href=\"#\">
                        <span data-toggle=\"collapse\" href=\"#sub-item-1\"><svg class=\"glyph stroked chevron-down\"><use xlink:href=\"#stroked-chevron-down\"></use></svg></span> Dropdown 
                    </a>
                    <ul class=\"children collapse\" id=\"sub-item-1\">
                        <li>
                            <a class=\"\" href=\"#\">
                                <svg class=\"glyph stroked chevron-right\"><use xlink:href=\"#stroked-chevron-right\"></use></svg> Sub Item 1
                            </a>
                        </li>
                        <li>
                            <a class=\"\" href=\"#\">
                                <svg class=\"glyph stroked chevron-right\"><use xlink:href=\"#stroked-chevron-right\"></use></svg> Sub Item 2
                            </a>
                        </li>
                        <li>
                            <a class=\"\" href=\"#\">
                                <svg class=\"glyph stroked chevron-right\"><use xlink:href=\"#stroked-chevron-right\"></use></svg> Sub Item 3
                            </a>
                        </li>
                    </ul>
                </li>
                <li role=\"presentation\" class=\"divider\"></li>
                <li><a href=\"login.html\"><svg class=\"glyph stroked male-user\"><use xlink:href=\"#stroked-male-user\"></use></svg> Login Page</a></li>
            </ul>
            ";
    }

    // line 102
    public function block_page($context, array $blocks = array())
    {
        // line 103
        echo "\t\t\t\t\t<div class=\"panel-heading\">header</div>
\t\t\t\t\t<div class=\"panel-body\">
                                            
\t\t\t\t\t\t<div class=\"alert-link\" style=\"padding: 30px;\">Test</div>
                                            
\t\t\t\t\t</div>
                                    ";
    }

    public function getTemplateName()
    {
        return "MyAppUserBundle:Default:template_admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 103,  212 => 102,  175 => 57,  172 => 56,  145 => 123,  141 => 122,  137 => 121,  133 => 120,  129 => 119,  125 => 118,  121 => 117,  111 => 109,  109 => 102,  95 => 90,  93 => 56,  67 => 33,  44 => 13,  38 => 10,  34 => 9,  30 => 8,  21 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/* <meta charset="utf-8">*/
/* <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* <title>Admin - Panel</title>*/
/* */
/* <link href="{{ asset('template_admin/css/bootstrap.min.css')}}" rel="stylesheet">*/
/* <link href="{{ asset('template_admin/css/datepicker3.css')}}" rel="stylesheet">*/
/* <link href="{{ asset('template_admin/css/styles.css')}}" rel="stylesheet">*/
/* */
/* <!--Icons-->*/
/* <script src="{{ asset('template_admin/js/lumino.glyphs.js')}}"></script>*/
/* */
/* <!--[if lt IE 9]>*/
/* <script src="js/html5shiv.js"></script>*/
/* <script src="js/respond.min.js"></script>*/
/* <![endif]-->*/
/* */
/* </head>*/
/* */
/* <body>*/
/* 	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">*/
/* 		<div class="container-fluid">*/
/* 			<div class="navbar-header">*/
/* 				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">*/
/* 					<span class="sr-only">Toggle navigation</span>*/
/* 					<span class="icon-bar"></span>*/
/* 					<span class="icon-bar"></span>*/
/* 					<span class="icon-bar"></span>*/
/* 				</button>*/
/*                                 <a class="brand brand-logo" href="#" title="CrowdRise" rel="home">*/
/*                                     <img class="img-responsive" src="{{ asset('template_admin/logo.png')}}" alt="CrowdRise" Style="max-width: 100px;display: inherit;" >*/
/*                                 </a>*/
/* 				<ul class="user-menu">*/
/* 					<li class="dropdown pull-right">*/
/* 						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Admin <span class="caret"></span></a>*/
/* 						<ul class="dropdown-menu" role="menu">*/
/* 							<li><a href="#"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Profile</a></li>*/
/* 							<li><a href="#"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"></use></svg> Settings</a></li>*/
/* 							<li><a href="#"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>*/
/* 						</ul>*/
/* 					</li>*/
/* 				</ul>*/
/* 			</div>*/
/* 							*/
/* 		</div><!-- /.container-fluid -->*/
/* 	</nav>*/
/* 		*/
/* 	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">*/
/* 		<form role="search">*/
/* 			<div class="form-group">*/
/* 				<input type="text" class="form-control" placeholder="Search">*/
/* 			</div>*/
/* 		</form>*/
/*             {% block menu %}*/
/*             <ul class="nav menu">*/
/*                 <li class="active"><a href="index.html"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Dashboard</a></li>*/
/*                 <li><a href="widgets.html"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> Widgets</a></li>*/
/*                 <li><a href="charts.html"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Charts</a></li>*/
/*                 <li><a href="tables.html"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg> Tables</a></li>*/
/*                 <li><a href="forms.html"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg> Forms</a></li>*/
/*                 <li><a href="panels.html"><svg class="glyph stroked app-window"><use xlink:href="#stroked-app-window"></use></svg> Alerts &amp; Panels</a></li>*/
/*                 <li><a href="icons.html"><svg class="glyph stroked star"><use xlink:href="#stroked-star"></use></svg> Icons</a></li>*/
/*                 <li class="parent ">*/
/*                     <a href="#">*/
/*                         <span data-toggle="collapse" href="#sub-item-1"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg></span> Dropdown */
/*                     </a>*/
/*                     <ul class="children collapse" id="sub-item-1">*/
/*                         <li>*/
/*                             <a class="" href="#">*/
/*                                 <svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Sub Item 1*/
/*                             </a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a class="" href="#">*/
/*                                 <svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Sub Item 2*/
/*                             </a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a class="" href="#">*/
/*                                 <svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Sub Item 3*/
/*                             </a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </li>*/
/*                 <li role="presentation" class="divider"></li>*/
/*                 <li><a href="login.html"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Login Page</a></li>*/
/*             </ul>*/
/*             {% endblock %} */
/* */
/* 	</div><!--/.sidebar-->*/
/* 		*/
/* 	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			*/
/* 		*/
/* 		*/
/* 		*/
/* 		*/
/* 		<div class="row">*/
/* 			<div class="col-lg-12">*/
/* 				<div class="panel panel-default">*/
/*                                     {% block page %}*/
/* 					<div class="panel-heading">header</div>*/
/* 					<div class="panel-body">*/
/*                                             */
/* 						<div class="alert-link" style="padding: 30px;">Test</div>*/
/*                                             */
/* 					</div>*/
/*                                     {% endblock %}    */
/* 				</div>*/
/* 			</div>*/
/* 		</div><!--/.row-->*/
/* 		*/
/* 		*/
/* 	</div>	<!--/.main-->*/
/* */
/* 	<script src="{{ asset('template_admin/js/jquery-1.11.1.min.js')}}"></script>*/
/* 	<script src="{{ asset('template_admin/js/bootstrap.min.js')}}"></script>*/
/* 	<script src="{{ asset('template_admin/js/chart.min.js')}}"></script>*/
/* 	<script src="{{ asset('template_admin/js/chart-data.js')}}"></script>*/
/* 	<script src="{{ asset('template_admin/js/easypiechart.js')}}"></script>*/
/* 	<script src="{{ asset('template_admin/js/easypiechart-data.js')}}"></script>*/
/* 	<script src="{{ asset('template_admin/js/bootstrap-datepicker.js')}}"></script>*/
/* 	<script>*/
/* 		$('#calendar').datepicker({*/
/* 		});*/
/* */
/* 		!function ($) {*/
/* 		    $(document).on("click","ul.nav li.parent > a > span.icon", function(){          */
/* 		        $(this).find('em:first').toggleClass("glyphicon-minus");      */
/* 		    }); */
/* 		    $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");*/
/* 		}(window.jQuery);*/
/* */
/* 		$(window).on('resize', function () {*/
/* 		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')*/
/* 		})*/
/* 		$(window).on('resize', function () {*/
/* 		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')*/
/* 		})*/
/* 	</script>	*/
/* </body>*/
/* */
/* </html>*/
/* */
