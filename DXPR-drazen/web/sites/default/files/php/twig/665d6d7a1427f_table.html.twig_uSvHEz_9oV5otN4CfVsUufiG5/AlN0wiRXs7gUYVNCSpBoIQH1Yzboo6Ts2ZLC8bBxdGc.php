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

/* themes/contrib/gin/templates/dataset/table.html.twig */
class __TwigTemplate_81e08009807cd738f9c9f2c4fa4a1ab4 extends Template
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
        // line 42
        echo "<div class=\"layer-wrapper gin-layer-wrapper\">
  ";
        // line 43
        if (($context["header"] ?? null)) {
            // line 44
            echo "    ";
            if (($context["sticky"] ?? null)) {
                // line 45
                echo "      <table class=\"gin--sticky-table-header syncscroll\" name=\"gin-sticky-header\" hidden>
        <thead>
          <tr>
            ";
                // line 48
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["header"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["cell"]) {
                    // line 49
                    echo "              ";
                    if (twig_in_filter("<a", $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, $context["cell"], "content", [], "any", false, false, true, 49))))) {
                        // line 50
                        echo "                ";
                        // line 51
                        $context["cell_classes"] = ["th__item", ((twig_get_attribute($this->env, $this->source,                         // line 53
$context["cell"], "active_table_sort", [], "any", false, false, true, 53)) ? ("is-active") : (""))];
                        // line 56
                        echo "              ";
                    } else {
                        // line 57
                        echo "                ";
                        // line 58
                        $context["cell_classes"] = [("th__" . \Drupal\Component\Utility\Html::getClass($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,                         // line 59
$context["cell"], "content", [], "any", false, false, true, 59), 59, $this->source)))), ((twig_get_attribute($this->env, $this->source,                         // line 60
$context["cell"], "active_table_sort", [], "any", false, false, true, 60)) ? ("is-active") : (""))];
                        // line 63
                        echo "              ";
                    }
                    // line 64
                    echo "              <";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["cell"], "tag", [], "any", false, false, true, 64), 64, $this->source), "html", null, true);
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cell"], "attributes", [], "any", false, false, true, 64), "addClass", [($context["cell_classes"] ?? null)], "method", false, false, true, 64), 64, $this->source), "html", null, true);
                    echo ">";
                    // line 65
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["cell"], "content", [], "any", false, false, true, 65), 65, $this->source), "html", null, true);
                    // line 66
                    echo "</";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["cell"], "tag", [], "any", false, false, true, 66), 66, $this->source), "html", null, true);
                    echo ">
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cell'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 68
                echo "          </tr>
        </thead>
      </table>
    ";
            }
            // line 72
            echo "  <div class=\"gin-table-scroll-wrapper gin-horizontal-scroll-shadow syncscroll\" name=\"gin-sticky-header\">
  ";
        }
        // line 74
        echo "    <table";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 74, $this->source), "html", null, true);
        echo ">
      ";
        // line 75
        if (($context["caption"] ?? null)) {
            // line 76
            echo "        <caption>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["caption"] ?? null), 76, $this->source), "html", null, true);
            echo "</caption>
      ";
        }
        // line 78
        echo "
      ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["colgroups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["colgroup"]) {
            // line 80
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, $context["colgroup"], "cols", [], "any", false, false, true, 80)) {
                // line 81
                echo "          <colgroup";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["colgroup"], "attributes", [], "any", false, false, true, 81), 81, $this->source), "html", null, true);
                echo ">
            ";
                // line 82
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["colgroup"], "cols", [], "any", false, false, true, 82));
                foreach ($context['_seq'] as $context["_key"] => $context["col"]) {
                    // line 83
                    echo "              <col";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["col"], "attributes", [], "any", false, false, true, 83), 83, $this->source), "html", null, true);
                    echo " />
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['col'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 85
                echo "          </colgroup>
        ";
            } else {
                // line 87
                echo "          <colgroup";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["colgroup"], "attributes", [], "any", false, false, true, 87), 87, $this->source), "html", null, true);
                echo " />
        ";
            }
            // line 89
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['colgroup'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "
      ";
        // line 91
        if (($context["header"] ?? null)) {
            // line 92
            echo "        <thead>
          <tr>
            ";
            // line 94
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["header"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["cell"]) {
                // line 95
                echo "              ";
                if (twig_in_filter("<a", $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, $context["cell"], "content", [], "any", false, false, true, 95))))) {
                    // line 96
                    echo "                ";
                    // line 97
                    $context["cell_classes"] = ["th__item", ((twig_get_attribute($this->env, $this->source,                     // line 99
$context["cell"], "active_table_sort", [], "any", false, false, true, 99)) ? ("is-active") : (""))];
                    // line 102
                    echo "              ";
                } else {
                    // line 103
                    echo "                ";
                    // line 104
                    $context["cell_classes"] = [("th__" . \Drupal\Component\Utility\Html::getClass($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,                     // line 105
$context["cell"], "content", [], "any", false, false, true, 105), 105, $this->source)))), ((twig_get_attribute($this->env, $this->source,                     // line 106
$context["cell"], "active_table_sort", [], "any", false, false, true, 106)) ? ("is-active") : (""))];
                    // line 109
                    echo "              ";
                }
                // line 110
                echo "              <";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["cell"], "tag", [], "any", false, false, true, 110), 110, $this->source), "html", null, true);
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cell"], "attributes", [], "any", false, false, true, 110), "addClass", [($context["cell_classes"] ?? null)], "method", false, false, true, 110), 110, $this->source), "html", null, true);
                echo ">";
                // line 111
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["cell"], "content", [], "any", false, false, true, 111), 111, $this->source), "html", null, true);
                // line 112
                echo "</";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["cell"], "tag", [], "any", false, false, true, 112), 112, $this->source), "html", null, true);
                echo ">
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cell'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 114
            echo "          </tr>
        </thead>
      ";
        }
        // line 117
        echo "
      ";
        // line 118
        if (($context["rows"] ?? null)) {
            // line 119
            echo "        <tbody>
          ";
            // line 120
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 121
                echo "            ";
                // line 122
                $context["row_classes"] = [(( !                // line 123
($context["no_striping"] ?? null)) ? (twig_cycle(["odd", "even"], $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 123), 123, $this->source))) : (""))];
                // line 126
                echo "            <tr";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "attributes", [], "any", false, false, true, 126), "addClass", [($context["row_classes"] ?? null)], "method", false, false, true, 126), 126, $this->source), "html", null, true);
                echo ">
              ";
                // line 127
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["row"], "cells", [], "any", false, false, true, 127));
                foreach ($context['_seq'] as $context["_key"] => $context["cell"]) {
                    // line 128
                    echo "                <";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["cell"], "tag", [], "any", false, false, true, 128), 128, $this->source), "html", null, true);
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["cell"], "attributes", [], "any", false, false, true, 128), 128, $this->source), "html", null, true);
                    echo ">";
                    // line 129
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["cell"], "content", [], "any", false, false, true, 129), 129, $this->source), "html", null, true);
                    // line 130
                    echo "</";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["cell"], "tag", [], "any", false, false, true, 130), 130, $this->source), "html", null, true);
                    echo ">
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cell'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 132
                echo "            </tr>
          ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 134
            echo "        </tbody>
      ";
        } elseif (        // line 135
($context["empty"] ?? null)) {
            // line 136
            echo "        <tbody>
          <tr class=\"odd\">
            <td colspan=\"";
            // line 138
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_columns"] ?? null), 138, $this->source), "html", null, true);
            echo "\" class=\"empty message\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["empty"] ?? null), 138, $this->source), "html", null, true);
            echo "</td>
          </tr>
        </tbody>
      ";
        }
        // line 142
        echo "      ";
        if (($context["footer"] ?? null)) {
            // line 143
            echo "        <tfoot>
          ";
            // line 144
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["footer"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 145
                echo "            <tr";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "attributes", [], "any", false, false, true, 145), 145, $this->source), "html", null, true);
                echo ">
              ";
                // line 146
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["row"], "cells", [], "any", false, false, true, 146));
                foreach ($context['_seq'] as $context["_key"] => $context["cell"]) {
                    // line 147
                    echo "                <";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["cell"], "tag", [], "any", false, false, true, 147), 147, $this->source), "html", null, true);
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["cell"], "attributes", [], "any", false, false, true, 147), 147, $this->source), "html", null, true);
                    echo ">";
                    // line 148
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["cell"], "content", [], "any", false, false, true, 148), 148, $this->source), "html", null, true);
                    // line 149
                    echo "</";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["cell"], "tag", [], "any", false, false, true, 149), 149, $this->source), "html", null, true);
                    echo ">
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cell'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 151
                echo "            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 153
            echo "        </tfoot>
      ";
        }
        // line 155
        echo "    </table>
  ";
        // line 156
        if (($context["header"] ?? null)) {
            // line 157
            echo "  </div>
  ";
        }
        // line 159
        echo "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["header", "sticky", "attributes", "caption", "colgroups", "rows", "no_striping", "loop", "empty", "header_columns", "footer"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/gin/templates/dataset/table.html.twig";
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
        return array (  356 => 159,  352 => 157,  350 => 156,  347 => 155,  343 => 153,  336 => 151,  327 => 149,  325 => 148,  320 => 147,  316 => 146,  311 => 145,  307 => 144,  304 => 143,  301 => 142,  292 => 138,  288 => 136,  286 => 135,  283 => 134,  268 => 132,  259 => 130,  257 => 129,  252 => 128,  248 => 127,  243 => 126,  241 => 123,  240 => 122,  238 => 121,  221 => 120,  218 => 119,  216 => 118,  213 => 117,  208 => 114,  199 => 112,  197 => 111,  192 => 110,  189 => 109,  187 => 106,  186 => 105,  185 => 104,  183 => 103,  180 => 102,  178 => 99,  177 => 97,  175 => 96,  172 => 95,  168 => 94,  164 => 92,  162 => 91,  159 => 90,  153 => 89,  147 => 87,  143 => 85,  134 => 83,  130 => 82,  125 => 81,  122 => 80,  118 => 79,  115 => 78,  109 => 76,  107 => 75,  102 => 74,  98 => 72,  92 => 68,  83 => 66,  81 => 65,  76 => 64,  73 => 63,  71 => 60,  70 => 59,  69 => 58,  67 => 57,  64 => 56,  62 => 53,  61 => 51,  59 => 50,  56 => 49,  52 => 48,  47 => 45,  44 => 44,  42 => 43,  39 => 42,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/gin/templates/dataset/table.html.twig", "/app/web/themes/contrib/gin/templates/dataset/table.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 43, "for" => 48, "set" => 51);
        static $filters = array("render" => 49, "clean_class" => 59, "escape" => 64);
        static $functions = array("cycle" => 123);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set'],
                ['render', 'clean_class', 'escape'],
                ['cycle']
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
