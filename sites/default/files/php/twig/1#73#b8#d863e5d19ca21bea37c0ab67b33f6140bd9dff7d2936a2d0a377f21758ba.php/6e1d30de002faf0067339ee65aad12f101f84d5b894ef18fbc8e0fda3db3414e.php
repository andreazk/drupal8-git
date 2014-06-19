<?php

/* core/modules/system/templates/html.html.twig */
class __TwigTemplate_73b8d863e5d19ca21bea37c0ab67b33f6140bd9dff7d2936a2d0a377f21758ba extends Drupal\Core\Template\TwigTemplate
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
        // line 29
        echo "<!DOCTYPE html>
<html";
        // line 30
        echo twig_render_var($this->getContextReference($context, "html_attributes"));
        echo ">
  <head>
    ";
        // line 32
        echo twig_render_var($this->getContextReference($context, "head"));
        echo "
    <title>";
        // line 33
        echo twig_render_var($this->getContextReference($context, "head_title"));
        echo "</title>
    ";
        // line 34
        echo twig_render_var($this->getContextReference($context, "styles"));
        echo "
    ";
        // line 35
        echo twig_render_var($this->getContextReference($context, "scripts"));
        echo "
  </head>
  <body";
        // line 37
        echo twig_render_var($this->getContextReference($context, "attributes"));
        echo ">
    <a href=\"#main-content\" class=\"visually-hidden focusable skip-link\">
      ";
        // line 39
        echo twig_render_var(t("Skip to main content"));
        echo "
    </a>
    ";
        // line 41
        echo twig_render_var($this->getContextReference($context, "page_top"));
        echo "
    ";
        // line 42
        echo twig_render_var($this->getContextReference($context, "page"));
        echo "
    ";
        // line 43
        echo twig_render_var($this->getContextReference($context, "page_bottom"));
        echo "
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 43,  49 => 39,  31 => 33,  22 => 30,  66 => 54,  44 => 37,  42 => 19,  33 => 17,  77 => 58,  74 => 43,  68 => 41,  48 => 48,  45 => 34,  39 => 35,  354 => 209,  348 => 206,  345 => 205,  343 => 204,  340 => 203,  334 => 200,  330 => 199,  326 => 198,  322 => 197,  319 => 196,  317 => 195,  312 => 192,  306 => 189,  302 => 188,  298 => 187,  295 => 186,  293 => 185,  288 => 182,  282 => 179,  279 => 178,  277 => 177,  274 => 176,  268 => 173,  265 => 172,  263 => 171,  257 => 168,  252 => 167,  246 => 164,  243 => 163,  241 => 162,  236 => 161,  230 => 158,  227 => 157,  225 => 156,  220 => 155,  214 => 152,  211 => 151,  209 => 150,  205 => 149,  202 => 148,  196 => 147,  190 => 144,  186 => 142,  180 => 139,  177 => 138,  175 => 137,  172 => 136,  166 => 133,  163 => 132,  161 => 131,  157 => 129,  151 => 126,  148 => 125,  141 => 122,  138 => 121,  128 => 116,  121 => 115,  119 => 114,  103 => 109,  96 => 108,  83 => 103,  75 => 101,  72 => 100,  61 => 97,  38 => 49,  29 => 16,  27 => 32,  85 => 44,  71 => 55,  65 => 37,  63 => 53,  54 => 41,  50 => 93,  32 => 43,  26 => 41,  60 => 52,  57 => 51,  51 => 36,  47 => 31,  35 => 34,  25 => 41,  23 => 27,  21 => 13,  155 => 93,  149 => 90,  146 => 124,  143 => 88,  137 => 85,  134 => 119,  131 => 83,  125 => 81,  122 => 80,  116 => 113,  113 => 112,  110 => 75,  104 => 73,  102 => 72,  99 => 71,  93 => 107,  90 => 67,  84 => 64,  81 => 46,  79 => 43,  76 => 58,  70 => 99,  67 => 54,  64 => 39,  58 => 42,  55 => 37,  52 => 51,  46 => 47,  43 => 92,  41 => 46,  36 => 31,  30 => 47,  28 => 46,  24 => 40,  19 => 29,);
    }
}
