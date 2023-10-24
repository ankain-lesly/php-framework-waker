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

/* about.twig */
class __TwigTemplate_685cf6a926a720a5afeeb277c6b66830 extends Template
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
        echo "<h1>About Us</h1>

";
        // line 3
        (((array_key_exists("data", $context) &&  !(null === ($context["data"] ?? null)))) ? (print (twig_escape_filter($this->env, ($context["data"] ?? null), "html", null, true))) : (print ("No Data")));
    }

    public function getTemplateName()
    {
        return "about.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "about.twig", "C:\\Users\\Dev Lee\\Documents\\_@Dev_Lee@_\\Development\\__Dev\\_PHP-Framework\\php-mvc-framework\\views\\about.twig");
    }
}
