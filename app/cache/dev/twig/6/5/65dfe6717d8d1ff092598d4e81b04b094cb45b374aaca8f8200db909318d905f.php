<?php

/* base.html.twig */
class __TwigTemplate_65dfe6717d8d1ff092598d4e81b04b094cb45b374aaca8f8200db909318d905f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7a73a54a8c5d84691067686ab8283b30050fec103e2a46351dfd7fc231c44f95 = $this->env->getExtension("native_profiler");
        $__internal_7a73a54a8c5d84691067686ab8283b30050fec103e2a46351dfd7fc231c44f95->enter($__internal_7a73a54a8c5d84691067686ab8283b30050fec103e2a46351dfd7fc231c44f95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\">
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 13
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 14
        echo "    </body>
</html>
";
        
        $__internal_7a73a54a8c5d84691067686ab8283b30050fec103e2a46351dfd7fc231c44f95->leave($__internal_7a73a54a8c5d84691067686ab8283b30050fec103e2a46351dfd7fc231c44f95_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a05d163d79063c0f087ff86ae847bec963a4ac868cb611ca65dd34d9865be523 = $this->env->getExtension("native_profiler");
        $__internal_a05d163d79063c0f087ff86ae847bec963a4ac868cb611ca65dd34d9865be523->enter($__internal_a05d163d79063c0f087ff86ae847bec963a4ac868cb611ca65dd34d9865be523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_a05d163d79063c0f087ff86ae847bec963a4ac868cb611ca65dd34d9865be523->leave($__internal_a05d163d79063c0f087ff86ae847bec963a4ac868cb611ca65dd34d9865be523_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_71f081d5eedb10c4818d9a73ea27a0a0c189b25fc682273edb2f43e56bf8b386 = $this->env->getExtension("native_profiler");
        $__internal_71f081d5eedb10c4818d9a73ea27a0a0c189b25fc682273edb2f43e56bf8b386->enter($__internal_71f081d5eedb10c4818d9a73ea27a0a0c189b25fc682273edb2f43e56bf8b386_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_71f081d5eedb10c4818d9a73ea27a0a0c189b25fc682273edb2f43e56bf8b386->leave($__internal_71f081d5eedb10c4818d9a73ea27a0a0c189b25fc682273edb2f43e56bf8b386_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_d84542e09e65547f45cabc4c58cea448cf7cfae4d3715b9c2fc26bac7453058e = $this->env->getExtension("native_profiler");
        $__internal_d84542e09e65547f45cabc4c58cea448cf7cfae4d3715b9c2fc26bac7453058e->enter($__internal_d84542e09e65547f45cabc4c58cea448cf7cfae4d3715b9c2fc26bac7453058e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d84542e09e65547f45cabc4c58cea448cf7cfae4d3715b9c2fc26bac7453058e->leave($__internal_d84542e09e65547f45cabc4c58cea448cf7cfae4d3715b9c2fc26bac7453058e_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_be6fcedc17fa493c3ccc00944d8d7e5b3a5d479e0146d4ce5aef2bea3c760dbc = $this->env->getExtension("native_profiler");
        $__internal_be6fcedc17fa493c3ccc00944d8d7e5b3a5d479e0146d4ce5aef2bea3c760dbc->enter($__internal_be6fcedc17fa493c3ccc00944d8d7e5b3a5d479e0146d4ce5aef2bea3c760dbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_be6fcedc17fa493c3ccc00944d8d7e5b3a5d479e0146d4ce5aef2bea3c760dbc->leave($__internal_be6fcedc17fa493c3ccc00944d8d7e5b3a5d479e0146d4ce5aef2bea3c760dbc_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 13,  84 => 12,  73 => 8,  61 => 7,  52 => 14,  49 => 13,  47 => 12,  40 => 9,  38 => 8,  34 => 7,  26 => 1,);
    }
}
