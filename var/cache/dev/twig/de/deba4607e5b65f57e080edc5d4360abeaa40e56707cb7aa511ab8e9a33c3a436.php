<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_52c014fc3cd0c4635ced7b994c29f11953e244a0aa7f52e7a871d0d09cbbeebf extends Twig_Template
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
        $__internal_7c9f21e7b38c7130c2c45501458045b230bdfa1aaa2b590b7b76b685be70b6ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c9f21e7b38c7130c2c45501458045b230bdfa1aaa2b590b7b76b685be70b6ba->enter($__internal_7c9f21e7b38c7130c2c45501458045b230bdfa1aaa2b590b7b76b685be70b6ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_f0d2582d7c3e5ae8c5a38506da9f866fd3d6ecf2e10251dc232817ca470f574e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0d2582d7c3e5ae8c5a38506da9f866fd3d6ecf2e10251dc232817ca470f574e->enter($__internal_f0d2582d7c3e5ae8c5a38506da9f866fd3d6ecf2e10251dc232817ca470f574e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_7c9f21e7b38c7130c2c45501458045b230bdfa1aaa2b590b7b76b685be70b6ba->leave($__internal_7c9f21e7b38c7130c2c45501458045b230bdfa1aaa2b590b7b76b685be70b6ba_prof);

        
        $__internal_f0d2582d7c3e5ae8c5a38506da9f866fd3d6ecf2e10251dc232817ca470f574e->leave($__internal_f0d2582d7c3e5ae8c5a38506da9f866fd3d6ecf2e10251dc232817ca470f574e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/Users/VictorChevalier/Documents/PHP/SymfonyTP/SymfonyTP/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
