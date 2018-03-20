<?php

/* OCPlatformBundle:Advert:menu.html.twig */
class __TwigTemplate_403cd2d81f0af26409a8c21fbf8c84322e18a2f60f9f3070038dae75a370b99b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_12abee3ef3c2f436f9c6035c552267ec183f232577bf5d6e95173e617cb12b52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12abee3ef3c2f436f9c6035c552267ec183f232577bf5d6e95173e617cb12b52->enter($__internal_12abee3ef3c2f436f9c6035c552267ec183f232577bf5d6e95173e617cb12b52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:menu.html.twig"));

        $__internal_14f0eff786de3155fc61cf8ba3d3b652f46246287f269e21ab921666e03cf093 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14f0eff786de3155fc61cf8ba3d3b652f46246287f269e21ab921666e03cf093->enter($__internal_14f0eff786de3155fc61cf8ba3d3b652f46246287f269e21ab921666e03cf093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:menu.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
<ul class=\"nav nav-pills nav-stacked\">
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listAdverts"] ?? $this->getContext($context, "listAdverts")));
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 7
            echo "        <li>
            <a href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_view", array("id" => $this->getAttribute($context["advert"], "id", array()))), "html", null, true);
            echo "\">
                ";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "title", array()), "html", null, true);
            echo "
            </a>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "</ul>";
        
        $__internal_12abee3ef3c2f436f9c6035c552267ec183f232577bf5d6e95173e617cb12b52->leave($__internal_12abee3ef3c2f436f9c6035c552267ec183f232577bf5d6e95173e617cb12b52_prof);

        
        $__internal_14f0eff786de3155fc61cf8ba3d3b652f46246287f269e21ab921666e03cf093->leave($__internal_14f0eff786de3155fc61cf8ba3d3b652f46246287f269e21ab921666e03cf093_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 13,  43 => 9,  39 => 8,  36 => 7,  32 => 6,  28 => 4,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/views/Advert/menu.html.twig #}

{# Ce template n'hérite de personne, tout comme le template inclus avec {{ include() }}. #}

<ul class=\"nav nav-pills nav-stacked\">
    {% for advert in listAdverts %}
        <li>
            <a href=\"{{ path('oc_platform_view', {'id': advert.id}) }}\">
                {{ advert.title }}
            </a>
        </li>
    {% endfor %}
</ul>", "OCPlatformBundle:Advert:menu.html.twig", "/Users/VictorChevalier/Documents/PHP/SymfonyTP/SymfonyTP/src/OC/PlatformBundle/Resources/views/Advert/menu.html.twig");
    }
}
