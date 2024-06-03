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

/* modules/contrib/dxpr_builder/templates/dxpr-license-info.html.twig */
class __TwigTemplate_287776c766e15573cb0d6411099b51d1 extends Template
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
        // line 16
        echo "<div class=\"user-licenses\">
  <div class=\"user-licenses__title\">
    ";
        // line 18
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["block_label"] ?? null), 18, $this->source), "html", null, true);
        echo "
    ";
        // line 19
        if (($context["more_info_link"] ?? null)) {
            // line 20
            echo "      <a class=\"user-licenses__title--more-link\" href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["more_info_link"] ?? null), 20, $this->source), "html", null, true);
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("User licenses dashboard"));
            echo "</a>
    ";
        }
        // line 22
        echo "  </div>
  <div class=\"user-licenses__stats\">
    <div class=\"user-licenses__stats--users\">
      <span class=\"user-licenses__stats--users-number\">";
        // line 25
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["total_count"] ?? null), 25, $this->source), "html", null, true);
        echo "</span>
      <span class=\"user-licenses__stats--users-label\">
          ";
        // line 27
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["total_label"] ?? null), 27, $this->source), "html", null, true);
        echo "
        </span>
    </div>
    <div class=\"user-licenses__stats--seats\">
      <span class=\"user-licenses__stats--seats-number\">
        ";
        // line 32
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["used_count"] ?? null), 32, $this->source), "html", null, true);
        echo "/";
        if (($context["limit"] ?? null)) {
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["limit"] ?? null), 32, $this->source), "html", null, true);
        } else {
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("unlimited"));
        }
        // line 33
        echo "      </span>
      <span class=\"user-licenses__stats--seats-label\">
          ";
        // line 35
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["used_label"] ?? null), 35, $this->source), "html", null, true);
        echo "
        </span>
    </div>
  </div>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["block_label", "more_info_link", "total_count", "total_label", "used_count", "limit", "used_label"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "modules/contrib/dxpr_builder/templates/dxpr-license-info.html.twig";
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
        return array (  87 => 35,  83 => 33,  75 => 32,  67 => 27,  62 => 25,  57 => 22,  49 => 20,  47 => 19,  43 => 18,  39 => 16,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/dxpr_builder/templates/dxpr-license-info.html.twig", "/app/web/modules/contrib/dxpr_builder/templates/dxpr-license-info.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 19);
        static $filters = array("escape" => 18, "t" => 20);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 't'],
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
