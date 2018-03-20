<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_0cf73d5893792eeda0d00fb03587ceee5be4f7472e9df275352e545c949b5e3b extends Twig_Template
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
        $__internal_ea632b3de20c8e687a8f70baeb70b077ea91c9d9477af516355920902cdfcc42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea632b3de20c8e687a8f70baeb70b077ea91c9d9477af516355920902cdfcc42->enter($__internal_ea632b3de20c8e687a8f70baeb70b077ea91c9d9477af516355920902cdfcc42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_164a176164fb12e373ea06c433a2955906b1de0b4d870e0fd941f67a3e2c9a01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_164a176164fb12e373ea06c433a2955906b1de0b4d870e0fd941f67a3e2c9a01->enter($__internal_164a176164fb12e373ea06c433a2955906b1de0b4d870e0fd941f67a3e2c9a01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_ea632b3de20c8e687a8f70baeb70b077ea91c9d9477af516355920902cdfcc42->leave($__internal_ea632b3de20c8e687a8f70baeb70b077ea91c9d9477af516355920902cdfcc42_prof);

        
        $__internal_164a176164fb12e373ea06c433a2955906b1de0b4d870e0fd941f67a3e2c9a01->leave($__internal_164a176164fb12e373ea06c433a2955906b1de0b4d870e0fd941f67a3e2c9a01_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/Users/VictorChevalier/Documents/PHP/SymfonyTP/SymfonyTP/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
