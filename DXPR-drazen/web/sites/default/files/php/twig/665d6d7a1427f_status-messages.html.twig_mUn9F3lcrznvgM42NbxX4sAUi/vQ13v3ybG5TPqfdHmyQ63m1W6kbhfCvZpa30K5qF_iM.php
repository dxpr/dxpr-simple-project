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

/* themes/contrib/gin/templates/misc/status-messages.html.twig */
class __TwigTemplate_9c81b068e6b14f7430136b4af791d057 extends Template
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
        // line 25
        echo "<div data-drupal-messages class=\"messages-list\">
  <div class=\"messages__wrapper\">
    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["message_list"] ?? null));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 28
            echo "      ";
            // line 29
            $context["classes"] = ["messages-list__item", "messages", ("messages--" . $this->sandbox->ensureToStringAllowed(            // line 32
$context["type"], 32, $this->source))];
            // line 35
            echo "      ";
            // line 36
            $context["is_message_with_title"] = (($__internal_compile_0 = ($context["status_headings"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["type"]] ?? null) : null);
            // line 38
            echo "      ";
            // line 39
            $context["is_message_with_icon"] = twig_in_filter($context["type"], ["error", "status", "warning"]);
            // line 41
            echo "
      <div role=\"contentinfo\" aria-labelledby=\"";
            // line 42
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_1 = ($context["title_ids"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["type"]] ?? null) : null), 42, $this->source), "html", null, true);
            echo "\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 42), 42, $this->source), "role", "aria-label"), "html", null, true);
            echo ">
        ";
            // line 43
            if ((($context["is_message_with_title"] ?? null) || ($context["is_message_with_icon"] ?? null))) {
                // line 44
                echo "          <div class=\"messages__header\">
            ";
                // line 45
                if (($context["is_message_with_title"] ?? null)) {
                    // line 46
                    echo "              <h2 id=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_2 = ($context["title_ids"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[$context["type"]] ?? null) : null), 46, $this->source), "html", null, true);
                    echo "\" class=\"messages__title\">
                ";
                    // line 47
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_3 = ($context["status_headings"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[$context["type"]] ?? null) : null), 47, $this->source), "html", null, true);
                    echo "
              </h2>
            ";
                }
                // line 50
                echo "          </div>
        ";
            }
            // line 52
            echo "        <div class=\"messages__content\">
          ";
            // line 53
            if ((twig_length_filter($this->env, $context["messages"]) > 1)) {
                // line 54
                echo "            <ul class=\"messages__list\">
              ";
                // line 55
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 56
                    echo "                <li class=\"messages__item\">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["message"], 56, $this->source), "html", null, true);
                    echo "</li>
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 58
                echo "            </ul>
          ";
            } else {
                // line 60
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_first($this->env, $this->sandbox->ensureToStringAllowed($context["messages"], 60, $this->source)), "html", null, true);
                echo "
          ";
            }
            // line 62
            echo "        </div>
        <button type=\"button\" class=\"button button--dismiss js-message-button-hide\" title=\"";
            // line 63
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Hide"));
            echo "\">
          <span class=\"icon-close\"></span>
          ";
            // line 65
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Hide"));
            echo "
        </button>
      </div>
      ";
            // line 69
            echo "      ";
            $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "removeClass", [($context["classes"] ?? null)], "method", false, false, true, 69);
            // line 70
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "  </div>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["message_list", "status_headings", "title_ids", "attributes"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/gin/templates/misc/status-messages.html.twig";
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
        return array (  145 => 71,  139 => 70,  136 => 69,  130 => 65,  125 => 63,  122 => 62,  116 => 60,  112 => 58,  103 => 56,  99 => 55,  96 => 54,  94 => 53,  91 => 52,  87 => 50,  81 => 47,  76 => 46,  74 => 45,  71 => 44,  69 => 43,  63 => 42,  60 => 41,  58 => 39,  56 => 38,  54 => 36,  52 => 35,  50 => 32,  49 => 29,  47 => 28,  43 => 27,  39 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/gin/templates/misc/status-messages.html.twig", "/app/web/themes/contrib/gin/templates/misc/status-messages.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 27, "set" => 29, "if" => 43);
        static $filters = array("escape" => 42, "without" => 42, "length" => 53, "first" => 60, "t" => 63);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set', 'if'],
                ['escape', 'without', 'length', 'first', 't'],
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
