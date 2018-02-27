<?php

/* OCPlatformBundle:Default:index.html.twig */
class __TwigTemplate_0ae3083723f8d480c810eeb5d0ce05ee90c90f44d2e75967643707432f7b7556 extends Twig_Template
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
        $__internal_f9d64124dc17de2ea7de0c750dfc4971c85e92df45f46d6ad16c4b8b3a44aee3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9d64124dc17de2ea7de0c750dfc4971c85e92df45f46d6ad16c4b8b3a44aee3->enter($__internal_f9d64124dc17de2ea7de0c750dfc4971c85e92df45f46d6ad16c4b8b3a44aee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Default:index.html.twig"));

        $__internal_edda283b3dcd8db8298fc8410fa85002a9756903d6d618df2c44d0d0f35c721e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edda283b3dcd8db8298fc8410fa85002a9756903d6d618df2c44d0d0f35c721e->enter($__internal_edda283b3dcd8db8298fc8410fa85002a9756903d6d618df2c44d0d0f35c721e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Default:index.html.twig"));

        // line 2
        echo "
<html>
<body>
Hello World!
</body>
</html>";
        
        $__internal_f9d64124dc17de2ea7de0c750dfc4971c85e92df45f46d6ad16c4b8b3a44aee3->leave($__internal_f9d64124dc17de2ea7de0c750dfc4971c85e92df45f46d6ad16c4b8b3a44aee3_prof);

        
        $__internal_edda283b3dcd8db8298fc8410fa85002a9756903d6d618df2c44d0d0f35c721e->leave($__internal_edda283b3dcd8db8298fc8410fa85002a9756903d6d618df2c44d0d0f35c721e_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/views/Default/index.html.twig #}

<html>
<body>
Hello World!
</body>
</html>", "OCPlatformBundle:Default:index.html.twig", "/Users/VictorChevalier/Documents/PHP/Symfony/Symfony/src/OC/PlatformBundle/Resources/views/Default/index.html.twig");
    }
}
