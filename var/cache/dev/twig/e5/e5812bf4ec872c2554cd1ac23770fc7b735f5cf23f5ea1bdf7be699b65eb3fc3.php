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
        $__internal_a07d73c35a9c283f57fbfb3aa4e8be543c551bfa7bc5dabfbd4e371dd518df65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a07d73c35a9c283f57fbfb3aa4e8be543c551bfa7bc5dabfbd4e371dd518df65->enter($__internal_a07d73c35a9c283f57fbfb3aa4e8be543c551bfa7bc5dabfbd4e371dd518df65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_6d456b653cd180deb2bb635af39c9b1113acecc02b373aec7b551b0cedf0f71a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d456b653cd180deb2bb635af39c9b1113acecc02b373aec7b551b0cedf0f71a->enter($__internal_6d456b653cd180deb2bb635af39c9b1113acecc02b373aec7b551b0cedf0f71a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_a07d73c35a9c283f57fbfb3aa4e8be543c551bfa7bc5dabfbd4e371dd518df65->leave($__internal_a07d73c35a9c283f57fbfb3aa4e8be543c551bfa7bc5dabfbd4e371dd518df65_prof);

        
        $__internal_6d456b653cd180deb2bb635af39c9b1113acecc02b373aec7b551b0cedf0f71a->leave($__internal_6d456b653cd180deb2bb635af39c9b1113acecc02b373aec7b551b0cedf0f71a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_97c15f5361a27fc70e0ff3f9cf2be6b49a5446fa618fb0ff132bb6911f2f8b33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97c15f5361a27fc70e0ff3f9cf2be6b49a5446fa618fb0ff132bb6911f2f8b33->enter($__internal_97c15f5361a27fc70e0ff3f9cf2be6b49a5446fa618fb0ff132bb6911f2f8b33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9435f725cbd4b7346330b7b44c274d68960c59511bb6a0299625cae7bd8e7d2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9435f725cbd4b7346330b7b44c274d68960c59511bb6a0299625cae7bd8e7d2a->enter($__internal_9435f725cbd4b7346330b7b44c274d68960c59511bb6a0299625cae7bd8e7d2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_9435f725cbd4b7346330b7b44c274d68960c59511bb6a0299625cae7bd8e7d2a->leave($__internal_9435f725cbd4b7346330b7b44c274d68960c59511bb6a0299625cae7bd8e7d2a_prof);

        
        $__internal_97c15f5361a27fc70e0ff3f9cf2be6b49a5446fa618fb0ff132bb6911f2f8b33->leave($__internal_97c15f5361a27fc70e0ff3f9cf2be6b49a5446fa618fb0ff132bb6911f2f8b33_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_7f4365caa8a3d2c7f71a2e4113eacc74b311f74dbabef2107a34fe3c79453608 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f4365caa8a3d2c7f71a2e4113eacc74b311f74dbabef2107a34fe3c79453608->enter($__internal_7f4365caa8a3d2c7f71a2e4113eacc74b311f74dbabef2107a34fe3c79453608_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_110fda404a476d7762a1657e217f10096b69468e06e0466f854f29f43a8dfb30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_110fda404a476d7762a1657e217f10096b69468e06e0466f854f29f43a8dfb30->enter($__internal_110fda404a476d7762a1657e217f10096b69468e06e0466f854f29f43a8dfb30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_110fda404a476d7762a1657e217f10096b69468e06e0466f854f29f43a8dfb30->leave($__internal_110fda404a476d7762a1657e217f10096b69468e06e0466f854f29f43a8dfb30_prof);

        
        $__internal_7f4365caa8a3d2c7f71a2e4113eacc74b311f74dbabef2107a34fe3c79453608->leave($__internal_7f4365caa8a3d2c7f71a2e4113eacc74b311f74dbabef2107a34fe3c79453608_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_7e95270154ff7b9e8d0db9d9eb938764873d76a518ab67822afe258daa8209fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e95270154ff7b9e8d0db9d9eb938764873d76a518ab67822afe258daa8209fd->enter($__internal_7e95270154ff7b9e8d0db9d9eb938764873d76a518ab67822afe258daa8209fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f8614fb1875a5d77de228fe3c53be0ebc1c752f737621b0db55d4a0dc239a9d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8614fb1875a5d77de228fe3c53be0ebc1c752f737621b0db55d4a0dc239a9d2->enter($__internal_f8614fb1875a5d77de228fe3c53be0ebc1c752f737621b0db55d4a0dc239a9d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f8614fb1875a5d77de228fe3c53be0ebc1c752f737621b0db55d4a0dc239a9d2->leave($__internal_f8614fb1875a5d77de228fe3c53be0ebc1c752f737621b0db55d4a0dc239a9d2_prof);

        
        $__internal_7e95270154ff7b9e8d0db9d9eb938764873d76a518ab67822afe258daa8209fd->leave($__internal_7e95270154ff7b9e8d0db9d9eb938764873d76a518ab67822afe258daa8209fd_prof);

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
