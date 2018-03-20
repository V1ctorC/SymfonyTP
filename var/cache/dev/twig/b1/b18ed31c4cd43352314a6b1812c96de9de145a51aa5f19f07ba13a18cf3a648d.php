<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_6e2cd8997458de8dcd3f435ed9c87348b1b76877eaeadbb74e1360f924f641f6 extends Twig_Template
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
        $__internal_626107b3c4cfaf6390f2173d0969569c372996a8c915c75bce49395816e86e1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_626107b3c4cfaf6390f2173d0969569c372996a8c915c75bce49395816e86e1b->enter($__internal_626107b3c4cfaf6390f2173d0969569c372996a8c915c75bce49395816e86e1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_83f60318d19f738e18ffc8b0c7b7d442092ecca3b0173c2711098b5f08c92e96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83f60318d19f738e18ffc8b0c7b7d442092ecca3b0173c2711098b5f08c92e96->enter($__internal_83f60318d19f738e18ffc8b0c7b7d442092ecca3b0173c2711098b5f08c92e96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_626107b3c4cfaf6390f2173d0969569c372996a8c915c75bce49395816e86e1b->leave($__internal_626107b3c4cfaf6390f2173d0969569c372996a8c915c75bce49395816e86e1b_prof);

        
        $__internal_83f60318d19f738e18ffc8b0c7b7d442092ecca3b0173c2711098b5f08c92e96->leave($__internal_83f60318d19f738e18ffc8b0c7b7d442092ecca3b0173c2711098b5f08c92e96_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/Users/VictorChevalier/Documents/PHP/SymfonyTP/SymfonyTP/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
