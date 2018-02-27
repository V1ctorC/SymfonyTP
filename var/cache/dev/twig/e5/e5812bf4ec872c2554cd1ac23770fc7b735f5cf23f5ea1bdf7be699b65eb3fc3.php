<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_21e1384dbb5ce9486a9d17503df7b90e48bc1b6ea63609664f02070f7deb3d3f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_27e83ccbcb2452fe5c041854d66d7bdb1bab0a94e873fc03da8e2294f663048c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27e83ccbcb2452fe5c041854d66d7bdb1bab0a94e873fc03da8e2294f663048c->enter($__internal_27e83ccbcb2452fe5c041854d66d7bdb1bab0a94e873fc03da8e2294f663048c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_4fe1822793cf185b3c2164b8205e9d2d17ca81668e830c726d4c152802ca0cda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fe1822793cf185b3c2164b8205e9d2d17ca81668e830c726d4c152802ca0cda->enter($__internal_4fe1822793cf185b3c2164b8205e9d2d17ca81668e830c726d4c152802ca0cda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_27e83ccbcb2452fe5c041854d66d7bdb1bab0a94e873fc03da8e2294f663048c->leave($__internal_27e83ccbcb2452fe5c041854d66d7bdb1bab0a94e873fc03da8e2294f663048c_prof);

        
        $__internal_4fe1822793cf185b3c2164b8205e9d2d17ca81668e830c726d4c152802ca0cda->leave($__internal_4fe1822793cf185b3c2164b8205e9d2d17ca81668e830c726d4c152802ca0cda_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f6a32f0ed081e2778b5b42b9b0cf263462b452e0c6d7a6e47930a5f22db677b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6a32f0ed081e2778b5b42b9b0cf263462b452e0c6d7a6e47930a5f22db677b1->enter($__internal_f6a32f0ed081e2778b5b42b9b0cf263462b452e0c6d7a6e47930a5f22db677b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_60b0859d1cafce90c7e3dd92a3aec2bda65f23e0f71bb56f57c365030c6e7be5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60b0859d1cafce90c7e3dd92a3aec2bda65f23e0f71bb56f57c365030c6e7be5->enter($__internal_60b0859d1cafce90c7e3dd92a3aec2bda65f23e0f71bb56f57c365030c6e7be5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_60b0859d1cafce90c7e3dd92a3aec2bda65f23e0f71bb56f57c365030c6e7be5->leave($__internal_60b0859d1cafce90c7e3dd92a3aec2bda65f23e0f71bb56f57c365030c6e7be5_prof);

        
        $__internal_f6a32f0ed081e2778b5b42b9b0cf263462b452e0c6d7a6e47930a5f22db677b1->leave($__internal_f6a32f0ed081e2778b5b42b9b0cf263462b452e0c6d7a6e47930a5f22db677b1_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_5056c7b3688810d5f9a07f9bdca587bf2e4bbe33b42808c581c12f31a1e302a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5056c7b3688810d5f9a07f9bdca587bf2e4bbe33b42808c581c12f31a1e302a1->enter($__internal_5056c7b3688810d5f9a07f9bdca587bf2e4bbe33b42808c581c12f31a1e302a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e4db922baf6eef238982e0189519f96f8f737219d28472fcdc8a0770d87224ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4db922baf6eef238982e0189519f96f8f737219d28472fcdc8a0770d87224ea->enter($__internal_e4db922baf6eef238982e0189519f96f8f737219d28472fcdc8a0770d87224ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_e4db922baf6eef238982e0189519f96f8f737219d28472fcdc8a0770d87224ea->leave($__internal_e4db922baf6eef238982e0189519f96f8f737219d28472fcdc8a0770d87224ea_prof);

        
        $__internal_5056c7b3688810d5f9a07f9bdca587bf2e4bbe33b42808c581c12f31a1e302a1->leave($__internal_5056c7b3688810d5f9a07f9bdca587bf2e4bbe33b42808c581c12f31a1e302a1_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_d3b38dc068114d8aa0208e5aee22aa2c356ecc154db0b98867bd84a060638f5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3b38dc068114d8aa0208e5aee22aa2c356ecc154db0b98867bd84a060638f5a->enter($__internal_d3b38dc068114d8aa0208e5aee22aa2c356ecc154db0b98867bd84a060638f5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a69f53ca6b5db3918a695533b36b62fd07087642ba0af1b5df0d15b5d155f6f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a69f53ca6b5db3918a695533b36b62fd07087642ba0af1b5df0d15b5d155f6f2->enter($__internal_a69f53ca6b5db3918a695533b36b62fd07087642ba0af1b5df0d15b5d155f6f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a69f53ca6b5db3918a695533b36b62fd07087642ba0af1b5df0d15b5d155f6f2->leave($__internal_a69f53ca6b5db3918a695533b36b62fd07087642ba0af1b5df0d15b5d155f6f2_prof);

        
        $__internal_d3b38dc068114d8aa0208e5aee22aa2c356ecc154db0b98867bd84a060638f5a->leave($__internal_d3b38dc068114d8aa0208e5aee22aa2c356ecc154db0b98867bd84a060638f5a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/Users/VictorChevalier/Documents/PHP/SymfonyTP/SymfonyTP/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
