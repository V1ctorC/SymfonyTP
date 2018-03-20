<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_bde844aa2457d72e49c1412f1abaaacab5460b987041c62c8a485669be47b9e9 extends Twig_Template
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
        $__internal_25b1507b29ba621243336d73b6b7aa16f95b442b723801751f7209da2bde48a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25b1507b29ba621243336d73b6b7aa16f95b442b723801751f7209da2bde48a7->enter($__internal_25b1507b29ba621243336d73b6b7aa16f95b442b723801751f7209da2bde48a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_f0cbe00aec3eae5ce2c16d57919d1a8743b68f8b7d777b6edeee0e5db70ecdad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0cbe00aec3eae5ce2c16d57919d1a8743b68f8b7d777b6edeee0e5db70ecdad->enter($__internal_f0cbe00aec3eae5ce2c16d57919d1a8743b68f8b7d777b6edeee0e5db70ecdad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_25b1507b29ba621243336d73b6b7aa16f95b442b723801751f7209da2bde48a7->leave($__internal_25b1507b29ba621243336d73b6b7aa16f95b442b723801751f7209da2bde48a7_prof);

        
        $__internal_f0cbe00aec3eae5ce2c16d57919d1a8743b68f8b7d777b6edeee0e5db70ecdad->leave($__internal_f0cbe00aec3eae5ce2c16d57919d1a8743b68f8b7d777b6edeee0e5db70ecdad_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/Users/VictorChevalier/Documents/PHP/SymfonyTP/SymfonyTP/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
