<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_bc1bfe15eb0c1682c3df10213cf5a9ec1e103b13f1bcab79bcdc91cd6a77def5 extends Twig_Template
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
        $__internal_5e1bd8481f4a7862165c310d1086fcc91a58cafb3846c38eee011459b2e8ac9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e1bd8481f4a7862165c310d1086fcc91a58cafb3846c38eee011459b2e8ac9c->enter($__internal_5e1bd8481f4a7862165c310d1086fcc91a58cafb3846c38eee011459b2e8ac9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_5f15e09a1cfb5a29eab8541bc930a1dcd697394313098401b0d9d5a97592fe42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f15e09a1cfb5a29eab8541bc930a1dcd697394313098401b0d9d5a97592fe42->enter($__internal_5f15e09a1cfb5a29eab8541bc930a1dcd697394313098401b0d9d5a97592fe42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_5e1bd8481f4a7862165c310d1086fcc91a58cafb3846c38eee011459b2e8ac9c->leave($__internal_5e1bd8481f4a7862165c310d1086fcc91a58cafb3846c38eee011459b2e8ac9c_prof);

        
        $__internal_5f15e09a1cfb5a29eab8541bc930a1dcd697394313098401b0d9d5a97592fe42->leave($__internal_5f15e09a1cfb5a29eab8541bc930a1dcd697394313098401b0d9d5a97592fe42_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/Users/VictorChevalier/Documents/PHP/SymfonyTP/SymfonyTP/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
