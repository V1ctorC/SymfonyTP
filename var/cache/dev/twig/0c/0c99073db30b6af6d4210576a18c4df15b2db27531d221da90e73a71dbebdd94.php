<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_b0972ea85d093d38911027a775a817705c22243169e9b5875e4b3eceefab67c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_284653f15bfbc653277df9e3baf512bf60de4837a14196dea0a315c191d04ae9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_284653f15bfbc653277df9e3baf512bf60de4837a14196dea0a315c191d04ae9->enter($__internal_284653f15bfbc653277df9e3baf512bf60de4837a14196dea0a315c191d04ae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_7c4cc87e6640daea84d04701a9834f9556b5ecd6fd5876a846ecd8bd7edd3cbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c4cc87e6640daea84d04701a9834f9556b5ecd6fd5876a846ecd8bd7edd3cbb->enter($__internal_7c4cc87e6640daea84d04701a9834f9556b5ecd6fd5876a846ecd8bd7edd3cbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_284653f15bfbc653277df9e3baf512bf60de4837a14196dea0a315c191d04ae9->leave($__internal_284653f15bfbc653277df9e3baf512bf60de4837a14196dea0a315c191d04ae9_prof);

        
        $__internal_7c4cc87e6640daea84d04701a9834f9556b5ecd6fd5876a846ecd8bd7edd3cbb->leave($__internal_7c4cc87e6640daea84d04701a9834f9556b5ecd6fd5876a846ecd8bd7edd3cbb_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a763a787de2a9621102be99412ca72fb82702a4fe5c07c03a38bae160d737827 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a763a787de2a9621102be99412ca72fb82702a4fe5c07c03a38bae160d737827->enter($__internal_a763a787de2a9621102be99412ca72fb82702a4fe5c07c03a38bae160d737827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_7276bfe5ecf2255891cd6ce5a7a882de1788345d550c14c42121c3a1a993bde6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7276bfe5ecf2255891cd6ce5a7a882de1788345d550c14c42121c3a1a993bde6->enter($__internal_7276bfe5ecf2255891cd6ce5a7a882de1788345d550c14c42121c3a1a993bde6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7276bfe5ecf2255891cd6ce5a7a882de1788345d550c14c42121c3a1a993bde6->leave($__internal_7276bfe5ecf2255891cd6ce5a7a882de1788345d550c14c42121c3a1a993bde6_prof);

        
        $__internal_a763a787de2a9621102be99412ca72fb82702a4fe5c07c03a38bae160d737827->leave($__internal_a763a787de2a9621102be99412ca72fb82702a4fe5c07c03a38bae160d737827_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3bcdde9b1983ef72cf79a460076e7c965511c35ad0eddebf1ad81f01d08a7a47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bcdde9b1983ef72cf79a460076e7c965511c35ad0eddebf1ad81f01d08a7a47->enter($__internal_3bcdde9b1983ef72cf79a460076e7c965511c35ad0eddebf1ad81f01d08a7a47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3f45d93e0d99df7a83485bbb3b96ab534503e66fead82f4016bc92b9946c3547 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f45d93e0d99df7a83485bbb3b96ab534503e66fead82f4016bc92b9946c3547->enter($__internal_3f45d93e0d99df7a83485bbb3b96ab534503e66fead82f4016bc92b9946c3547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3f45d93e0d99df7a83485bbb3b96ab534503e66fead82f4016bc92b9946c3547->leave($__internal_3f45d93e0d99df7a83485bbb3b96ab534503e66fead82f4016bc92b9946c3547_prof);

        
        $__internal_3bcdde9b1983ef72cf79a460076e7c965511c35ad0eddebf1ad81f01d08a7a47->leave($__internal_3bcdde9b1983ef72cf79a460076e7c965511c35ad0eddebf1ad81f01d08a7a47_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6ce9cb471fadca890a3459be817e1df5a6f39721ca94fffa6af89301d5bd1476 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ce9cb471fadca890a3459be817e1df5a6f39721ca94fffa6af89301d5bd1476->enter($__internal_6ce9cb471fadca890a3459be817e1df5a6f39721ca94fffa6af89301d5bd1476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_274827d1c9e4562018a73de31baa45c26f3924fdf734c3c5ffe5b2969f8c0ee4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_274827d1c9e4562018a73de31baa45c26f3924fdf734c3c5ffe5b2969f8c0ee4->enter($__internal_274827d1c9e4562018a73de31baa45c26f3924fdf734c3c5ffe5b2969f8c0ee4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_274827d1c9e4562018a73de31baa45c26f3924fdf734c3c5ffe5b2969f8c0ee4->leave($__internal_274827d1c9e4562018a73de31baa45c26f3924fdf734c3c5ffe5b2969f8c0ee4_prof);

        
        $__internal_6ce9cb471fadca890a3459be817e1df5a6f39721ca94fffa6af89301d5bd1476->leave($__internal_6ce9cb471fadca890a3459be817e1df5a6f39721ca94fffa6af89301d5bd1476_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "/Users/VictorChevalier/Documents/PHP/SymfonyTP/SymfonyTP/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
