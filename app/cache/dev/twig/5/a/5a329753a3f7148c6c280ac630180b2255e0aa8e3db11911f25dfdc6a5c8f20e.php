<?php

/* AppBundle:Default:eventGroupByDate.html.twig */
class __TwigTemplate_5a329753a3f7148c6c280ac630180b2255e0aa8e3db11911f25dfdc6a5c8f20e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/index.html.twig", "AppBundle:Default:eventGroupByDate.html.twig", 1);
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
        $__internal_70a359413b60ca156653b59c08d072ec93eae5c36279d9bfcd1323b9d3c21805 = $this->env->getExtension("native_profiler");
        $__internal_70a359413b60ca156653b59c08d072ec93eae5c36279d9bfcd1323b9d3c21805->enter($__internal_70a359413b60ca156653b59c08d072ec93eae5c36279d9bfcd1323b9d3c21805_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default:eventGroupByDate.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_70a359413b60ca156653b59c08d072ec93eae5c36279d9bfcd1323b9d3c21805->leave($__internal_70a359413b60ca156653b59c08d072ec93eae5c36279d9bfcd1323b9d3c21805_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9b1be4a4dad14fe2f45ec0cea24d480ae0c41c5dce2bde4f7cd2516bcbff29dd = $this->env->getExtension("native_profiler");
        $__internal_9b1be4a4dad14fe2f45ec0cea24d480ae0c41c5dce2bde4f7cd2516bcbff29dd->enter($__internal_9b1be4a4dad14fe2f45ec0cea24d480ae0c41c5dce2bde4f7cd2516bcbff29dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Dashboard";
        
        $__internal_9b1be4a4dad14fe2f45ec0cea24d480ae0c41c5dce2bde4f7cd2516bcbff29dd->leave($__internal_9b1be4a4dad14fe2f45ec0cea24d480ae0c41c5dce2bde4f7cd2516bcbff29dd_prof);

    }

    // line 5
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_58fe4555ca09718d2d3079bce63245caeae455570ff589a476a8ecbbf44f835e = $this->env->getExtension("native_profiler");
        $__internal_58fe4555ca09718d2d3079bce63245caeae455570ff589a476a8ecbbf44f835e->enter($__internal_58fe4555ca09718d2d3079bce63245caeae455570ff589a476a8ecbbf44f835e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
                text: \"Events Count by Date\",    
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
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "count", array()), "html", null, true);
            echo ", label: \"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "date", array()), "html", null, true);
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
        
        $__internal_58fe4555ca09718d2d3079bce63245caeae455570ff589a476a8ecbbf44f835e->leave($__internal_58fe4555ca09718d2d3079bce63245caeae455570ff589a476a8ecbbf44f835e_prof);

    }

    // line 38
    public function block_container($context, array $blocks = array())
    {
        $__internal_fca4fbb34328520d5c8e7c9acd8b16b6e7daf89c666796bde26f9ca29815b3c9 = $this->env->getExtension("native_profiler");
        $__internal_fca4fbb34328520d5c8e7c9acd8b16b6e7daf89c666796bde26f9ca29815b3c9->enter($__internal_fca4fbb34328520d5c8e7c9acd8b16b6e7daf89c666796bde26f9ca29815b3c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 39
        echo "    <h2>Analytic Service :- Events Grouped By Date</h2>
    <div class=\"row\" style=\"padding-bottom: 20px;\">
        <div class=\"col-lg-12\">
            <div style=\"padding-bottom: 50px;\">
                <a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("event_group_by_name");
        echo "\" class=\"btn btn-primary pull-right\" style=\"margin-left: 10px;\">Group By Name</a>
                <a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("event_group_by_date");
        echo "\" class=\"btn btn-default pull-right\">Group By Date</a>
            </div>
            <div id=\"chartContainer\" style=\"height: 500px; width: 100%;\"> </div>

        </div>
    </div>      
";
        
        $__internal_fca4fbb34328520d5c8e7c9acd8b16b6e7daf89c666796bde26f9ca29815b3c9->leave($__internal_fca4fbb34328520d5c8e7c9acd8b16b6e7daf89c666796bde26f9ca29815b3c9_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Default:eventGroupByDate.html.twig";
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
