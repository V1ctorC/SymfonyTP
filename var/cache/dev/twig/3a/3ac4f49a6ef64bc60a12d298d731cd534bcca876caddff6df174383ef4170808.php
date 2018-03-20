<?php

/* OCPlatformBundle:Advert:form.html.twig */
class __TwigTemplate_78fc820d52f606f41e2c3df7bf72a0511676f6052fcfb1f18fe4ac02bc148829 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ced24d15cb5af8252d3f7a59dd01bbeced690b4ec0d8f17625542f51e116511a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ced24d15cb5af8252d3f7a59dd01bbeced690b4ec0d8f17625542f51e116511a->enter($__internal_ced24d15cb5af8252d3f7a59dd01bbeced690b4ec0d8f17625542f51e116511a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:form.html.twig"));

        $__internal_0bcd433f0ee7cb57bd81746268129a63bdbd97aae507c6e9308402cbd6d3f6bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bcd433f0ee7cb57bd81746268129a63bdbd97aae507c6e9308402cbd6d3f6bd->enter($__internal_0bcd433f0ee7cb57bd81746268129a63bdbd97aae507c6e9308402cbd6d3f6bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:form.html.twig"));

        // line 2
        echo "
";
        // line 6
        echo "
<h3>Formulaire d'annonce</h3>

";
        // line 11
        echo "<div class=\"well\">
    Ici se trouvera le formulaire.
</div>";
        
        $__internal_ced24d15cb5af8252d3f7a59dd01bbeced690b4ec0d8f17625542f51e116511a->leave($__internal_ced24d15cb5af8252d3f7a59dd01bbeced690b4ec0d8f17625542f51e116511a_prof);

        
        $__internal_0bcd433f0ee7cb57bd81746268129a63bdbd97aae507c6e9308402cbd6d3f6bd->leave($__internal_0bcd433f0ee7cb57bd81746268129a63bdbd97aae507c6e9308402cbd6d3f6bd_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  33 => 11,  28 => 6,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/views/Advert/form.html.twig #}

{# Cette vue n'hérite de personne, elle sera incluse par d'autres vues qui,
   elles, hériteront probablement du layout. Je dis « probablement » car,
   ici pour cette vue, on n'en sait rien et c'est une info qui ne nous concerne pas. #}

<h3>Formulaire d'annonce</h3>

{# On laisse vide la vue pour l'instant, on la comblera plus tard
   lorsqu'on saura afficher un formulaire. #}
<div class=\"well\">
    Ici se trouvera le formulaire.
</div>", "OCPlatformBundle:Advert:form.html.twig", "/Users/VictorChevalier/Documents/PHP/SymfonyTP/SymfonyTP/src/OC/PlatformBundle/Resources/views/Advert/form.html.twig");
    }
}
