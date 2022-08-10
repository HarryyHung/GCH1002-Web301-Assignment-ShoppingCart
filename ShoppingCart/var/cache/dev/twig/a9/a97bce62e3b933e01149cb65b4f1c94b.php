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

/* employee/detail.html.twig */
class __TwigTemplate_8951f41335569922a6ff8ee3b1ea015b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

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
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employee/detail.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employee/detail.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "employee/detail.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "   <div class=\"container col-md-5 text-center mb-3\">
      <div class=\"row\">
         ";
        // line 8
        echo "         <div class=\"col\">
            <h1>Email: ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["employee"]) || array_key_exists("employee", $context) ? $context["employee"] : (function () { throw new RuntimeError('Variable "employee" does not exist.', 9, $this->source); })()), "email", [], "any", false, false, false, 9), "html", null, true);
        echo "</h1>
            <h2>Name: ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["employee"]) || array_key_exists("employee", $context) ? $context["employee"] : (function () { throw new RuntimeError('Variable "employee" does not exist.', 10, $this->source); })()), "name", [], "any", false, false, false, 10), "html", null, true);
        echo " \$</h2>
            <h2>Position: ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["employee"]) || array_key_exists("employee", $context) ? $context["employee"] : (function () { throw new RuntimeError('Variable "employee" does not exist.', 11, $this->source); })()), "position", [], "any", false, false, false, 11), "html", null, true);
        echo "</h2>
            <h2>PhoneNumber: ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["employee"]) || array_key_exists("employee", $context) ? $context["employee"] : (function () { throw new RuntimeError('Variable "employee" does not exist.', 12, $this->source); })()), "phone", [], "any", false, false, false, 12), "html", null, true);
        echo "</h2>
         </div>
      </div>
   </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "employee/detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 12,  83 => 11,  79 => 10,  75 => 9,  72 => 8,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block body %}
   <div class=\"container col-md-5 text-center mb-3\">
      <div class=\"row\">
         {# <div class=\"col\">
            <img src=\"{{ employee.image }}\" width=\"300\" height=\"400\" />
         </div> #}
         <div class=\"col\">
            <h1>Email: {{ employee.email }}</h1>
            <h2>Name: {{ employee.name }} \$</h2>
            <h2>Position: {{ employee.position }}</h2>
            <h2>PhoneNumber: {{ employee.phone}}</h2>
         </div>
      </div>
   </div>
{% endblock %}", "employee/detail.html.twig", "C:\\Users\\buidu\\OneDrive\\Documents\\GitHub\\GCH1002-Web301-Assignment-ShoppingCart\\ShoppingCart\\templates\\employee\\detail.html.twig");
    }
}
