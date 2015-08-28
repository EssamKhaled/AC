<?php

/* AppBundle:Default:eventGroupByName.html.twig */
class __TwigTemplate_e91c89a25ec6ead166c82a111db3612ec96c523884366dc452e23aeafd552a59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/index.html.twig", "AppBundle:Default:eventGroupByName.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'javascripts' => array($this, 'block_javascripts'),
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_05d16578551de3187f47db8c10ec9ff0e0c90c109f664f6b444cfcfd1f88127c = $this->env->getExtension("native_profiler");
        $__internal_05d16578551de3187f47db8c10ec9ff0e0c90c109f664f6b444cfcfd1f88127c->enter($__internal_05d16578551de3187f47db8c10ec9ff0e0c90c109f664f6b444cfcfd1f88127c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default:eventGroupByName.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_05d16578551de3187f47db8c10ec9ff0e0c90c109f664f6b444cfcfd1f88127c->leave($__internal_05d16578551de3187f47db8c10ec9ff0e0c90c109f664f6b444cfcfd1f88127c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a8e9e7a3fc5286c8262243724592442b0eaf3db52b471d4434175cf859bef1d3 = $this->env->getExtension("native_profiler");
        $__internal_a8e9e7a3fc5286c8262243724592442b0eaf3db52b471d4434175cf859bef1d3->enter($__internal_a8e9e7a3fc5286c8262243724592442b0eaf3db52b471d4434175cf859bef1d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Dashboard";
        
        $__internal_a8e9e7a3fc5286c8262243724592442b0eaf3db52b471d4434175cf859bef1d3->leave($__internal_a8e9e7a3fc5286c8262243724592442b0eaf3db52b471d4434175cf859bef1d3_prof);

    }

    // line 5
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_30fa2149d7c5c73781913ff9898348bafe385875905354ef8e022e6c65129148 = $this->env->getExtension("native_profiler");
        $__internal_30fa2149d7c5c73781913ff9898348bafe385875905354ef8e022e6c65129148->enter($__internal_30fa2149d7c5c73781913ff9898348bafe385875905354ef8e022e6c65129148_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 6
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/canvasjs.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        window.onload = function () {
            var chart = new CanvasJS.Chart(\"chartContainer\",
            {
              title:{
                text: \"Events Count by name\",    
              },
              legend: {
                verticalAlign: \"bottom\",
                horizontalAlign: \"center\"
              },
              theme: \"theme2\",
              data: [
              {        
                type: \"column\",  
                showInLegend: true, 
                legendMarkerColor: \"grey\",
                dataPoints: [ 
                ";
        // line 26
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["events"]) ? $context["events"] : $this->getContext($context, "events")));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            echo "    
                    {y: ";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], 1, array()), "html", null, true);
            echo ", label: \"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "eventName", array()), "html", null, true);
            echo "\" },
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "                ]
              },   
              ]
            });
            chart.render();
        }
    </script>    
";
        
        $__internal_30fa2149d7c5c73781913ff9898348bafe385875905354ef8e022e6c65129148->leave($__internal_30fa2149d7c5c73781913ff9898348bafe385875905354ef8e022e6c65129148_prof);

    }

    // line 38
    public function block_container($context, array $blocks = array())
    {
        $__internal_233d302d9263b50ef8529bb49a475fab3300744b85b5e80f27e6580d7650f370 = $this->env->getExtension("native_profiler");
        $__internal_233d302d9263b50ef8529bb49a475fab3300744b85b5e80f27e6580d7650f370->enter($__internal_233d302d9263b50ef8529bb49a475fab3300744b85b5e80f27e6580d7650f370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 39
        echo "    <h2>Analytic Service :- Events Grouped By Name</h2>
    <div class=\"row\" style=\"padding-bottom: 20px;\">
        <div class=\"col-lg-12\">
            <div style=\"padding-bottom: 50px;\">
                <a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("event_group_by_name");
        echo "\" class=\"btn btn-default pull-right\" style=\"margin-left: 10px;\">Group By Name</a>
                <a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("event_group_by_date");
        echo "\" class=\"btn btn-primary pull-right\">Group By Date</a>
            </div>
            <div id=\"chartContainer\" style=\"height: 500px; width: 100%;\"> </div>

        </div>
    </div>      
";
        
        $__internal_233d302d9263b50ef8529bb49a475fab3300744b85b5e80f27e6580d7650f370->leave($__internal_233d302d9263b50ef8529bb49a475fab3300744b85b5e80f27e6580d7650f370_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Default:eventGroupByName.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 44,  123 => 43,  117 => 39,  111 => 38,  97 => 29,  87 => 27,  81 => 26,  59 => 7,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
