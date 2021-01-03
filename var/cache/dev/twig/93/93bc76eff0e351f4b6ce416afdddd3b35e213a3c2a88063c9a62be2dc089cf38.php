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

/* account/register.html.twig */
class __TwigTemplate_43362a5177572465bbc78c021a4cb82cc42bc695b0112979e1e8400b110ea5a2 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/register.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/register.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <title>";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Register"), "html", null, true);
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
        $this->loadTemplate("partial/alert.html.twig", "account/register.html.twig", 28)->display($context);
        // line 29
        echo "        <h3 class=\"text-center\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Register"), "html", null, true);
        echo "</h3>
        ";
        // line 30
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), 'form_start');
        echo "
            <div class=\"form-group\">
                <label for=\"email\">";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email"), "html", null, true);
        echo "</label>
                ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "email", [], "any", false, false, false, 33), 'widget', ["attr" => ["class" => "form-control"]]);
        echo " 
                ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "email", [], "any", false, false, false, 34), 'errors');
        echo "
            </div>
            <div class=\"form-group\">
                <label for=\"firstName\">";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("First name"), "html", null, true);
        echo "</label>
                ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "firstName", [], "any", false, false, false, 38), 'widget', ["attr" => ["class" => "form-control"]]);
        echo " 
                ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "firstName", [], "any", false, false, false, 39), 'errors');
        echo "
            </div>
            <div class=\"form-group\">
                <label for=\"lastName\">";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Last name"), "html", null, true);
        echo "</label>
                ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "lastName", [], "any", false, false, false, 43), 'widget', ["attr" => ["class" => "form-control"]]);
        echo " 
                ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "lastName", [], "any", false, false, false, 44), 'errors');
        echo "
            </div>
            <div class=\"form-group\">
                <label for=\"password\">";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Password"), "html", null, true);
        echo "</label>
                    ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "password", [], "any", false, false, false, 48), "first", [], "any", false, false, false, 48), 'widget', ["attr" => ["class" => "form-control"]]);
        echo " 
                    ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "password", [], "any", false, false, false, 49), "first", [], "any", false, false, false, 49), 'errors');
        echo "
            </div>
            <div class=\"form-group\">
                <label for=\"repeat_password\">";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Repeat Password"), "html", null, true);
        echo "</label>
                ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "password", [], "any", false, false, false, 53), "second", [], "any", false, false, false, 53), 'widget', ["attr" => ["class" => "form-control"]]);
        echo " 
                ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "password", [], "any", false, false, false, 54), "second", [], "any", false, false, false, 54), 'errors');
        echo "
            </div>
            <div class=\"ml-2\">
                ";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("language_preferences"), "html", null, true);
        echo "
                ";
        // line 58
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 58, $this->source); })()), "request", [], "any", false, false, false, 58), "locale", [], "any", false, false, false, 58), "fr"))) {
            // line 59
            echo "                    <a href=\"/app/fr";
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "request", [], "any", false, false, false, 59), "requestUri", [], "any", false, false, false, 59), 4), "html", null, true);
            echo "\">FR</a>
                ";
        } else {
            // line 61
            echo "                    <a href=\"/app";
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 61, $this->source); })()), "request", [], "any", false, false, false, 61), "requestUri", [], "any", false, false, false, 61), 7), "html", null, true);
            echo "\">EN</a>
                ";
        }
        // line 63
        echo "            </div>
            
            <div class=\"form-group\">
                <button type=\"submit\" class=\"btn btn-primary\">
                    <i class=\"la la-unlock-alt\"></i>
                    ";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Register"), "html", null, true);
        echo " !
                </button>
            </div>
        ";
        // line 71
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), 'form_end');
        echo "
    </div>
</div>
<script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/core/jquery.3.2.1.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/core/popper.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/core/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/ready.js"), "html", null, true);
        echo "\"></script>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "account/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 78,  224 => 77,  220 => 76,  216 => 75,  212 => 74,  206 => 71,  200 => 68,  193 => 63,  187 => 61,  181 => 59,  179 => 58,  175 => 57,  169 => 54,  165 => 53,  161 => 52,  155 => 49,  151 => 48,  147 => 47,  141 => 44,  137 => 43,  133 => 42,  127 => 39,  123 => 38,  119 => 37,  113 => 34,  109 => 33,  105 => 32,  100 => 30,  95 => 29,  93 => 28,  85 => 23,  81 => 22,  77 => 21,  67 => 14,  60 => 10,  54 => 7,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <title>{{ 'Register'|trans }} !</title>
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
        <h3 class=\"text-center\">{{ 'Register'|trans }}</h3>
        {{ form_start(form) }}
            <div class=\"form-group\">
                <label for=\"email\">{{ 'Email'|trans }}</label>
                {{ form_widget(form.email, { 'attr': { 'class': 'form-control'} }) }} 
                {{ form_errors(form.email) }}
            </div>
            <div class=\"form-group\">
                <label for=\"firstName\">{{ 'First name'|trans }}</label>
                {{ form_widget(form.firstName, { 'attr': { 'class': 'form-control'} }) }} 
                {{ form_errors(form.firstName) }}
            </div>
            <div class=\"form-group\">
                <label for=\"lastName\">{{ 'Last name'|trans }}</label>
                {{ form_widget(form.lastName, { 'attr': { 'class': 'form-control'} }) }} 
                {{ form_errors(form.lastName) }}
            </div>
            <div class=\"form-group\">
                <label for=\"password\">{{ 'Password'|trans }}</label>
                    {{ form_widget(form.password.first, { 'attr': { 'class': 'form-control'} }) }} 
                    {{ form_errors(form.password.first) }}
            </div>
            <div class=\"form-group\">
                <label for=\"repeat_password\">{{ 'Repeat Password'|trans }}</label>
                {{ form_widget(form.password.second, { 'attr': { 'class': 'form-control'} }) }} 
                {{ form_errors(form.password.second) }}
            </div>
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
                    {{ 'Register'|trans }} !
                </button>
            </div>
        {{ form_end(form) }}
    </div>
</div>
<script src=\"{{ asset('assets/js/core/jquery.3.2.1.min.js') }}\"></script>
<script src=\"{{ asset('assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}\"></script>
<script src=\"{{ asset('assets/js/core/popper.min.js') }}\"></script>
<script src=\"{{ asset('assets/js/core/bootstrap.min.js') }}\"></script>
<script src=\"{{ asset('assets/js/ready.js') }}\"></script>
</body>
</html>", "account/register.html.twig", "/Users/amine/Projects/manageTicket/templates/account/register.html.twig");
    }
}
