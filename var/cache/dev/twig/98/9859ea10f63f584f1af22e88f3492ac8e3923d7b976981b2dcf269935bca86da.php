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

/* account/login.html.twig */
class __TwigTemplate_6964b446c66392dda05a9d327dcf3a3cd0d28f512be69a7e6e2498e9f6acead3 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/login.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <title>";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Log in"), "html", null, true);
        echo " !</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel=\"icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon.ico"), "html", null, true);
        echo "\" type=\"image/x-icon\"/>

    <!-- Fonts and icons -->
    <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/plugin/webfont/webfont.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        WebFont.load({
            google: {\"families\":[\"Montserrat:100,200,300,400,500,600,700,800,900\"]},
            custom: {\"families\":[\"Flaticon\", \"LineAwesome\"], urls: ['";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/fonts.css"), "html", null, true);
        echo "']},
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>
    <!-- CSS Files -->
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/ready.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/demo.css"), "html", null, true);
        echo "\">
</head>
<body class=\"login\">
<div class=\"wrapper wrapper-login\">
    <div class=\"container container-login animated fadeIn\">
        ";
        // line 28
        $this->loadTemplate("partial/alert.html.twig", "account/login.html.twig", 28)->display($context);
        // line 29
        echo "        <h3 class=\"text-center\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sign_in_to_admin"), "html", null, true);
        echo "</h3>
        ";
        // line 30
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "request", [], "any", false, false, false, 30), "get", [0 => "error"], "method", false, false, false, 30)) {
            // line 31
            echo "            <div class=\"alert alert-warning\">
                <p>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "request", [], "any", false, false, false, 32), "get", [0 => "error"], "method", false, false, false, 32), "html", null, true);
            echo "</p>
            </div>
        ";
        }
        // line 35
        echo "        ";
        if ((isset($context["hasError"]) || array_key_exists("hasError", $context) ? $context["hasError"] : (function () { throw new RuntimeError('Variable "hasError" does not exist.', 35, $this->source); })())) {
            // line 36
            echo "            <div class=\"alert alert-warning\">
                <p>";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Les informations que vous avez fournies ne sont pas bonnes."), "html", null, true);
            echo "</p>
            </div>
        ";
        }
        // line 40
        echo "        <form method=\"post\">
            <div class=\"form-group\"><label for=\"_username\">";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email"), "html", null, true);
        echo "</label><input type=\"text\" class=\"form-control\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email"), "html", null, true);
        echo "...\" name=\"_username\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new RuntimeError('Variable "username" does not exist.', 41, $this->source); })()), "html", null, true);
        echo "\"></div>
            <div class=\"form-group\"><label for=\"_password\">";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Password"), "html", null, true);
        echo "</label><input type=\"password\" class=\"form-control\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Password"), "html", null, true);
        echo "...\" name=\"_password\"></div>
            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
            <div class=\"ml-2\">
                ";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("language_preferences"), "html", null, true);
        echo "
                ";
        // line 46
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 46, $this->source); })()), "request", [], "any", false, false, false, 46), "locale", [], "any", false, false, false, 46), "fr"))) {
            // line 47
            echo "                    <a href=\"/app/fr";
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "request", [], "any", false, false, false, 47), "requestUri", [], "any", false, false, false, 47), 4), "html", null, true);
            echo "\">FR</a>
                ";
        } else {
            // line 49
            echo "                    <a href=\"/app";
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "request", [], "any", false, false, false, 49), "requestUri", [], "any", false, false, false, 49), 7), "html", null, true);
            echo "\">EN</a>
                ";
        }
        // line 51
        echo "            </div>
            
            <div class=\"form-group\">
                <button type=\"submit\" class=\"btn btn-primary\">
                    <i class=\"la la-unlock-alt\"></i>
                    ";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Log in"), "html", null, true);
        echo " !
                </button>
                <a href=\"";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_recovery");
        echo "\" class=\"btn btn-link float-right\">
                    <i class=\"la la-key\"></i>
                    ";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("forget_password"), "html", null, true);
        echo "
                </a>
                <a href=\"";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\" class=\"btn btn-link float-right\">
                    <i class=\"la la-key\"></i>
                    ";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Register"), "html", null, true);
        echo "
                </a>
            </div>
        </form>
    </div>
</div>
<script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/core/jquery.3.2.1.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/core/popper.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/core/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/ready.js"), "html", null, true);
        echo "\"></script>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "account/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 74,  211 => 73,  207 => 72,  203 => 71,  199 => 70,  190 => 64,  185 => 62,  180 => 60,  175 => 58,  170 => 56,  163 => 51,  157 => 49,  151 => 47,  149 => 46,  145 => 45,  140 => 43,  134 => 42,  126 => 41,  123 => 40,  117 => 37,  114 => 36,  111 => 35,  105 => 32,  102 => 31,  100 => 30,  95 => 29,  93 => 28,  85 => 23,  81 => 22,  77 => 21,  67 => 14,  60 => 10,  54 => 7,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <title>{{ 'Log in'|trans }} !</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel=\"icon\" href=\"{{ asset('assets/img/favicon.ico') }}\" type=\"image/x-icon\"/>

    <!-- Fonts and icons -->
    <script src=\"{{ asset('assets/js/plugin/webfont/webfont.min.js') }}\"></script>
    <script>
        WebFont.load({
            google: {\"families\":[\"Montserrat:100,200,300,400,500,600,700,800,900\"]},
            custom: {\"families\":[\"Flaticon\", \"LineAwesome\"], urls: ['{{ asset('assets/css/fonts.css') }}']},
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>
    <!-- CSS Files -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/bootstrap.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/ready.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/demo.css') }}\">
</head>
<body class=\"login\">
<div class=\"wrapper wrapper-login\">
    <div class=\"container container-login animated fadeIn\">
        {% include 'partial/alert.html.twig' %}
        <h3 class=\"text-center\">{{ 'sign_in_to_admin'|trans }}</h3>
        {% if app.request.get('error') %}
            <div class=\"alert alert-warning\">
                <p>{{ app.request.get('error') }}</p>
            </div>
        {% endif %}
        {% if hasError %}
            <div class=\"alert alert-warning\">
                <p>{{ 'Les informations que vous avez fournies ne sont pas bonnes.'|trans }}</p>
            </div>
        {% endif %}
        <form method=\"post\">
            <div class=\"form-group\"><label for=\"_username\">{{ 'Email'|trans }}</label><input type=\"text\" class=\"form-control\" placeholder=\"{{ 'Email'|trans }}...\" name=\"_username\" value=\"{{ username }}\"></div>
            <div class=\"form-group\"><label for=\"_password\">{{ 'Password'|trans }}</label><input type=\"password\" class=\"form-control\" placeholder=\"{{ 'Password'|trans }}...\" name=\"_password\"></div>
            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
            <div class=\"ml-2\">
                {{ 'language_preferences'|trans }}
                {% if app.request.locale != 'fr' %}
                    <a href=\"/app/fr{{ app.request.requestUri|slice(4) }}\">FR</a>
                {% else %}
                    <a href=\"/app{{ app.request.requestUri|slice(7) }}\">EN</a>
                {% endif %}
            </div>
            
            <div class=\"form-group\">
                <button type=\"submit\" class=\"btn btn-primary\">
                    <i class=\"la la-unlock-alt\"></i>
                    {{ 'Log in'|trans }} !
                </button>
                <a href=\"{{ path('app_recovery') }}\" class=\"btn btn-link float-right\">
                    <i class=\"la la-key\"></i>
                    {{ 'forget_password'|trans }}
                </a>
                <a href=\"{{ path('app_register') }}\" class=\"btn btn-link float-right\">
                    <i class=\"la la-key\"></i>
                    {{ 'Register'|trans }}
                </a>
            </div>
        </form>
    </div>
</div>
<script src=\"{{ asset('assets/js/core/jquery.3.2.1.min.js') }}\"></script>
<script src=\"{{ asset('assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}\"></script>
<script src=\"{{ asset('assets/js/core/popper.min.js') }}\"></script>
<script src=\"{{ asset('assets/js/core/bootstrap.min.js') }}\"></script>
<script src=\"{{ asset('assets/js/ready.js') }}\"></script>
</body>
</html>", "account/login.html.twig", "/Users/amine/Projects/manageTicket/templates/account/login.html.twig");
    }
}
