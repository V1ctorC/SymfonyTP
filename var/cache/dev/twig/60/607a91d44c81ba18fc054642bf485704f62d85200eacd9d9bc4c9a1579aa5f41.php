<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_9359811080183b2bba609c5259ca8b40a6020e024e821399c25d469fcc7f31a0 extends Twig_Template
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
        $__internal_3d90505a8a28d4f7e4ecd3bef25232f99796fe98c7bde7c61922b8eb050704ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d90505a8a28d4f7e4ecd3bef25232f99796fe98c7bde7c61922b8eb050704ec->enter($__internal_3d90505a8a28d4f7e4ecd3bef25232f99796fe98c7bde7c61922b8eb050704ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_c83a367b43f4fbfe0c373a487dffd4f3ea3b3887d6af8f884e75363d88802e37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c83a367b43f4fbfe0c373a487dffd4f3ea3b3887d6af8f884e75363d88802e37->enter($__internal_c83a367b43f4fbfe0c373a487dffd4f3ea3b3887d6af8f884e75363d88802e37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_3d90505a8a28d4f7e4ecd3bef25232f99796fe98c7bde7c61922b8eb050704ec->leave($__internal_3d90505a8a28d4f7e4ecd3bef25232f99796fe98c7bde7c61922b8eb050704ec_prof);

        
        $__internal_c83a367b43f4fbfe0c373a487dffd4f3ea3b3887d6af8f884e75363d88802e37->leave($__internal_c83a367b43f4fbfe0c373a487dffd4f3ea3b3887d6af8f884e75363d88802e37_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/Users/VictorChevalier/Documents/PHP/SymfonyTP/SymfonyTP/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
