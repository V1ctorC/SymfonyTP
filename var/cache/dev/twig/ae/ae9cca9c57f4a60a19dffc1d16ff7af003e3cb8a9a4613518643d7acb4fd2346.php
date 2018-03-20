<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_cb1a7cc564830439bd3f0d72399e2624cdf3cd1facaba6c48ae6f93c34d0943b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1ee0605f719eb1e3fb586b185aec282353a9c2087d3480257c9649ec0c50eee6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ee0605f719eb1e3fb586b185aec282353a9c2087d3480257c9649ec0c50eee6->enter($__internal_1ee0605f719eb1e3fb586b185aec282353a9c2087d3480257c9649ec0c50eee6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_b100cd8a46f24b31f181b62dd613033d18589626189f847df64910064d97b0cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b100cd8a46f24b31f181b62dd613033d18589626189f847df64910064d97b0cd->enter($__internal_b100cd8a46f24b31f181b62dd613033d18589626189f847df64910064d97b0cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ee0605f719eb1e3fb586b185aec282353a9c2087d3480257c9649ec0c50eee6->leave($__internal_1ee0605f719eb1e3fb586b185aec282353a9c2087d3480257c9649ec0c50eee6_prof);

        
        $__internal_b100cd8a46f24b31f181b62dd613033d18589626189f847df64910064d97b0cd->leave($__internal_b100cd8a46f24b31f181b62dd613033d18589626189f847df64910064d97b0cd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_417b068386bc56109d8a53eb197716f0ef252ead68910d6633e3495e9743cba0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_417b068386bc56109d8a53eb197716f0ef252ead68910d6633e3495e9743cba0->enter($__internal_417b068386bc56109d8a53eb197716f0ef252ead68910d6633e3495e9743cba0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c55e6626a252568c5c847d873212654a109c0eae6d523b358d7bb8ab46a6d15e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c55e6626a252568c5c847d873212654a109c0eae6d523b358d7bb8ab46a6d15e->enter($__internal_c55e6626a252568c5c847d873212654a109c0eae6d523b358d7bb8ab46a6d15e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_c55e6626a252568c5c847d873212654a109c0eae6d523b358d7bb8ab46a6d15e->leave($__internal_c55e6626a252568c5c847d873212654a109c0eae6d523b358d7bb8ab46a6d15e_prof);

        
        $__internal_417b068386bc56109d8a53eb197716f0ef252ead68910d6633e3495e9743cba0->leave($__internal_417b068386bc56109d8a53eb197716f0ef252ead68910d6633e3495e9743cba0_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_4f68fdadd71255623ddf3fc072980cfa662be75d132d6551344fe88507aa2f32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f68fdadd71255623ddf3fc072980cfa662be75d132d6551344fe88507aa2f32->enter($__internal_4f68fdadd71255623ddf3fc072980cfa662be75d132d6551344fe88507aa2f32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1bd845845914882a4302e4e485b3cbb444d99eaf07338a49c5b6261c42d47757 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bd845845914882a4302e4e485b3cbb444d99eaf07338a49c5b6261c42d47757->enter($__internal_1bd845845914882a4302e4e485b3cbb444d99eaf07338a49c5b6261c42d47757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1bd845845914882a4302e4e485b3cbb444d99eaf07338a49c5b6261c42d47757->leave($__internal_1bd845845914882a4302e4e485b3cbb444d99eaf07338a49c5b6261c42d47757_prof);

        
        $__internal_4f68fdadd71255623ddf3fc072980cfa662be75d132d6551344fe88507aa2f32->leave($__internal_4f68fdadd71255623ddf3fc072980cfa662be75d132d6551344fe88507aa2f32_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_9f9e60a01d0f84656bfb54c426a3ee87206ca3e8e8ccebad3c42ddfb3e0019d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f9e60a01d0f84656bfb54c426a3ee87206ca3e8e8ccebad3c42ddfb3e0019d7->enter($__internal_9f9e60a01d0f84656bfb54c426a3ee87206ca3e8e8ccebad3c42ddfb3e0019d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_380834ecc2e1c169ca4c73216a6e21f5040555b70bd3043147f33452a19b3b68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_380834ecc2e1c169ca4c73216a6e21f5040555b70bd3043147f33452a19b3b68->enter($__internal_380834ecc2e1c169ca4c73216a6e21f5040555b70bd3043147f33452a19b3b68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_380834ecc2e1c169ca4c73216a6e21f5040555b70bd3043147f33452a19b3b68->leave($__internal_380834ecc2e1c169ca4c73216a6e21f5040555b70bd3043147f33452a19b3b68_prof);

        
        $__internal_9f9e60a01d0f84656bfb54c426a3ee87206ca3e8e8ccebad3c42ddfb3e0019d7->leave($__internal_9f9e60a01d0f84656bfb54c426a3ee87206ca3e8e8ccebad3c42ddfb3e0019d7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/Users/VictorChevalier/Documents/PHP/SymfonyTP/SymfonyTP/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
