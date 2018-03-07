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
        $__internal_9dc655f1a8b7f36339fd7afe1ecaf4334292f02d2d5f736102d30e953ae58e65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9dc655f1a8b7f36339fd7afe1ecaf4334292f02d2d5f736102d30e953ae58e65->enter($__internal_9dc655f1a8b7f36339fd7afe1ecaf4334292f02d2d5f736102d30e953ae58e65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle::layout.html.twig"));

        $__internal_8b28e1b1a40fbecfaeab998afd96fde07b1d716dd009373bd77b0758463cd51e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b28e1b1a40fbecfaeab998afd96fde07b1d716dd009373bd77b0758463cd51e->enter($__internal_8b28e1b1a40fbecfaeab998afd96fde07b1d716dd009373bd77b0758463cd51e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9dc655f1a8b7f36339fd7afe1ecaf4334292f02d2d5f736102d30e953ae58e65->leave($__internal_9dc655f1a8b7f36339fd7afe1ecaf4334292f02d2d5f736102d30e953ae58e65_prof);

        
        $__internal_8b28e1b1a40fbecfaeab998afd96fde07b1d716dd009373bd77b0758463cd51e->leave($__internal_8b28e1b1a40fbecfaeab998afd96fde07b1d716dd009373bd77b0758463cd51e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_095155bc7e81326d2ff151cafe5341a0edb9562c8ffaaf50fb266a10cbfc3d5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_095155bc7e81326d2ff151cafe5341a0edb9562c8ffaaf50fb266a10cbfc3d5c->enter($__internal_095155bc7e81326d2ff151cafe5341a0edb9562c8ffaaf50fb266a10cbfc3d5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3139af365d7704d22394a6f99dd1fa0b411dc5b50dc9a4de35a24eb8ca1d266a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3139af365d7704d22394a6f99dd1fa0b411dc5b50dc9a4de35a24eb8ca1d266a->enter($__internal_3139af365d7704d22394a6f99dd1fa0b411dc5b50dc9a4de35a24eb8ca1d266a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_3139af365d7704d22394a6f99dd1fa0b411dc5b50dc9a4de35a24eb8ca1d266a->leave($__internal_3139af365d7704d22394a6f99dd1fa0b411dc5b50dc9a4de35a24eb8ca1d266a_prof);

        
        $__internal_095155bc7e81326d2ff151cafe5341a0edb9562c8ffaaf50fb266a10cbfc3d5c->leave($__internal_095155bc7e81326d2ff151cafe5341a0edb9562c8ffaaf50fb266a10cbfc3d5c_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_d0c6028f9a455e91a650de5c89f4cf365f6ef577139b0b265847abea3d1fed08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0c6028f9a455e91a650de5c89f4cf365f6ef577139b0b265847abea3d1fed08->enter($__internal_d0c6028f9a455e91a650de5c89f4cf365f6ef577139b0b265847abea3d1fed08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_402ea61ab5e3c6ab5b03d162b50db7dac0cffbd7f9a11993409176d0498c2509 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_402ea61ab5e3c6ab5b03d162b50db7dac0cffbd7f9a11993409176d0498c2509->enter($__internal_402ea61ab5e3c6ab5b03d162b50db7dac0cffbd7f9a11993409176d0498c2509_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_402ea61ab5e3c6ab5b03d162b50db7dac0cffbd7f9a11993409176d0498c2509->leave($__internal_402ea61ab5e3c6ab5b03d162b50db7dac0cffbd7f9a11993409176d0498c2509_prof);

        
        $__internal_d0c6028f9a455e91a650de5c89f4cf365f6ef577139b0b265847abea3d1fed08->leave($__internal_d0c6028f9a455e91a650de5c89f4cf365f6ef577139b0b265847abea3d1fed08_prof);

    }

    // line 17
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_fd959759bd5d98d89ae6950f5bb9192dadb04f63ef9dfdff8f87daec137e9edd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd959759bd5d98d89ae6950f5bb9192dadb04f63ef9dfdff8f87daec137e9edd->enter($__internal_fd959759bd5d98d89ae6950f5bb9192dadb04f63ef9dfdff8f87daec137e9edd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_42771dc155653d32d47e69fb07f602e0f0af952018a4521ef473abd4d9bf7c96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42771dc155653d32d47e69fb07f602e0f0af952018a4521ef473abd4d9bf7c96->enter($__internal_42771dc155653d32d47e69fb07f602e0f0af952018a4521ef473abd4d9bf7c96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 18
        echo "    ";
        
        $__internal_42771dc155653d32d47e69fb07f602e0f0af952018a4521ef473abd4d9bf7c96->leave($__internal_42771dc155653d32d47e69fb07f602e0f0af952018a4521ef473abd4d9bf7c96_prof);

        
        $__internal_fd959759bd5d98d89ae6950f5bb9192dadb04f63ef9dfdff8f87daec137e9edd->leave($__internal_fd959759bd5d98d89ae6950f5bb9192dadb04f63ef9dfdff8f87daec137e9edd_prof);

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
