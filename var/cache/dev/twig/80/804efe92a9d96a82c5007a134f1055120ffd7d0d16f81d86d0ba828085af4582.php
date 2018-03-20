<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_2a3726c8ee160b6e7e6ec19455e1b5132f877b116a8ed2a93d8875e57ccfdb0d extends Twig_Template
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
        $__internal_29f513d32e4bb5689995c1f4c528fd3579174f45b8cfc96899a13173dea53e7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29f513d32e4bb5689995c1f4c528fd3579174f45b8cfc96899a13173dea53e7c->enter($__internal_29f513d32e4bb5689995c1f4c528fd3579174f45b8cfc96899a13173dea53e7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_3af0617ae4486109bee28186f4151c1de3c6087afa4eb6d0369f8b468c6dcdfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3af0617ae4486109bee28186f4151c1de3c6087afa4eb6d0369f8b468c6dcdfb->enter($__internal_3af0617ae4486109bee28186f4151c1de3c6087afa4eb6d0369f8b468c6dcdfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_29f513d32e4bb5689995c1f4c528fd3579174f45b8cfc96899a13173dea53e7c->leave($__internal_29f513d32e4bb5689995c1f4c528fd3579174f45b8cfc96899a13173dea53e7c_prof);

        
        $__internal_3af0617ae4486109bee28186f4151c1de3c6087afa4eb6d0369f8b468c6dcdfb->leave($__internal_3af0617ae4486109bee28186f4151c1de3c6087afa4eb6d0369f8b468c6dcdfb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "/Users/VictorChevalier/Documents/PHP/SymfonyTP/SymfonyTP/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
