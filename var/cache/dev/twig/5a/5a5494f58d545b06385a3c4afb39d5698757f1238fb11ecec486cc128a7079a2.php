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

/* account/recovery.html.twig */
class __TwigTemplate_f94909047086626e80763f52ee6fe69e2616ec693ab8b8286455a1a5fce1df19 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/recovery.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/recovery.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <title>";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Recovery password"), "html", null, true);
        echo "</title>
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
    ";
        // line 27
        $this->loadTemplate("partial/alert.html.twig", "account/recovery.html.twig", 27)->display($context);
        // line 28
        echo "    <div class=\"container container-login animated fadeIn\">
        <h3 class=\"text-center\">";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Recovery password"), "html", null, true);
        echo "</h3>

        <form method=\"post\" action=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_email_verif");
        echo "\">
            <div class=\"form-group\">
                <div>
                    <div class=\"input-group\">
                        <div class=\"input-group-prepend\">
                            <span class=\"input-group-text\" id=\"username-addon\">@</span>
                        </div>
                        <input type=\"text\" class=\"form-control\" placeholder=\" ";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Please enter your email"), "html", null, true);
        echo "\" aria-label=\"username\" aria-describedby=\"username-addon\" id=\"username\" name=\"email\" required=\"\">
                    </div>
                </div>
                <div class=\"ml-2 mt-3\">
                    ";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("language_preferences"), "html", null, true);
        echo "
                    ";
        // line 43
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 43, $this->source); })()), "request", [], "any", false, false, false, 43), "locale", [], "any", false, false, false, 43), "fr"))) {
            // line 44
            echo "                        <a href=\"/app/fr";
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "request", [], "any", false, false, false, 44), "requestUri", [], "any", false, false, false, 44), 4), "html", null, true);
            echo "\" class=\"lang-switcher btn btn-link\">FR</a>
                    ";
        } else {
            // line 46
            echo "                        <a href=\"/app";
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 46, $this->source); })()), "request", [], "any", false, false, false, 46), "requestUri", [], "any", false, false, false, 46), 7), "html", null, true);
            echo "\" class=\"lang-switcher btn btn-link\">EN</a>
                    ";
        }
        // line 48
        echo "                </div>
                <center>
                    <button type=\"submit\" class=\"btn btn-primary mt-3\">
                        ";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Send email"), "html", null, true);
        echo "
                    </button>
                </center>
            </div>
        </form>
    </div>
</div>
<script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/core/jquery.3.2.1.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/core/popper.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/core/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/ready.js"), "html", null, true);
        echo "\"></script>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "account/recovery.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 62,  164 => 61,  160 => 60,  156 => 59,  152 => 58,  142 => 51,  137 => 48,  131 => 46,  125 => 44,  123 => 43,  119 => 42,  112 => 38,  102 => 31,  97 => 29,  94 => 28,  92 => 27,  85 => 23,  81 => 22,  77 => 21,  67 => 14,  60 => 10,  54 => 7,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <title>{{ 'Recovery password'|trans }}</title>
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
    {% include 'partial/alert.html.twig' %}
    <div class=\"container container-login animated fadeIn\">
        <h3 class=\"text-center\">{{ 'Recovery password'|trans }}</h3>

        <form method=\"post\" action=\"{{ path('app_email_verif') }}\">
            <div class=\"form-group\">
                <div>
                    <div class=\"input-group\">
                        <div class=\"input-group-prepend\">
                            <span class=\"input-group-text\" id=\"username-addon\">@</span>
                        </div>
                        <input type=\"text\" class=\"form-control\" placeholder=\" {{ 'Please enter your email'|trans }}\" aria-label=\"username\" aria-describedby=\"username-addon\" id=\"username\" name=\"email\" required=\"\">
                    </div>
                </div>
                <div class=\"ml-2 mt-3\">
                    {{ 'language_preferences'|trans }}
                    {% if app.request.locale != 'fr' %}
                        <a href=\"/app/fr{{ app.request.requestUri|slice(4) }}\" class=\"lang-switcher btn btn-link\">FR</a>
                    {% else %}
                        <a href=\"/app{{ app.request.requestUri|slice(7) }}\" class=\"lang-switcher btn btn-link\">EN</a>
                    {% endif %}
                </div>
                <center>
                    <button type=\"submit\" class=\"btn btn-primary mt-3\">
                        {{ 'Send email'|trans }}
                    </button>
                </center>
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
</html>", "account/recovery.html.twig", "/Users/amine/Projects/manageTicket/templates/account/recovery.html.twig");
    }
}
