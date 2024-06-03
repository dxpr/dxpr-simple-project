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

/* @gin/navigation/toolbar--gin--secondary.html.twig */
class __TwigTemplate_f4568975dfddfdebeea9ee6cbf5c3509 extends Template
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
        // line 23
        echo "
";
        // line 25
        $__internal_compile_0 = null;
        try {
            $__internal_compile_0 =             $this->loadTemplate("@gin/navigation/fix-toolbar-js-error.html.twig", "@gin/navigation/toolbar--gin--secondary.html.twig", 25);
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_compile_0) {
            $__internal_compile_0->display(twig_array_merge($context, ["toolbar_variant" =>             // line 26
($context["toolbar_variant"] ?? null), "core_navigation" =>             // line 27
($context["core_navigation"] ?? null)]));
        }
        // line 29
        echo "
";
        // line 31
        if ((($__internal_compile_1 = (($__internal_compile_2 = $context) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#secondary"] ?? null) : null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["tabs"] ?? null) : null)) {
            // line 32
            echo "  ";
            $context["tabs"] = (($__internal_compile_3 = (($__internal_compile_4 = $context) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["#secondary"] ?? null) : null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["tabs"] ?? null) : null);
        }
        // line 34
        if ((($__internal_compile_5 = (($__internal_compile_6 = $context) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["#secondary"] ?? null) : null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["trays"] ?? null) : null)) {
            // line 35
            echo "  ";
            $context["trays"] = (($__internal_compile_7 = (($__internal_compile_8 = $context) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["#secondary"] ?? null) : null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["trays"] ?? null) : null);
        }
        // line 37
        echo "
<div";
        // line 38
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["toolbar", "toolbar-secondary"], "method", false, false, true, 38), "setAttribute", ["id", "toolbar-administration-secondary"], "method", false, false, true, 38), 38, $this->source), "html", null, true);
        echo ">
  <nav";
        // line 39
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["toolbar_attributes"] ?? null), "addClass", ["toolbar-bar", "clearfix"], "method", false, false, true, 39), "setAttribute", ["id", "toolbar-bar"], "method", false, false, true, 39), 39, $this->source), "html", null, true);
        echo ">
    <h2 class=\"visually-hidden\">";
        // line 40
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["toolbar_heading"] ?? null), 40, $this->source), "html", null, true);
        echo "</h2>

    ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tabs"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["tab"]) {
            // line 43
            echo "      ";
            $context["tray"] = (($__internal_compile_9 = ($context["trays"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[$context["key"]] ?? null) : null);
            // line 44
            echo "      ";
            $context["user_menu"] = (((($__internal_compile_10 = twig_get_attribute($this->env, $this->source, ($context["tray"] ?? null), "links", [], "any", false, false, true, 44)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["user_links"] ?? null) : null)) ? ("user-menu") : (false));
            // line 45
            echo "      ";
            $context["item_id"] = [];
            // line 46
            echo "
      ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((($__internal_compile_11 = (($__internal_compile_12 = twig_get_attribute($this->env, $this->source, $context["tab"], "link", [], "any", false, false, true, 47)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["#attributes"] ?? null) : null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["class"] ?? null) : null));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 48
                echo "        ";
                if (twig_in_filter("icon-", $context["item"])) {
                    // line 49
                    echo "          ";
                    $context["item_id"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["item_id"] ?? null), 49, $this->source), [("toolbar-id--" . $this->sandbox->ensureToStringAllowed($context["item"], 49, $this->source))]);
                    // line 50
                    echo "        ";
                }
                // line 51
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "
      ";
            // line 53
            $context["tab_id"] = (((($__internal_compile_13 = twig_get_attribute($this->env, $this->source, $context["tab"], "link", [], "any", false, false, true, 53)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["#id"] ?? null) : null)) ? (("toolbar-tab--" . $this->sandbox->ensureToStringAllowed((($__internal_compile_14 = twig_get_attribute($this->env, $this->source, $context["tab"], "link", [], "any", false, false, true, 53)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["#id"] ?? null) : null), 53, $this->source))) : (""));
            // line 54
            echo "      ";
            $context["tab_classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["item_id"] ?? null), 54, $this->source), ["toolbar-tab", ($context["user_menu"] ?? null), ($context["tab_id"] ?? null)]);
            // line 55
            echo "
      ";
            // line 56
            $context["denylist_items"] = ["toolbar-id--toolbar-icon-menu"];
            // line 59
            echo "
      ";
            // line 61
            echo "      ";
            if (!twig_in_filter((($__internal_compile_15 = ($context["item_id"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15[0] ?? null) : null), ($context["denylist_items"] ?? null))) {
                // line 62
                echo "        <div";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["tab"], "attributes", [], "any", false, false, true, 62), "addClass", [($context["tab_classes"] ?? null)], "method", false, false, true, 62), 62, $this->source), "html", null, true);
                if (twig_in_filter("tour-toolbar-tab", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["tab"], "attributes", [], "any", false, false, true, 62), "class", [], "any", false, false, true, 62))) {
                    echo " id=\"toolbar-tab-tour\"";
                }
                echo ">
          ";
                // line 63
                if (((($__internal_compile_16 = ($context["item_id"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[0] ?? null) : null) == "toolbar-id--toolbar-icon-user")) {
                    // line 64
                    echo "            ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["user_picture"] ?? null), 64, $this->source), "html", null, true);
                    echo "
          ";
                } else {
                    // line 66
                    echo "            ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["tab"], "link", [], "any", false, false, true, 66), 66, $this->source), "html", null, true);
                    echo "
          ";
                }
                // line 68
                echo "          <div";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["tray"] ?? null), "attributes", [], "any", false, false, true, 68), 68, $this->source), "html", null, true);
                echo ">
            ";
                // line 69
                if (twig_get_attribute($this->env, $this->source, ($context["tray"] ?? null), "label", [], "any", false, false, true, 69)) {
                    // line 70
                    echo "              <nav class=\"toolbar-lining clearfix\" role=\"navigation\" aria-label=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["tray"] ?? null), "label", [], "any", false, false, true, 70), 70, $this->source), "html", null, true);
                    echo "\">
                <h3 class=\"toolbar-tray-name visually-hidden\">";
                    // line 71
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["tray"] ?? null), "label", [], "any", false, false, true, 71), 71, $this->source), "html", null, true);
                    echo "</h3>
            ";
                } else {
                    // line 73
                    echo "              <nav class=\"toolbar-lining clearfix\" role=\"navigation\">
            ";
                }
                // line 75
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["tray"] ?? null), "links", [], "any", false, false, true, 75), 75, $this->source), "html", null, true);
                echo "
            </nav>
          </div>
        </div>
      ";
            }
            // line 80
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "  </nav>
  ";
        // line 82
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["remainder"] ?? null), 82, $this->source), "html", null, true);
        echo "
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["toolbar_variant", "core_navigation", "_context", "attributes", "toolbar_attributes", "toolbar_heading", "user_picture", "remainder"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@gin/navigation/toolbar--gin--secondary.html.twig";
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
        return array (  200 => 82,  197 => 81,  191 => 80,  182 => 75,  178 => 73,  173 => 71,  168 => 70,  166 => 69,  161 => 68,  155 => 66,  149 => 64,  147 => 63,  139 => 62,  136 => 61,  133 => 59,  131 => 56,  128 => 55,  125 => 54,  123 => 53,  120 => 52,  114 => 51,  111 => 50,  108 => 49,  105 => 48,  101 => 47,  98 => 46,  95 => 45,  92 => 44,  89 => 43,  85 => 42,  80 => 40,  76 => 39,  72 => 38,  69 => 37,  65 => 35,  63 => 34,  59 => 32,  57 => 31,  54 => 29,  51 => 27,  50 => 26,  42 => 25,  39 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "@gin/navigation/toolbar--gin--secondary.html.twig", "/app/web/themes/contrib/gin/templates/navigation/toolbar--gin--secondary.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 25, "if" => 31, "set" => 32, "for" => 42);
        static $filters = array("escape" => 38, "merge" => 49);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['include', 'if', 'set', 'for'],
                ['escape', 'merge'],
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
