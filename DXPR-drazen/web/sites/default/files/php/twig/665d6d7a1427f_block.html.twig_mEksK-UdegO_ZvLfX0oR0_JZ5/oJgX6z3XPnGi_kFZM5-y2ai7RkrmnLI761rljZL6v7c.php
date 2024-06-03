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

/* themes/contrib/dxpr_theme/templates/block.html.twig */
class __TwigTemplate_7c0a91be9b3f0c01a55c9fa92de04fe4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 48
        $context["designRegions"] = [];
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 49), "block_design_regions", [], "any", false, false, true, 49));
        foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
            // line 50
            echo "   ";
            if ($context["name"]) {
                // line 51
                echo "   ";
                $context["designRegions"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["designRegions"] ?? null), 51, $this->source), [$context["name"]]);
                // line 52
                echo "   ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        $context["classes"] = ["block", ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 57
($context["configuration"] ?? null), "provider", [], "any", false, false, true, 57), 57, $this->source))), ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 58
($context["plugin_id"] ?? null), 58, $this->source))), "clearfix", (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 60
($context["theme"] ?? null), "settings", [], "any", false, false, true, 60), "block_card", [], "any", false, false, true, 60) && twig_in_filter(($context["region"] ?? null), ($context["designRegions"] ?? null)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 60), "block_card", [], "any", false, false, true, 60)) : (""))];
        // line 64
        $context["title_classes"] = ["block-title", (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 66
($context["theme"] ?? null), "settings", [], "any", false, false, true, 66), "title_card", [], "any", false, false, true, 66) && twig_in_filter(($context["region"] ?? null), ($context["designRegions"] ?? null)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 66), "title_card", [], "any", false, false, true, 66)) : (""))];
        // line 69
        echo "<section";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 69), 69, $this->source), "html", null, true);
        echo ">
  ";
        // line 70
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 70, $this->source), "html", null, true);
        echo "
  ";
        // line 71
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 71), "title_sticker", [], "any", false, false, true, 71) && twig_in_filter(($context["region"] ?? null), ($context["designRegions"] ?? null)))) {
            // line 72
            echo "    <div class=\"wrap-block-title\">
  ";
        }
        // line 74
        echo "  ";
        if (($context["label"] ?? null)) {
            // line 75
            echo "    <h2";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [($context["title_classes"] ?? null)], "method", false, false, true, 75), 75, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 75, $this->source), "html", null, true);
            echo "</h2>
  ";
        }
        // line 77
        echo "  ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 77), "title_sticker", [], "any", false, false, true, 77) && twig_in_filter(($context["region"] ?? null), ($context["designRegions"] ?? null)))) {
            // line 78
            echo "    </div>
  ";
        }
        // line 80
        echo "  ";
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 80), "block_divider", [], "any", false, false, true, 80) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 80), "block_divider_thickness", [], "any", false, false, true, 80)) && twig_in_filter(($context["region"] ?? null), ($context["designRegions"] ?? null)))) {
            // line 81
            echo "    <hr class=\"block-hr\">
  ";
        }
        // line 83
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 83, $this->source), "html", null, true);
        echo "

  ";
        // line 85
        $this->displayBlock('content', $context, $blocks);
        // line 88
        echo "</section>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["theme", "configuration", "plugin_id", "region", "attributes", "title_prefix", "label", "title_attributes", "title_suffix", "content"]);    }

    // line 85
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 86
        echo "    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 86, $this->source), "html", null, true);
        echo "
  ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/dxpr_theme/templates/block.html.twig";
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
        return array (  125 => 86,  121 => 85,  115 => 88,  113 => 85,  107 => 83,  103 => 81,  100 => 80,  96 => 78,  93 => 77,  85 => 75,  82 => 74,  78 => 72,  76 => 71,  72 => 70,  67 => 69,  65 => 66,  64 => 64,  62 => 60,  61 => 58,  60 => 57,  59 => 55,  52 => 52,  49 => 51,  46 => 50,  42 => 49,  40 => 48,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/dxpr_theme/templates/block.html.twig", "/app/web/themes/contrib/dxpr_theme/templates/block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 48, "for" => 49, "if" => 50, "block" => 85);
        static $filters = array("merge" => 51, "clean_class" => 57, "escape" => 69);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if', 'block'],
                ['merge', 'clean_class', 'escape'],
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
