<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_811229ae714a98849d9f4e1c4dae9bb2a5342a12ffb1d8d2bd3935da346b2e9c extends Twig_Template
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
        $__internal_2d1a10d342366968aaa3a1743029b0c2161d1c319bf42337e99dc108698484c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d1a10d342366968aaa3a1743029b0c2161d1c319bf42337e99dc108698484c3->enter($__internal_2d1a10d342366968aaa3a1743029b0c2161d1c319bf42337e99dc108698484c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_74e70908a08125383dd245165e250727da8dd00f5742f6b68f268d1a58992e67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74e70908a08125383dd245165e250727da8dd00f5742f6b68f268d1a58992e67->enter($__internal_74e70908a08125383dd245165e250727da8dd00f5742f6b68f268d1a58992e67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_2d1a10d342366968aaa3a1743029b0c2161d1c319bf42337e99dc108698484c3->leave($__internal_2d1a10d342366968aaa3a1743029b0c2161d1c319bf42337e99dc108698484c3_prof);

        
        $__internal_74e70908a08125383dd245165e250727da8dd00f5742f6b68f268d1a58992e67->leave($__internal_74e70908a08125383dd245165e250727da8dd00f5742f6b68f268d1a58992e67_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/Users/VictorChevalier/Documents/PHP/SymfonyTP/SymfonyTP/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
