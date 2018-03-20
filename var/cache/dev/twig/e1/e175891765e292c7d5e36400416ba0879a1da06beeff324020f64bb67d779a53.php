<?php

/* OCPlatformBundle:Advert:index.html.twig */
class __TwigTemplate_63bcf2828ad0a28807a7e1644149a784780b718b9ec32cf941e59051f572171f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:index.html.twig", 3);
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
        $__internal_428493cb7ceccd23d26b527a1928fc0bc8ea307adfc8e49c65600a0628685a01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_428493cb7ceccd23d26b527a1928fc0bc8ea307adfc8e49c65600a0628685a01->enter($__internal_428493cb7ceccd23d26b527a1928fc0bc8ea307adfc8e49c65600a0628685a01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:index.html.twig"));

        $__internal_c77a09f1b59f5812d9123cb3054365a46641b6a5fbde9adf8e8e4ccf5e9d152b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c77a09f1b59f5812d9123cb3054365a46641b6a5fbde9adf8e8e4ccf5e9d152b->enter($__internal_c77a09f1b59f5812d9123cb3054365a46641b6a5fbde9adf8e8e4ccf5e9d152b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_428493cb7ceccd23d26b527a1928fc0bc8ea307adfc8e49c65600a0628685a01->leave($__internal_428493cb7ceccd23d26b527a1928fc0bc8ea307adfc8e49c65600a0628685a01_prof);

        
        $__internal_c77a09f1b59f5812d9123cb3054365a46641b6a5fbde9adf8e8e4ccf5e9d152b->leave($__internal_c77a09f1b59f5812d9123cb3054365a46641b6a5fbde9adf8e8e4ccf5e9d152b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1540a3177254d8e45ae427eb63ced32cf0543a5912eced4517d6cba30f27eda8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1540a3177254d8e45ae427eb63ced32cf0543a5912eced4517d6cba30f27eda8->enter($__internal_1540a3177254d8e45ae427eb63ced32cf0543a5912eced4517d6cba30f27eda8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a354373d537f53ec8a39e862e3a81ff9ba9b61861e70d63e22b04ba08f6230c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a354373d537f53ec8a39e862e3a81ff9ba9b61861e70d63e22b04ba08f6230c1->enter($__internal_a354373d537f53ec8a39e862e3a81ff9ba9b61861e70d63e22b04ba08f6230c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_a354373d537f53ec8a39e862e3a81ff9ba9b61861e70d63e22b04ba08f6230c1->leave($__internal_a354373d537f53ec8a39e862e3a81ff9ba9b61861e70d63e22b04ba08f6230c1_prof);

        
        $__internal_1540a3177254d8e45ae427eb63ced32cf0543a5912eced4517d6cba30f27eda8->leave($__internal_1540a3177254d8e45ae427eb63ced32cf0543a5912eced4517d6cba30f27eda8_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_5709b2093cd8ee90632d9124959dddf440fce612c96977c35560ddc3cba230b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5709b2093cd8ee90632d9124959dddf440fce612c96977c35560ddc3cba230b7->enter($__internal_5709b2093cd8ee90632d9124959dddf440fce612c96977c35560ddc3cba230b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_7ef42f13862d7f9d7c38e3e4ecaa37fae5d0631cf22b44a3ed87941a965d0e7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ef42f13862d7f9d7c38e3e4ecaa37fae5d0631cf22b44a3ed87941a965d0e7f->enter($__internal_7ef42f13862d7f9d7c38e3e4ecaa37fae5d0631cf22b44a3ed87941a965d0e7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 10
        echo "
    <h2>Liste des annonces</h2>

    <ul>
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listAdverts"] ?? $this->getContext($context, "listAdverts")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 15
            echo "            <li>
                <a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_view", array("id" => $this->getAttribute($context["advert"], "id", array()))), "html", null, true);
            echo "\">
                    ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "title", array()), "html", null, true);
            echo "
                </a>
                par ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "author", array()), "html", null, true);
            echo ",
                le ";
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["advert"], "date", array()), "d/m/Y"), "html", null, true);
            echo "
            </li>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 23
            echo "            <li>Pas (encore !) d'annonces</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    </ul>

";
        
        $__internal_7ef42f13862d7f9d7c38e3e4ecaa37fae5d0631cf22b44a3ed87941a965d0e7f->leave($__internal_7ef42f13862d7f9d7c38e3e4ecaa37fae5d0631cf22b44a3ed87941a965d0e7f_prof);

        
        $__internal_5709b2093cd8ee90632d9124959dddf440fce612c96977c35560ddc3cba230b7->leave($__internal_5709b2093cd8ee90632d9124959dddf440fce612c96977c35560ddc3cba230b7_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 25,  107 => 23,  99 => 20,  95 => 19,  90 => 17,  86 => 16,  83 => 15,  78 => 14,  72 => 10,  63 => 9,  50 => 6,  41 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/views/Advert/index.html.twig #}

{% extends \"OCPlatformBundle::layout.html.twig\" %}

{% block title %}
    Accueil - {{ parent() }}
{% endblock %}

{% block ocplatform_body %}

    <h2>Liste des annonces</h2>

    <ul>
        {% for advert in listAdverts %}
            <li>
                <a href=\"{{ path('oc_platform_view', {'id': advert.id}) }}\">
                    {{ advert.title }}
                </a>
                par {{ advert.author }},
                le {{ advert.date|date('d/m/Y') }}
            </li>
        {% else %}
            <li>Pas (encore !) d'annonces</li>
        {% endfor %}
    </ul>

{% endblock %}", "OCPlatformBundle:Advert:index.html.twig", "/Users/VictorChevalier/Documents/PHP/SymfonyTP/SymfonyTP/src/OC/PlatformBundle/Resources/views/Advert/index.html.twig");
    }
}
