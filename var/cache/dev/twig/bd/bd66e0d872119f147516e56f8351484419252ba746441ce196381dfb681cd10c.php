<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_22f436b747089ac4b2bb71f1cc99874e82c0e76be258f6b9f829e6bdebfb49f1 extends Twig_Template
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
        $__internal_3f6e668eec26a250bf06c15b6e67f84e8fdef5359cd3192a30122870337807fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f6e668eec26a250bf06c15b6e67f84e8fdef5359cd3192a30122870337807fb->enter($__internal_3f6e668eec26a250bf06c15b6e67f84e8fdef5359cd3192a30122870337807fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_df63faaf4b5f4362ce8e51da8c63e75812a7afb7702a6e613f7a3f7634bf3a22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df63faaf4b5f4362ce8e51da8c63e75812a7afb7702a6e613f7a3f7634bf3a22->enter($__internal_df63faaf4b5f4362ce8e51da8c63e75812a7afb7702a6e613f7a3f7634bf3a22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_3f6e668eec26a250bf06c15b6e67f84e8fdef5359cd3192a30122870337807fb->leave($__internal_3f6e668eec26a250bf06c15b6e67f84e8fdef5359cd3192a30122870337807fb_prof);

        
        $__internal_df63faaf4b5f4362ce8e51da8c63e75812a7afb7702a6e613f7a3f7634bf3a22->leave($__internal_df63faaf4b5f4362ce8e51da8c63e75812a7afb7702a6e613f7a3f7634bf3a22_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/Users/VictorChevalier/Documents/PHP/SymfonyTP/SymfonyTP/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
