<?php

/* themes/upjv/templates/system/page.html.twig */
class __TwigTemplate_88bc452e796526e5b3f0e814fe6908840f54fc74db30afb03d30e3a3ad2341e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'navbar' => array($this, 'block_navbar'),
            'main' => array($this, 'block_main'),
            'header' => array($this, 'block_header'),
            'sidebar_first' => array($this, 'block_sidebar_first'),
            'highlighted' => array($this, 'block_highlighted'),
            'help' => array($this, 'block_help'),
            'content' => array($this, 'block_content'),
            'sidebar_second' => array($this, 'block_sidebar_second'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 54, "if" => 56, "block" => 57);
        $filters = array("clean_class" => 62);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'block'),
                array('clean_class'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 54
        $context["container"] = (($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", array()), "fluid_container", array())) ? ("container-fluid") : ("container"));
        // line 56
        if (($this->getAttribute(($context["page"] ?? null), "navigation", array()) || $this->getAttribute(($context["page"] ?? null), "navigation_collapsible", array()))) {
            // line 57
            echo "  ";
            $this->displayBlock('navbar', $context, $blocks);
        }
        // line 98
        echo "
";
        // line 100
        $this->displayBlock('main', $context, $blocks);
        // line 164
        echo "
";
        // line 165
        if ($this->getAttribute(($context["page"] ?? null), "footer", array())) {
            // line 166
            echo "  ";
            $this->displayBlock('footer', $context, $blocks);
        }
    }

    // line 57
    public function block_navbar($context, array $blocks = array())
    {
        // line 58
        echo "    ";
        // line 59
        $context["navbar_classes"] = array(0 => "navbar", 1 => (($this->getAttribute($this->getAttribute(        // line 61
($context["theme"] ?? null), "settings", array()), "navbar_inverse", array())) ? ("navbar-inverse") : ("navbar-default")), 2 => (($this->getAttribute($this->getAttribute(        // line 62
($context["theme"] ?? null), "settings", array()), "navbar_position", array())) ? (("navbar-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", array()), "navbar_position", array())))) : (($context["container"] ?? null))));
        // line 65
        echo "    <header";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["navbar_attributes"] ?? null), "addClass", array(0 => ($context["navbar_classes"] ?? null)), "method"), "html", null, true));
        echo " id=\"navbar\" role=\"banner\">
      ";
        // line 66
        if ( !$this->getAttribute(($context["navbar_attributes"] ?? null), "hasClass", array(0 => ($context["container"] ?? null)), "method")) {
            // line 67
            echo "        <div class=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true));
            echo "\">
      ";
        }
        // line 69
        echo "      <div class=\"navbar-header\">
          ";
        // line 71
        echo "              ";
        // line 72
        echo "                  ";
        // line 73
        echo "                  ";
        // line 74
        echo "                  ";
        // line 75
        echo "                  ";
        // line 76
        echo "              ";
        // line 77
        echo "          ";
        // line 78
        echo "          ";
        // line 79
        echo "
        ";
        // line 81
        echo "      </div>

      ";
        // line 84
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "navigation_collapsible", array())) {
            // line 85
            echo "        <div id=\"navbar-collapse\" class=\"navbar-collapse collapse\">
            <div id=\"menu_general\">
                ";
            // line 87
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "navigation_collapsible", array()), "html", null, true));
            echo "
            </div>
            ";
            // line 89
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "navigation", array()), "html", null, true));
            echo "
        </div>
      ";
        }
        // line 92
        echo "      ";
        if ( !$this->getAttribute(($context["navbar_attributes"] ?? null), "hasClass", array(0 => ($context["container"] ?? null)), "method")) {
            // line 93
            echo "        </div>
      ";
        }
        // line 95
        echo "    </header>
  ";
    }

    // line 100
    public function block_main($context, array $blocks = array())
    {
        // line 101
        echo "  <div role=\"main\" class=\"main-container ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true));
        echo " js-quickedit-main-content\">
    <div class=\"row\">
      ";
        // line 104
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "header", array())) {
            // line 105
            echo "        ";
            $this->displayBlock('header', $context, $blocks);
            // line 110
            echo "      ";
        }
        // line 111
        echo "
      ";
        // line 113
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", array())) {
            // line 114
            echo "        ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 119
            echo "      ";
        }
        // line 120
        echo "
      ";
        // line 122
        echo "      ";
        // line 123
        $context["content_classes"] = array(0 => ((($this->getAttribute(        // line 124
($context["page"] ?? null), "sidebar_first", array()) && $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()))) ? ("col-sm-6") : ("")), 1 => ((($this->getAttribute(        // line 125
($context["page"] ?? null), "sidebar_first", array()) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())))) ? ("col-sm-9") : ("")), 2 => ((($this->getAttribute(        // line 126
($context["page"] ?? null), "sidebar_second", array()) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_first", array())))) ? ("col-sm-9") : ("")), 3 => (((twig_test_empty($this->getAttribute(        // line 127
($context["page"] ?? null), "sidebar_first", array())) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())))) ? ("col-sm-12") : ("")));
        // line 130
        echo "      <section";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content_attributes"] ?? null), "addClass", array(0 => ($context["content_classes"] ?? null)), "method"), "html", null, true));
        echo ">

        ";
        // line 133
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", array())) {
            // line 134
            echo "          ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 137
            echo "        ";
        }
        // line 138
        echo "
        ";
        // line 140
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "help", array())) {
            // line 141
            echo "          ";
            $this->displayBlock('help', $context, $blocks);
            // line 144
            echo "        ";
        }
        // line 145
        echo "
        ";
        // line 147
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 151
        echo "      </section>

      ";
        // line 154
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())) {
            // line 155
            echo "        ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 160
            echo "      ";
        }
        // line 161
        echo "    </div>
  </div>
";
    }

    // line 105
    public function block_header($context, array $blocks = array())
    {
        // line 106
        echo "          <div class=\"col-sm-2\" role=\"heading\">
              ";
        // line 107
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
        echo "
          </div>
        ";
    }

    // line 114
    public function block_sidebar_first($context, array $blocks = array())
    {
        // line 115
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 116
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_first", array()), "html", null, true));
        echo "
          </aside>
        ";
    }

    // line 134
    public function block_highlighted($context, array $blocks = array())
    {
        // line 135
        echo "            <div class=\"highlighted\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
        echo "</div>
          ";
    }

    // line 141
    public function block_help($context, array $blocks = array())
    {
        // line 142
        echo "            ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "help", array()), "html", null, true));
        echo "
          ";
    }

    // line 147
    public function block_content($context, array $blocks = array())
    {
        // line 148
        echo "          <a id=\"main-content\"></a>
          ";
        // line 149
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
        echo "
        ";
    }

    // line 155
    public function block_sidebar_second($context, array $blocks = array())
    {
        // line 156
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 157
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()), "html", null, true));
        echo "
          </aside>
        ";
    }

    // line 166
    public function block_footer($context, array $blocks = array())
    {
        // line 167
        echo "    <footer class=\"footer ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true));
        echo "\" role=\"contentinfo\">
      ";
        // line 168
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer", array()), "html", null, true));
        echo "
    </footer>
  ";
    }

    public function getTemplateName()
    {
        return "themes/upjv/templates/system/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  326 => 168,  321 => 167,  318 => 166,  311 => 157,  308 => 156,  305 => 155,  299 => 149,  296 => 148,  293 => 147,  286 => 142,  283 => 141,  276 => 135,  273 => 134,  266 => 116,  263 => 115,  260 => 114,  253 => 107,  250 => 106,  247 => 105,  241 => 161,  238 => 160,  235 => 155,  232 => 154,  228 => 151,  225 => 147,  222 => 145,  219 => 144,  216 => 141,  213 => 140,  210 => 138,  207 => 137,  204 => 134,  201 => 133,  195 => 130,  193 => 127,  192 => 126,  191 => 125,  190 => 124,  189 => 123,  187 => 122,  184 => 120,  181 => 119,  178 => 114,  175 => 113,  172 => 111,  169 => 110,  166 => 105,  163 => 104,  157 => 101,  154 => 100,  149 => 95,  145 => 93,  142 => 92,  136 => 89,  131 => 87,  127 => 85,  124 => 84,  120 => 81,  117 => 79,  115 => 78,  113 => 77,  111 => 76,  109 => 75,  107 => 74,  105 => 73,  103 => 72,  101 => 71,  98 => 69,  92 => 67,  90 => 66,  85 => 65,  83 => 62,  82 => 61,  81 => 59,  79 => 58,  76 => 57,  70 => 166,  68 => 165,  65 => 164,  63 => 100,  60 => 98,  56 => 57,  54 => 56,  52 => 54,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/upjv/templates/system/page.html.twig", "/var/www/drupal/themes/upjv/templates/system/page.html.twig");
    }
}
