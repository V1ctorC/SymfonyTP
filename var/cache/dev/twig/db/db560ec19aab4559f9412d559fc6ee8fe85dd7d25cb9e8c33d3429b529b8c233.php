<?php

/* OCPlatformBundle:Advert:edit.html.twig */
class __TwigTemplate_f4a908ddc0eaccabaecb26a1651e6ae8189a0276beed72e9a648c62c7d09d2bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:edit.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2f4438f3847f6ab2fa1a83a750d52f20de4675bde8c67fd073c94aa5224d5fa7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f4438f3847f6ab2fa1a83a750d52f20de4675bde8c67fd073c94aa5224d5fa7->enter($__internal_2f4438f3847f6ab2fa1a83a750d52f20de4675bde8c67fd073c94aa5224d5fa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:edit.html.twig"));

        $__internal_07b8a36454bde46a55cc7377d310083ff9c8ff813cd08294c49fe857cec94f0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07b8a36454bde46a55cc7377d310083ff9c8ff813cd08294c49fe857cec94f0c->enter($__internal_07b8a36454bde46a55cc7377d310083ff9c8ff813cd08294c49fe857cec94f0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f4438f3847f6ab2fa1a83a750d52f20de4675bde8c67fd073c94aa5224d5fa7->leave($__internal_2f4438f3847f6ab2fa1a83a750d52f20de4675bde8c67fd073c94aa5224d5fa7_prof);

        
        $__internal_07b8a36454bde46a55cc7377d310083ff9c8ff813cd08294c49fe857cec94f0c->leave($__internal_07b8a36454bde46a55cc7377d310083ff9c8ff813cd08294c49fe857cec94f0c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c358a85d774fea2b9bbca714ba082d4f90e265cae192dcae91e44af8f0ee94a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c358a85d774fea2b9bbca714ba082d4f90e265cae192dcae91e44af8f0ee94a2->enter($__internal_c358a85d774fea2b9bbca714ba082d4f90e265cae192dcae91e44af8f0ee94a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6a76fe268cc14eae5634c8437bd7af2f28cffdb63b91877fab84172d0c113e44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a76fe268cc14eae5634c8437bd7af2f28cffdb63b91877fab84172d0c113e44->enter($__internal_6a76fe268cc14eae5634c8437bd7af2f28cffdb63b91877fab84172d0c113e44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    Modifier une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_6a76fe268cc14eae5634c8437bd7af2f28cffdb63b91877fab84172d0c113e44->leave($__internal_6a76fe268cc14eae5634c8437bd7af2f28cffdb63b91877fab84172d0c113e44_prof);

        
        $__internal_c358a85d774fea2b9bbca714ba082d4f90e265cae192dcae91e44af8f0ee94a2->leave($__internal_c358a85d774fea2b9bbca714ba082d4f90e265cae192dcae91e44af8f0ee94a2_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_5b2960849f436c77f2efb6369ab2cd423a17bd0753f5a30985b0e77f22b040f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b2960849f436c77f2efb6369ab2cd423a17bd0753f5a30985b0e77f22b040f7->enter($__internal_5b2960849f436c77f2efb6369ab2cd423a17bd0753f5a30985b0e77f22b040f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_33870ba32a76be5e9339ee9b25b498f88cad9cf19b156464aeeff3b99daebaa8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33870ba32a76be5e9339ee9b25b498f88cad9cf19b156464aeeff3b99daebaa8->enter($__internal_33870ba32a76be5e9339ee9b25b498f88cad9cf19b156464aeeff3b99daebaa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 10
        echo "
    <h2>Modifier une annonce</h2>

    ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "

    <p>
        <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_view", array("id" => $this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour à l'annonce
        </a>
    </p>

";
        
        $__internal_33870ba32a76be5e9339ee9b25b498f88cad9cf19b156464aeeff3b99daebaa8->leave($__internal_33870ba32a76be5e9339ee9b25b498f88cad9cf19b156464aeeff3b99daebaa8_prof);

        
        $__internal_5b2960849f436c77f2efb6369ab2cd423a17bd0753f5a30985b0e77f22b040f7->leave($__internal_5b2960849f436c77f2efb6369ab2cd423a17bd0753f5a30985b0e77f22b040f7_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 16,  77 => 13,  72 => 10,  63 => 9,  50 => 6,  41 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/views/Advert/edit.html.twig #}

{% extends \"OCPlatformBundle::layout.html.twig\" %}

{% block title %}
    Modifier une annonce - {{ parent() }}
{% endblock %}

{% block ocplatform_body %}

    <h2>Modifier une annonce</h2>

    {{ form(form) }}

    <p>
        <a href=\"{{ path('oc_platform_view', {'id': advert.id}) }}\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour à l'annonce
        </a>
    </p>

{% endblock %}", "OCPlatformBundle:Advert:edit.html.twig", "/Users/VictorChevalier/Documents/PHP/SymfonyTP/SymfonyTP/src/OC/PlatformBundle/Resources/views/Advert/edit.html.twig");
    }
}
