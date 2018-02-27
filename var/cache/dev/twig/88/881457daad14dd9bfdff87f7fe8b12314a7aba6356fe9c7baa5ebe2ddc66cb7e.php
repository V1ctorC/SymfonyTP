<?php

/* base.html.twig */
class __TwigTemplate_2e55ceb3e3a8172ee2bdb98420a739c71281e5768b9082c463522045b60e4555 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3278215bc2f388ecfc4ba3d7d08150156a06710351686c2c54654bec57f6c942 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3278215bc2f388ecfc4ba3d7d08150156a06710351686c2c54654bec57f6c942->enter($__internal_3278215bc2f388ecfc4ba3d7d08150156a06710351686c2c54654bec57f6c942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_3e6295d404e623ae90122fe77d2fbdc3f4220d2869b81eca2faca3dcec68f240 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e6295d404e623ae90122fe77d2fbdc3f4220d2869b81eca2faca3dcec68f240->enter($__internal_3e6295d404e623ae90122fe77d2fbdc3f4220d2869b81eca2faca3dcec68f240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_3278215bc2f388ecfc4ba3d7d08150156a06710351686c2c54654bec57f6c942->leave($__internal_3278215bc2f388ecfc4ba3d7d08150156a06710351686c2c54654bec57f6c942_prof);

        
        $__internal_3e6295d404e623ae90122fe77d2fbdc3f4220d2869b81eca2faca3dcec68f240->leave($__internal_3e6295d404e623ae90122fe77d2fbdc3f4220d2869b81eca2faca3dcec68f240_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2a8e049c2b3c53eedeab7af8b2c18ecb9edcb11e78b59230667a7f7a87507398 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a8e049c2b3c53eedeab7af8b2c18ecb9edcb11e78b59230667a7f7a87507398->enter($__internal_2a8e049c2b3c53eedeab7af8b2c18ecb9edcb11e78b59230667a7f7a87507398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2d248248d98e7860175bd16eb73c863efd88420081e909666e3bd7aad9321937 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d248248d98e7860175bd16eb73c863efd88420081e909666e3bd7aad9321937->enter($__internal_2d248248d98e7860175bd16eb73c863efd88420081e909666e3bd7aad9321937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_2d248248d98e7860175bd16eb73c863efd88420081e909666e3bd7aad9321937->leave($__internal_2d248248d98e7860175bd16eb73c863efd88420081e909666e3bd7aad9321937_prof);

        
        $__internal_2a8e049c2b3c53eedeab7af8b2c18ecb9edcb11e78b59230667a7f7a87507398->leave($__internal_2a8e049c2b3c53eedeab7af8b2c18ecb9edcb11e78b59230667a7f7a87507398_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_46a9ce0beb3dedac69a9491ada0bc4ed4131f2105053b9347a6fef4f577b9ad4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46a9ce0beb3dedac69a9491ada0bc4ed4131f2105053b9347a6fef4f577b9ad4->enter($__internal_46a9ce0beb3dedac69a9491ada0bc4ed4131f2105053b9347a6fef4f577b9ad4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_cc3afbb0e39f7c491fd89d907649ad7218d48db4106f1b15ec11592143c543ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc3afbb0e39f7c491fd89d907649ad7218d48db4106f1b15ec11592143c543ec->enter($__internal_cc3afbb0e39f7c491fd89d907649ad7218d48db4106f1b15ec11592143c543ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_cc3afbb0e39f7c491fd89d907649ad7218d48db4106f1b15ec11592143c543ec->leave($__internal_cc3afbb0e39f7c491fd89d907649ad7218d48db4106f1b15ec11592143c543ec_prof);

        
        $__internal_46a9ce0beb3dedac69a9491ada0bc4ed4131f2105053b9347a6fef4f577b9ad4->leave($__internal_46a9ce0beb3dedac69a9491ada0bc4ed4131f2105053b9347a6fef4f577b9ad4_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_32383a32428e5b64670fad45edf6a0d220223190110af37b3d385377e23bfe4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32383a32428e5b64670fad45edf6a0d220223190110af37b3d385377e23bfe4e->enter($__internal_32383a32428e5b64670fad45edf6a0d220223190110af37b3d385377e23bfe4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e9800c0e0146e1b194b6db90824487223283b99ac248d37739d42a395f6ef9a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9800c0e0146e1b194b6db90824487223283b99ac248d37739d42a395f6ef9a7->enter($__internal_e9800c0e0146e1b194b6db90824487223283b99ac248d37739d42a395f6ef9a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e9800c0e0146e1b194b6db90824487223283b99ac248d37739d42a395f6ef9a7->leave($__internal_e9800c0e0146e1b194b6db90824487223283b99ac248d37739d42a395f6ef9a7_prof);

        
        $__internal_32383a32428e5b64670fad45edf6a0d220223190110af37b3d385377e23bfe4e->leave($__internal_32383a32428e5b64670fad45edf6a0d220223190110af37b3d385377e23bfe4e_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9bf8993cdef797edc0afc13cfce578f5118d360596714cce63437c4e11f981e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bf8993cdef797edc0afc13cfce578f5118d360596714cce63437c4e11f981e7->enter($__internal_9bf8993cdef797edc0afc13cfce578f5118d360596714cce63437c4e11f981e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a4b5c7d8a0df8a150f22bee0504850c8a065207660dba93b4fb6d9e0bf3836e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4b5c7d8a0df8a150f22bee0504850c8a065207660dba93b4fb6d9e0bf3836e0->enter($__internal_a4b5c7d8a0df8a150f22bee0504850c8a065207660dba93b4fb6d9e0bf3836e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a4b5c7d8a0df8a150f22bee0504850c8a065207660dba93b4fb6d9e0bf3836e0->leave($__internal_a4b5c7d8a0df8a150f22bee0504850c8a065207660dba93b4fb6d9e0bf3836e0_prof);

        
        $__internal_9bf8993cdef797edc0afc13cfce578f5118d360596714cce63437c4e11f981e7->leave($__internal_9bf8993cdef797edc0afc13cfce578f5118d360596714cce63437c4e11f981e7_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/Users/VictorChevalier/Documents/PHP/Symfony/Symfony/app/Resources/views/base.html.twig");
    }
}
