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

/* contact.twig */
class __TwigTemplate_63e045325a8a9ed681259519fc9e6354 extends Template
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
        echo "<h1>Contact Us</h1>

<form method=\"post\">
  <input type=\"text\" name=\"foo\" value=\"<?= \$foo ?>\"> <br>
  <input type=\"text\" name=\"topic\"><br>
  <textarea name=\"message\" id=\"\" cols=\"30\" rows=\"10\"></textarea><br>
  <button name=\"form\" value=\"submit btn\">submit</button>
</form>";
    }

    public function getTemplateName()
    {
        return "contact.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "contact.twig", "C:\\Users\\Dev Lee\\Documents\\_@Dev_Lee@_\\Development\\__Dev\\_PHP-Framework\\php-mvc-framework\\views\\contact.twig");
    }
}
