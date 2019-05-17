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

/* default/signup.html.twig */
class __TwigTemplate_21bc9430d91ec61cd067b2e8768e092fc26f4abddbbe4c8cfac01147c2a36398 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/signup.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/signup.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "default/signup.html.twig", 1);
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
                User Sign Up
              </header>
              <div class=\"panel-body\">
                  <p style=\"color: red;\">";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
        echo "</p>
                <form role=\"form\" action=\"/signup\" name=\"user-signup\" id=\"user-signup\" method=\"post\">
                  <div class=\"form-group\">
                    <label for=\"exampleInputName\">Name</label>
                    <input type=\"text\" class=\"form-control\" name=\"name\" id=\"exampleInputName\" placeholder=\"Enter Name\">
                  </div>
                  <div class=\"form-group\">
                    <label for=\"exampleInputUserName\">User Name</label>
                    <input type=\"text\" class=\"form-control\" name=\"username\" id=\"exampleInputUserName\" placeholder=\"Enter UserName\">
                  </div>
                  <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Email address</label>
                    <input type=\"email\" class=\"form-control\" name=\"email\" id=\"exampleInputEmail1\" placeholder=\"Enter email\">
                  </div>
                  <div class=\"form-group\">
                    <label for=\"exampleInputPassword1\">Password</label>
                    <input type=\"password\" class=\"form-control\" name=\"password\" id=\"exampleInputPassword1\" placeholder=\"Password\">
                  </div>
                  <button type=\"submit\" class=\"btn btn-primary\">Sign Up</button>
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
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<!-- nicescroll -->
<script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.scrollTo.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.nicescroll.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<!-- jquery knob -->
<script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.knob.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<!--custome script for all page-->
<script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/scripts.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "default/signup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 84,  155 => 82,  150 => 80,  146 => 79,  141 => 77,  137 => 76,  98 => 40,  60 => 4,  51 => 3,  29 => 1,);
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
                User Sign Up
              </header>
              <div class=\"panel-body\">
                  <p style=\"color: red;\">{{ error }}</p>
                <form role=\"form\" action=\"/signup\" name=\"user-signup\" id=\"user-signup\" method=\"post\">
                  <div class=\"form-group\">
                    <label for=\"exampleInputName\">Name</label>
                    <input type=\"text\" class=\"form-control\" name=\"name\" id=\"exampleInputName\" placeholder=\"Enter Name\">
                  </div>
                  <div class=\"form-group\">
                    <label for=\"exampleInputUserName\">User Name</label>
                    <input type=\"text\" class=\"form-control\" name=\"username\" id=\"exampleInputUserName\" placeholder=\"Enter UserName\">
                  </div>
                  <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Email address</label>
                    <input type=\"email\" class=\"form-control\" name=\"email\" id=\"exampleInputEmail1\" placeholder=\"Enter email\">
                  </div>
                  <div class=\"form-group\">
                    <label for=\"exampleInputPassword1\">Password</label>
                    <input type=\"password\" class=\"form-control\" name=\"password\" id=\"exampleInputPassword1\" placeholder=\"Password\">
                  </div>
                  <button type=\"submit\" class=\"btn btn-primary\">Sign Up</button>
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
", "default/signup.html.twig", "/Users/rasmikantamoharana/Desktop/GuestBook-PHP/GuestBook/app/Resources/views/default/signup.html.twig");
    }
}
