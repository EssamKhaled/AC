<?php

/* AppBundle:Default:dashboard.html.twig */
class __TwigTemplate_1a0fce6ffb9ec99103ecc790ad8186b206889e0c1dd98ab357036671e410c096 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/index.html.twig", "AppBundle:Default:dashboard.html.twig", 1);
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
        $__internal_3f1d567e9827e95227c4be665a705787a27ff5b9c68767b979df3bd678f9fac1 = $this->env->getExtension("native_profiler");
        $__internal_3f1d567e9827e95227c4be665a705787a27ff5b9c68767b979df3bd678f9fac1->enter($__internal_3f1d567e9827e95227c4be665a705787a27ff5b9c68767b979df3bd678f9fac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default:dashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f1d567e9827e95227c4be665a705787a27ff5b9c68767b979df3bd678f9fac1->leave($__internal_3f1d567e9827e95227c4be665a705787a27ff5b9c68767b979df3bd678f9fac1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1d10805c9262544e35f6d2a79bd4c658f3b37214c2cf80ed548f0fb49fce1f23 = $this->env->getExtension("native_profiler");
        $__internal_1d10805c9262544e35f6d2a79bd4c658f3b37214c2cf80ed548f0fb49fce1f23->enter($__internal_1d10805c9262544e35f6d2a79bd4c658f3b37214c2cf80ed548f0fb49fce1f23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Dashboard";
        
        $__internal_1d10805c9262544e35f6d2a79bd4c658f3b37214c2cf80ed548f0fb49fce1f23->leave($__internal_1d10805c9262544e35f6d2a79bd4c658f3b37214c2cf80ed548f0fb49fce1f23_prof);

    }

    // line 5
    public function block_container($context, array $blocks = array())
    {
        $__internal_24ce720ab10ee4649fbf7f6400e67ac6caba8edef0f4499d5070c93f126316ce = $this->env->getExtension("native_profiler");
        $__internal_24ce720ab10ee4649fbf7f6400e67ac6caba8edef0f4499d5070c93f126316ce->enter($__internal_24ce720ab10ee4649fbf7f6400e67ac6caba8edef0f4499d5070c93f126316ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 6
        echo "    <h2>Analytic Service :- Dashboard</h2>
    <h4>Total Events (";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")), "getTotalItemCount", array()), "html", null, true);
        echo ")</h4>
    <div class=\"row\" style=\"padding-bottom: 20px;\">
        <div class=\"col-lg-12\">
            <div style=\"padding-bottom: 50px;\">
                <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("event_group_by_name");
        echo "\" class=\"btn btn-primary pull-right\" style=\"margin-left: 10px;\">Group By Name</a>
                <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("event_group_by_date");
        echo "\" class=\"btn btn-primary pull-right\">Group By Date</a>
            </div>
            <table class=\"table table-bordered table-striped\">
                <thead>
                    <tr>
                        <th>Event Name</th>
                        <th>Event Value</th>
                        <th>Referrer Url</th>                
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 24
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 25
            echo "                        <tr>
                            <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "eventName", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "eventValue", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "referrerUrl", array()), "html", null, true);
            echo "</td>                             
                            <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "createdDate", array()), "Y-m-d h:i"), "html", null, true);
            echo "</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "                </tbody>
            </table> 
            ";
        // line 34
        echo $this->env->getExtension('knp_pagination')->render((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        echo "
        </div>
    </div>      
";
        
        $__internal_24ce720ab10ee4649fbf7f6400e67ac6caba8edef0f4499d5070c93f126316ce->leave($__internal_24ce720ab10ee4649fbf7f6400e67ac6caba8edef0f4499d5070c93f126316ce_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Default:dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 34,  110 => 32,  101 => 29,  97 => 28,  93 => 27,  89 => 26,  86 => 25,  82 => 24,  67 => 12,  63 => 11,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
