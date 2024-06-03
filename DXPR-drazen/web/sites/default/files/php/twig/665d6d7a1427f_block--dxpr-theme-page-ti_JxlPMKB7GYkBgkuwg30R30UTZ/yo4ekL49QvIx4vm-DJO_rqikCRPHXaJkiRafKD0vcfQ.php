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

/* themes/contrib/dxpr_theme/templates/block--dxpr-theme-page-title.html.twig */
class __TwigTemplate_3895f1a96b3098cb7c07db13c52b62ee extends Template
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
            echo "    ";
            if ($context["name"]) {
                // line 51
                echo "        ";
                $context["designRegions"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["designRegions"] ?? null), 51, $this->source), [$context["name"]]);
                // line 52
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        $context["title_classes"] = ["block-title", (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 56
($context["theme"] ?? null), "settings", [], "any", false, false, true, 56), "title_card", [], "any", false, false, true, 56) && twig_in_filter(($context["region"] ?? null), ($context["designRegions"] ?? null)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 56), "title_card", [], "any", false, false, true, 56)) : (""))];
        // line 58
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 58, $this->source), "html", null, true);
        echo "
";
        // line 59
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 59), "title_sticker", [], "any", false, false, true, 59) && twig_in_filter(($context["region"] ?? null), ($context["designRegions"] ?? null)))) {
            // line 60
            echo "<div class=\"wrap-block-title\">
    ";
        }
        // line 62
        echo "    ";
        if (($context["label"] ?? null)) {
            // line 63
            echo "        <h2";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [($context["title_classes"] ?? null)], "method", false, false, true, 63), 63, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 63, $this->source), "html", null, true);
            echo "</h2>
    ";
        }
        // line 65
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 65), "title_sticker", [], "any", false, false, true, 65) && twig_in_filter(($context["region"] ?? null), ($context["designRegions"] ?? null)))) {
            // line 66
            echo "</div>
";
        }
        // line 68
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 68), "block_divider", [], "any", false, false, true, 68) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 68), "block_divider_thickness", [], "any", false, false, true, 68)) && twig_in_filter(($context["region"] ?? null), ($context["designRegions"] ?? null)))) {
            // line 69
            echo "    <hr class=\"block-hr\">
";
        }
        // line 71
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 71, $this->source), "html", null, true);
        echo "

";
        // line 73
        $this->displayBlock('content', $context, $blocks);
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["theme", "region", "title_prefix", "label", "title_attributes", "title_suffix", "content"]);    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 74
        echo "    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 74, $this->source), "html", null, true);
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/dxpr_theme/templates/block--dxpr-theme-page-title.html.twig";
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
        return array (  109 => 74,  101 => 73,  96 => 71,  92 => 69,  90 => 68,  86 => 66,  83 => 65,  75 => 63,  72 => 62,  68 => 60,  66 => 59,  62 => 58,  60 => 56,  59 => 54,  52 => 52,  49 => 51,  46 => 50,  42 => 49,  40 => 48,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/dxpr_theme/templates/block--dxpr-theme-page-title.html.twig", "/app/web/themes/contrib/dxpr_theme/templates/block--dxpr-theme-page-title.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 48, "for" => 49, "if" => 50, "block" => 73);
        static $filters = array("merge" => 51, "escape" => 58);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if', 'block'],
                ['merge', 'escape'],
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
