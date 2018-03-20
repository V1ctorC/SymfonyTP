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
        $__internal_ba1f1ad5e5a130e63dca118659840806437951fbf72d0fafe11198606ad0ed13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba1f1ad5e5a130e63dca118659840806437951fbf72d0fafe11198606ad0ed13->enter($__internal_ba1f1ad5e5a130e63dca118659840806437951fbf72d0fafe11198606ad0ed13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_e7a546a38dc38ea63001cefc4fc31fdafc56ec1910636c5a028894805261e07f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7a546a38dc38ea63001cefc4fc31fdafc56ec1910636c5a028894805261e07f->enter($__internal_e7a546a38dc38ea63001cefc4fc31fdafc56ec1910636c5a028894805261e07f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba1f1ad5e5a130e63dca118659840806437951fbf72d0fafe11198606ad0ed13->leave($__internal_ba1f1ad5e5a130e63dca118659840806437951fbf72d0fafe11198606ad0ed13_prof);

        
        $__internal_e7a546a38dc38ea63001cefc4fc31fdafc56ec1910636c5a028894805261e07f->leave($__internal_e7a546a38dc38ea63001cefc4fc31fdafc56ec1910636c5a028894805261e07f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bf0ebba37f15639b67875cd000684c5892e671f2e4ed96cc5285e471e1d3ec2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf0ebba37f15639b67875cd000684c5892e671f2e4ed96cc5285e471e1d3ec2e->enter($__internal_bf0ebba37f15639b67875cd000684c5892e671f2e4ed96cc5285e471e1d3ec2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_aa9507e056a697cdb47593c115db33a74e3720557c85908f16dfbcf9bc9e7742 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa9507e056a697cdb47593c115db33a74e3720557c85908f16dfbcf9bc9e7742->enter($__internal_aa9507e056a697cdb47593c115db33a74e3720557c85908f16dfbcf9bc9e7742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_aa9507e056a697cdb47593c115db33a74e3720557c85908f16dfbcf9bc9e7742->leave($__internal_aa9507e056a697cdb47593c115db33a74e3720557c85908f16dfbcf9bc9e7742_prof);

        
        $__internal_bf0ebba37f15639b67875cd000684c5892e671f2e4ed96cc5285e471e1d3ec2e->leave($__internal_bf0ebba37f15639b67875cd000684c5892e671f2e4ed96cc5285e471e1d3ec2e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c3ca9cc7f6ae873a16837d74344abaab63d299bed1f34abfe342f064e945a5bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3ca9cc7f6ae873a16837d74344abaab63d299bed1f34abfe342f064e945a5bf->enter($__internal_c3ca9cc7f6ae873a16837d74344abaab63d299bed1f34abfe342f064e945a5bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_940aed719e0fe899a4c94eb741bafbf9b7c0238222c7b773848aed219818174b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_940aed719e0fe899a4c94eb741bafbf9b7c0238222c7b773848aed219818174b->enter($__internal_940aed719e0fe899a4c94eb741bafbf9b7c0238222c7b773848aed219818174b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_940aed719e0fe899a4c94eb741bafbf9b7c0238222c7b773848aed219818174b->leave($__internal_940aed719e0fe899a4c94eb741bafbf9b7c0238222c7b773848aed219818174b_prof);

        
        $__internal_c3ca9cc7f6ae873a16837d74344abaab63d299bed1f34abfe342f064e945a5bf->leave($__internal_c3ca9cc7f6ae873a16837d74344abaab63d299bed1f34abfe342f064e945a5bf_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c39396e730e7146750b4e59f8c5915d22915e71329330f15e2624422efc0f072 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c39396e730e7146750b4e59f8c5915d22915e71329330f15e2624422efc0f072->enter($__internal_c39396e730e7146750b4e59f8c5915d22915e71329330f15e2624422efc0f072_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e99285cf320425c2493d5e67cdc81a379bf56f2b1d41842cde9a84b322fff42d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e99285cf320425c2493d5e67cdc81a379bf56f2b1d41842cde9a84b322fff42d->enter($__internal_e99285cf320425c2493d5e67cdc81a379bf56f2b1d41842cde9a84b322fff42d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e99285cf320425c2493d5e67cdc81a379bf56f2b1d41842cde9a84b322fff42d->leave($__internal_e99285cf320425c2493d5e67cdc81a379bf56f2b1d41842cde9a84b322fff42d_prof);

        
        $__internal_c39396e730e7146750b4e59f8c5915d22915e71329330f15e2624422efc0f072->leave($__internal_c39396e730e7146750b4e59f8c5915d22915e71329330f15e2624422efc0f072_prof);

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
