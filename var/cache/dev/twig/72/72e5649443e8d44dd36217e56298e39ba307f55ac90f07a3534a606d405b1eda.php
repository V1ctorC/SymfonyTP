<?php

/* OCPlatformBundle:Advert:translation.html.twig */
class __TwigTemplate_9bdb1c840e11b1f7a76dc14ae591d8d6d7c316bb28e4c7fe50d64df98b588e2b extends Twig_Template
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
        $__internal_1c6a1a959d5c1767de06cd074044b55059eaad040e8c79a73348dad6df495be6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c6a1a959d5c1767de06cd074044b55059eaad040e8c79a73348dad6df495be6->enter($__internal_1c6a1a959d5c1767de06cd074044b55059eaad040e8c79a73348dad6df495be6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:translation.html.twig"));

        $__internal_63bee532f13579eece21b0e3695703a84997630f9b86f3fb55b0e40a156fa5d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63bee532f13579eece21b0e3695703a84997630f9b86f3fb55b0e40a156fa5d4->enter($__internal_63bee532f13579eece21b0e3695703a84997630f9b86f3fb55b0e40a156fa5d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:translation.html.twig"));

        // line 1
        echo "<html>
<body>
";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Hello", array("%name%" => ($context["name"] ?? $this->getContext($context, "name")))), "html", null, true);
        echo "

<div>
    <p>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("hi"), "html", null, true);
        echo "</p>
    <button>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("cancel"), "html", null, true);
        echo "</button>
    <button>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("validate"), "html", null, true);
        echo "</button>
</div>

<br/>
<p>";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.devise"), "html", null, true);
        echo "</p>
</body>
</html>
";
        
        $__internal_1c6a1a959d5c1767de06cd074044b55059eaad040e8c79a73348dad6df495be6->leave($__internal_1c6a1a959d5c1767de06cd074044b55059eaad040e8c79a73348dad6df495be6_prof);

        
        $__internal_63bee532f13579eece21b0e3695703a84997630f9b86f3fb55b0e40a156fa5d4->leave($__internal_63bee532f13579eece21b0e3695703a84997630f9b86f3fb55b0e40a156fa5d4_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:translation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 12,  43 => 8,  39 => 7,  35 => 6,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
<body>
{{ 'Hello'|trans({'%name%': name}) }}

<div>
    <p>{{ 'hi'|trans }}</p>
    <button>{{ 'cancel'|trans }}</button>
    <button>{{ 'validate'|trans }}</button>
</div>

<br/>
<p>{{  'site.devise'|trans }}</p>
</body>
</html>
", "OCPlatformBundle:Advert:translation.html.twig", "/Users/VictorChevalier/Documents/PHP/SymfonyTP/SymfonyTP/src/OC/PlatformBundle/Resources/views/Advert/translation.html.twig");
    }
}
