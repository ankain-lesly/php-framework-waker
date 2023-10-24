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

/* home.twig */
class __TwigTemplate_686673f970cf1a614772f6a8b7370a57 extends Template
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
    <h2>Blogger</h2>
    <br>
    <div style=\"overflow: auto;\">
      <div class=\"flex gap-2\">
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["topics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["topic"]) {
            // line 8
            echo "        <div class=\"border-text-muted rounded-3 p-2\">
          <p href=\"/topic/";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["topic"], "topic_id", [], "any", false, false, false, 9), "html", null, true);
            echo "\" class=\"font-small\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["topic"], "topic", [], "any", false, false, false, 9), "html", null, true);
            echo "</p>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "      </div>
    </div>
  </div>
</section>
<div class=\"hr-line\"></div>

";
        // line 19
        echo "<section class=\"hero section-p\">
  <div class=\"container-x\">
    <h3>Recent posts</h3>
    <br>
    <div class=\"flex start column wrap gap-2\">

      ";
        // line 26
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 27
            echo "      <div class=\"p-2\" style=\"border: 2px solid #ccc; border-radius:10px\">
        <a href=\"/read/";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, false, 28), "html", null, true);
            echo "\">
          <h3>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 29), "html", null, true);
            echo "</h3>
          <p>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "body", [], "any", false, false, false, 30), "html", null, true);
            echo "</p>
        </a>
        <br><br>
        <a href=\"/author/";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "user_id", [], "any", false, false, false, 33), "html", null, true);
            echo "\" class=\"bg-danger clr-white font-small p-x\">by ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "name", [], "any", false, false, false, 33), "html", null, true);
            echo "</a>
      </div>
      ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 36
            echo "      <div class=\"p-2 flex-1 bg-danger clr-light\" style=\"border-radius:10px\">
        <p>No Articles found</p>
      </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "
      <br>
      <div class=\"p-2 flex-me gap-2\">
        ";
        // line 43
        if ((twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "cur_page", [], "any", false, false, false, 43) > 1)) {
            // line 44
            echo "        <a href=\"?page=";
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "cur_page", [], "any", false, false, false, 44) - 1), "html", null, true);
            echo "\">Prev</a>
        ";
        } else {
            // line 46
            echo "        <span></span>
        ";
        }
        // line 48
        echo "
        <span>
          <<>>
        </span>

        ";
        // line 53
        if ((twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "cur_page", [], "any", false, false, false, 53) < twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "pages", [], "any", false, false, false, 53))) {
            echo " <a href=\"?page=";
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "cur_page", [], "any", false, false, false, 53) + 1), "html", null, true);
            echo "\">Next</a>
          ";
        } else {
            // line 55
            echo "          <span></span>
          ";
        }
        // line 57
        echo "      </div>
    </div>
  </div>
</section>";
    }

    public function getTemplateName()
    {
        return "home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 57,  152 => 55,  145 => 53,  138 => 48,  134 => 46,  128 => 44,  126 => 43,  121 => 40,  112 => 36,  102 => 33,  96 => 30,  92 => 29,  88 => 28,  85 => 27,  79 => 26,  71 => 19,  63 => 12,  52 => 9,  49 => 8,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home.twig", "C:\\Users\\Dev Lee\\Documents\\_@Dev_Lee@_\\Development\\__Dev\\_PHP-Framework\\php-mvc-framework\\views\\home.twig");
    }
}
