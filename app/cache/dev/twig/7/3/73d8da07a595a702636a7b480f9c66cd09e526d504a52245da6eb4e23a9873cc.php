<?php

/* ::layout/index.html.twig */
class __TwigTemplate_73d8da07a595a702636a7b480f9c66cd09e526d504a52245da6eb4e23a9873cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "::layout/index.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8603b0a710ea85a64473630b37eddf7a9a1ef4e3d6d4f59851f39fa554b1c3c4 = $this->env->getExtension("native_profiler");
        $__internal_8603b0a710ea85a64473630b37eddf7a9a1ef4e3d6d4f59851f39fa554b1c3c4->enter($__internal_8603b0a710ea85a64473630b37eddf7a9a1ef4e3d6d4f59851f39fa554b1c3c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8603b0a710ea85a64473630b37eddf7a9a1ef4e3d6d4f59851f39fa554b1c3c4->leave($__internal_8603b0a710ea85a64473630b37eddf7a9a1ef4e3d6d4f59851f39fa554b1c3c4_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d10eb46a991d8f4902a3673fa1eac62382d9e1e7da8dbd1afb115d8ad6d5a1aa = $this->env->getExtension("native_profiler");
        $__internal_d10eb46a991d8f4902a3673fa1eac62382d9e1e7da8dbd1afb115d8ad6d5a1aa->enter($__internal_d10eb46a991d8f4902a3673fa1eac62382d9e1e7da8dbd1afb115d8ad6d5a1aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo "    
    <link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\">
";
        
        $__internal_d10eb46a991d8f4902a3673fa1eac62382d9e1e7da8dbd1afb115d8ad6d5a1aa->leave($__internal_d10eb46a991d8f4902a3673fa1eac62382d9e1e7da8dbd1afb115d8ad6d5a1aa_prof);

    }

    // line 7
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a76ad59107b200c0f8db4a8f99b11bb7dbc785bf55deab68d94eb957b568e731 = $this->env->getExtension("native_profiler");
        $__internal_a76ad59107b200c0f8db4a8f99b11bb7dbc785bf55deab68d94eb957b568e731->enter($__internal_a76ad59107b200c0f8db4a8f99b11bb7dbc785bf55deab68d94eb957b568e731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 8
        echo "    <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js\"></script>    
    <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>    
";
        
        $__internal_a76ad59107b200c0f8db4a8f99b11bb7dbc785bf55deab68d94eb957b568e731->leave($__internal_a76ad59107b200c0f8db4a8f99b11bb7dbc785bf55deab68d94eb957b568e731_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_63fe3433843ffed9807c7f521434fdef3dd32d906802356bb1530ac22ef97614 = $this->env->getExtension("native_profiler");
        $__internal_63fe3433843ffed9807c7f521434fdef3dd32d906802356bb1530ac22ef97614->enter($__internal_63fe3433843ffed9807c7f521434fdef3dd32d906802356bb1530ac22ef97614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"pull-right\" style=\"padding: 20px 0 0 0;margin-left: 10px;\">
                <a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("dashboard");
        echo "\" class=\"btn btn-primary\">Dashboard</a>
            </div>            
            <div class=\"pull-right\" style=\"padding: 20px 0 0 0;\">
                <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("endpoint_input");
        echo "\" class=\"btn btn-primary\">Endpoint Input</a>
            </div>            
        </div>            
    </div>
    <div class=\"container\" style=\"background-color: #FFF;margin-top: 20px;\">
        ";
        // line 24
        $this->displayBlock('container', $context, $blocks);
        // line 25
        echo "    </div>
";
        
        $__internal_63fe3433843ffed9807c7f521434fdef3dd32d906802356bb1530ac22ef97614->leave($__internal_63fe3433843ffed9807c7f521434fdef3dd32d906802356bb1530ac22ef97614_prof);

    }

    // line 24
    public function block_container($context, array $blocks = array())
    {
        $__internal_b61f25698ceaf678c7c8db0dbffec927cdb3f887f920e38ba7eb5961bbefe5ef = $this->env->getExtension("native_profiler");
        $__internal_b61f25698ceaf678c7c8db0dbffec927cdb3f887f920e38ba7eb5961bbefe5ef->enter($__internal_b61f25698ceaf678c7c8db0dbffec927cdb3f887f920e38ba7eb5961bbefe5ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        
        $__internal_b61f25698ceaf678c7c8db0dbffec927cdb3f887f920e38ba7eb5961bbefe5ef->leave($__internal_b61f25698ceaf678c7c8db0dbffec927cdb3f887f920e38ba7eb5961bbefe5ef_prof);

    }

    public function getTemplateName()
    {
        return "::layout/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 24,  99 => 25,  97 => 24,  89 => 19,  83 => 16,  78 => 13,  72 => 12,  63 => 9,  60 => 8,  54 => 7,  45 => 4,  37 => 3,  11 => 1,);
    }
}
