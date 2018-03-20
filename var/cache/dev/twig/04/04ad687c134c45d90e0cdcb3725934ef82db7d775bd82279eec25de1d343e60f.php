<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_ac3c8afc7485c0d9cc2d552518f6bb65ab2eff845447274c1a0b9a1dc733a9dc extends Twig_Template
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
        $__internal_4aff91197338cdfdd72654dbd6e0f423fe1775741ebad968735d70c2db5ac017 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4aff91197338cdfdd72654dbd6e0f423fe1775741ebad968735d70c2db5ac017->enter($__internal_4aff91197338cdfdd72654dbd6e0f423fe1775741ebad968735d70c2db5ac017_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_68e9da992384b84395cb60a5a1591472bedcfee2257edd9bdf92b4dbc95407d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68e9da992384b84395cb60a5a1591472bedcfee2257edd9bdf92b4dbc95407d8->enter($__internal_68e9da992384b84395cb60a5a1591472bedcfee2257edd9bdf92b4dbc95407d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_4aff91197338cdfdd72654dbd6e0f423fe1775741ebad968735d70c2db5ac017->leave($__internal_4aff91197338cdfdd72654dbd6e0f423fe1775741ebad968735d70c2db5ac017_prof);

        
        $__internal_68e9da992384b84395cb60a5a1591472bedcfee2257edd9bdf92b4dbc95407d8->leave($__internal_68e9da992384b84395cb60a5a1591472bedcfee2257edd9bdf92b4dbc95407d8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/Users/VictorChevalier/Documents/PHP/SymfonyTP/SymfonyTP/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
