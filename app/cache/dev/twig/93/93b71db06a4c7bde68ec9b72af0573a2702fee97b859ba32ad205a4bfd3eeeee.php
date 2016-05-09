<?php

/* MyAppUserBundle:Default:test.html.twig */
class __TwigTemplate_51c5d95aeb48ca5ffd368eb5fa9f74f81abb47d7578ae89ac17a57fdb6bb519c extends Twig_Template
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
        // line 2
        echo "<script>
    \$(document).ready(function(){
        function ajaxCall(usernme){
            
            \$.ajax({ 
                url:\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("list_service");
        echo "\",
                method:\"post\",
                data: {id:username}
            }).done(function(msg){
   refreshList();         
});
        }
    })
    
    
   <script> \$(document).ready(function(){
function ajaxCall(username){ 
    var list=\$('#list');
\$.ajax({
    url: \"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("list_service");
        echo "\", 
    method: \"post\",
    data: {id: fk_id}).done(function(msg){ refreshList(); }); 
} 
function refreshList()(  
        list.innerHTML = \"\";
\$.each(JSON.parse(msg['data']); function(i, item) {
    var li = document.createElement('li'); 
    var text = document.createTextNode( item.prenom + \" \" + item.nom );
    li.appendChild(text);
    list.appendChild(li); 
    }); 
    }
});
</script>

<input type=\"text\" id=\"list\">";
    }

    public function getTemplateName()
    {
        return "MyAppUserBundle:Default:test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 21,  26 => 7,  19 => 2,);
    }
}
/* {# empty Twig template #}*/
/* <script>*/
/*     $(document).ready(function(){*/
/*         function ajaxCall(usernme){*/
/*             */
/*             $.ajax({ */
/*                 url:"{{ path('list_service')}}",*/
/*                 method:"post",*/
/*                 data: {id:username}*/
/*             }).done(function(msg){*/
/*    refreshList();         */
/* });*/
/*         }*/
/*     })*/
/*     */
/*     */
/*    <script> $(document).ready(function(){*/
/* function ajaxCall(username){ */
/*     var list=$('#list');*/
/* $.ajax({*/
/*     url: "{{path('list_service')}}", */
/*     method: "post",*/
/*     data: {id: fk_id}).done(function(msg){ refreshList(); }); */
/* } */
/* function refreshList()(  */
/*         list.innerHTML = "";*/
/* $.each(JSON.parse(msg['data']); function(i, item) {*/
/*     var li = document.createElement('li'); */
/*     var text = document.createTextNode( item.prenom + " " + item.nom );*/
/*     li.appendChild(text);*/
/*     list.appendChild(li); */
/*     }); */
/*     }*/
/* });*/
/* </script>*/
/* */
/* <input type="text" id="list">*/
