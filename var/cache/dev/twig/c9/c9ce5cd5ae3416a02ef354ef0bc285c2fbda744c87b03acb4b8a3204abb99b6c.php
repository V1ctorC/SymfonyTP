<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_05c675fbdfb49a052cb5ce133271eca023ace22c43429e5dba605e0b95730305 extends Twig_Template
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
        $__internal_92f40beeb3f7d607928292df0ff883c17c57ad70134a6caa271de26071ff9edd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92f40beeb3f7d607928292df0ff883c17c57ad70134a6caa271de26071ff9edd->enter($__internal_92f40beeb3f7d607928292df0ff883c17c57ad70134a6caa271de26071ff9edd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_7989f564df3d5b66f41235eccc2dbc732f76563ca77c7c7cddb89b8c54ef3cf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7989f564df3d5b66f41235eccc2dbc732f76563ca77c7c7cddb89b8c54ef3cf1->enter($__internal_7989f564df3d5b66f41235eccc2dbc732f76563ca77c7c7cddb89b8c54ef3cf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_92f40beeb3f7d607928292df0ff883c17c57ad70134a6caa271de26071ff9edd->leave($__internal_92f40beeb3f7d607928292df0ff883c17c57ad70134a6caa271de26071ff9edd_prof);

        
        $__internal_7989f564df3d5b66f41235eccc2dbc732f76563ca77c7c7cddb89b8c54ef3cf1->leave($__internal_7989f564df3d5b66f41235eccc2dbc732f76563ca77c7c7cddb89b8c54ef3cf1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "/Users/VictorChevalier/Documents/PHP/SymfonyTP/SymfonyTP/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
