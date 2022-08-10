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

/* home/checkout.html.twig */
class __TwigTemplate_2407b6ac9384cf96c1f6ab2b628be00a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/checkout.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/checkout.html.twig"));

        $this->parent = $this->loadTemplate("nav.html.twig", "home/checkout.html.twig", 1);
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

        echo "Checkout
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
        echo "\t<div class=\"content\">


\t\t<div class=\"content\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<h1 style=\"font-size: 7em;background: #0e0e0e;color: rgb(213,213,213);width: 6.05em;\">Invoice</h1>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<h1 style=\"font-size: 1.5em;background: #ffffff;color: rgb(48,48,48);width: 24.05em;margin-bottom: 2em;\">Invoice number:
\t\t\t\t\t\t";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["orderInfo"]) || array_key_exists("orderInfo", $context) ? $context["orderInfo"] : (function () { throw new RuntimeError('Variable "orderInfo" does not exist.', 19, $this->source); })()), "orderID", [], "any", false, false, false, 19), "html", null, true);
        echo "</h1>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<h1 style=\"font-size: 2.5em;background: #ffffff;color: rgb(48,48,48);width: 24.05em;font-weight: bold;\">Billing for</h1>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<h1 style=\"font-size: 1.5em;background: #ffffff;color: rgb(48,48,48);width: 24.05em;\">Name:
\t\t\t\t\t\t";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["orderInfo"]) || array_key_exists("orderInfo", $context) ? $context["orderInfo"] : (function () { throw new RuntimeError('Variable "orderInfo" does not exist.', 30, $this->source); })()), "email", [], "any", false, false, false, 30), "name", [], "any", false, false, false, 30), "html", null, true);
        echo "</h1>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<h1 style=\"font-size: 1.5em;background: #ffffff;color: rgb(48,48,48);width: 24.05em;\">Email address:
\t\t\t\t\t\t";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["orderInfo"]) || array_key_exists("orderInfo", $context) ? $context["orderInfo"] : (function () { throw new RuntimeError('Variable "orderInfo" does not exist.', 36, $this->source); })()), "email", [], "any", false, false, false, 36), "html", null, true);
        echo "</h1>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<h1 style=\"font-size: 1.5em;background: #ffffff;color: rgb(48,48,48);width: 24.05em;\">Phone number:
\t\t\t\t\t\t";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["orderInfo"]) || array_key_exists("orderInfo", $context) ? $context["orderInfo"] : (function () { throw new RuntimeError('Variable "orderInfo" does not exist.', 42, $this->source); })()), "email", [], "any", false, false, false, 42), "phoneNumber", [], "any", false, false, false, 42), "html", null, true);
        echo "</h1>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t\t\t<thead class=\"invoice-head\">
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th>Product Code</th>
\t\t\t\t\t\t\t\t\t<th>Product Name</th>
\t\t\t\t\t\t\t\t\t<th>Unit Price</th>
\t\t\t\t\t\t\t\t\t<th>Quantity</th>
\t\t\t\t\t\t\t\t\t<th>Total</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>

\t\t\t\t\t\t\t\t";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["orderInfo"]) || array_key_exists("orderInfo", $context) ? $context["orderInfo"] : (function () { throw new RuntimeError('Variable "orderInfo" does not exist.', 60, $this->source); })()), "getProductID", [], "method", false, false, false, 60));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 61
            echo "\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "productID", [], "any", false, false, false, 62), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 63), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 64), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["orderInfo"]) || array_key_exists("orderInfo", $context) ? $context["orderInfo"] : (function () { throw new RuntimeError('Variable "orderInfo" does not exist.', 65, $this->source); })()), "quantity", [], "any", false, false, false, 65), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>";
            // line 66
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 66) * twig_get_attribute($this->env, $this->source, (isset($context["orderInfo"]) || array_key_exists("orderInfo", $context) ? $context["orderInfo"] : (function () { throw new RuntimeError('Variable "orderInfo" does not exist.', 66, $this->source); })()), "quantity", [], "any", false, false, false, 66)), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col d-xxl-flex justify-content-xxl-end\">
\t\t\t\t\t<h1 style=\"margin-top: 1em;font-weight: bold;\">Subtotal: \$";
        // line 76
        echo twig_escape_filter($this->env, (isset($context["subtotal"]) || array_key_exists("subtotal", $context) ? $context["subtotal"] : (function () { throw new RuntimeError('Variable "subtotal" does not exist.', 76, $this->source); })()), "html", null, true);
        echo "</h1>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "home/checkout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 76,  188 => 69,  179 => 66,  175 => 65,  171 => 64,  167 => 63,  163 => 62,  160 => 61,  156 => 60,  135 => 42,  126 => 36,  117 => 30,  103 => 19,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"nav.html.twig\" %}

{% block title %}Checkout
{% endblock %}

{% block body %}
\t<div class=\"content\">


\t\t<div class=\"content\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<h1 style=\"font-size: 7em;background: #0e0e0e;color: rgb(213,213,213);width: 6.05em;\">Invoice</h1>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<h1 style=\"font-size: 1.5em;background: #ffffff;color: rgb(48,48,48);width: 24.05em;margin-bottom: 2em;\">Invoice number:
\t\t\t\t\t\t{{ orderInfo.orderID }}</h1>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<h1 style=\"font-size: 2.5em;background: #ffffff;color: rgb(48,48,48);width: 24.05em;font-weight: bold;\">Billing for</h1>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<h1 style=\"font-size: 1.5em;background: #ffffff;color: rgb(48,48,48);width: 24.05em;\">Name:
\t\t\t\t\t\t{{ orderInfo.email.name }}</h1>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<h1 style=\"font-size: 1.5em;background: #ffffff;color: rgb(48,48,48);width: 24.05em;\">Email address:
\t\t\t\t\t\t{{ orderInfo.email }}</h1>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<h1 style=\"font-size: 1.5em;background: #ffffff;color: rgb(48,48,48);width: 24.05em;\">Phone number:
\t\t\t\t\t\t{{ orderInfo.email.phoneNumber }}</h1>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t\t\t<thead class=\"invoice-head\">
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th>Product Code</th>
\t\t\t\t\t\t\t\t\t<th>Product Name</th>
\t\t\t\t\t\t\t\t\t<th>Unit Price</th>
\t\t\t\t\t\t\t\t\t<th>Quantity</th>
\t\t\t\t\t\t\t\t\t<th>Total</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>

\t\t\t\t\t\t\t\t{% for product in orderInfo.getProductID() %}
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>{{ product.productID }}</td>
\t\t\t\t\t\t\t\t\t\t<td>{{product.name}}</td>
\t\t\t\t\t\t\t\t\t\t<td>{{product.price}}</td>
\t\t\t\t\t\t\t\t\t\t<td>{{ orderInfo.quantity }}</td>
\t\t\t\t\t\t\t\t\t\t<td>{{ product.price * orderInfo.quantity }}</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col d-xxl-flex justify-content-xxl-end\">
\t\t\t\t\t<h1 style=\"margin-top: 1em;font-weight: bold;\">Subtotal: \${{subtotal}}</h1>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}
", "home/checkout.html.twig", "C:\\Users\\buidu\\OneDrive\\Documents\\GitHub\\GCH1002-Web301-Assignment-ShoppingCart\\ShoppingCart\\templates\\home\\checkout.html.twig");
    }
}
