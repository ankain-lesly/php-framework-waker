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

/* read.twig */
class __TwigTemplate_6db47a0579337e88ab1987f27b1a0d16 extends Template
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
        echo "<section class=\"hero section-p\">
  <div class=\"container-x\">

    <h2>";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, false, 4), "html", null, true);
        echo "</h2>
    <h4 class=\"clr-warning\">";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "topic", [], "any", false, false, false, 5), "html", null, true);
        echo "</h4>

    ";
        // line 7
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "user_id", [], "any", false, false, false, 7) === twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "user_id", [], "any", false, false, false, 7))) {
            // line 8
            echo "    <br>
    <a href=\"/posts/edit/";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "post_id", [], "any", false, false, false, 9), "html", null, true);
            echo "\" class=\"btn primary slim\">Edit Post</a>
    ";
        }
        // line 11
        echo "  </div>
</section>
<div class=\"hr-line\"></div>

";
        // line 16
        echo "<section class=\"hero section-p\">
  <div class=\"container-x\">
    <div class=\"flex gap-2 between\">
      <h3>By: ";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "name", [], "any", false, false, false, 19), "html", null, true);
        echo "</h3>
      <h3>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "added_on", [], "any", false, false, false, 20), "html", null, true);
        echo "</h3>
    </div>
    <br>
    <div class=\"p-2\" style=\"border: 2px solid #ccc; border-radius:10px;\">
      <p style=\"white-space: pre-wrap;\">";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "body", [], "any", false, false, false, 24), "html", null, true);
        echo "</p>
    </div>
  </div>
</section>";
    }

    public function getTemplateName()
    {
        return "read.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 24,  76 => 20,  72 => 19,  67 => 16,  61 => 11,  56 => 9,  53 => 8,  51 => 7,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "read.twig", "C:\\Users\\Dev Lee\\Documents\\_@Dev_Lee@_\\Development\\__Dev\\_PHP-Framework\\php-mvc-framework\\views\\read.twig");
    }
}
