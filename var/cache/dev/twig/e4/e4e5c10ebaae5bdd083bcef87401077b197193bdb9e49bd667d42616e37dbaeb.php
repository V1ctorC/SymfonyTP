<?php

/* ::layout.html.twig */
class __TwigTemplate_12653917b1c6b145bb3ef58218243f498660f07b891cfcaaaf97129726f179ba extends Twig_Template
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
        $__internal_e161ad4227f8a2c7bbb9a03ec77392f4e583d927d261a6c474e058326e1b96f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e161ad4227f8a2c7bbb9a03ec77392f4e583d927d261a6c474e058326e1b96f4->enter($__internal_e161ad4227f8a2c7bbb9a03ec77392f4e583d927d261a6c474e058326e1b96f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        $__internal_77c2a16e21628f921d1cd4872b7f30746ab38a689f053bacd2071e5d44754c30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77c2a16e21628f921d1cd4872b7f30746ab38a689f053bacd2071e5d44754c30->enter($__internal_77c2a16e21628f921d1cd4872b7f30746ab38a689f053bacd2071e5d44754c30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        
        $__internal_e161ad4227f8a2c7bbb9a03ec77392f4e583d927d261a6c474e058326e1b96f4->leave($__internal_e161ad4227f8a2c7bbb9a03ec77392f4e583d927d261a6c474e058326e1b96f4_prof);

        
        $__internal_77c2a16e21628f921d1cd4872b7f30746ab38a689f053bacd2071e5d44754c30->leave($__internal_77c2a16e21628f921d1cd4872b7f30746ab38a689f053bacd2071e5d44754c30_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_ba87575018f065edfb58e1c8b230d0244149201ab7d81219b614eba349c25706 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba87575018f065edfb58e1c8b230d0244149201ab7d81219b614eba349c25706->enter($__internal_ba87575018f065edfb58e1c8b230d0244149201ab7d81219b614eba349c25706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a0b537e47d90a2a4ca299b69f3e61d884fb6e2c9a3ad9b8e38fb6bb76dfe8260 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0b537e47d90a2a4ca299b69f3e61d884fb6e2c9a3ad9b8e38fb6bb76dfe8260->enter($__internal_a0b537e47d90a2a4ca299b69f3e61d884fb6e2c9a3ad9b8e38fb6bb76dfe8260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "OC Plateforme";
        
        $__internal_a0b537e47d90a2a4ca299b69f3e61d884fb6e2c9a3ad9b8e38fb6bb76dfe8260->leave($__internal_a0b537e47d90a2a4ca299b69f3e61d884fb6e2c9a3ad9b8e38fb6bb76dfe8260_prof);

        
        $__internal_ba87575018f065edfb58e1c8b230d0244149201ab7d81219b614eba349c25706->leave($__internal_ba87575018f065edfb58e1c8b230d0244149201ab7d81219b614eba349c25706_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bd65568936c1d7f2f3ee45a9529a3f8eb9696d5932fd8cd574584a834dbf4910 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd65568936c1d7f2f3ee45a9529a3f8eb9696d5932fd8cd574584a834dbf4910->enter($__internal_bd65568936c1d7f2f3ee45a9529a3f8eb9696d5932fd8cd574584a834dbf4910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_334fdab114a194f9f8a5b764e631070ebe23383915fcf1fe0672621f0e079758 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_334fdab114a194f9f8a5b764e631070ebe23383915fcf1fe0672621f0e079758->enter($__internal_334fdab114a194f9f8a5b764e631070ebe23383915fcf1fe0672621f0e079758_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "        ";
        // line 13
        echo "        <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
    ";
        
        $__internal_334fdab114a194f9f8a5b764e631070ebe23383915fcf1fe0672621f0e079758->leave($__internal_334fdab114a194f9f8a5b764e631070ebe23383915fcf1fe0672621f0e079758_prof);

        
        $__internal_bd65568936c1d7f2f3ee45a9529a3f8eb9696d5932fd8cd574584a834dbf4910->leave($__internal_bd65568936c1d7f2f3ee45a9529a3f8eb9696d5932fd8cd574584a834dbf4910_prof);

    }

    // line 44
    public function block_body($context, array $blocks = array())
    {
        $__internal_a2a3b0e249fcb1535ce0332823b2528a40c8d7dc220979b1547c4b21003ef709 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2a3b0e249fcb1535ce0332823b2528a40c8d7dc220979b1547c4b21003ef709->enter($__internal_a2a3b0e249fcb1535ce0332823b2528a40c8d7dc220979b1547c4b21003ef709_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_01b0d34ff1a955d9ac97adc7c722402230295049e438272a50e77c7f76228af6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01b0d34ff1a955d9ac97adc7c722402230295049e438272a50e77c7f76228af6->enter($__internal_01b0d34ff1a955d9ac97adc7c722402230295049e438272a50e77c7f76228af6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 45
        echo "            ";
        
        $__internal_01b0d34ff1a955d9ac97adc7c722402230295049e438272a50e77c7f76228af6->leave($__internal_01b0d34ff1a955d9ac97adc7c722402230295049e438272a50e77c7f76228af6_prof);

        
        $__internal_a2a3b0e249fcb1535ce0332823b2528a40c8d7dc220979b1547c4b21003ef709->leave($__internal_a2a3b0e249fcb1535ce0332823b2528a40c8d7dc220979b1547c4b21003ef709_prof);

    }

    // line 56
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_30d92d421de227f0c17b9c4ffb9c514b66fc9a7825031ca044d3ee983ba02283 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30d92d421de227f0c17b9c4ffb9c514b66fc9a7825031ca044d3ee983ba02283->enter($__internal_30d92d421de227f0c17b9c4ffb9c514b66fc9a7825031ca044d3ee983ba02283_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_2436afa700f6316ea321fd4632270700ee64789d8cb5c04861fcd88244a839b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2436afa700f6316ea321fd4632270700ee64789d8cb5c04861fcd88244a839b7->enter($__internal_2436afa700f6316ea321fd4632270700ee64789d8cb5c04861fcd88244a839b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 57
        echo "    ";
        // line 58
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
";
        
        $__internal_2436afa700f6316ea321fd4632270700ee64789d8cb5c04861fcd88244a839b7->leave($__internal_2436afa700f6316ea321fd4632270700ee64789d8cb5c04861fcd88244a839b7_prof);

        
        $__internal_30d92d421de227f0c17b9c4ffb9c514b66fc9a7825031ca044d3ee983ba02283->leave($__internal_30d92d421de227f0c17b9c4ffb9c514b66fc9a7825031ca044d3ee983ba02283_prof);

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
