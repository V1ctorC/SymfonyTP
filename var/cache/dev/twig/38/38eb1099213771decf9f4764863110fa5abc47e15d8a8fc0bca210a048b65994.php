<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_e8a4715959982d62a4eaa372133700d380573fa9f6c314ef5bd53288d0f741fa extends Twig_Template
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
        $__internal_61637d2e3dc7943af3f95c2956ecbe4563151ee245832b4e33ebf016fdc2c5ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61637d2e3dc7943af3f95c2956ecbe4563151ee245832b4e33ebf016fdc2c5ff->enter($__internal_61637d2e3dc7943af3f95c2956ecbe4563151ee245832b4e33ebf016fdc2c5ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_e80c4a6b51acde585f383415a62590e00a79233110b2efbff3baf71406301494 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e80c4a6b51acde585f383415a62590e00a79233110b2efbff3baf71406301494->enter($__internal_e80c4a6b51acde585f383415a62590e00a79233110b2efbff3baf71406301494_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_61637d2e3dc7943af3f95c2956ecbe4563151ee245832b4e33ebf016fdc2c5ff->leave($__internal_61637d2e3dc7943af3f95c2956ecbe4563151ee245832b4e33ebf016fdc2c5ff_prof);

        
        $__internal_e80c4a6b51acde585f383415a62590e00a79233110b2efbff3baf71406301494->leave($__internal_e80c4a6b51acde585f383415a62590e00a79233110b2efbff3baf71406301494_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "/Users/VictorChevalier/Documents/PHP/SymfonyTP/SymfonyTP/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
