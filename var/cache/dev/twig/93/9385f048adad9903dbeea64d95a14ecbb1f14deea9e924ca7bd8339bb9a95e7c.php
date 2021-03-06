<?php

/* OCPlatformBundle:Advert:view.html.twig */
class __TwigTemplate_a66b31d84c740494c2f817b488d1cfb94b5a5228d2fc13db4ee112f458198455 extends Twig_Template
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
        $__internal_8751b9041ed97540691a081062f59ecfc8bde03a16d2a4d27dfa2544e16cef1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8751b9041ed97540691a081062f59ecfc8bde03a16d2a4d27dfa2544e16cef1f->enter($__internal_8751b9041ed97540691a081062f59ecfc8bde03a16d2a4d27dfa2544e16cef1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:view.html.twig"));

        $__internal_7dbf8b35af5059c2edd081d6ebd88b82111bf31a73d925856fcb4728fceaebcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dbf8b35af5059c2edd081d6ebd88b82111bf31a73d925856fcb4728fceaebcf->enter($__internal_7dbf8b35af5059c2edd081d6ebd88b82111bf31a73d925856fcb4728fceaebcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8751b9041ed97540691a081062f59ecfc8bde03a16d2a4d27dfa2544e16cef1f->leave($__internal_8751b9041ed97540691a081062f59ecfc8bde03a16d2a4d27dfa2544e16cef1f_prof);

        
        $__internal_7dbf8b35af5059c2edd081d6ebd88b82111bf31a73d925856fcb4728fceaebcf->leave($__internal_7dbf8b35af5059c2edd081d6ebd88b82111bf31a73d925856fcb4728fceaebcf_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2ec8c68dc1f28f15bdd6255c05b582cacdd734675df4c97ea8e95381e897a3ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ec8c68dc1f28f15bdd6255c05b582cacdd734675df4c97ea8e95381e897a3ac->enter($__internal_2ec8c68dc1f28f15bdd6255c05b582cacdd734675df4c97ea8e95381e897a3ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_74daeb05cd408dec8ba8d1308bc196ee467dffaa8b84446813d61149a20eef86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74daeb05cd408dec8ba8d1308bc196ee467dffaa8b84446813d61149a20eef86->enter($__internal_74daeb05cd408dec8ba8d1308bc196ee467dffaa8b84446813d61149a20eef86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    Lecture d'une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_74daeb05cd408dec8ba8d1308bc196ee467dffaa8b84446813d61149a20eef86->leave($__internal_74daeb05cd408dec8ba8d1308bc196ee467dffaa8b84446813d61149a20eef86_prof);

        
        $__internal_2ec8c68dc1f28f15bdd6255c05b582cacdd734675df4c97ea8e95381e897a3ac->leave($__internal_2ec8c68dc1f28f15bdd6255c05b582cacdd734675df4c97ea8e95381e897a3ac_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_49dece02cea381dffc41717fb2d6cf27677e3587b03f3b5d4fd6f639c29cb320 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49dece02cea381dffc41717fb2d6cf27677e3587b03f3b5d4fd6f639c29cb320->enter($__internal_49dece02cea381dffc41717fb2d6cf27677e3587b03f3b5d4fd6f639c29cb320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_00e13319bc4bdfbb45562d65c2780170ec02cd2c8a8cbbf0048eccd6b65735d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00e13319bc4bdfbb45562d65c2780170ec02cd2c8a8cbbf0048eccd6b65735d4->enter($__internal_00e13319bc4bdfbb45562d65c2780170ec02cd2c8a8cbbf0048eccd6b65735d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

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
        
        $__internal_00e13319bc4bdfbb45562d65c2780170ec02cd2c8a8cbbf0048eccd6b65735d4->leave($__internal_00e13319bc4bdfbb45562d65c2780170ec02cd2c8a8cbbf0048eccd6b65735d4_prof);

        
        $__internal_49dece02cea381dffc41717fb2d6cf27677e3587b03f3b5d4fd6f639c29cb320->leave($__internal_49dece02cea381dffc41717fb2d6cf27677e3587b03f3b5d4fd6f639c29cb320_prof);

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
