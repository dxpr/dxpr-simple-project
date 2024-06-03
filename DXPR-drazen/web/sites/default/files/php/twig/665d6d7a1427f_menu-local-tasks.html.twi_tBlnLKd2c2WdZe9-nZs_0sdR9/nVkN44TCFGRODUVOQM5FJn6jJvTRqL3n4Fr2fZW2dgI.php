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

/* themes/contrib/dxpr_theme/templates/menu-local-tasks.html.twig */
class __TwigTemplate_91ca78ec1feeb83071defff1eccadd7d extends Template
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
        if (($context["primary"] ?? null)) {
            // line 19
            echo "  <div class=\"dxpr-theme-mini-tabs-wrapper\">
    <h2 class=\"visually-hidden\">";
            // line 20
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Primary tabs"));
            echo "</h2>
    <ul class=\"tabs--primary nav nav-tabs\">";
            // line 21
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["primary"] ?? null), 21, $this->source), "html", null, true);
            echo "</ul>
  </div>
";
        }
        // line 24
        if (($context["secondary"] ?? null)) {
            // line 25
            echo "  <h2 class=\"visually-hidden\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Secondary tabs"));
            echo "</h2>
  <ul class=\"tabs--secondary pagination pagination-sm\">";
            // line 26
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["secondary"] ?? null), 26, $this->source), "html", null, true);
            echo "</ul>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["primary", "secondary"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/dxpr_theme/templates/menu-local-tasks.html.twig";
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
        return array (  61 => 26,  56 => 25,  54 => 24,  48 => 21,  44 => 20,  41 => 19,  39 => 18,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/dxpr_theme/templates/menu-local-tasks.html.twig", "/app/web/themes/contrib/dxpr_theme/templates/menu-local-tasks.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 18);
        static $filters = array("t" => 20, "escape" => 21);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['t', 'escape'],
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
