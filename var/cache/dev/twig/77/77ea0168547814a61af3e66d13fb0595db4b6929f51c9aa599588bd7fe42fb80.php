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
        $__internal_24ff3e492d072ea456da83f808229293bc126386740845caf1025505d91dfb8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24ff3e492d072ea456da83f808229293bc126386740845caf1025505d91dfb8b->enter($__internal_24ff3e492d072ea456da83f808229293bc126386740845caf1025505d91dfb8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_dea02d5c5ba2cc866ccb08727c47a8247442d685779844255ee0fc715585cf0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dea02d5c5ba2cc866ccb08727c47a8247442d685779844255ee0fc715585cf0b->enter($__internal_dea02d5c5ba2cc866ccb08727c47a8247442d685779844255ee0fc715585cf0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24ff3e492d072ea456da83f808229293bc126386740845caf1025505d91dfb8b->leave($__internal_24ff3e492d072ea456da83f808229293bc126386740845caf1025505d91dfb8b_prof);

        
        $__internal_dea02d5c5ba2cc866ccb08727c47a8247442d685779844255ee0fc715585cf0b->leave($__internal_dea02d5c5ba2cc866ccb08727c47a8247442d685779844255ee0fc715585cf0b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2aa33982df07c9511b957e6346523c2bbf5adfc58b15605e7fc597f3745a3e23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2aa33982df07c9511b957e6346523c2bbf5adfc58b15605e7fc597f3745a3e23->enter($__internal_2aa33982df07c9511b957e6346523c2bbf5adfc58b15605e7fc597f3745a3e23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ab78211c0586d3e00bd379080932da17b04963b9efb4a5086ed65b33b32ff4ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab78211c0586d3e00bd379080932da17b04963b9efb4a5086ed65b33b32ff4ca->enter($__internal_ab78211c0586d3e00bd379080932da17b04963b9efb4a5086ed65b33b32ff4ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ab78211c0586d3e00bd379080932da17b04963b9efb4a5086ed65b33b32ff4ca->leave($__internal_ab78211c0586d3e00bd379080932da17b04963b9efb4a5086ed65b33b32ff4ca_prof);

        
        $__internal_2aa33982df07c9511b957e6346523c2bbf5adfc58b15605e7fc597f3745a3e23->leave($__internal_2aa33982df07c9511b957e6346523c2bbf5adfc58b15605e7fc597f3745a3e23_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f316eb50ae23de93ba2116848c3ac5017c6747d8e16df14d021d7fbd47db9368 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f316eb50ae23de93ba2116848c3ac5017c6747d8e16df14d021d7fbd47db9368->enter($__internal_f316eb50ae23de93ba2116848c3ac5017c6747d8e16df14d021d7fbd47db9368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5fda4e2a13f9e2e8294983cb549eb72947d9ca54a6a147e9246672e99bedc019 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fda4e2a13f9e2e8294983cb549eb72947d9ca54a6a147e9246672e99bedc019->enter($__internal_5fda4e2a13f9e2e8294983cb549eb72947d9ca54a6a147e9246672e99bedc019_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5fda4e2a13f9e2e8294983cb549eb72947d9ca54a6a147e9246672e99bedc019->leave($__internal_5fda4e2a13f9e2e8294983cb549eb72947d9ca54a6a147e9246672e99bedc019_prof);

        
        $__internal_f316eb50ae23de93ba2116848c3ac5017c6747d8e16df14d021d7fbd47db9368->leave($__internal_f316eb50ae23de93ba2116848c3ac5017c6747d8e16df14d021d7fbd47db9368_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3a43cb4e38d6d7caea79a5bce670d2611f98010e6d3b9aff470022a7d07ffac6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a43cb4e38d6d7caea79a5bce670d2611f98010e6d3b9aff470022a7d07ffac6->enter($__internal_3a43cb4e38d6d7caea79a5bce670d2611f98010e6d3b9aff470022a7d07ffac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_eb0b45916d11ebeb0cec43f91ddac892e497cbca9630d4d0acdb459a0c507df7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb0b45916d11ebeb0cec43f91ddac892e497cbca9630d4d0acdb459a0c507df7->enter($__internal_eb0b45916d11ebeb0cec43f91ddac892e497cbca9630d4d0acdb459a0c507df7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_eb0b45916d11ebeb0cec43f91ddac892e497cbca9630d4d0acdb459a0c507df7->leave($__internal_eb0b45916d11ebeb0cec43f91ddac892e497cbca9630d4d0acdb459a0c507df7_prof);

        
        $__internal_3a43cb4e38d6d7caea79a5bce670d2611f98010e6d3b9aff470022a7d07ffac6->leave($__internal_3a43cb4e38d6d7caea79a5bce670d2611f98010e6d3b9aff470022a7d07ffac6_prof);

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
