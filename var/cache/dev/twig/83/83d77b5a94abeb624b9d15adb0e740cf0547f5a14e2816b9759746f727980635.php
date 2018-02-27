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
        $__internal_ba4df547ca341a92324e824d3fa6569216265d9bfb18927af7b13512db28aea3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba4df547ca341a92324e824d3fa6569216265d9bfb18927af7b13512db28aea3->enter($__internal_ba4df547ca341a92324e824d3fa6569216265d9bfb18927af7b13512db28aea3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:menu.html.twig"));

        $__internal_4019233e583858bce3a2241be04f5d5a0f3d764210917b3e4971b53232f032cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4019233e583858bce3a2241be04f5d5a0f3d764210917b3e4971b53232f032cb->enter($__internal_4019233e583858bce3a2241be04f5d5a0f3d764210917b3e4971b53232f032cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:menu.html.twig"));

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
        
        $__internal_ba4df547ca341a92324e824d3fa6569216265d9bfb18927af7b13512db28aea3->leave($__internal_ba4df547ca341a92324e824d3fa6569216265d9bfb18927af7b13512db28aea3_prof);

        
        $__internal_4019233e583858bce3a2241be04f5d5a0f3d764210917b3e4971b53232f032cb->leave($__internal_4019233e583858bce3a2241be04f5d5a0f3d764210917b3e4971b53232f032cb_prof);

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
