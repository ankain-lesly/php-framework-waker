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

/* user/home.twig */
class __TwigTemplate_894d072597d22c55162dc289f2cf28ac extends Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<h3>My App</h3>
<br>
<div class=\"flex gap-2\">
  <div class=\"border-text-muted rounded-3 p-2\">
    <span class=\"clr-danger\">";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "posts", [], "any", false, false, false, 5), "html", null, true);
        echo "</span>
    <p>Posts</p>
  </div>
  <div class=\"border-text-muted rounded-3 p-2\">
    <span class=\"clr-danger\">";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "topics", [], "any", false, false, false, 9), "html", null, true);
        echo "</span>
    <p>Topics</p>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "user/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 9,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "user/home.twig", "C:\\Users\\Dev Lee\\Documents\\_@Dev_Lee@_\\Development\\__Dev\\_PHP-Framework\\php-mvc-framework\\views\\user\\home.twig");
    }
}
