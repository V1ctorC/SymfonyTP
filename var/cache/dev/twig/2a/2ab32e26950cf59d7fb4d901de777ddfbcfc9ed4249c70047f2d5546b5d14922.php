<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_5f270917a48f234e4fd9496ccf82bf7dea7e8dfaa2a11e2256bf27a95bd32720 extends Twig_Template
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
        $__internal_ba237744c622c5d88045721c00a741a6b8a9c9d1f5806283c26f619b71cceb17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba237744c622c5d88045721c00a741a6b8a9c9d1f5806283c26f619b71cceb17->enter($__internal_ba237744c622c5d88045721c00a741a6b8a9c9d1f5806283c26f619b71cceb17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_687db899c175e2e7c3f6faa19cd8a81de6e9e4164faa42604ea120c4d73eeb26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_687db899c175e2e7c3f6faa19cd8a81de6e9e4164faa42604ea120c4d73eeb26->enter($__internal_687db899c175e2e7c3f6faa19cd8a81de6e9e4164faa42604ea120c4d73eeb26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_ba237744c622c5d88045721c00a741a6b8a9c9d1f5806283c26f619b71cceb17->leave($__internal_ba237744c622c5d88045721c00a741a6b8a9c9d1f5806283c26f619b71cceb17_prof);

        
        $__internal_687db899c175e2e7c3f6faa19cd8a81de6e9e4164faa42604ea120c4d73eeb26->leave($__internal_687db899c175e2e7c3f6faa19cd8a81de6e9e4164faa42604ea120c4d73eeb26_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/Users/VictorChevalier/Documents/PHP/SymfonyTP/SymfonyTP/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
