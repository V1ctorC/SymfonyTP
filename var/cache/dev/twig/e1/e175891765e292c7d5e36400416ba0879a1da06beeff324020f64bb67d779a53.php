<?php

/* OCPlatformBundle:Advert:index.html.twig */
class __TwigTemplate_63bcf2828ad0a28807a7e1644149a784780b718b9ec32cf941e59051f572171f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:index.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f45948eaee5214224c0adf83959d9c29d5723015e3c7224007f6395e29d157ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f45948eaee5214224c0adf83959d9c29d5723015e3c7224007f6395e29d157ee->enter($__internal_f45948eaee5214224c0adf83959d9c29d5723015e3c7224007f6395e29d157ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:index.html.twig"));

        $__internal_a7f3de4866b351a15e45ce9f0dc33ba951e3bbe44f426934ed30f6870369d423 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7f3de4866b351a15e45ce9f0dc33ba951e3bbe44f426934ed30f6870369d423->enter($__internal_a7f3de4866b351a15e45ce9f0dc33ba951e3bbe44f426934ed30f6870369d423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f45948eaee5214224c0adf83959d9c29d5723015e3c7224007f6395e29d157ee->leave($__internal_f45948eaee5214224c0adf83959d9c29d5723015e3c7224007f6395e29d157ee_prof);

        
        $__internal_a7f3de4866b351a15e45ce9f0dc33ba951e3bbe44f426934ed30f6870369d423->leave($__internal_a7f3de4866b351a15e45ce9f0dc33ba951e3bbe44f426934ed30f6870369d423_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_486fd517a151cf3d978f06d497315add69c4ba4d728100e69de35c1f2ef7e97d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_486fd517a151cf3d978f06d497315add69c4ba4d728100e69de35c1f2ef7e97d->enter($__internal_486fd517a151cf3d978f06d497315add69c4ba4d728100e69de35c1f2ef7e97d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5ea5c33c299201911022e220a9fddba38579ee9664f45188faa4e690a5b6ba27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ea5c33c299201911022e220a9fddba38579ee9664f45188faa4e690a5b6ba27->enter($__internal_5ea5c33c299201911022e220a9fddba38579ee9664f45188faa4e690a5b6ba27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_5ea5c33c299201911022e220a9fddba38579ee9664f45188faa4e690a5b6ba27->leave($__internal_5ea5c33c299201911022e220a9fddba38579ee9664f45188faa4e690a5b6ba27_prof);

        
        $__internal_486fd517a151cf3d978f06d497315add69c4ba4d728100e69de35c1f2ef7e97d->leave($__internal_486fd517a151cf3d978f06d497315add69c4ba4d728100e69de35c1f2ef7e97d_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_f08943f5414b00b7e6e7f695f5878b4ae88df8b05292156349b52b4e18e8490c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f08943f5414b00b7e6e7f695f5878b4ae88df8b05292156349b52b4e18e8490c->enter($__internal_f08943f5414b00b7e6e7f695f5878b4ae88df8b05292156349b52b4e18e8490c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_c5ac52a57662a26d086921e5e7976655cda894ebb225f5563f6174ad0e5cf93b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5ac52a57662a26d086921e5e7976655cda894ebb225f5563f6174ad0e5cf93b->enter($__internal_c5ac52a57662a26d086921e5e7976655cda894ebb225f5563f6174ad0e5cf93b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 10
        echo "
    <h2>Liste des annonces</h2>

    <ul>
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listAdverts"] ?? $this->getContext($context, "listAdverts")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 15
            echo "            <li>
                <a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_view", array("id" => $this->getAttribute($context["advert"], "id", array()))), "html", null, true);
            echo "\">
                    ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "title", array()), "html", null, true);
            echo "
                </a>
                par ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "author", array()), "html", null, true);
            echo ",
                le ";
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["advert"], "date", array()), "d/m/Y"), "html", null, true);
            echo "
            </li>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 23
            echo "            <li>Pas (encore !) d'annonces</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    </ul>

";
        
        $__internal_c5ac52a57662a26d086921e5e7976655cda894ebb225f5563f6174ad0e5cf93b->leave($__internal_c5ac52a57662a26d086921e5e7976655cda894ebb225f5563f6174ad0e5cf93b_prof);

        
        $__internal_f08943f5414b00b7e6e7f695f5878b4ae88df8b05292156349b52b4e18e8490c->leave($__internal_f08943f5414b00b7e6e7f695f5878b4ae88df8b05292156349b52b4e18e8490c_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 25,  107 => 23,  99 => 20,  95 => 19,  90 => 17,  86 => 16,  83 => 15,  78 => 14,  72 => 10,  63 => 9,  50 => 6,  41 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/views/Advert/index.html.twig #}

{% extends \"OCPlatformBundle::layout.html.twig\" %}

{% block title %}
    Accueil - {{ parent() }}
{% endblock %}

{% block ocplatform_body %}

    <h2>Liste des annonces</h2>

    <ul>
        {% for advert in listAdverts %}
            <li>
                <a href=\"{{ path('oc_platform_view', {'id': advert.id}) }}\">
                    {{ advert.title }}
                </a>
                par {{ advert.author }},
                le {{ advert.date|date('d/m/Y') }}
            </li>
        {% else %}
            <li>Pas (encore !) d'annonces</li>
        {% endfor %}
    </ul>

{% endblock %}", "OCPlatformBundle:Advert:index.html.twig", "/Users/VictorChevalier/Documents/PHP/SymfonyTP/SymfonyTP/src/OC/PlatformBundle/Resources/views/Advert/index.html.twig");
    }
}
