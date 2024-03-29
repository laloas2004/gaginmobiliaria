<?php

/* themes/corporate_lite/templates/node.html.twig */
class __TwigTemplate_8642addcb40d10cd73ac6162e53e075d27a01cbca29c34a23e7abedc956a6d03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'node_side' => [$this, 'block_node_side'],
            'meta_area' => [$this, 'block_meta_area'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $tags = ["set" => 70, "block" => 84, "if" => 90, "trans" => 100];
        $filters = ["clean_class" => 72];
        $functions = ["attach_library" => 80];

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                ['set', 'block', 'if', 'trans'],
                ['clean_class'],
                ['attach_library']
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

        // line 70
        $context["classes"] = [0 => "node", 1 => ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 72
(isset($context["node"]) ? $context["node"] : null), "bundle", []))), 2 => (($this->getAttribute(        // line 73
(isset($context["node"]) ? $context["node"] : null), "isPromoted", [], "method")) ? ("node--promoted") : ("")), 3 => (($this->getAttribute(        // line 74
(isset($context["node"]) ? $context["node"] : null), "isSticky", [], "method")) ? ("node--sticky") : ("")), 4 => (( !$this->getAttribute(        // line 75
(isset($context["node"]) ? $context["node"] : null), "isPublished", [], "method")) ? ("node--unpublished") : ("")), 5 => ((        // line 76
(isset($context["view_mode"]) ? $context["view_mode"] : null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass((isset($context["view_mode"]) ? $context["view_mode"] : null)))) : ("")), 6 => "clearfix"];
        // line 80
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("classy/node"), "html", null, true));
        echo "
";
        // line 81
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("corporate_lite/node"), "html", null, true));
        echo "
<article";
        // line 82
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", [0 => (isset($context["classes"]) ? $context["classes"] : null)], "method"), "html", null, true));
        echo ">
  <div class=\"node__container\">
    ";
        // line 84
        $this->displayBlock('node_side', $context, $blocks);
        // line 86
        echo "    <div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["content_attributes"]) ? $context["content_attributes"] : null), "addClass", [0 => "node__main-content", 1 => "clearfix"], "method"), "html", null, true));
        echo ">
      <header class=\"node__header\">
        ";
        // line 88
        $this->displayBlock('meta_area', $context, $blocks);
        // line 111
        echo "      </header>
      ";
        // line 112
        $this->displayBlock('content', $context, $blocks);
        // line 115
        echo "    </div>
  </div>
</article>
";
    }

    // line 84
    public function block_node_side($context, array $blocks = [])
    {
        // line 85
        echo "    ";
    }

    // line 88
    public function block_meta_area($context, array $blocks = [])
    {
        // line 89
        echo "          ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true));
        echo "
          ";
        // line 90
        if ( !(isset($context["page"]) ? $context["page"] : null)) {
            // line 91
            echo "            <h2";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["title_attributes"]) ? $context["title_attributes"] : null), "addClass", [0 => "node__title"], "method"), "html", null, true));
            echo ">
              <a href=\"";
            // line 92
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true));
            echo "\" rel=\"bookmark\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true));
            echo "</a>
            </h2>
          ";
        }
        // line 95
        echo "          ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true));
        echo "
          ";
        // line 96
        if ((isset($context["display_submitted"]) ? $context["display_submitted"] : null)) {
            // line 97
            echo "            <div class=\"node__meta\">
              ";
            // line 98
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["author_picture"]) ? $context["author_picture"] : null), "html", null, true));
            echo "
              <span";
            // line 99
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["author_attributes"]) ? $context["author_attributes"] : null), "addClass", [0 => "node__submitted-info"], "method"), "html", null, true));
            echo ">
                ";
            // line 100
            echo t("<span class=\"node__submitted-info-text\">By</span> @author_name on 
                  <span class=\"node__submitted-date\">
                    @date
                  </span>", array("@author_name" =>             // line 101
(isset($context["author_name"]) ? $context["author_name"] : null), "@date" =>             // line 103
(isset($context["date"]) ? $context["date"] : null), ));
            // line 106
            echo "              </span>
              ";
            // line 107
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["metadata"]) ? $context["metadata"] : null), "html", null, true));
            echo "
            </div>
          ";
        }
        // line 110
        echo "        ";
    }

    // line 112
    public function block_content($context, array $blocks = [])
    {
        // line 113
        echo "        ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
        echo "
      ";
    }

    public function getTemplateName()
    {
        return "themes/corporate_lite/templates/node.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 113,  156 => 112,  152 => 110,  146 => 107,  143 => 106,  141 => 103,  140 => 101,  136 => 100,  132 => 99,  128 => 98,  125 => 97,  123 => 96,  118 => 95,  110 => 92,  105 => 91,  103 => 90,  98 => 89,  95 => 88,  91 => 85,  88 => 84,  81 => 115,  79 => 112,  76 => 111,  74 => 88,  68 => 86,  66 => 84,  61 => 82,  57 => 81,  53 => 80,  51 => 76,  50 => 75,  49 => 74,  48 => 73,  47 => 72,  46 => 70,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/corporate_lite/templates/node.html.twig", "/home3/websiete/public_html/inmobiliariagag18.com/gaginmobiliaria/themes/corporate_lite/templates/node.html.twig");
    }
}
