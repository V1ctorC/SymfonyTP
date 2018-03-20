<?php

/* ::layout.html.twig */
class __TwigTemplate_1ea5bb9eb69a9099ea1c21d5aaeb7886168d83842224c61abf9cb8485ccbb4b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f33c0264ac99c7588928dc2b184cce2cc7621483e13b425c63694c0186b2d41c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f33c0264ac99c7588928dc2b184cce2cc7621483e13b425c63694c0186b2d41c->enter($__internal_f33c0264ac99c7588928dc2b184cce2cc7621483e13b425c63694c0186b2d41c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        $__internal_6ae3de2f7178217d9ee797d0e9ed7e7b96f8e53fa51226e4d6bca713a8dbd001 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ae3de2f7178217d9ee797d0e9ed7e7b96f8e53fa51226e4d6bca713a8dbd001->enter($__internal_6ae3de2f7178217d9ee797d0e9ed7e7b96f8e53fa51226e4d6bca713a8dbd001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        // line 2
        echo "
<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "</head>

<body>
<div class=\"container\">
    <div id=\"header\" class=\"jumbotron\">
        <h1>Ma plateforme d'annonces</h1>
        <p>
            Ce projet est propulsé par Symfony2,
            et construit grâce au MOOC OpenClassrooms et SensioLabs.
        </p>
        <p>
            <a class=\"btn btn-primary btn-lg\" href=\"https://openclassrooms.com/courses/developpez-votre-site-web-avec-le-framework-symfony2\">
                Participer au MOOC »
            </a>
        </p>
    </div>

    <div class=\"row\">
        <div id=\"menu\" class=\"col-md-3\">
            <h3>Les annonces</h3>
            <ul class=\"nav nav-pills nav-stacked\">
                <li><a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_home");
        echo "\">Accueil</a></li>
                <li><a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_add");
        echo "\">Ajouter une annonce</a></li>
            </ul>

            <h4>Dernières annonces</h4>
            ";
        // line 41
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("OCPlatformBundle:Advert:menu", array("limit" => 3)));
        echo "
        </div>
        <div id=\"content\" class=\"col-md-9\">
            ";
        // line 44
        $this->displayBlock('body', $context, $blocks);
        // line 46
        echo "        </div>
    </div>

    <hr>

    <footer>
        <p>The sky's the limit © ";
        // line 52
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " and beyond.</p>
    </footer>
</div>

";
        // line 56
        $this->displayBlock('javascripts', $context, $blocks);
        // line 61
        echo "
</body>
</html>";
        
        $__internal_f33c0264ac99c7588928dc2b184cce2cc7621483e13b425c63694c0186b2d41c->leave($__internal_f33c0264ac99c7588928dc2b184cce2cc7621483e13b425c63694c0186b2d41c_prof);

        
        $__internal_6ae3de2f7178217d9ee797d0e9ed7e7b96f8e53fa51226e4d6bca713a8dbd001->leave($__internal_6ae3de2f7178217d9ee797d0e9ed7e7b96f8e53fa51226e4d6bca713a8dbd001_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_3e12e4f6abda2678a414c0b73b56df7593e1f94eaddc666942d1e3407bf9f854 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e12e4f6abda2678a414c0b73b56df7593e1f94eaddc666942d1e3407bf9f854->enter($__internal_3e12e4f6abda2678a414c0b73b56df7593e1f94eaddc666942d1e3407bf9f854_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e4ed6d307930662d3f8e8575af07678095063088ec60630c8f748b39686899e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4ed6d307930662d3f8e8575af07678095063088ec60630c8f748b39686899e7->enter($__internal_e4ed6d307930662d3f8e8575af07678095063088ec60630c8f748b39686899e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "OC Plateforme";
        
        $__internal_e4ed6d307930662d3f8e8575af07678095063088ec60630c8f748b39686899e7->leave($__internal_e4ed6d307930662d3f8e8575af07678095063088ec60630c8f748b39686899e7_prof);

        
        $__internal_3e12e4f6abda2678a414c0b73b56df7593e1f94eaddc666942d1e3407bf9f854->leave($__internal_3e12e4f6abda2678a414c0b73b56df7593e1f94eaddc666942d1e3407bf9f854_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_dacda62349464579913de009bd5ba4c9d0276ebca6e39002ca0515fbec77f63b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dacda62349464579913de009bd5ba4c9d0276ebca6e39002ca0515fbec77f63b->enter($__internal_dacda62349464579913de009bd5ba4c9d0276ebca6e39002ca0515fbec77f63b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_0e59adc6c86679ed42da1a202ff0a600012036fcba5894388c473f72473fd1fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e59adc6c86679ed42da1a202ff0a600012036fcba5894388c473f72473fd1fd->enter($__internal_0e59adc6c86679ed42da1a202ff0a600012036fcba5894388c473f72473fd1fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "        ";
        // line 13
        echo "        <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
    ";
        
        $__internal_0e59adc6c86679ed42da1a202ff0a600012036fcba5894388c473f72473fd1fd->leave($__internal_0e59adc6c86679ed42da1a202ff0a600012036fcba5894388c473f72473fd1fd_prof);

        
        $__internal_dacda62349464579913de009bd5ba4c9d0276ebca6e39002ca0515fbec77f63b->leave($__internal_dacda62349464579913de009bd5ba4c9d0276ebca6e39002ca0515fbec77f63b_prof);

    }

    // line 44
    public function block_body($context, array $blocks = array())
    {
        $__internal_7e3107ed5e761f3a0b361e1779f1d09f13f3f712fe31392aef867f00a3a34022 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e3107ed5e761f3a0b361e1779f1d09f13f3f712fe31392aef867f00a3a34022->enter($__internal_7e3107ed5e761f3a0b361e1779f1d09f13f3f712fe31392aef867f00a3a34022_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_03c129c3c51727cde34c877117fa0367de32f887d0518c9449a87a3c4d049d2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03c129c3c51727cde34c877117fa0367de32f887d0518c9449a87a3c4d049d2f->enter($__internal_03c129c3c51727cde34c877117fa0367de32f887d0518c9449a87a3c4d049d2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 45
        echo "            ";
        
        $__internal_03c129c3c51727cde34c877117fa0367de32f887d0518c9449a87a3c4d049d2f->leave($__internal_03c129c3c51727cde34c877117fa0367de32f887d0518c9449a87a3c4d049d2f_prof);

        
        $__internal_7e3107ed5e761f3a0b361e1779f1d09f13f3f712fe31392aef867f00a3a34022->leave($__internal_7e3107ed5e761f3a0b361e1779f1d09f13f3f712fe31392aef867f00a3a34022_prof);

    }

    // line 56
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7e759fc9106eebaa2de75e44cd418ceeb9b6b9f6698bbfb24fae37ee83c8ef08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e759fc9106eebaa2de75e44cd418ceeb9b6b9f6698bbfb24fae37ee83c8ef08->enter($__internal_7e759fc9106eebaa2de75e44cd418ceeb9b6b9f6698bbfb24fae37ee83c8ef08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_53b41e0bca6099d85f315980acb39d8ec501b5f6808adaabde0056d3169a532e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53b41e0bca6099d85f315980acb39d8ec501b5f6808adaabde0056d3169a532e->enter($__internal_53b41e0bca6099d85f315980acb39d8ec501b5f6808adaabde0056d3169a532e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 57
        echo "    ";
        // line 58
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
";
        
        $__internal_53b41e0bca6099d85f315980acb39d8ec501b5f6808adaabde0056d3169a532e->leave($__internal_53b41e0bca6099d85f315980acb39d8ec501b5f6808adaabde0056d3169a532e_prof);

        
        $__internal_7e759fc9106eebaa2de75e44cd418ceeb9b6b9f6698bbfb24fae37ee83c8ef08->leave($__internal_7e759fc9106eebaa2de75e44cd418ceeb9b6b9f6698bbfb24fae37ee83c8ef08_prof);

    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 58,  184 => 57,  175 => 56,  165 => 45,  156 => 44,  145 => 13,  143 => 12,  134 => 11,  116 => 9,  104 => 61,  102 => 56,  95 => 52,  87 => 46,  85 => 44,  79 => 41,  72 => 37,  68 => 36,  45 => 15,  43 => 11,  38 => 9,  29 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# app/Resources/views/layout.html.twig #}

<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>{% block title %}OC Plateforme{% endblock %}</title>

    {% block stylesheets %}
        {# On charge le CSS de bootstrap depuis le site directement #}
        <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
    {% endblock %}
</head>

<body>
<div class=\"container\">
    <div id=\"header\" class=\"jumbotron\">
        <h1>Ma plateforme d'annonces</h1>
        <p>
            Ce projet est propulsé par Symfony2,
            et construit grâce au MOOC OpenClassrooms et SensioLabs.
        </p>
        <p>
            <a class=\"btn btn-primary btn-lg\" href=\"https://openclassrooms.com/courses/developpez-votre-site-web-avec-le-framework-symfony2\">
                Participer au MOOC »
            </a>
        </p>
    </div>

    <div class=\"row\">
        <div id=\"menu\" class=\"col-md-3\">
            <h3>Les annonces</h3>
            <ul class=\"nav nav-pills nav-stacked\">
                <li><a href=\"{{ path('oc_platform_home') }}\">Accueil</a></li>
                <li><a href=\"{{ path('oc_platform_add') }}\">Ajouter une annonce</a></li>
            </ul>

            <h4>Dernières annonces</h4>
            {{ render(controller(\"OCPlatformBundle:Advert:menu\", {'limit': 3})) }}
        </div>
        <div id=\"content\" class=\"col-md-9\">
            {% block body %}
            {% endblock %}
        </div>
    </div>

    <hr>

    <footer>
        <p>The sky's the limit © {{ 'now'|date('Y') }} and beyond.</p>
    </footer>
</div>

{% block javascripts %}
    {# Ajoutez ces lignes JavaScript si vous comptez vous servir des fonctionnalités du bootstrap Twitter #}
    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
{% endblock %}

</body>
</html>", "::layout.html.twig", "/Users/VictorChevalier/Documents/PHP/SymfonyTP/SymfonyTP/app/Resources/views/layout.html.twig");
    }
}
