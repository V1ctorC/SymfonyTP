<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_80510a88aaf2dd5f69b1390322441018455b468488e97e95a301dda3024907a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9d1ac0424671f587990d5d0b8092c39f54c1d0ed69cef3f5df977f4ec1f97296 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d1ac0424671f587990d5d0b8092c39f54c1d0ed69cef3f5df977f4ec1f97296->enter($__internal_9d1ac0424671f587990d5d0b8092c39f54c1d0ed69cef3f5df977f4ec1f97296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_ad599ffc0ab1dd2ed469d5e92aaddcf8f9f9bf762ac74b84f572113df82b152c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad599ffc0ab1dd2ed469d5e92aaddcf8f9f9bf762ac74b84f572113df82b152c->enter($__internal_ad599ffc0ab1dd2ed469d5e92aaddcf8f9f9bf762ac74b84f572113df82b152c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d1ac0424671f587990d5d0b8092c39f54c1d0ed69cef3f5df977f4ec1f97296->leave($__internal_9d1ac0424671f587990d5d0b8092c39f54c1d0ed69cef3f5df977f4ec1f97296_prof);

        
        $__internal_ad599ffc0ab1dd2ed469d5e92aaddcf8f9f9bf762ac74b84f572113df82b152c->leave($__internal_ad599ffc0ab1dd2ed469d5e92aaddcf8f9f9bf762ac74b84f572113df82b152c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_58fcdf88646253be08c2396934e9edfb53ef2fc996e9883b956a4713be77412d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58fcdf88646253be08c2396934e9edfb53ef2fc996e9883b956a4713be77412d->enter($__internal_58fcdf88646253be08c2396934e9edfb53ef2fc996e9883b956a4713be77412d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_597e480d2d53d2326193a1c17d2ae5330028fd2e644c06abd95777c365329152 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_597e480d2d53d2326193a1c17d2ae5330028fd2e644c06abd95777c365329152->enter($__internal_597e480d2d53d2326193a1c17d2ae5330028fd2e644c06abd95777c365329152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_597e480d2d53d2326193a1c17d2ae5330028fd2e644c06abd95777c365329152->leave($__internal_597e480d2d53d2326193a1c17d2ae5330028fd2e644c06abd95777c365329152_prof);

        
        $__internal_58fcdf88646253be08c2396934e9edfb53ef2fc996e9883b956a4713be77412d->leave($__internal_58fcdf88646253be08c2396934e9edfb53ef2fc996e9883b956a4713be77412d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4ba5689dd789ec8dc9edb310c1c19c7a43311ebf49b5766102c69c1d04aec239 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ba5689dd789ec8dc9edb310c1c19c7a43311ebf49b5766102c69c1d04aec239->enter($__internal_4ba5689dd789ec8dc9edb310c1c19c7a43311ebf49b5766102c69c1d04aec239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4f3d1aa8025a1d61507d5aadc3cc6d526dbd7733598f5bc2a5c73c68838ae2b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f3d1aa8025a1d61507d5aadc3cc6d526dbd7733598f5bc2a5c73c68838ae2b1->enter($__internal_4f3d1aa8025a1d61507d5aadc3cc6d526dbd7733598f5bc2a5c73c68838ae2b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_4f3d1aa8025a1d61507d5aadc3cc6d526dbd7733598f5bc2a5c73c68838ae2b1->leave($__internal_4f3d1aa8025a1d61507d5aadc3cc6d526dbd7733598f5bc2a5c73c68838ae2b1_prof);

        
        $__internal_4ba5689dd789ec8dc9edb310c1c19c7a43311ebf49b5766102c69c1d04aec239->leave($__internal_4ba5689dd789ec8dc9edb310c1c19c7a43311ebf49b5766102c69c1d04aec239_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/Users/VictorChevalier/Documents/PHP/SymfonyTP/SymfonyTP/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
