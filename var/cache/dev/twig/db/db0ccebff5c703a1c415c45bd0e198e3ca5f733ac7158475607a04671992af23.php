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

/* admin/list.html.twig */
class __TwigTemplate_c7f350f9ed9fb658e996cfbaaa72d90ad7edfb296ca528a21db63aa2069ea082 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/list.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/list.html.twig", 1);
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
      <a href=\"/admin/list\" class=\"logo\">GuestBook <span class=\"lite\">Admin</span></a>
      <!--logo end-->

      <div class=\"nav search-row\" id=\"top_menu\">
        <!--  search form start -->
        <ul class=\"nav top-menu\">
          <li>
            <form class=\"navbar-form\">
              <input class=\"form-control\" placeholder=\"Search\" type=\"text\">
            </form>
          </li>
        </ul>
        <!--  search form end -->
      </div>

      <div class=\"top-nav notification-row\">
        <!-- notificatoin dropdown start-->
        <ul class=\"nav pull-right top-menu\">

          <li class=\"dropdown\">
            <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">
                            <span class=\"profile-ava\">
                                <img alt=\"\" src=\"img/avatar1_small.jpg\">
                            </span>
                            <span class=\"username\">Jenifer Smith</span>
                            <b class=\"caret\"></b>
                        </a>
            <ul class=\"dropdown-menu extended logout\">
              <div class=\"log-arrow-up\"></div>
              <li class=\"eborder-top\">
                <a href=\"#\"><i class=\"icon_profile\"></i> My Profile</a>
              </li>
              <li>
                <a href=\"/admin/logout\"><i class=\"icon_key_alt\"></i> Log Out</a>
              </li>
            </ul>
          </li>
          <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
      </div>
    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
      <div id=\"sidebar\" class=\"nav-collapse \">
        <!-- sidebar menu start-->
        <ul class=\"sidebar-menu\">
          <li class=\"\">
            <a class=\"\" href=\"index.html\">
                          <i class=\"icon_house_alt\"></i>
                          <span>Dashboard</span>
                      </a>
          </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>

    <!--main content start-->
    <section id=\"main-content\">
      <section class=\"wrapper\">
        <div class=\"row\">
          <div class=\"col-lg-12\">
            <ol class=\"breadcrumb\">
              <li><i class=\"fa fa-home\"></i><a href=\"/admin/list\">Home</a></li>
              <li><i class=\"fa fa-th-list\"></i>GuestBook List</li>
            </ol>
          </div>
        </div>
        <!-- page start-->
        
        <div class=\"row\">
          <div class=\"col-lg-12\">
            <section class=\"panel\">
              <header class=\"panel-heading\">
                List of GuestBook
              </header>

              <table class=\"table table-striped table-advance table-hover\">
                <tbody>
                  <tr>
                    <th width=\"10%\"><i class=\"icon_profile\"></i> Name</th>
                    <th width=\"10%\"><i class=\"icon_calendar\"></i> Created Date</th>
                    <th width=\"40%\"><i class=\"icon_mail_alt\"></i> Content</th>
                    <th width=\"20%\"><i class=\"icon_pin_alt\"></i> Created By</th>
                    <th width=\"20%\"><i class=\"icon_cogs\"></i> Action</th>
                  </tr>
                  ";
        // line 99
        if ((isset($context["guestBook"]) ? $context["guestBook"] : $this->getContext($context, "guestBook"))) {
            // line 100
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["guestBook"]) ? $context["guestBook"] : $this->getContext($context, "guestBook")));
            foreach ($context['_seq'] as $context["_key"] => $context["book"]) {
                // line 101
                echo "                  <tr>
                    <td>";
                // line 102
                echo twig_escape_filter($this->env, $this->getAttribute($context["book"], "name", []), "html", null, true);
                echo "</td>
                    <td>";
                // line 103
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["book"], "createdDate", []), "Y-m-d H:i:s"), "html", null, true);
                echo "</td>
                    <td>";
                // line 104
                echo twig_escape_filter($this->env, $this->getAttribute($context["book"], "content", []), "html", null, true);
                echo "</td>
                    <td>";
                // line 105
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["allUser"]) ? $context["allUser"] : $this->getContext($context, "allUser")), $this->getAttribute($context["book"], "userId", []), [], "array"), "html", null, true);
                echo "</td>
                    <td>
                      <div class=\"btn-group\">
                        <a class=\"btn btn-success\" href=\"/admin/approve?id=";
                // line 108
                echo twig_escape_filter($this->env, $this->getAttribute($context["book"], "id", []), "html", null, true);
                echo "\"><i class=\"icon_check_alt2\"></i></a>
                        <a class=\"btn btn-danger\" href=\"/admin/remove?id=";
                // line 109
                echo twig_escape_filter($this->env, $this->getAttribute($context["book"], "id", []), "html", null, true);
                echo "\"><i class=\"icon_close_alt2\"></i></a>
                      </div>
                    </td>
                  </tr>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['book'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 114
            echo "                  ";
        } else {
            // line 115
            echo "                  <tr>
                    <td>No records found</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  ";
        }
        // line 123
        echo "                  
                </tbody>
              </table>
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
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<!-- nicescroll -->
<script src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.scrollTo.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.nicescroll.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<!--custome script for all page-->
<script src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/scripts.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  252 => 148,  247 => 146,  243 => 145,  238 => 143,  234 => 142,  213 => 123,  203 => 115,  200 => 114,  189 => 109,  185 => 108,  179 => 105,  175 => 104,  171 => 103,  167 => 102,  164 => 101,  159 => 100,  157 => 99,  60 => 4,  51 => 3,  29 => 1,);
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
      <a href=\"/admin/list\" class=\"logo\">GuestBook <span class=\"lite\">Admin</span></a>
      <!--logo end-->

      <div class=\"nav search-row\" id=\"top_menu\">
        <!--  search form start -->
        <ul class=\"nav top-menu\">
          <li>
            <form class=\"navbar-form\">
              <input class=\"form-control\" placeholder=\"Search\" type=\"text\">
            </form>
          </li>
        </ul>
        <!--  search form end -->
      </div>

      <div class=\"top-nav notification-row\">
        <!-- notificatoin dropdown start-->
        <ul class=\"nav pull-right top-menu\">

          <li class=\"dropdown\">
            <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">
                            <span class=\"profile-ava\">
                                <img alt=\"\" src=\"img/avatar1_small.jpg\">
                            </span>
                            <span class=\"username\">Jenifer Smith</span>
                            <b class=\"caret\"></b>
                        </a>
            <ul class=\"dropdown-menu extended logout\">
              <div class=\"log-arrow-up\"></div>
              <li class=\"eborder-top\">
                <a href=\"#\"><i class=\"icon_profile\"></i> My Profile</a>
              </li>
              <li>
                <a href=\"/admin/logout\"><i class=\"icon_key_alt\"></i> Log Out</a>
              </li>
            </ul>
          </li>
          <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
      </div>
    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
      <div id=\"sidebar\" class=\"nav-collapse \">
        <!-- sidebar menu start-->
        <ul class=\"sidebar-menu\">
          <li class=\"\">
            <a class=\"\" href=\"index.html\">
                          <i class=\"icon_house_alt\"></i>
                          <span>Dashboard</span>
                      </a>
          </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>

    <!--main content start-->
    <section id=\"main-content\">
      <section class=\"wrapper\">
        <div class=\"row\">
          <div class=\"col-lg-12\">
            <ol class=\"breadcrumb\">
              <li><i class=\"fa fa-home\"></i><a href=\"/admin/list\">Home</a></li>
              <li><i class=\"fa fa-th-list\"></i>GuestBook List</li>
            </ol>
          </div>
        </div>
        <!-- page start-->
        
        <div class=\"row\">
          <div class=\"col-lg-12\">
            <section class=\"panel\">
              <header class=\"panel-heading\">
                List of GuestBook
              </header>

              <table class=\"table table-striped table-advance table-hover\">
                <tbody>
                  <tr>
                    <th width=\"10%\"><i class=\"icon_profile\"></i> Name</th>
                    <th width=\"10%\"><i class=\"icon_calendar\"></i> Created Date</th>
                    <th width=\"40%\"><i class=\"icon_mail_alt\"></i> Content</th>
                    <th width=\"20%\"><i class=\"icon_pin_alt\"></i> Created By</th>
                    <th width=\"20%\"><i class=\"icon_cogs\"></i> Action</th>
                  </tr>
                  {% if guestBook %}
                  {% for book in guestBook %}
                  <tr>
                    <td>{{ book.name }}</td>
                    <td>{{ book.createdDate|date(\"Y-m-d H:i:s\") }}</td>
                    <td>{{ book.content }}</td>
                    <td>{{ allUser[book.userId] }}</td>
                    <td>
                      <div class=\"btn-group\">
                        <a class=\"btn btn-success\" href=\"/admin/approve?id={{ book.id }}\"><i class=\"icon_check_alt2\"></i></a>
                        <a class=\"btn btn-danger\" href=\"/admin/remove?id={{ book.id }}\"><i class=\"icon_close_alt2\"></i></a>
                      </div>
                    </td>
                  </tr>
                  {% endfor %}
                  {% else %}
                  <tr>
                    <td>No records found</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  {% endif %}
                  
                </tbody>
              </table>
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
<!--custome script for all page-->
<script src=\"{{ asset('js/scripts.js') }}\"></script>

{% endblock %}

", "admin/list.html.twig", "/Users/rasmikantamoharana/Desktop/GuestBook-PHP/GuestBook/app/Resources/views/admin/list.html.twig");
    }
}
