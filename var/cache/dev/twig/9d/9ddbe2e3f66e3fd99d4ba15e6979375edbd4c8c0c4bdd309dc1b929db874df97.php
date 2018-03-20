<?php

/* OCPlatformBundle::layout.html.twig */
class __TwigTemplate_cd7fa05890afbe2eb38feb956b5c82646a088243f8bdf71d5d9c69c1c34a31d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout.html.twig", "OCPlatformBundle::layout.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3f37123a8ed798dfe604827519889299f867d555a8b586d2dd8b424f11e17b8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f37123a8ed798dfe604827519889299f867d555a8b586d2dd8b424f11e17b8b->enter($__internal_3f37123a8ed798dfe604827519889299f867d555a8b586d2dd8b424f11e17b8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle::layout.html.twig"));

        $__internal_5d151ad0fed3c879e2154c5ca57b50255527af108adb229f3e02498a7eeba086 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d151ad0fed3c879e2154c5ca57b50255527af108adb229f3e02498a7eeba086->enter($__internal_5d151ad0fed3c879e2154c5ca57b50255527af108adb229f3e02498a7eeba086_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f37123a8ed798dfe604827519889299f867d555a8b586d2dd8b424f11e17b8b->leave($__internal_3f37123a8ed798dfe604827519889299f867d555a8b586d2dd8b424f11e17b8b_prof);

        
        $__internal_5d151ad0fed3c879e2154c5ca57b50255527af108adb229f3e02498a7eeba086->leave($__internal_5d151ad0fed3c879e2154c5ca57b50255527af108adb229f3e02498a7eeba086_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9cf0dd4e65602bcf361f969b745ae531eeac835de3ea9b50a06a8852187d231d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cf0dd4e65602bcf361f969b745ae531eeac835de3ea9b50a06a8852187d231d->enter($__internal_9cf0dd4e65602bcf361f969b745ae531eeac835de3ea9b50a06a8852187d231d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ab1b7882e86d5c864dba81728589aec273c5fb61c25e5ae7f54319b682c86e48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab1b7882e86d5c864dba81728589aec273c5fb61c25e5ae7f54319b682c86e48->enter($__internal_ab1b7882e86d5c864dba81728589aec273c5fb61c25e5ae7f54319b682c86e48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_ab1b7882e86d5c864dba81728589aec273c5fb61c25e5ae7f54319b682c86e48->leave($__internal_ab1b7882e86d5c864dba81728589aec273c5fb61c25e5ae7f54319b682c86e48_prof);

        
        $__internal_9cf0dd4e65602bcf361f969b745ae531eeac835de3ea9b50a06a8852187d231d->leave($__internal_9cf0dd4e65602bcf361f969b745ae531eeac835de3ea9b50a06a8852187d231d_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_87e88806ec1f55b276abaf1e2c8e391796e5e1858233575fabbb7739414a0b8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87e88806ec1f55b276abaf1e2c8e391796e5e1858233575fabbb7739414a0b8e->enter($__internal_87e88806ec1f55b276abaf1e2c8e391796e5e1858233575fabbb7739414a0b8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3701edf89613a9744fdc08b0c3a48cc6556793118f5ab2ba0118c343916fbcb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3701edf89613a9744fdc08b0c3a48cc6556793118f5ab2ba0118c343916fbcb6->enter($__internal_3701edf89613a9744fdc08b0c3a48cc6556793118f5ab2ba0118c343916fbcb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
    ";
        // line 12
        echo "    <h1>Annonces</h1>

    <hr>

    ";
        // line 17
        echo "    ";
        $this->displayBlock('ocplatform_body', $context, $blocks);
        // line 19
        echo "
";
        
        $__internal_3701edf89613a9744fdc08b0c3a48cc6556793118f5ab2ba0118c343916fbcb6->leave($__internal_3701edf89613a9744fdc08b0c3a48cc6556793118f5ab2ba0118c343916fbcb6_prof);

        
        $__internal_87e88806ec1f55b276abaf1e2c8e391796e5e1858233575fabbb7739414a0b8e->leave($__internal_87e88806ec1f55b276abaf1e2c8e391796e5e1858233575fabbb7739414a0b8e_prof);

    }

    // line 17
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_63ad2ab49ddbf8221d8ce09859037e79db6563e05b831d91836e113a97771b98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63ad2ab49ddbf8221d8ce09859037e79db6563e05b831d91836e113a97771b98->enter($__internal_63ad2ab49ddbf8221d8ce09859037e79db6563e05b831d91836e113a97771b98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_61eb40d63e9b61fb6cab719a9136af4366b75638a93c8286236d0ba7c0e86841 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61eb40d63e9b61fb6cab719a9136af4366b75638a93c8286236d0ba7c0e86841->enter($__internal_61eb40d63e9b61fb6cab719a9136af4366b75638a93c8286236d0ba7c0e86841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 18
        echo "    ";
        
        $__internal_61eb40d63e9b61fb6cab719a9136af4366b75638a93c8286236d0ba7c0e86841->leave($__internal_61eb40d63e9b61fb6cab719a9136af4366b75638a93c8286236d0ba7c0e86841_prof);

        
        $__internal_63ad2ab49ddbf8221d8ce09859037e79db6563e05b831d91836e113a97771b98->leave($__internal_63ad2ab49ddbf8221d8ce09859037e79db6563e05b831d91836e113a97771b98_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 18,  96 => 17,  85 => 19,  82 => 17,  76 => 12,  73 => 10,  64 => 9,  51 => 6,  42 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/views/layout.html.twig #}

{% extends \"::layout.html.twig\" %}

{% block title %}
    Annonces - {{ parent() }}
{% endblock %}

{% block body %}

    {# On définit un sous-titre commun à toutes les pages du bundle, par exemple #}
    <h1>Annonces</h1>

    <hr>

    {# On définit un nouveau bloc, que les vues du bundle pourront remplir #}
    {% block ocplatform_body %}
    {% endblock %}

{% endblock %}", "OCPlatformBundle::layout.html.twig", "/Users/VictorChevalier/Documents/PHP/SymfonyTP/SymfonyTP/src/OC/PlatformBundle/Resources/views/layout.html.twig");
    }
}
