<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_b5d43fe3e85ca92b0ff46e869f5e860176ac738f3de27fed1fd1a33b641008e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9d2a2884a83fc4a14268553b570df5cf4a9b1df8897e18d67734bd97622f0bc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d2a2884a83fc4a14268553b570df5cf4a9b1df8897e18d67734bd97622f0bc7->enter($__internal_9d2a2884a83fc4a14268553b570df5cf4a9b1df8897e18d67734bd97622f0bc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_d4e826bd9d55f95bdcda9926491a2b48e4f5cf1ba39513da0ca396a02069fe2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4e826bd9d55f95bdcda9926491a2b48e4f5cf1ba39513da0ca396a02069fe2e->enter($__internal_d4e826bd9d55f95bdcda9926491a2b48e4f5cf1ba39513da0ca396a02069fe2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d2a2884a83fc4a14268553b570df5cf4a9b1df8897e18d67734bd97622f0bc7->leave($__internal_9d2a2884a83fc4a14268553b570df5cf4a9b1df8897e18d67734bd97622f0bc7_prof);

        
        $__internal_d4e826bd9d55f95bdcda9926491a2b48e4f5cf1ba39513da0ca396a02069fe2e->leave($__internal_d4e826bd9d55f95bdcda9926491a2b48e4f5cf1ba39513da0ca396a02069fe2e_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_16ab24a1d798f6481579b6f78dd674d2c27ba209decde519780afe07aa056189 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16ab24a1d798f6481579b6f78dd674d2c27ba209decde519780afe07aa056189->enter($__internal_16ab24a1d798f6481579b6f78dd674d2c27ba209decde519780afe07aa056189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_5028155efa6578d1966a7ff6f96bfbde44a6dbbb98c714ca99a01ca79fa90240 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5028155efa6578d1966a7ff6f96bfbde44a6dbbb98c714ca99a01ca79fa90240->enter($__internal_5028155efa6578d1966a7ff6f96bfbde44a6dbbb98c714ca99a01ca79fa90240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_5028155efa6578d1966a7ff6f96bfbde44a6dbbb98c714ca99a01ca79fa90240->leave($__internal_5028155efa6578d1966a7ff6f96bfbde44a6dbbb98c714ca99a01ca79fa90240_prof);

        
        $__internal_16ab24a1d798f6481579b6f78dd674d2c27ba209decde519780afe07aa056189->leave($__internal_16ab24a1d798f6481579b6f78dd674d2c27ba209decde519780afe07aa056189_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_834095495b94aa5e38676295970846f902df08ba761af7dc80e3e57294cae491 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_834095495b94aa5e38676295970846f902df08ba761af7dc80e3e57294cae491->enter($__internal_834095495b94aa5e38676295970846f902df08ba761af7dc80e3e57294cae491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9d16d064a304e6b520275b619ce3530bbd7f808c1d1ba5e8ae16c65a2acd640b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d16d064a304e6b520275b619ce3530bbd7f808c1d1ba5e8ae16c65a2acd640b->enter($__internal_9d16d064a304e6b520275b619ce3530bbd7f808c1d1ba5e8ae16c65a2acd640b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_9d16d064a304e6b520275b619ce3530bbd7f808c1d1ba5e8ae16c65a2acd640b->leave($__internal_9d16d064a304e6b520275b619ce3530bbd7f808c1d1ba5e8ae16c65a2acd640b_prof);

        
        $__internal_834095495b94aa5e38676295970846f902df08ba761af7dc80e3e57294cae491->leave($__internal_834095495b94aa5e38676295970846f902df08ba761af7dc80e3e57294cae491_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/Users/VictorChevalier/Documents/PHP/SymfonyTP/SymfonyTP/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
