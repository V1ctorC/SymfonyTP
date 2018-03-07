<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a45254030d9cc98b662ca4ab41f1a18fca407871221561dd5b3a8f7c6d58d3e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_4c5896d5c08f01a8e804dfed0f05b9423ef31b5c006499828eedff6162c55689 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c5896d5c08f01a8e804dfed0f05b9423ef31b5c006499828eedff6162c55689->enter($__internal_4c5896d5c08f01a8e804dfed0f05b9423ef31b5c006499828eedff6162c55689_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_8c4295b6b821ba687f1f8e759080970578c9bc04f76ae2460810784c489811c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c4295b6b821ba687f1f8e759080970578c9bc04f76ae2460810784c489811c9->enter($__internal_8c4295b6b821ba687f1f8e759080970578c9bc04f76ae2460810784c489811c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c5896d5c08f01a8e804dfed0f05b9423ef31b5c006499828eedff6162c55689->leave($__internal_4c5896d5c08f01a8e804dfed0f05b9423ef31b5c006499828eedff6162c55689_prof);

        
        $__internal_8c4295b6b821ba687f1f8e759080970578c9bc04f76ae2460810784c489811c9->leave($__internal_8c4295b6b821ba687f1f8e759080970578c9bc04f76ae2460810784c489811c9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a333f9445718032cef0eb70c7c52ec9fe6b8cd19cb2a6982fbcc1d552ce9b720 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a333f9445718032cef0eb70c7c52ec9fe6b8cd19cb2a6982fbcc1d552ce9b720->enter($__internal_a333f9445718032cef0eb70c7c52ec9fe6b8cd19cb2a6982fbcc1d552ce9b720_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e88a8f1ad2fcdb1b63ffbfd6c84b05108e792ab7712eb38d0d40b9cb10c1372e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e88a8f1ad2fcdb1b63ffbfd6c84b05108e792ab7712eb38d0d40b9cb10c1372e->enter($__internal_e88a8f1ad2fcdb1b63ffbfd6c84b05108e792ab7712eb38d0d40b9cb10c1372e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e88a8f1ad2fcdb1b63ffbfd6c84b05108e792ab7712eb38d0d40b9cb10c1372e->leave($__internal_e88a8f1ad2fcdb1b63ffbfd6c84b05108e792ab7712eb38d0d40b9cb10c1372e_prof);

        
        $__internal_a333f9445718032cef0eb70c7c52ec9fe6b8cd19cb2a6982fbcc1d552ce9b720->leave($__internal_a333f9445718032cef0eb70c7c52ec9fe6b8cd19cb2a6982fbcc1d552ce9b720_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_67f29f323dc0077d81fb4ac7646711dedb4f10312b752417c5029bf1fcf06b26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67f29f323dc0077d81fb4ac7646711dedb4f10312b752417c5029bf1fcf06b26->enter($__internal_67f29f323dc0077d81fb4ac7646711dedb4f10312b752417c5029bf1fcf06b26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5b023fe7ea839955cacb34a6b6cc23cf0efbcc9e12b26d704ce4d7d2c14d906f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b023fe7ea839955cacb34a6b6cc23cf0efbcc9e12b26d704ce4d7d2c14d906f->enter($__internal_5b023fe7ea839955cacb34a6b6cc23cf0efbcc9e12b26d704ce4d7d2c14d906f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5b023fe7ea839955cacb34a6b6cc23cf0efbcc9e12b26d704ce4d7d2c14d906f->leave($__internal_5b023fe7ea839955cacb34a6b6cc23cf0efbcc9e12b26d704ce4d7d2c14d906f_prof);

        
        $__internal_67f29f323dc0077d81fb4ac7646711dedb4f10312b752417c5029bf1fcf06b26->leave($__internal_67f29f323dc0077d81fb4ac7646711dedb4f10312b752417c5029bf1fcf06b26_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4eab4e20aa0913c8edd4a2ee24594d0e091a8106802eebb74e02c84b6cc1aa44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4eab4e20aa0913c8edd4a2ee24594d0e091a8106802eebb74e02c84b6cc1aa44->enter($__internal_4eab4e20aa0913c8edd4a2ee24594d0e091a8106802eebb74e02c84b6cc1aa44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b66e9f1593e886cc4357e5ee6ca8c70cf5fd421aee6286746a0cb3760d5bad6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b66e9f1593e886cc4357e5ee6ca8c70cf5fd421aee6286746a0cb3760d5bad6e->enter($__internal_b66e9f1593e886cc4357e5ee6ca8c70cf5fd421aee6286746a0cb3760d5bad6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b66e9f1593e886cc4357e5ee6ca8c70cf5fd421aee6286746a0cb3760d5bad6e->leave($__internal_b66e9f1593e886cc4357e5ee6ca8c70cf5fd421aee6286746a0cb3760d5bad6e_prof);

        
        $__internal_4eab4e20aa0913c8edd4a2ee24594d0e091a8106802eebb74e02c84b6cc1aa44->leave($__internal_4eab4e20aa0913c8edd4a2ee24594d0e091a8106802eebb74e02c84b6cc1aa44_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/VictorChevalier/Documents/PHP/SymfonyTP/SymfonyTP/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
