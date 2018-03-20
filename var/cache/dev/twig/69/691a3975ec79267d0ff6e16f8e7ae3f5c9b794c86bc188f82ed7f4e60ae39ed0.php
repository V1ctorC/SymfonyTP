<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_9ccef2ccdcd63730e4b49d5d36d4335b8121e225508512d987be3b6fceeda176 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
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
        $__internal_910e04d35c39bb1579400f8df1a9fd91b2b9de9cf4047cfa444e99d2d5857432 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_910e04d35c39bb1579400f8df1a9fd91b2b9de9cf4047cfa444e99d2d5857432->enter($__internal_910e04d35c39bb1579400f8df1a9fd91b2b9de9cf4047cfa444e99d2d5857432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_136e9efb6c28cf1d945e90d31d7d10311c4918f558e706d09853102f24e8ca08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_136e9efb6c28cf1d945e90d31d7d10311c4918f558e706d09853102f24e8ca08->enter($__internal_136e9efb6c28cf1d945e90d31d7d10311c4918f558e706d09853102f24e8ca08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_910e04d35c39bb1579400f8df1a9fd91b2b9de9cf4047cfa444e99d2d5857432->leave($__internal_910e04d35c39bb1579400f8df1a9fd91b2b9de9cf4047cfa444e99d2d5857432_prof);

        
        $__internal_136e9efb6c28cf1d945e90d31d7d10311c4918f558e706d09853102f24e8ca08->leave($__internal_136e9efb6c28cf1d945e90d31d7d10311c4918f558e706d09853102f24e8ca08_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5093f91194939ab988606f9db8c226f9409f8b80437c9b7c49f25fb3ff93bdbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5093f91194939ab988606f9db8c226f9409f8b80437c9b7c49f25fb3ff93bdbe->enter($__internal_5093f91194939ab988606f9db8c226f9409f8b80437c9b7c49f25fb3ff93bdbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_4cf13c2c6e8f728bb8b659444bd50c81abb4df74ff57bda1cd40607c17c525ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cf13c2c6e8f728bb8b659444bd50c81abb4df74ff57bda1cd40607c17c525ae->enter($__internal_4cf13c2c6e8f728bb8b659444bd50c81abb4df74ff57bda1cd40607c17c525ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_4cf13c2c6e8f728bb8b659444bd50c81abb4df74ff57bda1cd40607c17c525ae->leave($__internal_4cf13c2c6e8f728bb8b659444bd50c81abb4df74ff57bda1cd40607c17c525ae_prof);

        
        $__internal_5093f91194939ab988606f9db8c226f9409f8b80437c9b7c49f25fb3ff93bdbe->leave($__internal_5093f91194939ab988606f9db8c226f9409f8b80437c9b7c49f25fb3ff93bdbe_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
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
", "WebProfilerBundle:Collector:ajax.html.twig", "/Users/VictorChevalier/Documents/PHP/SymfonyTP/SymfonyTP/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
