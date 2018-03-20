<?php

/* OCPlatformBundle:Advert:add.html.twig */
class __TwigTemplate_e472d7f441a21906c530f6f12e601c75a89787771bf3a2be9a3ed28cd2333fc7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:add.html.twig", 4);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_454b46ba9d04f4672c6c426943b64e87097eb80b867e8512347964b5d46f01f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_454b46ba9d04f4672c6c426943b64e87097eb80b867e8512347964b5d46f01f7->enter($__internal_454b46ba9d04f4672c6c426943b64e87097eb80b867e8512347964b5d46f01f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:add.html.twig"));

        $__internal_b69f0f70ed70511f8fb9d94a5403ac4a8a16f42ce8d9b4776bf9b6f87d6a9f62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b69f0f70ed70511f8fb9d94a5403ac4a8a16f42ce8d9b4776bf9b6f87d6a9f62->enter($__internal_b69f0f70ed70511f8fb9d94a5403ac4a8a16f42ce8d9b4776bf9b6f87d6a9f62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_454b46ba9d04f4672c6c426943b64e87097eb80b867e8512347964b5d46f01f7->leave($__internal_454b46ba9d04f4672c6c426943b64e87097eb80b867e8512347964b5d46f01f7_prof);

        
        $__internal_b69f0f70ed70511f8fb9d94a5403ac4a8a16f42ce8d9b4776bf9b6f87d6a9f62->leave($__internal_b69f0f70ed70511f8fb9d94a5403ac4a8a16f42ce8d9b4776bf9b6f87d6a9f62_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_175b86b64155d7d1750b3070b513e55532cf952d2b7ed6bfd0f3758e2c7db516 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_175b86b64155d7d1750b3070b513e55532cf952d2b7ed6bfd0f3758e2c7db516->enter($__internal_175b86b64155d7d1750b3070b513e55532cf952d2b7ed6bfd0f3758e2c7db516_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4cd2101f5d6a9a79127fb7bb2caacdd85ec8211e3432721a95f84f7433f31114 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cd2101f5d6a9a79127fb7bb2caacdd85ec8211e3432721a95f84f7433f31114->enter($__internal_4cd2101f5d6a9a79127fb7bb2caacdd85ec8211e3432721a95f84f7433f31114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
    <h2>Ajouter une annonce</h2>

    <div class=\"well\">
        ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
    </div>

";
        
        $__internal_4cd2101f5d6a9a79127fb7bb2caacdd85ec8211e3432721a95f84f7433f31114->leave($__internal_4cd2101f5d6a9a79127fb7bb2caacdd85ec8211e3432721a95f84f7433f31114_prof);

        
        $__internal_175b86b64155d7d1750b3070b513e55532cf952d2b7ed6bfd0f3758e2c7db516->leave($__internal_175b86b64155d7d1750b3070b513e55532cf952d2b7ed6bfd0f3758e2c7db516_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 11,  49 => 7,  40 => 6,  11 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{# src/OC/PlatformBundle/Resources/views/Advert/add.html.twig #}

{% extends \"OCPlatformBundle::layout.html.twig\" %}

{% block body %}

    <h2>Ajouter une annonce</h2>

    <div class=\"well\">
        {{ form(form) }}
    </div>

{% endblock %}", "OCPlatformBundle:Advert:add.html.twig", "/Users/VictorChevalier/Documents/PHP/SymfonyTP/SymfonyTP/src/OC/PlatformBundle/Resources/views/Advert/add.html.twig");
    }
}
