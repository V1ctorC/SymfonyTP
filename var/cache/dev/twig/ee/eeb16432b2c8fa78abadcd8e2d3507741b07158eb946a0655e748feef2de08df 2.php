<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_b47fe2c892026d47628c0b02ffcfb5295d5601f5ca7303c90906caacf263f3fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d72bad8279faf930a5e632354255312cf5ce1863920af8b15dfeabb05278b3b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d72bad8279faf930a5e632354255312cf5ce1863920af8b15dfeabb05278b3b2->enter($__internal_d72bad8279faf930a5e632354255312cf5ce1863920af8b15dfeabb05278b3b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_bd91f304f0f18390b1359f16b421760dd8ef5bc58eacc78c9ff9b949acafd539 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd91f304f0f18390b1359f16b421760dd8ef5bc58eacc78c9ff9b949acafd539->enter($__internal_bd91f304f0f18390b1359f16b421760dd8ef5bc58eacc78c9ff9b949acafd539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d72bad8279faf930a5e632354255312cf5ce1863920af8b15dfeabb05278b3b2->leave($__internal_d72bad8279faf930a5e632354255312cf5ce1863920af8b15dfeabb05278b3b2_prof);

        
        $__internal_bd91f304f0f18390b1359f16b421760dd8ef5bc58eacc78c9ff9b949acafd539->leave($__internal_bd91f304f0f18390b1359f16b421760dd8ef5bc58eacc78c9ff9b949acafd539_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9c9a5c96a56da98035fd64da5a22d0f02965f541a8851cba9d157bbed45adb70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c9a5c96a56da98035fd64da5a22d0f02965f541a8851cba9d157bbed45adb70->enter($__internal_9c9a5c96a56da98035fd64da5a22d0f02965f541a8851cba9d157bbed45adb70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_8c22395b4680da34f8fc6e1b403db0d5f1cf59c84a6b5081ebb5c32b0fd2c518 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c22395b4680da34f8fc6e1b403db0d5f1cf59c84a6b5081ebb5c32b0fd2c518->enter($__internal_8c22395b4680da34f8fc6e1b403db0d5f1cf59c84a6b5081ebb5c32b0fd2c518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_8c22395b4680da34f8fc6e1b403db0d5f1cf59c84a6b5081ebb5c32b0fd2c518->leave($__internal_8c22395b4680da34f8fc6e1b403db0d5f1cf59c84a6b5081ebb5c32b0fd2c518_prof);

        
        $__internal_9c9a5c96a56da98035fd64da5a22d0f02965f541a8851cba9d157bbed45adb70->leave($__internal_9c9a5c96a56da98035fd64da5a22d0f02965f541a8851cba9d157bbed45adb70_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/Users/VictorChevalier/Documents/PHP/SymfonyTP/SymfonyTP/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
