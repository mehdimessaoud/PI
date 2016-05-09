<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_0222f01c9daf43d24a1a24addf4c2033fd9c065a05fbcce70378cb27f2f3eae2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'profile' => array($this, 'block_profile'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "<img alt=\"logo\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((("image/" . $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array())) . "/") . $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "image", array()))), "html", null, true);
        echo "\" width=200 hight=400 />
</br>
</br>
</br><p><b>Description</b> :";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "description", array()), "html", null, true);
        echo "</p>
<div class=\"fos_user_user_show\">
<link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("post_fichier/bootstrap.css"), "html", null, true);
        echo "\">
<a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("modifier", array(), "FOSUserBundle"), "html", null, true);
        echo "</a>
";
        // line 9
        $this->displayBlock('profile', $context, $blocks);
        // line 115
        echo "
</div>
";
    }

    // line 9
    public function block_profile($context, array $blocks = array())
    {
        // line 10
        echo "<div id=\"site-content\" class=\"clearfix\">

<div id=\"site-content-column\"  class=\"users-posts-section page-template-user-profile\">
<div class=\"page-body\">
<div class=\"page-user\">
<div class=\"page-user-info\">
<h3>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getUsername", array()), "html", null, true);
        echo "</h3>
<div class=\"content-meta\">
<span><a href=\"http://www.bluthemes.com/themes-special/katla/?page_id=398&amp;status=all\">Posts: 0</a></span>
<span><a href=\"http://www.bluthemes.com/themes-special/katla/?page_id=398&amp;sect=upvotes\">Upvoted Posts: 19</a></span>
<span><a href=\"http://www.bluthemes.com/themes-special/katla/?page_id=398&amp;sect=downvotes\">Downvoted Posts: 7</a></span>
";
        // line 21
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 25
        echo "</div>
</div>
</div>
<div class=\"page-text\">
</div>
</div>
<div role=\"tabpanel\">
<ul class=\"nav nav-tabs hidden-xs\" role=\"tablist\">
<li role=\"presentation\"><a href=\"#\" role=\"tab\">All Posts</a></li>
<li role=\"presentation\" class=\"active\"><a href=\"#\" role=\"tab\">Published Posts</a></li>
<li role=\"presentation\" ><a href=\"#\" role=\"tab\">Pending Posts</a></li>
<li role=\"presentation\"><a href=\"#\" role=\"tab\">Removed Posts</a></li>
</ul>

<div class=\"user-dropdown dropdown navbar-btn visible-xs\">
<button class=\"btn btn-default dropdown-toggle\" type=\"button\" id=\"dropdownMenu2\" data-toggle=\"dropdown\" aria-expanded=\"true\">
Select Posts\t\t\t\t\t\t\t    \t<span class=\"caret\"></span>
</button>
<ul class=\"dropdown-menu nav\" role=\"tablist\" aria-labelledby=\"dropdownMenu2\">
<li role=\"presentation\"><a href=\"#all-posts\" aria-controls=\"all-posts\" data-toggle=\"tab\">All Posts</a></li>
<li role=\"presentation\"><a href=\"#published-posts\" aria-controls=\"published-posts\" data-toggle=\"tab\">Published Posts</a></li>
<li role=\"presentation\"><a href=\"#pending-posts\" aria-controls=\"pending-posts\" data-toggle=\"tab\">Pending Posts</a></li>
<li role=\"presentation\"><a href=\"#removed-posts\" aria-controls=\"removed-posts\" data-toggle=\"tab\">Removed Posts</a></li>
</ul>
</div>


<div class=\"tab-content\">

<div role=\"tabpanel\" id=\"all-posts\" class=\"tab-pane active users-profile-wrap\">
<div class=\"posts-list\">
<article class=\"post list-sm-item list-sm-item-no-image\">
<div class=\"list-sm-meta\">
<h4 class=\"list-sm-title\">No posts found</h4>
</div>
</article>
            </div>

</div>


</div>

</div>
</div><aside id=\"site-content-sidebar\"><div class=\"content-sidebar-wrap\"><div id=\"blt_socialbox-3\" class=\"single-widget blt_socialbox clearfix\">\t\t<div class=\"widget-body\">
<ul class=\"social-links-list list-unstyled clearfix\">\t\t\t\t\t\t<li>
<a class=\"blt-facebook-background blt-facebook-border\" target=\"_blank\" href=\"https://www.facebook.com/bluthemes\" >
<i class=\"fa fa-facebook\"></i></a>
</li>\t\t\t\t\t\t<li>
<a class=\"blt-twitter-background blt-twitter-border\" target=\"_blank\" href=\"http://twitter.com/bluthemes\">
<i class=\"fa fa-twitter\"></i></a>
</li>\t\t\t\t\t\t<li>
<a class=\"blt-dribbble-background blt-dribbble-border\" target=\"_blank\" href=\"http://www.dribbble.com/bluthemes\">
<i class=\"fa fa-dribbble\"></i></a>
</li>\t\t\t\t\t\t<li>
<a class=\"blt-instagram-background blt-instagram-border\" target=\"_blank\" href=\"https://instagram.com/envatostudio/\">
<i class=\"fa fa-instagram\"></i></a>
</li>\t\t\t</ul>
</div></div><div id=\"blt_posts-3\" class=\"single-widget blt_posts\"><h3 class=\"widget-head\">Trending Posts</h3><div class=\"layout-list\"><article class=\"layout-list-item\"><a href=\"http://www.bluthemes.com/themes-special/katla/?p=46\"><div class=\"post-image\"><img width=\"150\" height=\"150\" src=\"http://www.bluthemes.com/themes-special/katla/wp-content/uploads/2015/04/15784294351_be8519353e_h-150x150.jpg\" class=\"attachment-thumbnail size-thumbnail wp-post-image\" alt=\"10 unbelievable photos of Iceland’s raw nature\" srcset=\"http://www.bluthemes.com/themes-special/katla/wp-content/uploads/2015/04/15784294351_be8519353e_h-150x150.jpg 150w, http://www.bluthemes.com/themes-special/katla/wp-content/uploads/2015/04/15784294351_be8519353e_h-300x300.jpg 300w\" sizes=\"(max-width: 150px) 100vw, 150px\"></div><div class=\"post-meta\"><h4>10 unbelievable photos of Iceland’s raw nature</h4><p class=\"post-date text-muted\"><i class=\"mdi-device-access-time\"></i>&nbsp;April 16, 2015</p></div></a></article><article class=\"layout-list-item\"><a href=\"http://www.bluthemes.com/themes-special/katla/?p=134\"><div class=\"post-image\"><img width=\"150\" height=\"150\" src=\"http://www.bluthemes.com/themes-special/katla/wp-content/uploads/2015/04/OzvwsvK-150x150.jpg\" class=\"attachment-thumbnail size-thumbnail wp-post-image\" alt=\"Ellen Jewett Merges Animals And Plants In To Otherworldly Sculptures\" srcset=\"http://www.bluthemes.com/themes-special/katla/wp-content/uploads/2015/04/OzvwsvK-150x150.jpg 150w, http://www.bluthemes.com/themes-special/katla/wp-content/uploads/2015/04/OzvwsvK-300x300.jpg 300w\" sizes=\"(max-width: 150px) 100vw, 150px\"></div><div class=\"post-meta\"><h4>Ellen Jewett Merges Animals And Plants In To Otherworldly Sculptures</h4><p class=\"post-date text-muted\"><i class=\"mdi-device-access-time\"></i>&nbsp;April 16, 2015</p></div></a></article><article class=\"layout-list-item\"><a href=\"http://www.bluthemes.com/themes-special/katla/?p=122\"><div class=\"post-image\"><img width=\"150\" height=\"150\" src=\"http://www.bluthemes.com/themes-special/katla/wp-content/uploads/2015/04/zkUEvoI-150x150.jpg\" class=\"attachment-thumbnail size-thumbnail wp-post-image\" alt=\"Artist Spent 10 Years Carving a Giant Cave With His Dog\" srcset=\"http://www.bluthemes.com/themes-special/katla/wp-content/uploads/2015/04/zkUEvoI-150x150.jpg 150w, http://www.bluthemes.com/themes-special/katla/wp-content/uploads/2015/04/zkUEvoI-300x300.jpg 300w\" sizes=\"(max-width: 150px) 100vw, 150px\"></div><div class=\"post-meta\"><h4>Artist Spent 10 Years Carving a Giant Cave With His Dog</h4><p class=\"post-date text-muted\"><i class=\"mdi-device-access-time\"></i>&nbsp;April 16, 2015</p></div></a></article><article class=\"layout-list-item\"><a href=\"http://www.bluthemes.com/themes-special/katla/?p=111\"><div class=\"post-image\"><img width=\"150\" height=\"150\" src=\"http://www.bluthemes.com/themes-special/katla/wp-content/uploads/2015/04/picjumbo.com_foodiesfeed.com_DSC_0004-1-150x150.jpg\" class=\"attachment-thumbnail size-thumbnail wp-post-image\" alt=\"Top 5 of my Favorite Meals\" srcset=\"http://www.bluthemes.com/themes-special/katla/wp-content/uploads/2015/04/picjumbo.com_foodiesfeed.com_DSC_0004-1-150x150.jpg 150w, http://www.bluthemes.com/themes-special/katla/wp-content/uploads/2015/04/picjumbo.com_foodiesfeed.com_DSC_0004-1-300x300.jpg 300w\" sizes=\"(max-width: 150px) 100vw, 150px\"></div><div class=\"post-meta\"><h4>Top 5 of my Favorite Meals</h4><p class=\"post-date text-muted\"><i class=\"mdi-device-access-time\"></i>&nbsp;April 16, 2015</p></div></a></article></div></div><div id=\"nav_menu-3\" class=\"single-widget widget_nav_menu\"><h3 class=\"widget-head\">Pages</h3><div class=\"menu-footer-menu-container\"><ul id=\"menu-footer-menu\" class=\"menu\"><li id=\"menu-item-275\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-275\"><a href=\"http://www.bluthemes.com/themes-special/katla/?page_id=269\">Submit a Post</a></li>
<li id=\"menu-item-248\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-248\"><a href=\"http://www.bluthemes.com/themes-special/katla/?page_id=244\">Theme Options</a></li>
<li id=\"menu-item-180\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-180\"><a href=\"http://www.bluthemes.com/themes-special/katla/?page_id=176\">Contact Us</a></li>
</ul></div></div><div id=\"blt_instagram-3\" class=\"single-widget blt_instagram bw_slider\"><h3 class=\"widget-head\">Instagram</h3>
<div class=\"widget-body\">
<div class=\"instagram-images clearfix\"><a class=\"instagram-link\" href=\"https://www.instagram.com/p/u-6HO6p9Tx/#\" target=\"_blank\"><img src=\"https://scontent.cdninstagram.com/t51.2885-15/s150x150/e15/10731655_623595611083608_1713425064_n.jpg?ig_cache_key=ODQ2MzY5MzYzNzQyNjc2MjA5.2\" alt=\"Our daily motivation from Mario\"></a>\t\t\t\t\t\t\t<a class=\"instagram-link\" href=\"https://www.instagram.com/p/iJbDAjJ9bc/#\" target=\"_blank\"><img src=\"https://scontent.cdninstagram.com/t51.2885-15/s150x150/e15/1391404_1403694659874788_466254171_n.jpg?ig_cache_key=NjE1MTQxNzc4MTE2ODI2ODQ0.2\" alt=\"The new company car!\"></a>\t\t\t\t\t\t\t<a class=\"instagram-link\" href=\"https://www.instagram.com/p/hvnDl1p9a9/#\" target=\"_blank\"><img src=\"https://scontent.cdninstagram.com/t51.2885-15/s150x150/e15/1168675_505367862910787_573896202_n.jpg?ig_cache_key=NjA3ODc2MjQ1MzE5MzA4OTg5.2\" alt=\"Russell Brand -  Messiah Complex\"></a>\t\t\t\t\t\t\t<a class=\"instagram-link\" href=\"https://www.instagram.com/p/gdNU27J9YP/#\" target=\"_blank\"><img src=\"https://scontent.cdninstagram.com/t51.2885-15/s150x150/e15/1390098_179895578872855_1361208348_n.jpg?ig_cache_key=NTg0NjgyMTM0NTk2NzM2NTI3.2\" alt=\"New hardware!\"></a>\t\t\t\t\t\t\t<a class=\"instagram-link\" href=\"https://www.instagram.com/p/gWXJu-J9Ws/#\" target=\"_blank\"><img src=\"https://scontent.cdninstagram.com/t51.2885-15/s150x150/e15/1389893_716112998418148_1742269607_n.jpg?ig_cache_key=NTgyNzU1MDI1NzcxMDI1ODM2.2\" alt=\"\"></a>\t\t\t\t\t\t\t<a class=\"instagram-link\" href=\"https://www.instagram.com/p/gWXFTlJ9Wh/#\" target=\"_blank\"><img src=\"https://scontent.cdninstagram.com/t51.2885-15/s150x150/e15/1389205_621554337908907_1792060404_n.jpg?ig_cache_key=NTgyNzU0NzIxNDgyNjU5MjMz.2\" alt=\"\"></a>\t\t\t\t\t\t\t<a class=\"instagram-link\" href=\"https://www.instagram.com/p/dPYkEjJ9dw/#\" target=\"_blank\"><img src=\"https://scontent.cdninstagram.com/t51.2885-15/s150x150/e15/11378680_451587398348342_1776976965_n.jpg?ig_cache_key=NTI2NzQ3NzEzMzI3ODQ3Mjgw.2\" alt=\"\"></a>\t\t\t\t\t\t\t<a class=\"instagram-link\" href=\"https://www.instagram.com/p/dPYAwHJ9cy/#\" target=\"_blank\"><img src=\"https://scontent.cdninstagram.com/t51.2885-15/s150x150/e15/11352886_363494403846984_625488731_n.jpg?ig_cache_key=NTI2NzQ1Mjg2MjAxNTYyOTMw.2\" alt=\"Some pool to ease the mind\"></a>\t\t\t\t\t\t\t<a class=\"instagram-link\" href=\"https://www.instagram.com/p/dPN6CLJ9fd/#\" target=\"_blank\"><img src=\"https://scontent.cdninstagram.com/t51.2885-15/s150x150/e15/11378594_964748236890548_1509767579_n.jpg?ig_cache_key=NTI2NzAwODQ0MDk0NTc2NjA1.2\" alt=\"\"></a>\t\t\t\t\t\t\t<a class=\"instagram-link\" href=\"https://www.instagram.com/p/aUHbnSp9fz/#\" target=\"_blank\"><img src=\"https://scontent.cdninstagram.com/t51.2885-15/s150x150/e15/11265220_1573732002877796_507172651_n.jpg?ig_cache_key=NDc0MDM2NTQ0NzIxMTE1MTIz.2\" alt=\"The Bluth Company watching Tinie Tempah #tinietempah\"></a>\t\t\t\t\t\t\t<a class=\"instagram-link\" href=\"https://www.instagram.com/p/aN8C2Ap9ZZ/#\" target=\"_blank\"><img src=\"https://scontent.cdninstagram.com/t51.2885-15/s150x150/e15/11357793_276995372471073_1603357348_n.jpg?ig_cache_key=NDcyMjk3NjE0MTY2NDQ3NzA1.2\" alt=\"The vault!\"></a>\t\t\t\t\t\t\t<a class=\"instagram-link\" href=\"https://www.instagram.com/p/aN739nJ9ZO/#\" target=\"_blank\"><img src=\"https://scontent.cdninstagram.com/t51.2885-15/s150x150/e15/11287874_489840887834712_332954490_n.jpg?ig_cache_key=NDcyMjk2ODY2NDE0MzE5MTgy.2\" alt=\"The old army base where our offices are located\"></a>
</div>

<ul class=\"instagram-info clearfix\">

<li>
<h4>48</h4>
<small class=\"text-muted\">followers</small>
</li>

<li>
<h4>3</h4>
<small class=\"text-muted\">following</small>
</li>

<li>
<h4>12</h4>
<small class=\"text-muted\">photos</small>
</li>

</ul>
</div></div><div id=\"blt_posts-4\" class=\"single-widget blt_posts\"><h3 class=\"widget-head\"></h3><div class=\"layout-grid\"><article class=\"layout-grid-item\"><a href=\"http://www.bluthemes.com/themes-special/katla/?p=119\"><div class=\"post-image\"><img width=\"320\" height=\"180\" src=\"http://www.bluthemes.com/themes-special/katla/wp-content/uploads/2015/04/Rick_Astley_Tivoli_Gardens-320x180.jpg\" class=\"attachment-md size-md wp-post-image\" alt=\"Rick Astley’s First Single in 17 Years – Lights Out\" srcset=\"http://www.bluthemes.com/themes-special/katla/wp-content/uploads/2015/04/Rick_Astley_Tivoli_Gardens-300x169.jpg 300w, http://www.bluthemes.com/themes-special/katla/wp-content/uploads/2015/04/Rick_Astley_Tivoli_Gardens-1024x576.jpg 1024w, http://www.bluthemes.com/themes-special/katla/wp-content/uploads/2015/04/Rick_Astley_Tivoli_Gardens-320x180.jpg 320w, http://www.bluthemes.com/themes-special/katla/wp-content/uploads/2015/04/Rick_Astley_Tivoli_Gardens-1020x574.jpg 1020w, http://www.bluthemes.com/themes-special/katla/wp-content/uploads/2015/04/Rick_Astley_Tivoli_Gardens-700x394.jpg 700w, http://www.bluthemes.com/themes-special/katla/wp-content/uploads/2015/04/Rick_Astley_Tivoli_Gardens-160x90.jpg 160w\" sizes=\"(max-width: 320px) 100vw, 320px\"></div><div class=\"post-meta\"><h4>Rick Astley’s First Single in 17 Years – Lights Out</h4><p class=\"post-date text-muted\"><i class=\"mdi-device-access-time\"></i>&nbsp;April 16, 2015</p></div></a></article><article class=\"layout-grid-item\"><a href=\"http://www.bluthemes.com/themes-special/katla/?p=111\"><div class=\"post-image\"><img width=\"320\" height=\"213\" src=\"http://www.bluthemes.com/themes-special/katla/wp-content/uploads/2015/04/picjumbo.com_foodiesfeed.com_DSC_0004-1-320x213.jpg\" class=\"attachment-md size-md wp-post-image\" alt=\"Top 5 of my Favorite Meals\" srcset=\"http://www.bluthemes.com/themes-special/katla/wp-content/uploads/2015/04/picjumbo.com_foodiesfeed.com_DSC_0004-1-300x200.jpg 300w, http://www.bluthemes.com/themes-special/katla/wp-content/uploads/2015/04/picjumbo.com_foodiesfeed.com_DSC_0004-1-1024x683.jpg 1024w, http://www.bluthemes.com/themes-special/katla/wp-content/uploads/2015/04/picjumbo.com_foodiesfeed.com_DSC_0004-1-1020x680.jpg 1020w, http://www.bluthemes.com/themes-special/katla/wp-content/uploads/2015/04/picjumbo.com_foodiesfeed.com_DSC_0004-1-700x467.jpg 700w, http://www.bluthemes.com/themes-special/katla/wp-content/uploads/2015/04/picjumbo.com_foodiesfeed.com_DSC_0004-1-320x213.jpg 320w\" sizes=\"(max-width: 320px) 100vw, 320px\"></div><div class=\"post-meta\"><h4>Top 5 of my Favorite Meals</h4><p class=\"post-date text-muted\"><i class=\"mdi-device-access-time\"></i>&nbsp;April 16, 2015</p></div></a></article><article class=\"layout-grid-item\"><a href=\"http://www.bluthemes.com/themes-special/katla/?p=101\"><div class=\"post-image\"><img width=\"320\" height=\"213\" src=\"http://www.bluthemes.com/themes-special/katla/wp-content/uploads/2015/04/majestic-320x213.jpg\" class=\"attachment-md size-md wp-post-image\" alt=\"Look deep into nature, and then you will understand everything better\" srcset=\"http://www.bluthemes.com/themes-special/katla/wp-content/uploads/2015/04/majestic-300x200.jpg 300w, http://www.bluthemes.com/themes-special/katla/wp-content/uploads/2015/04/majestic-1024x682.jpg 1024w, http://www.bluthemes.com/themes-special/katla/wp-content/uploads/2015/04/majestic-1020x680.jpg 1020w, http://www.bluthemes.com/themes-special/katla/wp-content/uploads/2015/04/majestic-700x466.jpg 700w, http://www.bluthemes.com/themes-special/katla/wp-content/uploads/2015/04/majestic-320x213.jpg 320w\" sizes=\"(max-width: 320px) 100vw, 320px\"></div><div class=\"post-meta\"><h4>Look deep into nature, and then you will understand everything better</h4><p class=\"post-date text-muted\"><i class=\"mdi-device-access-time\"></i>&nbsp;April 16, 2015</p></div></a></article></div></div></div></aside>
</div>

<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js\">window.jQuery || document.write('<script src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"><\\/script>')</script>

";
    }

    // line 21
    public function block_textarea_widget($context, array $blocks = array())
    {
        // line 22
        echo "

";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 22,  168 => 21,  161 => 112,  72 => 25,  70 => 21,  62 => 16,  54 => 10,  51 => 9,  45 => 115,  43 => 9,  37 => 8,  33 => 7,  28 => 5,  21 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* <img alt="logo" src="{{ asset('image/' ~ user.id ~'/' ~ user.image)}}" width=200 hight=400 />*/
/* </br>*/
/* </br>*/
/* </br><p><b>Description</b> :{{ user.description }}</p>*/
/* <div class="fos_user_user_show">*/
/* <link rel="stylesheet" href="{{ asset('post_fichier/bootstrap.css') }}">*/
/* <a href="{{ path('fos_user_profile_edit') }}">{{ 'modifier'|trans({}, 'FOSUserBundle') }}</a>*/
/* {% block profile %}*/
/* <div id="site-content" class="clearfix">*/
/* */
/* <div id="site-content-column"  class="users-posts-section page-template-user-profile">*/
/* <div class="page-body">*/
/* <div class="page-user">*/
/* <div class="page-user-info">*/
/* <h3>{{ user.getUsername }}</h3>*/
/* <div class="content-meta">*/
/* <span><a href="http://www.bluthemes.com/themes-special/katla/?page_id=398&amp;status=all">Posts: 0</a></span>*/
/* <span><a href="http://www.bluthemes.com/themes-special/katla/?page_id=398&amp;sect=upvotes">Upvoted Posts: 19</a></span>*/
/* <span><a href="http://www.bluthemes.com/themes-special/katla/?page_id=398&amp;sect=downvotes">Downvoted Posts: 7</a></span>*/
/* {% block textarea_widget %}*/
/* */
/* */
/* {% endblock %}*/
/* </div>*/
/* </div>*/
/* </div>*/
/* <div class="page-text">*/
/* </div>*/
/* </div>*/
/* <div role="tabpanel">*/
/* <ul class="nav nav-tabs hidden-xs" role="tablist">*/
/* <li role="presentation"><a href="#" role="tab">All Posts</a></li>*/
/* <li role="presentation" class="active"><a href="#" role="tab">Published Posts</a></li>*/
/* <li role="presentation" ><a href="#" role="tab">Pending Posts</a></li>*/
/* <li role="presentation"><a href="#" role="tab">Removed Posts</a></li>*/
/* </ul>*/
/* */
/* <div class="user-dropdown dropdown navbar-btn visible-xs">*/
/* <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-expanded="true">*/
/* Select Posts							    	<span class="caret"></span>*/
/* </button>*/
/* <ul class="dropdown-menu nav" role="tablist" aria-labelledby="dropdownMenu2">*/
/* <li role="presentation"><a href="#all-posts" aria-controls="all-posts" data-toggle="tab">All Posts</a></li>*/
/* <li role="presentation"><a href="#published-posts" aria-controls="published-posts" data-toggle="tab">Published Posts</a></li>*/
/* <li role="presentation"><a href="#pending-posts" aria-controls="pending-posts" data-toggle="tab">Pending Posts</a></li>*/
/* <li role="presentation"><a href="#removed-posts" aria-controls="removed-posts" data-toggle="tab">Removed Posts</a></li>*/
/* </ul>*/
/* </div>*/
/* */
/* */
/* <div class="tab-content">*/
/* */
/* <div role="tabpanel" id="all-posts" class="tab-pane active users-profile-wrap">*/
/* <div class="posts-list">*/
/* <article class="post list-sm-item list-sm-item-no-image">*/
/* <div class="list-sm-meta">*/
/* <h4 class="list-sm-title">No posts found</h4>*/
/* </div>*/
/* </article>*/
/*             </div>*/
/* */
/* </div>*/
/* */
/* */
/* </div>*/
/* */
/* </div>*/
/* </div><aside id="site-content-sidebar"><div class="content-sidebar-wrap"><div id="blt_socialbox-3" class="single-widget blt_socialbox clearfix">		<div class="widget-body">*/
/* <ul class="social-links-list list-unstyled clearfix">						<li>*/
/* <a class="blt-facebook-background blt-facebook-border" target="_blank" href="https://www.facebook.com/bluthemes" >*/
/* <i class="fa fa-facebook"></i></a>*/
/* </li>						<li>*/
/* <a class="blt-twitter-background blt-twitter-border" target="_blank" href="http://twitter.com/bluthemes">*/
/* <i class="fa fa-twitter"></i></a>*/
/* </li>						<li>*/
/* <a class="blt-dribbble-background blt-dribbble-border" target="_blank" href="http://www.dribbble.com/bluthemes">*/
/* <i class="fa fa-dribbble"></i></a>*/
/* </li>						<li>*/
/* <a class="blt-instagram-background blt-instagram-border" target="_blank" href="https://instagram.com/envatostudio/">*/
/* <i class="fa fa-instagram"></i></a>*/
/* </li>			</ul>*/
/* </div></div><div id="blt_posts-3" class="single-widget blt_posts"><h3 class="widget-head">Trending Posts</h3><div class="layout-list"><article class="layout-list-item"><a href="http://www.bluthemes.com/themes-special/katla/?p=46"><div class="post-image"><img width="150" height="150" src="http://www.bluthemes.com/themes-special/katla/wp-content/uploads/2015/04/15784294351_be8519353e_h-150x150.jpg" class="attachment-thumbnail size-thumbnail wp-post-image" alt="10 unbelievable photos of Iceland’s raw nature" srcset="http://www.bluthemes.com/themes-special/katla/wp-content/uploads/2015/04/15784294351_be8519353e_h-150x150.jpg 150w, http://www.bluthemes.com/themes-special/katla/wp-content/uploads/2015/04/15784294351_be8519353e_h-300x300.jpg 300w" sizes="(max-width: 150px) 100vw, 150px"></div><div class="post-meta"><h4>10 unbelievable photos of Iceland’s raw nature</h4><p class="post-date text-muted"><i class="mdi-device-access-time"></i>&nbsp;April 16, 2015</p></div></a></article><article class="layout-list-item"><a href="http://www.bluthemes.com/themes-special/katla/?p=134"><div class="post-image"><img width="150" height="150" src="http://www.bluthemes.com/themes-special/katla/wp-content/uploads/2015/04/OzvwsvK-150x150.jpg" class="attachment-thumbnail size-thumbnail wp-post-image" alt="Ellen Jewett Merges Animals And Plants In To Otherworldly Sculptures" srcset="http://www.bluthemes.com/themes-special/katla/wp-content/uploads/2015/04/OzvwsvK-150x150.jpg 150w, http://www.bluthemes.com/themes-special/katla/wp-content/uploads/2015/04/OzvwsvK-300x300.jpg 300w" sizes="(max-width: 150px) 100vw, 150px"></div><div class="post-meta"><h4>Ellen Jewett Merges Animals And Plants In To Otherworldly Sculptures</h4><p class="post-date text-muted"><i class="mdi-device-access-time"></i>&nbsp;April 16, 2015</p></div></a></article><article class="layout-list-item"><a href="http://www.bluthemes.com/themes-special/katla/?p=122"><div class="post-image"><img width="150" height="150" src="http://www.bluthemes.com/themes-special/katla/wp-content/uploads/2015/04/zkUEvoI-150x150.jpg" class="attachment-thumbnail size-thumbnail wp-post-image" alt="Artist Spent 10 Years Carving a Giant Cave With His Dog" srcset="http://www.bluthemes.com/themes-special/katla/wp-content/uploads/2015/04/zkUEvoI-150x150.jpg 150w, http://www.bluthemes.com/themes-special/katla/wp-content/uploads/2015/04/zkUEvoI-300x300.jpg 300w" sizes="(max-width: 150px) 100vw, 150px"></div><div class="post-meta"><h4>Artist Spent 10 Years Carving a Giant Cave With His Dog</h4><p class="post-date text-muted"><i class="mdi-device-access-time"></i>&nbsp;April 16, 2015</p></div></a></article><article class="layout-list-item"><a href="http://www.bluthemes.com/themes-special/katla/?p=111"><div class="post-image"><img width="150" height="150" src="http://www.bluthemes.com/themes-special/katla/wp-content/uploads/2015/04/picjumbo.com_foodiesfeed.com_DSC_0004-1-150x150.jpg" class="attachment-thumbnail size-thumbnail wp-post-image" alt="Top 5 of my Favorite Meals" srcset="http://www.bluthemes.com/themes-special/katla/wp-content/uploads/2015/04/picjumbo.com_foodiesfeed.com_DSC_0004-1-150x150.jpg 150w, http://www.bluthemes.com/themes-special/katla/wp-content/uploads/2015/04/picjumbo.com_foodiesfeed.com_DSC_0004-1-300x300.jpg 300w" sizes="(max-width: 150px) 100vw, 150px"></div><div class="post-meta"><h4>Top 5 of my Favorite Meals</h4><p class="post-date text-muted"><i class="mdi-device-access-time"></i>&nbsp;April 16, 2015</p></div></a></article></div></div><div id="nav_menu-3" class="single-widget widget_nav_menu"><h3 class="widget-head">Pages</h3><div class="menu-footer-menu-container"><ul id="menu-footer-menu" class="menu"><li id="menu-item-275" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-275"><a href="http://www.bluthemes.com/themes-special/katla/?page_id=269">Submit a Post</a></li>*/
/* <li id="menu-item-248" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-248"><a href="http://www.bluthemes.com/themes-special/katla/?page_id=244">Theme Options</a></li>*/
/* <li id="menu-item-180" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-180"><a href="http://www.bluthemes.com/themes-special/katla/?page_id=176">Contact Us</a></li>*/
/* </ul></div></div><div id="blt_instagram-3" class="single-widget blt_instagram bw_slider"><h3 class="widget-head">Instagram</h3>*/
/* <div class="widget-body">*/
/* <div class="instagram-images clearfix"><a class="instagram-link" href="https://www.instagram.com/p/u-6HO6p9Tx/#" target="_blank"><img src="https://scontent.cdninstagram.com/t51.2885-15/s150x150/e15/10731655_623595611083608_1713425064_n.jpg?ig_cache_key=ODQ2MzY5MzYzNzQyNjc2MjA5.2" alt="Our daily motivation from Mario"></a>							<a class="instagram-link" href="https://www.instagram.com/p/iJbDAjJ9bc/#" target="_blank"><img src="https://scontent.cdninstagram.com/t51.2885-15/s150x150/e15/1391404_1403694659874788_466254171_n.jpg?ig_cache_key=NjE1MTQxNzc4MTE2ODI2ODQ0.2" alt="The new company car!"></a>							<a class="instagram-link" href="https://www.instagram.com/p/hvnDl1p9a9/#" target="_blank"><img src="https://scontent.cdninstagram.com/t51.2885-15/s150x150/e15/1168675_505367862910787_573896202_n.jpg?ig_cache_key=NjA3ODc2MjQ1MzE5MzA4OTg5.2" alt="Russell Brand -  Messiah Complex"></a>							<a class="instagram-link" href="https://www.instagram.com/p/gdNU27J9YP/#" target="_blank"><img src="https://scontent.cdninstagram.com/t51.2885-15/s150x150/e15/1390098_179895578872855_1361208348_n.jpg?ig_cache_key=NTg0NjgyMTM0NTk2NzM2NTI3.2" alt="New hardware!"></a>							<a class="instagram-link" href="https://www.instagram.com/p/gWXJu-J9Ws/#" target="_blank"><img src="https://scontent.cdninstagram.com/t51.2885-15/s150x150/e15/1389893_716112998418148_1742269607_n.jpg?ig_cache_key=NTgyNzU1MDI1NzcxMDI1ODM2.2" alt=""></a>							<a class="instagram-link" href="https://www.instagram.com/p/gWXFTlJ9Wh/#" target="_blank"><img src="https://scontent.cdninstagram.com/t51.2885-15/s150x150/e15/1389205_621554337908907_1792060404_n.jpg?ig_cache_key=NTgyNzU0NzIxNDgyNjU5MjMz.2" alt=""></a>							<a class="instagram-link" href="https://www.instagram.com/p/dPYkEjJ9dw/#" target="_blank"><img src="https://scontent.cdninstagram.com/t51.2885-15/s150x150/e15/11378680_451587398348342_1776976965_n.jpg?ig_cache_key=NTI2NzQ3NzEzMzI3ODQ3Mjgw.2" alt=""></a>							<a class="instagram-link" href="https://www.instagram.com/p/dPYAwHJ9cy/#" target="_blank"><img src="https://scontent.cdninstagram.com/t51.2885-15/s150x150/e15/11352886_363494403846984_625488731_n.jpg?ig_cache_key=NTI2NzQ1Mjg2MjAxNTYyOTMw.2" alt="Some pool to ease the mind"></a>							<a class="instagram-link" href="https://www.instagram.com/p/dPN6CLJ9fd/#" target="_blank"><img src="https://scontent.cdninstagram.com/t51.2885-15/s150x150/e15/11378594_964748236890548_1509767579_n.jpg?ig_cache_key=NTI2NzAwODQ0MDk0NTc2NjA1.2" alt=""></a>							<a class="instagram-link" href="https://www.instagram.com/p/aUHbnSp9fz/#" target="_blank"><img src="https://scontent.cdninstagram.com/t51.2885-15/s150x150/e15/11265220_1573732002877796_507172651_n.jpg?ig_cache_key=NDc0MDM2NTQ0NzIxMTE1MTIz.2" alt="The Bluth Company watching Tinie Tempah #tinietempah"></a>							<a class="instagram-link" href="https://www.instagram.com/p/aN8C2Ap9ZZ/#" target="_blank"><img src="https://scontent.cdninstagram.com/t51.2885-15/s150x150/e15/11357793_276995372471073_1603357348_n.jpg?ig_cache_key=NDcyMjk3NjE0MTY2NDQ3NzA1.2" alt="The vault!"></a>							<a class="instagram-link" href="https://www.instagram.com/p/aN739nJ9ZO/#" target="_blank"><img src="https://scontent.cdninstagram.com/t51.2885-15/s150x150/e15/11287874_489840887834712_332954490_n.jpg?ig_cache_key=NDcyMjk2ODY2NDE0MzE5MTgy.2" alt="The old army base where our offices are located"></a>*/
/* </div>*/
/* */
/* <ul class="instagram-info clearfix">*/
/* */
/* <li>*/
/* <h4>48</h4>*/
/* <small class="text-muted">followers</small>*/
/* </li>*/
/* */
/* <li>*/
/* <h4>3</h4>*/
/* <small class="text-muted">following</small>*/
/* </li>*/
/* */
/* <li>*/
/* <h4>12</h4>*/
/* <small class="text-muted">photos</small>*/
/* </li>*/
/* */
/* </ul>*/
/* </div></div><div id="blt_posts-4" class="single-widget blt_posts"><h3 class="widget-head"></h3><div class="layout-grid"><article class="layout-grid-item"><a href="http://www.bluthemes.com/themes-special/katla/?p=119"><div class="post-image"><img width="320" height="180" src="http://www.bluthemes.com/themes-special/katla/wp-content/uploads/2015/04/Rick_Astley_Tivoli_Gardens-320x180.jpg" class="attachment-md size-md wp-post-image" alt="Rick Astley’s First Single in 17 Years – Lights Out" srcset="http://www.bluthemes.com/themes-special/katla/wp-content/uploads/2015/04/Rick_Astley_Tivoli_Gardens-300x169.jpg 300w, http://www.bluthemes.com/themes-special/katla/wp-content/uploads/2015/04/Rick_Astley_Tivoli_Gardens-1024x576.jpg 1024w, http://www.bluthemes.com/themes-special/katla/wp-content/uploads/2015/04/Rick_Astley_Tivoli_Gardens-320x180.jpg 320w, http://www.bluthemes.com/themes-special/katla/wp-content/uploads/2015/04/Rick_Astley_Tivoli_Gardens-1020x574.jpg 1020w, http://www.bluthemes.com/themes-special/katla/wp-content/uploads/2015/04/Rick_Astley_Tivoli_Gardens-700x394.jpg 700w, http://www.bluthemes.com/themes-special/katla/wp-content/uploads/2015/04/Rick_Astley_Tivoli_Gardens-160x90.jpg 160w" sizes="(max-width: 320px) 100vw, 320px"></div><div class="post-meta"><h4>Rick Astley’s First Single in 17 Years – Lights Out</h4><p class="post-date text-muted"><i class="mdi-device-access-time"></i>&nbsp;April 16, 2015</p></div></a></article><article class="layout-grid-item"><a href="http://www.bluthemes.com/themes-special/katla/?p=111"><div class="post-image"><img width="320" height="213" src="http://www.bluthemes.com/themes-special/katla/wp-content/uploads/2015/04/picjumbo.com_foodiesfeed.com_DSC_0004-1-320x213.jpg" class="attachment-md size-md wp-post-image" alt="Top 5 of my Favorite Meals" srcset="http://www.bluthemes.com/themes-special/katla/wp-content/uploads/2015/04/picjumbo.com_foodiesfeed.com_DSC_0004-1-300x200.jpg 300w, http://www.bluthemes.com/themes-special/katla/wp-content/uploads/2015/04/picjumbo.com_foodiesfeed.com_DSC_0004-1-1024x683.jpg 1024w, http://www.bluthemes.com/themes-special/katla/wp-content/uploads/2015/04/picjumbo.com_foodiesfeed.com_DSC_0004-1-1020x680.jpg 1020w, http://www.bluthemes.com/themes-special/katla/wp-content/uploads/2015/04/picjumbo.com_foodiesfeed.com_DSC_0004-1-700x467.jpg 700w, http://www.bluthemes.com/themes-special/katla/wp-content/uploads/2015/04/picjumbo.com_foodiesfeed.com_DSC_0004-1-320x213.jpg 320w" sizes="(max-width: 320px) 100vw, 320px"></div><div class="post-meta"><h4>Top 5 of my Favorite Meals</h4><p class="post-date text-muted"><i class="mdi-device-access-time"></i>&nbsp;April 16, 2015</p></div></a></article><article class="layout-grid-item"><a href="http://www.bluthemes.com/themes-special/katla/?p=101"><div class="post-image"><img width="320" height="213" src="http://www.bluthemes.com/themes-special/katla/wp-content/uploads/2015/04/majestic-320x213.jpg" class="attachment-md size-md wp-post-image" alt="Look deep into nature, and then you will understand everything better" srcset="http://www.bluthemes.com/themes-special/katla/wp-content/uploads/2015/04/majestic-300x200.jpg 300w, http://www.bluthemes.com/themes-special/katla/wp-content/uploads/2015/04/majestic-1024x682.jpg 1024w, http://www.bluthemes.com/themes-special/katla/wp-content/uploads/2015/04/majestic-1020x680.jpg 1020w, http://www.bluthemes.com/themes-special/katla/wp-content/uploads/2015/04/majestic-700x466.jpg 700w, http://www.bluthemes.com/themes-special/katla/wp-content/uploads/2015/04/majestic-320x213.jpg 320w" sizes="(max-width: 320px) 100vw, 320px"></div><div class="post-meta"><h4>Look deep into nature, and then you will understand everything better</h4><p class="post-date text-muted"><i class="mdi-device-access-time"></i>&nbsp;April 16, 2015</p></div></a></article></div></div></div></aside>*/
/* </div>*/
/* */
/* <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js">window.jQuery || document.write('<script src="{{ asset('js/jquery.js') }}"><\/script>')</script>*/
/* */
/* {% endblock  %}*/
/* */
/* </div>*/
/* */
