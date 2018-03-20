<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_3e8aa2a8526e3f074d9a1dcef3cf2ff715b05e24568d1503a5d1d06f41a5edc8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dcc4afa7c1d539e8b2fdacd2c6f2c24e22264874e96d6f35185edbbc5d1482dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcc4afa7c1d539e8b2fdacd2c6f2c24e22264874e96d6f35185edbbc5d1482dd->enter($__internal_dcc4afa7c1d539e8b2fdacd2c6f2c24e22264874e96d6f35185edbbc5d1482dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_377606743bb6e8b634231fc655dd227fdfe2f70ae838cd9ecd82b49c2965cb52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_377606743bb6e8b634231fc655dd227fdfe2f70ae838cd9ecd82b49c2965cb52->enter($__internal_377606743bb6e8b634231fc655dd227fdfe2f70ae838cd9ecd82b49c2965cb52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('button_widget', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('money_widget', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('date_widget', $context, $blocks);
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('time_widget', $context, $blocks);
        // line 90
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 128
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 132
        echo "
";
        // line 133
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 152
        echo "
";
        // line 153
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 163
        echo "
";
        // line 164
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 174
        echo "
";
        // line 176
        echo "
";
        // line 177
        $this->displayBlock('form_label', $context, $blocks);
        // line 181
        echo "
";
        // line 182
        $this->displayBlock('choice_label', $context, $blocks);
        // line 187
        echo "
";
        // line 188
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 191
        echo "
";
        // line 192
        $this->displayBlock('radio_label', $context, $blocks);
        // line 195
        echo "
";
        // line 196
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 220
        echo "
";
        // line 222
        echo "
";
        // line 223
        $this->displayBlock('form_row', $context, $blocks);
        // line 230
        echo "
";
        // line 231
        $this->displayBlock('button_row', $context, $blocks);
        // line 236
        echo "
";
        // line 237
        $this->displayBlock('choice_row', $context, $blocks);
        // line 241
        echo "
";
        // line 242
        $this->displayBlock('date_row', $context, $blocks);
        // line 246
        echo "
";
        // line 247
        $this->displayBlock('time_row', $context, $blocks);
        // line 251
        echo "
";
        // line 252
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 256
        echo "
";
        // line 257
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 263
        echo "
";
        // line 264
        $this->displayBlock('radio_row', $context, $blocks);
        // line 270
        echo "
";
        // line 272
        echo "
";
        // line 273
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_dcc4afa7c1d539e8b2fdacd2c6f2c24e22264874e96d6f35185edbbc5d1482dd->leave($__internal_dcc4afa7c1d539e8b2fdacd2c6f2c24e22264874e96d6f35185edbbc5d1482dd_prof);

        
        $__internal_377606743bb6e8b634231fc655dd227fdfe2f70ae838cd9ecd82b49c2965cb52->leave($__internal_377606743bb6e8b634231fc655dd227fdfe2f70ae838cd9ecd82b49c2965cb52_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_8e8503b5260eccbedf88cc9ceade37787f02fa9e47d2a0fe6ca9eabbc1d89401 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e8503b5260eccbedf88cc9ceade37787f02fa9e47d2a0fe6ca9eabbc1d89401->enter($__internal_8e8503b5260eccbedf88cc9ceade37787f02fa9e47d2a0fe6ca9eabbc1d89401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_848731933f9559fbbc95fad7d7914284f17b3ed711b3fcc857236f1ca45f6cf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_848731933f9559fbbc95fad7d7914284f17b3ed711b3fcc857236f1ca45f6cf2->enter($__internal_848731933f9559fbbc95fad7d7914284f17b3ed711b3fcc857236f1ca45f6cf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_848731933f9559fbbc95fad7d7914284f17b3ed711b3fcc857236f1ca45f6cf2->leave($__internal_848731933f9559fbbc95fad7d7914284f17b3ed711b3fcc857236f1ca45f6cf2_prof);

        
        $__internal_8e8503b5260eccbedf88cc9ceade37787f02fa9e47d2a0fe6ca9eabbc1d89401->leave($__internal_8e8503b5260eccbedf88cc9ceade37787f02fa9e47d2a0fe6ca9eabbc1d89401_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_c9bacc17367b2cdb7cd78d077e1b652b82dfb7349a36753c2f278eb1cea25eae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9bacc17367b2cdb7cd78d077e1b652b82dfb7349a36753c2f278eb1cea25eae->enter($__internal_c9bacc17367b2cdb7cd78d077e1b652b82dfb7349a36753c2f278eb1cea25eae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_868cf1838a79b826364f6af69cbe34b5a9dfbb4d4b23f487ded8968a318fd963 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_868cf1838a79b826364f6af69cbe34b5a9dfbb4d4b23f487ded8968a318fd963->enter($__internal_868cf1838a79b826364f6af69cbe34b5a9dfbb4d4b23f487ded8968a318fd963_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_868cf1838a79b826364f6af69cbe34b5a9dfbb4d4b23f487ded8968a318fd963->leave($__internal_868cf1838a79b826364f6af69cbe34b5a9dfbb4d4b23f487ded8968a318fd963_prof);

        
        $__internal_c9bacc17367b2cdb7cd78d077e1b652b82dfb7349a36753c2f278eb1cea25eae->leave($__internal_c9bacc17367b2cdb7cd78d077e1b652b82dfb7349a36753c2f278eb1cea25eae_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_3a3f49f24a28c6d2fd318ac32f5f7c52e066ed8ded59edcf8323026425e49363 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a3f49f24a28c6d2fd318ac32f5f7c52e066ed8ded59edcf8323026425e49363->enter($__internal_3a3f49f24a28c6d2fd318ac32f5f7c52e066ed8ded59edcf8323026425e49363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_731167286755da21766764f4626e5e27a153b9a725bc0f85b401703a1eecfcf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_731167286755da21766764f4626e5e27a153b9a725bc0f85b401703a1eecfcf9->enter($__internal_731167286755da21766764f4626e5e27a153b9a725bc0f85b401703a1eecfcf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_731167286755da21766764f4626e5e27a153b9a725bc0f85b401703a1eecfcf9->leave($__internal_731167286755da21766764f4626e5e27a153b9a725bc0f85b401703a1eecfcf9_prof);

        
        $__internal_3a3f49f24a28c6d2fd318ac32f5f7c52e066ed8ded59edcf8323026425e49363->leave($__internal_3a3f49f24a28c6d2fd318ac32f5f7c52e066ed8ded59edcf8323026425e49363_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_fefdedb552e48c363b45d67c3e424bb525ec7e140f9473ef26c132b010ef0d51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fefdedb552e48c363b45d67c3e424bb525ec7e140f9473ef26c132b010ef0d51->enter($__internal_fefdedb552e48c363b45d67c3e424bb525ec7e140f9473ef26c132b010ef0d51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_2f48e297952751eb741b4f90fba56893cbc13416ae62b6d79fde7a8fecd8e2aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f48e297952751eb741b4f90fba56893cbc13416ae62b6d79fde7a8fecd8e2aa->enter($__internal_2f48e297952751eb741b4f90fba56893cbc13416ae62b6d79fde7a8fecd8e2aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        $context["append"] = (is_string($__internal_4b6d97c4bc50618f76a03b5df278a9884fc2a6768d10476b882bd903922ae847 = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_7407bcb768d1d19531897594c1826fba548945ecf913c11d4914d21ee0b0138a = "{{") && ('' === $__internal_7407bcb768d1d19531897594c1826fba548945ecf913c11d4914d21ee0b0138a || 0 === strpos($__internal_4b6d97c4bc50618f76a03b5df278a9884fc2a6768d10476b882bd903922ae847, $__internal_7407bcb768d1d19531897594c1826fba548945ecf913c11d4914d21ee0b0138a)));
        // line 25
        echo "        ";
        if ( !($context["append"] ?? $this->getContext($context, "append"))) {
            // line 26
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 28
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 29
        if (($context["append"] ?? $this->getContext($context, "append"))) {
            // line 30
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 32
        echo "    </div>";
        
        $__internal_2f48e297952751eb741b4f90fba56893cbc13416ae62b6d79fde7a8fecd8e2aa->leave($__internal_2f48e297952751eb741b4f90fba56893cbc13416ae62b6d79fde7a8fecd8e2aa_prof);

        
        $__internal_fefdedb552e48c363b45d67c3e424bb525ec7e140f9473ef26c132b010ef0d51->leave($__internal_fefdedb552e48c363b45d67c3e424bb525ec7e140f9473ef26c132b010ef0d51_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_e1ab333fcb58ef8601c110f8e8939735491bda9ab434f7bd592ba3537d0fe49d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1ab333fcb58ef8601c110f8e8939735491bda9ab434f7bd592ba3537d0fe49d->enter($__internal_e1ab333fcb58ef8601c110f8e8939735491bda9ab434f7bd592ba3537d0fe49d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_3255e1c0b4e03e735e30d709ad913472c02d3677bb9db2f0d372bfc512f9b4c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3255e1c0b4e03e735e30d709ad913472c02d3677bb9db2f0d372bfc512f9b4c4->enter($__internal_3255e1c0b4e03e735e30d709ad913472c02d3677bb9db2f0d372bfc512f9b4c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_3255e1c0b4e03e735e30d709ad913472c02d3677bb9db2f0d372bfc512f9b4c4->leave($__internal_3255e1c0b4e03e735e30d709ad913472c02d3677bb9db2f0d372bfc512f9b4c4_prof);

        
        $__internal_e1ab333fcb58ef8601c110f8e8939735491bda9ab434f7bd592ba3537d0fe49d->leave($__internal_e1ab333fcb58ef8601c110f8e8939735491bda9ab434f7bd592ba3537d0fe49d_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_91530e7bde99c4d5bcfd9f32e9f9251b199ee5e090b7e76879c2c0d09e94601d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91530e7bde99c4d5bcfd9f32e9f9251b199ee5e090b7e76879c2c0d09e94601d->enter($__internal_91530e7bde99c4d5bcfd9f32e9f9251b199ee5e090b7e76879c2c0d09e94601d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_73890d5e31a989c1915adbfcaac25de1ff6b0a9fdad43e229e4bad554898d766 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73890d5e31a989c1915adbfcaac25de1ff6b0a9fdad43e229e4bad554898d766->enter($__internal_73890d5e31a989c1915adbfcaac25de1ff6b0a9fdad43e229e4bad554898d766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 43
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 44
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 46
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 47
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 48
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            // line 49
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            // line 50
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 51
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 52
            echo "</div>";
        }
        
        $__internal_73890d5e31a989c1915adbfcaac25de1ff6b0a9fdad43e229e4bad554898d766->leave($__internal_73890d5e31a989c1915adbfcaac25de1ff6b0a9fdad43e229e4bad554898d766_prof);

        
        $__internal_91530e7bde99c4d5bcfd9f32e9f9251b199ee5e090b7e76879c2c0d09e94601d->leave($__internal_91530e7bde99c4d5bcfd9f32e9f9251b199ee5e090b7e76879c2c0d09e94601d_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_a9859d65c46d52f4719f873df34ce4649f6c4f57bab76e5f2ff15460cea38f99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9859d65c46d52f4719f873df34ce4649f6c4f57bab76e5f2ff15460cea38f99->enter($__internal_a9859d65c46d52f4719f873df34ce4649f6c4f57bab76e5f2ff15460cea38f99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_248eab53626dbbffee88992fa282a34425a2798b29740ce4343d9ed98309be27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_248eab53626dbbffee88992fa282a34425a2798b29740ce4343d9ed98309be27->enter($__internal_248eab53626dbbffee88992fa282a34425a2798b29740ce4343d9ed98309be27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 57
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 58
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 60
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 61
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 62
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 64
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 65
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 66
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 67
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 69
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 70
                echo "</div>";
            }
        }
        
        $__internal_248eab53626dbbffee88992fa282a34425a2798b29740ce4343d9ed98309be27->leave($__internal_248eab53626dbbffee88992fa282a34425a2798b29740ce4343d9ed98309be27_prof);

        
        $__internal_a9859d65c46d52f4719f873df34ce4649f6c4f57bab76e5f2ff15460cea38f99->leave($__internal_a9859d65c46d52f4719f873df34ce4649f6c4f57bab76e5f2ff15460cea38f99_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_6bed07f8a7a7e6fd5fc708d534d9bdb67a3e2996d32fcdd930ddf94f25fda3bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bed07f8a7a7e6fd5fc708d534d9bdb67a3e2996d32fcdd930ddf94f25fda3bd->enter($__internal_6bed07f8a7a7e6fd5fc708d534d9bdb67a3e2996d32fcdd930ddf94f25fda3bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_39807ded62f567468e5a582b9d5914053bbd09780156d0f18f11c1dd065558a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39807ded62f567468e5a582b9d5914053bbd09780156d0f18f11c1dd065558a5->enter($__internal_39807ded62f567468e5a582b9d5914053bbd09780156d0f18f11c1dd065558a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 76
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 77
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 79
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 80
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 81
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 83
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
            }
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 84
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 85
                echo "</div>";
            }
        }
        
        $__internal_39807ded62f567468e5a582b9d5914053bbd09780156d0f18f11c1dd065558a5->leave($__internal_39807ded62f567468e5a582b9d5914053bbd09780156d0f18f11c1dd065558a5_prof);

        
        $__internal_6bed07f8a7a7e6fd5fc708d534d9bdb67a3e2996d32fcdd930ddf94f25fda3bd->leave($__internal_6bed07f8a7a7e6fd5fc708d534d9bdb67a3e2996d32fcdd930ddf94f25fda3bd_prof);

    }

    // line 90
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_2326351562b16974307c4a36f2b23224359845bc535d7f4a3bf4d93f411fad2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2326351562b16974307c4a36f2b23224359845bc535d7f4a3bf4d93f411fad2b->enter($__internal_2326351562b16974307c4a36f2b23224359845bc535d7f4a3bf4d93f411fad2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_95ce95f7753216df2811cb219558a1789f5a02182b186be888695c174b908336 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95ce95f7753216df2811cb219558a1789f5a02182b186be888695c174b908336->enter($__internal_95ce95f7753216df2811cb219558a1789f5a02182b186be888695c174b908336_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 91
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 95
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 96
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 97
            echo "<div class=\"table-responsive\">
                <table class=\"table ";
            // line 98
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter(($context["table_class"] ?? $this->getContext($context, "table_class")), "table-bordered table-condensed table-striped")) : ("table-bordered table-condensed table-striped")), "html", null, true);
            echo "\">
                    <thead>
                    <tr>";
            // line 101
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'label');
                echo "</th>";
            }
            // line 102
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'label');
                echo "</th>";
            }
            // line 103
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 104
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'label');
                echo "</th>";
            }
            // line 105
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'label');
                echo "</th>";
            }
            // line 106
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 107
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 108
            echo "</tr>
                    </thead>
                    <tbody>
                    <tr>";
            // line 112
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'widget');
                echo "</td>";
            }
            // line 113
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'widget');
                echo "</td>";
            }
            // line 114
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 115
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'widget');
                echo "</td>";
            }
            // line 116
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 117
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 118
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 119
            echo "</tr>
                    </tbody>
                </table>
            </div>";
            // line 123
            if (($context["with_invert"] ?? $this->getContext($context, "with_invert"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "invert", array()), 'widget');
            }
            // line 124
            echo "</div>";
        }
        
        $__internal_95ce95f7753216df2811cb219558a1789f5a02182b186be888695c174b908336->leave($__internal_95ce95f7753216df2811cb219558a1789f5a02182b186be888695c174b908336_prof);

        
        $__internal_2326351562b16974307c4a36f2b23224359845bc535d7f4a3bf4d93f411fad2b->leave($__internal_2326351562b16974307c4a36f2b23224359845bc535d7f4a3bf4d93f411fad2b_prof);

    }

    // line 128
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_ff04f8abc3a8b832bdd105850e82ca9eeef493c78e37d11349bbdf4406dc4d51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff04f8abc3a8b832bdd105850e82ca9eeef493c78e37d11349bbdf4406dc4d51->enter($__internal_ff04f8abc3a8b832bdd105850e82ca9eeef493c78e37d11349bbdf4406dc4d51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_70b3ea6f7cafcf823f9e0276fbcba47432a5f53f43227209af036dc01442586d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70b3ea6f7cafcf823f9e0276fbcba47432a5f53f43227209af036dc01442586d->enter($__internal_70b3ea6f7cafcf823f9e0276fbcba47432a5f53f43227209af036dc01442586d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 129
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 130
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_70b3ea6f7cafcf823f9e0276fbcba47432a5f53f43227209af036dc01442586d->leave($__internal_70b3ea6f7cafcf823f9e0276fbcba47432a5f53f43227209af036dc01442586d_prof);

        
        $__internal_ff04f8abc3a8b832bdd105850e82ca9eeef493c78e37d11349bbdf4406dc4d51->leave($__internal_ff04f8abc3a8b832bdd105850e82ca9eeef493c78e37d11349bbdf4406dc4d51_prof);

    }

    // line 133
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_d4061d2389333cdffadba149d4e6c9ed900344f184e8dcef7995833697d9beef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4061d2389333cdffadba149d4e6c9ed900344f184e8dcef7995833697d9beef->enter($__internal_d4061d2389333cdffadba149d4e6c9ed900344f184e8dcef7995833697d9beef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_29f2418b11be9d7afb9b43717c8853d9d8188b1fd9feea7c9ac7c4854c642854 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29f2418b11be9d7afb9b43717c8853d9d8188b1fd9feea7c9ac7c4854c642854->enter($__internal_29f2418b11be9d7afb9b43717c8853d9d8188b1fd9feea7c9ac7c4854c642854_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 134
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 135
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 136
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 137
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 138
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 142
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 143
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 144
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 145
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 146
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 149
            echo "</div>";
        }
        
        $__internal_29f2418b11be9d7afb9b43717c8853d9d8188b1fd9feea7c9ac7c4854c642854->leave($__internal_29f2418b11be9d7afb9b43717c8853d9d8188b1fd9feea7c9ac7c4854c642854_prof);

        
        $__internal_d4061d2389333cdffadba149d4e6c9ed900344f184e8dcef7995833697d9beef->leave($__internal_d4061d2389333cdffadba149d4e6c9ed900344f184e8dcef7995833697d9beef_prof);

    }

    // line 153
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_01ca2030415066b66e3eb290012bf7512563c2b568981b5ff3bdfc884c5a7e8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01ca2030415066b66e3eb290012bf7512563c2b568981b5ff3bdfc884c5a7e8c->enter($__internal_01ca2030415066b66e3eb290012bf7512563c2b568981b5ff3bdfc884c5a7e8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_c97567b2d01f7224b43ed65502aef6d0dc4c098af5dd9b3aa5272f75f55529df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c97567b2d01f7224b43ed65502aef6d0dc4c098af5dd9b3aa5272f75f55529df->enter($__internal_c97567b2d01f7224b43ed65502aef6d0dc4c098af5dd9b3aa5272f75f55529df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 154
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 155
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 156
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 158
            echo "<div class=\"checkbox\">";
            // line 159
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 160
            echo "</div>";
        }
        
        $__internal_c97567b2d01f7224b43ed65502aef6d0dc4c098af5dd9b3aa5272f75f55529df->leave($__internal_c97567b2d01f7224b43ed65502aef6d0dc4c098af5dd9b3aa5272f75f55529df_prof);

        
        $__internal_01ca2030415066b66e3eb290012bf7512563c2b568981b5ff3bdfc884c5a7e8c->leave($__internal_01ca2030415066b66e3eb290012bf7512563c2b568981b5ff3bdfc884c5a7e8c_prof);

    }

    // line 164
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_c469177297a73b5c7d730fcef6dcfd7a457087450c3f2d07a47973e76396d730 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c469177297a73b5c7d730fcef6dcfd7a457087450c3f2d07a47973e76396d730->enter($__internal_c469177297a73b5c7d730fcef6dcfd7a457087450c3f2d07a47973e76396d730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_75205fc646509f1172117b0b74bfe496be2b4340e05f12c5b7f0a93d6aa7f5eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75205fc646509f1172117b0b74bfe496be2b4340e05f12c5b7f0a93d6aa7f5eb->enter($__internal_75205fc646509f1172117b0b74bfe496be2b4340e05f12c5b7f0a93d6aa7f5eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 165
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 166
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 167
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 169
            echo "<div class=\"radio\">";
            // line 170
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 171
            echo "</div>";
        }
        
        $__internal_75205fc646509f1172117b0b74bfe496be2b4340e05f12c5b7f0a93d6aa7f5eb->leave($__internal_75205fc646509f1172117b0b74bfe496be2b4340e05f12c5b7f0a93d6aa7f5eb_prof);

        
        $__internal_c469177297a73b5c7d730fcef6dcfd7a457087450c3f2d07a47973e76396d730->leave($__internal_c469177297a73b5c7d730fcef6dcfd7a457087450c3f2d07a47973e76396d730_prof);

    }

    // line 177
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_ea672ecf547e0dcaaf905e7b7ed2bfb14cc6bcf4bdc0e299a0f0f8f6450b92d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea672ecf547e0dcaaf905e7b7ed2bfb14cc6bcf4bdc0e299a0f0f8f6450b92d0->enter($__internal_ea672ecf547e0dcaaf905e7b7ed2bfb14cc6bcf4bdc0e299a0f0f8f6450b92d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_559d91f382a65797b93e6cbedfabacd90225a4676f44566baef8f7bc4e22138c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_559d91f382a65797b93e6cbedfabacd90225a4676f44566baef8f7bc4e22138c->enter($__internal_559d91f382a65797b93e6cbedfabacd90225a4676f44566baef8f7bc4e22138c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 178
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 179
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_559d91f382a65797b93e6cbedfabacd90225a4676f44566baef8f7bc4e22138c->leave($__internal_559d91f382a65797b93e6cbedfabacd90225a4676f44566baef8f7bc4e22138c_prof);

        
        $__internal_ea672ecf547e0dcaaf905e7b7ed2bfb14cc6bcf4bdc0e299a0f0f8f6450b92d0->leave($__internal_ea672ecf547e0dcaaf905e7b7ed2bfb14cc6bcf4bdc0e299a0f0f8f6450b92d0_prof);

    }

    // line 182
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_b2bf0bcecd3ab04fc88c98f512eb4fea7fcce9467864c6de7849d99b9dc35ce4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2bf0bcecd3ab04fc88c98f512eb4fea7fcce9467864c6de7849d99b9dc35ce4->enter($__internal_b2bf0bcecd3ab04fc88c98f512eb4fea7fcce9467864c6de7849d99b9dc35ce4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_42411cabe978a1147f6b2ff5ff6b98573cce0fc12835aa1e7db53bb5988ed5be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42411cabe978a1147f6b2ff5ff6b98573cce0fc12835aa1e7db53bb5988ed5be->enter($__internal_42411cabe978a1147f6b2ff5ff6b98573cce0fc12835aa1e7db53bb5988ed5be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 184
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 185
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_42411cabe978a1147f6b2ff5ff6b98573cce0fc12835aa1e7db53bb5988ed5be->leave($__internal_42411cabe978a1147f6b2ff5ff6b98573cce0fc12835aa1e7db53bb5988ed5be_prof);

        
        $__internal_b2bf0bcecd3ab04fc88c98f512eb4fea7fcce9467864c6de7849d99b9dc35ce4->leave($__internal_b2bf0bcecd3ab04fc88c98f512eb4fea7fcce9467864c6de7849d99b9dc35ce4_prof);

    }

    // line 188
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_c09b47837c00703d10bd25695197114e90b62af1769be7695601f85c45fb7d56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c09b47837c00703d10bd25695197114e90b62af1769be7695601f85c45fb7d56->enter($__internal_c09b47837c00703d10bd25695197114e90b62af1769be7695601f85c45fb7d56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_78a5ea61b422bc3109c339778e42642d22cf48e1f6006358e058d44a56c89268 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78a5ea61b422bc3109c339778e42642d22cf48e1f6006358e058d44a56c89268->enter($__internal_78a5ea61b422bc3109c339778e42642d22cf48e1f6006358e058d44a56c89268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 189
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_78a5ea61b422bc3109c339778e42642d22cf48e1f6006358e058d44a56c89268->leave($__internal_78a5ea61b422bc3109c339778e42642d22cf48e1f6006358e058d44a56c89268_prof);

        
        $__internal_c09b47837c00703d10bd25695197114e90b62af1769be7695601f85c45fb7d56->leave($__internal_c09b47837c00703d10bd25695197114e90b62af1769be7695601f85c45fb7d56_prof);

    }

    // line 192
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_69e2fedd6acf4bbb4cae67d33ec21aa35184de0057d19f4732742a6311b4bc72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69e2fedd6acf4bbb4cae67d33ec21aa35184de0057d19f4732742a6311b4bc72->enter($__internal_69e2fedd6acf4bbb4cae67d33ec21aa35184de0057d19f4732742a6311b4bc72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_971ccae15de831b7502090bdb8ecb729190aff1710f58dd0519e4e09caf55746 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_971ccae15de831b7502090bdb8ecb729190aff1710f58dd0519e4e09caf55746->enter($__internal_971ccae15de831b7502090bdb8ecb729190aff1710f58dd0519e4e09caf55746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 193
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_971ccae15de831b7502090bdb8ecb729190aff1710f58dd0519e4e09caf55746->leave($__internal_971ccae15de831b7502090bdb8ecb729190aff1710f58dd0519e4e09caf55746_prof);

        
        $__internal_69e2fedd6acf4bbb4cae67d33ec21aa35184de0057d19f4732742a6311b4bc72->leave($__internal_69e2fedd6acf4bbb4cae67d33ec21aa35184de0057d19f4732742a6311b4bc72_prof);

    }

    // line 196
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_b2975acafd3100d19da189b8dacb809aaeb64f27f8ca444435c75d562736f9f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2975acafd3100d19da189b8dacb809aaeb64f27f8ca444435c75d562736f9f1->enter($__internal_b2975acafd3100d19da189b8dacb809aaeb64f27f8ca444435c75d562736f9f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_d2cd6e45ef36d2a115465602ce226a7ec8011eee93094c84bb18758a46e72acc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2cd6e45ef36d2a115465602ce226a7ec8011eee93094c84bb18758a46e72acc->enter($__internal_d2cd6e45ef36d2a115465602ce226a7ec8011eee93094c84bb18758a46e72acc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 197
        echo "    ";
        // line 198
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 199
            echo "        ";
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 200
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
                // line 201
                echo "        ";
            }
            // line 202
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 203
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
                // line 204
                echo "        ";
            }
            // line 205
            echo "        ";
            if (( !(($context["label"] ?? $this->getContext($context, "label")) === false) && twig_test_empty(($context["label"] ?? $this->getContext($context, "label"))))) {
                // line 206
                if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                    // line 207
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                     // line 208
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                     // line 209
($context["id"] ?? $this->getContext($context, "id"))));
                } else {
                    // line 212
                    $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                }
            }
            // line 215
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 216
            echo ($context["widget"] ?? $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !(($context["label"] ?? $this->getContext($context, "label")) === false)) ? ((((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 217
            echo "</label>
    ";
        }
        
        $__internal_d2cd6e45ef36d2a115465602ce226a7ec8011eee93094c84bb18758a46e72acc->leave($__internal_d2cd6e45ef36d2a115465602ce226a7ec8011eee93094c84bb18758a46e72acc_prof);

        
        $__internal_b2975acafd3100d19da189b8dacb809aaeb64f27f8ca444435c75d562736f9f1->leave($__internal_b2975acafd3100d19da189b8dacb809aaeb64f27f8ca444435c75d562736f9f1_prof);

    }

    // line 223
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_2f20c6d88b46a08c4a0afe3dedfdf96904f75e8093dcf94a3609d29f6fd6ce86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f20c6d88b46a08c4a0afe3dedfdf96904f75e8093dcf94a3609d29f6fd6ce86->enter($__internal_2f20c6d88b46a08c4a0afe3dedfdf96904f75e8093dcf94a3609d29f6fd6ce86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_0fd4bb658c5daebfd36cd524cb9d0630cd1cd992a9f5d4950b7bf77581df2dac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fd4bb658c5daebfd36cd524cb9d0630cd1cd992a9f5d4950b7bf77581df2dac->enter($__internal_0fd4bb658c5daebfd36cd524cb9d0630cd1cd992a9f5d4950b7bf77581df2dac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 224
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 225
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 226
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 227
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 228
        echo "</div>";
        
        $__internal_0fd4bb658c5daebfd36cd524cb9d0630cd1cd992a9f5d4950b7bf77581df2dac->leave($__internal_0fd4bb658c5daebfd36cd524cb9d0630cd1cd992a9f5d4950b7bf77581df2dac_prof);

        
        $__internal_2f20c6d88b46a08c4a0afe3dedfdf96904f75e8093dcf94a3609d29f6fd6ce86->leave($__internal_2f20c6d88b46a08c4a0afe3dedfdf96904f75e8093dcf94a3609d29f6fd6ce86_prof);

    }

    // line 231
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_b1fc6c87525d9b8c3e01c900263f279bf8fc5d02d49cbd6652b17c1e29fad9bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1fc6c87525d9b8c3e01c900263f279bf8fc5d02d49cbd6652b17c1e29fad9bf->enter($__internal_b1fc6c87525d9b8c3e01c900263f279bf8fc5d02d49cbd6652b17c1e29fad9bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_87b77f79062e9f7ad279d43a6b0744cfb65489d6e93fcb7e1c1db97c23f8ccc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87b77f79062e9f7ad279d43a6b0744cfb65489d6e93fcb7e1c1db97c23f8ccc0->enter($__internal_87b77f79062e9f7ad279d43a6b0744cfb65489d6e93fcb7e1c1db97c23f8ccc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 232
        echo "<div class=\"form-group\">";
        // line 233
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 234
        echo "</div>";
        
        $__internal_87b77f79062e9f7ad279d43a6b0744cfb65489d6e93fcb7e1c1db97c23f8ccc0->leave($__internal_87b77f79062e9f7ad279d43a6b0744cfb65489d6e93fcb7e1c1db97c23f8ccc0_prof);

        
        $__internal_b1fc6c87525d9b8c3e01c900263f279bf8fc5d02d49cbd6652b17c1e29fad9bf->leave($__internal_b1fc6c87525d9b8c3e01c900263f279bf8fc5d02d49cbd6652b17c1e29fad9bf_prof);

    }

    // line 237
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_0c18fd021e18f3176a564b7c22d8a5daf5df9a8282ecf1ee20ffc08441d3c7cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c18fd021e18f3176a564b7c22d8a5daf5df9a8282ecf1ee20ffc08441d3c7cd->enter($__internal_0c18fd021e18f3176a564b7c22d8a5daf5df9a8282ecf1ee20ffc08441d3c7cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_48b9bbd10a204aa1cb8b221954019ab2780a615669237b940397bf4758d66636 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48b9bbd10a204aa1cb8b221954019ab2780a615669237b940397bf4758d66636->enter($__internal_48b9bbd10a204aa1cb8b221954019ab2780a615669237b940397bf4758d66636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 238
        $context["force_error"] = true;
        // line 239
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_48b9bbd10a204aa1cb8b221954019ab2780a615669237b940397bf4758d66636->leave($__internal_48b9bbd10a204aa1cb8b221954019ab2780a615669237b940397bf4758d66636_prof);

        
        $__internal_0c18fd021e18f3176a564b7c22d8a5daf5df9a8282ecf1ee20ffc08441d3c7cd->leave($__internal_0c18fd021e18f3176a564b7c22d8a5daf5df9a8282ecf1ee20ffc08441d3c7cd_prof);

    }

    // line 242
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_4f4d93784d3ee7fa5d44ab6b3ed60813dd60331f5640ea73a8785a603f0d3fee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f4d93784d3ee7fa5d44ab6b3ed60813dd60331f5640ea73a8785a603f0d3fee->enter($__internal_4f4d93784d3ee7fa5d44ab6b3ed60813dd60331f5640ea73a8785a603f0d3fee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_8920281308717e75c4b94741a0883b1906d7ab55b471300235902675807a6f07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8920281308717e75c4b94741a0883b1906d7ab55b471300235902675807a6f07->enter($__internal_8920281308717e75c4b94741a0883b1906d7ab55b471300235902675807a6f07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 243
        $context["force_error"] = true;
        // line 244
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_8920281308717e75c4b94741a0883b1906d7ab55b471300235902675807a6f07->leave($__internal_8920281308717e75c4b94741a0883b1906d7ab55b471300235902675807a6f07_prof);

        
        $__internal_4f4d93784d3ee7fa5d44ab6b3ed60813dd60331f5640ea73a8785a603f0d3fee->leave($__internal_4f4d93784d3ee7fa5d44ab6b3ed60813dd60331f5640ea73a8785a603f0d3fee_prof);

    }

    // line 247
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_6ce83c717537790e944fd104531849946a9ac792a48399fbaa5a706a45abdadd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ce83c717537790e944fd104531849946a9ac792a48399fbaa5a706a45abdadd->enter($__internal_6ce83c717537790e944fd104531849946a9ac792a48399fbaa5a706a45abdadd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_a6da40158d2c0ebf8467e996b6f9d606eab6a59137157887ad9ad4b7f6b95397 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6da40158d2c0ebf8467e996b6f9d606eab6a59137157887ad9ad4b7f6b95397->enter($__internal_a6da40158d2c0ebf8467e996b6f9d606eab6a59137157887ad9ad4b7f6b95397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 248
        $context["force_error"] = true;
        // line 249
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_a6da40158d2c0ebf8467e996b6f9d606eab6a59137157887ad9ad4b7f6b95397->leave($__internal_a6da40158d2c0ebf8467e996b6f9d606eab6a59137157887ad9ad4b7f6b95397_prof);

        
        $__internal_6ce83c717537790e944fd104531849946a9ac792a48399fbaa5a706a45abdadd->leave($__internal_6ce83c717537790e944fd104531849946a9ac792a48399fbaa5a706a45abdadd_prof);

    }

    // line 252
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_95edae11d63fe06d645398d3b5190bac3efccfd2cafb1699df2d38e5045dd233 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95edae11d63fe06d645398d3b5190bac3efccfd2cafb1699df2d38e5045dd233->enter($__internal_95edae11d63fe06d645398d3b5190bac3efccfd2cafb1699df2d38e5045dd233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_d10d885885dc6d75945a1c60fb5ce508fe67c1f475ca51aa7fa7f2cc085fae73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d10d885885dc6d75945a1c60fb5ce508fe67c1f475ca51aa7fa7f2cc085fae73->enter($__internal_d10d885885dc6d75945a1c60fb5ce508fe67c1f475ca51aa7fa7f2cc085fae73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 253
        $context["force_error"] = true;
        // line 254
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_d10d885885dc6d75945a1c60fb5ce508fe67c1f475ca51aa7fa7f2cc085fae73->leave($__internal_d10d885885dc6d75945a1c60fb5ce508fe67c1f475ca51aa7fa7f2cc085fae73_prof);

        
        $__internal_95edae11d63fe06d645398d3b5190bac3efccfd2cafb1699df2d38e5045dd233->leave($__internal_95edae11d63fe06d645398d3b5190bac3efccfd2cafb1699df2d38e5045dd233_prof);

    }

    // line 257
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_1316cc8d57e36ff523686e9a0eed1308902722fb0c5bc9b396aa811a58f90ae0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1316cc8d57e36ff523686e9a0eed1308902722fb0c5bc9b396aa811a58f90ae0->enter($__internal_1316cc8d57e36ff523686e9a0eed1308902722fb0c5bc9b396aa811a58f90ae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_513c0b52982b8e89a02a6b71272350b9d678998854c0e3afcea3e40aa7d7cc73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_513c0b52982b8e89a02a6b71272350b9d678998854c0e3afcea3e40aa7d7cc73->enter($__internal_513c0b52982b8e89a02a6b71272350b9d678998854c0e3afcea3e40aa7d7cc73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 258
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 259
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 260
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 261
        echo "</div>";
        
        $__internal_513c0b52982b8e89a02a6b71272350b9d678998854c0e3afcea3e40aa7d7cc73->leave($__internal_513c0b52982b8e89a02a6b71272350b9d678998854c0e3afcea3e40aa7d7cc73_prof);

        
        $__internal_1316cc8d57e36ff523686e9a0eed1308902722fb0c5bc9b396aa811a58f90ae0->leave($__internal_1316cc8d57e36ff523686e9a0eed1308902722fb0c5bc9b396aa811a58f90ae0_prof);

    }

    // line 264
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_c18b950b268501bce7f7fec72ed7d39f0697c1671764d6338d8dc8b01e763eb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c18b950b268501bce7f7fec72ed7d39f0697c1671764d6338d8dc8b01e763eb5->enter($__internal_c18b950b268501bce7f7fec72ed7d39f0697c1671764d6338d8dc8b01e763eb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_4eab4330734c956f22753348335450384d4471ae87c3ecc290f3069d9ce64521 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4eab4330734c956f22753348335450384d4471ae87c3ecc290f3069d9ce64521->enter($__internal_4eab4330734c956f22753348335450384d4471ae87c3ecc290f3069d9ce64521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 265
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 266
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 267
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 268
        echo "</div>";
        
        $__internal_4eab4330734c956f22753348335450384d4471ae87c3ecc290f3069d9ce64521->leave($__internal_4eab4330734c956f22753348335450384d4471ae87c3ecc290f3069d9ce64521_prof);

        
        $__internal_c18b950b268501bce7f7fec72ed7d39f0697c1671764d6338d8dc8b01e763eb5->leave($__internal_c18b950b268501bce7f7fec72ed7d39f0697c1671764d6338d8dc8b01e763eb5_prof);

    }

    // line 273
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_8bc09ddc91f3d2f3ccbcab47bc14f6f292de0c5ee1b87b3ab1ecc16d76c5020b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bc09ddc91f3d2f3ccbcab47bc14f6f292de0c5ee1b87b3ab1ecc16d76c5020b->enter($__internal_8bc09ddc91f3d2f3ccbcab47bc14f6f292de0c5ee1b87b3ab1ecc16d76c5020b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_1f0a9009f98603bb4b07768e998b053882378b081c6e563c29c4ced5cd527d6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f0a9009f98603bb4b07768e998b053882378b081c6e563c29c4ced5cd527d6a->enter($__internal_1f0a9009f98603bb4b07768e998b053882378b081c6e563c29c4ced5cd527d6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 274
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 275
            if ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 276
            echo "    <ul class=\"list-unstyled\">";
            // line 277
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 278
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 280
            echo "</ul>
    ";
            // line 281
            if ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_1f0a9009f98603bb4b07768e998b053882378b081c6e563c29c4ced5cd527d6a->leave($__internal_1f0a9009f98603bb4b07768e998b053882378b081c6e563c29c4ced5cd527d6a_prof);

        
        $__internal_8bc09ddc91f3d2f3ccbcab47bc14f6f292de0c5ee1b87b3ab1ecc16d76c5020b->leave($__internal_8bc09ddc91f3d2f3ccbcab47bc14f6f292de0c5ee1b87b3ab1ecc16d76c5020b_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1135 => 281,  1132 => 280,  1124 => 278,  1120 => 277,  1118 => 276,  1112 => 275,  1110 => 274,  1101 => 273,  1091 => 268,  1089 => 267,  1087 => 266,  1081 => 265,  1072 => 264,  1062 => 261,  1060 => 260,  1058 => 259,  1052 => 258,  1043 => 257,  1033 => 254,  1031 => 253,  1022 => 252,  1012 => 249,  1010 => 248,  1001 => 247,  991 => 244,  989 => 243,  980 => 242,  970 => 239,  968 => 238,  959 => 237,  949 => 234,  947 => 233,  945 => 232,  936 => 231,  926 => 228,  924 => 227,  922 => 226,  920 => 225,  914 => 224,  905 => 223,  893 => 217,  889 => 216,  874 => 215,  870 => 212,  867 => 209,  866 => 208,  865 => 207,  863 => 206,  860 => 205,  857 => 204,  854 => 203,  851 => 202,  848 => 201,  845 => 200,  842 => 199,  839 => 198,  837 => 197,  828 => 196,  818 => 193,  809 => 192,  799 => 189,  790 => 188,  780 => 185,  778 => 184,  769 => 182,  759 => 179,  757 => 178,  748 => 177,  737 => 171,  735 => 170,  733 => 169,  730 => 167,  728 => 166,  726 => 165,  717 => 164,  706 => 160,  704 => 159,  702 => 158,  699 => 156,  697 => 155,  695 => 154,  686 => 153,  675 => 149,  669 => 146,  668 => 145,  667 => 144,  663 => 143,  659 => 142,  652 => 138,  651 => 137,  650 => 136,  646 => 135,  644 => 134,  635 => 133,  625 => 130,  623 => 129,  614 => 128,  603 => 124,  599 => 123,  594 => 119,  588 => 118,  582 => 117,  576 => 116,  570 => 115,  564 => 114,  558 => 113,  552 => 112,  547 => 108,  541 => 107,  535 => 106,  529 => 105,  523 => 104,  517 => 103,  511 => 102,  505 => 101,  500 => 98,  497 => 97,  495 => 96,  491 => 95,  489 => 94,  486 => 92,  484 => 91,  475 => 90,  463 => 85,  460 => 84,  450 => 83,  445 => 81,  443 => 80,  441 => 79,  438 => 77,  436 => 76,  427 => 75,  415 => 70,  413 => 69,  411 => 67,  410 => 66,  409 => 65,  408 => 64,  403 => 62,  401 => 61,  399 => 60,  396 => 58,  394 => 57,  385 => 56,  374 => 52,  372 => 51,  370 => 50,  368 => 49,  366 => 48,  362 => 47,  360 => 46,  357 => 44,  355 => 43,  346 => 42,  335 => 38,  333 => 37,  331 => 36,  322 => 35,  312 => 32,  306 => 30,  304 => 29,  302 => 28,  296 => 26,  293 => 25,  291 => 24,  288 => 23,  279 => 22,  269 => 19,  267 => 18,  258 => 17,  248 => 14,  246 => 13,  237 => 12,  227 => 9,  224 => 7,  222 => 6,  213 => 5,  203 => 273,  200 => 272,  197 => 270,  195 => 264,  192 => 263,  190 => 257,  187 => 256,  185 => 252,  182 => 251,  180 => 247,  177 => 246,  175 => 242,  172 => 241,  170 => 237,  167 => 236,  165 => 231,  162 => 230,  160 => 223,  157 => 222,  154 => 220,  152 => 196,  149 => 195,  147 => 192,  144 => 191,  142 => 188,  139 => 187,  137 => 182,  134 => 181,  132 => 177,  129 => 176,  126 => 174,  124 => 164,  121 => 163,  119 => 153,  116 => 152,  114 => 133,  111 => 132,  109 => 128,  107 => 90,  105 => 75,  102 => 74,  100 => 56,  97 => 55,  95 => 42,  92 => 41,  90 => 35,  87 => 34,  85 => 22,  82 => 21,  80 => 17,  77 => 16,  75 => 12,  72 => 11,  70 => 5,  67 => 4,  64 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"input-group\">
        {% set append = money_pattern starts with '{{' %}
        {% if not append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
        {{- block('form_widget_simple') -}}
        {% if append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
            {{- date_pattern|replace({
                '{{ year }}': form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}': form_widget(form.day),
            })|raw -}}
        {% if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}{% if with_minutes %}:{{ form_widget(form.minute) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {% if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock time_widget %}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            <div class=\"table-responsive\">
                <table class=\"table {{ table_class|default('table-bordered table-condensed table-striped') }}\">
                    <thead>
                    <tr>
                        {%- if with_years %}<th>{{ form_label(form.years) }}</th>{% endif -%}
                        {%- if with_months %}<th>{{ form_label(form.months) }}</th>{% endif -%}
                        {%- if with_weeks %}<th>{{ form_label(form.weeks) }}</th>{% endif -%}
                        {%- if with_days %}<th>{{ form_label(form.days) }}</th>{% endif -%}
                        {%- if with_hours %}<th>{{ form_label(form.hours) }}</th>{% endif -%}
                        {%- if with_minutes %}<th>{{ form_label(form.minutes) }}</th>{% endif -%}
                        {%- if with_seconds %}<th>{{ form_label(form.seconds) }}</th>{% endif -%}
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        {%- if with_years %}<td>{{ form_widget(form.years) }}</td>{% endif -%}
                        {%- if with_months %}<td>{{ form_widget(form.months) }}</td>{% endif -%}
                        {%- if with_weeks %}<td>{{ form_widget(form.weeks) }}</td>{% endif -%}
                        {%- if with_days %}<td>{{ form_widget(form.days) }}</td>{% endif -%}
                        {%- if with_hours %}<td>{{ form_widget(form.hours) }}</td>{% endif -%}
                        {%- if with_minutes %}<td>{{ form_widget(form.minutes) }}</td>{% endif -%}
                        {%- if with_seconds %}<td>{{ form_widget(form.seconds) }}</td>{% endif -%}
                    </tr>
                    </tbody>
                </table>
            </div>
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{% block choice_widget_collapsed -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
            }) -}}
        {% endfor -%}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'radio-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {% if widget is defined %}
        {% if required %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}
        {% if parent_label_class is defined %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
        {% endif %}
        {% if label is not same as(false) and label is empty %}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {% endif %}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {% endif %}
{% endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    {% if form.parent %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form.parent %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_3_layout.html.twig", "/Users/VictorChevalier/Documents/PHP/SymfonyTP/SymfonyTP/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_layout.html.twig");
    }
}
