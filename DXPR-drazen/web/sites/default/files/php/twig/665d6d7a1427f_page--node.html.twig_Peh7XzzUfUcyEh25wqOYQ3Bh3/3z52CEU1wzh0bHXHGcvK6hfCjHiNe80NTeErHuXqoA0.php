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

/* themes/contrib/gin/templates/page/page--node.html.twig */
class __TwigTemplate_2f03392bf4524bb7f23d272ecd4e72bb extends Template
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
        echo "
<div class=\"page-wrapper__node-edit-form\">
  ";
        // line 44
        $this->loadTemplate("@gin/page/page.html.twig", "themes/contrib/gin/templates/page/page--node.html.twig", 44)->display($context);
        // line 45
        echo "</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/gin/templates/page/page--node.html.twig";
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
        return array (  45 => 45,  43 => 44,  39 => 42,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/gin/templates/page/page--node.html.twig", "/app/web/themes/contrib/gin/templates/page/page--node.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 44);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['include'],
                [],
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
