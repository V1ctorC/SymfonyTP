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
        $__internal_cde301335cd7468977286ded4b2dc2aa4a3627b219db61c20ff1545c8e7cbc80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cde301335cd7468977286ded4b2dc2aa4a3627b219db61c20ff1545c8e7cbc80->enter($__internal_cde301335cd7468977286ded4b2dc2aa4a3627b219db61c20ff1545c8e7cbc80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_7ef8b620544cab0156ae410a87676eb279256cb9dd167671cd4a632a1d0b65bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ef8b620544cab0156ae410a87676eb279256cb9dd167671cd4a632a1d0b65bf->enter($__internal_7ef8b620544cab0156ae410a87676eb279256cb9dd167671cd4a632a1d0b65bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cde301335cd7468977286ded4b2dc2aa4a3627b219db61c20ff1545c8e7cbc80->leave($__internal_cde301335cd7468977286ded4b2dc2aa4a3627b219db61c20ff1545c8e7cbc80_prof);

        
        $__internal_7ef8b620544cab0156ae410a87676eb279256cb9dd167671cd4a632a1d0b65bf->leave($__internal_7ef8b620544cab0156ae410a87676eb279256cb9dd167671cd4a632a1d0b65bf_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c015250b9ae933f35f303579be0d0ca08b6b6d9710383c3694cbc8166829a30c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c015250b9ae933f35f303579be0d0ca08b6b6d9710383c3694cbc8166829a30c->enter($__internal_c015250b9ae933f35f303579be0d0ca08b6b6d9710383c3694cbc8166829a30c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3a78ef74eb0d38f4968de14588ad9aac1e96b95570265c9874d0104f505dcbef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a78ef74eb0d38f4968de14588ad9aac1e96b95570265c9874d0104f505dcbef->enter($__internal_3a78ef74eb0d38f4968de14588ad9aac1e96b95570265c9874d0104f505dcbef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_3a78ef74eb0d38f4968de14588ad9aac1e96b95570265c9874d0104f505dcbef->leave($__internal_3a78ef74eb0d38f4968de14588ad9aac1e96b95570265c9874d0104f505dcbef_prof);

        
        $__internal_c015250b9ae933f35f303579be0d0ca08b6b6d9710383c3694cbc8166829a30c->leave($__internal_c015250b9ae933f35f303579be0d0ca08b6b6d9710383c3694cbc8166829a30c_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8cc805262be16f73a430d32c1367300d2089959ff099070b2c4a7ffe725f767a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cc805262be16f73a430d32c1367300d2089959ff099070b2c4a7ffe725f767a->enter($__internal_8cc805262be16f73a430d32c1367300d2089959ff099070b2c4a7ffe725f767a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_063bfaea9bbdc6675b0355bddb9acd8714cbb319b1fc11e35323d7286deffa98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_063bfaea9bbdc6675b0355bddb9acd8714cbb319b1fc11e35323d7286deffa98->enter($__internal_063bfaea9bbdc6675b0355bddb9acd8714cbb319b1fc11e35323d7286deffa98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_063bfaea9bbdc6675b0355bddb9acd8714cbb319b1fc11e35323d7286deffa98->leave($__internal_063bfaea9bbdc6675b0355bddb9acd8714cbb319b1fc11e35323d7286deffa98_prof);

        
        $__internal_8cc805262be16f73a430d32c1367300d2089959ff099070b2c4a7ffe725f767a->leave($__internal_8cc805262be16f73a430d32c1367300d2089959ff099070b2c4a7ffe725f767a_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_96229d23b4a146a770d4855af70c758cc5a39e9718724d794b30961da0f284d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96229d23b4a146a770d4855af70c758cc5a39e9718724d794b30961da0f284d3->enter($__internal_96229d23b4a146a770d4855af70c758cc5a39e9718724d794b30961da0f284d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d052512e85532ca064b6095873f4f695f13cd565a7e2136e1408ee70b6715976 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d052512e85532ca064b6095873f4f695f13cd565a7e2136e1408ee70b6715976->enter($__internal_d052512e85532ca064b6095873f4f695f13cd565a7e2136e1408ee70b6715976_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_d052512e85532ca064b6095873f4f695f13cd565a7e2136e1408ee70b6715976->leave($__internal_d052512e85532ca064b6095873f4f695f13cd565a7e2136e1408ee70b6715976_prof);

        
        $__internal_96229d23b4a146a770d4855af70c758cc5a39e9718724d794b30961da0f284d3->leave($__internal_96229d23b4a146a770d4855af70c758cc5a39e9718724d794b30961da0f284d3_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/Users/VictorChevalier/Documents/PHP/Symfony/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
