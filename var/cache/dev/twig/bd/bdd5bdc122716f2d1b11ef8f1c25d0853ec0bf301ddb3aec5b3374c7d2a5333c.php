<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_bbb0aa1f805fd68f685c79c392f39261e47eb7f562a943d2e9ed1d80ab763973 extends Twig_Template
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
        $__internal_e9ea3d1fec9f48fc0f05d34b19deb3dcb76b160d02dcbc6643345ca98bdc11b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9ea3d1fec9f48fc0f05d34b19deb3dcb76b160d02dcbc6643345ca98bdc11b8->enter($__internal_e9ea3d1fec9f48fc0f05d34b19deb3dcb76b160d02dcbc6643345ca98bdc11b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_29e67ea0f2d4b4033b42403cf57d941508a1449ed277ee62483a8cc9b4d5c1b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29e67ea0f2d4b4033b42403cf57d941508a1449ed277ee62483a8cc9b4d5c1b8->enter($__internal_29e67ea0f2d4b4033b42403cf57d941508a1449ed277ee62483a8cc9b4d5c1b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_e9ea3d1fec9f48fc0f05d34b19deb3dcb76b160d02dcbc6643345ca98bdc11b8->leave($__internal_e9ea3d1fec9f48fc0f05d34b19deb3dcb76b160d02dcbc6643345ca98bdc11b8_prof);

        
        $__internal_29e67ea0f2d4b4033b42403cf57d941508a1449ed277ee62483a8cc9b4d5c1b8->leave($__internal_29e67ea0f2d4b4033b42403cf57d941508a1449ed277ee62483a8cc9b4d5c1b8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/Users/VictorChevalier/Documents/PHP/SymfonyTP/SymfonyTP/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
