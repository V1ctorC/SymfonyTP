<?php

/* OCPlatformBundle:Advert:view.html.twig */
class __TwigTemplate_0c72f1f31473b7819c3ef5428d58cb20bbcb7ac734ff78f2676a647a0a78b2ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:view.html.twig", 3);
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
        $__internal_ae8bf5c62339ec40fcba55cf6054a9f4f9c2156fcdec2f192e36a18a45273d83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae8bf5c62339ec40fcba55cf6054a9f4f9c2156fcdec2f192e36a18a45273d83->enter($__internal_ae8bf5c62339ec40fcba55cf6054a9f4f9c2156fcdec2f192e36a18a45273d83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:view.html.twig"));

        $__internal_d3e96634ce272190af814d0ddb249bef7d0cb4bfd4d1db129fa5164eccbf7a4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3e96634ce272190af814d0ddb249bef7d0cb4bfd4d1db129fa5164eccbf7a4a->enter($__internal_d3e96634ce272190af814d0ddb249bef7d0cb4bfd4d1db129fa5164eccbf7a4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae8bf5c62339ec40fcba55cf6054a9f4f9c2156fcdec2f192e36a18a45273d83->leave($__internal_ae8bf5c62339ec40fcba55cf6054a9f4f9c2156fcdec2f192e36a18a45273d83_prof);

        
        $__internal_d3e96634ce272190af814d0ddb249bef7d0cb4bfd4d1db129fa5164eccbf7a4a->leave($__internal_d3e96634ce272190af814d0ddb249bef7d0cb4bfd4d1db129fa5164eccbf7a4a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_52bb67088474d5a9377358680e5e07ca8f5d9c60cbeb3dc5e369fe1ead0c0bac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52bb67088474d5a9377358680e5e07ca8f5d9c60cbeb3dc5e369fe1ead0c0bac->enter($__internal_52bb67088474d5a9377358680e5e07ca8f5d9c60cbeb3dc5e369fe1ead0c0bac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_328cc5a96616f19ca72141c31e907160d3b5d4963ab55e3ebe1650bbd2dba609 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_328cc5a96616f19ca72141c31e907160d3b5d4963ab55e3ebe1650bbd2dba609->enter($__internal_328cc5a96616f19ca72141c31e907160d3b5d4963ab55e3ebe1650bbd2dba609_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    Lecture d'une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_328cc5a96616f19ca72141c31e907160d3b5d4963ab55e3ebe1650bbd2dba609->leave($__internal_328cc5a96616f19ca72141c31e907160d3b5d4963ab55e3ebe1650bbd2dba609_prof);

        
        $__internal_52bb67088474d5a9377358680e5e07ca8f5d9c60cbeb3dc5e369fe1ead0c0bac->leave($__internal_52bb67088474d5a9377358680e5e07ca8f5d9c60cbeb3dc5e369fe1ead0c0bac_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_457efaa0db82f882780b521d69d18f95cbfca08a8841a12f0c508994fa6658b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_457efaa0db82f882780b521d69d18f95cbfca08a8841a12f0c508994fa6658b4->enter($__internal_457efaa0db82f882780b521d69d18f95cbfca08a8841a12f0c508994fa6658b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_0c0243c2e7ce722d65ff51054cf5a2875c3ac3c06e416f11a32439a18d057b00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c0243c2e7ce722d65ff51054cf5a2875c3ac3c06e416f11a32439a18d057b00->enter($__internal_0c0243c2e7ce722d65ff51054cf5a2875c3ac3c06e416f11a32439a18d057b00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 10
        echo "
    ";
        // line 12
        echo "    ";
        if ( !(null === $this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "image", array()))) {
            // line 13
            echo "        <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "image", array()), "url", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "image", array()), "alt", array()), "html", null, true);
            echo "\">
    ";
        }
        // line 15
        echo "
    <h2>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "title", array()), "html", null, true);
        echo "</h2>
    <i>Par ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "author", array()), "html", null, true);
        echo ", le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "date", array()), "d/m/Y"), "html", null, true);
        echo "</i>

    <div class=\"well\">
        ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "content", array()), "html", null, true);
        echo "
    </div>

    <p>
        <a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_home");
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour à la liste
        </a>
        <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_edit", array("id" => $this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-edit\"></i>
            Modifier l'annonce
        </a>
        <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_delete", array("id" => $this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\">
            <i class=\"glyphicon glyphicon-trash\"></i>
            Supprimer l'annonce
        </a>
    </p>

";
        
        $__internal_0c0243c2e7ce722d65ff51054cf5a2875c3ac3c06e416f11a32439a18d057b00->leave($__internal_0c0243c2e7ce722d65ff51054cf5a2875c3ac3c06e416f11a32439a18d057b00_prof);

        
        $__internal_457efaa0db82f882780b521d69d18f95cbfca08a8841a12f0c508994fa6658b4->leave($__internal_457efaa0db82f882780b521d69d18f95cbfca08a8841a12f0c508994fa6658b4_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 32,  115 => 28,  108 => 24,  101 => 20,  93 => 17,  89 => 16,  86 => 15,  78 => 13,  75 => 12,  72 => 10,  63 => 9,  50 => 6,  41 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/view/Advert/view.html.twig #}

{% extends \"OCPlatformBundle::layout.html.twig\" %}

{% block title %}
    Lecture d'une annonce - {{ parent() }}
{% endblock %}

{% block ocplatform_body %}

    {# On vérifie qu'une image soit bien associée à l'annonce #}
    {% if advert.image is not null %}
        <img src=\"{{ advert.image.url }}\" alt=\"{{ advert.image.alt }}\">
    {% endif %}

    <h2>{{ advert.title }}</h2>
    <i>Par {{ advert.author }}, le {{ advert.date|date('d/m/Y') }}</i>

    <div class=\"well\">
        {{ advert.content }}
    </div>

    <p>
        <a href=\"{{ path('oc_platform_home') }}\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour à la liste
        </a>
        <a href=\"{{ path('oc_platform_edit', {'id': advert.id}) }}\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-edit\"></i>
            Modifier l'annonce
        </a>
        <a href=\"{{ path('oc_platform_delete', {'id': advert.id}) }}\" class=\"btn btn-danger\">
            <i class=\"glyphicon glyphicon-trash\"></i>
            Supprimer l'annonce
        </a>
    </p>

{% endblock %}", "OCPlatformBundle:Advert:view.html.twig", "/Users/VictorChevalier/Documents/PHP/SymfonyTP/SymfonyTP/src/OC/PlatformBundle/Resources/views/Advert/view.html.twig");
    }
}
