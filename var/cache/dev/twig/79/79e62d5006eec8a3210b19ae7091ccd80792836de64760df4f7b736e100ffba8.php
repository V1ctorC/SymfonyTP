<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_cbe7533ba7e4fbb56103997f4660d86ae496e5649f7089b944846bef542c7c66 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_e72a3aad097c4c2467ca4f2f495d7e451986735f0e4dbd7c78524d3da7544d94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e72a3aad097c4c2467ca4f2f495d7e451986735f0e4dbd7c78524d3da7544d94->enter($__internal_e72a3aad097c4c2467ca4f2f495d7e451986735f0e4dbd7c78524d3da7544d94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_babab186359348dd3d8ff4799b52bcd9035f0062d796a68750310eacc74a105a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_babab186359348dd3d8ff4799b52bcd9035f0062d796a68750310eacc74a105a->enter($__internal_babab186359348dd3d8ff4799b52bcd9035f0062d796a68750310eacc74a105a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e72a3aad097c4c2467ca4f2f495d7e451986735f0e4dbd7c78524d3da7544d94->leave($__internal_e72a3aad097c4c2467ca4f2f495d7e451986735f0e4dbd7c78524d3da7544d94_prof);

        
        $__internal_babab186359348dd3d8ff4799b52bcd9035f0062d796a68750310eacc74a105a->leave($__internal_babab186359348dd3d8ff4799b52bcd9035f0062d796a68750310eacc74a105a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f64262fdbe1b4c69e136520db8ceddb395b576fb06f607a56ac798fd5b967d4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f64262fdbe1b4c69e136520db8ceddb395b576fb06f607a56ac798fd5b967d4b->enter($__internal_f64262fdbe1b4c69e136520db8ceddb395b576fb06f607a56ac798fd5b967d4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_15367345cae77243f3dbe06f1abb322cdf1972c2550313e67daaa1cc1e192a98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15367345cae77243f3dbe06f1abb322cdf1972c2550313e67daaa1cc1e192a98->enter($__internal_15367345cae77243f3dbe06f1abb322cdf1972c2550313e67daaa1cc1e192a98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_15367345cae77243f3dbe06f1abb322cdf1972c2550313e67daaa1cc1e192a98->leave($__internal_15367345cae77243f3dbe06f1abb322cdf1972c2550313e67daaa1cc1e192a98_prof);

        
        $__internal_f64262fdbe1b4c69e136520db8ceddb395b576fb06f607a56ac798fd5b967d4b->leave($__internal_f64262fdbe1b4c69e136520db8ceddb395b576fb06f607a56ac798fd5b967d4b_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_8390f14bb1eea6c4d8bf626c235c830e87ec65f8f05311fcbd398ae4b98b1f6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8390f14bb1eea6c4d8bf626c235c830e87ec65f8f05311fcbd398ae4b98b1f6d->enter($__internal_8390f14bb1eea6c4d8bf626c235c830e87ec65f8f05311fcbd398ae4b98b1f6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_355145d48dbec9e4356061414f00250e73ea3b921fc88a316b1c63b880c042d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_355145d48dbec9e4356061414f00250e73ea3b921fc88a316b1c63b880c042d4->enter($__internal_355145d48dbec9e4356061414f00250e73ea3b921fc88a316b1c63b880c042d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_355145d48dbec9e4356061414f00250e73ea3b921fc88a316b1c63b880c042d4->leave($__internal_355145d48dbec9e4356061414f00250e73ea3b921fc88a316b1c63b880c042d4_prof);

        
        $__internal_8390f14bb1eea6c4d8bf626c235c830e87ec65f8f05311fcbd398ae4b98b1f6d->leave($__internal_8390f14bb1eea6c4d8bf626c235c830e87ec65f8f05311fcbd398ae4b98b1f6d_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_be7063fe532f400ee1bda2d31f503efd41cebd095e3d5a6fbae94b60cd1986b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be7063fe532f400ee1bda2d31f503efd41cebd095e3d5a6fbae94b60cd1986b2->enter($__internal_be7063fe532f400ee1bda2d31f503efd41cebd095e3d5a6fbae94b60cd1986b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_22627cc38e4ed3beb0c5f18bdbbf257afe67b39d6848c34cfb3bb43620655ea1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22627cc38e4ed3beb0c5f18bdbbf257afe67b39d6848c34cfb3bb43620655ea1->enter($__internal_22627cc38e4ed3beb0c5f18bdbbf257afe67b39d6848c34cfb3bb43620655ea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_22627cc38e4ed3beb0c5f18bdbbf257afe67b39d6848c34cfb3bb43620655ea1->leave($__internal_22627cc38e4ed3beb0c5f18bdbbf257afe67b39d6848c34cfb3bb43620655ea1_prof);

        
        $__internal_be7063fe532f400ee1bda2d31f503efd41cebd095e3d5a6fbae94b60cd1986b2->leave($__internal_be7063fe532f400ee1bda2d31f503efd41cebd095e3d5a6fbae94b60cd1986b2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
", "@Twig/Exception/exception_full.html.twig", "/Users/VictorChevalier/Documents/PHP/SymfonyTP/SymfonyTP/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
