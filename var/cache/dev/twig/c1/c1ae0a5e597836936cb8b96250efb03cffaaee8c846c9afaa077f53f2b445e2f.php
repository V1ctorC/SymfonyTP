<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_229013a302df9d17dc51ed91f2085062b20b3dea64486f8ce4981a3dd907fd31 extends Twig_Template
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
        $__internal_36dc9e94a314474aafa9ddb281fb94c8410384301b58827a1621c59944d132da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36dc9e94a314474aafa9ddb281fb94c8410384301b58827a1621c59944d132da->enter($__internal_36dc9e94a314474aafa9ddb281fb94c8410384301b58827a1621c59944d132da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_e5744a057fd9f6c26b9c6db98c4fef3dbac65ce9cf0b71ea320ea5797915980c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5744a057fd9f6c26b9c6db98c4fef3dbac65ce9cf0b71ea320ea5797915980c->enter($__internal_e5744a057fd9f6c26b9c6db98c4fef3dbac65ce9cf0b71ea320ea5797915980c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_36dc9e94a314474aafa9ddb281fb94c8410384301b58827a1621c59944d132da->leave($__internal_36dc9e94a314474aafa9ddb281fb94c8410384301b58827a1621c59944d132da_prof);

        
        $__internal_e5744a057fd9f6c26b9c6db98c4fef3dbac65ce9cf0b71ea320ea5797915980c->leave($__internal_e5744a057fd9f6c26b9c6db98c4fef3dbac65ce9cf0b71ea320ea5797915980c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/Users/VictorChevalier/Documents/PHP/SymfonyTP/SymfonyTP/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
