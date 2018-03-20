<?php

/* TwigBundle::layout.html.twig */
class __TwigTemplate_627299fa42cfd848fd182d99a5255e474fc3368ddd730c0603fa8257bf337c23 extends Twig_Template
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
        $__internal_0bc7e29ae6df56d6cf962d14c8f6d39033d66991934471624e4632812f960875 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bc7e29ae6df56d6cf962d14c8f6d39033d66991934471624e4632812f960875->enter($__internal_0bc7e29ae6df56d6cf962d14c8f6d39033d66991934471624e4632812f960875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_77a0b6c3fc8d85d4ae37f735883c817d1f411d3e609e3d5560549a897eb80ae1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77a0b6c3fc8d85d4ae37f735883c817d1f411d3e609e3d5560549a897eb80ae1->enter($__internal_77a0b6c3fc8d85d4ae37f735883c817d1f411d3e609e3d5560549a897eb80ae1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

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
        
        $__internal_0bc7e29ae6df56d6cf962d14c8f6d39033d66991934471624e4632812f960875->leave($__internal_0bc7e29ae6df56d6cf962d14c8f6d39033d66991934471624e4632812f960875_prof);

        
        $__internal_77a0b6c3fc8d85d4ae37f735883c817d1f411d3e609e3d5560549a897eb80ae1->leave($__internal_77a0b6c3fc8d85d4ae37f735883c817d1f411d3e609e3d5560549a897eb80ae1_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9c250d2309b48bbf59ffe18d1936416979dda59b8f2c994dd78d49770e5aca45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c250d2309b48bbf59ffe18d1936416979dda59b8f2c994dd78d49770e5aca45->enter($__internal_9c250d2309b48bbf59ffe18d1936416979dda59b8f2c994dd78d49770e5aca45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b50874d394735acdba1c96b82b4a7a7065ee17262303577edfca43633f07ced0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b50874d394735acdba1c96b82b4a7a7065ee17262303577edfca43633f07ced0->enter($__internal_b50874d394735acdba1c96b82b4a7a7065ee17262303577edfca43633f07ced0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_b50874d394735acdba1c96b82b4a7a7065ee17262303577edfca43633f07ced0->leave($__internal_b50874d394735acdba1c96b82b4a7a7065ee17262303577edfca43633f07ced0_prof);

        
        $__internal_9c250d2309b48bbf59ffe18d1936416979dda59b8f2c994dd78d49770e5aca45->leave($__internal_9c250d2309b48bbf59ffe18d1936416979dda59b8f2c994dd78d49770e5aca45_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_9ec9116e102e18454da9ff871c356611dc429c63a0397f987d2b4fee3f5a6226 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ec9116e102e18454da9ff871c356611dc429c63a0397f987d2b4fee3f5a6226->enter($__internal_9ec9116e102e18454da9ff871c356611dc429c63a0397f987d2b4fee3f5a6226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4390054bd261ecffb403bd349683a8a3e9bc2b50160bad643882ab872131b5cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4390054bd261ecffb403bd349683a8a3e9bc2b50160bad643882ab872131b5cc->enter($__internal_4390054bd261ecffb403bd349683a8a3e9bc2b50160bad643882ab872131b5cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_4390054bd261ecffb403bd349683a8a3e9bc2b50160bad643882ab872131b5cc->leave($__internal_4390054bd261ecffb403bd349683a8a3e9bc2b50160bad643882ab872131b5cc_prof);

        
        $__internal_9ec9116e102e18454da9ff871c356611dc429c63a0397f987d2b4fee3f5a6226->leave($__internal_9ec9116e102e18454da9ff871c356611dc429c63a0397f987d2b4fee3f5a6226_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_f1fd79f5c72ed08c4dbccf083da6cd47c6fd7a9c0f4fd291017b202fb06bf209 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1fd79f5c72ed08c4dbccf083da6cd47c6fd7a9c0f4fd291017b202fb06bf209->enter($__internal_f1fd79f5c72ed08c4dbccf083da6cd47c6fd7a9c0f4fd291017b202fb06bf209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_473a69680f06c0f8ec307a0325d4298c1638747c19b30cfd9ae04c3539dcb827 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_473a69680f06c0f8ec307a0325d4298c1638747c19b30cfd9ae04c3539dcb827->enter($__internal_473a69680f06c0f8ec307a0325d4298c1638747c19b30cfd9ae04c3539dcb827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_473a69680f06c0f8ec307a0325d4298c1638747c19b30cfd9ae04c3539dcb827->leave($__internal_473a69680f06c0f8ec307a0325d4298c1638747c19b30cfd9ae04c3539dcb827_prof);

        
        $__internal_f1fd79f5c72ed08c4dbccf083da6cd47c6fd7a9c0f4fd291017b202fb06bf209->leave($__internal_f1fd79f5c72ed08c4dbccf083da6cd47c6fd7a9c0f4fd291017b202fb06bf209_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle::layout.html.twig";
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
", "TwigBundle::layout.html.twig", "/Users/VictorChevalier/Documents/PHP/SymfonyTP/SymfonyTP/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
