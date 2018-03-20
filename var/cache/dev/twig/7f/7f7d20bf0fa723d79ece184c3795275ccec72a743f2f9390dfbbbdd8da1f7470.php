<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_8036970b2f6c4eebcb26741f343431e46198547e170ecb11af2f9ef3d6502a5f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_08368504734b849a74ed6e693023d7ca50290f2bdd4e1c058a356bb4f68dfedb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08368504734b849a74ed6e693023d7ca50290f2bdd4e1c058a356bb4f68dfedb->enter($__internal_08368504734b849a74ed6e693023d7ca50290f2bdd4e1c058a356bb4f68dfedb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_56e044707d359af3b003275eba50aac4ad2b1cc97f4581d3717539e7fc10e1d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56e044707d359af3b003275eba50aac4ad2b1cc97f4581d3717539e7fc10e1d3->enter($__internal_56e044707d359af3b003275eba50aac4ad2b1cc97f4581d3717539e7fc10e1d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08368504734b849a74ed6e693023d7ca50290f2bdd4e1c058a356bb4f68dfedb->leave($__internal_08368504734b849a74ed6e693023d7ca50290f2bdd4e1c058a356bb4f68dfedb_prof);

        
        $__internal_56e044707d359af3b003275eba50aac4ad2b1cc97f4581d3717539e7fc10e1d3->leave($__internal_56e044707d359af3b003275eba50aac4ad2b1cc97f4581d3717539e7fc10e1d3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2f11a07e83d9b54bea23cdb95a127d43aafd92f9324ab68cd60e6587abed0787 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f11a07e83d9b54bea23cdb95a127d43aafd92f9324ab68cd60e6587abed0787->enter($__internal_2f11a07e83d9b54bea23cdb95a127d43aafd92f9324ab68cd60e6587abed0787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6d849ad632d2e972ef75bf672bf6ce78c2ac7a5c12a387a153e75f279e12d491 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d849ad632d2e972ef75bf672bf6ce78c2ac7a5c12a387a153e75f279e12d491->enter($__internal_6d849ad632d2e972ef75bf672bf6ce78c2ac7a5c12a387a153e75f279e12d491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_6d849ad632d2e972ef75bf672bf6ce78c2ac7a5c12a387a153e75f279e12d491->leave($__internal_6d849ad632d2e972ef75bf672bf6ce78c2ac7a5c12a387a153e75f279e12d491_prof);

        
        $__internal_2f11a07e83d9b54bea23cdb95a127d43aafd92f9324ab68cd60e6587abed0787->leave($__internal_2f11a07e83d9b54bea23cdb95a127d43aafd92f9324ab68cd60e6587abed0787_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_26744fc4581f45e85fa19cc958b3d51aea17983f049637b5f423a07963c88175 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26744fc4581f45e85fa19cc958b3d51aea17983f049637b5f423a07963c88175->enter($__internal_26744fc4581f45e85fa19cc958b3d51aea17983f049637b5f423a07963c88175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1da9df50935605cbf16040784bf658941fa27f811f268e7bc8dae4fcb19a7df6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1da9df50935605cbf16040784bf658941fa27f811f268e7bc8dae4fcb19a7df6->enter($__internal_1da9df50935605cbf16040784bf658941fa27f811f268e7bc8dae4fcb19a7df6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_1da9df50935605cbf16040784bf658941fa27f811f268e7bc8dae4fcb19a7df6->leave($__internal_1da9df50935605cbf16040784bf658941fa27f811f268e7bc8dae4fcb19a7df6_prof);

        
        $__internal_26744fc4581f45e85fa19cc958b3d51aea17983f049637b5f423a07963c88175->leave($__internal_26744fc4581f45e85fa19cc958b3d51aea17983f049637b5f423a07963c88175_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ec54937c0b9a7de717e8e55f642d1e011856d8fc2b46e8eeaa2353522433d208 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec54937c0b9a7de717e8e55f642d1e011856d8fc2b46e8eeaa2353522433d208->enter($__internal_ec54937c0b9a7de717e8e55f642d1e011856d8fc2b46e8eeaa2353522433d208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d8fb4f3a536518d00833ecd7579bb32e39310c38c0107c1d8723b5769667640c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8fb4f3a536518d00833ecd7579bb32e39310c38c0107c1d8723b5769667640c->enter($__internal_d8fb4f3a536518d00833ecd7579bb32e39310c38c0107c1d8723b5769667640c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_d8fb4f3a536518d00833ecd7579bb32e39310c38c0107c1d8723b5769667640c->leave($__internal_d8fb4f3a536518d00833ecd7579bb32e39310c38c0107c1d8723b5769667640c_prof);

        
        $__internal_ec54937c0b9a7de717e8e55f642d1e011856d8fc2b46e8eeaa2353522433d208->leave($__internal_ec54937c0b9a7de717e8e55f642d1e011856d8fc2b46e8eeaa2353522433d208_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Users/VictorChevalier/Documents/PHP/SymfonyTP/SymfonyTP/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
