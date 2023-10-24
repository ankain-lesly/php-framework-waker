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

/* search.twig */
class __TwigTemplate_28354583731c6baf3e74d50b10143558 extends Template
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
    <h2>Search</h2>
    <br>
    <form>
      <div class=\"form-group flex gap-2\">
        <input type=\"search\" name=\"search\" required>
        <button class=\"btn danger\">>></button>
      </div>
    </form>
  </div>
</section>
<div class=\"hr-line\"></div>

";
        // line 16
        if (($context["posts"] ?? null)) {
            // line 17
            echo "<section class=\"hero section-p\">
  <div class=\"container-x\">
    <h3>Posts</h3>
    <br>
    <div class=\"flex start column wrap gap-2\">
      ";
            // line 23
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 24
                echo "      <div class=\"p-2\" style=\"border: 2px solid #ccc; border-radius:10px\">
        <a href=\"/read/";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, false, 25), "html", null, true);
                echo "\">
          <h3>";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 26), "html", null, true);
                echo "</h3>
          <p>";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "body", [], "any", false, false, false, 27), "html", null, true);
                echo "</p>
        </a>
        <br><br>
        <a href=\"/author/";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "user_id", [], "any", false, false, false, 30), "html", null, true);
                echo "\" class=\"bg-danger clr-white font-small p-x\">By ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "name", [], "any", false, false, false, 30), "html", null, true);
                echo "</a>
        <a href=\"/author/";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "topic_id", [], "any", false, false, false, 31), "html", null, true);
                echo "\" class=\"bg-success clr-white font-small p-x\">In ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "topic", [], "any", false, false, false, 31), "html", null, true);
                echo "</a>
      </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "
    </div>
  </div>
</section>
";
        }
        // line 39
        echo "
";
        // line 40
        if (($context["topics"] ?? null)) {
            // line 41
            echo "<section class=\"hero section-p\">
  <div class=\"container-x\">
    <h3>Topics</h3>
    <br>
    <div class=\"flex gap-2 wrap\">
      ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["topics"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["topic"]) {
                // line 47
                echo "      <div class=\"border-text-muted rounded-3 p-2\">
        <p href=\"/topic/";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["topic"], "topic_id", [], "any", false, false, false, 48), "html", null, true);
                echo "\" class=\"font-small\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["topic"], "topic", [], "any", false, false, false, 48), "html", null, true);
                echo "</p>
      </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topic'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "    </div>
  </div>
</section>
";
        }
        // line 55
        echo "
";
        // line 56
        if (( !($context["posts"] ?? null) &&  !($context["topics"] ?? null))) {
            // line 57
            echo "<section class=\"hero section-p\">
  <div class=\"container-x\">
    <div class=\"p-2 flex-1 bg-danger clr-light\" style=\"border-radius:10px\">
      <p>No Articles found</p>
    </div>
  </div>
</section>
";
        }
    }

    public function getTemplateName()
    {
        return "search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 57,  147 => 56,  144 => 55,  138 => 51,  127 => 48,  124 => 47,  120 => 46,  113 => 41,  111 => 40,  108 => 39,  101 => 34,  90 => 31,  84 => 30,  78 => 27,  74 => 26,  70 => 25,  67 => 24,  62 => 23,  55 => 17,  53 => 16,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "search.twig", "C:\\Users\\Dev Lee\\Documents\\_@Dev_Lee@_\\Development\\__Dev\\_PHP-Framework\\php-mvc-framework\\views\\search.twig");
    }
}
