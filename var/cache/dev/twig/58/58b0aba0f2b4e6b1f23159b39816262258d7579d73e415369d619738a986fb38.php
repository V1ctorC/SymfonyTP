<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_36ad9e7e8f14078c02ec478cec0b2ca9201c6ae985cb598b03c5191159e3899d extends Twig_Template
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
        $__internal_d1c671fef5fd78d606a45771222889ac475f14ea99805362429474458b68e9f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1c671fef5fd78d606a45771222889ac475f14ea99805362429474458b68e9f5->enter($__internal_d1c671fef5fd78d606a45771222889ac475f14ea99805362429474458b68e9f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_7fdb554474ef448bcf0feb7bee91b41a80869f9c5b78bdb1382836546cefe038 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fdb554474ef448bcf0feb7bee91b41a80869f9c5b78bdb1382836546cefe038->enter($__internal_7fdb554474ef448bcf0feb7bee91b41a80869f9c5b78bdb1382836546cefe038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_d1c671fef5fd78d606a45771222889ac475f14ea99805362429474458b68e9f5->leave($__internal_d1c671fef5fd78d606a45771222889ac475f14ea99805362429474458b68e9f5_prof);

        
        $__internal_7fdb554474ef448bcf0feb7bee91b41a80869f9c5b78bdb1382836546cefe038->leave($__internal_7fdb554474ef448bcf0feb7bee91b41a80869f9c5b78bdb1382836546cefe038_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/Users/VictorChevalier/Documents/PHP/SymfonyTP/SymfonyTP/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
