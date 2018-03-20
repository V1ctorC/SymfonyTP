<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_ff2814c4535e25ff5cc9ea8737fa8de347b740af97908b15085b3dd34d2f999a extends Twig_Template
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
        $__internal_2f2826606ae5912439aafb528fbcc3b050d9d3255c4be58b742399025714e85d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f2826606ae5912439aafb528fbcc3b050d9d3255c4be58b742399025714e85d->enter($__internal_2f2826606ae5912439aafb528fbcc3b050d9d3255c4be58b742399025714e85d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_216590dec7ff57b52cb8c0c24fa49b61b9f0b92eb57bf01dd9546f3a2a22158a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_216590dec7ff57b52cb8c0c24fa49b61b9f0b92eb57bf01dd9546f3a2a22158a->enter($__internal_216590dec7ff57b52cb8c0c24fa49b61b9f0b92eb57bf01dd9546f3a2a22158a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_2f2826606ae5912439aafb528fbcc3b050d9d3255c4be58b742399025714e85d->leave($__internal_2f2826606ae5912439aafb528fbcc3b050d9d3255c4be58b742399025714e85d_prof);

        
        $__internal_216590dec7ff57b52cb8c0c24fa49b61b9f0b92eb57bf01dd9546f3a2a22158a->leave($__internal_216590dec7ff57b52cb8c0c24fa49b61b9f0b92eb57bf01dd9546f3a2a22158a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/Users/VictorChevalier/Documents/PHP/SymfonyTP/SymfonyTP/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
