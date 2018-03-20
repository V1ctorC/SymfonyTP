<?php

/* OCPlatformBundle:Advert:index.html.twig */
class __TwigTemplate_13e9e035589684f58241ac5c4bdf87b5b84d594c3417c79a17bd4dd0d7cb8806 extends Twig_Template
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
        $__internal_bc7db8138d15aa8af0359b25536622b9254f55dc39ca193cd1f7915c1c25f010 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc7db8138d15aa8af0359b25536622b9254f55dc39ca193cd1f7915c1c25f010->enter($__internal_bc7db8138d15aa8af0359b25536622b9254f55dc39ca193cd1f7915c1c25f010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:index.html.twig"));

        $__internal_668159c7f7c7319d99794146f3d17d3bcd7d65386d1e75a396a911c433bd5ddf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_668159c7f7c7319d99794146f3d17d3bcd7d65386d1e75a396a911c433bd5ddf->enter($__internal_668159c7f7c7319d99794146f3d17d3bcd7d65386d1e75a396a911c433bd5ddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc7db8138d15aa8af0359b25536622b9254f55dc39ca193cd1f7915c1c25f010->leave($__internal_bc7db8138d15aa8af0359b25536622b9254f55dc39ca193cd1f7915c1c25f010_prof);

        
        $__internal_668159c7f7c7319d99794146f3d17d3bcd7d65386d1e75a396a911c433bd5ddf->leave($__internal_668159c7f7c7319d99794146f3d17d3bcd7d65386d1e75a396a911c433bd5ddf_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_78ca20a51b45d7776b7c1c38a305d366fa0a0342fb7b5ce95802bc0eb8a58627 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78ca20a51b45d7776b7c1c38a305d366fa0a0342fb7b5ce95802bc0eb8a58627->enter($__internal_78ca20a51b45d7776b7c1c38a305d366fa0a0342fb7b5ce95802bc0eb8a58627_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a2dbc5294811b14fed375bc0b3a45da19af6e2d224e137d3fb09e88faff126a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2dbc5294811b14fed375bc0b3a45da19af6e2d224e137d3fb09e88faff126a9->enter($__internal_a2dbc5294811b14fed375bc0b3a45da19af6e2d224e137d3fb09e88faff126a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_a2dbc5294811b14fed375bc0b3a45da19af6e2d224e137d3fb09e88faff126a9->leave($__internal_a2dbc5294811b14fed375bc0b3a45da19af6e2d224e137d3fb09e88faff126a9_prof);

        
        $__internal_78ca20a51b45d7776b7c1c38a305d366fa0a0342fb7b5ce95802bc0eb8a58627->leave($__internal_78ca20a51b45d7776b7c1c38a305d366fa0a0342fb7b5ce95802bc0eb8a58627_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_f40f6edad5d387d5511d072fb21a19cf3002bac946de179fc785a12799fedc7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f40f6edad5d387d5511d072fb21a19cf3002bac946de179fc785a12799fedc7c->enter($__internal_f40f6edad5d387d5511d072fb21a19cf3002bac946de179fc785a12799fedc7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_bd3349d18deac4cf468d0a2637bed0bd86a89b6575a71f443c2128334d2c324f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd3349d18deac4cf468d0a2637bed0bd86a89b6575a71f443c2128334d2c324f->enter($__internal_bd3349d18deac4cf468d0a2637bed0bd86a89b6575a71f443c2128334d2c324f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

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
        
        $__internal_bd3349d18deac4cf468d0a2637bed0bd86a89b6575a71f443c2128334d2c324f->leave($__internal_bd3349d18deac4cf468d0a2637bed0bd86a89b6575a71f443c2128334d2c324f_prof);

        
        $__internal_f40f6edad5d387d5511d072fb21a19cf3002bac946de179fc785a12799fedc7c->leave($__internal_f40f6edad5d387d5511d072fb21a19cf3002bac946de179fc785a12799fedc7c_prof);

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
