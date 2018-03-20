<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_d8add65daa6b4b2b35f02ed7c4b0ab966cc0d9d0bcaa1ee841fb5270089c261e extends Twig_Template
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
        $__internal_e047d02d905ceaf29cb9b80deb98e2b653e3f0f5dd40794304478541878d1b04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e047d02d905ceaf29cb9b80deb98e2b653e3f0f5dd40794304478541878d1b04->enter($__internal_e047d02d905ceaf29cb9b80deb98e2b653e3f0f5dd40794304478541878d1b04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_53a9e57f6b05625894ff942aa879a0c0555d20e487ddce18f90641ef0d5eabc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53a9e57f6b05625894ff942aa879a0c0555d20e487ddce18f90641ef0d5eabc4->enter($__internal_53a9e57f6b05625894ff942aa879a0c0555d20e487ddce18f90641ef0d5eabc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_e047d02d905ceaf29cb9b80deb98e2b653e3f0f5dd40794304478541878d1b04->leave($__internal_e047d02d905ceaf29cb9b80deb98e2b653e3f0f5dd40794304478541878d1b04_prof);

        
        $__internal_53a9e57f6b05625894ff942aa879a0c0555d20e487ddce18f90641ef0d5eabc4->leave($__internal_53a9e57f6b05625894ff942aa879a0c0555d20e487ddce18f90641ef0d5eabc4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/Users/VictorChevalier/Documents/PHP/SymfonyTP/SymfonyTP/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
