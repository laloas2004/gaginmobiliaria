<?php

/* modules/contrib/juicebox/templates/juicebox-embed-markup.html.twig */
class __TwigTemplate_489f4344b0da2d59bf680a90dc611836c26d0fadbe3476e34826533886a1f155 extends Twig_Template
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
        $tags = ["if" => 23, "for" => 29];
        $filters = [];
        $functions = [];

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                ['if', 'for'],
                [],
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

        // line 18
        echo "<div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
        echo ">
  ";
        // line 19
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true));
        echo "
  <div id=\"";
        // line 20
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["gallery_id"]) ? $context["gallery_id"] : null), "html", null, true));
        echo "\" class=\"juicebox-container\">
    <noscript>
      <!-- Image gallery content for non-javascript devices -->
      ";
        // line 23
        if ($this->getAttribute((isset($context["gallery_options"]) ? $context["gallery_options"] : null), "gallerytitle", [], "any", true, true)) {
            // line 24
            echo "      <h1 class=\"jb-name\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["gallery_options"]) ? $context["gallery_options"] : null), "gallerytitle", []), "html", null, true));
            echo "</h1>
      ";
        }
        // line 26
        echo "      ";
        if ($this->getAttribute((isset($context["gallery_options"]) ? $context["gallery_options"] : null), "gallerydescription", [], "any", true, true)) {
            // line 27
            echo "      <p class=\"jb-description\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["gallery_options"]) ? $context["gallery_options"] : null), "gallerydescription", []), "html", null, true));
            echo "</p>
      ";
        }
        // line 29
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["gallery_images"]) ? $context["gallery_images"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 30
            echo "      <p class=\"jb-image\">
        ";
            // line 31
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["image"], "image_plain", []), "html", null, true));
            echo "<br/>
        <span class=\"jb-title\">";
            // line 32
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["image"], "title", []), "html", null, true));
            echo "</span><br/>
        <span class=\"jb-caption\">";
            // line 33
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["image"], "caption", []), "html", null, true));
            echo "</span>
      </p>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "    </noscript>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/juicebox/templates/juicebox-embed-markup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 36,  91 => 33,  87 => 32,  83 => 31,  80 => 30,  75 => 29,  69 => 27,  66 => 26,  60 => 24,  58 => 23,  52 => 20,  48 => 19,  43 => 18,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/contrib/juicebox/templates/juicebox-embed-markup.html.twig", "/home3/websiete/public_html/inmobiliariagag18.com/gaginmobiliaria/modules/contrib/juicebox/templates/juicebox-embed-markup.html.twig");
    }
}
