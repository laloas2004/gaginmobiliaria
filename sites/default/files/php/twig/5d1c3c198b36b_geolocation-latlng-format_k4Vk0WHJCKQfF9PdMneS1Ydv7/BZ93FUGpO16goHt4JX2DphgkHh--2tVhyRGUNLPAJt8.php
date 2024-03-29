<?php

/* modules/contrib/geolocation/templates/geolocation-latlng-formatter.html.twig */
class __TwigTemplate_d77b283191dbaf77df79d3883972c28ddf5984c5f5c27edbc778a1c1f6528455 extends Twig_Template
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
        $tags = [];
        $filters = [];
        $functions = [];

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                [],
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

        // line 15
        echo "<span typeof=\"Place\">
  <span property=\"geo\" typeof=\"GeoCoordinates\">
    <meta property=\"latitude\" content=\"";
        // line 17
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["lat"]) ? $context["lat"] : null), "html", null, true));
        echo "\">
    <meta property=\"longitude\" content=\"";
        // line 18
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["lng"]) ? $context["lng"] : null), "html", null, true));
        echo "\">
  </span>
  <span class=\"geolocation-latlng\">";
        // line 20
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["lat"]) ? $context["lat"] : null), "html", null, true));
        echo ", ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["lng"]) ? $context["lng"] : null), "html", null, true));
        echo "</span>
</span>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/geolocation/templates/geolocation-latlng-formatter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 20,  51 => 18,  47 => 17,  43 => 15,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/contrib/geolocation/templates/geolocation-latlng-formatter.html.twig", "/home3/websiete/public_html/inmobiliariagag18.com/gaginmobiliaria/modules/contrib/geolocation/templates/geolocation-latlng-formatter.html.twig");
    }
}
