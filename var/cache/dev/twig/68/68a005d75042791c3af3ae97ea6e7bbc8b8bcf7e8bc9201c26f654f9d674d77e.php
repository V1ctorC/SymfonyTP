<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_54d037e5162dfa915310efd058dc1aa6cbcf6bbba891aa6883f83f55c86cb241 extends Twig_Template
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
        $__internal_7e0a6af9e888a7fef62a50ab30e12cac15707548d0cf681b445fe4e933efcc24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e0a6af9e888a7fef62a50ab30e12cac15707548d0cf681b445fe4e933efcc24->enter($__internal_7e0a6af9e888a7fef62a50ab30e12cac15707548d0cf681b445fe4e933efcc24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_9d543aefe0cde7ca15dc3bfc72de8d3d190eb7cd8fa18296c6c8d0a8b1102764 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d543aefe0cde7ca15dc3bfc72de8d3d190eb7cd8fa18296c6c8d0a8b1102764->enter($__internal_9d543aefe0cde7ca15dc3bfc72de8d3d190eb7cd8fa18296c6c8d0a8b1102764_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_7e0a6af9e888a7fef62a50ab30e12cac15707548d0cf681b445fe4e933efcc24->leave($__internal_7e0a6af9e888a7fef62a50ab30e12cac15707548d0cf681b445fe4e933efcc24_prof);

        
        $__internal_9d543aefe0cde7ca15dc3bfc72de8d3d190eb7cd8fa18296c6c8d0a8b1102764->leave($__internal_9d543aefe0cde7ca15dc3bfc72de8d3d190eb7cd8fa18296c6c8d0a8b1102764_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/Users/VictorChevalier/Documents/PHP/SymfonyTP/SymfonyTP/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
