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

/* themes/contrib/dxpr_theme/templates/form-element--search.html.twig */
class __TwigTemplate_39761aa0d868a202d0de0a9abf329dfd extends Template
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
        $context["description_classes"] = ["description", (((        // line 50
($context["description_display"] ?? null) == "invisible")) ? ("visually-hidden") : (""))];
        // line 53
        echo "
";
        // line 54
        if ( !twig_test_empty(($context["prefix"] ?? null))) {
            // line 55
            echo "  <span class=\"field-prefix\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["prefix"] ?? null), 55, $this->source), "html", null, true);
            echo "</span>
";
        }
        // line 57
        if ((($context["label_display"] ?? null) == "before")) {
            // line 58
            echo "  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 58, $this->source), "html", null, true);
            echo "
";
        }
        // line 60
        if (((($context["description_display"] ?? null) == "before") && twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 60))) {
            // line 61
            echo "  <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 61), 61, $this->source), "html", null, true);
            echo ">
    ";
            // line 62
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
            echo "
  </div>
";
        }
        // line 65
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 65, $this->source), "html", null, true);
        echo "
";
        // line 66
        if ( !twig_test_empty(($context["suffix"] ?? null))) {
            // line 67
            echo "  <span class=\"field-suffix\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["suffix"] ?? null), 67, $this->source), "html", null, true);
            echo "</span>
";
        }
        // line 69
        if ((($context["label_display"] ?? null) == "after")) {
            // line 70
            echo "  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 70, $this->source), "html", null, true);
            echo "
";
        }
        // line 72
        if (($context["errors"] ?? null)) {
            // line 73
            echo "  <div class=\"form-item--error-message\">
    <strong>";
            // line 74
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors"] ?? null), 74, $this->source), "html", null, true);
            echo "</strong>
  </div>
";
        }
        // line 77
        if ((twig_in_filter(($context["description_display"] ?? null), ["after", "invisible"]) && twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 77))) {
            // line 78
            echo "  <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 78), "addClass", [($context["description_classes"] ?? null)], "method", false, false, true, 78), 78, $this->source), "html", null, true);
            echo ">
    ";
            // line 79
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 79), 79, $this->source), "html", null, true);
            echo "
  </div>
";
        }
        // line 82
        echo "
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["description_display", "prefix", "label_display", "label", "description", "children", "suffix", "errors"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/dxpr_theme/templates/form-element--search.html.twig";
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
        return array (  118 => 82,  112 => 79,  107 => 78,  105 => 77,  99 => 74,  96 => 73,  94 => 72,  88 => 70,  86 => 69,  80 => 67,  78 => 66,  74 => 65,  68 => 62,  63 => 61,  61 => 60,  55 => 58,  53 => 57,  47 => 55,  45 => 54,  42 => 53,  40 => 50,  39 => 48,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/dxpr_theme/templates/form-element--search.html.twig", "/app/web/themes/contrib/dxpr_theme/templates/form-element--search.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 48, "if" => 54);
        static $filters = array("escape" => 55);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape'],
                []
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
