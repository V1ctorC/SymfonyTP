<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_00d473b1bc5ec8a1fce5cf7751332a771fa11b4b98ff1980c3827c2b5e3734a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_79f2ff2581f2caab60c82ca729ff857fd73f0df9d384a6257f2c572c13fe9a41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79f2ff2581f2caab60c82ca729ff857fd73f0df9d384a6257f2c572c13fe9a41->enter($__internal_79f2ff2581f2caab60c82ca729ff857fd73f0df9d384a6257f2c572c13fe9a41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_eb7b25d0522725fa96d712088b4c415cc08ba72e8448ee8e89fb43f1cd19c429 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb7b25d0522725fa96d712088b4c415cc08ba72e8448ee8e89fb43f1cd19c429->enter($__internal_eb7b25d0522725fa96d712088b4c415cc08ba72e8448ee8e89fb43f1cd19c429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79f2ff2581f2caab60c82ca729ff857fd73f0df9d384a6257f2c572c13fe9a41->leave($__internal_79f2ff2581f2caab60c82ca729ff857fd73f0df9d384a6257f2c572c13fe9a41_prof);

        
        $__internal_eb7b25d0522725fa96d712088b4c415cc08ba72e8448ee8e89fb43f1cd19c429->leave($__internal_eb7b25d0522725fa96d712088b4c415cc08ba72e8448ee8e89fb43f1cd19c429_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1d856d6ef74fc89e20dcaf2020c7b99fd70315ff1e50c2f959823c198b94c5d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d856d6ef74fc89e20dcaf2020c7b99fd70315ff1e50c2f959823c198b94c5d5->enter($__internal_1d856d6ef74fc89e20dcaf2020c7b99fd70315ff1e50c2f959823c198b94c5d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_add9354689301c92d5ed7431d4f94e56cf2d735034b6f5fd906250afa72790f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_add9354689301c92d5ed7431d4f94e56cf2d735034b6f5fd906250afa72790f9->enter($__internal_add9354689301c92d5ed7431d4f94e56cf2d735034b6f5fd906250afa72790f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_add9354689301c92d5ed7431d4f94e56cf2d735034b6f5fd906250afa72790f9->leave($__internal_add9354689301c92d5ed7431d4f94e56cf2d735034b6f5fd906250afa72790f9_prof);

        
        $__internal_1d856d6ef74fc89e20dcaf2020c7b99fd70315ff1e50c2f959823c198b94c5d5->leave($__internal_1d856d6ef74fc89e20dcaf2020c7b99fd70315ff1e50c2f959823c198b94c5d5_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_f82118d6c717eee20eb95ac1fc3340551e1f3e37ec7eeb97780c8232ee28b9b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f82118d6c717eee20eb95ac1fc3340551e1f3e37ec7eeb97780c8232ee28b9b2->enter($__internal_f82118d6c717eee20eb95ac1fc3340551e1f3e37ec7eeb97780c8232ee28b9b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_773f58a63828d519e9480ce52eb983a994c77c63b17c2fccb674e24a190532cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_773f58a63828d519e9480ce52eb983a994c77c63b17c2fccb674e24a190532cf->enter($__internal_773f58a63828d519e9480ce52eb983a994c77c63b17c2fccb674e24a190532cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_773f58a63828d519e9480ce52eb983a994c77c63b17c2fccb674e24a190532cf->leave($__internal_773f58a63828d519e9480ce52eb983a994c77c63b17c2fccb674e24a190532cf_prof);

        
        $__internal_f82118d6c717eee20eb95ac1fc3340551e1f3e37ec7eeb97780c8232ee28b9b2->leave($__internal_f82118d6c717eee20eb95ac1fc3340551e1f3e37ec7eeb97780c8232ee28b9b2_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/Users/VictorChevalier/Documents/PHP/SymfonyTP/SymfonyTP/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
