<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_516e269c86ccf40cbe577d545e1c637ea0a44deb19c6abcabb7b750b11e3d9f9 extends Twig_Template
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
        $__internal_0a7c483307c259bc7825d08cbdfcad1fe15c59f023aaa9ecc6b75ccf89078592 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a7c483307c259bc7825d08cbdfcad1fe15c59f023aaa9ecc6b75ccf89078592->enter($__internal_0a7c483307c259bc7825d08cbdfcad1fe15c59f023aaa9ecc6b75ccf89078592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_e34d79fc57b1c331c70faede5593ef8c4780a0c95fcd2beb3b71f3fd4b6abc91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e34d79fc57b1c331c70faede5593ef8c4780a0c95fcd2beb3b71f3fd4b6abc91->enter($__internal_e34d79fc57b1c331c70faede5593ef8c4780a0c95fcd2beb3b71f3fd4b6abc91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_0a7c483307c259bc7825d08cbdfcad1fe15c59f023aaa9ecc6b75ccf89078592->leave($__internal_0a7c483307c259bc7825d08cbdfcad1fe15c59f023aaa9ecc6b75ccf89078592_prof);

        
        $__internal_e34d79fc57b1c331c70faede5593ef8c4780a0c95fcd2beb3b71f3fd4b6abc91->leave($__internal_e34d79fc57b1c331c70faede5593ef8c4780a0c95fcd2beb3b71f3fd4b6abc91_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "/Users/VictorChevalier/Documents/PHP/SymfonyTP/SymfonyTP/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
