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
        $__internal_b0c1baee5291ac10817285f702cb43b3b0fdd881036d92b2f7289271a2d8767f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0c1baee5291ac10817285f702cb43b3b0fdd881036d92b2f7289271a2d8767f->enter($__internal_b0c1baee5291ac10817285f702cb43b3b0fdd881036d92b2f7289271a2d8767f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_af1a49f790e938d1ad0861ab4896b7caa7dcb989534e54aea83c6da84490d6d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af1a49f790e938d1ad0861ab4896b7caa7dcb989534e54aea83c6da84490d6d2->enter($__internal_af1a49f790e938d1ad0861ab4896b7caa7dcb989534e54aea83c6da84490d6d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b0c1baee5291ac10817285f702cb43b3b0fdd881036d92b2f7289271a2d8767f->leave($__internal_b0c1baee5291ac10817285f702cb43b3b0fdd881036d92b2f7289271a2d8767f_prof);

        
        $__internal_af1a49f790e938d1ad0861ab4896b7caa7dcb989534e54aea83c6da84490d6d2->leave($__internal_af1a49f790e938d1ad0861ab4896b7caa7dcb989534e54aea83c6da84490d6d2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a9ce32dc8a50a423cad8c6f77226ab2abf8f5d766f947fc64dc968770065ffda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9ce32dc8a50a423cad8c6f77226ab2abf8f5d766f947fc64dc968770065ffda->enter($__internal_a9ce32dc8a50a423cad8c6f77226ab2abf8f5d766f947fc64dc968770065ffda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_2a35adcdbaca647776ea3282294f134458d06f49f281f1ffc188e49ac6f99e5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a35adcdbaca647776ea3282294f134458d06f49f281f1ffc188e49ac6f99e5f->enter($__internal_2a35adcdbaca647776ea3282294f134458d06f49f281f1ffc188e49ac6f99e5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2a35adcdbaca647776ea3282294f134458d06f49f281f1ffc188e49ac6f99e5f->leave($__internal_2a35adcdbaca647776ea3282294f134458d06f49f281f1ffc188e49ac6f99e5f_prof);

        
        $__internal_a9ce32dc8a50a423cad8c6f77226ab2abf8f5d766f947fc64dc968770065ffda->leave($__internal_a9ce32dc8a50a423cad8c6f77226ab2abf8f5d766f947fc64dc968770065ffda_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_64c9b72c0b9babcd7187c0d77a491378a4292cedbabbd3f4753daa1b9e2ca866 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64c9b72c0b9babcd7187c0d77a491378a4292cedbabbd3f4753daa1b9e2ca866->enter($__internal_64c9b72c0b9babcd7187c0d77a491378a4292cedbabbd3f4753daa1b9e2ca866_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3dee93cdb741f949a40c4916b68b6adb7df4c1aad2a52c85e2a5f0b7b9270ead = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dee93cdb741f949a40c4916b68b6adb7df4c1aad2a52c85e2a5f0b7b9270ead->enter($__internal_3dee93cdb741f949a40c4916b68b6adb7df4c1aad2a52c85e2a5f0b7b9270ead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3dee93cdb741f949a40c4916b68b6adb7df4c1aad2a52c85e2a5f0b7b9270ead->leave($__internal_3dee93cdb741f949a40c4916b68b6adb7df4c1aad2a52c85e2a5f0b7b9270ead_prof);

        
        $__internal_64c9b72c0b9babcd7187c0d77a491378a4292cedbabbd3f4753daa1b9e2ca866->leave($__internal_64c9b72c0b9babcd7187c0d77a491378a4292cedbabbd3f4753daa1b9e2ca866_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9c1c51d025c7efbbaab5f8d40821bc422631d278a5dd6030cb07c5dc8bf8a362 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c1c51d025c7efbbaab5f8d40821bc422631d278a5dd6030cb07c5dc8bf8a362->enter($__internal_9c1c51d025c7efbbaab5f8d40821bc422631d278a5dd6030cb07c5dc8bf8a362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b47f333efdda5338dabdee139c2cec9d2e15d7d5b3f632268858f4ebc673ede6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b47f333efdda5338dabdee139c2cec9d2e15d7d5b3f632268858f4ebc673ede6->enter($__internal_b47f333efdda5338dabdee139c2cec9d2e15d7d5b3f632268858f4ebc673ede6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b47f333efdda5338dabdee139c2cec9d2e15d7d5b3f632268858f4ebc673ede6->leave($__internal_b47f333efdda5338dabdee139c2cec9d2e15d7d5b3f632268858f4ebc673ede6_prof);

        
        $__internal_9c1c51d025c7efbbaab5f8d40821bc422631d278a5dd6030cb07c5dc8bf8a362->leave($__internal_9c1c51d025c7efbbaab5f8d40821bc422631d278a5dd6030cb07c5dc8bf8a362_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/Users/VictorChevalier/Documents/PHP/Symfony/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
