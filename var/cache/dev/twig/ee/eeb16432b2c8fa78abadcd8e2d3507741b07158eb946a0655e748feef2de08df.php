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
        $__internal_0232fa703485aa4f9eae3c104839f47b2f9dd984b7cf53729aa2237483b8c873 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0232fa703485aa4f9eae3c104839f47b2f9dd984b7cf53729aa2237483b8c873->enter($__internal_0232fa703485aa4f9eae3c104839f47b2f9dd984b7cf53729aa2237483b8c873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_0b13456dd4f6a8ac7b0171cc8f70ff581f5d50940dcf6a7d6c27b8b2cd023dbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b13456dd4f6a8ac7b0171cc8f70ff581f5d50940dcf6a7d6c27b8b2cd023dbe->enter($__internal_0b13456dd4f6a8ac7b0171cc8f70ff581f5d50940dcf6a7d6c27b8b2cd023dbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0232fa703485aa4f9eae3c104839f47b2f9dd984b7cf53729aa2237483b8c873->leave($__internal_0232fa703485aa4f9eae3c104839f47b2f9dd984b7cf53729aa2237483b8c873_prof);

        
        $__internal_0b13456dd4f6a8ac7b0171cc8f70ff581f5d50940dcf6a7d6c27b8b2cd023dbe->leave($__internal_0b13456dd4f6a8ac7b0171cc8f70ff581f5d50940dcf6a7d6c27b8b2cd023dbe_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_48736eb060099bf0c9631a2c5fafeae9ed183b1efb3060eaa124ecab0bf97fb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48736eb060099bf0c9631a2c5fafeae9ed183b1efb3060eaa124ecab0bf97fb2->enter($__internal_48736eb060099bf0c9631a2c5fafeae9ed183b1efb3060eaa124ecab0bf97fb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_471cfc74df69ad0e8b74f7dbd8339a1694533fae00273a0e30b2cf24d20ca320 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_471cfc74df69ad0e8b74f7dbd8339a1694533fae00273a0e30b2cf24d20ca320->enter($__internal_471cfc74df69ad0e8b74f7dbd8339a1694533fae00273a0e30b2cf24d20ca320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_471cfc74df69ad0e8b74f7dbd8339a1694533fae00273a0e30b2cf24d20ca320->leave($__internal_471cfc74df69ad0e8b74f7dbd8339a1694533fae00273a0e30b2cf24d20ca320_prof);

        
        $__internal_48736eb060099bf0c9631a2c5fafeae9ed183b1efb3060eaa124ecab0bf97fb2->leave($__internal_48736eb060099bf0c9631a2c5fafeae9ed183b1efb3060eaa124ecab0bf97fb2_prof);

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
