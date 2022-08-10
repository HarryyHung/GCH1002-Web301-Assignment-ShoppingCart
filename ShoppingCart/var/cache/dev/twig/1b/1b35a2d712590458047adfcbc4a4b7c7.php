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

/* security/login.html.twig */
class __TwigTemplate_c456cc00c8d1fbb381caf751cce71b35 extends Template
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
        return "nav.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("nav.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Log in!
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
\t<div class=\"content\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xxl-6 d-xxl-flex justify-content-xxl-center align-items-xxl-center\"><img class=\"d-flex d-xxl-flex justify-content-center align-items-center align-content-center justify-content-xxl-center align-items-xxl-center\" src=\"https://i.pinimg.com/originals/55/6b/f9/556bf9796cce36190590d13a9b457960.jpg\" style=\"width: 100%;height: auto;border-width: 3px;border-style: solid;\"></div>
\t\t\t<div class=\"col\">
\t\t\t\t<form method=\"post\">
\t\t\t\t\t";
        // line 13
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 13, $this->source); })())) {
            // line 14
            echo "\t\t\t\t\t\t<div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 14, $this->source); })()), "messageKey", [], "any", false, false, false, 14), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 14, $this->source); })()), "messageData", [], "any", false, false, false, 14), "security"), "html", null, true);
            echo "</div>
\t\t\t\t\t";
        }
        // line 16
        echo "
\t\t\t\t\t";
        // line 17
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "user", [], "any", false, false, false, 17)) {
            // line 18
            echo "\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\tYou are logged in as
\t\t\t\t\t\t\t";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "user", [], "any", false, false, false, 20), "username", [], "any", false, false, false, 20), "html", null, true);
            echo ",
\t\t\t\t\t\t\t<a href=\"";
            // line 21
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 24
        echo "
\t\t\t\t\t<h1 style=\"text-align: center;margin-bottom: 1em;\">Please sign in</h1>
\t\t\t\t\t<label class=\"form-label fs-4\" for=\"inputEmail\">Email</label>
\t\t\t\t\t<input class=\"form-control form-control-lg input\" type=\"email\" placeholder=\"";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 27, $this->source); })()), "html", null, true);
        echo "\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" required autofocus>
\t\t\t\t\t<label class=\"form-label fs-4\" for=\"inputPassword\">Password</label>
\t\t\t\t\t<input class=\"form-control form-control-lg input\" type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required>

\t\t\t\t\t<input
\t\t\t\t\ttype=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">

\t\t\t\t\t";
        // line 44
        echo "
\t\t\t\t\t<button class=\"button\" style=\"width: 100%; margin-bottom:2em; margin-top:1em\" type=\"submit\">
\t\t\t\t\t\tSign in
\t\t\t\t\t</button>
\t\t\t\t\t<a class=\"button\" href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\">Register</a>

\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 48,  142 => 44,  137 => 32,  129 => 27,  124 => 24,  118 => 21,  114 => 20,  110 => 18,  108 => 17,  105 => 16,  99 => 14,  97 => 13,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'nav.html.twig' %}

{% block title %}Log in!
{% endblock %}

{% block body %}

\t<div class=\"content\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xxl-6 d-xxl-flex justify-content-xxl-center align-items-xxl-center\"><img class=\"d-flex d-xxl-flex justify-content-center align-items-center align-content-center justify-content-xxl-center align-items-xxl-center\" src=\"https://i.pinimg.com/originals/55/6b/f9/556bf9796cce36190590d13a9b457960.jpg\" style=\"width: 100%;height: auto;border-width: 3px;border-style: solid;\"></div>
\t\t\t<div class=\"col\">
\t\t\t\t<form method=\"post\">
\t\t\t\t\t{% if error %}
\t\t\t\t\t\t<div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
\t\t\t\t\t{% endif %}

\t\t\t\t\t{% if app.user %}
\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\tYou are logged in as
\t\t\t\t\t\t\t{{ app.user.username }},
\t\t\t\t\t\t\t<a href=\"{{ path('app_logout') }}\">Logout</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}

\t\t\t\t\t<h1 style=\"text-align: center;margin-bottom: 1em;\">Please sign in</h1>
\t\t\t\t\t<label class=\"form-label fs-4\" for=\"inputEmail\">Email</label>
\t\t\t\t\t<input class=\"form-control form-control-lg input\" type=\"email\" placeholder=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" required autofocus>
\t\t\t\t\t<label class=\"form-label fs-4\" for=\"inputPassword\">Password</label>
\t\t\t\t\t<input class=\"form-control form-control-lg input\" type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required>

\t\t\t\t\t<input
\t\t\t\t\ttype=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">

\t\t\t\t\t{#
\t\t\t\t\t        Uncomment this section and add a remember_me option below your firewall to activate remember me functionality.
\t\t\t\t\t        See https://symfony.com/doc/current/security/remember_me.html
\t\t\t\t\t
\t\t\t\t\t        <div class=\"checkbox mb-3\">
\t\t\t\t\t            <label>
\t\t\t\t\t                <input type=\"checkbox\" name=\"_remember_me\"> Remember me
\t\t\t\t\t            </label>
\t\t\t\t\t        </div>
\t\t\t\t\t    #}

\t\t\t\t\t<button class=\"button\" style=\"width: 100%; margin-bottom:2em; margin-top:1em\" type=\"submit\">
\t\t\t\t\t\tSign in
\t\t\t\t\t</button>
\t\t\t\t\t<a class=\"button\" href=\"{{path('app_register')}}\">Register</a>

\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>

{% endblock %}
", "security/login.html.twig", "C:\\Users\\buidu\\OneDrive\\Documents\\GitHub\\GCH1002-Web301-Assignment-ShoppingCart\\ShoppingCart\\templates\\security\\login.html.twig");
    }
}
