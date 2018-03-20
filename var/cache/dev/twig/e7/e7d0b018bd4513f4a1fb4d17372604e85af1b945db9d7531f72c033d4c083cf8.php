<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_a673ceafd720c665011418fe4d7e17959c129a9bfa99d999ab0acaad0fb16271 extends Twig_Template
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
        $__internal_53cb8a7feff05b4f7bb40a2642cfc4a070530ae5e95e905d4d8610bfd3e99565 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53cb8a7feff05b4f7bb40a2642cfc4a070530ae5e95e905d4d8610bfd3e99565->enter($__internal_53cb8a7feff05b4f7bb40a2642cfc4a070530ae5e95e905d4d8610bfd3e99565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_b10961eca377ed8efd88994eee0ee8a1de3f1800ef4eaf9ff5e54d1b19748f31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b10961eca377ed8efd88994eee0ee8a1de3f1800ef4eaf9ff5e54d1b19748f31->enter($__internal_b10961eca377ed8efd88994eee0ee8a1de3f1800ef4eaf9ff5e54d1b19748f31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_53cb8a7feff05b4f7bb40a2642cfc4a070530ae5e95e905d4d8610bfd3e99565->leave($__internal_53cb8a7feff05b4f7bb40a2642cfc4a070530ae5e95e905d4d8610bfd3e99565_prof);

        
        $__internal_b10961eca377ed8efd88994eee0ee8a1de3f1800ef4eaf9ff5e54d1b19748f31->leave($__internal_b10961eca377ed8efd88994eee0ee8a1de3f1800ef4eaf9ff5e54d1b19748f31_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/Users/VictorChevalier/Documents/PHP/SymfonyTP/SymfonyTP/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
