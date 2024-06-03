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

/* themes/contrib/dxpr_theme/templates/menu--main.html.twig */
class __TwigTemplate_b6aec6fd54fe973f907b22b0a13b2388 extends Template
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
        // line 18
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 19
        echo "
";
        // line 24
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [($context["items"] ?? null), ($context["attributes"] ?? null), 0], 24, $context, $this->getSourceContext()));
        echo "

";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["_self", "items", "attributes", "menu_level"]);    }

    // line 26
    public function macro_menu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 27
            echo "  ";
            $macros["menus"] = $this;
            // line 28
            echo "  ";
            if (($context["items"] ?? null)) {
                // line 29
                echo "    ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 30
                    echo "      <ul";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["menu", "nav", "navbar-nav"], "method", false, false, true, 30), 30, $this->source), "html", null, true);
                    echo ">
    ";
                } elseif ((                // line 31
($context["menu_level"] ?? null) == 1)) {
                    // line 32
                    echo "      <ul";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["dropdown-menu"], "method", false, false, true, 32), 32, $this->source), "html", null, true);
                    echo ">
    ";
                } else {
                    // line 34
                    echo "      <ul";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["dxpr-theme-megamenu"], "method", false, false, true, 34), 34, $this->source), "html", null, true);
                    echo ">
    ";
                }
                // line 36
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 37
                    echo "      ";
                    // line 38
                    $context["item_classes"] = ["expanded", "dropdown", ((twig_get_attribute($this->env, $this->source,                     // line 41
$context["item"], "in_active_trail", [], "any", false, false, true, 41)) ? ("active") : (""))];
                    // line 44
                    echo "      ";
                    if (((($context["menu_level"] ?? null) == 0) && twig_get_attribute($this->env, $this->source, $context["item"], "is_expanded", [], "any", false, false, true, 44))) {
                        // line 45
                        echo "        <li";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 45), "addClass", [($context["item_classes"] ?? null)], "method", false, false, true, 45), 45, $this->source), "html", null, true);
                        echo ">
        <a href=\"";
                        // line 46
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
                        echo "\" class=\"dropdown-toggle\" data-target=\"#\">";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
                        echo "</a>
      ";
                    } elseif (((                    // line 47
($context["menu_level"] ?? null) == 1) && twig_get_attribute($this->env, $this->source, $context["item"], "is_expanded", [], "any", false, false, true, 47))) {
                        // line 48
                        echo "        <li";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 48), "addClass", [($context["item_classes"] ?? null)], "method", false, false, true, 48), 48, $this->source), "html", null, true);
                        echo ">
        <a href=\"";
                        // line 49
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
                        echo "\" class=\"dxpr-theme-megamenu__heading\" data-target=\"#\">";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
                        echo "</a>
      ";
                    } else {
                        // line 51
                        echo "        <li";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 51), "addClass", [($context["item_classes"] ?? null)], "method", false, false, true, 51), 51, $this->source), "html", null, true);
                        echo ">
        ";
                        // line 52
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 52), 52, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 52), 52, $this->source), ["class" => "parent_link"]), "html", null, true);
                        echo "
      ";
                    }
                    // line 54
                    echo "      ";
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 54)) {
                        // line 55
                        echo "        ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 55), twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "removeClass", ["nav", "navbar-nav", "menu", "dropdown-menu", "dxpr-theme-megamenu"], "method", false, false, true, 55), (($context["menu_level"] ?? null) + 1)], 55, $context, $this->getSourceContext()));
                        echo "
      ";
                    }
                    // line 57
                    echo "      </li>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 59
                echo "    </ul>
  ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/dxpr_theme/templates/menu--main.html.twig";
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
        return array (  159 => 59,  152 => 57,  146 => 55,  143 => 54,  138 => 52,  133 => 51,  126 => 49,  121 => 48,  119 => 47,  113 => 46,  108 => 45,  105 => 44,  103 => 41,  102 => 38,  100 => 37,  95 => 36,  89 => 34,  83 => 32,  81 => 31,  76 => 30,  73 => 29,  70 => 28,  67 => 27,  52 => 26,  44 => 24,  41 => 19,  39 => 18,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/dxpr_theme/templates/menu--main.html.twig", "/app/web/themes/contrib/dxpr_theme/templates/menu--main.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 18, "macro" => 26, "if" => 28, "for" => 36, "set" => 38);
        static $filters = array("escape" => 30);
        static $functions = array("link" => 52);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'for', 'set'],
                ['escape'],
                ['link']
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
