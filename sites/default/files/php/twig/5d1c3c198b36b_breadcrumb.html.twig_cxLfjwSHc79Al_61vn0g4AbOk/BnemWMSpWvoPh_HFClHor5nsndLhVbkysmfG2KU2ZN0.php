<?php

/* themes/corporate_lite/templates/breadcrumb.html.twig */
class __TwigTemplate_7abb2db936e6c601e0ff4cae986fa801e625233e4785b5812aedc025a0d565ef extends Twig_Template
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
        $tags = ["if" => 11, "for" => 15];
        $filters = ["t" => 13];
        $functions = ["attach_library" => 10];

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                ['if', 'for'],
                ['t'],
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

        // line 10
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("corporate_lite/breadcrumb"), "html", null, true));
        echo "
";
        // line 11
        if ((isset($context["breadcrumb"]) ? $context["breadcrumb"] : null)) {
            // line 12
            echo "  <nav class=\"breadcrumb\" role=\"navigation\" aria-labelledby=\"system-breadcrumb\">
    <h2 id=\"system-breadcrumb\" class=\"visually-hidden\">";
            // line 13
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Breadcrumb")));
            echo "</h2>
    <ol class=\"breadcrumb__items\">
    ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumb"]) ? $context["breadcrumb"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 16
                echo "      <li class=\"breadcrumb__item\">
        <span class=\"breadcrumb__item-separator fa ";
                // line 17
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["mt_setting"]) ? $context["mt_setting"] : null), "breadcrumb_separator", []), "html", null, true));
                echo "\"></span>
        ";
                // line 18
                if ($this->getAttribute($context["item"], "url", [])) {
                    // line 19
                    echo "          <a href=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "url", []), "html", null, true));
                    echo "\">
            <span>";
                    // line 20
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "text", []), "html", null, true));
                    echo "</span>
          </a>
        ";
                } else {
                    // line 23
                    echo "          <span>";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "text", []), "html", null, true));
                    echo "</span>
        ";
                }
                // line 25
                echo "      </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "    </ol>
  </nav>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/corporate_lite/templates/breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 27,  87 => 25,  81 => 23,  75 => 20,  70 => 19,  68 => 18,  64 => 17,  61 => 16,  57 => 15,  52 => 13,  49 => 12,  47 => 11,  43 => 10,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/corporate_lite/templates/breadcrumb.html.twig", "/home3/websiete/public_html/inmobiliariagag18.com/gaginmobiliaria/themes/corporate_lite/templates/breadcrumb.html.twig");
    }
}
