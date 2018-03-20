<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_3cbe54f18bcd2ec7904b5046b285c12f82dcedd8c9426bd5b09c59d5318f0d1c extends Twig_Template
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
        $__internal_51d3136a47b61e653538b7ec9d55b5f7f36f131be76c729688ce8ea3588bba5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51d3136a47b61e653538b7ec9d55b5f7f36f131be76c729688ce8ea3588bba5c->enter($__internal_51d3136a47b61e653538b7ec9d55b5f7f36f131be76c729688ce8ea3588bba5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_433f7cb6ca30c0cd438ab5f46e629f20af0b6a981e56c309e4d6f90e49af53f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_433f7cb6ca30c0cd438ab5f46e629f20af0b6a981e56c309e4d6f90e49af53f2->enter($__internal_433f7cb6ca30c0cd438ab5f46e629f20af0b6a981e56c309e4d6f90e49af53f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_51d3136a47b61e653538b7ec9d55b5f7f36f131be76c729688ce8ea3588bba5c->leave($__internal_51d3136a47b61e653538b7ec9d55b5f7f36f131be76c729688ce8ea3588bba5c_prof);

        
        $__internal_433f7cb6ca30c0cd438ab5f46e629f20af0b6a981e56c309e4d6f90e49af53f2->leave($__internal_433f7cb6ca30c0cd438ab5f46e629f20af0b6a981e56c309e4d6f90e49af53f2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.js.twig", "/Users/VictorChevalier/Documents/PHP/SymfonyTP/SymfonyTP/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
