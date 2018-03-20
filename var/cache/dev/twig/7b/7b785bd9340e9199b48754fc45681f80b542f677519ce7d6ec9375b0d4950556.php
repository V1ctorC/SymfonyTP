<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_964e8ad35f4cbf0d7dcd1b9d02a66645a5af639f97878953f462401a21938253 extends Twig_Template
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
        $__internal_979b91b2222ba1318fbf086de4766e5ff1d0009eda526634bc2bf5b18f8350a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_979b91b2222ba1318fbf086de4766e5ff1d0009eda526634bc2bf5b18f8350a8->enter($__internal_979b91b2222ba1318fbf086de4766e5ff1d0009eda526634bc2bf5b18f8350a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_e709298902feb4e5737af30ab50381a078d20b372ca96c55d3d7bdae061a456d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e709298902feb4e5737af30ab50381a078d20b372ca96c55d3d7bdae061a456d->enter($__internal_e709298902feb4e5737af30ab50381a078d20b372ca96c55d3d7bdae061a456d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_979b91b2222ba1318fbf086de4766e5ff1d0009eda526634bc2bf5b18f8350a8->leave($__internal_979b91b2222ba1318fbf086de4766e5ff1d0009eda526634bc2bf5b18f8350a8_prof);

        
        $__internal_e709298902feb4e5737af30ab50381a078d20b372ca96c55d3d7bdae061a456d->leave($__internal_e709298902feb4e5737af30ab50381a078d20b372ca96c55d3d7bdae061a456d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/Users/VictorChevalier/Documents/PHP/SymfonyTP/SymfonyTP/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
