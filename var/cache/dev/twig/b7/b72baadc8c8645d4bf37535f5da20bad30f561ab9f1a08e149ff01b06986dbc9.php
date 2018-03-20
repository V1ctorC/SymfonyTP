<?php

/* OCPlatformBundle:Advert:menu.html.twig */
class __TwigTemplate_5d17b8246a4de5b593863408bd04b70b52412620277ce2a5cab5b35e20712b64 extends Twig_Template
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
        $__internal_ed7e23e447c94ecc5455d2620eb566c73338bdb69ba7dae3720f94ee14a7f7ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed7e23e447c94ecc5455d2620eb566c73338bdb69ba7dae3720f94ee14a7f7ef->enter($__internal_ed7e23e447c94ecc5455d2620eb566c73338bdb69ba7dae3720f94ee14a7f7ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:menu.html.twig"));

        $__internal_b0b3e73c37f0e9d076c2a096285f26efe868ea6929c4f36a964c28c386922282 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0b3e73c37f0e9d076c2a096285f26efe868ea6929c4f36a964c28c386922282->enter($__internal_b0b3e73c37f0e9d076c2a096285f26efe868ea6929c4f36a964c28c386922282_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:menu.html.twig"));

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
        
        $__internal_ed7e23e447c94ecc5455d2620eb566c73338bdb69ba7dae3720f94ee14a7f7ef->leave($__internal_ed7e23e447c94ecc5455d2620eb566c73338bdb69ba7dae3720f94ee14a7f7ef_prof);

        
        $__internal_b0b3e73c37f0e9d076c2a096285f26efe868ea6929c4f36a964c28c386922282->leave($__internal_b0b3e73c37f0e9d076c2a096285f26efe868ea6929c4f36a964c28c386922282_prof);

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
