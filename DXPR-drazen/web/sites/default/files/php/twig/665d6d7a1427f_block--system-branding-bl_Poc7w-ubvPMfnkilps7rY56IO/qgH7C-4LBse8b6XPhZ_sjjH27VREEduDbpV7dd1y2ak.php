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

/* themes/contrib/dxpr_theme/templates/block--system-branding-block.html.twig */
class __TwigTemplate_cd405c41c3559a1179d62686177ef3f0 extends Template
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
        // line 17
        $this->displayBlock('content', $context, $blocks);
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["site_logo", "site_name"]);    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "  ";
        if ((($context["site_logo"] ?? null) || ($context["site_name"] ?? null))) {
            // line 19
            echo "  <div class=\"wrap-branding\">
  ";
        }
        // line 21
        echo "  ";
        if (($context["site_logo"] ?? null)) {
            // line 22
            echo "    <a class=\"logo navbar-btn\" href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
            echo "\" title=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
            echo "\" rel=\"home\">
      <img id=\"logo\" src=\"";
            // line 23
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_logo"] ?? null), 23, $this->source), "html", null, true);
            echo "\" alt=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
            echo "\" />
    </a>
  ";
        }
        // line 26
        echo "  ";
        if (($context["site_name"] ?? null)) {
            // line 27
            echo "    <a class=\"name navbar-brand\" href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
            echo "\" title=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
            echo "\" rel=\"home\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null), 27, $this->source), "html", null, true);
            echo "</a>
  ";
        }
        // line 29
        echo "  ";
        if ((($context["site_logo"] ?? null) || ($context["site_name"] ?? null))) {
            // line 30
            echo "  </div>
  ";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/dxpr_theme/templates/block--system-branding-block.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  89 => 30,  86 => 29,  76 => 27,  73 => 26,  65 => 23,  58 => 22,  55 => 21,  51 => 19,  48 => 18,  40 => 17,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/dxpr_theme/templates/block--system-branding-block.html.twig", "/app/web/themes/contrib/dxpr_theme/templates/block--system-branding-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 17, "if" => 18);
        static $filters = array("t" => 22, "escape" => 23);
        static $functions = array("path" => 22);

        try {
            $this->sandbox->checkSecurity(
                ['block', 'if'],
                ['t', 'escape'],
                ['path']
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
