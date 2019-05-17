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

/* default/add-guest-book.html.twig */
class __TwigTemplate_d3d8500d023724bd2f0297862ceddaaadf38d6d64d7206b9ef4f97d2bb88d8a1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/add-guest-book.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/add-guest-book.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "default/add-guest-book.html.twig", 1);
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
          <li class=\"dropdown\" style=\"padding: 0 10px;\">
            <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">
                            <span class=\"profile-ava\">
                                <i class=\"fa fa-user\"></i>
                            </span>
                            <span class=\"username\">";
        // line 26
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
        </ul>
        <!--  search form end -->
      </div>
      
    </header>
    <!--header end-->

    <!--main content start-->
    
    <section id=\"main-content\" style=\"margin-left: 0px;\">
      <section class=\"wrapper\">
        
        <div class=\"row\">
          <div class=\"col-lg-6\" style=\"margin: 20px 25%;\">
            <section class=\"panel\">
              <header class=\"panel-heading\">
                Add Guest Book
              </header>
              <div class=\"panel-body\">
                  <p style=\"color: red;\">";
        // line 58
        echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
        echo "</p>
                <form role=\"form\" action=\"/add-guest-book\" name=\"user-guestbook\" id=\"user-guestbook\" method=\"post\">
                  <div class=\"form-group\">
                    <label for=\"exampleInputName\">Name</label>
                    <input type=\"text\" class=\"form-control\" name=\"name\" id=\"exampleInputName\" placeholder=\"Enter Name\">
                  </div>
                  <div class=\"form-group\">
                    <label for=\"exampleInputContent\">Content</label>
                    <textarea class=\"form-control\" name=\"content\" rows=\"5\" placeholder=\"Enter Content\"></textarea>
                  </div>
                  <button type=\"submit\" class=\"btn btn-primary\">Add Guest Book</button>
                </form>

              </div>
            </section>
          </div>
          
        </div>
        
      </section>
    </section>
    
    <!--main content end-->
    
  </section>
<!-- container section end -->

<!-- javascripts -->
<script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<!-- nicescroll -->
<script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.scrollTo.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.nicescroll.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<!-- jquery knob -->
<script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.knob.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<!--custome script for all page-->
<script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/scripts.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "default/add-guest-book.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 94,  168 => 92,  163 => 90,  159 => 89,  154 => 87,  150 => 86,  119 => 58,  84 => 26,  60 => 4,  51 => 3,  29 => 1,);
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
        </ul>
        <!--  search form end -->
      </div>
      
    </header>
    <!--header end-->

    <!--main content start-->
    
    <section id=\"main-content\" style=\"margin-left: 0px;\">
      <section class=\"wrapper\">
        
        <div class=\"row\">
          <div class=\"col-lg-6\" style=\"margin: 20px 25%;\">
            <section class=\"panel\">
              <header class=\"panel-heading\">
                Add Guest Book
              </header>
              <div class=\"panel-body\">
                  <p style=\"color: red;\">{{ error }}</p>
                <form role=\"form\" action=\"/add-guest-book\" name=\"user-guestbook\" id=\"user-guestbook\" method=\"post\">
                  <div class=\"form-group\">
                    <label for=\"exampleInputName\">Name</label>
                    <input type=\"text\" class=\"form-control\" name=\"name\" id=\"exampleInputName\" placeholder=\"Enter Name\">
                  </div>
                  <div class=\"form-group\">
                    <label for=\"exampleInputContent\">Content</label>
                    <textarea class=\"form-control\" name=\"content\" rows=\"5\" placeholder=\"Enter Content\"></textarea>
                  </div>
                  <button type=\"submit\" class=\"btn btn-primary\">Add Guest Book</button>
                </form>

              </div>
            </section>
          </div>
          
        </div>
        
      </section>
    </section>
    
    <!--main content end-->
    
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
", "default/add-guest-book.html.twig", "/Users/rasmikantamoharana/Desktop/GuestBook-PHP/GuestBook/app/Resources/views/default/add-guest-book.html.twig");
    }
}
