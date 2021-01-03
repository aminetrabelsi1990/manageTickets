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

/* partial/navbar.html.twig */
class __TwigTemplate_c879574169d02ee9bb0a9fd7f68a2c35c4df62cae514565de1bfa75d77ad2332 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partial/navbar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partial/navbar.html.twig"));

        // line 1
        echo "<!-- Navbar Header -->
<nav class=\"navbar navbar-header navbar-expand-lg\" data-background-color=\"blue\">
    <div class=\"container-fluid\">
        <div class=\"navbar-minimize\">
            <button class=\"btn btn-minimize btn-rounded\">
                <i class=\"la la-navicon\"></i>
            </button>
        </div>
        <ul class=\"navbar-nav topbar-nav ml-md-auto align-items-center\">

            <li class=\"nav-item\">
                ";
        // line 12
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "request", [], "any", false, false, false, 12), "locale", [], "any", false, false, false, 12), "fr"))) {
            // line 13
            echo "                    <a href=\"/app/fr";
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "request", [], "any", false, false, false, 13), "requestUri", [], "any", false, false, false, 13), 4), "html", null, true);
            echo "\" class=\"nav-item nav-link text-light\">FR</a>
                ";
        } else {
            // line 15
            echo "                    <a href=\"/app";
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "request", [], "any", false, false, false, 15), "requestUri", [], "any", false, false, false, 15), 7), "html", null, true);
            echo "\" class=\"nav-item nav-link text-light\">EN</a>
                ";
        }
        // line 17
        echo "            </li>
            </li>
            <li class=\"nav-item dropdown hidden-caret\">
                <a class=\"dropdown-toggle profile-pic\" data-toggle=\"dropdown\" href=\"#\" aria-expanded=\"false\"> <img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/profile.jpg"), "html", null, true);
        echo "\" alt=\"image profile\" width=\"36\" class=\"img-circle\"></a>

                <ul class=\"dropdown-menu dropdown-user animated fadeIn\">
                    <li>
                        <div class=\"user-box\">
                            <div class=\"u-img\"><img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/profile.jpg"), "html", null, true);
        echo "\" alt=\"image profile\"></div>
                            <div class=\"u-text\">
                                <h4>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "user", [], "any", false, false, false, 27), "firstName", [], "any", false, false, false, 27), "html", null, true);
        echo "</h4>
                                <p class=\"text-muted\">";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "user", [], "any", false, false, false, 28), "email", [], "any", false, false, false, 28), "html", null, true);
        echo "</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class=\"dropdown-divider\"></div>
                        <a class=\"dropdown-item\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profil", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 34, $this->source); })()), "user", [], "any", false, false, false, 34), "id", [], "any", false, false, false, 34)]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("my_profile"), "html", null, true);
        echo "</a>
                        <div class=\"dropdown-divider\"></div>
                        <a class=\"dropdown-item\" href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Logout"), "html", null, true);
        echo "</a>
                    </li>
                </ul>
            </li>

        </ul>
    </div>
</nav>
<!-- End Navbar -->";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partial/navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 36,  101 => 34,  92 => 28,  88 => 27,  83 => 25,  75 => 20,  70 => 17,  64 => 15,  58 => 13,  56 => 12,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Navbar Header -->
<nav class=\"navbar navbar-header navbar-expand-lg\" data-background-color=\"blue\">
    <div class=\"container-fluid\">
        <div class=\"navbar-minimize\">
            <button class=\"btn btn-minimize btn-rounded\">
                <i class=\"la la-navicon\"></i>
            </button>
        </div>
        <ul class=\"navbar-nav topbar-nav ml-md-auto align-items-center\">

            <li class=\"nav-item\">
                {% if app.request.locale != 'fr' %}
                    <a href=\"/app/fr{{ app.request.requestUri|slice(4) }}\" class=\"nav-item nav-link text-light\">FR</a>
                {% else %}
                    <a href=\"/app{{ app.request.requestUri|slice(7) }}\" class=\"nav-item nav-link text-light\">EN</a>
                {% endif %}
            </li>
            </li>
            <li class=\"nav-item dropdown hidden-caret\">
                <a class=\"dropdown-toggle profile-pic\" data-toggle=\"dropdown\" href=\"#\" aria-expanded=\"false\"> <img src=\"{{ asset('assets/img/profile.jpg') }}\" alt=\"image profile\" width=\"36\" class=\"img-circle\"></a>

                <ul class=\"dropdown-menu dropdown-user animated fadeIn\">
                    <li>
                        <div class=\"user-box\">
                            <div class=\"u-img\"><img src=\"{{ asset('assets/img/profile.jpg') }}\" alt=\"image profile\"></div>
                            <div class=\"u-text\">
                                <h4>{{ app.user.firstName }}</h4>
                                <p class=\"text-muted\">{{ app.user.email }}</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class=\"dropdown-divider\"></div>
                        <a class=\"dropdown-item\" href=\"{{ path('app_profil', { 'id': app.user.id}) }}\">{{ 'my_profile'|trans }}</a>
                        <div class=\"dropdown-divider\"></div>
                        <a class=\"dropdown-item\" href=\"{{ path('app_logout') }}\">{{ 'Logout'|trans }}</a>
                    </li>
                </ul>
            </li>

        </ul>
    </div>
</nav>
<!-- End Navbar -->", "partial/navbar.html.twig", "/Users/amine/Projects/manageTicket/templates/partial/navbar.html.twig");
    }
}
