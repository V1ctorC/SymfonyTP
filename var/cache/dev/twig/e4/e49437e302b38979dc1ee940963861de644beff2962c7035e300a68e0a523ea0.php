<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_45bf5c7d21036b1fd2c456510a44c89889dbb06d472826a666f9502bdc6ffb24 extends Twig_Template
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
        $__internal_6943623ba7d5a8e08c9c18acb78de97d6a0b9c04f2bd33c5ea4f1790f2354ac0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6943623ba7d5a8e08c9c18acb78de97d6a0b9c04f2bd33c5ea4f1790f2354ac0->enter($__internal_6943623ba7d5a8e08c9c18acb78de97d6a0b9c04f2bd33c5ea4f1790f2354ac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_047319c3c09e8fb5bd9e544044da1c91b8a32a1d09907d95111e27518669bad7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_047319c3c09e8fb5bd9e544044da1c91b8a32a1d09907d95111e27518669bad7->enter($__internal_047319c3c09e8fb5bd9e544044da1c91b8a32a1d09907d95111e27518669bad7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_6943623ba7d5a8e08c9c18acb78de97d6a0b9c04f2bd33c5ea4f1790f2354ac0->leave($__internal_6943623ba7d5a8e08c9c18acb78de97d6a0b9c04f2bd33c5ea4f1790f2354ac0_prof);

        
        $__internal_047319c3c09e8fb5bd9e544044da1c91b8a32a1d09907d95111e27518669bad7->leave($__internal_047319c3c09e8fb5bd9e544044da1c91b8a32a1d09907d95111e27518669bad7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.rdf.twig", "/Users/VictorChevalier/Documents/PHP/SymfonyTP/SymfonyTP/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
