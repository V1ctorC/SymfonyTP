<?php

/* OCPlatformBundle:Advert:form.html.twig */
class __TwigTemplate_3a576cafe812ba56a93422499e3e31bb0ec8b866dfdce32995bdb49e867c5fcf extends Twig_Template
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
        $__internal_f7084c885bfbe926824a942113c7665fc8ae50c6cec7d066f5366db35f0d3152 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7084c885bfbe926824a942113c7665fc8ae50c6cec7d066f5366db35f0d3152->enter($__internal_f7084c885bfbe926824a942113c7665fc8ae50c6cec7d066f5366db35f0d3152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:form.html.twig"));

        $__internal_2356ba13cf1939a7dca5c9cecb5b80f11f7268f961b8320286f2d7e717dfbabe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2356ba13cf1939a7dca5c9cecb5b80f11f7268f961b8320286f2d7e717dfbabe->enter($__internal_2356ba13cf1939a7dca5c9cecb5b80f11f7268f961b8320286f2d7e717dfbabe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:form.html.twig"));

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
        
        $__internal_f7084c885bfbe926824a942113c7665fc8ae50c6cec7d066f5366db35f0d3152->leave($__internal_f7084c885bfbe926824a942113c7665fc8ae50c6cec7d066f5366db35f0d3152_prof);

        
        $__internal_2356ba13cf1939a7dca5c9cecb5b80f11f7268f961b8320286f2d7e717dfbabe->leave($__internal_2356ba13cf1939a7dca5c9cecb5b80f11f7268f961b8320286f2d7e717dfbabe_prof);

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
