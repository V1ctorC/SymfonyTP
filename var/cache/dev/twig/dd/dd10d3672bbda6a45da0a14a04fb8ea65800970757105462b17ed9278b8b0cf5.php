<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_2e05385a48fb93e57cefc7a5ee95c1483f2138a9660630f4a5004e72335f3939 extends Twig_Template
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
        $__internal_d38527ba801e89a90996c1b8b1b4d0dfc62658d8f3b4895f0221773c725ffe47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d38527ba801e89a90996c1b8b1b4d0dfc62658d8f3b4895f0221773c725ffe47->enter($__internal_d38527ba801e89a90996c1b8b1b4d0dfc62658d8f3b4895f0221773c725ffe47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_26594703f98c1f9563212fe5f1034c0c6b9a9067f4a4e972c26cbd79986e226b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26594703f98c1f9563212fe5f1034c0c6b9a9067f4a4e972c26cbd79986e226b->enter($__internal_26594703f98c1f9563212fe5f1034c0c6b9a9067f4a4e972c26cbd79986e226b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_d38527ba801e89a90996c1b8b1b4d0dfc62658d8f3b4895f0221773c725ffe47->leave($__internal_d38527ba801e89a90996c1b8b1b4d0dfc62658d8f3b4895f0221773c725ffe47_prof);

        
        $__internal_26594703f98c1f9563212fe5f1034c0c6b9a9067f4a4e972c26cbd79986e226b->leave($__internal_26594703f98c1f9563212fe5f1034c0c6b9a9067f4a4e972c26cbd79986e226b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/Users/VictorChevalier/Documents/PHP/SymfonyTP/SymfonyTP/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
