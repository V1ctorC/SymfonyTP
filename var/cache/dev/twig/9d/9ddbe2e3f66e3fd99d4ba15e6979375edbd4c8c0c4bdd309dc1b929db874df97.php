<?php

/* OCPlatformBundle::layout.html.twig */
class __TwigTemplate_cd7fa05890afbe2eb38feb956b5c82646a088243f8bdf71d5d9c69c1c34a31d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout.html.twig", "OCPlatformBundle::layout.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c60252bc8b91ff63b6f7e76e83474a3c6f31c589f028503b11a86665b7737268 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c60252bc8b91ff63b6f7e76e83474a3c6f31c589f028503b11a86665b7737268->enter($__internal_c60252bc8b91ff63b6f7e76e83474a3c6f31c589f028503b11a86665b7737268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle::layout.html.twig"));

        $__internal_a7121b13fafc31de168bf9b88f8549e31aa0c08c1ff310236c78ee2299952033 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7121b13fafc31de168bf9b88f8549e31aa0c08c1ff310236c78ee2299952033->enter($__internal_a7121b13fafc31de168bf9b88f8549e31aa0c08c1ff310236c78ee2299952033_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c60252bc8b91ff63b6f7e76e83474a3c6f31c589f028503b11a86665b7737268->leave($__internal_c60252bc8b91ff63b6f7e76e83474a3c6f31c589f028503b11a86665b7737268_prof);

        
        $__internal_a7121b13fafc31de168bf9b88f8549e31aa0c08c1ff310236c78ee2299952033->leave($__internal_a7121b13fafc31de168bf9b88f8549e31aa0c08c1ff310236c78ee2299952033_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c4e6b5fba89e71238406b715a4c91c4a390bae03d9483b2a77ce864d8ecba38a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4e6b5fba89e71238406b715a4c91c4a390bae03d9483b2a77ce864d8ecba38a->enter($__internal_c4e6b5fba89e71238406b715a4c91c4a390bae03d9483b2a77ce864d8ecba38a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0380cb2732ce98dfefac171ab4c9d9ac44fa1dbddded44052e03e732feba5e92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0380cb2732ce98dfefac171ab4c9d9ac44fa1dbddded44052e03e732feba5e92->enter($__internal_0380cb2732ce98dfefac171ab4c9d9ac44fa1dbddded44052e03e732feba5e92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_0380cb2732ce98dfefac171ab4c9d9ac44fa1dbddded44052e03e732feba5e92->leave($__internal_0380cb2732ce98dfefac171ab4c9d9ac44fa1dbddded44052e03e732feba5e92_prof);

        
        $__internal_c4e6b5fba89e71238406b715a4c91c4a390bae03d9483b2a77ce864d8ecba38a->leave($__internal_c4e6b5fba89e71238406b715a4c91c4a390bae03d9483b2a77ce864d8ecba38a_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_da8c3ce9ed7564e5c53b27deb5d50eebc30cae02ab6d1bae9234ec7dd40372fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da8c3ce9ed7564e5c53b27deb5d50eebc30cae02ab6d1bae9234ec7dd40372fc->enter($__internal_da8c3ce9ed7564e5c53b27deb5d50eebc30cae02ab6d1bae9234ec7dd40372fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3b98d4263a21b36f44009bfbd36e8b56ec5c9980c98aca68ad9222b26bd568fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b98d4263a21b36f44009bfbd36e8b56ec5c9980c98aca68ad9222b26bd568fa->enter($__internal_3b98d4263a21b36f44009bfbd36e8b56ec5c9980c98aca68ad9222b26bd568fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
    ";
        // line 12
        echo "    <h1>Annonces</h1>

    <hr>

    ";
        // line 17
        echo "    ";
        $this->displayBlock('ocplatform_body', $context, $blocks);
        // line 19
        echo "
";
        
        $__internal_3b98d4263a21b36f44009bfbd36e8b56ec5c9980c98aca68ad9222b26bd568fa->leave($__internal_3b98d4263a21b36f44009bfbd36e8b56ec5c9980c98aca68ad9222b26bd568fa_prof);

        
        $__internal_da8c3ce9ed7564e5c53b27deb5d50eebc30cae02ab6d1bae9234ec7dd40372fc->leave($__internal_da8c3ce9ed7564e5c53b27deb5d50eebc30cae02ab6d1bae9234ec7dd40372fc_prof);

    }

    // line 17
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_184e30ce723a75020485c39387c3d69ea9ea4a8ecf2e7ab1c7d406a5daffc2af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_184e30ce723a75020485c39387c3d69ea9ea4a8ecf2e7ab1c7d406a5daffc2af->enter($__internal_184e30ce723a75020485c39387c3d69ea9ea4a8ecf2e7ab1c7d406a5daffc2af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_70240bf3591791afbbf05168890ba9bad25340848aded8847dd9cb8c99124019 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70240bf3591791afbbf05168890ba9bad25340848aded8847dd9cb8c99124019->enter($__internal_70240bf3591791afbbf05168890ba9bad25340848aded8847dd9cb8c99124019_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 18
        echo "    ";
        
        $__internal_70240bf3591791afbbf05168890ba9bad25340848aded8847dd9cb8c99124019->leave($__internal_70240bf3591791afbbf05168890ba9bad25340848aded8847dd9cb8c99124019_prof);

        
        $__internal_184e30ce723a75020485c39387c3d69ea9ea4a8ecf2e7ab1c7d406a5daffc2af->leave($__internal_184e30ce723a75020485c39387c3d69ea9ea4a8ecf2e7ab1c7d406a5daffc2af_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 18,  96 => 17,  85 => 19,  82 => 17,  76 => 12,  73 => 10,  64 => 9,  51 => 6,  42 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/views/layout.html.twig #}

{% extends \"::layout.html.twig\" %}

{% block title %}
    Annonces - {{ parent() }}
{% endblock %}

{% block body %}

    {# On définit un sous-titre commun à toutes les pages du bundle, par exemple #}
    <h1>Annonces</h1>

    <hr>

    {# On définit un nouveau bloc, que les vues du bundle pourront remplir #}
    {% block ocplatform_body %}
    {% endblock %}

{% endblock %}", "OCPlatformBundle::layout.html.twig", "/Users/VictorChevalier/Documents/PHP/SymfonyTP/SymfonyTP/src/OC/PlatformBundle/Resources/views/layout.html.twig");
    }
}
