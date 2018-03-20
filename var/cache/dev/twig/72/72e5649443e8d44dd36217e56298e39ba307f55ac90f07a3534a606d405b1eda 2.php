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
        $__internal_9104b0e290b4a1f3683b806a4ad2871c2b80faaab80fbf1ec0dd8684aeadc4e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9104b0e290b4a1f3683b806a4ad2871c2b80faaab80fbf1ec0dd8684aeadc4e5->enter($__internal_9104b0e290b4a1f3683b806a4ad2871c2b80faaab80fbf1ec0dd8684aeadc4e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:translation.html.twig"));

        $__internal_2aa00654122b437e79a624bb02146a31e2fbfd462321667c4baff4d2a7650f7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2aa00654122b437e79a624bb02146a31e2fbfd462321667c4baff4d2a7650f7a->enter($__internal_2aa00654122b437e79a624bb02146a31e2fbfd462321667c4baff4d2a7650f7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:translation.html.twig"));

        // line 1
        echo "<html>
<body>
";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Hello"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
        echo "!

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

</body>
</html>
";
        
        $__internal_9104b0e290b4a1f3683b806a4ad2871c2b80faaab80fbf1ec0dd8684aeadc4e5->leave($__internal_9104b0e290b4a1f3683b806a4ad2871c2b80faaab80fbf1ec0dd8684aeadc4e5_prof);

        
        $__internal_2aa00654122b437e79a624bb02146a31e2fbfd462321667c4baff4d2a7650f7a->leave($__internal_2aa00654122b437e79a624bb02146a31e2fbfd462321667c4baff4d2a7650f7a_prof);

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
        return array (  45 => 8,  41 => 7,  37 => 6,  29 => 3,  25 => 1,);
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
{{ 'Hello'|trans }} {{ name }}!

<div>
    <p>{{ 'hi'|trans }}</p>
    <button>{{ 'cancel'|trans }}</button>
    <button>{{ 'validate'|trans }}</button>
</div>

</body>
</html>
", "OCPlatformBundle:Advert:translation.html.twig", "/Users/VictorChevalier/Documents/PHP/SymfonyTP/SymfonyTP/src/OC/PlatformBundle/Resources/views/Advert/translation.html.twig");
    }
}
