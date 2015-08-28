<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_095f2d77d1a7d43589fc6ac6f64aa729f80df2b2731a0e42bb838d3716d3b614 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_04ba1efd1b537f88936750be92e3c60850651a3c42f36e19e27c764a5342530f = $this->env->getExtension("native_profiler");
        $__internal_04ba1efd1b537f88936750be92e3c60850651a3c42f36e19e27c764a5342530f->enter($__internal_04ba1efd1b537f88936750be92e3c60850651a3c42f36e19e27c764a5342530f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04ba1efd1b537f88936750be92e3c60850651a3c42f36e19e27c764a5342530f->leave($__internal_04ba1efd1b537f88936750be92e3c60850651a3c42f36e19e27c764a5342530f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_dab4b24e9668f08c7ffb74e8f9e189cba0ea368ba24ffb6cd89f954c3c7ba845 = $this->env->getExtension("native_profiler");
        $__internal_dab4b24e9668f08c7ffb74e8f9e189cba0ea368ba24ffb6cd89f954c3c7ba845->enter($__internal_dab4b24e9668f08c7ffb74e8f9e189cba0ea368ba24ffb6cd89f954c3c7ba845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_dab4b24e9668f08c7ffb74e8f9e189cba0ea368ba24ffb6cd89f954c3c7ba845->leave($__internal_dab4b24e9668f08c7ffb74e8f9e189cba0ea368ba24ffb6cd89f954c3c7ba845_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0b09644833e61b840cdc98b219c5f37b69d1dba8885d2c25777d5544b97aa0d3 = $this->env->getExtension("native_profiler");
        $__internal_0b09644833e61b840cdc98b219c5f37b69d1dba8885d2c25777d5544b97aa0d3->enter($__internal_0b09644833e61b840cdc98b219c5f37b69d1dba8885d2c25777d5544b97aa0d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0b09644833e61b840cdc98b219c5f37b69d1dba8885d2c25777d5544b97aa0d3->leave($__internal_0b09644833e61b840cdc98b219c5f37b69d1dba8885d2c25777d5544b97aa0d3_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d89dbec819a5e038a9141efbbbe57eb2170e309ecdd7ec8f2d8816dd4690a059 = $this->env->getExtension("native_profiler");
        $__internal_d89dbec819a5e038a9141efbbbe57eb2170e309ecdd7ec8f2d8816dd4690a059->enter($__internal_d89dbec819a5e038a9141efbbbe57eb2170e309ecdd7ec8f2d8816dd4690a059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_d89dbec819a5e038a9141efbbbe57eb2170e309ecdd7ec8f2d8816dd4690a059->leave($__internal_d89dbec819a5e038a9141efbbbe57eb2170e309ecdd7ec8f2d8816dd4690a059_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
