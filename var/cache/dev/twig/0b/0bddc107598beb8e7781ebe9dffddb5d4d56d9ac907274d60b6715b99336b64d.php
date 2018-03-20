<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_d9906a7bb6d4587fc2ea785007594fb1945e70c549a8eb237652fa8e706c8c68 extends Twig_Template
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
        $__internal_abe4a21f480e74aa55bdd1d521e3e31aa5495e9e8e9b03837009e248e74e5b99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abe4a21f480e74aa55bdd1d521e3e31aa5495e9e8e9b03837009e248e74e5b99->enter($__internal_abe4a21f480e74aa55bdd1d521e3e31aa5495e9e8e9b03837009e248e74e5b99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_3117e206eef5000dc24fc19ad9cb5d26a6a6d07843f26ea8ecf9bc5e4225c14b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3117e206eef5000dc24fc19ad9cb5d26a6a6d07843f26ea8ecf9bc5e4225c14b->enter($__internal_3117e206eef5000dc24fc19ad9cb5d26a6a6d07843f26ea8ecf9bc5e4225c14b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_abe4a21f480e74aa55bdd1d521e3e31aa5495e9e8e9b03837009e248e74e5b99->leave($__internal_abe4a21f480e74aa55bdd1d521e3e31aa5495e9e8e9b03837009e248e74e5b99_prof);

        
        $__internal_3117e206eef5000dc24fc19ad9cb5d26a6a6d07843f26ea8ecf9bc5e4225c14b->leave($__internal_3117e206eef5000dc24fc19ad9cb5d26a6a6d07843f26ea8ecf9bc5e4225c14b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/Users/VictorChevalier/Documents/PHP/SymfonyTP/SymfonyTP/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
