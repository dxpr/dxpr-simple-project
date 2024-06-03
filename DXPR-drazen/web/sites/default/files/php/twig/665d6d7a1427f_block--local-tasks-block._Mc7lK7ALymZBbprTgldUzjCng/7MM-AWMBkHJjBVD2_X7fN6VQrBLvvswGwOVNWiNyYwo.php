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

/* themes/contrib/bootstrap5/templates/block/block--local-tasks-block.html.twig */
class __TwigTemplate_81588b7e0e4da49cf1b08ae1a22437ba extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "block.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("block.html.twig", "themes/contrib/bootstrap5/templates/block/block--local-tasks-block.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["content"]);    }

    // line 8
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "  ";
        if (($context["content"] ?? null)) {
            // line 10
            echo "    <nav class=\"tabs\" role=\"navigation\" aria-label=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Tabs"));
            echo "\">
      ";
            // line 11
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 11, $this->source), "html", null, true);
            echo "
    </nav>
  ";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/bootstrap5/templates/block/block--local-tasks-block.html.twig";
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
        return array (  61 => 11,  56 => 10,  53 => 9,  49 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/bootstrap5/templates/block/block--local-tasks-block.html.twig", "/app/web/themes/contrib/bootstrap5/templates/block/block--local-tasks-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 9);
        static $filters = array("t" => 10, "escape" => 11);
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
