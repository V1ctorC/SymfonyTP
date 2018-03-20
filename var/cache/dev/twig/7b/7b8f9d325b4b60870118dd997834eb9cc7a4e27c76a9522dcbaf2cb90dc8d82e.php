<?php

/* OCPlatformBundle:Advert:translation.html.twig */
class __TwigTemplate_796ef6720a67bddd85e38b3fd076e7fc47e9ac836ffca859b875990e727062ef extends Twig_Template
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
        $__internal_33b37678690d2eddba2879bbfdbcb201e035fcef00f8dcad57c40f7f8cfbdbfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33b37678690d2eddba2879bbfdbcb201e035fcef00f8dcad57c40f7f8cfbdbfb->enter($__internal_33b37678690d2eddba2879bbfdbcb201e035fcef00f8dcad57c40f7f8cfbdbfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:translation.html.twig"));

        $__internal_0422dc953f6966997ec7d273d36c9d8ca5a43fc252c0e1394f4348454d806000 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0422dc953f6966997ec7d273d36c9d8ca5a43fc252c0e1394f4348454d806000->enter($__internal_0422dc953f6966997ec7d273d36c9d8ca5a43fc252c0e1394f4348454d806000_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:translation.html.twig"));

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
        
        $__internal_33b37678690d2eddba2879bbfdbcb201e035fcef00f8dcad57c40f7f8cfbdbfb->leave($__internal_33b37678690d2eddba2879bbfdbcb201e035fcef00f8dcad57c40f7f8cfbdbfb_prof);

        
        $__internal_0422dc953f6966997ec7d273d36c9d8ca5a43fc252c0e1394f4348454d806000->leave($__internal_0422dc953f6966997ec7d273d36c9d8ca5a43fc252c0e1394f4348454d806000_prof);

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
