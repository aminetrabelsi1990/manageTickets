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

/* account/profil.html.twig */
class __TwigTemplate_2d30923edb9b713cae87c17ee171289b4568b93fc7be324d017854c23baac131 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/profil.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/profil.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "account/profil.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("edit_profil"), "html", null, true);
        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"wrapper\">
        <div class=\"main-header\">
\t\t\t<!-- Logo Header -->
\t\t\t";
        // line 9
        $this->loadTemplate("partial/logoheader.html.twig", "account/profil.html.twig", 9)->display($context);
        // line 10
        echo "\t\t\t<!-- End Logo Header -->
            ";
        // line 11
        $this->loadTemplate("partial/navbar.html.twig", "account/profil.html.twig", 11)->display($context);
        // line 12
        echo "        </div>
        ";
        // line 13
        $this->loadTemplate("partial/sidebar.html.twig", "account/profil.html.twig", 13)->display($context);
        // line 14
        echo "\t\t<div class=\"main-panel\">
\t\t\t<div class=\"content\">
\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t<div class=\"page-header\">
\t\t\t\t\t\t<h4 class=\"page-title\">";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Profil"), "html", null, true);
        echo " </h4>
\t\t\t\t\t\t<ul class=\"breadcrumbs\">
\t\t\t\t\t\t\t<li class=\"nav-home\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"flaticon-home\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"separator\">
\t\t\t\t\t\t\t\t<i class=\"flaticon-right-arrow\"></i>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"#\">";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Profil"), "html", null, true);
        echo " </a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"separator\">
\t\t\t\t\t\t\t\t<i class=\"flaticon-right-arrow\"></i>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"#\">";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("edit"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Profil"), "html", null, true);
        echo " </a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t";
        // line 42
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), 'form_start');
        echo "
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t";
        // line 45
        echo "\t\t\t\t\t\t\t\t\t<div class=\"form-group form-show-validation row\">
\t\t\t\t\t\t\t\t\t\t<label for=\"email\" class=\"col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right\">";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email"), "html", null, true);
        echo " </label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-9 col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "email", [], "any", false, false, false, 49), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"text-danger\">";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "email", [], "any", false, false, false, 50), 'errors');
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
                                    </div>
                                    <div class=\"form-group form-show-validation row\">
\t\t\t\t\t\t\t\t\t\t<label for=\"firstName\" class=\"col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right\">";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("First name"), "html", null, true);
        echo " </label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-9 col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "firstName", [], "any", false, false, false, 58), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"text-danger\">";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "firstName", [], "any", false, false, false, 59), 'errors');
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
                                    </div>
                                    <div class=\"form-group form-show-validation row\">
\t\t\t\t\t\t\t\t\t\t<label for=\"lastName\" class=\"col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right\">";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Last name"), "html", null, true);
        echo " </label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-9 col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "lastName", [], "any", false, false, false, 67), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"text-danger\">";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "lastName", [], "any", false, false, false, 68), 'errors');
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
                                    </div>
                                    <div class=\"form-group form-show-validation row\">
\t\t\t\t\t\t\t\t\t\t<label for=\"lastName\" class=\"col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right\">";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Password"), "html", null, true);
        echo " </label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-9 col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "password", [], "any", false, false, false, 76), "first", [], "any", false, false, false, 76), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"text-danger\">";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "password", [], "any", false, false, false, 77), "first", [], "any", false, false, false, 77), 'errors');
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
                                    </div>
                                    <div class=\"form-group form-show-validation row\">
\t\t\t\t\t\t\t\t\t\t<label for=\"lastName\" class=\"col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right\">";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Repeat Password"), "html", null, true);
        echo " </label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-9 col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "password", [], "any", false, false, false, 85), "second", [], "any", false, false, false, 85), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"text-danger\">";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "password", [], "any", false, false, false, 86), "second", [], "any", false, false, false, 86), 'errors');
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"card-action\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"btn btn-success\" type=\"submit\" value=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("edit"), "html", null, true);
        echo " \">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-danger\" href=\"";
        // line 94
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 94, $this->source); })()), "request", [], "any", false, false, false, 94), "headers", [], "any", false, false, false, 94), "get", [0 => "referer"], "method", false, false, false, 94), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel"), "html", null, true);
        echo "</a>
\t\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        // line 98
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), 'form_end');
        echo "
\t\t\t\t\t\t\t</div>\t\t\t\t\t\t
        \t\t\t\t";
        // line 101
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
            </div>\t\t\t
\t\t</div>        
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "account/profil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  265 => 101,  260 => 98,  251 => 94,  247 => 93,  237 => 86,  233 => 85,  227 => 82,  219 => 77,  215 => 76,  209 => 73,  201 => 68,  197 => 67,  191 => 64,  183 => 59,  179 => 58,  173 => 55,  165 => 50,  161 => 49,  155 => 46,  152 => 45,  147 => 42,  135 => 35,  126 => 29,  112 => 18,  106 => 14,  104 => 13,  101 => 12,  99 => 11,  96 => 10,  94 => 9,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ 'edit_profil'|trans }} {% endblock %}

{% block body %}
    <div class=\"wrapper\">
        <div class=\"main-header\">
\t\t\t<!-- Logo Header -->
\t\t\t{% include 'partial/logoheader.html.twig' %}
\t\t\t<!-- End Logo Header -->
            {% include 'partial/navbar.html.twig' %}
        </div>
        {% include 'partial/sidebar.html.twig' %}
\t\t<div class=\"main-panel\">
\t\t\t<div class=\"content\">
\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t<div class=\"page-header\">
\t\t\t\t\t\t<h4 class=\"page-title\">{{ 'Profil'|trans }} </h4>
\t\t\t\t\t\t<ul class=\"breadcrumbs\">
\t\t\t\t\t\t\t<li class=\"nav-home\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"flaticon-home\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"separator\">
\t\t\t\t\t\t\t\t<i class=\"flaticon-right-arrow\"></i>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"#\">{{ 'Profil'|trans }} </a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"separator\">
\t\t\t\t\t\t\t\t<i class=\"flaticon-right-arrow\"></i>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"#\">{{ 'edit'|trans }} {{ 'Profil'|trans }} </a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t{{ form_start(form)}}
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t{# New form #}
\t\t\t\t\t\t\t\t\t<div class=\"form-group form-show-validation row\">
\t\t\t\t\t\t\t\t\t\t<label for=\"email\" class=\"col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right\">{{ 'Email'|trans }} </label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-9 col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(form.email, { 'attr': { 'class': 'form-control'}}) }}
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"text-danger\">{{ form_errors(form.email)}}</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
                                    </div>
                                    <div class=\"form-group form-show-validation row\">
\t\t\t\t\t\t\t\t\t\t<label for=\"firstName\" class=\"col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right\">{{ 'First name'|trans }} </label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-9 col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(form.firstName, { 'attr': { 'class': 'form-control'}}) }}
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"text-danger\">{{ form_errors(form.firstName)}}</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
                                    </div>
                                    <div class=\"form-group form-show-validation row\">
\t\t\t\t\t\t\t\t\t\t<label for=\"lastName\" class=\"col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right\">{{ 'Last name'|trans }} </label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-9 col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(form.lastName, { 'attr': { 'class': 'form-control'}}) }}
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"text-danger\">{{ form_errors(form.lastName)}}</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
                                    </div>
                                    <div class=\"form-group form-show-validation row\">
\t\t\t\t\t\t\t\t\t\t<label for=\"lastName\" class=\"col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right\">{{ 'Password'|trans }} </label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-9 col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(form.password.first, { 'attr': { 'class': 'form-control'}}) }}
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"text-danger\">{{ form_errors(form.password.first)}}</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
                                    </div>
                                    <div class=\"form-group form-show-validation row\">
\t\t\t\t\t\t\t\t\t\t<label for=\"lastName\" class=\"col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right\">{{ 'Repeat Password'|trans }} </label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-9 col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(form.password.second, { 'attr': { 'class': 'form-control'}}) }}
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"text-danger\">{{ form_errors(form.password.second)}}</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"card-action\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"btn btn-success\" type=\"submit\" value=\"{{ 'edit'|trans }} \">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-danger\" href=\"{{ app.request.headers.get('referer') }}\">{{ 'Cancel'|trans }}</a>
\t\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t{{ form_end(form)}}
\t\t\t\t\t\t\t</div>\t\t\t\t\t\t
        \t\t\t\t{# end form #}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
            </div>\t\t\t
\t\t</div>        
    </div>
{% endblock %}
", "account/profil.html.twig", "/Users/amine/Projects/manageTicket/templates/account/profil.html.twig");
    }
}
