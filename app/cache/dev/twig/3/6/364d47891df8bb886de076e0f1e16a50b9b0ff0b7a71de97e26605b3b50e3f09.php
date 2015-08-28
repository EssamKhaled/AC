<?php

/* AppBundle:Default:index.html.twig */
class __TwigTemplate_364d47891df8bb886de076e0f1e16a50b9b0ff0b7a71de97e26605b3b50e3f09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/index.html.twig", "AppBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c6a8b05908ed690c951a4efb47eaaa8208fcb3a4b722c2946d8dda378fe6e2be = $this->env->getExtension("native_profiler");
        $__internal_c6a8b05908ed690c951a4efb47eaaa8208fcb3a4b722c2946d8dda378fe6e2be->enter($__internal_c6a8b05908ed690c951a4efb47eaaa8208fcb3a4b722c2946d8dda378fe6e2be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6a8b05908ed690c951a4efb47eaaa8208fcb3a4b722c2946d8dda378fe6e2be->leave($__internal_c6a8b05908ed690c951a4efb47eaaa8208fcb3a4b722c2946d8dda378fe6e2be_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b9c07ca2e55e643e9f09e8a4d7091d51d253d35dfbccb2a1681d07af04c9b107 = $this->env->getExtension("native_profiler");
        $__internal_b9c07ca2e55e643e9f09e8a4d7091d51d253d35dfbccb2a1681d07af04c9b107->enter($__internal_b9c07ca2e55e643e9f09e8a4d7091d51d253d35dfbccb2a1681d07af04c9b107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Home Page";
        
        $__internal_b9c07ca2e55e643e9f09e8a4d7091d51d253d35dfbccb2a1681d07af04c9b107->leave($__internal_b9c07ca2e55e643e9f09e8a4d7091d51d253d35dfbccb2a1681d07af04c9b107_prof);

    }

    // line 5
    public function block_container($context, array $blocks = array())
    {
        $__internal_3612910dcb4a937ea7cff9410066f495d69a78fe8ed080b5afcb36f7e8b1cc9f = $this->env->getExtension("native_profiler");
        $__internal_3612910dcb4a937ea7cff9410066f495d69a78fe8ed080b5afcb36f7e8b1cc9f->enter($__internal_3612910dcb4a937ea7cff9410066f495d69a78fe8ed080b5afcb36f7e8b1cc9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 6
        echo "    <h2>Analytic Service :- Home</h2>
        <div class=\"row\" style=\"padding-bottom: 20px;\">
            <div class=\"col-lg-12\">
                ";
        // line 9
        if (((isset($context["success"]) ? $context["success"] : $this->getContext($context, "success")) == false)) {
            // line 10
            echo "                    <div class=\"bg-danger\" style=\"padding:20px;\">
                        ";
            // line 11
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo "
                        <img src=\"https://placeholdit.imgix.net/~text?w=1&h=1&bg=F00\" />
                    </div>
                ";
        } else {
            // line 15
            echo "                    <div class=\"bg-success\" style=\"padding:20px;\">
                        ";
            // line 16
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo "
                        <img src=\"https://placeholdit.imgix.net/~text?w=1&h=1&bg=\" />
                    </div>
                ";
        }
        // line 20
        echo "            </div>
        </div>      
";
        
        $__internal_3612910dcb4a937ea7cff9410066f495d69a78fe8ed080b5afcb36f7e8b1cc9f->leave($__internal_3612910dcb4a937ea7cff9410066f495d69a78fe8ed080b5afcb36f7e8b1cc9f_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 20,  73 => 16,  70 => 15,  63 => 11,  60 => 10,  58 => 9,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
