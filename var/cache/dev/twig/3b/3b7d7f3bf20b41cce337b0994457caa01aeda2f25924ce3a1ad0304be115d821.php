<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_35adecb451e73ce7cceefb6918fd41de51bebb7b720e57934a1b209162db4a81 extends Twig_Template
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
        $__internal_bfc30fd3552721ceb28f136d382693901ad018d01db15da29a40f8add83ed856 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfc30fd3552721ceb28f136d382693901ad018d01db15da29a40f8add83ed856->enter($__internal_bfc30fd3552721ceb28f136d382693901ad018d01db15da29a40f8add83ed856_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_fa4b416d9b409742662861b0708b40004b0249d2bdfb03db9cf62065e1fd431b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa4b416d9b409742662861b0708b40004b0249d2bdfb03db9cf62065e1fd431b->enter($__internal_fa4b416d9b409742662861b0708b40004b0249d2bdfb03db9cf62065e1fd431b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_bfc30fd3552721ceb28f136d382693901ad018d01db15da29a40f8add83ed856->leave($__internal_bfc30fd3552721ceb28f136d382693901ad018d01db15da29a40f8add83ed856_prof);

        
        $__internal_fa4b416d9b409742662861b0708b40004b0249d2bdfb03db9cf62065e1fd431b->leave($__internal_fa4b416d9b409742662861b0708b40004b0249d2bdfb03db9cf62065e1fd431b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "/Users/VictorChevalier/Documents/PHP/SymfonyTP/SymfonyTP/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
