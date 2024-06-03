<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/contrib/dxpr_theme/templates/html.html.twig */
class __TwigTemplate_ea2ffda36f69ff38507045e0f6e218d3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 48
        $context["html_classes"] = [(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 49
($context["theme"] ?? null), "settings", [], "any", false, false, true, 49), "sticky_footer", [], "any", false, false, true, 49) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 49), "boxed_layout", [], "any", false, false, true, 49))) ? ("html--dxpr-theme-sticky-footer") : (""))];
        // line 53
        $context["body_classes"] = ["html", ((        // line 55
($context["logged_in"] ?? null)) ? ("user-logged-in") : ("")), (( !        // line 56
($context["root_path"] ?? null)) ? ("path-frontpage") : (("path-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["root_path"] ?? null), 56, $this->source))))), ((        // line 57
($context["node_type"] ?? null)) ? (("page-node-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["node_type"] ?? null), 57, $this->source)))) : ("")), ((        // line 58
($context["db_offline"] ?? null)) ? ("db-offline") : ("")), ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 59
($context["theme"] ?? null), "settings", [], "any", false, false, true, 59), "navbar_position", [], "any", false, false, true, 59)) ? (("navbar-is-" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 59), "navbar_position", [], "any", false, false, true, 59), 59, $this->source))) : ("")), ((twig_get_attribute($this->env, $this->source,         // line 60
($context["theme"] ?? null), "has_glyphicons", [], "any", false, false, true, 60)) ? ("has-glyphicons") : ("")), ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 61
($context["theme"] ?? null), "settings", [], "any", false, false, true, 61), "header_position", [], "any", false, false, true, 61)) ? ("body--dxpr-theme-header-side") : ("body--dxpr-theme-header-top")), ((( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 62
($context["theme"] ?? null), "settings", [], "any", false, false, true, 62), "header_position", [], "any", false, false, true, 62) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 62), "header_style", [], "any", false, false, true, 62) != "overlay"))) ? ("body--dxpr-theme-header-not-overlay") : ("")), (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 63
($context["theme"] ?? null), "settings", [], "any", false, false, true, 63), "header_position", [], "any", false, false, true, 63)) ? (("body--dxpr-theme-header-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 63), "header_style", [], "any", false, false, true, 63), 63, $this->source)))) : ("")), (((( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 64
($context["theme"] ?? null), "settings", [], "any", false, false, true, 64), "header_position", [], "any", false, false, true, 64) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 64), "header_top_sticky", [], "any", false, false, true, 64)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 64), "header_top_fixed", [], "any", false, false, true, 64))) ? ("body--dxpr-theme-header-fixed") : ("")), ((twig_in_filter(        // line 65
($context["page_title"] ?? null), twig_get_array_keys_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_dth_hide_regions", [], "any", false, false, true, 65), "getValue", [], "any", false, false, true, 65), 65, $this->source)))) ? ("body--primary-tabs-float") : (""))];
        // line 68
        if (($context["body_bg_image_path"] ?? null)) {
            // line 69
            echo "  ";
            $context["style"] = (("background-image:url(" . $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(($context["body_bg_image_path"] ?? null), 69, $this->source))) . ");");
            // line 70
            echo "  ";
            $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "setAttribute", ["style", ($context["style"] ?? null)], "method", false, false, true, 70);
        }
        // line 72
        echo "<!DOCTYPE html>
<html ";
        // line 73
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["html_attributes"] ?? null), "addClass", [($context["html_classes"] ?? null)], "method", false, false, true, 73), 73, $this->source), "html", null, true);
        echo ">
  <head>
    <head-placeholder token=\"";
        // line 75
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 75, $this->source));
        echo "\">
    <title>";
        // line 76
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->safeJoin($this->env, $this->sandbox->ensureToStringAllowed(($context["head_title"] ?? null), 76, $this->source), " | "));
        echo "</title>
    <style>ul.dropdown-menu {display: none;}</style>
    <css-placeholder token=\"";
        // line 78
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 78, $this->source));
        echo "\">
    <js-placeholder token=\"";
        // line 79
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 79, $this->source));
        echo "\">
  </head>
  <body";
        // line 81
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["body_classes"] ?? null)], "method", false, false, true, 81), 81, $this->source), "html", null, true);
        echo ">
  ";
        // line 82
        $context["breakpoint"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 82), "header_mobile_breakpoint", [], "any", false, false, true, 82) > 4099)) ? ("99999") : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 82), "header_mobile_breakpoint", [], "any", false, false, true, 82)));
        // line 83
        echo "  <script>
  var dxpr_themeNavBreakpoint = ";
        // line 84
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["breakpoint"] ?? null), 84, $this->source), "html", null, true);
        echo ";
  var dxpr_themeWindowWidth = window.innerWidth;
  if (dxpr_themeWindowWidth > dxpr_themeNavBreakpoint) {
    document.body.className += ' body--dxpr-theme-nav-desktop';
  }
  else {
    document.body.className += ' body--dxpr-theme-nav-mobile';
  }
  </script>
    <a href=\"#main-content\" class=\"visually-hidden focusable skip-link\">
      ";
        // line 94
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Skip to main content"));
        echo "
    </a>
    ";
        // line 96
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_top"] ?? null), 96, $this->source), "html", null, true);
        echo "
    ";
        // line 97
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page"] ?? null), 97, $this->source), "html", null, true);
        echo "
    <js-bottom-placeholder token=\"";
        // line 98
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 98, $this->source));
        echo "\">
    ";
        // line 99
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_bottom"] ?? null), 99, $this->source), "html", null, true);
        echo "
  </body>
</html>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["theme", "logged_in", "root_path", "node_type", "db_offline", "page_title", "node", "body_bg_image_path", "html_attributes", "placeholder_token", "head_title", "page_top", "page", "page_bottom"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/dxpr_theme/templates/html.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  129 => 99,  125 => 98,  121 => 97,  117 => 96,  112 => 94,  99 => 84,  96 => 83,  94 => 82,  90 => 81,  85 => 79,  81 => 78,  76 => 76,  72 => 75,  67 => 73,  64 => 72,  60 => 70,  57 => 69,  55 => 68,  53 => 65,  52 => 64,  51 => 63,  50 => 62,  49 => 61,  48 => 60,  47 => 59,  46 => 58,  45 => 57,  44 => 56,  43 => 55,  42 => 53,  40 => 49,  39 => 48,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/dxpr_theme/templates/html.html.twig", "/app/web/themes/contrib/dxpr_theme/templates/html.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 48, "if" => 68);
        static $filters = array("clean_class" => 56, "keys" => 65, "escape" => 73, "raw" => 75, "safe_join" => 76, "t" => 94);
        static $functions = array("file_url" => 69);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'keys', 'escape', 'raw', 'safe_join', 't'],
                ['file_url']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
