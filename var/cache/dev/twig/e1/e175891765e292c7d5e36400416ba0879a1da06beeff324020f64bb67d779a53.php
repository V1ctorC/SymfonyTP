<?php

/* OCPlatformBundle:Advert:index.html.twig */
class __TwigTemplate_63bcf2828ad0a28807a7e1644149a784780b718b9ec32cf941e59051f572171f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:index.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_faa21561cefd3314337388c5fc936e33e2fca0f73cecca11b4d115ba55afb797 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_faa21561cefd3314337388c5fc936e33e2fca0f73cecca11b4d115ba55afb797->enter($__internal_faa21561cefd3314337388c5fc936e33e2fca0f73cecca11b4d115ba55afb797_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:index.html.twig"));

        $__internal_b93d75e3fbc35c274d6f65f2c9bb3850d1b99a448a256f5dcad22dd285d6a5b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b93d75e3fbc35c274d6f65f2c9bb3850d1b99a448a256f5dcad22dd285d6a5b5->enter($__internal_b93d75e3fbc35c274d6f65f2c9bb3850d1b99a448a256f5dcad22dd285d6a5b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_faa21561cefd3314337388c5fc936e33e2fca0f73cecca11b4d115ba55afb797->leave($__internal_faa21561cefd3314337388c5fc936e33e2fca0f73cecca11b4d115ba55afb797_prof);

        
        $__internal_b93d75e3fbc35c274d6f65f2c9bb3850d1b99a448a256f5dcad22dd285d6a5b5->leave($__internal_b93d75e3fbc35c274d6f65f2c9bb3850d1b99a448a256f5dcad22dd285d6a5b5_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_32bf330f748275c188f7a80bff8d4ca21df8b8d135b3738b80e08f75d3de4727 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32bf330f748275c188f7a80bff8d4ca21df8b8d135b3738b80e08f75d3de4727->enter($__internal_32bf330f748275c188f7a80bff8d4ca21df8b8d135b3738b80e08f75d3de4727_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a6e3d14c775342ebf4259a166d5ede67a9cb43a3ec7ffea4f6674890243e029f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6e3d14c775342ebf4259a166d5ede67a9cb43a3ec7ffea4f6674890243e029f->enter($__internal_a6e3d14c775342ebf4259a166d5ede67a9cb43a3ec7ffea4f6674890243e029f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_a6e3d14c775342ebf4259a166d5ede67a9cb43a3ec7ffea4f6674890243e029f->leave($__internal_a6e3d14c775342ebf4259a166d5ede67a9cb43a3ec7ffea4f6674890243e029f_prof);

        
        $__internal_32bf330f748275c188f7a80bff8d4ca21df8b8d135b3738b80e08f75d3de4727->leave($__internal_32bf330f748275c188f7a80bff8d4ca21df8b8d135b3738b80e08f75d3de4727_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_0ab3a6edc9e3a1255f925faaf6752a9e5529e3900a20efe5b1505536d7a988fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ab3a6edc9e3a1255f925faaf6752a9e5529e3900a20efe5b1505536d7a988fa->enter($__internal_0ab3a6edc9e3a1255f925faaf6752a9e5529e3900a20efe5b1505536d7a988fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_f16ea467aef07bd05f8d2a96a43b03a269dc55a935cfaefeea16eaf7773831ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f16ea467aef07bd05f8d2a96a43b03a269dc55a935cfaefeea16eaf7773831ac->enter($__internal_f16ea467aef07bd05f8d2a96a43b03a269dc55a935cfaefeea16eaf7773831ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 10
        echo "
    <h2>Liste des annonces</h2>

    <ul>
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listAdverts"] ?? $this->getContext($context, "listAdverts")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 15
            echo "            <li>
                <a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_view", array("id" => $this->getAttribute($context["advert"], "id", array()))), "html", null, true);
            echo "\">
                    ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "title", array()), "html", null, true);
            echo "
                </a>
                par ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "author", array()), "html", null, true);
            echo ",
                le ";
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["advert"], "date", array()), "d/m/Y"), "html", null, true);
            echo "
            </li>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 23
            echo "            <li>Pas (encore !) d'annonces</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    </ul>

";
        
        $__internal_f16ea467aef07bd05f8d2a96a43b03a269dc55a935cfaefeea16eaf7773831ac->leave($__internal_f16ea467aef07bd05f8d2a96a43b03a269dc55a935cfaefeea16eaf7773831ac_prof);

        
        $__internal_0ab3a6edc9e3a1255f925faaf6752a9e5529e3900a20efe5b1505536d7a988fa->leave($__internal_0ab3a6edc9e3a1255f925faaf6752a9e5529e3900a20efe5b1505536d7a988fa_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 25,  107 => 23,  99 => 20,  95 => 19,  90 => 17,  86 => 16,  83 => 15,  78 => 14,  72 => 10,  63 => 9,  50 => 6,  41 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/views/Advert/index.html.twig #}

{% extends \"OCPlatformBundle::layout.html.twig\" %}

{% block title %}
    Accueil - {{ parent() }}
{% endblock %}

{% block ocplatform_body %}

    <h2>Liste des annonces</h2>

    <ul>
        {% for advert in listAdverts %}
            <li>
                <a href=\"{{ path('oc_platform_view', {'id': advert.id}) }}\">
                    {{ advert.title }}
                </a>
                par {{ advert.author }},
                le {{ advert.date|date('d/m/Y') }}
            </li>
        {% else %}
            <li>Pas (encore !) d'annonces</li>
        {% endfor %}
    </ul>

{% endblock %}", "OCPlatformBundle:Advert:index.html.twig", "/Users/VictorChevalier/Documents/PHP/SymfonyTP/SymfonyTP/src/OC/PlatformBundle/Resources/views/Advert/index.html.twig");
    }
}
