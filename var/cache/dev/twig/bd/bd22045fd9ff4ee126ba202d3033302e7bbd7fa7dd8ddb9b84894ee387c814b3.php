<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_adff7e66d28e8c251b05b20a64e055107e624eb6c69a71332300bd399814b055 extends Twig_Template
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
        $__internal_7d221cd4be54acd7585ddbd339d905839f51684e3236a1942027af92f9fc0a67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d221cd4be54acd7585ddbd339d905839f51684e3236a1942027af92f9fc0a67->enter($__internal_7d221cd4be54acd7585ddbd339d905839f51684e3236a1942027af92f9fc0a67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_cff1289777df0d6d8fba5935b1babc9a07f24cdef75dac0fc0c1368c2db702e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cff1289777df0d6d8fba5935b1babc9a07f24cdef75dac0fc0c1368c2db702e4->enter($__internal_cff1289777df0d6d8fba5935b1babc9a07f24cdef75dac0fc0c1368c2db702e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_7d221cd4be54acd7585ddbd339d905839f51684e3236a1942027af92f9fc0a67->leave($__internal_7d221cd4be54acd7585ddbd339d905839f51684e3236a1942027af92f9fc0a67_prof);

        
        $__internal_cff1289777df0d6d8fba5935b1babc9a07f24cdef75dac0fc0c1368c2db702e4->leave($__internal_cff1289777df0d6d8fba5935b1babc9a07f24cdef75dac0fc0c1368c2db702e4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "/Users/VictorChevalier/Documents/PHP/SymfonyTP/SymfonyTP/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
