<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_cc9fae85d52094140cdb8b7a0c6582e3d66e16c384a68aa3d2462db8a09be459 extends Twig_Template
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
        $__internal_c7d1c61bf76a7e76a004542886b6ffada750a4581efc7448ba0df6e8abe9df7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7d1c61bf76a7e76a004542886b6ffada750a4581efc7448ba0df6e8abe9df7f->enter($__internal_c7d1c61bf76a7e76a004542886b6ffada750a4581efc7448ba0df6e8abe9df7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_797f6a3cc435d48b9de1e3eeca35b51bf1c2c39f39ffdb195cb826500c1e74a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_797f6a3cc435d48b9de1e3eeca35b51bf1c2c39f39ffdb195cb826500c1e74a7->enter($__internal_797f6a3cc435d48b9de1e3eeca35b51bf1c2c39f39ffdb195cb826500c1e74a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_c7d1c61bf76a7e76a004542886b6ffada750a4581efc7448ba0df6e8abe9df7f->leave($__internal_c7d1c61bf76a7e76a004542886b6ffada750a4581efc7448ba0df6e8abe9df7f_prof);

        
        $__internal_797f6a3cc435d48b9de1e3eeca35b51bf1c2c39f39ffdb195cb826500c1e74a7->leave($__internal_797f6a3cc435d48b9de1e3eeca35b51bf1c2c39f39ffdb195cb826500c1e74a7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/Users/VictorChevalier/Documents/PHP/SymfonyTP/SymfonyTP/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
