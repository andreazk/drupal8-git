<?php

/* core/modules/system/templates/region.html.twig */
class __TwigTemplate_147cd4634b5cf8982b46de6f0f588b5c313119db8f90863cee59d44798ef7578 extends Drupal\Core\Template\TwigTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 23
        if ((isset($context["content"]) ? $context["content"] : null)) {
            // line 24
            echo "  <div";
            echo twig_render_var($this->getContextReference($context, "attributes"));
            echo ">
    ";
            // line 25
            echo twig_render_var($this->getContextReference($context, "content"));
            echo "
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/region.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 44,  71 => 39,  65 => 37,  63 => 36,  54 => 33,  50 => 32,  32 => 28,  26 => 25,  60 => 52,  57 => 34,  51 => 48,  47 => 31,  35 => 43,  25 => 41,  23 => 40,  21 => 24,  155 => 93,  149 => 90,  146 => 89,  143 => 88,  137 => 85,  134 => 84,  131 => 83,  125 => 81,  122 => 80,  116 => 77,  113 => 76,  110 => 75,  104 => 73,  102 => 72,  99 => 71,  93 => 68,  90 => 67,  84 => 64,  81 => 63,  79 => 43,  76 => 58,  70 => 56,  67 => 54,  64 => 56,  58 => 53,  55 => 49,  52 => 51,  46 => 48,  43 => 46,  41 => 46,  36 => 29,  30 => 43,  28 => 27,  24 => 26,  19 => 23,);
    }
}
