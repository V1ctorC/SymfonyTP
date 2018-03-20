<?php

/* OCPlatformBundle:Advert:edit.html.twig */
class __TwigTemplate_6d96355a3fc1e24a834bd692edd5fe26ea9008632e411b8b046afd997811f3e5 extends Twig_Template
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
        $__internal_ca735e079ffba462ab60ecbbb02d929cc65a95c276e2a2f35cbb51845aa142de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca735e079ffba462ab60ecbbb02d929cc65a95c276e2a2f35cbb51845aa142de->enter($__internal_ca735e079ffba462ab60ecbbb02d929cc65a95c276e2a2f35cbb51845aa142de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:edit.html.twig"));

        $__internal_ae34f73504b52d403ac48872da65f10c9b72372a44ef0d028daeaf31171bf403 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae34f73504b52d403ac48872da65f10c9b72372a44ef0d028daeaf31171bf403->enter($__internal_ae34f73504b52d403ac48872da65f10c9b72372a44ef0d028daeaf31171bf403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca735e079ffba462ab60ecbbb02d929cc65a95c276e2a2f35cbb51845aa142de->leave($__internal_ca735e079ffba462ab60ecbbb02d929cc65a95c276e2a2f35cbb51845aa142de_prof);

        
        $__internal_ae34f73504b52d403ac48872da65f10c9b72372a44ef0d028daeaf31171bf403->leave($__internal_ae34f73504b52d403ac48872da65f10c9b72372a44ef0d028daeaf31171bf403_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8d1a318fee5c8a0a508d3a7f65ada4c28ad742ace537b3447806e115024483c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d1a318fee5c8a0a508d3a7f65ada4c28ad742ace537b3447806e115024483c9->enter($__internal_8d1a318fee5c8a0a508d3a7f65ada4c28ad742ace537b3447806e115024483c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1e24fd15c7b5346eaad2786eeac142ced3de94f7d59a4de47954e8adf9f3fb11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e24fd15c7b5346eaad2786eeac142ced3de94f7d59a4de47954e8adf9f3fb11->enter($__internal_1e24fd15c7b5346eaad2786eeac142ced3de94f7d59a4de47954e8adf9f3fb11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    Modifier une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_1e24fd15c7b5346eaad2786eeac142ced3de94f7d59a4de47954e8adf9f3fb11->leave($__internal_1e24fd15c7b5346eaad2786eeac142ced3de94f7d59a4de47954e8adf9f3fb11_prof);

        
        $__internal_8d1a318fee5c8a0a508d3a7f65ada4c28ad742ace537b3447806e115024483c9->leave($__internal_8d1a318fee5c8a0a508d3a7f65ada4c28ad742ace537b3447806e115024483c9_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_377099fb7d1b2967162be679faca8ecb7367dbbe60f40b0ab1ae90500ebe119c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_377099fb7d1b2967162be679faca8ecb7367dbbe60f40b0ab1ae90500ebe119c->enter($__internal_377099fb7d1b2967162be679faca8ecb7367dbbe60f40b0ab1ae90500ebe119c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_adbfb45a5a72eb928d4b14895771368ffe1348e57b5f29a3c60e6aad4a681eb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adbfb45a5a72eb928d4b14895771368ffe1348e57b5f29a3c60e6aad4a681eb1->enter($__internal_adbfb45a5a72eb928d4b14895771368ffe1348e57b5f29a3c60e6aad4a681eb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 10
        echo "
    <h2>Modifier une annonce</h2>

    ";
        // line 13
        echo twig_include($this->env, $context, "OCPlatformBundle:Advert:form.html.twig");
        echo "

    <p>
        Vous éditez une annonce déjà existante, merci de ne pas changer
        l'esprit générale de l'annonce déjà publiée.
    </p>

    <p>
        <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_view", array("id" => $this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour à l'annonce
        </a>
    </p>

";
        
        $__internal_adbfb45a5a72eb928d4b14895771368ffe1348e57b5f29a3c60e6aad4a681eb1->leave($__internal_adbfb45a5a72eb928d4b14895771368ffe1348e57b5f29a3c60e6aad4a681eb1_prof);

        
        $__internal_377099fb7d1b2967162be679faca8ecb7367dbbe60f40b0ab1ae90500ebe119c->leave($__internal_377099fb7d1b2967162be679faca8ecb7367dbbe60f40b0ab1ae90500ebe119c_prof);

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
        return array (  88 => 21,  77 => 13,  72 => 10,  63 => 9,  50 => 6,  41 => 5,  11 => 3,);
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

    {{ include(\"OCPlatformBundle:Advert:form.html.twig\") }}

    <p>
        Vous éditez une annonce déjà existante, merci de ne pas changer
        l'esprit générale de l'annonce déjà publiée.
    </p>

    <p>
        <a href=\"{{ path('oc_platform_view', {'id': advert.id}) }}\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour à l'annonce
        </a>
    </p>

{% endblock %}", "OCPlatformBundle:Advert:edit.html.twig", "/Users/VictorChevalier/Documents/PHP/SymfonyTP/SymfonyTP/src/OC/PlatformBundle/Resources/views/Advert/edit.html.twig");
    }
}
