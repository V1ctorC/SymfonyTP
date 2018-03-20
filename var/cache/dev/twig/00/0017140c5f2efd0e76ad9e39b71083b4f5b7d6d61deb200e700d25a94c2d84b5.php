<?php

/* OCPlatformBundle:Advert:add.html.twig */
class __TwigTemplate_5c39390e8b277e4c53ae6dd1a8cf293c6b4c673adb6b38ae430afbcc7d4b7794 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:add.html.twig", 4);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eacf5497463e475e56b755d3337cf05b466e13ab0472ea734d0b4d8a1f87982c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eacf5497463e475e56b755d3337cf05b466e13ab0472ea734d0b4d8a1f87982c->enter($__internal_eacf5497463e475e56b755d3337cf05b466e13ab0472ea734d0b4d8a1f87982c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:add.html.twig"));

        $__internal_dbcfcd6f93d6de6220b79ac662980bb64568a17a1f3ba3aa045c86533ac1cabc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbcfcd6f93d6de6220b79ac662980bb64568a17a1f3ba3aa045c86533ac1cabc->enter($__internal_dbcfcd6f93d6de6220b79ac662980bb64568a17a1f3ba3aa045c86533ac1cabc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eacf5497463e475e56b755d3337cf05b466e13ab0472ea734d0b4d8a1f87982c->leave($__internal_eacf5497463e475e56b755d3337cf05b466e13ab0472ea734d0b4d8a1f87982c_prof);

        
        $__internal_dbcfcd6f93d6de6220b79ac662980bb64568a17a1f3ba3aa045c86533ac1cabc->leave($__internal_dbcfcd6f93d6de6220b79ac662980bb64568a17a1f3ba3aa045c86533ac1cabc_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_5ba6052e3f27dfcfd95fb46397ec0334c540cac1cf2f684e3523a777ffc7d88f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ba6052e3f27dfcfd95fb46397ec0334c540cac1cf2f684e3523a777ffc7d88f->enter($__internal_5ba6052e3f27dfcfd95fb46397ec0334c540cac1cf2f684e3523a777ffc7d88f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2b1d8a97ef2e55b9ca67e2c7577f4983e771896933156cb97c7e4ccad60dea18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b1d8a97ef2e55b9ca67e2c7577f4983e771896933156cb97c7e4ccad60dea18->enter($__internal_2b1d8a97ef2e55b9ca67e2c7577f4983e771896933156cb97c7e4ccad60dea18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
    <h2>Ajouter une annonce</h2>

    ";
        // line 10
        echo twig_include($this->env, $context, "OCPlatformBundle:Advert:form.html.twig");
        echo "

    <p>
        Attention : cette annonce sera ajoutée directement
        sur la page d'accueil après validation du formulaire.
    </p>

";
        
        $__internal_2b1d8a97ef2e55b9ca67e2c7577f4983e771896933156cb97c7e4ccad60dea18->leave($__internal_2b1d8a97ef2e55b9ca67e2c7577f4983e771896933156cb97c7e4ccad60dea18_prof);

        
        $__internal_5ba6052e3f27dfcfd95fb46397ec0334c540cac1cf2f684e3523a777ffc7d88f->leave($__internal_5ba6052e3f27dfcfd95fb46397ec0334c540cac1cf2f684e3523a777ffc7d88f_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 10,  49 => 7,  40 => 6,  11 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{# src/OC/PlatformBundle/Resources/views/Advert/add.html.twig #}

{% extends \"OCPlatformBundle::layout.html.twig\" %}

{% block body %}

    <h2>Ajouter une annonce</h2>

    {{ include(\"OCPlatformBundle:Advert:form.html.twig\") }}

    <p>
        Attention : cette annonce sera ajoutée directement
        sur la page d'accueil après validation du formulaire.
    </p>

{% endblock %}", "OCPlatformBundle:Advert:add.html.twig", "/Users/VictorChevalier/Documents/PHP/SymfonyTP/SymfonyTP/src/OC/PlatformBundle/Resources/views/Advert/add.html.twig");
    }
}
