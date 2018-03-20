<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_2f2e5890ceb5219354dfa04e1836adfa25b0acab71c7ad33dcab7a774e484068 extends Twig_Template
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
        $__internal_e8a901373f8d4c8b0d0ffe81677ccdcdf3b5439fb58c301faa0bac24614fd223 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8a901373f8d4c8b0d0ffe81677ccdcdf3b5439fb58c301faa0bac24614fd223->enter($__internal_e8a901373f8d4c8b0d0ffe81677ccdcdf3b5439fb58c301faa0bac24614fd223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_cc77213791ebc0f4f5ab3b780c66b232a4118b74a21ac3fcc3a8287cd86a1fff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc77213791ebc0f4f5ab3b780c66b232a4118b74a21ac3fcc3a8287cd86a1fff->enter($__internal_cc77213791ebc0f4f5ab3b780c66b232a4118b74a21ac3fcc3a8287cd86a1fff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_e8a901373f8d4c8b0d0ffe81677ccdcdf3b5439fb58c301faa0bac24614fd223->leave($__internal_e8a901373f8d4c8b0d0ffe81677ccdcdf3b5439fb58c301faa0bac24614fd223_prof);

        
        $__internal_cc77213791ebc0f4f5ab3b780c66b232a4118b74a21ac3fcc3a8287cd86a1fff->leave($__internal_cc77213791ebc0f4f5ab3b780c66b232a4118b74a21ac3fcc3a8287cd86a1fff_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/Users/VictorChevalier/Documents/PHP/SymfonyTP/SymfonyTP/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
