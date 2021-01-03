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

/* project/edit.html.twig */
class __TwigTemplate_afee2ab28fbe44f134dcdf7f0ccdee5b6f404b8ed79b77b9384a4553bdaae7fa extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "project/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "project/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "project/edit.html.twig", 1);
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

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("edit_project"), "html", null, true);
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
        $this->loadTemplate("partial/logoheader.html.twig", "project/edit.html.twig", 9)->display($context);
        // line 10
        echo "\t\t\t<!-- End Logo Header -->
            ";
        // line 11
        $this->loadTemplate("partial/navbar.html.twig", "project/edit.html.twig", 11)->display($context);
        // line 12
        echo "        </div>
        ";
        // line 13
        $this->loadTemplate("partial/sidebar.html.twig", "project/edit.html.twig", 13)->display($context);
        // line 14
        echo "\t\t<div class=\"main-panel\">
\t\t\t<div class=\"content\">
\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t<div class=\"page-header\">
\t\t\t\t\t\t<h4 class=\"page-title\">";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Project"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Projects"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Project"), "html", null, true);
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
\t\t\t\t\t\t\t\t\t\t<label for=\"name\" class=\"col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right\">";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Name"), "html", null, true);
        echo " </label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-9 col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
                                                ";
        // line 49
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 49, $this->source); })()), "userId", [], "any", false, false, false, 49), "id", [], "any", false, false, false, 49), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "user", [], "any", false, false, false, 49), "id", [], "any", false, false, false, 49)))) {
            // line 50
            echo "\t\t\t\t\t\t\t\t\t\t\t\t    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "name", [], "any", false, false, false, 50), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t    <label class=\"text-danger\">";
            // line 51
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "name", [], "any", false, false, false, 51), 'errors');
            echo "</label>
                                                ";
        } else {
            // line 53
            echo "                                                    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "name", [], "any", false, false, false, 53), 'widget', ["attr" => ["class" => "form-control", "disabled" => "true"]]);
            echo "
                                                ";
        }
        // line 55
        echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
                                    ";
        // line 58
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 58, $this->source); })()), "userId", [], "any", false, false, false, 58), "id", [], "any", false, false, false, 58), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 58, $this->source); })()), "user", [], "any", false, false, false, 58), "id", [], "any", false, false, false, 58)))) {
            // line 59
            echo "                                    <div class=\"form-group form-show-validation row\">
\t\t\t\t\t\t\t\t\t\t<label for=\"name\" class=\"col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right\">";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Collaborater"), "html", null, true);
            echo " </label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-9 col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
                                            <div class=\"input-group-prepend\">
                                                <span class=\"input-group-text\" id=\"username-addon\">@</span>
                                            </div>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Please enter email"), "html", null, true);
            echo "\" aria-label=\"username\" aria-describedby=\"username-addon\" name=\"email\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"text-danger\"></label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
                                    ";
        }
        // line 72
        echo "\t\t\t\t\t\t\t\t\t<div class=\"card-action\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
                                                ";
        // line 75
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 75, $this->source); })()), "userId", [], "any", false, false, false, 75), "id", [], "any", false, false, false, 75), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 75, $this->source); })()), "user", [], "any", false, false, false, 75), "id", [], "any", false, false, false, 75)))) {
            // line 76
            echo "\t\t\t\t\t\t\t\t\t\t\t\t    <input class=\"btn btn-success\" type=\"submit\" value=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("edit"), "html", null, true);
            echo " \">
                                                ";
        }
        // line 78
        echo "\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-danger\" href=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 78, $this->source); })()), "request", [], "any", false, false, false, 78), "headers", [], "any", false, false, false, 78), "get", [0 => "referer"], "method", false, false, false, 78), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel"), "html", null, true);
        echo "</a>
\t\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        // line 82
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), 'form_end');
        echo "
\t\t\t\t\t\t\t</div>\t\t\t\t\t\t
        \t\t\t\t<div class=\"card-body\">

\t\t\t\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t\t\t\t<table id=\"add-row\" class=\"display table table-striped table-hover\" >
\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email"), "html", null, true);
        echo "</th>
                                                    <th>";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Role"), "html", null, true);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th style=\"width: 10%\">";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action"), "html", null, true);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email"), "html", null, true);
        echo "</th>
                                                    <th>";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Role"), "html", null, true);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th style=\"width: 10%\">";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action"), "html", null, true);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t</tfoot>
\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 103, $this->source); })()), "user", [], "any", false, false, false, 103));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 104
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 105
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 105), "html", null, true);
            echo "</td>
                                                        ";
            // line 106
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 106, $this->source); })()), "userId", [], "any", false, false, false, 106), "id", [], "any", false, false, false, 106), twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 106)))) {
                echo "\t
                                                            <td>";
                // line 107
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("owner"), "html", null, true);
                echo "</td>
                                                        ";
            } else {
                // line 108
                echo "  
                                                            <td>";
                // line 109
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Collaborater"), "html", null, true);
                echo "</td>
                                                        ";
            }
            // line 110
            echo "   
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-button-action\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 113
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 113, $this->source); })()), "userId", [], "any", false, false, false, 113), "id", [], "any", false, false, false, 113), twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 113)))) {
                // line 114
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_project_delete_member", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 114), "project_id" => twig_get_attribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 114, $this->source); })()), "id", [], "any", false, false, false, 114)]), "html", null, true);
                echo "\" data-toggle=\"tooltip\" title=\"\" class=\"btn btn-link btn-danger\" data-original-title=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("remove"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"la la-times\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 118
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>\t
\t\t\t\t\t\t\t\t\t\t\t    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        echo "\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
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
        return "project/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  326 => 121,  317 => 118,  307 => 114,  305 => 113,  300 => 110,  295 => 109,  292 => 108,  287 => 107,  283 => 106,  279 => 105,  276 => 104,  272 => 103,  265 => 99,  261 => 98,  257 => 97,  249 => 92,  245 => 91,  241 => 90,  230 => 82,  220 => 78,  214 => 76,  212 => 75,  207 => 72,  198 => 66,  189 => 60,  186 => 59,  184 => 58,  179 => 55,  173 => 53,  168 => 51,  163 => 50,  161 => 49,  155 => 46,  152 => 45,  147 => 42,  135 => 35,  126 => 29,  112 => 18,  106 => 14,  104 => 13,  101 => 12,  99 => 11,  96 => 10,  94 => 9,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ 'edit_project'|trans }} {% endblock %}

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
\t\t\t\t\t\t<h4 class=\"page-title\">{{ 'Project'|trans }} </h4>
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
\t\t\t\t\t\t\t\t<a href=\"#\">{{ 'Projects'|trans }} </a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"separator\">
\t\t\t\t\t\t\t\t<i class=\"flaticon-right-arrow\"></i>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"#\">{{ 'edit'|trans }} {{ 'Project'|trans }} </a>
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
\t\t\t\t\t\t\t\t\t\t<label for=\"name\" class=\"col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right\">{{ 'Name'|trans }} </label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-9 col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
                                                {% if project.userId.id == app.user.id %}
\t\t\t\t\t\t\t\t\t\t\t\t    {{ form_widget(form.name, { 'attr': { 'class': 'form-control'}}) }}
\t\t\t\t\t\t\t\t\t\t\t\t    <label class=\"text-danger\">{{ form_errors(form.name)}}</label>
                                                {% else %}
                                                    {{ form_widget(form.name, { 'attr': { 'class': 'form-control', 'disabled': 'true'}}) }}
                                                {% endif %}
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
                                    {% if project.userId.id == app.user.id %}
                                    <div class=\"form-group form-show-validation row\">
\t\t\t\t\t\t\t\t\t\t<label for=\"name\" class=\"col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right\">{{ 'Collaborater'|trans }} </label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-9 col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
                                            <div class=\"input-group-prepend\">
                                                <span class=\"input-group-text\" id=\"username-addon\">@</span>
                                            </div>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"{{ 'Please enter email'|trans }}\" aria-label=\"username\" aria-describedby=\"username-addon\" name=\"email\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"text-danger\"></label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
                                    {% endif %}
\t\t\t\t\t\t\t\t\t<div class=\"card-action\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
                                                {% if project.userId.id == app.user.id %}
\t\t\t\t\t\t\t\t\t\t\t\t    <input class=\"btn btn-success\" type=\"submit\" value=\"{{ 'edit'|trans }} \">
                                                {% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-danger\" href=\"{{ app.request.headers.get('referer') }}\">{{ 'Cancel'|trans }}</a>
\t\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t{{ form_end(form)}}
\t\t\t\t\t\t\t</div>\t\t\t\t\t\t
        \t\t\t\t<div class=\"card-body\">

\t\t\t\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t\t\t\t<table id=\"add-row\" class=\"display table table-striped table-hover\" >
\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>{{ 'Email'|trans }}</th>
                                                    <th>{{ 'Role'|trans }}</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th style=\"width: 10%\">{{ 'action'|trans }}</th>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>{{ 'Email'|trans }}</th>
                                                    <th>{{ 'Role'|trans }}</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th style=\"width: 10%\">{{ 'action'|trans }}</th>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t</tfoot>
\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t{% for user in project.user %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>{{ user.email }}</td>
                                                        {% if project.userId.id == user.id %}\t
                                                            <td>{{ 'owner'|trans }}</td>
                                                        {% else %}  
                                                            <td>{{ 'Collaborater'|trans }}</td>
                                                        {% endif %}   
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-button-action\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if project.userId.id != user.id %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_project_delete_member', { 'id': user.id, 'project_id': project.id}) }}\" data-toggle=\"tooltip\" title=\"\" class=\"btn btn-link btn-danger\" data-original-title=\"{{ 'remove'|trans }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"la la-times\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>\t
\t\t\t\t\t\t\t\t\t\t\t    {% endfor %}\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
            </div>\t\t\t
\t\t</div>        
    </div>
{% endblock %}
", "project/edit.html.twig", "/Users/amine/Projects/manageTicket/templates/project/edit.html.twig");
    }
}
