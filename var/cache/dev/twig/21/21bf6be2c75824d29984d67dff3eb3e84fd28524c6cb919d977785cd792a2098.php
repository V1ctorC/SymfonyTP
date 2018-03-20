<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_b899e230b900d2b3d22cc796f5c3e88ddc745e5e93d6d9aceea31f84a82f7bb0 extends Twig_Template
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
        $__internal_949170a99eb92cecaa38652445145f5c99002af8c79fc09847786faa9bcd1933 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_949170a99eb92cecaa38652445145f5c99002af8c79fc09847786faa9bcd1933->enter($__internal_949170a99eb92cecaa38652445145f5c99002af8c79fc09847786faa9bcd1933_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_4074717b0a1f88d67ce688f06eeb0acabe416ca48451bfb61f7ed7fe69c8ff43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4074717b0a1f88d67ce688f06eeb0acabe416ca48451bfb61f7ed7fe69c8ff43->enter($__internal_4074717b0a1f88d67ce688f06eeb0acabe416ca48451bfb61f7ed7fe69c8ff43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_949170a99eb92cecaa38652445145f5c99002af8c79fc09847786faa9bcd1933->leave($__internal_949170a99eb92cecaa38652445145f5c99002af8c79fc09847786faa9bcd1933_prof);

        
        $__internal_4074717b0a1f88d67ce688f06eeb0acabe416ca48451bfb61f7ed7fe69c8ff43->leave($__internal_4074717b0a1f88d67ce688f06eeb0acabe416ca48451bfb61f7ed7fe69c8ff43_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/Users/VictorChevalier/Documents/PHP/SymfonyTP/SymfonyTP/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
