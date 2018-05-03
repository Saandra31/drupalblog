<?php

/* themes/bootstrap_business/templates/page.html.twig */
class __TwigTemplate_b8edb8155b63c05e14f2d95e33aa6336f8ac18fefa0a0a3b885d621f1f9c22ab extends Twig_Template
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
        $tags = array("if" => 4);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array(),
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

        // line 1
        echo "
<div id=\"toTop\"><span class=\"glyphicon glyphicon-chevron-up\"></span></div>

";
        // line 4
        if ((($this->getAttribute(($context["page"] ?? null), "pre_header_first", array()) || $this->getAttribute(($context["page"] ?? null), "pre_header_second", array())) || $this->getAttribute(($context["page"] ?? null), "pre_header_third", array()))) {
            // line 5
            echo "<!-- #pre-header -->
<div id=\"pre-header\" class=\"clearfix\">
    <div class=\"container\">

        <!-- #pre-header-inside -->
        <div id=\"pre-header-inside\" class=\"clearfix\">
            <div class=\"row\">
                <div class=\"col-md-4\">
                    ";
            // line 13
            if ($this->getAttribute(($context["page"] ?? null), "pre_header_first", array())) {
                // line 14
                echo "                    <div class=\"pre-header-area\">
                    ";
                // line 15
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "pre_header_first", array()), "html", null, true));
                echo "
                    </div>
                    ";
            }
            // line 18
            echo "                </div>
                
                <div class=\"col-md-4\">
                    ";
            // line 21
            if ($this->getAttribute(($context["page"] ?? null), "pre_header_second", array())) {
                // line 22
                echo "                    <div class=\"pre-header-area\">
                    ";
                // line 23
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "pre_header_second", array()), "html", null, true));
                echo "
                    </div>
                    ";
            }
            // line 26
            echo "                </div>

                <div class=\"col-md-4\">
                    ";
            // line 29
            if ($this->getAttribute(($context["page"] ?? null), "pre_header_third", array())) {
                // line 30
                echo "
                    <div class=\"pre-header-area\">
                    ";
                // line 32
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "pre_header_third", array()), "html", null, true));
                echo "
                    </div>
                    ";
            }
            // line 35
            echo "                </div>
            </div>
        </div>
        <!-- EOF: #pre-header-inside -->

    </div>
    <div class=\"toggle-control\"><a href=\"javascript:showPreHeader()\"><span class=\"glyphicon glyphicon-plus\"></span></a></div>
</div>
<!-- EOF: #pre-header -->    
";
        }
        // line 45
        echo "
";
        // line 46
        if (($this->getAttribute(($context["page"] ?? null), "header_top_left", array()) || $this->getAttribute(($context["page"] ?? null), "header_top_right", array()))) {
            // line 47
            echo "<!-- #header-top -->
<div id=\"header-top\" class=\"clearfix\">
    <div class=\"container\">

        <!-- #header-top-inside -->
        <div id=\"header-top-inside\" class=\"clearfix\">
            <div class=\"row\">
            
            ";
            // line 55
            if ($this->getAttribute(($context["page"] ?? null), "header_top_left", array())) {
                // line 56
                echo "            <div class=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_top_left_grid_class"] ?? null), "html", null, true));
                echo "\">
                <!-- #header-top-left -->
                <div id=\"header-top-left\" class=\"clearfix\">
                    ";
                // line 59
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header_top_left", array()), "html", null, true));
                echo "
                </div>
                <!-- EOF:#header-top-left -->
            </div>
            ";
            }
            // line 64
            echo "            
            ";
            // line 65
            if ($this->getAttribute(($context["page"] ?? null), "header_top_right", array())) {
                // line 66
                echo "            <div class=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_top_right_grid_class"] ?? null), "html", null, true));
                echo "\">
                <!-- #header-top-right -->
                <div id=\"header-top-right\" class=\"clearfix\">
                    ";
                // line 69
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header_top_right", array()), "html", null, true));
                echo "
                </div>
                <!-- EOF:#header-top-right -->
            </div>
            ";
            }
            // line 74
            echo "            
            </div>
        </div>
        <!-- EOF: #header-top-inside -->

    </div>
</div>
<!-- EOF: #header-top -->    
";
        }
        // line 83
        echo "
";
        // line 84
        if ($this->getAttribute(($context["page"] ?? null), "header", array())) {
            // line 85
            echo "<!-- header -->
<header id=\"header\" role=\"banner\" class=\"clearfix\">
    <div class=\"container\">

        <!-- #header-inside -->
        <div id=\"header-inside\" class=\"clearfix\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    ";
            // line 93
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
            echo "
                </div>
            </div>
        </div>
        <!-- EOF: #header-inside -->

    </div>
</header>
<!-- EOF: #header --> 
";
        }
        // line 103
        echo "
<!-- #main-navigation --> 
<div id=\"main-navigation\" class=\"clearfix\">
    <div class=\"container\">

        <!-- #main-navigation-inside -->
        <div id=\"main-navigation-inside\" class=\"clearfix\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <nav role=\"navigation\" class=\"clearfix\">
                        ";
        // line 113
        if ($this->getAttribute(($context["page"] ?? null), "navigation", array())) {
            // line 114
            echo "                        ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "navigation", array()), "html", null, true));
            echo "
                        ";
        } else {
            // line 116
            echo "                            ";
            if (($context["main_menu"] ?? null)) {
                // line 117
                echo "                            ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["main_menu"] ?? null), "html", null, true));
                echo "
                            ";
            }
            // line 119
            echo "                        ";
        }
        // line 120
        echo "                    </nav>
                </div>
            </div>
        </div>
        <!-- EOF: #main-navigation-inside -->

    </div>
</div>
<!-- EOF: #main-navigation -->

";
        // line 130
        if ($this->getAttribute(($context["page"] ?? null), "banner", array())) {
            // line 131
            echo "<!-- #banner -->
<div id=\"banner\" class=\"clearfix\">
    <div class=\"container\">
        
        <!-- #banner-inside -->
        <div id=\"banner-inside\" class=\"clearfix\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                ";
            // line 139
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "banner", array()), "html", null, true));
            echo "
                </div>
            </div>
        </div>
        <!-- EOF: #banner-inside -->        

    </div>
</div>
<!-- EOF:#banner -->
";
        }
        // line 149
        echo "
<!-- #page -->
<div id=\"page\" class=\"clearfix\">
    ";
        // line 152
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", array())) {
            // line 153
            echo "    <!-- #top-content -->
    <div id=\"top-content\" class=\"clearfix\">
        <div class=\"container\">

            <!-- #top-content-inside -->
            <div id=\"top-content-inside\" class=\"clearfix\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                    ";
            // line 161
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
            echo "
                    </div>
                </div>
            </div>
            <!-- EOF:#top-content-inside -->

        </div>
    </div>
    <!-- EOF: #top-content -->
    ";
        }
        // line 171
        echo "
    <!-- #main-content -->
    <div id=\"main-content\">
        <div class=\"container\">
        
            <div class=\"row\">
                ";
        // line 177
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", array())) {
            // line 178
            echo "                <aside class=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sidebar_grid_class"] ?? null), "html", null, true));
            echo "\">  
                    <!--#sidebar-first-->
                    <section id=\"sidebar-first\" class=\"sidebar clearfix\">
                    ";
            // line 181
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_first", array()), "html", null, true));
            echo "
                    </section>
                    <!--EOF:#sidebar-first-->
                </aside>
                ";
        }
        // line 186
        echo "
                <section class=\"";
        // line 187
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["main_grid_class"] ?? null), "html", null, true));
        echo "\">

                    <!-- #main -->
                    <div id=\"main\" class=\"clearfix\">
                    
                        <!-- #breadcrumb -->
                        <div id=\"breadcrumb\" class=\"clearfix\">
                            <!-- #breadcrumb-inside -->
                            <div id=\"breadcrumb-inside\" class=\"clearfix\">
                            ";
        // line 196
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["breadcrumb"] ?? null), "html", null, true));
        echo "
                            </div>
                            <!-- EOF: #breadcrumb-inside -->
                        </div>
                        <!-- EOF: #breadcrumb -->

                        ";
        // line 202
        if ($this->getAttribute(($context["page"] ?? null), "promoted", array())) {
            // line 203
            echo "                        <!-- #promoted -->
                            <div id=\"promoted\" class=\"clearfix\">
                                <div id=\"promoted-inside\" class=\"clearfix\">
                                ";
            // line 206
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "promoted", array()), "html", null, true));
            echo "
                                </div>
                            </div>
                        <!-- EOF: #promoted -->
                        ";
        }
        // line 211
        echo "
                        <!-- EOF:#content-wrapper -->
                        <div id=\"content-wrapper\">

                            ";
        // line 215
        if ($this->getAttribute(($context["page"] ?? null), "content", array())) {
            // line 216
            echo "                                ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
            echo "
                            ";
        }
        // line 218
        echo "
                        </div>
                        <!-- EOF:#content-wrapper -->

                    </div>
                    <!-- EOF:#main -->

                </section>
                
                ";
        // line 227
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())) {
            // line 228
            echo "                <aside class=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sidebar_grid_class"] ?? null), "html", null, true));
            echo "\">
                    <!--#sidebar-second-->
                    <section id=\"sidebar-second\" class=\"sidebar clearfix\">
                    ";
            // line 231
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()), "html", null, true));
            echo "
                    </section>
                    <!--EOF:#sidebar-second-->
                </aside>
                ";
        }
        // line 236
        echo "        
            </div>

        </div>
    </div>
    <!-- EOF:#main-content -->
    
    ";
        // line 243
        if ($this->getAttribute(($context["page"] ?? null), "bottom_content", array())) {
            // line 244
            echo "    <!-- #bottom-content -->
    <div id=\"bottom-content\" class=\"clearfix\">
        <div class=\"container\">

            <!-- #bottom-content-inside -->
            <div id=\"bottom-content-inside\" class=\"clearfix\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                    ";
            // line 252
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "bottom_content", array()), "html", null, true));
            echo "
                    </div>
                </div>
            </div>
            <!-- EOF:#bottom-content-inside -->

        </div>
    </div>
    <!-- EOF: #bottom-content -->
    ";
        }
        // line 262
        echo "
</div>
<!-- EOF:#page -->

";
        // line 266
        if (((($this->getAttribute(($context["page"] ?? null), "footer_first", array()) || $this->getAttribute(($context["page"] ?? null), "footer_second", array())) || $this->getAttribute(($context["page"] ?? null), "footer_third", array())) || $this->getAttribute(($context["page"] ?? null), "footer_fourth", array()))) {
            // line 267
            echo "<!-- #footer -->
<footer id=\"footer\" class=\"clearfix\">
    <div class=\"container\">
    
        <!-- #footer-inside -->
        <div id=\"footer-inside\" class=\"clearfix\">
            <div class=\"row\">
                <div class=\"col-md-3\">
                    ";
            // line 275
            if ($this->getAttribute(($context["page"] ?? null), "footer_first", array())) {
                // line 276
                echo "                    <div class=\"footer-area\">
                    ";
                // line 277
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_first", array()), "html", null, true));
                echo "
                    </div>
                    ";
            }
            // line 280
            echo "                </div>
                
                <div class=\"col-md-3\">
                    ";
            // line 283
            if ($this->getAttribute(($context["page"] ?? null), "footer_second", array())) {
                // line 284
                echo "                    <div class=\"footer-area\">
                    ";
                // line 285
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_second", array()), "html", null, true));
                echo "
                    </div>
                    ";
            }
            // line 288
            echo "                </div>

                <div class=\"col-md-3\">
                    ";
            // line 291
            if ($this->getAttribute(($context["page"] ?? null), "footer_third", array())) {
                // line 292
                echo "                    <div class=\"footer-area\">
                    ";
                // line 293
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_third", array()), "html", null, true));
                echo "
                    </div>
                    ";
            }
            // line 296
            echo "                </div>

                <div class=\"col-md-3\">
                    ";
            // line 299
            if ($this->getAttribute(($context["page"] ?? null), "footer_fourth", array())) {
                // line 300
                echo "                    <div class=\"footer-area\">
                    ";
                // line 301
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_fourth", array()), "html", null, true));
                echo "
                    </div>
                    ";
            }
            // line 304
            echo "                </div>
            </div>
        </div>
        <!-- EOF: #footer-inside -->
    
    </div>
</footer> 
<!-- EOF #footer -->
";
        }
        // line 313
        echo "
<footer id=\"subfooter\" class=\"clearfix\">
    <div class=\"container\">
        
        <!-- #subfooter-inside -->
        <div id=\"subfooter-inside\" class=\"clearfix\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <!-- #subfooter-left -->
                    <div class=\"subfooter-area\">
                    ";
        // line 323
        if (($context["secondary_menu"] ?? null)) {
            // line 324
            echo "                    <nav id=\"secondary-menu\" class=\"navigation\" role=\"navigation\">
                    ";
            // line 325
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["secondary_menu"] ?? null), "html", null, true));
            echo "
                    </nav>
                    ";
        }
        // line 327
        echo "                    

                    ";
        // line 329
        if ($this->getAttribute(($context["page"] ?? null), "footer", array())) {
            // line 330
            echo "                    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer", array()), "html", null, true));
            echo "
                    ";
        }
        // line 332
        echo "
                    </div>
                    <!-- EOF: #subfooter-left -->
                </div>
            </div>
        </div>
        <!-- EOF: #subfooter-inside -->
    
    </div>
</footer>
<!-- EOF:#subfooter -->";
    }

    public function getTemplateName()
    {
        return "themes/bootstrap_business/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  569 => 332,  563 => 330,  561 => 329,  557 => 327,  551 => 325,  548 => 324,  546 => 323,  534 => 313,  523 => 304,  517 => 301,  514 => 300,  512 => 299,  507 => 296,  501 => 293,  498 => 292,  496 => 291,  491 => 288,  485 => 285,  482 => 284,  480 => 283,  475 => 280,  469 => 277,  466 => 276,  464 => 275,  454 => 267,  452 => 266,  446 => 262,  433 => 252,  423 => 244,  421 => 243,  412 => 236,  404 => 231,  397 => 228,  395 => 227,  384 => 218,  378 => 216,  376 => 215,  370 => 211,  362 => 206,  357 => 203,  355 => 202,  346 => 196,  334 => 187,  331 => 186,  323 => 181,  316 => 178,  314 => 177,  306 => 171,  293 => 161,  283 => 153,  281 => 152,  276 => 149,  263 => 139,  253 => 131,  251 => 130,  239 => 120,  236 => 119,  230 => 117,  227 => 116,  221 => 114,  219 => 113,  207 => 103,  194 => 93,  184 => 85,  182 => 84,  179 => 83,  168 => 74,  160 => 69,  153 => 66,  151 => 65,  148 => 64,  140 => 59,  133 => 56,  131 => 55,  121 => 47,  119 => 46,  116 => 45,  104 => 35,  98 => 32,  94 => 30,  92 => 29,  87 => 26,  81 => 23,  78 => 22,  76 => 21,  71 => 18,  65 => 15,  62 => 14,  60 => 13,  50 => 5,  48 => 4,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/bootstrap_business/templates/page.html.twig", "C:\\drupal\\themes\\bootstrap_business\\templates\\page.html.twig");
    }
}
