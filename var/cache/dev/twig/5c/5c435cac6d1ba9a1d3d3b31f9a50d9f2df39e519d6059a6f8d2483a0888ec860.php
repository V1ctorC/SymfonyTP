<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_b8854c82c0194fe6729ea36dad39910f27bf56d5ccfefcdfd480fdc1f953127c extends Twig_Template
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
        $__internal_87869fd63e1f6f33ea6868199b87282ba30393f8c78236f6ae86edf789b564b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87869fd63e1f6f33ea6868199b87282ba30393f8c78236f6ae86edf789b564b1->enter($__internal_87869fd63e1f6f33ea6868199b87282ba30393f8c78236f6ae86edf789b564b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_e2a1dc67fae9234c36e87108a6e26276d8c05e4aad407160fcd106ab0372bc58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2a1dc67fae9234c36e87108a6e26276d8c05e4aad407160fcd106ab0372bc58->enter($__internal_e2a1dc67fae9234c36e87108a6e26276d8c05e4aad407160fcd106ab0372bc58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_87869fd63e1f6f33ea6868199b87282ba30393f8c78236f6ae86edf789b564b1->leave($__internal_87869fd63e1f6f33ea6868199b87282ba30393f8c78236f6ae86edf789b564b1_prof);

        
        $__internal_e2a1dc67fae9234c36e87108a6e26276d8c05e4aad407160fcd106ab0372bc58->leave($__internal_e2a1dc67fae9234c36e87108a6e26276d8c05e4aad407160fcd106ab0372bc58_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
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
", "@WebProfiler/Profiler/header.html.twig", "/Users/VictorChevalier/Documents/PHP/SymfonyTP/SymfonyTP/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
