<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_744c421e1e08f50138d3bbccba9c4a78f28b416ceaa0f4f9657b3d6a934e1471 extends Twig_Template
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
        $__internal_f78729f6e9ee25b120bc976c0a52f3d7a32aa284d97b0d300c98423abdc68820 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f78729f6e9ee25b120bc976c0a52f3d7a32aa284d97b0d300c98423abdc68820->enter($__internal_f78729f6e9ee25b120bc976c0a52f3d7a32aa284d97b0d300c98423abdc68820_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_6d4b9ed0a9c31ffb5475b82ed53122b7c63592a661af5fc03429a5f76ffedf6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d4b9ed0a9c31ffb5475b82ed53122b7c63592a661af5fc03429a5f76ffedf6e->enter($__internal_6d4b9ed0a9c31ffb5475b82ed53122b7c63592a661af5fc03429a5f76ffedf6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_f78729f6e9ee25b120bc976c0a52f3d7a32aa284d97b0d300c98423abdc68820->leave($__internal_f78729f6e9ee25b120bc976c0a52f3d7a32aa284d97b0d300c98423abdc68820_prof);

        
        $__internal_6d4b9ed0a9c31ffb5475b82ed53122b7c63592a661af5fc03429a5f76ffedf6e->leave($__internal_6d4b9ed0a9c31ffb5475b82ed53122b7c63592a661af5fc03429a5f76ffedf6e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/Users/VictorChevalier/Documents/PHP/SymfonyTP/SymfonyTP/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
