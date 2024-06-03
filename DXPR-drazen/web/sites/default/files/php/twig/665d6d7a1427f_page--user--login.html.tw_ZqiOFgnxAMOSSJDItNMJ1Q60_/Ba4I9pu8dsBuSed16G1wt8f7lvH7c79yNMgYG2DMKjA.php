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

/* modules/contrib/gin_login/templates/page--user--login.html.twig */
class __TwigTemplate_4fa0625bc75acfe99ff79c69f43d1ce7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 42
        echo "<div class=\"user-form-page\">
  <div class=\"user-form-page__user-form\">
    <header class=\"content-header clearfix\">
      <div class=\"layout-container\">
        ";
        // line 46
        if (((($context["icon_default"] ?? null) == false) && (($context["icon_path"] ?? null) != ""))) {
            // line 47
            echo "          <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
            echo "\" class=\"toolbar-logo\" data-drupal-link-system-path=\"<front>\">
            <img src=\"";
            // line 48
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(($context["icon_path"] ?? null), 48, $this->source)), "html", null, true);
            echo "\" alt=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null), 48, $this->source), "html", null, true);
            echo "\" class=\"toolbar-icon-home\" />
          </a>
        ";
        } else {
            // line 51
            echo "          <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
            echo "\" alt=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null), 51, $this->source), "html", null, true);
            echo "\" class=\"toolbar-icon toolbar-icon-default\" data-drupal-link-system-path=\"<front>\">
            ";
            // line 52
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
            echo "
          </a>
        ";
        }
        // line 55
        echo "      </div>
    </header>

    <div class=\"layout-container\">
      ";
        // line 59
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pre_content", [], "any", false, false, true, 59), 59, $this->source), "claro_primary_local_tasks", "gin_primary_local_tasks"), "html", null, true);
        echo "
      <main class=\"page-content clearfix\" role=\"main\">
        <div class=\"visually-hidden\"><a id=\"main-content\" tabindex=\"-1\"></a></div>
        ";
        // line 62
        $this->displayBlock('title', $context, $blocks);
        // line 65
        echo "        ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 65), 65, $this->source), "html", null, true);
        echo "
        ";
        // line 66
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 66)) {
            // line 67
            echo "          <div class=\"help\">
            ";
            // line 68
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 68), 68, $this->source), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 71
        echo "        ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 71), 71, $this->source), "claro_primary_local_tasks", "gin_primary_local_tasks"), "html", null, true);
        echo "
      </main>

    </div>
  </div>

  <div class=\"user-form-page__wallpaper\">
    <!-- Wallpaper goes here -->
    ";
        // line 79
        if (($context["brand_image"] ?? null)) {
            // line 80
            echo "      <img src=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["brand_image"] ?? null), 80, $this->source), "html", null, true);
            echo "\" alt=\"\" />
    ";
        }
        // line 82
        echo "  </div>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["icon_default", "icon_path", "site_name", "page", "brand_image"]);    }

    // line 62
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 63
        echo "          <h1 class=\"page-title user-form-page__page-title\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Log in"));
        echo "</h1>
        ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "modules/contrib/gin_login/templates/page--user--login.html.twig";
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
        return array (  135 => 63,  131 => 62,  124 => 82,  118 => 80,  116 => 79,  104 => 71,  98 => 68,  95 => 67,  93 => 66,  88 => 65,  86 => 62,  80 => 59,  74 => 55,  68 => 52,  61 => 51,  53 => 48,  48 => 47,  46 => 46,  40 => 42,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/gin_login/templates/page--user--login.html.twig", "/app/web/modules/contrib/gin_login/templates/page--user--login.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 46, "block" => 62);
        static $filters = array("escape" => 48, "t" => 52, "without" => 59);
        static $functions = array("path" => 47, "file_url" => 48);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'block'],
                ['escape', 't', 'without'],
                ['path', 'file_url']
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
