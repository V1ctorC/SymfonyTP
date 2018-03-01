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
        $__internal_bfb79770a941f4282788ad77f2b96b91d8f03a166d49268d1c664919ddf20623 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfb79770a941f4282788ad77f2b96b91d8f03a166d49268d1c664919ddf20623->enter($__internal_bfb79770a941f4282788ad77f2b96b91d8f03a166d49268d1c664919ddf20623_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:form.html.twig"));

        $__internal_0c49dc2025135a84a18028396166c7913da7006c4e36471e41bb45fc1b8c1fce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c49dc2025135a84a18028396166c7913da7006c4e36471e41bb45fc1b8c1fce->enter($__internal_0c49dc2025135a84a18028396166c7913da7006c4e36471e41bb45fc1b8c1fce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:form.html.twig"));

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
        
        $__internal_bfb79770a941f4282788ad77f2b96b91d8f03a166d49268d1c664919ddf20623->leave($__internal_bfb79770a941f4282788ad77f2b96b91d8f03a166d49268d1c664919ddf20623_prof);

        
        $__internal_0c49dc2025135a84a18028396166c7913da7006c4e36471e41bb45fc1b8c1fce->leave($__internal_0c49dc2025135a84a18028396166c7913da7006c4e36471e41bb45fc1b8c1fce_prof);

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
