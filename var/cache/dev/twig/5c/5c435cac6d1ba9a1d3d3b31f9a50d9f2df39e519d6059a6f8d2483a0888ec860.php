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
        $__internal_a12926c2bec684632d2e55da19fa754552c608a3a33fdaaa86c3bdaad2a5927a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a12926c2bec684632d2e55da19fa754552c608a3a33fdaaa86c3bdaad2a5927a->enter($__internal_a12926c2bec684632d2e55da19fa754552c608a3a33fdaaa86c3bdaad2a5927a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_81c2831fdb62c130b7c1b0639fdbc2d8782db4c4ce60a309752ef70d0a9a88c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81c2831fdb62c130b7c1b0639fdbc2d8782db4c4ce60a309752ef70d0a9a88c7->enter($__internal_81c2831fdb62c130b7c1b0639fdbc2d8782db4c4ce60a309752ef70d0a9a88c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_a12926c2bec684632d2e55da19fa754552c608a3a33fdaaa86c3bdaad2a5927a->leave($__internal_a12926c2bec684632d2e55da19fa754552c608a3a33fdaaa86c3bdaad2a5927a_prof);

        
        $__internal_81c2831fdb62c130b7c1b0639fdbc2d8782db4c4ce60a309752ef70d0a9a88c7->leave($__internal_81c2831fdb62c130b7c1b0639fdbc2d8782db4c4ce60a309752ef70d0a9a88c7_prof);

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
