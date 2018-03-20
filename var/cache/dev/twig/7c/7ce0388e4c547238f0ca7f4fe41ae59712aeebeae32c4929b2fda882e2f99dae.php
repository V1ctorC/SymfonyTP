<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_b2d01e4c6530e5f02e811e4cfcadf3de9b280b8fcffbc527ba11c8c8de15be07 extends Twig_Template
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
        $__internal_761552705662f1c46641efcd2e01076fb067b02f2ba1078175ec53c8acf33dac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_761552705662f1c46641efcd2e01076fb067b02f2ba1078175ec53c8acf33dac->enter($__internal_761552705662f1c46641efcd2e01076fb067b02f2ba1078175ec53c8acf33dac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_d07d2c8aa2d457b1ed365c4416b42c5a0b100ad5d9836f6717abd67f7f337d3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d07d2c8aa2d457b1ed365c4416b42c5a0b100ad5d9836f6717abd67f7f337d3d->enter($__internal_d07d2c8aa2d457b1ed365c4416b42c5a0b100ad5d9836f6717abd67f7f337d3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_761552705662f1c46641efcd2e01076fb067b02f2ba1078175ec53c8acf33dac->leave($__internal_761552705662f1c46641efcd2e01076fb067b02f2ba1078175ec53c8acf33dac_prof);

        
        $__internal_d07d2c8aa2d457b1ed365c4416b42c5a0b100ad5d9836f6717abd67f7f337d3d->leave($__internal_d07d2c8aa2d457b1ed365c4416b42c5a0b100ad5d9836f6717abd67f7f337d3d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/Users/VictorChevalier/Documents/PHP/SymfonyTP/SymfonyTP/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
