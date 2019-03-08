<?php

/* themes/corporate_lite/templates/page.html.twig */
class __TwigTemplate_2088bb5c7a294917bf542c2f49787a00ca5b7778d002982f345bc676fa23fe22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $tags = ["if" => 73];
        $filters = ["raw" => 217];
        $functions = [];

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                ['if'],
                ['raw'],
                []
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 73
        if ($this->getAttribute(($context["page"] ?? null), "slideout", [])) {
            // line 74
            echo "    ";
            // line 75
            echo "    <div
        class=\"clearfix slideout ";
            // line 76
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["slideout_background_color"] ?? null), "html", null, true));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["slideout_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : (""))));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["slideout_region_paddings"] ?? null)) ? (" region--no-paddings") : (""))));
            echo "\">
        ";
            // line 78
            echo "        <div class=\"clearfix slideout__container\">
            <div class=\"slideout__section\">
                ";
            // line 80
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "slideout", []), "html", null, true));
            echo "
            </div>
        </div>
        ";
            // line 84
            echo "    </div>
    ";
            // line 86
            echo "    ";
            // line 87
            echo "    <button class=\"slideout-toggle slideout-toggle--fixed\">
        <i class=\"fa fa-bars\"></i>
    </button>
    ";
        }
        // line 93
        echo "<div class=\"page-container\">
    ";
        // line 94
        if ((((((($this->getAttribute(($context["page"] ?? null), "header_top_first", []) || $this->getAttribute(($context["page"] ?? null), "header_top_second", [])) || $this->getAttribute(($context["page"] ?? null), "header_first", [])) || $this->getAttribute(($context["page"] ?? null), "header", [])) || $this->getAttribute(($context["page"] ?? null), "header_third", [])) || $this->getAttribute(($context["page"] ?? null), "header_top_highlighted_first", [])) || $this->getAttribute(($context["page"] ?? null), "header_top_highlighted_second", []))) {
            // line 95
            echo "        ";
            // line 96
            echo "        <div class=\"header-container\">
            ";
            // line 97
            if (($this->getAttribute(($context["page"] ?? null), "header_top_highlighted_first", []) || $this->getAttribute(($context["page"] ?? null), "header_top_highlighted_second", []))) {
                // line 98
                echo "                ";
                // line 99
                echo "                <div class=\"clearfix header-top-highlighted ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_top_highlighted_background_color"] ?? null), "html", null, true));
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["header_top_highlighted_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : (""))));
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["header_top_highlighted_region_paddings"] ?? null)) ? (" region--no-paddings") : (""))));
                echo "\">
                    <div
                        class=\"";
                // line 101
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_top_highlighted_layout_container"] ?? null), "html", null, true));
                echo "\">
                        ";
                // line 103
                echo "                        <div class=\"clearfix header-top-highlighted__container";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["header_top_highlighted_animations"] ?? null) == " enabled")) ? (" mt-no-opacity") : (""))));
                echo "\" ";
                if ((($context["header_top_highlighted_animations"] ?? null) == "enabled")) {
                    echo " data-animate-effect=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_top_highlighted_animation_effect"] ?? null), "html", null, true));
                    echo "\" ";
                }
                echo ">
                            <div class=\"row\">
                                ";
                // line 105
                if ($this->getAttribute(($context["page"] ?? null), "header_top_highlighted_first", [])) {
                    // line 106
                    echo "                                    <div
                                        class=\"";
                    // line 107
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_top_highlighted_first_grid_class"] ?? null), "html", null, true));
                    echo "\">
                                        ";
                    // line 109
                    echo "                                        <div class=\"clearfix header-top-highlighted__section header-top-highlighted-first\">
                                            ";
                    // line 110
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header_top_highlighted_first", []), "html", null, true));
                    echo "
                                        </div>
                                        ";
                    // line 113
                    echo "                                    </div>
                                ";
                }
                // line 115
                echo "                                ";
                if ($this->getAttribute(($context["page"] ?? null), "header_top_highlighted_second", [])) {
                    // line 116
                    echo "                                    <div
                                        class=\"";
                    // line 117
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_top_highlighted_second_grid_class"] ?? null), "html", null, true));
                    echo "\">
                                        ";
                    // line 119
                    echo "                                        <div class=\"clearfix header-top-highlighted__section header-top-highlighted-second\">
                                            ";
                    // line 120
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header_top_highlighted_second", []), "html", null, true));
                    echo "
                                        </div>
                                        ";
                    // line 123
                    echo "                                    </div>
                                ";
                }
                // line 125
                echo "                            </div>
                        </div>
                        ";
                // line 128
                echo "                    </div>
                </div>
                ";
                // line 131
                echo "            ";
            }
            // line 132
            echo "            ";
            if (($this->getAttribute(($context["page"] ?? null), "header_top_first", []) || $this->getAttribute(($context["page"] ?? null), "header_top_second", []))) {
                // line 133
                echo "                ";
                // line 134
                echo "                <div class=\"clearfix header-top ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_top_background_color"] ?? null), "html", null, true));
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["header_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : (""))));
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["header_top_region_paddings"] ?? null)) ? (" region--no-paddings") : (""))));
                echo "\">
                    <div
                        class=\"";
                // line 136
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_top_layout_container"] ?? null), "html", null, true));
                echo "\">
                        ";
                // line 138
                echo "                        <div class=\"clearfix header-top__container";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["header_top_animations"] ?? null) == " enabled")) ? (" mt-no-opacity") : (""))));
                echo "\" ";
                if ((($context["header_top_animations"] ?? null) == "enabled")) {
                    echo " data-animate-effect=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_top_animation_effect"] ?? null), "html", null, true));
                    echo "\" ";
                }
                echo ">
                            <div class=\"row\">
                                ";
                // line 140
                if ($this->getAttribute(($context["page"] ?? null), "header_top_first", [])) {
                    // line 141
                    echo "                                    <div
                                        class=\"";
                    // line 142
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_top_first_grid_class"] ?? null), "html", null, true));
                    echo "\">
                                        ";
                    // line 144
                    echo "                                        <div class=\"clearfix header-top__section header-top-first\">
                                            ";
                    // line 145
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header_top_first", []), "html", null, true));
                    echo "
                                        </div>
                                        ";
                    // line 148
                    echo "                                    </div>
                                ";
                }
                // line 150
                echo "                                ";
                if ($this->getAttribute(($context["page"] ?? null), "header_top_second", [])) {
                    // line 151
                    echo "                                    <div
                                        class=\"";
                    // line 152
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_top_second_grid_class"] ?? null), "html", null, true));
                    echo "\">
                                        ";
                    // line 154
                    echo "                                        <div class=\"clearfix header-top__section header-top-second\">
                                            ";
                    // line 155
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header_top_second", []), "html", null, true));
                    echo "
                                        </div>
                                        ";
                    // line 158
                    echo "                                    </div>
                                ";
                }
                // line 160
                echo "                            </div>
                        </div>
                        ";
                // line 163
                echo "                    </div>
                </div>
                ";
                // line 166
                echo "            ";
            }
            // line 167
            echo "            ";
            if ((($this->getAttribute(($context["page"] ?? null), "header_first", []) || $this->getAttribute(($context["page"] ?? null), "header", [])) || $this->getAttribute(($context["page"] ?? null), "header_third", []))) {
                // line 168
                echo "                ";
                // line 169
                echo "                <header class=\"clearfix header ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_background_color"] ?? null), "html", null, true));
                echo " ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_layout_container_class"] ?? null), "html", null, true));
                echo " ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_layout_columns_class"] ?? null), "html", null, true));
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["header_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : (""))));
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["header_region_paddings"] ?? null)) ? (" region--no-paddings") : (""))));
                echo "\" role=\"banner\">
                    <div
                        class=\"";
                // line 171
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_layout_container"] ?? null), "html", null, true));
                echo "\">
                        ";
                // line 173
                echo "                        <div class=\"clearfix header__container\">
                            <div class=\"row\">
                                ";
                // line 175
                if ($this->getAttribute(($context["page"] ?? null), "header_third", [])) {
                    // line 176
                    echo "                                    <div
                                        class=\"";
                    // line 177
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_third_grid_class"] ?? null), "html", null, true));
                    echo "\">
                                        ";
                    // line 179
                    echo "                                        <div class=\"clearfix header__section header-third\">
                                            ";
                    // line 180
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header_third", []), "html", null, true));
                    echo "
                                        </div>
                                        ";
                    // line 183
                    echo "                                    </div>
                                ";
                }
                // line 185
                echo "                                ";
                if ($this->getAttribute(($context["page"] ?? null), "header_first", [])) {
                    // line 186
                    echo "                                    <div
                                        class=\"";
                    // line 187
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_first_grid_class"] ?? null), "html", null, true));
                    echo "\">
                                        ";
                    // line 189
                    echo "                                        <div class=\"clearfix header__section header-first\">
                                            ";
                    // line 190
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header_first", []), "html", null, true));
                    echo "
                                        </div>
                                        ";
                    // line 193
                    echo "                                    </div>
                                ";
                }
                // line 195
                echo "                                ";
                if ($this->getAttribute(($context["page"] ?? null), "header", [])) {
                    // line 196
                    echo "                                    <div
                                        class=\"";
                    // line 197
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_second_grid_class"] ?? null), "html", null, true));
                    echo "\">
                                        ";
                    // line 199
                    echo "                                        <div class=\"clearfix header__section header-second\">
                                            ";
                    // line 200
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", []), "html", null, true));
                    echo "
                                        </div>
                                        ";
                    // line 203
                    echo "                                    </div>
                                ";
                }
                // line 205
                echo "                            </div>
                        </div>
                        ";
                // line 208
                echo "                    </div>
                </header>
                ";
                // line 211
                echo "            ";
            }
            // line 212
            echo "        </div>
        ";
            // line 214
            echo "    ";
        }
        // line 215
        echo "    ";
        if ($this->getAttribute(($context["page"] ?? null), "banner", [])) {
            // line 216
            echo "        ";
            // line 217
            echo "        <div ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["banner_id"] ?? null)) ? ((("id=\"" . ($context["banner_id"] ?? null)) . "\"")) : (""))));
            echo " class=\"clearfix banner ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["banner_background_color"] ?? null), "html", null, true));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["banner_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : (""))));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["banner_region_paddings"] ?? null)) ? (" region--no-paddings") : (""))));
            echo "\">
            <div
                class=\"";
            // line 219
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["banner_layout_container"] ?? null), "html", null, true));
            echo "\">
                ";
            // line 221
            echo "                <div class=\"clearfix banner__container\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"banner__section\">
                                ";
            // line 225
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "banner", []), "html", null, true));
            echo "
                            </div>
                        </div>
                    </div>
                </div>
                ";
            // line 231
            echo "            </div>
        </div>
        ";
            // line 234
            echo "    ";
        }
        // line 235
        echo "    ";
        if ($this->getAttribute(($context["page"] ?? null), "system_messages", [])) {
            // line 236
            echo "        <div class=\"system-messages clearfix\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        ";
            // line 240
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "system_messages", []), "html", null, true));
            echo "
                    </div>
                </div>
            </div>
        </div>
    ";
        }
        // line 246
        echo "    ";
        if ($this->getAttribute(($context["page"] ?? null), "content_top", [])) {
            // line 247
            echo "        ";
            // line 248
            echo "        <div ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["content_top_id"] ?? null)) ? ((("id=\"" . ($context["content_top_id"] ?? null)) . "\"")) : (""))));
            echo " class=\"clearfix content-top ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content_top_background_color"] ?? null), "html", null, true));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["content_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : (""))));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["content_top_region_paddings"] ?? null)) ? (" region--no-paddings") : (""))));
            echo "\">
            <div
                class=\"";
            // line 250
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content_top_layout_container"] ?? null), "html", null, true));
            echo "\">
                ";
            // line 252
            echo "                <div class=\"clearfix content-top__container";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["content_top_animations"] ?? null) == " enabled")) ? (" mt-no-opacity") : (""))));
            echo "\" ";
            if ((($context["content_top_animations"] ?? null) == "enabled")) {
                echo " data-animate-effect=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content_top_animation_effect"] ?? null), "html", null, true));
                echo "\" ";
            }
            echo ">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"content-top__section\">
                                ";
            // line 256
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_top", []), "html", null, true));
            echo "
                            </div>
                        </div>
                    </div>
                </div>
                ";
            // line 262
            echo "            </div>
        </div>
        ";
            // line 265
            echo "    ";
        }
        // line 266
        echo "    ";
        if ($this->getAttribute(($context["page"] ?? null), "content_top_highlighted", [])) {
            // line 267
            echo "        ";
            // line 268
            echo "        <div ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["content_top_highlighted_id"] ?? null)) ? ((("id=\"" . ($context["content_top_highlighted_id"] ?? null)) . "\"")) : (""))));
            echo " class=\"clearfix content-top-highlighted ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content_top_highlighted_background_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content_top_highlighted_separator"] ?? null), "html", null, true));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["content_top_highlighted_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : (""))));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["content_top_highlighted_region_paddings"] ?? null)) ? (" region--no-paddings") : (""))));
            echo "\">
            <div
                class=\"";
            // line 270
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content_top_highlighted_layout_container"] ?? null), "html", null, true));
            echo "\">
                ";
            // line 272
            echo "                <div class=\"clearfix content-top-highlighted__container";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["content_top_highlighted_animations"] ?? null) == " enabled")) ? (" mt-no-opacity") : (""))));
            echo "\" ";
            if ((($context["content_top_highlighted_animations"] ?? null) == "enabled")) {
                echo " data-animate-effect=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content_top_highlighted_animation_effect"] ?? null), "html", null, true));
                echo "\" ";
            }
            echo ">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"content-top-highlighted__section\">
                                ";
            // line 276
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_top_highlighted", []), "html", null, true));
            echo "
                            </div>
                        </div>
                    </div>
                </div>
                ";
            // line 282
            echo "            </div>
        </div>
        ";
            // line 285
            echo "    ";
        }
        // line 286
        echo "    ";
        // line 287
        echo "    <div ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["main_content_id"] ?? null)) ? ((("id=\"" . ($context["main_content_id"] ?? null)) . "\"")) : (""))));
        echo " class=\"clearfix main-content region--dark-typography region--white-background  ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["main_content_separator"] ?? null), "html", null, true));
        echo "\">
        <div class=\"container\">
            <div class=\"clearfix main-content__container\">
                <div class=\"row\">
                    <section
                        class=\"";
        // line 292
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["main_grid_class"] ?? null), "html", null, true));
        echo "\">
                        ";
        // line 294
        echo "                        <div class=\"clearfix main-content__section";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["main_content_animations"] ?? null) == " enabled")) ? (" mt-no-opacity") : (""))));
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["main_content_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : (""))));
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["main_content_region_paddings"] ?? null)) ? (" region--no-paddings") : (""))));
        echo "\" ";
        if ((($context["main_content_animations"] ?? null) == "enabled")) {
            echo " data-animate-effect=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["main_content_animation_effect"] ?? null), "html", null, true));
            echo "\" ";
        }
        echo ">
                            ";
        // line 295
        if ($this->getAttribute(($context["page"] ?? null), "content", [])) {
            // line 296
            echo "                                ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", []), "html", null, true));
            echo "
                            ";
        }
        // line 298
        echo "                        </div>
                        ";
        // line 300
        echo "                    </section>
                    ";
        // line 301
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 302
            echo "                        <aside
                            class=\"";
            // line 303
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sidebar_first_grid_class"] ?? null), "html", null, true));
            echo "\">
                            ";
            // line 305
            echo "                            <section class=\"sidebar__section sidebar-first clearfix";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["sidebar_first_animations"] ?? null) == " enabled")) ? (" mt-no-opacity") : (""))));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["sidebar_first_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : (""))));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["sidebar_first_region_paddings"] ?? null)) ? (" region--no-paddings") : (""))));
            echo "\" ";
            if ((($context["sidebar_first_animations"] ?? null) == "enabled")) {
                echo " data-animate-effect=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sidebar_first_animation_effect"] ?? null), "html", null, true));
                echo "\" ";
            }
            echo ">
                                ";
            // line 306
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_first", []), "html", null, true));
            echo "
                            </section>
                            ";
            // line 309
            echo "                        </aside>
                    ";
        }
        // line 311
        echo "                    ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 312
            echo "                        <aside
                            class=\"";
            // line 313
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sidebar_second_grid_class"] ?? null), "html", null, true));
            echo "\">
                            ";
            // line 315
            echo "                            <section class=\"sidebar__section sidebar-second clearfix";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["sidebar_second_animations"] ?? null) == " enabled")) ? (" mt-no-opacity") : (""))));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["sidebar_second_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : (""))));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["sidebar_second_region_paddings"] ?? null)) ? (" region--no-paddings") : (""))));
            echo "\" ";
            if ((($context["sidebar_second_animations"] ?? null) == "enabled")) {
                echo " data-animate-effect=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sidebar_second_animation_effect"] ?? null), "html", null, true));
                echo "\" ";
            }
            echo ">
                                ";
            // line 316
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_second", []), "html", null, true));
            echo "
                            </section>
                            ";
            // line 319
            echo "                        </aside>
                    ";
        }
        // line 321
        echo "                </div>
            </div>
        </div>
    </div>
    ";
        // line 326
        echo "    ";
        if (($this->getAttribute(($context["page"] ?? null), "content_bottom_first", []) || $this->getAttribute(($context["page"] ?? null), "content_bottom_second", []))) {
            // line 327
            echo "        ";
            // line 328
            echo "        <div ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["content_bottom_id"] ?? null)) ? ((("id=\"" . ($context["content_bottom_id"] ?? null)) . "\"")) : (""))));
            echo " class=\"clearfix content-bottom ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content_bottom_background_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content_bottom_separator"] ?? null), "html", null, true));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["content_bottom_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : (""))));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["content_bottom_region_paddings"] ?? null)) ? (" region--no-paddings") : (""))));
            echo "\">
            <div
                class=\"";
            // line 330
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content_bottom_layout_container"] ?? null), "html", null, true));
            echo "\">
                ";
            // line 332
            echo "                <div class=\"clearfix content-bottom__container";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["content_bottom_animations"] ?? null) == " enabled")) ? (" mt-no-opacity") : (""))));
            echo "\" ";
            if ((($context["content_bottom_animations"] ?? null) == "enabled")) {
                echo " data-animate-effect=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content_bottom_animation_effect"] ?? null), "html", null, true));
                echo "\" ";
            }
            echo ">
                    <div class=\"row\">
                        ";
            // line 334
            if ($this->getAttribute(($context["page"] ?? null), "content_bottom_first", [])) {
                // line 335
                echo "                            <div
                                class=\"";
                // line 336
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content_bottom_first_grid_class"] ?? null), "html", null, true));
                echo "\">
                                ";
                // line 338
                echo "                                <div class=\"clearfix content-bottom__section content-bottom-first\">
                                    ";
                // line 339
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_bottom_first", []), "html", null, true));
                echo "
                                </div>
                                ";
                // line 342
                echo "                            </div>
                        ";
            }
            // line 344
            echo "                        ";
            if ($this->getAttribute(($context["page"] ?? null), "content_bottom_second", [])) {
                // line 345
                echo "                            <div
                                class=\"";
                // line 346
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content_bottom_second_grid_class"] ?? null), "html", null, true));
                echo "\">
                                ";
                // line 348
                echo "                                <div class=\"clearfix content-bottom__section content-bottom-second\">
                                    ";
                // line 349
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_bottom_second", []), "html", null, true));
                echo "
                                </div>
                                ";
                // line 352
                echo "                            </div>
                        ";
            }
            // line 354
            echo "                    </div>
                </div>
                ";
            // line 357
            echo "            </div>
        </div>
        ";
            // line 360
            echo "    ";
        }
        // line 361
        echo "    ";
        if ($this->getAttribute(($context["page"] ?? null), "featured_top", [])) {
            // line 362
            echo "        ";
            // line 363
            echo "        <div ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["featured_top_id"] ?? null)) ? ((("id=\"" . ($context["featured_top_id"] ?? null)) . "\"")) : (""))));
            echo " class=\"clearfix featured-top ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["featured_top_background_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["featured_top_separator"] ?? null), "html", null, true));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["featured_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : (""))));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["featured_top_region_paddings"] ?? null)) ? (" region--no-paddings") : (""))));
            echo "\">
            <div
                class=\"";
            // line 365
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["featured_top_layout_container"] ?? null), "html", null, true));
            echo "\">
                ";
            // line 367
            echo "                <div class=\"clearfix featured-top__container";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["featured_top_animations"] ?? null) == " enabled")) ? (" mt-no-opacity") : (""))));
            echo "\" ";
            if ((($context["featured_top_animations"] ?? null) == "enabled")) {
                echo " data-animate-effect=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["featured_top_animation_effect"] ?? null), "html", null, true));
                echo "\" ";
            }
            echo ">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"clearfix featured-top__section\">
                                ";
            // line 371
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "featured_top", []), "html", null, true));
            echo "
                            </div>
                        </div>
                    </div>
                </div>
                ";
            // line 377
            echo "            </div>
        </div>
        ";
            // line 380
            echo "    ";
        }
        // line 381
        echo "    ";
        if ($this->getAttribute(($context["page"] ?? null), "featured", [])) {
            // line 382
            echo "        ";
            // line 383
            echo "        <div ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["featured_id"] ?? null)) ? ((("id=\"" . ($context["featured_id"] ?? null)) . "\"")) : (""))));
            echo " class=\"clearfix featured ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["featured_background_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["featured_separator"] ?? null), "html", null, true));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["featured_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : (""))));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["featured_region_paddings"] ?? null)) ? (" region--no-paddings") : (""))));
            echo "\">
            <div
                class=\"";
            // line 385
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["featured_layout_container"] ?? null), "html", null, true));
            echo "\">
                ";
            // line 387
            echo "                <div class=\"clearfix featured__container";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["featured_animations"] ?? null) == " enabled")) ? (" mt-no-opacity") : (""))));
            echo "\" ";
            if ((($context["featured_animations"] ?? null) == "enabled")) {
                echo " data-animate-effect=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["featured_animation_effect"] ?? null), "html", null, true));
                echo "\" ";
            }
            echo ">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"clearfix featured__section\">
                                ";
            // line 391
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "featured", []), "html", null, true));
            echo "
                            </div>
                        </div>
                    </div>
                </div>
                ";
            // line 397
            echo "            </div>
        </div>
        ";
            // line 400
            echo "    ";
        }
        // line 401
        echo "    ";
        if ($this->getAttribute(($context["page"] ?? null), "featured_bottom", [])) {
            // line 402
            echo "        ";
            // line 403
            echo "        <div ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["featured_bottom_id"] ?? null)) ? ((("id=\"" . ($context["featured_bottom_id"] ?? null)) . "\"")) : (""))));
            echo " class=\"clearfix featured-bottom ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["featured_bottom_background_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["featured_bottom_separator"] ?? null), "html", null, true));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["featured_bottom_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : (""))));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["featured_bottom_region_paddings"] ?? null)) ? (" region--no-paddings") : (""))));
            echo "\">
            <div
                class=\"";
            // line 405
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["featured_bottom_layout_container"] ?? null), "html", null, true));
            echo "\">
                ";
            // line 407
            echo "                <div class=\"clearfix featured-bottom__container";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["featured_bottom_animations"] ?? null) == " enabled")) ? (" mt-no-opacity") : (""))));
            echo "\" ";
            if ((($context["featured_bottom_animations"] ?? null) == "enabled")) {
                echo " data-animate-effect=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["featured_bottom_animation_effect"] ?? null), "html", null, true));
                echo "\" ";
            }
            echo ">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"clearfix featured-bottom__section\">
                                ";
            // line 411
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "featured_bottom", []), "html", null, true));
            echo "
                            </div>
                        </div>
                    </div>
                </div>
                ";
            // line 417
            echo "            </div>
        </div>
        ";
            // line 420
            echo "    ";
        }
        // line 421
        echo "    ";
        if ($this->getAttribute(($context["page"] ?? null), "sub_featured", [])) {
            // line 422
            echo "        ";
            // line 423
            echo "        <div ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["sub_featured_id"] ?? null)) ? ((("id=\"" . ($context["sub_featured_id"] ?? null)) . "\"")) : (""))));
            echo " class=\"clearfix sub-featured ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sub_featured_background_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sub_featured_separator"] ?? null), "html", null, true));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["sub_featured_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : (""))));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["sub_featured_region_paddings"] ?? null)) ? (" region--no-paddings") : (""))));
            echo "\">
            <div
                class=\"";
            // line 425
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sub_featured_layout_container"] ?? null), "html", null, true));
            echo "\">
                ";
            // line 427
            echo "                <div class=\"clearfix sub-featured__container";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["sub_featured_animations"] ?? null) == " enabled")) ? (" mt-no-opacity") : (""))));
            echo "\" ";
            if ((($context["sub_featured_animations"] ?? null) == "enabled")) {
                echo " data-animate-effect=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sub_featured_animation_effect"] ?? null), "html", null, true));
                echo "\" ";
            }
            echo ">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"clearfix sub-featured__section\">
                                ";
            // line 431
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sub_featured", []), "html", null, true));
            echo "
                            </div>
                        </div>
                    </div>
                </div>
                ";
            // line 437
            echo "            </div>
        </div>
        ";
            // line 440
            echo "    ";
        }
        // line 441
        echo "    ";
        if ($this->getAttribute(($context["page"] ?? null), "highlighted_top", [])) {
            // line 442
            echo "        ";
            // line 443
            echo "        <div ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["highlighted_top_id"] ?? null)) ? ((("id=\"" . ($context["highlighted_top_id"] ?? null)) . "\"")) : (""))));
            echo " class=\"clearfix highlighted-top ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["highlighted_top_background_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["highlighted_top_separator"] ?? null), "html", null, true));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["highlighted_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : (""))));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["highlighted_top_region_paddings"] ?? null)) ? (" region--no-paddings") : (""))));
            echo "\">
            <div
                class=\"";
            // line 445
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["highlighted_top_layout_container"] ?? null), "html", null, true));
            echo "\">
                ";
            // line 447
            echo "                <div class=\"clearfix highlighted-top__container";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["highlighted_top_animations"] ?? null) == " enabled")) ? (" mt-no-opacity") : (""))));
            echo "\" ";
            if ((($context["highlighted_top_animations"] ?? null) == "enabled")) {
                echo " data-animate-effect=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["highlighted_top_animation_effect"] ?? null), "html", null, true));
                echo "\" ";
            }
            echo ">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"clearfix highlighted-top__section\">
                                ";
            // line 451
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted_top", []), "html", null, true));
            echo "
                            </div>
                        </div>
                    </div>
                </div>
                ";
            // line 457
            echo "            </div>
        </div>
        ";
            // line 460
            echo "    ";
        }
        // line 461
        echo "    ";
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 462
            echo "        ";
            // line 463
            echo "        <div ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["highlighted_id"] ?? null)) ? ((("id=\"" . ($context["highlighted_id"] ?? null)) . "\"")) : (""))));
            echo " class=\"clearfix highlighted ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["highlighted_background_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["highlighted_separator"] ?? null), "html", null, true));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["highlighted_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : (""))));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["highlighted_region_paddings"] ?? null)) ? (" region--no-paddings") : (""))));
            echo "\">
            <div
                class=\"";
            // line 465
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["highlighted_layout_container"] ?? null), "html", null, true));
            echo "\">
                ";
            // line 467
            echo "                <div class=\"clearfix highlighted__container";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["highlighted_animations"] ?? null) == " enabled")) ? (" mt-no-opacity") : (""))));
            echo "\" ";
            if ((($context["highlighted_animations"] ?? null) == "enabled")) {
                echo " data-animate-effect=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["highlighted_animation_effect"] ?? null), "html", null, true));
                echo "\" ";
            }
            echo ">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"clearfix highlighted__section\">
                                ";
            // line 471
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", []), "html", null, true));
            echo "
                            </div>
                        </div>
                    </div>
                </div>
                ";
            // line 477
            echo "            </div>
        </div>
        ";
            // line 480
            echo "    ";
        }
        // line 481
        echo "    ";
        if (($this->getAttribute(($context["page"] ?? null), "footer_top_first", []) || $this->getAttribute(($context["page"] ?? null), "footer_top_second", []))) {
            // line 482
            echo "        ";
            // line 483
            echo "        <div ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["footer_top_id"] ?? null)) ? ((("id=\"" . ($context["footer_top_id"] ?? null)) . "\"")) : (""))));
            echo " class=\"clearfix footer-top ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_top_regions"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_top_background_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_top_separator"] ?? null), "html", null, true));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["footer_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : (""))));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["footer_top_region_paddings"] ?? null)) ? (" region--no-paddings") : (""))));
            echo "\">
            <div
                class=\"";
            // line 485
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_top_layout_container"] ?? null), "html", null, true));
            echo "\">
                ";
            // line 487
            echo "                <div class=\"clearfix footer-top__container";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["footer_top_animations"] ?? null) == " enabled")) ? (" mt-no-opacity") : (""))));
            echo "\" ";
            if ((($context["footer_top_animations"] ?? null) == "enabled")) {
                echo " data-animate-effect=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_top_animation_effect"] ?? null), "html", null, true));
                echo "\" ";
            }
            echo ">
                    <div class=\"row\">
                        ";
            // line 489
            if ($this->getAttribute(($context["page"] ?? null), "footer_top_first", [])) {
                // line 490
                echo "                            <div
                                class=\"";
                // line 491
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_top_first_grid_class"] ?? null), "html", null, true));
                echo "\">
                                ";
                // line 493
                echo "                                <div class=\"clearfix footer-top__section footer-top-first\">
                                    ";
                // line 494
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_top_first", []), "html", null, true));
                echo "
                                </div>
                                ";
                // line 497
                echo "                            </div>
                        ";
            }
            // line 499
            echo "                        ";
            if ($this->getAttribute(($context["page"] ?? null), "footer_top_second", [])) {
                // line 500
                echo "                            <div
                                class=\"";
                // line 501
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_top_second_grid_class"] ?? null), "html", null, true));
                echo "\">
                                ";
                // line 503
                echo "                                <div class=\"clearfix footer-top__section footer-top-second\">
                                    ";
                // line 504
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_top_second", []), "html", null, true));
                echo "
                                </div>
                                ";
                // line 507
                echo "                            </div>
                        ";
            }
            // line 509
            echo "                    </div>
                </div>
                ";
            // line 512
            echo "            </div>
        </div>
        ";
            // line 515
            echo "    ";
        }
        // line 516
        echo "    ";
        if ((((($this->getAttribute(($context["page"] ?? null), "footer_first", []) || $this->getAttribute(($context["page"] ?? null), "footer_second", [])) || $this->getAttribute(($context["page"] ?? null), "footer_third", [])) || $this->getAttribute(($context["page"] ?? null), "footer_fourth", [])) || $this->getAttribute(($context["page"] ?? null), "footer_fifth", []))) {
            // line 517
            echo "        ";
            // line 518
            echo "        <footer ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["footer_id"] ?? null)) ? ((("id=\"" . ($context["footer_id"] ?? null)) . "\"")) : (""))));
            echo " class=\"clearfix footer ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_background_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_separator"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["footer_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : (""))));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["footer_region_paddings"] ?? null)) ? (" region--no-paddings") : (""))));
            echo "\">
            <div class=\"";
            // line 519
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_layout_container"] ?? null), "html", null, true));
            echo "\">
                <div class=\"clearfix footer__container\">
                    <div class=\"row\">
                        ";
            // line 522
            if ($this->getAttribute(($context["page"] ?? null), "footer_first", [])) {
                // line 523
                echo "                            <div
                                class=\"";
                // line 524
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_first_grid_class"] ?? null), "html", null, true));
                echo "\">
                                ";
                // line 526
                echo "                                <div class=\"clearfix footer__section footer-first";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["footer_animations"] ?? null) == " enabled")) ? (" mt-no-opacity") : (""))));
                echo "\" ";
                if ((($context["footer_animations"] ?? null) == "enabled")) {
                    echo " data-animate-effect=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_animation_effect"] ?? null), "html", null, true));
                    echo "\" ";
                }
                echo ">
                                    ";
                // line 527
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_first", []), "html", null, true));
                echo "
                                </div>
                                ";
                // line 530
                echo "                            </div>
                        ";
            }
            // line 532
            echo "                        ";
            if ($this->getAttribute(($context["page"] ?? null), "footer_second", [])) {
                // line 533
                echo "                            <div
                                class=\"";
                // line 534
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_second_grid_class"] ?? null), "html", null, true));
                echo "\">
                                ";
                // line 536
                echo "                                <div class=\"clearfix footer__section footer-second";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["footer_animations"] ?? null) == " enabled")) ? (" mt-no-opacity") : (""))));
                echo "\" ";
                if ((($context["footer_animations"] ?? null) == "enabled")) {
                    echo " data-animate-effect=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_animation_effect"] ?? null), "html", null, true));
                    echo "\" ";
                }
                echo ">
                                    ";
                // line 537
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_second", []), "html", null, true));
                echo "
                                </div>
                                ";
                // line 540
                echo "                            </div>
                        ";
            }
            // line 542
            echo "                        <div class=\"clearfix ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_4_columns_clearfix_first"] ?? null), "html", null, true));
            echo "\"></div>
                        ";
            // line 543
            if ($this->getAttribute(($context["page"] ?? null), "footer_third", [])) {
                // line 544
                echo "                            <div
                                class=\"";
                // line 545
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_third_grid_class"] ?? null), "html", null, true));
                echo "\">
                                ";
                // line 547
                echo "                                <div class=\"clearfix footer__section footer-third";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["footer_animations"] ?? null) == " enabled")) ? (" mt-no-opacity") : (""))));
                echo "\" ";
                if ((($context["footer_animations"] ?? null) == "enabled")) {
                    echo " data-animate-effect=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_animation_effect"] ?? null), "html", null, true));
                    echo "\" ";
                }
                echo ">
                                    ";
                // line 548
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_third", []), "html", null, true));
                echo "
                                </div>
                                ";
                // line 551
                echo "                            </div>
                        ";
            }
            // line 553
            echo "                        <div class=\"clearfix ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_4_columns_clearfix_second"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_5_columns_clearfix"] ?? null), "html", null, true));
            echo "\"></div>
                        ";
            // line 554
            if ($this->getAttribute(($context["page"] ?? null), "footer_fourth", [])) {
                // line 555
                echo "                            <div
                                class=\"";
                // line 556
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_fourth_grid_class"] ?? null), "html", null, true));
                echo "\">
                                ";
                // line 558
                echo "                                <div class=\"clearfix footer__section footer-fourth";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["footer_animations"] ?? null) == " enabled")) ? (" mt-no-opacity") : (""))));
                echo "\" ";
                if ((($context["footer_animations"] ?? null) == "enabled")) {
                    echo " data-animate-effect=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_animation_effect"] ?? null), "html", null, true));
                    echo "\" ";
                }
                echo ">
                                    ";
                // line 559
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_fourth", []), "html", null, true));
                echo "
                                </div>
                                ";
                // line 562
                echo "                            </div>
                        ";
            }
            // line 564
            echo "                        ";
            if ($this->getAttribute(($context["page"] ?? null), "footer_fifth", [])) {
                // line 565
                echo "                            <div
                                class=\"";
                // line 566
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_fifth_grid_class"] ?? null), "html", null, true));
                echo "\">
                                ";
                // line 568
                echo "                                <div class=\"clearfix footer__section footer-fifth";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["footer_animations"] ?? null) == " enabled")) ? (" mt-no-opacity") : (""))));
                echo "\" ";
                if ((($context["footer_animations"] ?? null) == "enabled")) {
                    echo " data-animate-effect=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_animation_effect"] ?? null), "html", null, true));
                    echo "\" ";
                }
                echo ">
                                    ";
                // line 569
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_fifth", []), "html", null, true));
                echo "
                                </div>
                                ";
                // line 572
                echo "                            </div>
                        ";
            }
            // line 574
            echo "                    </div>
                </div>
            </div>
        </footer>
        ";
            // line 579
            echo "    ";
        }
        // line 580
        echo "    ";
        if ($this->getAttribute(($context["page"] ?? null), "footer_bottom", [])) {
            // line 581
            echo "        ";
            // line 582
            echo "        <div ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["footer_bottom_id"] ?? null)) ? ((("id=\"" . ($context["footer_bottom_id"] ?? null)) . "\"")) : (""))));
            echo " class=\"clearfix footer-bottom ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_bottom_background_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_bottom_separator"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["footer_bottom_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : (""))));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["footer_bottom_region_paddings"] ?? null)) ? (" region--no-paddings") : (""))));
            echo "\">
            <div
                class=\"";
            // line 584
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_bottom_layout_container"] ?? null), "html", null, true));
            echo "\">
                ";
            // line 586
            echo "                <div class=\"clearfix footer-bottom__container\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"clearfix footer-bottom__section\">
                                ";
            // line 590
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_bottom", []), "html", null, true));
            echo "
                            </div>
                        </div>
                    </div>
                </div>
                ";
            // line 596
            echo "            </div>
        </div>
        ";
            // line 599
            echo "    ";
        }
        // line 600
        echo "    ";
        if (($this->getAttribute(($context["page"] ?? null), "sub_footer_first", []) || $this->getAttribute(($context["page"] ?? null), "footer", []))) {
            // line 601
            echo "        ";
            // line 602
            echo "        <div ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["subfooter_id"] ?? null)) ? ((("id=\"" . ($context["subfooter_id"] ?? null)) . "\"")) : (""))));
            echo " class=\"clearfix subfooter ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["subfooter_background_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["subfooter_separator"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["subfooter_bottom_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : (""))));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["subfooter_bottom_region_paddings"] ?? null)) ? (" region--no-paddings") : (""))));
            echo "\">
            <div
                class=\"";
            // line 604
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["subfooter_layout_container"] ?? null), "html", null, true));
            echo "\">
                ";
            // line 606
            echo "                <div class=\"clearfix subfooter__container\">
                    <div class=\"row\">
                        ";
            // line 608
            if ($this->getAttribute(($context["page"] ?? null), "sub_footer_first", [])) {
                // line 609
                echo "                            <div
                                class=\"";
                // line 610
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["subfooter_first_grid_class"] ?? null), "html", null, true));
                echo "\">
                                ";
                // line 612
                echo "                                <div class=\"clearfix subfooter__section subfooter-first\">
                                    ";
                // line 613
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sub_footer_first", []), "html", null, true));
                echo "
                                </div>
                                ";
                // line 616
                echo "                            </div>
                        ";
            }
            // line 618
            echo "                        ";
            if ($this->getAttribute(($context["page"] ?? null), "footer", [])) {
                // line 619
                echo "                            <div
                                class=\"";
                // line 620
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["subfooter_second_grid_class"] ?? null), "html", null, true));
                echo "\">
                                ";
                // line 622
                echo "                                <div class=\"clearfix subfooter__section subfooter-second\">
                                    ";
                // line 623
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer", []), "html", null, true));
                echo "
                                </div>
                                ";
                // line 626
                echo "                            </div>
                        ";
            }
            // line 628
            echo "                    </div>
                </div>
                ";
            // line 631
            echo "            </div>
        </div>
        ";
            // line 634
            echo "    ";
        }
        // line 635
        echo "    ";
        if (($context["scroll_to_top_display"] ?? null)) {
            // line 636
            echo "        ";
            // line 637
            echo "        <div class=\"to-top\">
            <i class=\"fa ";
            // line 638
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["scroll_to_top_icon"] ?? null), "html", null, true));
            echo "\"></i>
        </div>
        ";
            // line 641
            echo "    ";
        }
        // line 642
        echo "</div>
";
        // line 644
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/corporate_lite/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1437 => 644,  1434 => 642,  1431 => 641,  1426 => 638,  1423 => 637,  1421 => 636,  1418 => 635,  1415 => 634,  1411 => 631,  1407 => 628,  1403 => 626,  1398 => 623,  1395 => 622,  1391 => 620,  1388 => 619,  1385 => 618,  1381 => 616,  1376 => 613,  1373 => 612,  1369 => 610,  1366 => 609,  1364 => 608,  1360 => 606,  1356 => 604,  1343 => 602,  1341 => 601,  1338 => 600,  1335 => 599,  1331 => 596,  1323 => 590,  1317 => 586,  1313 => 584,  1300 => 582,  1298 => 581,  1295 => 580,  1292 => 579,  1286 => 574,  1282 => 572,  1277 => 569,  1266 => 568,  1262 => 566,  1259 => 565,  1256 => 564,  1252 => 562,  1247 => 559,  1236 => 558,  1232 => 556,  1229 => 555,  1227 => 554,  1220 => 553,  1216 => 551,  1211 => 548,  1200 => 547,  1196 => 545,  1193 => 544,  1191 => 543,  1186 => 542,  1182 => 540,  1177 => 537,  1166 => 536,  1162 => 534,  1159 => 533,  1156 => 532,  1152 => 530,  1147 => 527,  1136 => 526,  1132 => 524,  1129 => 523,  1127 => 522,  1121 => 519,  1109 => 518,  1107 => 517,  1104 => 516,  1101 => 515,  1097 => 512,  1093 => 509,  1089 => 507,  1084 => 504,  1081 => 503,  1077 => 501,  1074 => 500,  1071 => 499,  1067 => 497,  1062 => 494,  1059 => 493,  1055 => 491,  1052 => 490,  1050 => 489,  1038 => 487,  1034 => 485,  1020 => 483,  1018 => 482,  1015 => 481,  1012 => 480,  1008 => 477,  1000 => 471,  986 => 467,  982 => 465,  970 => 463,  968 => 462,  965 => 461,  962 => 460,  958 => 457,  950 => 451,  936 => 447,  932 => 445,  920 => 443,  918 => 442,  915 => 441,  912 => 440,  908 => 437,  900 => 431,  886 => 427,  882 => 425,  870 => 423,  868 => 422,  865 => 421,  862 => 420,  858 => 417,  850 => 411,  836 => 407,  832 => 405,  820 => 403,  818 => 402,  815 => 401,  812 => 400,  808 => 397,  800 => 391,  786 => 387,  782 => 385,  770 => 383,  768 => 382,  765 => 381,  762 => 380,  758 => 377,  750 => 371,  736 => 367,  732 => 365,  720 => 363,  718 => 362,  715 => 361,  712 => 360,  708 => 357,  704 => 354,  700 => 352,  695 => 349,  692 => 348,  688 => 346,  685 => 345,  682 => 344,  678 => 342,  673 => 339,  670 => 338,  666 => 336,  663 => 335,  661 => 334,  649 => 332,  645 => 330,  633 => 328,  631 => 327,  628 => 326,  622 => 321,  618 => 319,  613 => 316,  600 => 315,  596 => 313,  593 => 312,  590 => 311,  586 => 309,  581 => 306,  568 => 305,  564 => 303,  561 => 302,  559 => 301,  556 => 300,  553 => 298,  547 => 296,  545 => 295,  532 => 294,  528 => 292,  517 => 287,  515 => 286,  512 => 285,  508 => 282,  500 => 276,  486 => 272,  482 => 270,  470 => 268,  468 => 267,  465 => 266,  462 => 265,  458 => 262,  450 => 256,  436 => 252,  432 => 250,  422 => 248,  420 => 247,  417 => 246,  408 => 240,  402 => 236,  399 => 235,  396 => 234,  392 => 231,  384 => 225,  378 => 221,  374 => 219,  364 => 217,  362 => 216,  359 => 215,  356 => 214,  353 => 212,  350 => 211,  346 => 208,  342 => 205,  338 => 203,  333 => 200,  330 => 199,  326 => 197,  323 => 196,  320 => 195,  316 => 193,  311 => 190,  308 => 189,  304 => 187,  301 => 186,  298 => 185,  294 => 183,  289 => 180,  286 => 179,  282 => 177,  279 => 176,  277 => 175,  273 => 173,  269 => 171,  257 => 169,  255 => 168,  252 => 167,  249 => 166,  245 => 163,  241 => 160,  237 => 158,  232 => 155,  229 => 154,  225 => 152,  222 => 151,  219 => 150,  215 => 148,  210 => 145,  207 => 144,  203 => 142,  200 => 141,  198 => 140,  186 => 138,  182 => 136,  174 => 134,  172 => 133,  169 => 132,  166 => 131,  162 => 128,  158 => 125,  154 => 123,  149 => 120,  146 => 119,  142 => 117,  139 => 116,  136 => 115,  132 => 113,  127 => 110,  124 => 109,  120 => 107,  117 => 106,  115 => 105,  103 => 103,  99 => 101,  91 => 99,  89 => 98,  87 => 97,  84 => 96,  82 => 95,  80 => 94,  77 => 93,  71 => 87,  69 => 86,  66 => 84,  60 => 80,  56 => 78,  50 => 76,  47 => 75,  45 => 74,  43 => 73,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/corporate_lite/templates/page.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/gagyasociados/themes/corporate_lite/templates/page.html.twig");
    }
}
