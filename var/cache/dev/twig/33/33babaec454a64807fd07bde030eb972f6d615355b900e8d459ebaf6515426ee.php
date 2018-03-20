<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_426715d15a10e67499cb0f79af6dc60ac848ad426fa8e22c415a951118105d86 extends Twig_Template
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
        $__internal_b9944f75ec0b52f24c40d6c2a9e877b4faa4d3f53921686dbbd2c6ca75c77d8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9944f75ec0b52f24c40d6c2a9e877b4faa4d3f53921686dbbd2c6ca75c77d8e->enter($__internal_b9944f75ec0b52f24c40d6c2a9e877b4faa4d3f53921686dbbd2c6ca75c77d8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_59e148cfaaed43c6298ce9a1ff6657dfbe9253a9e63d3275434d890f1e39afa8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59e148cfaaed43c6298ce9a1ff6657dfbe9253a9e63d3275434d890f1e39afa8->enter($__internal_59e148cfaaed43c6298ce9a1ff6657dfbe9253a9e63d3275434d890f1e39afa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_b9944f75ec0b52f24c40d6c2a9e877b4faa4d3f53921686dbbd2c6ca75c77d8e->leave($__internal_b9944f75ec0b52f24c40d6c2a9e877b4faa4d3f53921686dbbd2c6ca75c77d8e_prof);

        
        $__internal_59e148cfaaed43c6298ce9a1ff6657dfbe9253a9e63d3275434d890f1e39afa8->leave($__internal_59e148cfaaed43c6298ce9a1ff6657dfbe9253a9e63d3275434d890f1e39afa8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/Users/VictorChevalier/Documents/PHP/SymfonyTP/SymfonyTP/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
