<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* default/index.html.twig */
class __TwigTemplate_7e5af97927f7fe901fa29415dcfc6ba68a8a259d7f2b54a705607abb785a85c3 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<!-- container section start -->
  <section id=\"container\" class=\"\">
    <!--header start-->
    <header class=\"header dark-bg\">
      
      <!--logo start-->
      <a href=\"/\" class=\"logo\">Guest <span class=\"lite\">Book</span></a>
      <!--logo end-->
      
      <div class=\"nav search-row\" id=\"top_menu\" style=\"float: right;\">
        <!--  search form start -->
        <ul class=\"nav top-menu\">
          <li style=\"padding: 0 10px;\">
            <form class=\"navbar-form\">
              <input class=\"form-control\" placeholder=\"Search\" type=\"text\">
            </form>
          </li>
          ";
        // line 21
        if ((isset($context["loggedInUser"]) ? $context["loggedInUser"] : $this->getContext($context, "loggedInUser"))) {
            // line 22
            echo "          <li class=\"dropdown\" style=\"padding: 0 10px;\">
            <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">
                            <span class=\"profile-ava\">
                                <i class=\"fa fa-user\"></i>
                            </span>
                            <span class=\"username\">";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loggedInUser"]) ? $context["loggedInUser"] : $this->getContext($context, "loggedInUser")), "name", []), "html", null, true);
            echo " </span>
                            <b class=\"caret\"></b>
                        </a>
            <ul class=\"dropdown-menu extended logout\">
              <div class=\"log-arrow-up\"></div>
              <li class=\"eborder-top\">
                <a href=\"javascript:;\"><i class=\"icon_profile\"></i> My Profile</a>
              </li>
              <li>
                <a href=\"/logout\"><i class=\"icon_key_alt\"></i> Log Out</a>
              </li>
            </ul>
          </li>
          ";
        } else {
            // line 41
            echo "          <li style=\"padding: 0 10px;\">
              <button class=\"btn btn-info\" style=\"padding: 4px 12px;\"><a href=\"/login\" style=\"color: #FFF;\">Login</a></button>
          </li>
          ";
        }
        // line 45
        echo "        </ul>
        <!--  search form end -->
      </div>
      
    </header>
    <!--header end-->

    <!--main content start-->
    <section id=\"main-content\" style=\"margin-left: 0px;\">
      <section class=\"wrapper\">
        
        <!-- page start-->
        <div class=\"row\">
          <div class=\"col-lg-12\">
            <section class=\"panel\">
              <div class=\"panel-body\">
                <div class=\"tab-content\">
                  <div id=\"recent-activity\" class=\"tab-pane active\">
                    <div class=\"profile-activity\">
                      ";
        // line 64
        if ((isset($context["guestBook"]) ? $context["guestBook"] : $this->getContext($context, "guestBook"))) {
            echo "  
                      ";
            // line 65
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["guestBook"]) ? $context["guestBook"] : $this->getContext($context, "guestBook")));
            foreach ($context['_seq'] as $context["_key"] => $context["book"]) {
                // line 66
                echo "                      <div class=\"act-time\">
                        <div class=\"activity-body act-in\">
                          <span class=\"arrow\"></span>
                          <div class=\"text\">
                            <a href=\"#\" class=\"activity-img\"><img class=\"avatar\" src=\"img/chat-avatar.jpg\" alt=\"\"></a>
                            <p class=\"attribution\"><a href=\"#\">";
                // line 71
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["allUser"]) ? $context["allUser"] : $this->getContext($context, "allUser")), $this->getAttribute($context["book"], "userId", []), [], "array"), "html", null, true);
                echo "</a> at ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["book"], "createdDate", []), "Y-m-d H:i:s"), "html", null, true);
                echo " </p>
                            <p>";
                // line 72
                echo twig_escape_filter($this->env, $this->getAttribute($context["book"], "name", []), "html", null, true);
                echo "</p>
                          </div>
                        </div>
                      </div>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['book'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "                      ";
        } else {
            // line 78
            echo "                          No GuestBook found!!
                      ";
        }
        // line 80
        echo "                    </div>
                  </div>
                  
                </div>
              </div>
            </section>
          </div>
        </div>

        <!-- page end-->
      </section>
    </section>
    
  </section>
<!-- container section end -->

<!-- javascripts -->
<script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<!-- nicescroll -->
<script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.scrollTo.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.nicescroll.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<!-- jquery knob -->
<script src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.knob.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<!--custome script for all page-->
<script src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/scripts.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 105,  208 => 103,  203 => 101,  199 => 100,  194 => 98,  190 => 97,  171 => 80,  167 => 78,  164 => 77,  153 => 72,  147 => 71,  140 => 66,  136 => 65,  132 => 64,  111 => 45,  105 => 41,  88 => 27,  81 => 22,  79 => 21,  60 => 4,  51 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<!-- container section start -->
  <section id=\"container\" class=\"\">
    <!--header start-->
    <header class=\"header dark-bg\">
      
      <!--logo start-->
      <a href=\"/\" class=\"logo\">Guest <span class=\"lite\">Book</span></a>
      <!--logo end-->
      
      <div class=\"nav search-row\" id=\"top_menu\" style=\"float: right;\">
        <!--  search form start -->
        <ul class=\"nav top-menu\">
          <li style=\"padding: 0 10px;\">
            <form class=\"navbar-form\">
              <input class=\"form-control\" placeholder=\"Search\" type=\"text\">
            </form>
          </li>
          {% if loggedInUser %}
          <li class=\"dropdown\" style=\"padding: 0 10px;\">
            <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">
                            <span class=\"profile-ava\">
                                <i class=\"fa fa-user\"></i>
                            </span>
                            <span class=\"username\">{{ loggedInUser.name }} </span>
                            <b class=\"caret\"></b>
                        </a>
            <ul class=\"dropdown-menu extended logout\">
              <div class=\"log-arrow-up\"></div>
              <li class=\"eborder-top\">
                <a href=\"javascript:;\"><i class=\"icon_profile\"></i> My Profile</a>
              </li>
              <li>
                <a href=\"/logout\"><i class=\"icon_key_alt\"></i> Log Out</a>
              </li>
            </ul>
          </li>
          {% else %}
          <li style=\"padding: 0 10px;\">
              <button class=\"btn btn-info\" style=\"padding: 4px 12px;\"><a href=\"/login\" style=\"color: #FFF;\">Login</a></button>
          </li>
          {% endif %}
        </ul>
        <!--  search form end -->
      </div>
      
    </header>
    <!--header end-->

    <!--main content start-->
    <section id=\"main-content\" style=\"margin-left: 0px;\">
      <section class=\"wrapper\">
        
        <!-- page start-->
        <div class=\"row\">
          <div class=\"col-lg-12\">
            <section class=\"panel\">
              <div class=\"panel-body\">
                <div class=\"tab-content\">
                  <div id=\"recent-activity\" class=\"tab-pane active\">
                    <div class=\"profile-activity\">
                      {% if guestBook %}  
                      {% for book in guestBook %}
                      <div class=\"act-time\">
                        <div class=\"activity-body act-in\">
                          <span class=\"arrow\"></span>
                          <div class=\"text\">
                            <a href=\"#\" class=\"activity-img\"><img class=\"avatar\" src=\"img/chat-avatar.jpg\" alt=\"\"></a>
                            <p class=\"attribution\"><a href=\"#\">{{ allUser[book.userId] }}</a> at {{ book.createdDate|date(\"Y-m-d H:i:s\") }} </p>
                            <p>{{ book.name }}</p>
                          </div>
                        </div>
                      </div>
                      {% endfor %}
                      {% else %}
                          No GuestBook found!!
                      {% endif %}
                    </div>
                  </div>
                  
                </div>
              </div>
            </section>
          </div>
        </div>

        <!-- page end-->
      </section>
    </section>
    
  </section>
<!-- container section end -->

<!-- javascripts -->
<script src=\"{{ asset('js/jquery.js') }}\"></script>
<script src=\"{{ asset('js/bootstrap.min.js') }}\"></script>
<!-- nicescroll -->
<script src=\"{{ asset('js/jquery.scrollTo.min.js') }}\"></script>
<script src=\"{{ asset('js/jquery.nicescroll.js') }}\" type=\"text/javascript\"></script>
<!-- jquery knob -->
<script src=\"{{ asset('js/jquery.knob.js') }}\" type=\"text/javascript\"></script>
<!--custome script for all page-->
<script src=\"{{ asset('js/scripts.js') }}\"></script>

{% endblock %}
", "default/index.html.twig", "/Users/rasmikantamoharana/Desktop/GuestBook-PHP/GuestBook/app/Resources/views/default/index.html.twig");
    }
}
