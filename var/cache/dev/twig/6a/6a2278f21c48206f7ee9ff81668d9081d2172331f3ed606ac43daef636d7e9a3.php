<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_e890e2471bf63b9d90d0658ad6bb37d460be625522422327e9f6ddf2f41e11a0 extends Twig_Template
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
        $__internal_3ad102fb82a3e2d562b76425ffca584f6a8c358843044de1d88279f31232ae3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ad102fb82a3e2d562b76425ffca584f6a8c358843044de1d88279f31232ae3e->enter($__internal_3ad102fb82a3e2d562b76425ffca584f6a8c358843044de1d88279f31232ae3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_de2637b198dd86e56ce009db8708c5ae0faf567e6b31f2329dfdf6cafda763bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de2637b198dd86e56ce009db8708c5ae0faf567e6b31f2329dfdf6cafda763bd->enter($__internal_de2637b198dd86e56ce009db8708c5ae0faf567e6b31f2329dfdf6cafda763bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_3ad102fb82a3e2d562b76425ffca584f6a8c358843044de1d88279f31232ae3e->leave($__internal_3ad102fb82a3e2d562b76425ffca584f6a8c358843044de1d88279f31232ae3e_prof);

        
        $__internal_de2637b198dd86e56ce009db8708c5ae0faf567e6b31f2329dfdf6cafda763bd->leave($__internal_de2637b198dd86e56ce009db8708c5ae0faf567e6b31f2329dfdf6cafda763bd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/Users/VictorChevalier/Documents/PHP/SymfonyTP/SymfonyTP/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
