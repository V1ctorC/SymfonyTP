<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_c8bb9c4e15bb7aaabdef164dddeda6fc2bbafd00fd8e56a75c745fd192671372 extends Twig_Template
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
        $__internal_29f7b133fa015172f8f2139cf9630b5d8cc33f4baf89bf9e4e43fbc1309e9265 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29f7b133fa015172f8f2139cf9630b5d8cc33f4baf89bf9e4e43fbc1309e9265->enter($__internal_29f7b133fa015172f8f2139cf9630b5d8cc33f4baf89bf9e4e43fbc1309e9265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_830b3c9a08b815518ca767f739f6f2296618845367a7a984ddc8fbcd0b183a52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_830b3c9a08b815518ca767f739f6f2296618845367a7a984ddc8fbcd0b183a52->enter($__internal_830b3c9a08b815518ca767f739f6f2296618845367a7a984ddc8fbcd0b183a52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_29f7b133fa015172f8f2139cf9630b5d8cc33f4baf89bf9e4e43fbc1309e9265->leave($__internal_29f7b133fa015172f8f2139cf9630b5d8cc33f4baf89bf9e4e43fbc1309e9265_prof);

        
        $__internal_830b3c9a08b815518ca767f739f6f2296618845367a7a984ddc8fbcd0b183a52->leave($__internal_830b3c9a08b815518ca767f739f6f2296618845367a7a984ddc8fbcd0b183a52_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "/Users/VictorChevalier/Documents/PHP/SymfonyTP/SymfonyTP/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
