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
        $__internal_7a0a5fde521009bf062e505dda30922716febbb4b5617e19801ce06fe0b3d1d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a0a5fde521009bf062e505dda30922716febbb4b5617e19801ce06fe0b3d1d6->enter($__internal_7a0a5fde521009bf062e505dda30922716febbb4b5617e19801ce06fe0b3d1d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        $__internal_991776afb0d73e62a3307abe15b08cfeae2faf8380fe1da33608b1e0143e0ae2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_991776afb0d73e62a3307abe15b08cfeae2faf8380fe1da33608b1e0143e0ae2->enter($__internal_991776afb0d73e62a3307abe15b08cfeae2faf8380fe1da33608b1e0143e0ae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        
        $__internal_7a0a5fde521009bf062e505dda30922716febbb4b5617e19801ce06fe0b3d1d6->leave($__internal_7a0a5fde521009bf062e505dda30922716febbb4b5617e19801ce06fe0b3d1d6_prof);

        
        $__internal_991776afb0d73e62a3307abe15b08cfeae2faf8380fe1da33608b1e0143e0ae2->leave($__internal_991776afb0d73e62a3307abe15b08cfeae2faf8380fe1da33608b1e0143e0ae2_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_cc327df604add47c89e72d604772357546e0f05eada90d0398c20b64a4820b9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc327df604add47c89e72d604772357546e0f05eada90d0398c20b64a4820b9f->enter($__internal_cc327df604add47c89e72d604772357546e0f05eada90d0398c20b64a4820b9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_68673ac445a08707ea9a01e0b9390409c08c9a43f254ff5625cb86ecff6d0394 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68673ac445a08707ea9a01e0b9390409c08c9a43f254ff5625cb86ecff6d0394->enter($__internal_68673ac445a08707ea9a01e0b9390409c08c9a43f254ff5625cb86ecff6d0394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "OC Plateforme";
        
        $__internal_68673ac445a08707ea9a01e0b9390409c08c9a43f254ff5625cb86ecff6d0394->leave($__internal_68673ac445a08707ea9a01e0b9390409c08c9a43f254ff5625cb86ecff6d0394_prof);

        
        $__internal_cc327df604add47c89e72d604772357546e0f05eada90d0398c20b64a4820b9f->leave($__internal_cc327df604add47c89e72d604772357546e0f05eada90d0398c20b64a4820b9f_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b622fb23cdfa06abc2cbe2a016e53757ffdc71457c8ca76218fb98674036f170 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b622fb23cdfa06abc2cbe2a016e53757ffdc71457c8ca76218fb98674036f170->enter($__internal_b622fb23cdfa06abc2cbe2a016e53757ffdc71457c8ca76218fb98674036f170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_c4b5f53a8bef6be15d6b6b881ac8e75c8cbe00255516d8fedc9a76db40897c10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4b5f53a8bef6be15d6b6b881ac8e75c8cbe00255516d8fedc9a76db40897c10->enter($__internal_c4b5f53a8bef6be15d6b6b881ac8e75c8cbe00255516d8fedc9a76db40897c10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "        ";
        // line 13
        echo "        <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
    ";
        
        $__internal_c4b5f53a8bef6be15d6b6b881ac8e75c8cbe00255516d8fedc9a76db40897c10->leave($__internal_c4b5f53a8bef6be15d6b6b881ac8e75c8cbe00255516d8fedc9a76db40897c10_prof);

        
        $__internal_b622fb23cdfa06abc2cbe2a016e53757ffdc71457c8ca76218fb98674036f170->leave($__internal_b622fb23cdfa06abc2cbe2a016e53757ffdc71457c8ca76218fb98674036f170_prof);

    }

    // line 44
    public function block_body($context, array $blocks = array())
    {
        $__internal_518ccb9d3abe31f56d8fd489b0333616d15a8873a31fa08589edcc3cfc59e932 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_518ccb9d3abe31f56d8fd489b0333616d15a8873a31fa08589edcc3cfc59e932->enter($__internal_518ccb9d3abe31f56d8fd489b0333616d15a8873a31fa08589edcc3cfc59e932_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f6fed48ddc55135b0067fe00aba4b38b1142109ce572092bf785ac583e600012 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6fed48ddc55135b0067fe00aba4b38b1142109ce572092bf785ac583e600012->enter($__internal_f6fed48ddc55135b0067fe00aba4b38b1142109ce572092bf785ac583e600012_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 45
        echo "            ";
        
        $__internal_f6fed48ddc55135b0067fe00aba4b38b1142109ce572092bf785ac583e600012->leave($__internal_f6fed48ddc55135b0067fe00aba4b38b1142109ce572092bf785ac583e600012_prof);

        
        $__internal_518ccb9d3abe31f56d8fd489b0333616d15a8873a31fa08589edcc3cfc59e932->leave($__internal_518ccb9d3abe31f56d8fd489b0333616d15a8873a31fa08589edcc3cfc59e932_prof);

    }

    // line 56
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_26d589a60309778bc0ee5633bd209ec8b35dab6926bf42e1cc8061edf1ebd138 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26d589a60309778bc0ee5633bd209ec8b35dab6926bf42e1cc8061edf1ebd138->enter($__internal_26d589a60309778bc0ee5633bd209ec8b35dab6926bf42e1cc8061edf1ebd138_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_5f1fc37894c531e45c604ad767d5f906c0b95b84fda836afaea3d243ea51303b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f1fc37894c531e45c604ad767d5f906c0b95b84fda836afaea3d243ea51303b->enter($__internal_5f1fc37894c531e45c604ad767d5f906c0b95b84fda836afaea3d243ea51303b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 57
        echo "    ";
        // line 58
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
";
        
        $__internal_5f1fc37894c531e45c604ad767d5f906c0b95b84fda836afaea3d243ea51303b->leave($__internal_5f1fc37894c531e45c604ad767d5f906c0b95b84fda836afaea3d243ea51303b_prof);

        
        $__internal_26d589a60309778bc0ee5633bd209ec8b35dab6926bf42e1cc8061edf1ebd138->leave($__internal_26d589a60309778bc0ee5633bd209ec8b35dab6926bf42e1cc8061edf1ebd138_prof);

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
