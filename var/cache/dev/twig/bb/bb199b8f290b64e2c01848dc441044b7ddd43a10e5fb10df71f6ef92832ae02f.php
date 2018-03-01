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
        $__internal_cf769c1624b52338273b6d1e0358f481252d18ffa3eab1773e3175728c0d33f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf769c1624b52338273b6d1e0358f481252d18ffa3eab1773e3175728c0d33f4->enter($__internal_cf769c1624b52338273b6d1e0358f481252d18ffa3eab1773e3175728c0d33f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:view.html.twig"));

        $__internal_41ac40a153dd330f2bee7e23ed93805bf583efda88a4874a408a2c6abbc0b143 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41ac40a153dd330f2bee7e23ed93805bf583efda88a4874a408a2c6abbc0b143->enter($__internal_41ac40a153dd330f2bee7e23ed93805bf583efda88a4874a408a2c6abbc0b143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf769c1624b52338273b6d1e0358f481252d18ffa3eab1773e3175728c0d33f4->leave($__internal_cf769c1624b52338273b6d1e0358f481252d18ffa3eab1773e3175728c0d33f4_prof);

        
        $__internal_41ac40a153dd330f2bee7e23ed93805bf583efda88a4874a408a2c6abbc0b143->leave($__internal_41ac40a153dd330f2bee7e23ed93805bf583efda88a4874a408a2c6abbc0b143_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_97e25c41ac5080b633a925e48e3f4868aa35707352de74f8d35f780b2999316e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97e25c41ac5080b633a925e48e3f4868aa35707352de74f8d35f780b2999316e->enter($__internal_97e25c41ac5080b633a925e48e3f4868aa35707352de74f8d35f780b2999316e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b8db51f1d15cc1ca243e34e9b60de0f0d9fcf91e7f2adf7ac8674f6ecd5919b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8db51f1d15cc1ca243e34e9b60de0f0d9fcf91e7f2adf7ac8674f6ecd5919b6->enter($__internal_b8db51f1d15cc1ca243e34e9b60de0f0d9fcf91e7f2adf7ac8674f6ecd5919b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    Lecture d'une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_b8db51f1d15cc1ca243e34e9b60de0f0d9fcf91e7f2adf7ac8674f6ecd5919b6->leave($__internal_b8db51f1d15cc1ca243e34e9b60de0f0d9fcf91e7f2adf7ac8674f6ecd5919b6_prof);

        
        $__internal_97e25c41ac5080b633a925e48e3f4868aa35707352de74f8d35f780b2999316e->leave($__internal_97e25c41ac5080b633a925e48e3f4868aa35707352de74f8d35f780b2999316e_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_f64a670ff74c1998f7ee895e7444cd601c13a6b7b8a7bf9c072ba85540934286 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f64a670ff74c1998f7ee895e7444cd601c13a6b7b8a7bf9c072ba85540934286->enter($__internal_f64a670ff74c1998f7ee895e7444cd601c13a6b7b8a7bf9c072ba85540934286_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_b3bb28d33861f306f3624f6922b87fe4984ade1cb1cf78434fd91d20fb29ee61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3bb28d33861f306f3624f6922b87fe4984ade1cb1cf78434fd91d20fb29ee61->enter($__internal_b3bb28d33861f306f3624f6922b87fe4984ade1cb1cf78434fd91d20fb29ee61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

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

    <h3>Candidatures</h3>

    ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listApplications"] ?? $this->getContext($context, "listApplications")));
        foreach ($context['_seq'] as $context["_key"] => $context["Application"]) {
            // line 41
            echo "    <i>Par ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["Application"], "author", array()), "html", null, true);
            echo ", le ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["Application"], "date", array()), "d/m/Y"), "html", null, true);
            echo "</i>

    <div class=\"well\">
        ";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["Application"], "content", array()), "html", null, true);
            echo "
    </div>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Application'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "
";
        
        $__internal_b3bb28d33861f306f3624f6922b87fe4984ade1cb1cf78434fd91d20fb29ee61->leave($__internal_b3bb28d33861f306f3624f6922b87fe4984ade1cb1cf78434fd91d20fb29ee61_prof);

        
        $__internal_f64a670ff74c1998f7ee895e7444cd601c13a6b7b8a7bf9c072ba85540934286->leave($__internal_f64a670ff74c1998f7ee895e7444cd601c13a6b7b8a7bf9c072ba85540934286_prof);

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
        return array (  156 => 48,  146 => 44,  137 => 41,  133 => 40,  122 => 32,  115 => 28,  108 => 24,  101 => 20,  93 => 17,  89 => 16,  86 => 15,  78 => 13,  75 => 12,  72 => 10,  63 => 9,  50 => 6,  41 => 5,  11 => 3,);
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

    <h3>Candidatures</h3>

    {% for Application in listApplications %}
    <i>Par {{ Application.author }}, le {{ Application.date|date('d/m/Y') }}</i>

    <div class=\"well\">
        {{ Application.content }}
    </div>

    {% endfor %}

{% endblock %}", "OCPlatformBundle:Advert:view.html.twig", "/Users/VictorChevalier/Documents/PHP/SymfonyTP/SymfonyTP/src/OC/PlatformBundle/Resources/views/Advert/view.html.twig");
    }
}
