<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_80c55c5087d3696954d172ff4a55ff231052f4df06063093bf12476658e03caf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_69159da0da23f31193fddd0831f3baa2b58e390877b2c61e2d01e7941869d9b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69159da0da23f31193fddd0831f3baa2b58e390877b2c61e2d01e7941869d9b0->enter($__internal_69159da0da23f31193fddd0831f3baa2b58e390877b2c61e2d01e7941869d9b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_98a1a76f0d0770af590333433a1adf1198ad4def252c15bc9bb5e6f789260575 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98a1a76f0d0770af590333433a1adf1198ad4def252c15bc9bb5e6f789260575->enter($__internal_98a1a76f0d0770af590333433a1adf1198ad4def252c15bc9bb5e6f789260575_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_69159da0da23f31193fddd0831f3baa2b58e390877b2c61e2d01e7941869d9b0->leave($__internal_69159da0da23f31193fddd0831f3baa2b58e390877b2c61e2d01e7941869d9b0_prof);

        
        $__internal_98a1a76f0d0770af590333433a1adf1198ad4def252c15bc9bb5e6f789260575->leave($__internal_98a1a76f0d0770af590333433a1adf1198ad4def252c15bc9bb5e6f789260575_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_6a7c92a4a9a9b575327413bd0c88c0422580d06ddb86c634fbac0a99e1ec4150 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a7c92a4a9a9b575327413bd0c88c0422580d06ddb86c634fbac0a99e1ec4150->enter($__internal_6a7c92a4a9a9b575327413bd0c88c0422580d06ddb86c634fbac0a99e1ec4150_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_087573703a202c0f3832b1c59beeff2c12c10c28388afbd0bef59b48efb04944 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_087573703a202c0f3832b1c59beeff2c12c10c28388afbd0bef59b48efb04944->enter($__internal_087573703a202c0f3832b1c59beeff2c12c10c28388afbd0bef59b48efb04944_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_087573703a202c0f3832b1c59beeff2c12c10c28388afbd0bef59b48efb04944->leave($__internal_087573703a202c0f3832b1c59beeff2c12c10c28388afbd0bef59b48efb04944_prof);

        
        $__internal_6a7c92a4a9a9b575327413bd0c88c0422580d06ddb86c634fbac0a99e1ec4150->leave($__internal_6a7c92a4a9a9b575327413bd0c88c0422580d06ddb86c634fbac0a99e1ec4150_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/Users/VictorChevalier/Documents/PHP/SymfonyTP/SymfonyTP/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
