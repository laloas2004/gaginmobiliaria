<?php

/* themes/corporate_lite/templates/geolocation-common-map-display.html.twig */
class __TwigTemplate_9905b7602a997739b2fc520d683e8f4b8c0042708d61dc9f8dbbbe658604a145 extends Twig_Template
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
        $tags = ["if" => 1, "for" => 3];
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

        // line 1
        echo "<div id=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true));
        echo "\" class=\"geolocation-common-map\" ";
        if (((( !twig_test_empty($this->getAttribute((isset($context["centre"]) ? $context["centre"] : null), "lat_north_east", [])) &&  !twig_test_empty($this->getAttribute((isset($context["centre"]) ? $context["centre"] : null), "lng_north_east", []))) &&  !twig_test_empty($this->getAttribute((isset($context["centre"]) ? $context["centre"] : null), "lat_south_west", []))) &&  !twig_test_empty($this->getAttribute((isset($context["centre"]) ? $context["centre"] : null), "lng_south_west", [])))) {
            echo " data-centre-lat-north-east=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["centre"]) ? $context["centre"] : null), "lat_north_east", []), "html", null, true));
            echo "\" data-centre-lng-north-east=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["centre"]) ? $context["centre"] : null), "lng_north_east", []), "html", null, true));
            echo "\" data-centre-lat-south-west=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["centre"]) ? $context["centre"] : null), "lat_south_west", []), "html", null, true));
            echo "\" data-centre-lng-south-west=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["centre"]) ? $context["centre"] : null), "lng_south_west", []), "html", null, true));
            echo "\" ";
        }
        echo " ";
        if (( !twig_test_empty($this->getAttribute((isset($context["centre"]) ? $context["centre"] : null), "lat", [])) &&  !twig_test_empty($this->getAttribute((isset($context["centre"]) ? $context["centre"] : null), "lng", [])))) {
            echo " data-centre-lat=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["centre"]) ? $context["centre"] : null), "lat", []), "html", null, true));
            echo "\" data-centre-lng=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["centre"]) ? $context["centre"] : null), "lng", []), "html", null, true));
            echo "\" ";
        }
        echo " ";
        if ( !twig_test_empty((isset($context["fitbounds"]) ? $context["fitbounds"] : null))) {
            echo " data-fitbounds=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["fitbounds"]) ? $context["fitbounds"] : null), "html", null, true));
            echo "\" ";
        }
        echo " ";
        if ( !twig_test_empty((isset($context["clientlocation"]) ? $context["clientlocation"] : null))) {
            echo " data-clientlocation=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["clientlocation"]) ? $context["clientlocation"] : null), "html", null, true));
            echo "\" ";
        }
        echo ">
    <div class=\"geolocation-common-map-locations\" style=\"display:none;\">
        ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["locations"]) ? $context["locations"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
            // line 4
            echo "            ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["location"], "html", null, true));
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "    </div>
    <div class=\"geolocation-common-map-container\"></div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/corporate_lite/templates/geolocation-common-map-display.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 6,  85 => 4,  81 => 3,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/corporate_lite/templates/geolocation-common-map-display.html.twig", "/home3/websiete/public_html/inmobiliariagag18.com/gaginmobiliaria/themes/corporate_lite/templates/geolocation-common-map-display.html.twig");
    }
}
