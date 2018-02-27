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
        $__internal_393dd4c7be6b1b5567f4268fff3e6f08cb478ef52eb085f84ace87575a6d3c8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_393dd4c7be6b1b5567f4268fff3e6f08cb478ef52eb085f84ace87575a6d3c8d->enter($__internal_393dd4c7be6b1b5567f4268fff3e6f08cb478ef52eb085f84ace87575a6d3c8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_4eedde7797e759b9cdb2a7438073e49b7bbd7126ab0a7268f328acca3f4eb629 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4eedde7797e759b9cdb2a7438073e49b7bbd7126ab0a7268f328acca3f4eb629->enter($__internal_4eedde7797e759b9cdb2a7438073e49b7bbd7126ab0a7268f328acca3f4eb629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_393dd4c7be6b1b5567f4268fff3e6f08cb478ef52eb085f84ace87575a6d3c8d->leave($__internal_393dd4c7be6b1b5567f4268fff3e6f08cb478ef52eb085f84ace87575a6d3c8d_prof);

        
        $__internal_4eedde7797e759b9cdb2a7438073e49b7bbd7126ab0a7268f328acca3f4eb629->leave($__internal_4eedde7797e759b9cdb2a7438073e49b7bbd7126ab0a7268f328acca3f4eb629_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a05bbe3dbe0a122f5a353d39b6f0eebe5452964b908904a2796042dce686acb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a05bbe3dbe0a122f5a353d39b6f0eebe5452964b908904a2796042dce686acb0->enter($__internal_a05bbe3dbe0a122f5a353d39b6f0eebe5452964b908904a2796042dce686acb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2f64d3445f4e0a8b67c485553ae786e3e27cb3d20856a16e9bbd3b8eb085a1d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f64d3445f4e0a8b67c485553ae786e3e27cb3d20856a16e9bbd3b8eb085a1d8->enter($__internal_2f64d3445f4e0a8b67c485553ae786e3e27cb3d20856a16e9bbd3b8eb085a1d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_2f64d3445f4e0a8b67c485553ae786e3e27cb3d20856a16e9bbd3b8eb085a1d8->leave($__internal_2f64d3445f4e0a8b67c485553ae786e3e27cb3d20856a16e9bbd3b8eb085a1d8_prof);

        
        $__internal_a05bbe3dbe0a122f5a353d39b6f0eebe5452964b908904a2796042dce686acb0->leave($__internal_a05bbe3dbe0a122f5a353d39b6f0eebe5452964b908904a2796042dce686acb0_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_baab289518e4cc627888f2534ff797c831caa7ac4bab65b19e42a14c468a8729 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_baab289518e4cc627888f2534ff797c831caa7ac4bab65b19e42a14c468a8729->enter($__internal_baab289518e4cc627888f2534ff797c831caa7ac4bab65b19e42a14c468a8729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bc7d67467e882af5a0703ca11db9f36da908c11ea22809797a4cd0d1273feae9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc7d67467e882af5a0703ca11db9f36da908c11ea22809797a4cd0d1273feae9->enter($__internal_bc7d67467e882af5a0703ca11db9f36da908c11ea22809797a4cd0d1273feae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_bc7d67467e882af5a0703ca11db9f36da908c11ea22809797a4cd0d1273feae9->leave($__internal_bc7d67467e882af5a0703ca11db9f36da908c11ea22809797a4cd0d1273feae9_prof);

        
        $__internal_baab289518e4cc627888f2534ff797c831caa7ac4bab65b19e42a14c468a8729->leave($__internal_baab289518e4cc627888f2534ff797c831caa7ac4bab65b19e42a14c468a8729_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_a5aed1ca6b7530aacdedcd163cddd556126281f7e5ec8ff6080daf5e48511ff1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5aed1ca6b7530aacdedcd163cddd556126281f7e5ec8ff6080daf5e48511ff1->enter($__internal_a5aed1ca6b7530aacdedcd163cddd556126281f7e5ec8ff6080daf5e48511ff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5442352b3dfba5c854914eeac7249efa1111715c323c4431f659140838481fcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5442352b3dfba5c854914eeac7249efa1111715c323c4431f659140838481fcd->enter($__internal_5442352b3dfba5c854914eeac7249efa1111715c323c4431f659140838481fcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_5442352b3dfba5c854914eeac7249efa1111715c323c4431f659140838481fcd->leave($__internal_5442352b3dfba5c854914eeac7249efa1111715c323c4431f659140838481fcd_prof);

        
        $__internal_a5aed1ca6b7530aacdedcd163cddd556126281f7e5ec8ff6080daf5e48511ff1->leave($__internal_a5aed1ca6b7530aacdedcd163cddd556126281f7e5ec8ff6080daf5e48511ff1_prof);

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
