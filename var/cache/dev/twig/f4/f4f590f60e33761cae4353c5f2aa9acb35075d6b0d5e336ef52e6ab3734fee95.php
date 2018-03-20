<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_0adefc645b1fe296573ae0a4b9c45393b7bd2dc03e6a71bd022a88a2537a369b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_1d9953a27c29e158f0a0c4101aec98e52f9ca4ebe7673ab181a43bd8cb16913c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d9953a27c29e158f0a0c4101aec98e52f9ca4ebe7673ab181a43bd8cb16913c->enter($__internal_1d9953a27c29e158f0a0c4101aec98e52f9ca4ebe7673ab181a43bd8cb16913c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_02da6414ef9ab5d25eaf1b7bfbee4c523297a7d69b9e6ad33c3dee43e7c5bd2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02da6414ef9ab5d25eaf1b7bfbee4c523297a7d69b9e6ad33c3dee43e7c5bd2c->enter($__internal_02da6414ef9ab5d25eaf1b7bfbee4c523297a7d69b9e6ad33c3dee43e7c5bd2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d9953a27c29e158f0a0c4101aec98e52f9ca4ebe7673ab181a43bd8cb16913c->leave($__internal_1d9953a27c29e158f0a0c4101aec98e52f9ca4ebe7673ab181a43bd8cb16913c_prof);

        
        $__internal_02da6414ef9ab5d25eaf1b7bfbee4c523297a7d69b9e6ad33c3dee43e7c5bd2c->leave($__internal_02da6414ef9ab5d25eaf1b7bfbee4c523297a7d69b9e6ad33c3dee43e7c5bd2c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8e5aa824a18156c447c682e44c602b15f6c0c7da22067fe43671fac20fca631f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e5aa824a18156c447c682e44c602b15f6c0c7da22067fe43671fac20fca631f->enter($__internal_8e5aa824a18156c447c682e44c602b15f6c0c7da22067fe43671fac20fca631f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6d689b9b712c1d51a543a51edf4b0a892cb182d424808488145feb1964d3ed5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d689b9b712c1d51a543a51edf4b0a892cb182d424808488145feb1964d3ed5a->enter($__internal_6d689b9b712c1d51a543a51edf4b0a892cb182d424808488145feb1964d3ed5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_6d689b9b712c1d51a543a51edf4b0a892cb182d424808488145feb1964d3ed5a->leave($__internal_6d689b9b712c1d51a543a51edf4b0a892cb182d424808488145feb1964d3ed5a_prof);

        
        $__internal_8e5aa824a18156c447c682e44c602b15f6c0c7da22067fe43671fac20fca631f->leave($__internal_8e5aa824a18156c447c682e44c602b15f6c0c7da22067fe43671fac20fca631f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_19a2c09606529654aba45b4082058b51573e9c10e8704a53ba04d7226133653c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19a2c09606529654aba45b4082058b51573e9c10e8704a53ba04d7226133653c->enter($__internal_19a2c09606529654aba45b4082058b51573e9c10e8704a53ba04d7226133653c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fd8a772dfaa7725d896fbefb1e6ecbc210e3c775a4a95ffa00e6e88f22c9a668 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd8a772dfaa7725d896fbefb1e6ecbc210e3c775a4a95ffa00e6e88f22c9a668->enter($__internal_fd8a772dfaa7725d896fbefb1e6ecbc210e3c775a4a95ffa00e6e88f22c9a668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_fd8a772dfaa7725d896fbefb1e6ecbc210e3c775a4a95ffa00e6e88f22c9a668->leave($__internal_fd8a772dfaa7725d896fbefb1e6ecbc210e3c775a4a95ffa00e6e88f22c9a668_prof);

        
        $__internal_19a2c09606529654aba45b4082058b51573e9c10e8704a53ba04d7226133653c->leave($__internal_19a2c09606529654aba45b4082058b51573e9c10e8704a53ba04d7226133653c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "/Users/VictorChevalier/Documents/PHP/SymfonyTP/SymfonyTP/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
