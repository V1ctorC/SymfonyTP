<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_8036970b2f6c4eebcb26741f343431e46198547e170ecb11af2f9ef3d6502a5f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
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
        $__internal_29b81dc96550189cde3f7446b6587c82060d04edc9abece7fcda0643a1535f7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29b81dc96550189cde3f7446b6587c82060d04edc9abece7fcda0643a1535f7a->enter($__internal_29b81dc96550189cde3f7446b6587c82060d04edc9abece7fcda0643a1535f7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_13d8204bbc75a85b1f9d7228746c0fda1b3a7016ae5faa8e1ccb7b1f1e450143 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13d8204bbc75a85b1f9d7228746c0fda1b3a7016ae5faa8e1ccb7b1f1e450143->enter($__internal_13d8204bbc75a85b1f9d7228746c0fda1b3a7016ae5faa8e1ccb7b1f1e450143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29b81dc96550189cde3f7446b6587c82060d04edc9abece7fcda0643a1535f7a->leave($__internal_29b81dc96550189cde3f7446b6587c82060d04edc9abece7fcda0643a1535f7a_prof);

        
        $__internal_13d8204bbc75a85b1f9d7228746c0fda1b3a7016ae5faa8e1ccb7b1f1e450143->leave($__internal_13d8204bbc75a85b1f9d7228746c0fda1b3a7016ae5faa8e1ccb7b1f1e450143_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fcafc3a0e5a2af75a7ca17ebc30692a0a2fc149e8d7981932da96ddaa7d1236a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcafc3a0e5a2af75a7ca17ebc30692a0a2fc149e8d7981932da96ddaa7d1236a->enter($__internal_fcafc3a0e5a2af75a7ca17ebc30692a0a2fc149e8d7981932da96ddaa7d1236a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_31c0fd4b4f029d60a4bb09f13227ec59af5c5c96138597670a4b1a58ce4db0f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31c0fd4b4f029d60a4bb09f13227ec59af5c5c96138597670a4b1a58ce4db0f2->enter($__internal_31c0fd4b4f029d60a4bb09f13227ec59af5c5c96138597670a4b1a58ce4db0f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_31c0fd4b4f029d60a4bb09f13227ec59af5c5c96138597670a4b1a58ce4db0f2->leave($__internal_31c0fd4b4f029d60a4bb09f13227ec59af5c5c96138597670a4b1a58ce4db0f2_prof);

        
        $__internal_fcafc3a0e5a2af75a7ca17ebc30692a0a2fc149e8d7981932da96ddaa7d1236a->leave($__internal_fcafc3a0e5a2af75a7ca17ebc30692a0a2fc149e8d7981932da96ddaa7d1236a_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_073adedb08cfe1c9a90b6e69a4bb503d542911b2d1172fc1429cf0b524cccc4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_073adedb08cfe1c9a90b6e69a4bb503d542911b2d1172fc1429cf0b524cccc4b->enter($__internal_073adedb08cfe1c9a90b6e69a4bb503d542911b2d1172fc1429cf0b524cccc4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_00c33fd6b4fdd938ba1ece65dc66eaf5907cea00a5f4277754539322184ccf33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00c33fd6b4fdd938ba1ece65dc66eaf5907cea00a5f4277754539322184ccf33->enter($__internal_00c33fd6b4fdd938ba1ece65dc66eaf5907cea00a5f4277754539322184ccf33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_00c33fd6b4fdd938ba1ece65dc66eaf5907cea00a5f4277754539322184ccf33->leave($__internal_00c33fd6b4fdd938ba1ece65dc66eaf5907cea00a5f4277754539322184ccf33_prof);

        
        $__internal_073adedb08cfe1c9a90b6e69a4bb503d542911b2d1172fc1429cf0b524cccc4b->leave($__internal_073adedb08cfe1c9a90b6e69a4bb503d542911b2d1172fc1429cf0b524cccc4b_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d5ab989d8f546d51cec8692bebfe6bb158fae7d682940efb53a4addd2558f6f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5ab989d8f546d51cec8692bebfe6bb158fae7d682940efb53a4addd2558f6f4->enter($__internal_d5ab989d8f546d51cec8692bebfe6bb158fae7d682940efb53a4addd2558f6f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2626978ecdea65968473832d7f0d261299f157a8fe011e697d0ad40bdb05851f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2626978ecdea65968473832d7f0d261299f157a8fe011e697d0ad40bdb05851f->enter($__internal_2626978ecdea65968473832d7f0d261299f157a8fe011e697d0ad40bdb05851f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_2626978ecdea65968473832d7f0d261299f157a8fe011e697d0ad40bdb05851f->leave($__internal_2626978ecdea65968473832d7f0d261299f157a8fe011e697d0ad40bdb05851f_prof);

        
        $__internal_d5ab989d8f546d51cec8692bebfe6bb158fae7d682940efb53a4addd2558f6f4->leave($__internal_d5ab989d8f546d51cec8692bebfe6bb158fae7d682940efb53a4addd2558f6f4_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
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
", "@WebProfiler/Collector/exception.html.twig", "/Users/VictorChevalier/Documents/PHP/SymfonyTP/SymfonyTP/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
