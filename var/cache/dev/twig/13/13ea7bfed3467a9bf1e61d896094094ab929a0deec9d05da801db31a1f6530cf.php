<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_ec03dc96dbfb1a26d7fd588348b8dd0968ae4e0891b641a19b68775ff46a340e extends Twig_Template
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
        $__internal_e57691a80ba058d218dc81b55f4d5b382238f5a1237b2caf5068314f57170342 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e57691a80ba058d218dc81b55f4d5b382238f5a1237b2caf5068314f57170342->enter($__internal_e57691a80ba058d218dc81b55f4d5b382238f5a1237b2caf5068314f57170342_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_5f11879a56c5b8d86aba7c63ce37dfb2dce42fb282d7a0740ee634354f574f4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f11879a56c5b8d86aba7c63ce37dfb2dce42fb282d7a0740ee634354f574f4e->enter($__internal_5f11879a56c5b8d86aba7c63ce37dfb2dce42fb282d7a0740ee634354f574f4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_e57691a80ba058d218dc81b55f4d5b382238f5a1237b2caf5068314f57170342->leave($__internal_e57691a80ba058d218dc81b55f4d5b382238f5a1237b2caf5068314f57170342_prof);

        
        $__internal_5f11879a56c5b8d86aba7c63ce37dfb2dce42fb282d7a0740ee634354f574f4e->leave($__internal_5f11879a56c5b8d86aba7c63ce37dfb2dce42fb282d7a0740ee634354f574f4e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/Users/VictorChevalier/Documents/PHP/SymfonyTP/SymfonyTP/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
