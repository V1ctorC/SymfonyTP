<?php

/* OCPlatformBundle:Advert:add.html.twig */
class __TwigTemplate_e472d7f441a21906c530f6f12e601c75a89787771bf3a2be9a3ed28cd2333fc7 extends Twig_Template
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
        $__internal_eecd8cadb96d7ab1ef1432c06651e0167268916165bf06814bf4b77ab46facdd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eecd8cadb96d7ab1ef1432c06651e0167268916165bf06814bf4b77ab46facdd->enter($__internal_eecd8cadb96d7ab1ef1432c06651e0167268916165bf06814bf4b77ab46facdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:add.html.twig"));

        $__internal_58598835bf999886105caf8fff8c60388fb8ba2c56d06a7ecd4b49ff9d752860 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58598835bf999886105caf8fff8c60388fb8ba2c56d06a7ecd4b49ff9d752860->enter($__internal_58598835bf999886105caf8fff8c60388fb8ba2c56d06a7ecd4b49ff9d752860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eecd8cadb96d7ab1ef1432c06651e0167268916165bf06814bf4b77ab46facdd->leave($__internal_eecd8cadb96d7ab1ef1432c06651e0167268916165bf06814bf4b77ab46facdd_prof);

        
        $__internal_58598835bf999886105caf8fff8c60388fb8ba2c56d06a7ecd4b49ff9d752860->leave($__internal_58598835bf999886105caf8fff8c60388fb8ba2c56d06a7ecd4b49ff9d752860_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_5ef91c376b3e566b375794dac5a7aec0406efc3b6cb7771d2407a8e8be523e66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ef91c376b3e566b375794dac5a7aec0406efc3b6cb7771d2407a8e8be523e66->enter($__internal_5ef91c376b3e566b375794dac5a7aec0406efc3b6cb7771d2407a8e8be523e66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_92a43c63cb5464f429522d26c474b9f4b8d665f7d639e042bc35e23cc6dd7d2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92a43c63cb5464f429522d26c474b9f4b8d665f7d639e042bc35e23cc6dd7d2b->enter($__internal_92a43c63cb5464f429522d26c474b9f4b8d665f7d639e042bc35e23cc6dd7d2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_92a43c63cb5464f429522d26c474b9f4b8d665f7d639e042bc35e23cc6dd7d2b->leave($__internal_92a43c63cb5464f429522d26c474b9f4b8d665f7d639e042bc35e23cc6dd7d2b_prof);

        
        $__internal_5ef91c376b3e566b375794dac5a7aec0406efc3b6cb7771d2407a8e8be523e66->leave($__internal_5ef91c376b3e566b375794dac5a7aec0406efc3b6cb7771d2407a8e8be523e66_prof);

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
