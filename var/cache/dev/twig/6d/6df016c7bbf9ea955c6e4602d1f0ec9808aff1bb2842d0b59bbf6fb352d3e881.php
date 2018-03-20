<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_5de615a0208f2685a1eb05868ee35ffcca2bd97cf086fb0fe3f060e0bbbff1de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
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
        $__internal_c93f637a12cb37dab2db4dd5bbb9171b0e9b156008a9895b5c256211933894d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c93f637a12cb37dab2db4dd5bbb9171b0e9b156008a9895b5c256211933894d7->enter($__internal_c93f637a12cb37dab2db4dd5bbb9171b0e9b156008a9895b5c256211933894d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_bf8b5cec9e70b21efcc05413d210e1eacd8cd0766f815ec06c1bbb1a6fb42b06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf8b5cec9e70b21efcc05413d210e1eacd8cd0766f815ec06c1bbb1a6fb42b06->enter($__internal_bf8b5cec9e70b21efcc05413d210e1eacd8cd0766f815ec06c1bbb1a6fb42b06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c93f637a12cb37dab2db4dd5bbb9171b0e9b156008a9895b5c256211933894d7->leave($__internal_c93f637a12cb37dab2db4dd5bbb9171b0e9b156008a9895b5c256211933894d7_prof);

        
        $__internal_bf8b5cec9e70b21efcc05413d210e1eacd8cd0766f815ec06c1bbb1a6fb42b06->leave($__internal_bf8b5cec9e70b21efcc05413d210e1eacd8cd0766f815ec06c1bbb1a6fb42b06_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0005c7b259f5c4d3a1671c0fbcd50d4881571b0a9004d0314d401a3e7780450b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0005c7b259f5c4d3a1671c0fbcd50d4881571b0a9004d0314d401a3e7780450b->enter($__internal_0005c7b259f5c4d3a1671c0fbcd50d4881571b0a9004d0314d401a3e7780450b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_05cb870236d10bfb640d74f11a235354ac9f02bc728d658f82e6656b11d4728b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05cb870236d10bfb640d74f11a235354ac9f02bc728d658f82e6656b11d4728b->enter($__internal_05cb870236d10bfb640d74f11a235354ac9f02bc728d658f82e6656b11d4728b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_05cb870236d10bfb640d74f11a235354ac9f02bc728d658f82e6656b11d4728b->leave($__internal_05cb870236d10bfb640d74f11a235354ac9f02bc728d658f82e6656b11d4728b_prof);

        
        $__internal_0005c7b259f5c4d3a1671c0fbcd50d4881571b0a9004d0314d401a3e7780450b->leave($__internal_0005c7b259f5c4d3a1671c0fbcd50d4881571b0a9004d0314d401a3e7780450b_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d5da74ad3fd7d174fe198c95bf34dfbfac0b2de6147056778b1235a38534e7e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5da74ad3fd7d174fe198c95bf34dfbfac0b2de6147056778b1235a38534e7e9->enter($__internal_d5da74ad3fd7d174fe198c95bf34dfbfac0b2de6147056778b1235a38534e7e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_971566c7e31b592b54ab6fa4515941af97fc6ba93ee23fa5deb88e598ddb8bbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_971566c7e31b592b54ab6fa4515941af97fc6ba93ee23fa5deb88e598ddb8bbb->enter($__internal_971566c7e31b592b54ab6fa4515941af97fc6ba93ee23fa5deb88e598ddb8bbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_971566c7e31b592b54ab6fa4515941af97fc6ba93ee23fa5deb88e598ddb8bbb->leave($__internal_971566c7e31b592b54ab6fa4515941af97fc6ba93ee23fa5deb88e598ddb8bbb_prof);

        
        $__internal_d5da74ad3fd7d174fe198c95bf34dfbfac0b2de6147056778b1235a38534e7e9->leave($__internal_d5da74ad3fd7d174fe198c95bf34dfbfac0b2de6147056778b1235a38534e7e9_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_48760880f86e8702622b618b9c26a533c5ade6196fe48b61c8574deddbfd733c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48760880f86e8702622b618b9c26a533c5ade6196fe48b61c8574deddbfd733c->enter($__internal_48760880f86e8702622b618b9c26a533c5ade6196fe48b61c8574deddbfd733c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_40c431ae3befbbb9f96406f7b604151c26c50b1860738701bd7810d52fc8e804 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40c431ae3befbbb9f96406f7b604151c26c50b1860738701bd7810d52fc8e804->enter($__internal_40c431ae3befbbb9f96406f7b604151c26c50b1860738701bd7810d52fc8e804_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_40c431ae3befbbb9f96406f7b604151c26c50b1860738701bd7810d52fc8e804->leave($__internal_40c431ae3befbbb9f96406f7b604151c26c50b1860738701bd7810d52fc8e804_prof);

        
        $__internal_48760880f86e8702622b618b9c26a533c5ade6196fe48b61c8574deddbfd733c->leave($__internal_48760880f86e8702622b618b9c26a533c5ade6196fe48b61c8574deddbfd733c_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
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
", "WebProfilerBundle:Collector:exception.html.twig", "/Users/VictorChevalier/Documents/PHP/SymfonyTP/SymfonyTP/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
