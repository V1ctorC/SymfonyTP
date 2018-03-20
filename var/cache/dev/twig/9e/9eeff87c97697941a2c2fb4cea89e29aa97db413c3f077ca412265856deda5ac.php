<?php

/* OCPlatformBundle::layout.html.twig */
class __TwigTemplate_2ba377ad5f8a4afe7370945f44717e51cef5ee081161e13fe3387e9a07efdf8b extends Twig_Template
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
        $__internal_825b4b88516d98e5430196cd35b9d490d391df21f3ea2a1874e278921a956584 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_825b4b88516d98e5430196cd35b9d490d391df21f3ea2a1874e278921a956584->enter($__internal_825b4b88516d98e5430196cd35b9d490d391df21f3ea2a1874e278921a956584_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle::layout.html.twig"));

        $__internal_e15e05f5d9d1a350a2804708d8be9b1ada9f2d71295265101a5155eff616fe96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e15e05f5d9d1a350a2804708d8be9b1ada9f2d71295265101a5155eff616fe96->enter($__internal_e15e05f5d9d1a350a2804708d8be9b1ada9f2d71295265101a5155eff616fe96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_825b4b88516d98e5430196cd35b9d490d391df21f3ea2a1874e278921a956584->leave($__internal_825b4b88516d98e5430196cd35b9d490d391df21f3ea2a1874e278921a956584_prof);

        
        $__internal_e15e05f5d9d1a350a2804708d8be9b1ada9f2d71295265101a5155eff616fe96->leave($__internal_e15e05f5d9d1a350a2804708d8be9b1ada9f2d71295265101a5155eff616fe96_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_79625fef2c3904f870a5c7edc551a4cdcce7487fdf9f4fbac0e3a7208898a883 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79625fef2c3904f870a5c7edc551a4cdcce7487fdf9f4fbac0e3a7208898a883->enter($__internal_79625fef2c3904f870a5c7edc551a4cdcce7487fdf9f4fbac0e3a7208898a883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f54250e5303c6d89b4e3d9505c2804555eb4e8483767a0d65ac8b6d6f3762361 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f54250e5303c6d89b4e3d9505c2804555eb4e8483767a0d65ac8b6d6f3762361->enter($__internal_f54250e5303c6d89b4e3d9505c2804555eb4e8483767a0d65ac8b6d6f3762361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_f54250e5303c6d89b4e3d9505c2804555eb4e8483767a0d65ac8b6d6f3762361->leave($__internal_f54250e5303c6d89b4e3d9505c2804555eb4e8483767a0d65ac8b6d6f3762361_prof);

        
        $__internal_79625fef2c3904f870a5c7edc551a4cdcce7487fdf9f4fbac0e3a7208898a883->leave($__internal_79625fef2c3904f870a5c7edc551a4cdcce7487fdf9f4fbac0e3a7208898a883_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_84221bb9eecd5461850293507b1a1fb272b219eb032951fc949cce055b44a41e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84221bb9eecd5461850293507b1a1fb272b219eb032951fc949cce055b44a41e->enter($__internal_84221bb9eecd5461850293507b1a1fb272b219eb032951fc949cce055b44a41e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c2a00daff6d2838c21bd0093cf7192a3add243360b90e6f97ea6789e438c4e3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2a00daff6d2838c21bd0093cf7192a3add243360b90e6f97ea6789e438c4e3f->enter($__internal_c2a00daff6d2838c21bd0093cf7192a3add243360b90e6f97ea6789e438c4e3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c2a00daff6d2838c21bd0093cf7192a3add243360b90e6f97ea6789e438c4e3f->leave($__internal_c2a00daff6d2838c21bd0093cf7192a3add243360b90e6f97ea6789e438c4e3f_prof);

        
        $__internal_84221bb9eecd5461850293507b1a1fb272b219eb032951fc949cce055b44a41e->leave($__internal_84221bb9eecd5461850293507b1a1fb272b219eb032951fc949cce055b44a41e_prof);

    }

    // line 17
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_8d6abd3bda32474bd25661face5426bd4dafe1aed473b6679a7e277a6d380bf8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d6abd3bda32474bd25661face5426bd4dafe1aed473b6679a7e277a6d380bf8->enter($__internal_8d6abd3bda32474bd25661face5426bd4dafe1aed473b6679a7e277a6d380bf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_924ecc8abae687d400b0cdf8f967fc20d72de4af74fcb77a7153d99fcbae110b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_924ecc8abae687d400b0cdf8f967fc20d72de4af74fcb77a7153d99fcbae110b->enter($__internal_924ecc8abae687d400b0cdf8f967fc20d72de4af74fcb77a7153d99fcbae110b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 18
        echo "    ";
        
        $__internal_924ecc8abae687d400b0cdf8f967fc20d72de4af74fcb77a7153d99fcbae110b->leave($__internal_924ecc8abae687d400b0cdf8f967fc20d72de4af74fcb77a7153d99fcbae110b_prof);

        
        $__internal_8d6abd3bda32474bd25661face5426bd4dafe1aed473b6679a7e277a6d380bf8->leave($__internal_8d6abd3bda32474bd25661face5426bd4dafe1aed473b6679a7e277a6d380bf8_prof);

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
