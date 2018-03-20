<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_5a2fe667ffb853048e57f164ce6f24e226f1ff151c606fe9cb902b81e31f21e6 extends Twig_Template
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
        $__internal_5277ccad82cc4d79057eed6b6f3d9810a54600cb7dc96f99cf426367922b9ccc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5277ccad82cc4d79057eed6b6f3d9810a54600cb7dc96f99cf426367922b9ccc->enter($__internal_5277ccad82cc4d79057eed6b6f3d9810a54600cb7dc96f99cf426367922b9ccc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_d3cef0529118a63706bcfcf2c29b65d3cf0544efef1d6aa661cd5e6160ff1d5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3cef0529118a63706bcfcf2c29b65d3cf0544efef1d6aa661cd5e6160ff1d5d->enter($__internal_d3cef0529118a63706bcfcf2c29b65d3cf0544efef1d6aa661cd5e6160ff1d5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_5277ccad82cc4d79057eed6b6f3d9810a54600cb7dc96f99cf426367922b9ccc->leave($__internal_5277ccad82cc4d79057eed6b6f3d9810a54600cb7dc96f99cf426367922b9ccc_prof);

        
        $__internal_d3cef0529118a63706bcfcf2c29b65d3cf0544efef1d6aa661cd5e6160ff1d5d->leave($__internal_d3cef0529118a63706bcfcf2c29b65d3cf0544efef1d6aa661cd5e6160ff1d5d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/Users/VictorChevalier/Documents/PHP/SymfonyTP/SymfonyTP/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
