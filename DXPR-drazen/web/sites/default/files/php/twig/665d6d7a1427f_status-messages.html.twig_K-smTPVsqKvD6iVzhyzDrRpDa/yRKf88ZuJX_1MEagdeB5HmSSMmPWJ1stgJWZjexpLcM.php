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

/* themes/contrib/dxpr_theme/templates/status-messages.html.twig */
class __TwigTemplate_d4ca9288b104760e8c48e4df103e001b extends Template
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
        // line 30
        $context["classes"] = ((twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "offsetGet", ["class"], "method", true, true, true, 30)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "offsetGet", ["class"], "method", false, false, true, 30), 30, $this->source), [])) : ([]));
        // line 32
        $context["status_heading"] = ["status" => t("Status message"), "error" => t("Error message"), "warning" => t("Warning message"), "info" => t("Informative message")];
        // line 40
        $context["status_classes"] = ["status" => "success", "error" => "danger", "warning" => "warning", "info" => "info"];
        // line 47
        echo "<div class=\"wrap-messages\">
";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["message_list"] ?? null));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 49
            echo "  ";
            // line 50
            $context["message_classes"] = ["alert", ("alert-" . $this->sandbox->ensureToStringAllowed((($__internal_compile_0 =             // line 52
($context["status_classes"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["type"]] ?? null) : null), 52, $this->source)), "alert-dismissible"];
            // line 56
            echo "  ";
            // line 57
            echo "  <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "setAttribute", ["class", ($context["classes"] ?? null)], "method", false, false, true, 57), "addClass", [($context["message_classes"] ?? null)], "method", false, false, true, 57), "setAttribute", ["role", "alert"], "method", false, false, true, 57), 57, $this->source), "html", null, true);
            echo ">
    <button type=\"button\" role=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"";
            // line 58
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Close"));
            echo "\"></button>
    ";
            // line 59
            if ((($__internal_compile_1 = ($context["status_headings"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["type"]] ?? null) : null)) {
                // line 60
                echo "      <h4 class=\"sr-only\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_2 = ($context["status_headings"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[$context["type"]] ?? null) : null), 60, $this->source), "html", null, true);
                echo "</h4>
    ";
            }
            // line 62
            echo "    ";
            if ((twig_length_filter($this->env, $context["messages"]) > 1)) {
                // line 63
                echo "      <ul class=\"item-list item-list--messages\">
        ";
                // line 64
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 65
                    echo "          <li class=\"item item--message\">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["message"], 65, $this->source), "html", null, true);
                    echo "</li>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 67
                echo "      </ul>
    ";
            } else {
                // line 69
                echo "      ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_first($this->env, $this->sandbox->ensureToStringAllowed($context["messages"], 69, $this->source)), "html", null, true);
                echo "
    ";
            }
            // line 71
            echo "  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "message_list", "status_headings"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/dxpr_theme/templates/status-messages.html.twig";
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
        return array (  112 => 73,  105 => 71,  99 => 69,  95 => 67,  86 => 65,  82 => 64,  79 => 63,  76 => 62,  70 => 60,  68 => 59,  64 => 58,  59 => 57,  57 => 56,  55 => 52,  54 => 50,  52 => 49,  48 => 48,  45 => 47,  43 => 40,  41 => 32,  39 => 30,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/dxpr_theme/templates/status-messages.html.twig", "/app/web/themes/contrib/dxpr_theme/templates/status-messages.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 30, "for" => 48, "if" => 59);
        static $filters = array("default" => 30, "t" => 33, "escape" => 57, "length" => 62, "first" => 69);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
                ['default', 't', 'escape', 'length', 'first'],
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
