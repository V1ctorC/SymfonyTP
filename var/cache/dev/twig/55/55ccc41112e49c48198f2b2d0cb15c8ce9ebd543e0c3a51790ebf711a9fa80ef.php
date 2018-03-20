<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_d610b6f7cbf271f814bc81037ab9817720676c898364090f3be1a24adc0fd1de extends Twig_Template
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
        $__internal_1838f5e7d397b269f626d56bf8a58a7fb63708dfa633fdf9cf1cbbd221526881 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1838f5e7d397b269f626d56bf8a58a7fb63708dfa633fdf9cf1cbbd221526881->enter($__internal_1838f5e7d397b269f626d56bf8a58a7fb63708dfa633fdf9cf1cbbd221526881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_dc23fae7f4e8f055874c088c5fad5f8292f0f30e22c53e207c22b23db204fb24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc23fae7f4e8f055874c088c5fad5f8292f0f30e22c53e207c22b23db204fb24->enter($__internal_dc23fae7f4e8f055874c088c5fad5f8292f0f30e22c53e207c22b23db204fb24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_1838f5e7d397b269f626d56bf8a58a7fb63708dfa633fdf9cf1cbbd221526881->leave($__internal_1838f5e7d397b269f626d56bf8a58a7fb63708dfa633fdf9cf1cbbd221526881_prof);

        
        $__internal_dc23fae7f4e8f055874c088c5fad5f8292f0f30e22c53e207c22b23db204fb24->leave($__internal_dc23fae7f4e8f055874c088c5fad5f8292f0f30e22c53e207c22b23db204fb24_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/Users/VictorChevalier/Documents/PHP/SymfonyTP/SymfonyTP/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
