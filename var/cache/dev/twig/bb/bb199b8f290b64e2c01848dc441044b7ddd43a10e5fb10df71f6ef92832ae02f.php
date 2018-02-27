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
        $__internal_39a4b4a1e97020d132393a61e5106d392b4e76add5775ae62b93d49ea684ecf1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39a4b4a1e97020d132393a61e5106d392b4e76add5775ae62b93d49ea684ecf1->enter($__internal_39a4b4a1e97020d132393a61e5106d392b4e76add5775ae62b93d49ea684ecf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:view.html.twig"));

        $__internal_3fd973e8face6f90f96cc2165995bb5039328a7dfc2b2e29400f536c478da3fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fd973e8face6f90f96cc2165995bb5039328a7dfc2b2e29400f536c478da3fc->enter($__internal_3fd973e8face6f90f96cc2165995bb5039328a7dfc2b2e29400f536c478da3fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39a4b4a1e97020d132393a61e5106d392b4e76add5775ae62b93d49ea684ecf1->leave($__internal_39a4b4a1e97020d132393a61e5106d392b4e76add5775ae62b93d49ea684ecf1_prof);

        
        $__internal_3fd973e8face6f90f96cc2165995bb5039328a7dfc2b2e29400f536c478da3fc->leave($__internal_3fd973e8face6f90f96cc2165995bb5039328a7dfc2b2e29400f536c478da3fc_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_efcea93516ceefcc1150e220d7cf916e56d50ed11e6c41a57bf3ab0ba73ce612 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efcea93516ceefcc1150e220d7cf916e56d50ed11e6c41a57bf3ab0ba73ce612->enter($__internal_efcea93516ceefcc1150e220d7cf916e56d50ed11e6c41a57bf3ab0ba73ce612_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8e8c6f043c26ca60028e0034b860bb2acf9002bf950e70c4d9d1f8c084b6cbb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e8c6f043c26ca60028e0034b860bb2acf9002bf950e70c4d9d1f8c084b6cbb1->enter($__internal_8e8c6f043c26ca60028e0034b860bb2acf9002bf950e70c4d9d1f8c084b6cbb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    Lecture d'une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_8e8c6f043c26ca60028e0034b860bb2acf9002bf950e70c4d9d1f8c084b6cbb1->leave($__internal_8e8c6f043c26ca60028e0034b860bb2acf9002bf950e70c4d9d1f8c084b6cbb1_prof);

        
        $__internal_efcea93516ceefcc1150e220d7cf916e56d50ed11e6c41a57bf3ab0ba73ce612->leave($__internal_efcea93516ceefcc1150e220d7cf916e56d50ed11e6c41a57bf3ab0ba73ce612_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_fed70b017ef399ba6e8173431edd5bc50b5c23cde62ffdf6dc2792e6370670ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fed70b017ef399ba6e8173431edd5bc50b5c23cde62ffdf6dc2792e6370670ca->enter($__internal_fed70b017ef399ba6e8173431edd5bc50b5c23cde62ffdf6dc2792e6370670ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_58d75a0b8ae5a8f300db5796838e70ea154b80672e41e76b298eb70eb2d01d92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58d75a0b8ae5a8f300db5796838e70ea154b80672e41e76b298eb70eb2d01d92->enter($__internal_58d75a0b8ae5a8f300db5796838e70ea154b80672e41e76b298eb70eb2d01d92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 10
        echo "
    <h2>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "title", array()), "html", null, true);
        echo "</h2>
    <i>Par ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "author", array()), "html", null, true);
        echo ", le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "date", array()), "d/m/Y"), "html", null, true);
        echo "</i>

    <div class=\"well\">
        ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "content", array()), "html", null, true);
        echo "
    </div>

    <p>
        <a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_home");
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour à la liste
        </a>
        <a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_edit", array("id" => $this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-edit\"></i>
            Modifier l'annonce
        </a>
        <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_delete", array("id" => $this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\">
            <i class=\"glyphicon glyphicon-trash\"></i>
            Supprimer l'annonce
        </a>
    </p>

";
        
        $__internal_58d75a0b8ae5a8f300db5796838e70ea154b80672e41e76b298eb70eb2d01d92->leave($__internal_58d75a0b8ae5a8f300db5796838e70ea154b80672e41e76b298eb70eb2d01d92_prof);

        
        $__internal_fed70b017ef399ba6e8173431edd5bc50b5c23cde62ffdf6dc2792e6370670ca->leave($__internal_fed70b017ef399ba6e8173431edd5bc50b5c23cde62ffdf6dc2792e6370670ca_prof);

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
        return array (  108 => 27,  101 => 23,  94 => 19,  87 => 15,  79 => 12,  75 => 11,  72 => 10,  63 => 9,  50 => 6,  41 => 5,  11 => 3,);
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
