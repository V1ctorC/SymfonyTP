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
        $__internal_c21c97507690e596195db1d55be9506d396bcc9af7117784c36677eb4a2c7aef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c21c97507690e596195db1d55be9506d396bcc9af7117784c36677eb4a2c7aef->enter($__internal_c21c97507690e596195db1d55be9506d396bcc9af7117784c36677eb4a2c7aef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        $__internal_fb33340bcbfbef2bc178bdd04f3c3f23ec8b120a3a28862479b08648f5f50d0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb33340bcbfbef2bc178bdd04f3c3f23ec8b120a3a28862479b08648f5f50d0e->enter($__internal_fb33340bcbfbef2bc178bdd04f3c3f23ec8b120a3a28862479b08648f5f50d0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        
        $__internal_c21c97507690e596195db1d55be9506d396bcc9af7117784c36677eb4a2c7aef->leave($__internal_c21c97507690e596195db1d55be9506d396bcc9af7117784c36677eb4a2c7aef_prof);

        
        $__internal_fb33340bcbfbef2bc178bdd04f3c3f23ec8b120a3a28862479b08648f5f50d0e->leave($__internal_fb33340bcbfbef2bc178bdd04f3c3f23ec8b120a3a28862479b08648f5f50d0e_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_8cb1ade41d0145865d97931af8cd9f29febed6ce742f747d7053fccd5f912047 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cb1ade41d0145865d97931af8cd9f29febed6ce742f747d7053fccd5f912047->enter($__internal_8cb1ade41d0145865d97931af8cd9f29febed6ce742f747d7053fccd5f912047_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c7af6444ffd928df2cb96b044856003e76e2efb2b36f1f08c297ea9b94928b4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7af6444ffd928df2cb96b044856003e76e2efb2b36f1f08c297ea9b94928b4f->enter($__internal_c7af6444ffd928df2cb96b044856003e76e2efb2b36f1f08c297ea9b94928b4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "OC Plateforme";
        
        $__internal_c7af6444ffd928df2cb96b044856003e76e2efb2b36f1f08c297ea9b94928b4f->leave($__internal_c7af6444ffd928df2cb96b044856003e76e2efb2b36f1f08c297ea9b94928b4f_prof);

        
        $__internal_8cb1ade41d0145865d97931af8cd9f29febed6ce742f747d7053fccd5f912047->leave($__internal_8cb1ade41d0145865d97931af8cd9f29febed6ce742f747d7053fccd5f912047_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8f4dea77c49e985ece9cd272176cae31bd88f437e385a5e5ed67333da8c3bb94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f4dea77c49e985ece9cd272176cae31bd88f437e385a5e5ed67333da8c3bb94->enter($__internal_8f4dea77c49e985ece9cd272176cae31bd88f437e385a5e5ed67333da8c3bb94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_921870b687790f56f9e357eb3923a693c093169e2cf01302412513ccadb6c6e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_921870b687790f56f9e357eb3923a693c093169e2cf01302412513ccadb6c6e3->enter($__internal_921870b687790f56f9e357eb3923a693c093169e2cf01302412513ccadb6c6e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "        ";
        // line 13
        echo "        <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
    ";
        
        $__internal_921870b687790f56f9e357eb3923a693c093169e2cf01302412513ccadb6c6e3->leave($__internal_921870b687790f56f9e357eb3923a693c093169e2cf01302412513ccadb6c6e3_prof);

        
        $__internal_8f4dea77c49e985ece9cd272176cae31bd88f437e385a5e5ed67333da8c3bb94->leave($__internal_8f4dea77c49e985ece9cd272176cae31bd88f437e385a5e5ed67333da8c3bb94_prof);

    }

    // line 44
    public function block_body($context, array $blocks = array())
    {
        $__internal_62aae23b742275497c0fca1a499cf38dd731cfe7ba1863b799f5f0e7bee41f3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62aae23b742275497c0fca1a499cf38dd731cfe7ba1863b799f5f0e7bee41f3b->enter($__internal_62aae23b742275497c0fca1a499cf38dd731cfe7ba1863b799f5f0e7bee41f3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_45909571b70a1ee1e48e50dfd734cd99a368b2fb0ea5eb6cd5cadf31f8446a52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45909571b70a1ee1e48e50dfd734cd99a368b2fb0ea5eb6cd5cadf31f8446a52->enter($__internal_45909571b70a1ee1e48e50dfd734cd99a368b2fb0ea5eb6cd5cadf31f8446a52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 45
        echo "            ";
        
        $__internal_45909571b70a1ee1e48e50dfd734cd99a368b2fb0ea5eb6cd5cadf31f8446a52->leave($__internal_45909571b70a1ee1e48e50dfd734cd99a368b2fb0ea5eb6cd5cadf31f8446a52_prof);

        
        $__internal_62aae23b742275497c0fca1a499cf38dd731cfe7ba1863b799f5f0e7bee41f3b->leave($__internal_62aae23b742275497c0fca1a499cf38dd731cfe7ba1863b799f5f0e7bee41f3b_prof);

    }

    // line 56
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_928114cfe4aae6b2d062a944a789d794f7486e3b066f0227dbedd391d4dda708 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_928114cfe4aae6b2d062a944a789d794f7486e3b066f0227dbedd391d4dda708->enter($__internal_928114cfe4aae6b2d062a944a789d794f7486e3b066f0227dbedd391d4dda708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_79de635ab5d8ce9d79d3c634bb7fa0ede691e43036e45cbecb0e65bb43dbe437 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79de635ab5d8ce9d79d3c634bb7fa0ede691e43036e45cbecb0e65bb43dbe437->enter($__internal_79de635ab5d8ce9d79d3c634bb7fa0ede691e43036e45cbecb0e65bb43dbe437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 57
        echo "    ";
        // line 58
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
";
        
        $__internal_79de635ab5d8ce9d79d3c634bb7fa0ede691e43036e45cbecb0e65bb43dbe437->leave($__internal_79de635ab5d8ce9d79d3c634bb7fa0ede691e43036e45cbecb0e65bb43dbe437_prof);

        
        $__internal_928114cfe4aae6b2d062a944a789d794f7486e3b066f0227dbedd391d4dda708->leave($__internal_928114cfe4aae6b2d062a944a789d794f7486e3b066f0227dbedd391d4dda708_prof);

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
