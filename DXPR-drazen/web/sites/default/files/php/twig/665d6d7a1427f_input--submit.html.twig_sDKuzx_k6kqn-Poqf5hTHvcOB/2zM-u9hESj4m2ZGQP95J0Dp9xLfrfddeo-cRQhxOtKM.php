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

/* themes/contrib/dxpr_theme/templates/input--submit.html.twig */
class __TwigTemplate_b55b6b6bed6401e246fe55d0aabd9e9b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'input' => [$this, 'block_input'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "
";
        // line 15
        $context["classes"] = ["btn", ((        // line 17
($context["icon"] ?? null)) ? ("btn-link") : ("btn-primary")), (((        // line 18
($context["type"] ?? null) == "submit")) ? ("js-form-submit") : (""))];
        // line 21
        $this->displayBlock('input', $context, $blocks);
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["icon", "type", "attributes", "label", "children"]);    }

    public function block_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "  ";
        if (($context["icon"] ?? null)) {
            // line 23
            echo "    <span class=\"input-group-btn\">
      <button";
            // line 24
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null), "icon-only"], "method", false, false, true, 24), 24, $this->source), "html", null, true);
            echo ">
      <span class=\"sr-only\">";
            // line 25
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 25, $this->source), "html", null, true);
            echo "</span>
        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"20\" fill=\"currentColor\" class=\"bi bi-search\" viewBox=\"-1 1 18 18\">
          <path d=\"M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z\" stroke=\"currentColor\" stroke-width=\"1.5\"/>
        </svg>
      </button>
    </span>
  ";
        } else {
            // line 32
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "hasClass", ["button"], "method", false, false, true, 32) &&  !twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "hasClass", ["field-add-more-submit"], "method", false, false, true, 32))) {
                // line 33
                echo "      <input";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["btn btn-primary"], "method", false, false, true, 33), 33, $this->source), "html", null, true);
                echo " />
    ";
            } else {
                // line 35
                echo "      <input";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["form-control"], "method", false, false, true, 35), 35, $this->source), "html", null, true);
                echo " />
    ";
            }
            // line 37
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 37, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 39
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 39, $this->source), "html", null, true);
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/dxpr_theme/templates/input--submit.html.twig";
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
        return array (  96 => 39,  90 => 37,  84 => 35,  78 => 33,  75 => 32,  65 => 25,  61 => 24,  58 => 23,  55 => 22,  47 => 21,  45 => 18,  44 => 17,  43 => 15,  40 => 13,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/dxpr_theme/templates/input--submit.html.twig", "/app/web/themes/contrib/dxpr_theme/templates/input--submit.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 15, "block" => 21, "if" => 22);
        static $filters = array("escape" => 24);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if'],
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
