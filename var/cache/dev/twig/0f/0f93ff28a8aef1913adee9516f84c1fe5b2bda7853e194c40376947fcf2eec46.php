<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_c88fa095271f0b72c40f5caa69b7b8f0d25ed25e6f42e1cf82ff1111deec3979 extends Twig_Template
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
        $__internal_57c55f98b6383b21bb7eef7b8b3d2652f95406f1f29d28dc00159ce76590e01e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57c55f98b6383b21bb7eef7b8b3d2652f95406f1f29d28dc00159ce76590e01e->enter($__internal_57c55f98b6383b21bb7eef7b8b3d2652f95406f1f29d28dc00159ce76590e01e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_959efbee7554c3548a108348bed44fc6cb8063137f7c86eb841809ccefac5ad4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_959efbee7554c3548a108348bed44fc6cb8063137f7c86eb841809ccefac5ad4->enter($__internal_959efbee7554c3548a108348bed44fc6cb8063137f7c86eb841809ccefac5ad4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_57c55f98b6383b21bb7eef7b8b3d2652f95406f1f29d28dc00159ce76590e01e->leave($__internal_57c55f98b6383b21bb7eef7b8b3d2652f95406f1f29d28dc00159ce76590e01e_prof);

        
        $__internal_959efbee7554c3548a108348bed44fc6cb8063137f7c86eb841809ccefac5ad4->leave($__internal_959efbee7554c3548a108348bed44fc6cb8063137f7c86eb841809ccefac5ad4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/Users/VictorChevalier/Documents/PHP/SymfonyTP/SymfonyTP/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
